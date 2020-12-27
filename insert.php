<?php

require_once 'functions.php';

$data = [];

$data['name'] = $_POST['name'] ?? '';
$data['email'] = $_POST['email'] ?? '';
$data['password'] = $_POST['password'] ?? '';

$data = array_values($data);

$status = create('users', $data);

redirect('view.php');