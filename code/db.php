<?php
/* Database connection settings */
$host = 'localhost';
$user = 'user0';
$pass = 'csl203lab';
$db = 'lab';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
