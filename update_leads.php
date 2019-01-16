<?php
		
	$token="d8fb53012f18b2f0bab830d2d1fb31e2";
	$xml = "
		<Leads>
			<row no=\"1\">
			<FL val=\"Company\">Test Fire Company</FL>
			<FL val=\"First Name\">Test Santhosh</FL>
			<FL val=\"Last Name\">Test Raj</FL>
			<FL val=\"Title\">Test Title</FL>
			<FL val=\"Email\">testemail234@gmail.com</FL>
			<FL val=\"Phone\">1234567890</FL>
			<FL val=\"Fax\">0014567890</FL>
			<FL val=\"Mobile\">9876543210</FL>
			<FL val=\"Website\">www.testweb.com</FL>
			<FL val=\"Lead Source\">Online Store</FL>
			<FL val=\"Lead Status\">Lost Lead</FL>
			<FL val=\"Industry\">ERP</FL>
			<FL val=\"No. of Employees\">50</FL>
			<FL val=\"Annual Revenue\">150000</FL>
			<FL val=\"Rating\">Active</FL>
			<FL val=\"Street\">Test Street</FL>
			<FL val=\"City\">Test City</FL>
			<FL val=\"State\">Test State</FL>
			<FL val=\"Zip Code\">Test Zipcode</FL>
			<FL val=\"Country\">Test Country</FL>
			</row>
		</Leads>
	";
	
	$result = update($token, $xml);
	print_r($result);
	
	function update($token, $xml)
	{
		$curl_url = "https://crm.zoho.com/crm/private/xml/Leads/updateRecords";
		$curl_auth_fields= "&id=3758824000000198014&authtoken=".$token."&scope=crmapi&xmlData=" .$xml. "";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $curl_url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_auth_fields);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}	
?>