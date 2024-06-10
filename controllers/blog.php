<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Blog';
$currentUserId = 1;

$blog = $db->query('select * from blogs where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($blog['user_id'] === $currentUserId);

require "views/blog.view.php";