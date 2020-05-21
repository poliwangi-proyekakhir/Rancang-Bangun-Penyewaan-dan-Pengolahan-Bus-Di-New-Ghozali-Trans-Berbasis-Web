<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_keuangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $header['titlepage'] = 'TRANSAKSI KEUANGAN';
		$this->template->load('template','admin/transaksi_keuangan', [], $header);
    }

 }  

?>