<?php
session_start();
session_unset();

     echo '<script language="javascript">';
     		echo 'window.location.href="login.html";';
      echo '</script>';