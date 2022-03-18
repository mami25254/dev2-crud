<?php
include 'functions/functions.php';

$id = $_GET['id'];

delete($id);

$id2 = $_GET['id2'];

delete_user($id2);


?>