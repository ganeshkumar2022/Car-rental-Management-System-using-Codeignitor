<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('form');
    }
    public function index()
    {
        $this->load->view('admin/index');
    }
    public function addBrand()
    {
        if($this->session->has_userdata('aid'))
        {
           $message=null; 
            if($this->input->post('add'))
            {
                $brand=$this->input->post('brand');
                if($this->admin_model->check_brand($brand))
                {
                    $message="<p id='danger'><b>ERROR</b> Brand already exists</p>";
                }
                else
                {
                    $data['name']=$this->input->post('brand');
                    date_default_timezone_set("Asia/Calcutta");
                    $data['create_time']=date("d-m-Y h:i:sa l");
                    $response=$this->admin_model->add_brand($data);
                    if($response==true)
                    {
                        $message="<p id='success'><b>SUCCESS</b> brand created successfully</p>";
                    }
                    else
                    {
                        $message="<p id='danger'><b>ERROR</b> Error to create brand</p>";
                    }

                }
            }
            $this->load->view('admin/add_brand',array('message'=>$message));
          
        }
        else
        {
            redirect('admin');
        }
    }
    public function checkdetails()
    {
        
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        if(empty($email) && empty($password))
        {
            $this->load->view('admin/index',array('m'=>"Please fill email field",'p'=>"Please fill password field"));
        }
        elseif(empty($email))
        {
            $this->load->view('admin/index',array('m'=>"Please fill email field"));
        }
        elseif(empty($password))
        {
            $this->load->view('admin/index',array('p'=>"Please fill password field"));
        }

        if(!empty($email) && !empty($password))
        {
            $message="";
           if($response=$this->admin_model->checkDetails($email,$password))
           {
            $this->session->set_userdata('aid',$response->id);
            redirect('admin/dashboard');
           }
           else
           {
            $message='
            <div class="alert alert-danger fade show alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> Email or password error.
            </div>
            ';
            $this->load->view('admin/index',array('logerr'=>$message));
           }
        }
    }
    public function dashboard()
    {
        if($this->session->has_userdata('aid'))
        {
            $this->load->view('admin/dashboard');
        }
        else
        {
            redirect('admin');
        }
       
    }
    public function manageBrand()
    {
        if($this->session->has_userdata('aid'))
        {
            $data['result']=$this->admin_model->getbrand();
            $this->load->view('admin/manage_brand',$data);
        }
        else
        {
            redirect('admin');
        }
    }
    public function deleteBrand($id)
    {
        if($this->session->has_userdata('aid'))
        {
            $this->admin_model->delete_brand($id);
            redirect('admin/manageBrand');
        }
        else
        {
            redirect('admin');
        }
    
    }
    public function editBrand()
    {
        if($this->session->has_userdata('aid'))
        {
            $id=$this->input->get('id');
            if($this->input->post('edit'))
            {
                $data['name']=$this->input->post('brand');
                date_default_timezone_set("Asia/Calcutta");
                $data['update_time']=date("d-m-Y h:i:sa l");
                $response=$this->admin_model->update_brand($data,$id);
                if($response==true)
                {
                    $this->session->set_flashdata('message','<p id="success">Brand Updated successfully</p>');
                }
                else
                {
                    $this->session->set_flashdata('message','<p id="danger">Error to update brand</p>');
                }

            }
            $userget["result"]=$this->admin_model->get_brandById($id);
            $this->load->view('admin/edit_brand',$userget);
           
        }
        else
        {
            redirect('admin');
        }
     
    }
    public function postVehicleDatas()
    {
       if($this->input->post('save'))
       {
        $config["upload_path"]="./uploads/";
        //$config["allowed_types"]="jpg|png";
        $config['allowed_types'] = 'jpg|png|JPG|PNG|jpeg|JPEG|jfif|JFIF';
        $config["max_size"]=5120;

        $this->load->library('upload',$config);
        if($this->upload->do_upload('myimage1') && $this->upload->do_upload('myimage2') && $this->upload->do_upload('myimage3') && $this->upload->do_upload('myimage4') && $this->upload->do_upload('myimage5'))
        {
        $data["title"]=$this->input->post('title');
        $data["brand"]=$this->input->post('brand');
        $data["overview"]=$this->input->post('overview');
        $data["price"]=$this->input->post('price');
        $data["fuel"]=$this->input->post('fuel');
        $data["year"]=$this->input->post('year');
        $data["seat"]=$this->input->post('seat');
        $accessory=$this->input->post('accessory');
        $data["myimage1"]=$config["upload_path"].$_FILES["myimage1"]["name"];
        $data["myimage2"]=$config["upload_path"].$_FILES["myimage2"]["name"];
        $data["myimage3"]=$config["upload_path"].$_FILES["myimage3"]["name"];
        $data["myimage4"]=$config["upload_path"].$_FILES["myimage4"]["name"];
        $data["myimage5"]=$config["upload_path"].$_FILES["myimage5"]["name"];
        $response=$this->admin_model->addVehicle($data);
        $last_id=$this->admin_model->lastid();
        if($response==true)
        {
         $count=count($accessory);
         for($i=0;$i<$count;$i++)
         {
            $acc=$accessory[$i];
            $this->admin_model->addAccessory($acc,$last_id);
         }
         $this->session->set_flashdata('success','Vehicle added successfully');
         redirect('admin/addVehicle');
         //echo "<script>alert('vehicle added successfully');</script>";
        }
        else
        {
         $this->session->set_flashdata('error','Error to add vehicle');
         redirect('admin/addVehicle');
         //echo "<script>alert('Error to insert data');</script>"; 
        }

        //echo "<script>alert('image uploaded sueccessfully');</script>";

       }
       else
       {
        $errors=$this->upload->display_errors();
        echo "<script>alert($errors);</script>";
       }
    }
}
    public function addVehicle()
    {
        if($this->session->has_userdata('aid'))
        {
         $data2["brand"]=$this->admin_model->getbrand();
          $this->load->view('admin/add_vehicle',$data2);
        }
        else
        {
            redirect('admin');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('aid');
        redirect('admin');
    }
    public function manageVehicle()
    {
        if($this->session->has_userdata('aid'))
        {
         $data["vehicles"]=$this->admin_model->getVehiclesdetail();
          $this->load->view('admin/manage_vehicle',$data);
        }
        else
        {
            redirect('admin');
        } 
    }
    public function deleteCar($id)
    {
    $this->admin_model->deleteCar($id);
    redirect('admin/manageVehicle');
    }
    public function editCar($id)
    {
        if($this->session->has_userdata('aid'))
        {
         $vid=$this->admin_model->getVehicleId($id);
         $aid=$this->admin_model->getAccessoryId($id);
         $br=$this->admin_model->getbrand();
         
          $this->load->view('admin/edit_vehicle',array('vehicle_id'=>$vid,'accessory_id'=>$aid,'mybrand'=>$br));
          if($this->input->post('edit'))
          {
            $config["upload_path"]="./uploads/";
            //$config["allowed_types"]="jpg|png";
            $config['allowed_types'] = 'jpg|png|JPG|PNG|jpeg|JPEG|jfif|JFIF';
            $config["max_size"]=5120;
            $this->load->library('upload',$config);
            if($_FILES["myimage1"]["name"]!="")
            {
                $this->upload->do_upload('myimage1');
                $image1=$config["upload_path"].$_FILES["myimage1"]["name"];
                $this->admin_model->set_image1($image1,$id);
                
            }
            if($_FILES["myimage2"]["name"]!="")
            {
                $this->upload->do_upload('myimage2');
                $image2=$config["upload_path"].$_FILES["myimage2"]["name"];
                $this->admin_model->set_image2($image2,$id);
                
            }
            if($_FILES["myimage3"]["name"]!="")
            {
                $this->upload->do_upload('myimage3');
                $image3=$config["upload_path"].$_FILES["myimage3"]["name"];
                $this->admin_model->set_image3($image3,$id);
                
            }
            if($_FILES["myimage4"]["name"]!="")
            {
                $this->upload->do_upload('myimage4');
                $image4=$config["upload_path"].$_FILES["myimage4"]["name"];
                $this->admin_model->set_image4($image4,$id);
                
            }
            if($_FILES["myimage5"]["name"]!="")
            {
                $this->upload->do_upload('myimage5');
                $image5=$config["upload_path"].$_FILES["myimage5"]["name"];
                $this->admin_model->set_image5($image5,$id);
                
            }
            //$data["myimage1"]=$config["upload_path"].$_FILES["myimage1"]["name"]
            $data["title"]=$this->input->post('title');
            $data["brand"]=$this->input->post('brand');
            $data["overview"]=$this->input->post('overview');
            $data["price"]=$this->input->post('price');
            $data["fuel"]=$this->input->post('fuel');
            $data["year"]=$this->input->post('year');
            $data["seat"]=$this->input->post('seat');
            $accessory=$this->input->post('accessory');
            $this->admin_model->editV1($data,$id);
            $count=count($accessory);
            $last_id=$id;
            $this->admin_model->delAccess($last_id);
            for($i=0;$i<$count;$i++)
            {
               $acc=$accessory[$i];
               $this->admin_model->addAccessory($acc,$last_id);
            }
            echo '<script>alert("data is edited successfully");</script>';

          }
        }
        else
        {
            redirect('admin');
        }  
    }
    public function manageBooking()
    {
        if($this->session->has_userdata('aid'))
        {
            if($this->input->get('eid'))
            {
                $eid=$this->input->get('eid');
                $response=$this->admin_model->ConfirmStatus($eid);
                if($response==true)
                {
                    echo "<script>alert('Booking confirmed successfully');</script>";
                }
                else
                {
                    echo "<script>alert('Error to confirm booking');</script>";
                }
            }
            if($this->input->get('cid'))
            {
                $cid=$this->input->get('cid');
                $response=$this->admin_model->CancelStatus($cid);
                if($response==true)
                {
                    echo "<script>alert('Booking cancelled successfully');</script>";
                }
                else
                {
                    echo "<script>alert('Error to cancel booking');</script>";
                }
            }
            $result=$this->admin_model->getAllBookings();
            $this->load->view('admin/manage_booking',array('result'=>$result));
          
        }
        else
        {
            redirect('admin');
        }
    }
    public function manageTestimonial()
    {
        if($this->session->has_userdata('aid'))
        {
        if($this->input->get('eid'))
        {
            $id=$this->input->get('eid');
            $response=$this->admin_model->updateTestimonialStatus($id);
            if($response==true)
            {
                echo "<script>alert('Status changed successfully');</script>";
            }
            else
            {
                echo "<script>alert('Error to change status');</script>"; 
            }
        }
         $data2["result"]=$this->admin_model->manageAllTestimonial();
         //print_r($data2);
          $this->load->view('admin/manage_testimonial',$data2);
        }
        else
        {
            redirect('admin');
        } 
    }
    public function manageSubscriber()
    {
        if($this->session->has_userdata('aid'))
        {
         $data["subscribers"]=$this->admin_model->getSubscribers();
          $this->load->view('admin/manage_subscribers',$data);
        }
        else
        {
            redirect('admin');
        } 
    }
    public function del_Subscriber($id)
    {
        $this->admin_model->deleteSubscriber($id);
        redirect('admin/manageSubscriber');
    }
    public function Regusers()
    {
        if($this->session->has_userdata('aid'))
        {
         $data["regusers"]=$this->admin_model->getRegUsers();
          $this->load->view('admin/manage_regusers',$data);
        }
        else
        {
            redirect('admin');
        } 
    }
    public function manageContactUs()
    {
        if($this->session->has_userdata('aid'))
        {
         $data["result"]=$this->admin_model->getContactUs();
          $this->load->view('admin/manage_contactus',$data);
        }
        else
        {
            redirect('admin');
        }  
    }
    public function update_contactinfo()
    {
        if($this->session->has_userdata('aid'))
        {
        $data=null;
        if($this->input->post('update'))
        {
            $data['address']=$this->input->post('address');
            $data["email"]=$this->input->post('email');
            $data["mobile"]=$this->input->post('mobile');
            $id=1;
            $response=$this->admin_model->update_contactinfo($data,$id);
            if($response==true)
            {
                $data="<script>alert('info updated successfully');</script>";
            }
            else
            {
                $data="<script>alert('Error to update info');</script>";
            }


        }
         $data2=$this->admin_model->getContact_info();
          $this->load->view('admin/update_contact',array('message'=>$data,'data2'=>$data2));
        }
        else
        {
            redirect('admin');
        }  
    }
    
}
?>