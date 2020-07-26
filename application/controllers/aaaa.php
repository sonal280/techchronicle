<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class NewsPortal extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('news_portal_model');
	}

	public function index()
	{
		$data['fetch_news1'] =$this->news_portal_model->fetch_news1();
		$data['latest_news1'] =$this->news_portal_model->latest_news1();
		$data['latest_news2'] =$this->news_portal_model->latest_news2();
		$data['trending_news1'] =$this->news_portal_model->trending_news1();
		$data['trending_news2'] =$this->news_portal_model->trending_news2();
		$data['hot_news1'] =$this->news_portal_model->hot_news();
		// $data['category2'] =$this->news_portal_model->category2();
		$data['two_cat'] =$this->news_portal_model->two_cat();
		$data2 = array();
		foreach ($data['two_cat']->result() as $cat_id) {
			$cat_id = $cat_id->cat_id;
			$data2['category_detail'][] =$this->news_portal_model->category_detail($cat_id);
			
		}

		// $data['info'] = $data2;
		


		$data['cat_name'] = $this->news_portal_model->category_name();
		$data['breaking_news'] = $this->news_portal_model->breaking_news();
		$this->load->view('news/index.php', array_merge($data, $data2));
	}

	public function about()
	{
		$this->load->view('news/about.php');
	}

	public function category($cat_name, $cat_id)
	{
		$data['cat_name'] = $this->news_portal_model->category_name();
		// $data['category_detail']$this->news_portal_model->fetch_category_detail($cat_name, $cat_id);
		$this->load->view('news/category_fashion.php', $data);
	}

	public function category_fashion()
	{
		$this->load->view('news/category_fashion.php');
	}

	public function category_health()
	{
		$this->load->view('news/category_health.php');
	}

	public function category_politics()
	{
		$this->load->view('news/category_politics.php');
	}

	public function category_science()
	{
		$this->load->view('news/category_science.php');
	}

	public function category_sports()
	{
		$this->load->view('news/category_sports.php');
	}

	public function contact()
	{
		$this->load->view('news/contact.php');
	}
}
 ?>