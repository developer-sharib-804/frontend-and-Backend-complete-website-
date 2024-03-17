

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image" href="img/glolo.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Student Data</h1>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: black;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        h1 {
            text-align: center;
            color: black;
            font-size:60px;
        }

        table {
            width:90%;
            margin:30px;
            border-collapse: collapse;
            align-items:center;
            background-color: white;
            border: 2px solid black;
            color: black;
            
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid black;
        }

        th {
            background-color: #f8d70c;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

<?php
include 'config.php';

$show = "SELECT * FROM registration";
$result = mysqli_query($conn , $show);
if($result){ ?>
    <table border="1" style="border-collapse:collapse;">
        <tr>
            <th>SNO</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Campus</th>
            <th>Password</th>
            <th>Course</th>
            <th>Education</th>
            <th>Gender</th>
            <th>Joining Date</th>
        </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){ ?>
        
        <tr>
            <td><?php echo $row['sno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['uname']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['campus']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['education']; ?></td>
            <td><?php echo $row['joindate']; ?></td>
        </tr>



    <?php } ?>
    </table>
<?php }


?>
