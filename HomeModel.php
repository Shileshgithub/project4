<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel extends CI_Model{
    public function add_data($post){
     $q =  $this->db->insert('students',$post); 
     
     if($q) {
      return true;
     }else{
      return false;
     }
        
    }
    public function all_data($id=''){
       if($id!=''){
        $q = $this->db->where('id',$id)->get('students');
      if($q->num_rows()){
        return $q->row();
      }else{
        return false;
       }

       }else{
        $q = $this->db->order_by('id','desc')->get('students');
      if($q->num_rows()){
        return $q->result();
        }else{
          return false;
        }
       } 
    }
}