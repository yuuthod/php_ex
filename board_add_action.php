<!-- board_add_action.php -->
<?php
    $board_pw = $_POST["board_pw"];
    $board_title = $_POST["board_title"];
    $board_content = $_POST["board_content"];
    $board_user = $_POST["board_user"];
 
    // echo "boardPw : ".$boardPw."<br>";
    // echo "boardTitle : ".$boardTitle."<br>";
    // echo "boardContent : ".$boardContent."<br>";  
    // echo "boardUser : ".$boardUser."<br>";
 
    $conn = mysqli_connect('localhost','root','java0000','yuuthodDB');
 
    $sql = "Insert Into board(board_pw,board_title,board_content,board_user,board_date) VALUES('".$board_pw."','".$board_title."','".$board_content."','".$board_user."',now())";
    $result = mysqli_query($conn, $sql);
 
    if($result){
        echo '입력 성공 :<br>'.$result;
        
    }else{
        echo '입력 실패 :<br>'.mysqli_error($conn);
 
    }
 
    mysqli_close($conn);
 
    header("Location: ./board_list.php");
?>