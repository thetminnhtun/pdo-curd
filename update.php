<?php

require_once 'functions.php';

$data = [];

$data['name'] = $_POST['name'] ?? '';
$data['email'] = $_POST['email'] ?? '';
$data['id'] = $_POST['id'] ?? '';

$data = array_values($data);

$status = update('users', $data, $id);

redirect('view.php');