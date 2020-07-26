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
		$this->db->order_by('category.cat_id', "ASC");
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
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
		$this->db->order_by('post_id', 'ASC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function category_name1()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->limit(1);
		$query1 = $this->db->get();
		return $query1;
	}
	public function category_name2()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->order_by('cat_id', 'desc');
		$this->db->limit(1);
		$query1 = $this->db->get();
		return $query1;
	}
	public function category_name3()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id', 2);
		$this->db->order_by('cat_id', 'desc');
		$this->db->limit(1);
		$query1 = $this->db->get();
		return $query1;
	}

	public function category_detail1($cat_id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id);
		$this->db->order_by('post_id', 'desc');
		// $this->db->limit(8);
		$query = $this->db->get();
		return $query;
	}
	public function cat_detail1($cat_id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id);
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	public function category_detail2($cat_id2)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id2);
		$this->db->order_by('post_id', 'desc');
		// $this->db->limit(8);
		$query = $this->db->get();
		return $query;
	}
	public function cat_detail2($cat_id2)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id2);
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}


	public function category_detail3($cat_id3)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id3);
		$this->db->order_by('post_id', 'desc');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query;
	}
	public function cat_detail3($cat_id3)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id3);
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query;
	}

	public function cat_detail4($cat_id3)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id', $cat_id3);
		$this->db->order_by('post_id', 'desc');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query;
	}


	public function popular1()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id = post.cat_id');
		$this->db->order_by('post_id', 'asc');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}

	public function popular()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id = post.cat_id');
		$this->db->order_by('post.post_id', 'desc');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query;
	}

	public function featured()
	{

		$query = $this->db->query('select * from category c inner join post p on p.cat_id=c.cat_id where c.cat_id=p.cat_id order by p.post_id desc limit 3,3');
		// $this->db->select('*');
		// $this->db->from('post');
		// $this->db->join('category');
		// $this->db->where('category.cat_id != post.cat_id' );
		// $this->db->order_by('post_id', 'asc');
		// $this->db->limit(2);
		// $query = $this->db->get();
		return $query;
	}

	public function single_category($cat_name, $cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category.cat_id ='.$cat_id);
		$query = $this->db->get();
		return $query;
	}

	public function post_detail($cat_name, $cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('post', 'category.cat_id = post.cat_id', 'inner');
		$this->db->where('category.cat_id ='.$cat_id);
		$this->db->order_by('post.post_id', 'desc');
		$query = $this->db->get();
		return $query;
	}
	 public function post_detail_carousel($cat_name, $cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('post', 'category.cat_id = post.cat_id', 'inner');
		$this->db->where('category.cat_id ='.$cat_id);
		$this->db->order_by('post.post_id', 'asc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	 public function post_detail_carousel1($cat_name, $cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('post', 'category.cat_id = post.cat_id', 'inner');
		$this->db->where('category.cat_id ='.$cat_id);
		$this->db->order_by('post.post_id', 'desc');
		$this->db->limit(2,3);
		$query = $this->db->get();
		return $query;
	}

	public function recent_post()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id = post.cat_id');
		$this->db->order_by('post.post_id', 'desc');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function trending_post()
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('category.cat_id = post.cat_id');
		$this->db->order_by('post.post_id', 'asc');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}

	public function single_post_detail($post_id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('post.post_id = '.$post_id);
		$query = $this->db->get();
		return $query;
	}

	public function previous_post($post_id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('post.post_id != '.$post_id);
		$this->db->order_by('post.post_id', 'asc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}


	public function next_post($post_id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('category', 'post.cat_id = category.cat_id', 'inner');
		$this->db->where('post.post_id != '.$post_id);
		$this->db->order_by('post.post_id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	// public function subscriber()
	// {
	// 	$data = array(
	// 		'' => , 
	// 	);
	// }

	public function featured_images()
	{
		$query = $this->db->query("select * from category c inner join post p on c.cat_id=p.cat_id");
		return $query;
	}




}
 ?>