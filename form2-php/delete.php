<?php

require "mm.php";
require "conn.php";
  
$deleteSql= "DELETE FROM courses ";
if (mysqli_query($connect,$deleteSql))
{
    header ('location:index.php');
}









?>