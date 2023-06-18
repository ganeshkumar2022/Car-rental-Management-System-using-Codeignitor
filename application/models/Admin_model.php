<?php
class Admin_model extends CI_Model
{
    public function checkDetails($email,$password)
    {
     return $this->db->where('email',$email)->where('password',$password)->get('admin')->row();
     
    }
    public function check_brand($brand)
    {
        return $this->db->where('name',$brand)->get('brand')->row();
        
    }
    public function add_brand($data)
    {
        $this->db->insert('brand',$data);
        return true;
    }
    public function getbrand()
    {
        $this->db->order_by('id','desc');
        $query=$this->db->get('brand');
        return $query->result();
    }
    public function delete_brand($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('brand');
    }
    public function get_brandById($id)
    {
        return $this->db->where('id',$id)->get('brand')->row();
    }
    public function update_brand($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('brand',$data);
        return true;
    }
    public function addVehicle($data)
    {
        $this->db->insert("cars",$data);
        return true;
    }
    public function lastid()
    {
        return $this->db->insert_id();
    }
    public function addAccessory($acc,$last_id)
    {
        $this->db->insert('accessories',array('user_id'=>$last_id,'name'=>$acc));
    }
    public function getVehiclesdetail()
    {
        $this->db->order_by('id','desc');
        $query=$this->db->query("select cars.id as id,cars.title as title,brand.name as brand,cars.price as price,cars.fuel as fuel,cars.year as year
        from cars inner join brand on cars.brand=brand.id");
        return $query->result();
    }
    public function deleteCar($id)
    {
        $this->db->where('id',$id)->delete('cars');
        $this->db->where('user_id',$id)->delete('accessories');
    }
    public function getVehicleId($id)
    {
     return $this->db->where('id',$id)->get('cars')->row();
    }
    public function getAccessoryId($id)
    {
        return $this->db->where('user_id',$id)->get('accessories')->result_array();
    }
    public function editV1($data,$id)
    {
      $this->db->set($data);
      $this->db->where('id',$id)->update('cars',$data);
    }
    public function set_image1($image1,$id)
    {
        $this->db->set('myimage1',$image1);
        $this->db->where('id',$id)->update('cars');
    }
    public function set_image2($image2,$id)
    {
        $this->db->set('myimage2',$image2);
        $this->db->where('id',$id)->update('cars');
    }
    public function set_image3($image3,$id)
    {
        $this->db->set('myimage3',$image3);
        $this->db->where('id',$id)->update('cars');
    }
    public function set_image4($image4,$id)
    {
        $this->db->set('myimage4',$image4);
        $this->db->where('id',$id)->update('cars');
    }
    public function set_image5($image5,$id)
    {
        $this->db->set('myimage5',$image5);
        $this->db->where('id',$id)->update('cars');
    }
    public function delAccess($last_id)
    {
        $this->db->where('user_id',$last_id)->delete('accessories');
    }
    public function getAllBookings()
    {
        $query=$this->db->query("select * from bookings inner join cars on bookings.car_id=cars.id inner join signup on bookings.user_id=signup.id order by bid desc");
        return $query->result();
    }
    public function ConfirmStatus($eid)
    {
        $this->db->where('bid',$eid);
        $this->db->set('status','Confimed');
        $this->db->update('bookings');
        return true;
    }
    public function CancelStatus($cid)
    {
        $this->db->where('bid',$cid);
        $this->db->set('status','Cancelled');
        $this->db->update('bookings');
        return true;
    }
    public function manageAllTestimonial()
    {
        $this->db->select('tid,message,status,reading_time,name,email');
        $this->db->from('testimonial');
        $this->db->join('signup','testimonial.user_id=signup.id');
        $query=$this->db->get();
        return $query->result();
    }
    public function updateTestimonialStatus($id)
    {
        $this->db->where('tid',$id);
        $this->db->set('status','active');
        $this->db->update('testimonial');
        return true;
    }
    public function getSubscribers()
    {
        $this->db->order_by('id','desc');
        return $this->db->get('subscriber')->result();
    }
    public function deleteSubscriber($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('subscriber');
    }
    public function getRegUsers()
    {
        $query=$this->db->get('signup');
        return $query->result();
    }
    public function getContactUs()
    {
        $this->db->order_by('id','desc');
        return $this->db->get('contactus')->result();
    }
   public function update_contactinfo($data,$id)
   {
    $this->db->where('id',$id);
    $this->db->update('companyinfo',$data);
    return true;
   }
   public function getContact_info()
   {
    return $this->db->get('companyinfo')->result();
   }
}
?>