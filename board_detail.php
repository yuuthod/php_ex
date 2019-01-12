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
            <h1>궁금한점을 작성해주세요.</h1>
            <?php
                $board_no = $_GET["board_no"];
                $conn = mysqli_connect('localhost','root','java0000','yuuthodDB');       
                $sql = "select board_no,board_title,board_content,board_user,board_date from board where board_no='".$board_no."'";      
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    //echo "success!";
                }else{
                    echo mysqli_error($conn);
                }
            ?>
            <table class="table board-detail">
                <?php
                if($row=mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th class="">no</th>
                        <td>
                            <?php
                                echo $row["board_no"];
                            ?>
                        </td>
                        <th>글쓴이</th>
                        <td>
                            <?php
                                echo $row["board_user"];
                            ?>
                        </td>
                        <th>날짜</th>
                        <td>
                            <?php
                                echo $row["board_date"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>제목</th>
                        <td>
                            <?php
                                echo $row["board_title"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td colspan="5">
                            <?php
                                echo $row["board_content"];
                            ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
            <div class="btn-box">
                <a class="btn btn-default" href="/board_list.php">글목록</a>
                <?php
                    echo "<a class='btn btn-default' href='/board_modify_form.php?board_no=".$row["board_no"]."'>수정</a>";
                    echo "<a class='btn btn-default' href='/board_remove_form.php?board_no=".$row["board_no"]."'>삭제</a>";
                ?>
            </div>
            
        </div>
    </div>
    <!-- /Contact -->
		

    <?php
        require('./footer.php');
    ?>
		
	</body>
</html>
