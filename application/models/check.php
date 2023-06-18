<?php
class check extends CI_Model
{
   public function getImage()
   {
    $query=$this->db->get('cars');
    return $query->result();
   } 
}

?>