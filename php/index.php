<?php


include("vendor/autoload.php");

use Libs\Database\MySQL;
use Carbon\Carbon;
use Support\Auth;


$db = new MySQL;
$db->connect();

$auth = new Auth;
$auth->check();



echo Carbon::now()->addDay();
