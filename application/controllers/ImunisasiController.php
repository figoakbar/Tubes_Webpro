<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ImunisasiController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('imunisasiModel');
     
    }
 
    public function index(){
        $this->load->view('imunisasi');
    }

}