<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function check_login($user_logedin){
  if($user_logedin != TRUE)
      {
                //jika memang session belum terdaftar, maka redirect ke halaman login
                redirect("Login");
      }
}


function random($angka){
	 
			  $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';  
			  $string = '';  
			  for($i = 0; $i < $angka; $i++) {  
			   $pos = rand(0, strlen($karakter)-1);  
			   $string .= $karakter{$pos};  
			  }  
			  return $string;  
			

	}



 function send_email(){
      $ci =& get_instance();
      $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://mail.baguswebmaster.com',
             'smtp_user' => 'admin@baguswebmaster.com',
             'smtp_pass' => 'R7M8A40WIN5A',
             'smtp_port' => '465',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        
        return $config;
    }


?>