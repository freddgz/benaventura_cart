<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Contact extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'VenAventura : Inicio';
        $this->loadViews("contactanos", $this->global, NULL, NULL);
    }
}
