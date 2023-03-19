<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_khairul_Landing extends CI_Controller {


    public function index()
    {
        $this->load->view('landingpage/v_khairul_landingpage');
    }
}
