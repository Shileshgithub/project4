<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('HomeModel');
        $this->form_validation->set_error_delimiters('<div class="text-danger at-1 mb-3">', '</div>');
        
    }

    public function index(){
        $this->load->helper('form');
        $this->load->view('insert');
        

    }
        public function add_data(){
        $this->load->model('HomeModel');
        $this->form_validation->set_rules('name','full name','required|trim');
        if($this->form_validation->run())
        {
            $post=$this->input->post();
           $check= $this->HomeModel->add_data($post);
           if($check){

            redirect('CrudController/all_data');

           }else{

           }
            }else{
            
        }

    }
    public function all_data($id=''){
        if($id!=''){
            $data['arr'] = $this->HomeModel->all_data($id);
             $this->load->view('all_data',$data);
            
             $this->load->view('insert',$data);
            

        }else{
        $data['arr'] = $this->HomeModel->all_data();
        $this->load->view('all_data',$data);
        }
    }   
}

