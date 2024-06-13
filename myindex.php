<?php

require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from database</title>

    <style>
        body {
            background-color: #343a40;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin: 0 auto;
            max-width: 800px;
            border: 1px solid #ccc;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .card-body {
            padding: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        .table, .table th, .table td {
            border: 1px solid #ccc;
        }
        .table th, .table td {
            padding: 10px;
            text-align: center;
        }
    </style>

</head>
<body class="bg-dark">
<div class="container">
    <div class= "row"> 
        <div class= "col">
            <div class= "card">
<div class= "card-header">
    <h2 class= "display text-6 text-center"> Fetch data from Dbase PHP</h2>
    </div>
    <div class="card-body"> 
        <table class="table table-bordered text-center">
         <tr style="background-color: navy; color: white;">
<td>User ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
</tr>
<tr>
<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['UserId']; ?></td>
<td><?php echo $row['firstname']; ?></td>
<td><?php echo $row['lastname']; ?></td>
<td><?php echo $row['email']; ?></td>


</tr>
<?php
}
?>

        </table>

    </div>
            </div>
            </div>
    </div>
</div>
    
</body>
</html>