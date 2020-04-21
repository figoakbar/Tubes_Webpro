<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class HomeController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('HomeModel');    
    }
 
    public function index()
    {
        $this->load->view('Home.php');
    }

    function logout()  
      {  
           $this->session->sess_destroy();  
           redirect('LoginController');  
      }  
}