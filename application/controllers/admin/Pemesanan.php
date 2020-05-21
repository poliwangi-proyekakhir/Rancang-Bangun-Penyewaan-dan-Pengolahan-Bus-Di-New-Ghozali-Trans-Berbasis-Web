<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $header['titlepage'] = 'DATA PEMESANAN';
		$this->template->load('template','admin/pemesanan', [], $header);
    }

 }  

?>