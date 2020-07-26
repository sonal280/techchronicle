<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class News_portal_model extends CI_Model
{
	public function category_name()
	{
		$this->db->where('cat_status', 1);
		$query = $this->db->get('category');
		return $query;
	}

	public function breaking_news()
	{
		$query = $this->db->get('post');
		return $query;
	}

	public function fetch_news1()
	{
		$this->db->select('*, post.created_at as post_date, category.created_at as category_date, category.cat_name as category_name');
		$this->db->from('category');
		$this->db->join('post', 'category.cat_id = post.cat_id');
		$this->db->order_by('category.cat_id', "desc");
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}


	// public function category1()
	// {
	// 	$this->db->select('*, post.created_at as post_date, category.created_at as category_date, category.cat_name as category_name');
	// 	$this->db->from('category');
	// 	$this->db->join('post', 'category.cat_id = post.cat_id');
	// 	$this->db->where('category.cat_id',1);
	// 	$this->db->order_by('category.cat_id', "asc");
	// 	// $this->db->limit(1);
	// 	$query = $this->db->get();
	// 	return $query;
	// }

	

	public function two_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->order_by('cat_id', 'asc');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query;
	}

	public function category_detail($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('post', 'category.cat_id = post.cat_id');
		$this->db->where(['category.cat_id'=>$cat_id]);
		$this->db->order_by('category.cat_id', "asc");
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query->result_array();
		// echo "<pre>";
		//  print_r($query->result());
	}

	public function latest_news1()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	public function latest_news2()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->order_by('post_id', 'desc');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function trending_news1()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}
	public function trending_news2()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function hot_news()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->order_by('post_id', 'desc');
		$this->db->limit(8);
		$query = $this->db->get();
		return $query;
	}

}
 ?>