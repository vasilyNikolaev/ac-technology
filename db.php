<?php
  $user = 'root';
  $pass = 121312;
  $connect = new PDO ('mysql:host=localhost; dbname=ac_technology; charset: utf8', $user, $pass);

  $link = mysqli_connect("localhost","root","121312","ac_technology");
  $result_product = mysqli_query($link, "
                  SELECT * FROM services

  ");
?>
