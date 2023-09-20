
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"href="css/main.css">
</head>
<body text =red>
    
<form action ="mm.php" method="POST" enctype="multipart/form-data">
<fieldset>
id <input type="text" name ="id" id="id" required placeholder="id"><br>
Employee Name <input type="text" name ="Employee_Name" id="Employee_Name" required placeholder="Employee_Name "><br>
Employee Salary <input type="text" name ="Employee_Salary" id="Employee_Salary" required placeholder="Employee_Salary" ><br>
Employee Address <input type="text" name ="Employee_Address" id="Employee_Address" required placeholder="Employee_Address" ><br>
Gender <input type="radio" id ="male" value="Male" name="gender">
<label for="male">Male</label>
<input type="radio" id ="female" value="Female"name="gender">
<label for="Female">Female</label><br>
upload photo <input type ="file" name ="my_work" value=""><br>
<input type="submit" name ="submit" id=" submit" value="submit" >
</fieldset>
</form>
</body>
</html>

