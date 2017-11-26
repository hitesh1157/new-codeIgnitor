<!-- For example, when a call is made to:

http://example.com/news/latest/10
We might imagine that there is a controller named “news”. The method being called on news would be “latest”. The news method’s job could be to grab 10 news items, and render them on the page. Very often in MVC, you’ll see URL patterns that match:

http://example.com/[controller-class]/[controller-method]/[arguments] -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home') {

		
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
        
	}
}