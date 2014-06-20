<?php

include_once('model/connectionsql.php');
include_once('controller/register.php');
include_once('login/login.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controller/index.php');
}
