<?php
require"./database.php";
if(isset($_GET["delete"])){
    $id = $_GET["delete"];
    $sql = "DELETE FROM student WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    if($result){
    header("location: display.php");
}else{
        die(mysqli_error($connection));
}
}
?>