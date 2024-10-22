<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controler extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $model = strtolower(get_class($this));
        if (file_exists(APPPATH . 'models/' . $model . '_model.php')) {
            $this->load->model($model, '_model', $model, true);
        }
    }

    public function view($data)
    {
        $this->load->view('layouts/app', $data);
    }
}

/* End of file MY_Controler.php */
