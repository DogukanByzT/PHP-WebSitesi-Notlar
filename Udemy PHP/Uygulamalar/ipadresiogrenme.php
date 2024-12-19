<?php 
function IPBUL() 
{
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ipadress = $_SERVER['HTTP_CLIENT_IP'];
	}
		elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
		$ipadress = $_SERVER["HTTP_X_FORWARDED_FOR"];
		}	
			else{
			$ipadress = $_SERVER["REMOTE_ADDR"];
			return 0;
			}
}
 echo $ip=IPBUL();

 ?>