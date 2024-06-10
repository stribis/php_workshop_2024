<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Blog';

$blogs = $db->query('select * from blogs where user_id = 1')->get();

require "views/blogs.view.php";