<?php
require 'includes/database.php';
require 'includes/dao.php'
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
</head>
<body>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container">
            <h1 class="navbar-brand">Employee Dashboard</h1>
            &nbsp;&nbsp;&nbsp;
            <i class="bi-speedometer2 fs-l"></i>
        </div>
    </nav>
<div class="conatiner-fluid">
    <div class="row min-vh-100">
        <div class="col-auto bg-light">

            <div class="nav p-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#Home">
                            <i class="bi-house fs-l"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#Chart">
                            <i class="bi bi-pie-chart-fill fs-l"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#Table">
                            <i class="bi-table fs-l"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="col pt-5">
        <div id="Home" class="tab-content">
            <div class="row justify-content-center">
                <img class="w-50" src="./images/img.jpg" alt="image">
            </div>
        </div>
        <div id="Chart" class="tab-content">
            <?php require "chart.php";?>
        </div>
        <div id="Table" class="tab-content">
            <?php require "table_emp_custom.php";?>
        </div>
    </div>
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
