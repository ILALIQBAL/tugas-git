<?php 
difined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = "halaman depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
}