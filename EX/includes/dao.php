<?php

function getCountByGender($val){
    $database=EmployeeDatabase::getInstance();
    $db=$database->connect();

    $query="SELECT COUNT(*) as count from employees where gender=:gender;";
    $statement=$db->prepare($query);
    $statement->bindValue(":gender",$val);
    $statement->execute();
    $row= $statement->fetch();
    $statement->closeCursor();
    return $row['count'];

}
function getTableData(){
    $database=EmployeeDatabase::getInstance();
    $db=$database->connect();

    $query="SELECT * FROM employees LIMIT 200;";
    $statement=$db->prepare($query);
    $statement->execute();


    $row= $statement->fetchAll();
    $statement->closeCursor();
    return $row;
}
?>