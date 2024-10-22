<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controler
{

    public function index()
    {
        $data['title']  = 'Homepage';
        $data['page']   = 'pages/home/index';
        $this->view($data);
    }
}

/* End of file Home.php */
