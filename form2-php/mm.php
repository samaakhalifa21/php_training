<?php
require "conn.php";
 if (isset($_POST['submit'])){
  $id=$_POST['id'];
   $Employee_Name=$_POST['Employee_Name'];
    $Employee_Salary=$_POST['Employee_Salary'];
    $Employee_Address=$_POST['Employee_Address'];
    $gender=$_POST['gender'];
    $image=$_FILES['my_work']['name'];
    $mm="insert into courses(id,Employee_Name,Employee_Salary,Employee_Address,gender,file) values ('$id','$Employee_Name',' $Employee_Salary','$Employee_Address','$gender','$image')";
$sql="SELECT* FROM courses";
$query= mysqli_query($connect,$mm);
$query= mysqli_query($connect,$sql);
if ($query){
 


  if(mysqli_num_rows($query)> 0){
    echo "<table border>";
    echo "<tr>";
    echo "<th> id </th>";
    echo "<th>Employee_Name</th>";
    echo "<th>Employee_Salary</th>";
    echo "<th>Employee_Address</th>";
    echo "<th>gender</th>";
    echo "<th>upload</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
  
  
  while($row =mysqli_fetch_array($query)){
  echo "<tr>";
  echo "<td>".
  $row['id']."</td>";
  echo "<td>".
  $row['Employee_Name']."</td>";
  echo"<td>".
  $row['Employee_Salary']."</td>";
  echo "<td>".
  $row['Employee_Address']."</td>";
  echo "<td>".
  $row['gender']."</td>";
  echo"<td>".
  $row['file']."</td>";
  echo"<td>";
  echo"<a href='delete.php' class='btn btn-success mx -1'> Delete</a>";
  echo"<a href='update.php'> Update</a>";
  echo"</td>";
  echo "</tr>";
  }
  echo "</table>";
  mysqli_free_result ($query);
  }
  else{
  echo "No records matching your
  query were found.";
  }
  }
   
  else {
  echo "Error: ".mysqli_error($connect);
  }
  
  mysqli_close($connect);

 }



?>
