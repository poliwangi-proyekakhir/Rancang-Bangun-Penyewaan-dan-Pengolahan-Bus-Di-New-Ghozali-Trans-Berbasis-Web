<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_keuangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $header['titlepage'] = 'LAPORAN KEUANGAN';
		$this->template->load('template','admin/lap_keuangan', [], $header);
    }

 }  

?>