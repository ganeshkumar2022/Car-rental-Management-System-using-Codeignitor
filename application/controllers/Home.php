<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }
    public function index()
    {
        $testimonials=$this->home_model->getTestimonials();
		$cars=$this->home_model->getCarsii();
        $this->load->view('header');
        $this->load->view('home',array('testimonials'=>$testimonials,'newcar'=>$cars));
        $this->load->view('about');   //footer page
    }
    public function about()
    {
        $this->load->view('header');
        $this->load->view('aboutus');
        $this->load->view('about');
    }
    public function faq()
    {
        $this->load->view('header');
        $this->load->view('faq');
        $this->load->view('about');
    }

    public function signup()
    {
    $error=$error2=$success=null;    
    if($this->input->post('signup'))
    {
        
        $data['name']=$this->input->post('name');
        $data['mobile']=$this->input->post('mobile');
        $data['email']=$this->input->post('email');
        $email=$this->input->post('email');
        $data['password']=$this->input->post('password');
        
        if($r=$this->home_model->checkEmailExists($email))
        {
            $error="Email exists";
        }
        else
        {
            $password=$this->input->post('password');
            $cpassword=$this->input->post('confirmpassword');
            if($password==$cpassword)
            {
                $response=$this->home_model->signup($data);
                if($response==true)
                {
                    $success="<script>Swal.fire({
                        icon: 'success',
                        title: 'welcome user...',
                        text: 'Registration successfully!'
                      });</script>";
                }
                else
                {

                }
            }
            else
            {
                $error2="Password and confirm password not matched";
                
            }
        }

    }
        $this->load->view('header');
        $this->load->view('signup',array('error'=>$error,'error2'=>$error2,'success'=>$success));
        $this->load->view('about');
    }
    public function login()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        if($user=$this->home_model->login($email))
        {
            if($user->password==$password)
            {
                $this->session->set_userdata('uid',$user->id);
                // $this->load->view('header');
                // $message="<script>alert('Login successfully');</script>";
                // $this->load->view('home',array('message'=>$message));
                // $this->load->view('about');
                redirect('home/profile');
            }
            else
            {
                $this->load->view('header');
                $message="<script>alert('Email or password Error');</script>";
                $this->load->view('signup',array('message'=>$message));
                $this->load->view('about');
            }
        }
        else
        {
            $this->load->view('header');
            $message="<script>alert('Email or password Error');</script>";
            $this->load->view('signup',array('message'=>$message));
            $this->load->view('about');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('uid');
        redirect('home');
    }
    public function profile()
    {
        if($this->session->has_userdata('uid'))
        {
            $id=$this->session->userdata('uid');
            $message=null;
            if($this->input->post('submit'))
            {
                $data['name']=$this->input->post('name');
                $data['email']=$this->input->post('email');
                $data['mobile']=$this->input->post('mobile');
                $data['dob']=$this->input->post('dob');
                $data['address']=$this->input->post('address');
                $data['country']=$this->input->post('country');
                $data['city']=$this->input->post('city');
                $this->home_model->updateUser($data,$id);
                $message="<script>Swal.fire({
                    icon: 'success',
                    title: 'Profile update...',
                    text: 'Update file successfully!'
                  });</script>";
            }
            $user=$this->home_model->getUser($id);
            $this->load->view('header');
            $this->load->view('profile',array('user'=>$user,'message'=>$message));
            $this->load->view('about');
        }
        else
        {
            redirect('home');
        }
        
    }
    public function updatePassword()
    {
        if($this->session->has_userdata('uid'))
        {
            $id=$this->session->userdata('uid');
            $message=null;
            if($this->input->post('submit'))
            {
                $old_password=$this->input->post('old_password');
                $new_password=$this->input->post('new_password');
                $confirm_password=$this->input->post('confirm_password');
                if($user=$this->home_model->checkPassword($old_password,$id))
                {
                    if($new_password==$confirm_password)
                    {
                    $this->home_model->updatePassword($new_password,$id);
                    $message="<script>Swal.fire({
                        icon: 'success',
                        title: 'Password update...',
                        text: 'Update Password successfully!'
                      });</script>";
                    }
                    else
                    {
                        $message="<script>Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'new Password and confirm not match'
                          });</script>";
                    }
                }
                else
                {
                    $message="<script>Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Old password did not match'
                      });</script>";  
                }
                
                
            }
            //$user=$this->home_model->getUser($id);
            $this->load->view('header');
            $this->load->view('Update_password',array('message'=>$message));
            $this->load->view('about');
        }
        else
        {
            redirect('home');
        }
    }
    public function mybookings()
    {
        if($this->session->has_userdata('uid'))
        {
            $id=$this->session->userdata('uid');
            $message=null;
            //$booking=$this->db->where('user_id',$id)->get('bookings')->result_array();
            $booking=$this->home_model->getBId($id);
            $this->load->view('header');
            $this->load->view('mybookings',array('message'=>$message,'booking'=>$booking));
            $this->load->view('about');
        }
        else
        {
            redirect('home');
        }
    }
    public function postaTestimonial()
    {
        error_reporting(0);
        if($this->session->has_userdata('uid'))
        {
            $message=null;
            if($this->input->post('submit'))
            {
                $message=$this->input->post('message');
                $data['user_id']=$this->session->userdata('uid');
                $data['message'] = filter_var($message, FILTER_SANITIZE_STRING);
                $response=$this->home_model->post_testimonial($data);
                if($response==true)
                {
                $message="<script>Swal.fire({
                    icon: 'success',
                    title: 'Add a testimonial successfully...',
                    text: 'Update Password successfully!'
                  });</script>";
                }
                else
                {
                    $message="<script>Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error to add testimonial'
                      });</script>";
                }
            }
            $id=$this->session->userdata('uid');
            $this->load->view('header');
            $this->load->view('postaTestimonial',array('message'=>$message));
            $this->load->view('about');
        }
        else
        {
            redirect('home');
        }
    }
    public function myTestimonial()
    {
        if($this->session->has_userdata('uid'))
        {
            
            $id=$this->session->userdata('uid');
            $result['data']=$this->home_model->getTestimonial($id);
            $this->load->view('header');
            $this->load->view('myTestimonial',$result);
            $this->load->view('about');
        }
        else
        {
            redirect('home');
        }
    }
    public function testimonialDelete()
    {
        $id=$this->input->get('id');
        $this->home_model->testimonialDelete($id);
        redirect('home/myTestimonial');
    }
    public function car_listing()
    {
        $cars=$this->home_model->getCars();
        $brand=$this->home_model->getbrands();
        $this->load->view('header');
        $this->load->view('car_listing',array('cars'=>$cars,'brands'=>$brand));
        $this->load->view('about');
    }
    public function vehicleDetails($id)
    {
        $access=$this->home_model->getAccessId($id);
        $a=array();
        foreach($access as $b)
        {
            array_push($a,$b["name"]);
        }
        $car_id=$this->home_model->getCarId($id);
        $brand_id=$car_id->brand;
        $brand_name=$this->home_model->getBrId($brand_id);
        $this->load->view('header');
        $this->load->view('vehicledetails',array('car_id'=>$car_id,'access_id'=>$a,'brand_name'=>$brand_name));
        $this->load->view('about');
    }
    public function testimonialEdit()
    {
        if($this->session->has_userdata('uid'))
        {
            
            $id=$this->input->get('id');
            $result['data']=$this->home_model->getTestimonialById($id);
            $this->load->view('header');
            $this->load->view('testimonial_edit',$result);
            $this->load->view('about');
            if($this->input->post('submit'))
            {
                $message=$this->input->post('message');
                $response=$this->home_model->edi_testi($id,$message);
                if($response==true)
                {
                  echo "<script>alert('updated successfully');</script>";
                  header("refresh:0");
                }
                else
                {
                    echo "<script>alert('Error to update');</script>";
                  header("refresh:0");
                }
            }
        }
        else
        {
            redirect('home');
        } 
    }
    public function book_vehicle()
    {
        if($this->input->post('book_now'))
        {
            $data["from_date"]=$this->input->post('from_date');
            $data["to_date"]=$this->input->post('to_date');
            $data["car_id"]=$this->input->post('car_id');
            $data["user_id"]=$this->session->userdata('uid');
            $data["message"]=$this->input->post('message');
            $response=$this->home_model->add_bookings($data);
            if($response==true)
            {
                $message="<script>Swal.fire({
                    icon: 'success',
                    title: 'success',
                    text: 'Bookings added successfully'
                  });</script>";
            }
            else
            {
                $message="<script>Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Error to add bookings'
                  });</script>";
                
            }
            $this->session->set_flashdata('mymessage',$message);
            redirect('home/car_listing');
           
        } 
    }
    public function Contact()
    {
        $info=$this->home_model->company_info();
        if(!$this->input->post('contact'))
        {
        $message=null;
        $this->load->view('header');
        $this->load->view('contact',array('message'=>$message,'company'=>$info));
        $this->load->view('about');
        }
        else
        {
            $data['name']=$this->input->post('cname');
            $data['email']=$this->input->post('cemail');
            $data['mobile']=$this->input->post('cmobile');
            $data['message']=$this->input->post('cmessage');
            $response=$this->home_model->addContactUs($data);
            if($response==true)
            {
            $message="<p class='my-4' style='background-color:#FFFF9C;border-left:4px solid green;border-bottom:2px solid lightgray;padding:5px;'><b>SUCCESS</b> : query sent. We will contact you shortly</p>";    
            }
            else
            {
                $message="<p class='my-4' style='background-color:#FFFF9C;border-left:4px solid red;padding:5px;border-bottom:2px solid lightgray;'><b>ERROR</b> : something went wrong</p>";
            }
            $this->load->view('header');
            $this->load->view('contact',array('message'=>$message,'company'=>$info));
            $this->load->view('about'); 
        }
    }
    
}
?>
