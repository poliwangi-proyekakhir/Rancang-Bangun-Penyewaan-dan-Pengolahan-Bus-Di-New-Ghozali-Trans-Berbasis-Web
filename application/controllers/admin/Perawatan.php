<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $header['titlepage'] = 'DATA PERAWATAN BUS';
		$this->template->load('template','admin/perawatan', [], $header);
    }

 }  

?>