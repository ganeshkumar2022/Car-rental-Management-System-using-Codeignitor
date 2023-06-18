<?php
class Checking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('check');
    }
    public function index()
    {       
$data["result"]=$this->check->getImage();
$this->load->view('checking',$data);
    }
}
?>