<div class="container">
    <!-- <h1> Department of  </h1> -->
    <div class="row">
        <table id="data_table" class="table table-stripled table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Employee Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Hire Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
            require './includes/dao.php';
            require './includes/database.php';
            $id=$_GET["id"];
            $employees = getTableData($id);
            foreach($employees as $employee):
            ?>
                <tr>
                    <td><?php echo $employee['emp_no'];?></td>
                    <td><?php echo $employee['first_name'];?></td>
                    <td><?php echo $employee['last_name'];?></td>
                    <td><?php echo $employee['gender'];?></td>
                    <td><?php echo $employee['hire_date'];?></td>
                    <td class="text-center">
                        <i class="text-info bi bi-pencil-fill" style="cursor:pointer"></i>
                    </td>
                    <td class="text-center">
                        <i class="text-info bi bi-trash" style="cursor:pointer"></i>
                    </td>
                </tr>
            <?php
                endforeach
            ?>
        </table>
    </div>
</div>