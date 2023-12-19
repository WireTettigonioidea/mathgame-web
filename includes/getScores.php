<?php
header('Content-Type: application/json; charset=utf-8');
include_once 'config.php';
include_once 'db.php';

$json_data = [];

// Data request from firebase

echo json_encode($json_data);