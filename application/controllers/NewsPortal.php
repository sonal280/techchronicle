<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class NewsPortal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('News_portal_model');
	}

	public function index()
	{
		$data['fetch_news1'] =$this->News_portal_model->fetch_news1();
		$data['latest_news1'] =$this->News_portal_model->latest_news1();
		$data['latest_news2'] =$this->News_portal_model->latest_news2();
		$data['trending_news1'] =$this->News_portal_model->trending_news1();
		$data['trending_news2'] =$this->News_portal_model->trending_news2();
		$data['hot_news1'] =$this->News_portal_model->hot_news();
		$data['category_name1'] =$this->News_portal_model->category_name1();

		foreach ($data['category_name1']->result() as $value) {
			$cat_id = $value->cat_id;
		}

		$data['cat_detail1'] =$this->News_portal_model->cat_detail1($cat_id);
		$data['category_detail1'] =$this->News_portal_model->category_detail1($cat_id);

		$data['category_name2'] =$this->News_portal_model->category_name2();
		foreach ($data['category_name2']->result() as $cat2) {
			$cat_id2 = $cat2->cat_id;
		}
		$data['cat_detail2'] =$this->News_portal_model->cat_detail2($cat_id2);
		$data['category_detail2'] =$this->News_portal_model->category_detail2($cat_id2);

		$data['category_name3'] =$this->News_portal_model->category_name3();

		foreach ($data['category_name3']->result() as $cat3) {
			$cat_id3 = $cat3->cat_id;
		}
		$data['cat_detail3'] =$this->News_portal_model->cat_detail3($cat_id3);
		$data['cat_detail4'] =$this->News_portal_model->cat_detail4($cat_id3);
		$data['category_detail3'] =$this->News_portal_model->category_detail3($cat_id3);

		$data['popular1'] = $this->News_portal_model->popular1();
		$data['popular'] = $this->News_portal_model->popular();
		$data['featured'] = $this->News_portal_model->featured();
		$data['featured_images'] = $this->News_portal_model->featured_images();
		$data['cat_name'] = $this->News_portal_model->category_name();
		$data['breaking_news'] = $this->News_portal_model->breaking_news();
	
		$this->load->view('news/index.php', $data);
	}

	public function category($cat_name, $cat_id)
	{
		$data['popular1'] = $this->News_portal_model->popular1();
		$data['featured_images'] = $this->News_portal_model->featured_images();
		$data['cat_name'] = $this->News_portal_model->category_name();
		$data['breaking_news'] = $this->News_portal_model->breaking_news();
		$data['single_category'] = $this->News_portal_model->single_category($cat_name, $cat_id);
		$data['post_detail'] = $this->News_portal_model->post_detail($cat_name, $cat_id);
		$data['post_detail_carousel'] = $this->News_portal_model->post_detail_carousel($cat_name, $cat_id);
		$data['recent_post'] = $this->News_portal_model->recent_post();
		$data['trending_post'] = $this->News_portal_model->trending_post();
		$data['post_detail_carousel1'] = $this->News_portal_model->post_detail_carousel1($cat_name, $cat_id);
		$this->load->view('news/category.php', $data);
	}

	public function single_post($post_id)
	{
		$data['previous_post'] = $this->News_portal_model->previous_post($post_id);
		$data['next_post'] = $this->News_portal_model->next_post($post_id);
		$data['single_post_detail'] = $this->News_portal_model->single_post_detail($post_id);
		$data['popular1'] = $this->News_portal_model->popular1();
		$data['featured_images'] = $this->News_portal_model->featured_images();
		$data['recent_post'] = $this->News_portal_model->recent_post();
		$data['trending_post'] = $this->News_portal_model->trending_post();
		$data['cat_name'] = $this->News_portal_model->category_name();
		$this->load->view('news/single_post', $data);
	}

	// public function category_fashion()
	// {
	// 	$this->load->view('news/category_fashion.php');
	// }

	// public function category_health()
	// {
	// 	$this->load->view('news/category_health.php');
	// }

	// public function category_politics()
	// {
	// 	$this->load->view('news/category_politics.php');
	// }

	// public function category_science()
	// {
	// 	$this->load->view('news/category_science.php');
	// }

	// public function category_sports()
	// {
	// 	$this->load->view('news/category_sports.php');
	// }
	public function about()
	{
		$data['popular1'] = $this->News_portal_model->popular1();
		$data['featured_images'] = $this->News_portal_model->featured_images();
		$data['cat_name'] = $this->News_portal_model->category_name();
		$this->load->view('news/about.php', $data);
	}

	public function contact()
	{
		$data['popular1'] = $this->News_portal_model->popular1();
		$data['featured_images'] = $this->News_portal_model->featured_images();
		$data['cat_name'] = $this->News_portal_model->category_name();
		$this->load->view('news/contact.php', $data);
	}
}
 ?>