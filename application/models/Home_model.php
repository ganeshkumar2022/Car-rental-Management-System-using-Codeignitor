<?php
class Home_model extends CI_Model
{
    
    public function checkEmailExists($email)
    {
        return $this->db->where('email',$email)->get('signup')->row();
    }
    public function signup($data)
    {
        $this->db->insert('signup',$data);
        return true;
    }
    public function login($email)
    {
        return $this->db->where('email',$email)->get('signup')->row();
    }
    public function getUser($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('signup')->row();

    }
    public function updateUser($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('signup',$data);
    }
    public function updatePassword($new_password,$id)
    {
        $this->db->query("update signup set password='$new_password' where id=$id");
    }
    public function checkPassword($old_password,$id)
    {
        return $this->db->where('id',$id)->where('password',$old_password)->get('signup')->row();
    }
    public function post_testimonial($data)
    {
        $this->db->insert('testimonial',$data);
        return true;
    }
    public function getTestimonial($id)
    {
        $query=$this->db->query("select * from testimonial where user_id=$id order by tid desc");
        return $query->result();

    }
    public function testimonialDelete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('testimonial');
    }
    public function getTestimonialById($id)
    {
     $query=$this->db->query("select * from testimonial where id=$id");
     return $query->result();

    }
    public function edi_testi($id,$message)
    {
        $this->db->set('message',$message)->where('id',$id)->update('testimonial');
        return true;
    }
    public function getCars()
    {
        return $this->db->get('cars')->result();
    }
	public function getCarsii()
    {
		$this->db->limit(5,0);
		$this->db->order_by('id','desc');
        return $this->db->get('cars')->result();
    }
    public function getbrands()
    {
        return $this->db->get('brand')->result();
    }
    public function getTestimonials()
    {
        $this->db->where('status !=','Waiting for approval');
        return $this->db->get('testimonial')->result();
    }
    public function getCarId($id)
    {
        return $this->db->where('id',$id)->get('cars')->row();
    }
    public function getAccessId($id)
    {   
        $this->db->select('name');
        return $this->db->where('user_id',$id)->get('accessories')->result_array();
       
    }
    public function getBrId($brand_id)
    {
        $this->db->select('name');
        $this->db->where('id',$brand_id);
        return $this->db->get('brand')->row();
    }
    public function add_bookings($data)
    {
        $this->db->insert('bookings',$data);
        return true;
    }
    public function getBId($id)
    {
        $query=$this->db->query("select * from bookings inner join cars on bookings.car_id=cars.id inner join brand on cars.brand=brand.id where user_id=$id");
        return $query->result_array();
    }
    public function addContactUs($data)
    {
        $this->db->insert('contactus',$data);
        return true;
    }
    public function company_info()
    {
        $this->db->where('id',1);
        return $this->db->get('companyinfo')->result();
    }
}
?>
