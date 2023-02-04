<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Login extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('util');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        //$this->isLoggedIn();
        $this->global['pageTitle'] = "Login : " . PROYECTO;
        $this->loadViews("login", $this->global, "", NULL);
    }
    public function registro()
    {
        //$this->isLoggedIn();
        $this->global['pageTitle'] = "Registro : " . PROYECTO;
        $this->loadViews("registro", $this->global, "", NULL);
    }

    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            $this->load->view('login');
        } else {
            redirect('/dashboard');
        }
    }


    /**
     * This function used to logged in user
     */
    public function loginMe()
    {
        // $this->load->library('form_validation');

        // //$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        // $this->form_validation->set_rules('clave', 'Password', 'required|max_length[32]');

        // if ($this->form_validation->run() == FALSE) {
        //     $this->index();
        // } else {
        $usuario = strtolower($this->security->xss_clean($this->input->post('email')));
        $password = $this->input->post('password');
        $password = $this->util->encryption($password);


        // echo json_encode(array(
        //     "status" => false,
        //     "message" => $this->util->decryption("bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09"),
        // ));
        // return;
        $result = $this->login_model->loginMe($usuario, $password);

        if (!empty($result)) {

            $sessionArray = array(
                'cod_usuario' => $result->cod_usuario,
                'nombre' => $result->nombre,
                'usuario' => $result->nombre . " " . $result->apellido,
                'tipo_usuario' => $result->tipo_usurio,
                'isLoggedIn' => TRUE,
            );
            $this->session->set_userdata($sessionArray);

            //unset($sessionArray['idusuario'], $sessionArray['isLoggedIn'], $sessionArray['lastLogin']);

            //$loginInfo = array("idusuario" => $result->idusuario, "usuario" => $result->usuario, "machineIp" => $_SERVER['REMOTE_ADDR'], "userAgent" => getBrowserAgent(), "agentString" => $this->agent->agent_string(), "platform" => $this->agent->platform());
            //$this->login_model->lastLogin($loginInfo);

            // redirect('/');
            echo json_encode(array(
                "status" => true,
                "message" => "",
            ));
        } else {
            // $this->session->set_flashdata('error', 'usuario no encontrado');
            // $this->index();
            echo json_encode(array(
                "status" => false,
                "message" => "usuario no encontrado",
            ));
        }
        //}
    }

    /**
     * This function used to load forgot password view
     */
    public function forgotPassword()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            $this->load->view('forgotPassword');
        } else {
            redirect('/dashboard');
        }
    }

    /**
     * This function used to generate reset password request link
     */
    function resetPasswordUser()
    {
        $status = '';

        $this->load->library('form_validation');

        $this->form_validation->set_rules('login_email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->forgotPassword();
        } else {
            $email = strtolower($this->security->xss_clean($this->input->post('login_email')));

            if ($this->login_model->checkEmailExist($email)) {
                $encoded_email = urlencode($email);

                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum', 15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = getBrowserAgent();
                $data['client_ip'] = $this->input->ip_address();

                $save = $this->login_model->resetPasswordUser($data);

                if ($save) {
                    $data1['reset_link'] = base_url() . "resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->login_model->getCustomerInfoByEmail($email);

                    if (!empty($userInfo)) {
                        $data1["name"] = $userInfo->name;
                        $data1["email"] = $userInfo->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = resetPasswordEmail($data1);

                    if ($sendStatus) {
                        $status = "send";
                        setFlashData($status, "Reset password link sent successfully, please check mails.");
                    } else {
                        $status = "notsend";
                        setFlashData($status, "Email has been failed, try again.");
                    }
                } else {
                    $status = 'unable';
                    setFlashData($status, "It seems an error while sending your details, try again.");
                }
            } else {
                $status = 'invalid';
                setFlashData($status, "This email is not registered with us.");
            }
            redirect('/forgotPassword');
        }
    }

    /**
     * This function used to reset the password 
     * @param string $activation_id : This is unique id
     * @param string $email : This is user email
     */
    function resetPasswordConfirmUser($activation_id, $email)
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);

        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);

        $data['email'] = $email;
        $data['activation_code'] = $activation_id;

        if ($is_correct == 1) {
            $this->load->view('newPassword', $data);
        } else {
            redirect('/login');
        }
    }

    /**
     * This function used to create new password for user
     */
    function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = strtolower($this->input->post("email"));
        $activation_id = $this->input->post("activation_code");

        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        } else {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');

            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);

            if ($is_correct == 1) {
                $this->login_model->createPasswordUser($email, $password);

                $status = 'success';
                $message = 'Password reset successfully';
            } else {
                $status = 'error';
                $message = 'Password reset failed';
            }

            setFlashData($status, $message);

            redirect("/login");
        }
    }
}
