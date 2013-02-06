<?php

class Pages extends CI_Controller {

	public function view($page = 'about') {
		$this->load->helper('file');
		
		if (!file_exists('application/views/static/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page);
		$data['page'] = $page;
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('static/' . $page,  $data);
		$this -> load -> view('templates/footer', $data);
	}

}
?>