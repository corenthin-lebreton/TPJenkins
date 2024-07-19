<?php
#test modification 3
$m = new mysqli("localhost", "user", "password", "db01");
$m->query("SELECT * FROM users WHERE username='admin' AND 
password='".$_REQUEST["pwd"]."'");
$m->close();
?>
