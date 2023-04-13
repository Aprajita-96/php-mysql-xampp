<?php

function getTableData($id){
    $database=EmployeeDatabase::getInstance();
    $db=$database->connect();

    $query="SELECT emp.emp_no, emp.first_name, emp.last_name, emp.gender, emp.hire_date FROM employees
    as emp, dept_emp as dept where dept_no=:dept_num and emp.emp_no=dept.emp_no LIMIT 100;";
    $statement=$db->prepare($query);
    $statement->bindValue(":dept_num",$id);
    $statement->execute();
    $row= $statement->fetchAll();
    $statement->closeCursor();
    return $row;
}
?>