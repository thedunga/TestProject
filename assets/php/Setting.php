<?php
	date_default_timezone_set('Europe/London');
	require_once('Templates.php');

	class Setting extends Templates {
		
		protected $site_name, $site_url, $generate_url, $site_icon, $site_logo, $site_title, $makeimage;

		public function site_name(){
			return $this->site_name = "Go";
		}

		public function site_url(){
			return $this->site_url = 'http://localhost/go';
		}

		public function generate_url($url=''){
			if (empty($url) || $url == "") {
				return $this->generate_url = $this->site_url();
			} else {
				return $this->generate_url = $this->site_url().'/'.$url;
			}
		}

		public function site_icon(){
			return $this->site_icon = $this->site_url().'/assets/images/favicon.png';
		}

		public function site_logo(){
			return $this->site_logo = $this->site_url().'/assets/images/logo.png';
		}

		public function get_image($dir, $img){
			if ($dir !== false) {
				return $this->makeimage = $this->site_url().'/private/assets/images/'.$dir.'/'.$img;
			} else {
				return $this->makeimage = $this->site_url().'/private/assets/images/'.$img;
			}
		}

		public function get_date($tm,$format) {
			if ($format == 'unix') {
				return date('M jS, Y', $tm);
				exit();
			}
			return date('M jS, Y', strtotime($tm));
		}

		public function get_date_time($tm,$format) {
			if ($format == 'unix') {
				return date('M jS, Y - g:i A', $tm);
				exit();
			}
			return date('M jS, Y - g:i A', strtotime($tm));
		}
		
	}

	$setting = new Setting;
?>