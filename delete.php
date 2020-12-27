<?php

require_once 'functions.php';

$id = $_GET['id'] ?? '';

$status = delete('users', $id);

redirect('view.php');