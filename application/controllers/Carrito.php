<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Carrito extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('servicio_model');
        $this->load->library('util');
    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

        if (empty($this->cart->contents())) redirect("/");
        $this->global['pageTitle'] = "Carrito : " . PROYECTO;
        $this->loadViews("carrito", $this->global, "", NULL);
    }
    public function deleteCart()
    {
        if ($this->input->is_ajax_request() && $this->input->method() == 'post') {
            $this->cart->destroy();
        } else {
            echo 'ajax veya post yapılmadı.';
        }
    }
    public function deleteOneItemInCart()
    {
        if ($this->input->is_ajax_request() && $this->input->method() == 'post') {
            if ($this->cart->remove($this->input->post('rowid')))
                echo json_encode(array(
                    "status" => true,
                    "message" => "Eliminacion satisfactoria",
                ));
            else
                echo json_encode(array(
                    "status" => false,
                    "message" => "error al eliminar un item del carrito",
                ));
        }
    }
}
