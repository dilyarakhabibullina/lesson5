<?php
const SERVER = 'localhost';
const DB = 'photos';
const PASS = 'root';
const LOGIN = 'root';

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die ('Connection failed, what\'s a pity');
?>