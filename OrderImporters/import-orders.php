<?php
	header('Content-Type: application/json');
	
    $api = $modules->get('OrderImporters')->get_importer();
    $orders = $api->import($input, $limit = 0);
    
    echo json_encode($orders);