<?php
require "connection.php";
 if (isset($_POST['submit'])){

    $book_name=$_POST['book_name'];
    $author=$_POST['author'];
    $price=$_POST['price'];

    $sql="SELECT* FROM books";
$query= mysqli_query($connect,$sql);
if ($query){
 


if(mysqli_num_rows($query)> 0){
  echo "<table>";
  echo "<tr>";
  echo "<th> Book Name </th>";
  echo "<th>Author</th>";
  echo "<th>Price</th>";
  echo "</tr>";


while($row =mysqli_fetch_array($query)){
echo "<tr>";
echo "<td>".
$row['book_name']."</td>";
echo "<td>".
$row['author']."</td>";
echo"<td>".
$row['price']."</td>";
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