<?php
/**
 * Created by PhpStorm.
 * User: Diego Sánchez
 * Date: 28/03/2016
 * Time: 11:16 AM
 */

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('home/inc/header_view');
        $this->load->view('home/inc/navbar_view');
        $this->load->view('home/home_view');
        $this->load->view('home/inc/footer_view');
    }

}