<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	
	public function check_login_detail($uname, $password)
	{
		$result = $this->db->where(['username' => $uname, 'password' => $password])->get('login');
		if($result->num_rows())
		{
			return $result->row()->login_id;
		}
		else
		{
			return false;
		}
	}


	public function fetch_user_detail()
	{
		$result = $this->db->get('login');
		return $result;
	}

	public function add_new_category($cat_name, $cat_status, $cat_image)
	{
		$exist = $this->isExist($cat_name);
		if (!$exist) {
			$data = array(
				'cat_name' => $cat_name,
				'cat_status' => $cat_status,
				'cat_image' => $cat_image
				// 'created_at' => date('Y-m-d H:i:s')
			);

			$result = $this->db->insert('category', $data);
			return true;
		}
		else
		{

			// return false;
			return $exist;
		}

	}

	public function edit_new_category($cat_name, $cat_status, $cat_id, $cat_image)
	{
		if ($cat_image) {
			$data = array(
				'cat_name' => $cat_name,
				'cat_status' => $cat_status,
				'cat_image' => $cat_image
			);

			$this->db->where('cat_id', $cat_id);
			$result = $this->db->update('category', $data);
		    return true;
		}
		else{
			$data = array(
				'cat_name' => $cat_name,
				'cat_status' => $cat_status
			);

			$this->db->where('cat_id', $cat_id);
			$result = $this->db->update('category', $data);
			return true;
		}
	}

	public function fetch_category()
	{
		$result = $this->db->get('category');
		return $result;
	}

	public function delete_category($cat_id)
	{
		$result = $this->db->where(['cat_id' => $cat_id])->delete('category');
		if ($result) {
			return true;
		}
		else{
			return false;
		}

	}

	public function view_category($cat_id)
	{
		$result = $this->db->where(['cat_id' => $cat_id])->get('category');
		
			return $result;
		
	}


	public function cat_name()
	{
		$this->db->where(['cat_status'=>1]);
		$query = $this->db->get('category');
		return $query->result();
	}


	public function add_new_post($cat_name, $post_title, $post_description, $post_image)
	{
		
			$data = array(
				'cat_id' => $cat_name,
				// 'post_status' => $post_status,
				'title' => $post_title,
				'description' => $post_description,
				'image' => $post_image
				// 'created_at' => date('Y-m-d H:i:s')
			);

			$result = $this->db->insert('post', $data);
			return true;

	}

	public function edit_new_post($post_id, $cat_name, $post_title, $post_description, $image)
	{
		if ($image) {
			$data = array(
			'cat_id'=>$cat_name,
			'title'=>$post_title,
			'description'=>$post_description,
			'image'=>$image
		);
		 $this->db->where('post_id', $post_id);
		 $result = $this->db->update('post', $data);
		 return $result;
		}
		else{
			$data = array(
			'cat_id'=>$cat_name,
			'title'=>$post_title,
			'description'=>$post_description
		);
		 $this->db->where('post_id', $post_id);
		 $result = $this->db->update('post', $data);
		 return $result;
		}
		
	}

	public function fetch_post()
	{
		$result = $this->db->query("select * from post p inner join category c on c.cat_id = p.cat_id");
		return $result;
	}


	public function fetch_post_detail($post_id)
	{
		$result = $this->db->where(['post_id'=>$post_id])->get('post');
		return $result;
	}

	public function delete_post($post_id)
	{
		$this->db->where(['post_id'=>$post_id]);
		$query = $this->db->delete('post');
		
		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}


	public function isExist($cat_name)
	{
		$msg='';
		$result = $this->db->where(['cat_name' => $cat_name])->get('category');
		if ($result -> num_rows()) {
			$msg = "This category is already exist";		
		}
		return $msg;
	}
}
 ?>