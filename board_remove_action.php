<?php
    $board_no = $_POST["board_no"];
    $board_pw = $_POST["board_pw"];
 
    $conn = mysqli_connect('localhost','root','java0000','yuuthodDB');
    $sql = "delete from board where board_no=".$board_no." and board_pw='".$board_pw."'" ;
    $result = mysqli_query($conn, $sql);
 
    if($result){
        echo "success!";
    }else{
        echo mysqli_error($conn);
    }
 
    mysqli_close($conn);
    header("Location: ./board_list.php");
?>