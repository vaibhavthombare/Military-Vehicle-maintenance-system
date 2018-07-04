<?php

$fname=htmlspecialchars($_POST["fname"]);

$lname=htmlspecialchars($_POST["lname"]);

echo $fname." ".$lname;