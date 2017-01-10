<?php
	error_reporting(E_ERROR );
	require_once '../config.php';
	$lead = DB::query("SELECT * FROM data");
	echo json_encode($lead);
?>
