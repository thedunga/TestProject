<?php
	class Templates {

		private $site_name = 'Foscrip';
		private $site_url = 'https://foscrip.com';
		private $site_support_mail = 'support@foscrip.com';
		private $site_contact_mail = 'contact@foscrip.com';
		
		public function _registration($_data){
			$title = $this->site_name.' Registration Information';
			$headers = "MIME-Version: 1.0" . PHP_EOL;
			$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
			$headers .= "From: $this->site_name Support Team <$this->site_support_mail>" . PHP_EOL;
			$headers .= "Organization: $this->site_name Investments" . PHP_EOL;
			$headers .= "Reply-To: $this->site_name Support Team <$this->site_support_mail>" . PHP_EOL;
			$headers .= "Return-Path: $this->site_name <$this->site_support_mail>" . PHP_EOL;
			$headers .= "X-Priority: 3" . PHP_EOL;
			$headers .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;
			$message = '';
			@mail($_data["user_email"],$title,$message,$headers,"-femail.support@foscrip.com");
		}

	}
?>