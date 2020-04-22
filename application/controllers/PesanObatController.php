<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PesanObatController extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('modelObat');
     
    }
 
    public function index()
    {
        $data['data_jadwal'] = $this->modelObat->getAllData();
        $this->load->view('pesanObat',$data);
    }
}