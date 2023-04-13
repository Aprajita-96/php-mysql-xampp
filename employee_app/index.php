<?php
require './includes/database.php';
require './includes/dao.php';
require './includes/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navbar bg-info">
        <div class="container">
            <h1 class="navbar-brand text-white"><i class="bi bi-people fs-xl" style="
            margin-right: inherit;
            "></i>Departments</h1>
        </div>
    </nav>
<div class="container-custom">
    <div class="text">
        <?php
        $dept_array=array($depts);
        foreach($depts as $x=>$x_value):?>
        <a href="table_emp_custom.php?id=<?php echo $x_value?>" style="text-decoration:none"><?php echo $x;?></a></br>
        <?php endforeach?>
    </div>
    <div class="image">
    <img src="./images/img.jpg" alt="image">
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" 
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
 crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
