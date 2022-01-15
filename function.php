<?php 

namespace auth;

class mailAuthenticator {

	public function mailauth($mail){
		$exploded = explode('@', $mail);
		$address = $exploded[1];
		$website = @file_get_contents("http://".$address);
		$siteaddressexploded = explode(".", $address);
		$sitename = $siteaddressexploded[0];
		$websitecontrol = strpos($website, "mail") ? true : false;
		$websitecontroltwo = strpos($website, $sitename) ? true : false;
		if(empty($website) || !isset($website) && empty($website)):
			return false;
		else:
			if ($websitecontrol):
				return true;
			else:
				if ($websitecontroltwo):
					return true;
				endif;
			endif;
		endif;
	}

}

 ?>
