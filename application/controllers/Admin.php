<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function login()
    {
    	$this->load->view('admin/login.php');
    }
     public function login_detail()
    {
    	$uname = $this->input->post('uname');
    	$password = $this->input->post('password');
		$id = $this->Admin_model->check_login_detail($uname, $password);
		if ($id) {
			$this->session->set_userdata('id', $id);
			// $this->dashboard();
			return redirect(base_url('admin/dashboard'));
		}
		else{
			$this->session->set_flashdata('login_status','Fail');
			return redirect(base_url('admin/login'));
		}
    }


    public function dashboard()
    {
		if ($this->session->userdata('id')) {
			$num_rows['users'] = $this->db->count_all_results('login');
			$num_rows['category'] = $this->db->count_all_results('category');
			$num_rows['post'] = $this->db->count_all_results('post');

	    	$this->load->view('admin/index', $num_rows);
		}
		else{
	    	$this->load->view('admin/login');

		}
    }

    public function user()
    {
    	$data['user_detail'] = $this->Admin_model->fetch_user_detail();
    	$this->load->view('admin/user', $data);

    }



	public function category()
	{
		if ($this->session->userdata('id')) {
			$data['category_detail'] = $this->Admin_model->fetch_category();
			$this->load->view('admin/category.php', $data);
		}
		else{
			$this->load->view('admin/login');
		}
		
	}

	public function new_category()
	{
		$this->load->view('admin/new_category.php');
	}

	public function add_new_category()
	{
		$cat_name = $this->input->post('cat_name');
		$cat_status = $this->input->post('cat_status');
		$config['upload_path'] = './images/category/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);

        $image = $this->upload->do_upload('cat_image');

        $upload_data = $this->upload->data();

        if ($image) {
        	$data = array();
        	$id = $this->Admin_model->add_new_category($cat_name, $cat_status, $upload_data['file_name']);
        	if ($id=='1') {
        		$data['success'] = true;
	        	$data['msg'] = "New Category Added";
	        	$data['location'] = base_url('admin/category');
        	}
        	else{

        		$data['success'] = false;
        		$data['msg'] = $id;
        	}
        	echo json_encode($data);
	        	
        }
        else
        {
        	$error = array('error' => $this->upload->display_errors());
        	
        }

	}

	public function edit_category($cat_id)
	{
		$result['category_detail'] = $this->Admin_model->view_category($cat_id);
		
		$this->load->view('admin/edit_category.php', $result);
	}

	public function edit_new_category()
	{
		$cat_id = $this->input->post('cat_id');
		$cat_name = $this->input->post('cat_name');
		$cat_status = $this->input->post('cat_status');
		$config['upload_path'] = './images/category/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);

        $image = $this->upload->do_upload('cat_image');

        $upload_data = $this->upload->data();

       
        	$data = array();
        	$id = $this->Admin_model->edit_new_category($cat_name, $cat_status, $cat_id, $upload_data['file_name']);
        	if ($id) {
        		$data['success'] = true;
        		$data['location'] = base_url('admin/category');
        		$data['msg'] = "Category Name is updated successfully";
        	}
        	else{
        		$data['success'] = false;
        		$data['msg'] = "Category Name is not updated";
        	}
        	echo json_encode($data);
      
        
        

	}


	public function delete_category()
	{
		$id = $_POST['cat_id'];
		$result = $this->Admin_model->delete_category($id);
		$msg = '';
		if ($result) {
			$msg = "Category is deleted successfully";
		}
		else{
			$msg = "Category is not deleted";
		}
		echo $msg;

	}

	public function post()
	{
		if ($this->session->userdata('id')) {
			$data['post_detail'] = $this->Admin_model->fetch_post();
			$this->load->view('admin/post.php', $data);
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function new_post()
	{
		$data['cat_result'] = $this->Admin_model->cat_name();
		$this->load->view('admin/new_post.php', $data);
	}

	public function add_new_post()
	{
		$post_title = $this->input->post('post_title');
		$post_description = $this->input->post('post_description');
		$cat_name = $this->input->post('cat_name');
		$config['upload_path'] = './images/post/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);

        $image = $this->upload->do_upload('post_image');

        $upload_data = $this->upload->data();

        if ($image) {
        	$data = array();
        	$id = $this->Admin_model->add_new_post($cat_name, $post_title, $post_description, $upload_data['file_name']);
        	if ($id) {
        		// $data['success'] = true;
	        	// $data['msg'] = "New Category Added";
	        	// $data['location'] = base_url('admin/category');
	        	$this->post();
	        	echo "<script>alert('Post is added successfully')</script>";

        	}

        	else{
        		$this->post();
        	}
        	
        	
	        	
        }
        else
        {
        	$error = array('error' => $this->upload->display_errors());
        	
        }

	}

	public function edit_post($post_id)
	{
		$data['value'] = $this->Admin_model->fetch_post_detail($post_id);
		$data['cat_result'] = $this->Admin_model->cat_name();
		$this->load->view('admin/edit_post', $data);
	}

	public function edit_new_post($post_id)
	{
		$post_title = $this->input->post('post_title');
		$post_description = $this->input->post('post_description');
		$cat_name = $this->input->post('cat_name');
		$config['upload_path'] = './images/post/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);

        $image = $this->upload->do_upload('post_image');

        $upload_data = $this->upload->data();

       
        	$data = array();
        	$id = $this->Admin_model->edit_new_post($post_id, $cat_name, $post_title, $post_description, $upload_data['file_name']);
        	print_r($id);
        	if ($id) {
        		// $data['success'] = true;
	        	// $data['msg'] = "New Category Added";
	        	// $data['location'] = base_url('admin/category');
	        	$this->post();
	        	echo "<script>alert('Post is added successfully')</script>";

        	}

        	else{
        		$this->post();
        	}      
	}


	public function delete_post()
	{
		$post_id = $_POST['post_id'];
		$result = $this->Admin_model->delete_post($post_id);
		
		if ($result) {
			echo "Post is deleted successfully";
		}
		else{
			echo "Post is not deleted";
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->load->view('admin/login');

	}

	
}
