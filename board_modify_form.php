<!DOCTYPE html>
<html>
	<head>
	<?php
		require('./head.php');
	?>
    </head>
	<body>

	<?php
		require('./header.php');
    ?>
    
    <!-- Hero-area -->
	<div class="hero-area section">
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="index.html">Home</a></li>
                        <li>Q&#38;A</li>
                    </ul>
                    <h1 class="white-text">Q&#38;A</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Hero-area -->

    <!-- Contact -->
    <div id="contact" class="section">
        <!-- container -->
        <div class="container board-content">
            <h1>질문 게시판</h1>
            <?php
                $board_no = $_GET["board_no"];
                $conn = mysqli_connect('localhost','root','java0000','yuuthodDB'); 
                $sql = "select board_no,board_title,board_content,board_user,board_date from board where board_no='".$board_no."'";      
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    echo "success!";
                }else{
                    echo mysqli_error($conn);
                }
            
                if($row=mysqli_fetch_array($result)) {
            ?>
            <form id="addForm" action="/board_modify_action.php" method="post">
                <div class="form-group">
                    <label for="board_no">boardNo :</label> 
                    <input class="form-control" name="board_no" id="board_no" type="text" value="<?php echo $board_no;?>" readonly/>
                </div>
                <div class="form-group">
                    <label for="board_pw">boardPw :</label> 
                    <input class="form-control" name="board_pw" id="board_pw" type="password" />
                </div>
                <div class="form-group">
                    <label for="board_title">boardTitle :</label>
                    <input class="form-control" name="board_title" id="board_title" type="text" value="<?php echo $row["board_title"];?>"/>
                </div>
                <div class="form-group">
                    <label for="boardContent">boardContent :</label>
                    <textarea class="form-control" name="board_content" id="board_content" rows="5" cols="50"><?php echo $row["board_content"];?></textarea>
                </div>
                <div>
                    <input class="btn btn-default" id="addButton" type="submit" value="글수정" />  
                </div>
            </form>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- /Contact -->
		

    <?php
        require('./footer.php');
    ?>
		
	</body>
</html>
