<?php

require "conn.php";
$UpdateSql= "UPDATE courses set Employee_Salary=60 ";
if (mysqli_query($connect,$UpdateSql))
{
    header ('location:index.php');
}








?>