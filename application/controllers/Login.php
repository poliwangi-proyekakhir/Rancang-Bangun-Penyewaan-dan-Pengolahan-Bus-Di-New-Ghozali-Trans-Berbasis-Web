<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    function index()
    {
                $this->load->view('login');     

    }

    function logout(){
    	
		$this->session->sess_destroy();
    unset($_SESSION['user_signin']);
    redirect('login','refresh');

    } 

 }  

?>