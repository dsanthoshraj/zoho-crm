<?php

	header("Content-type: application/xml");
	$token="d8fb53012f18b2f0bab830d2d1fb31e2";
	$curl_url = "https://crm.zoho.com/crm/private/xml/Leads/getRecords";
	$curl_auth_fields= "authtoken=".$token."&scope=crmapi";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $curl_url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_auth_fields);
	$result = curl_exec($ch);
	curl_close($ch);
	echo $result;
	return $result;
	
?>