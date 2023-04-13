<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="main.css">

<section id="body">
<div class="container">
    <!-- <h1> Department of  </h1> -->
    <div class="row">
        <h1 style="color:blue;margin-bottom: 1em;">Department of 
            <?php require './includes/data.php';
            $id=$_GET["id"];
            foreach($depts as $key=>$value){
                if($value==$id){  
                    echo $key;
                }
            }
            ?>
        </h1>
        <div id="ta">
        <table id="data_table" class="table table-stripled table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Employee Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Hire Date</th>

                </tr>
            </thead>
            <?php
            require './includes/dao.php';
            require './includes/database.php';
            $employees = getTableData($id);
            foreach($employees as $employee):
            ?>
                <tr>
                    <td><?php echo $employee['emp_no'];?></td>
                    <td><?php echo $employee['first_name'];?></td>
                    <td><?php echo $employee['last_name'];?></td>
                    <td><?php echo $employee['gender'];?></td>
                    <td><?php echo $employee['hire_date'];?></td>

                </tr>
            <?php
                endforeach
            ?>
        </table>
        </div>
    </div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" 
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
 crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>