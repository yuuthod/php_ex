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
            $current_page = 1;
            
            if(isset($_GET["current_page"])){
                $current_page = (int)$_GET["current_page"];
            }
            $total_row_count = 0;
            $conn = mysqli_connect('localhost','root','java0000','yuuthodDB');
            
            $sql1 = "select count(*) as max From board";
            $result1 = mysqli_query($conn,$sql1);
            
            if($row=mysqli_fetch_array($result1)){
                $total_row_count = $row["max"];
                // echo $row["max"];
            }
            $page_per_row = 10;
            $now_page = ($current_page-1)*$page_per_row;
            $sql2 = "select board_no,board_title,board_user,board_date From board ORDER BY board_no DESC LIMIT $now_page,$page_per_row";      
            $result2 = mysqli_query($conn,$sql2);
            
            if($result2){
                // echo "select success!";
            }else{
                echo mysqli_error($conn);
            }
        ?>
        <table class="table table-striped">
            <tr>
                <td>no</td>
                <td class="title">제목</td>
                <td>글쓴이</td>
                <td>날짜</td>
            </tr>
            <?php
                while($row=mysqli_fetch_array($result2)) {
            ?>
                    <tr>
                        <td>
                            <?php
                                echo $row["board_no"];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo "<a href='/board_detail.php?board_no=".$row["board_no"]."'>";
                                echo $row["board_title"];
                                echo "</a>"
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row["board_user"];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row["board_date"];
                            ?>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
        <?php
            $last_page = $total_row_count/$page_per_row;
            if($total_row_count%$page_per_row !=0){
                $last_page++;
            }
        ?>
        <ul class="pager">
            <?php
                if($current_page>1){
            ?>
                    <li class="previous"><a href="/board_list.php?current_page=<?php echo $current_page-1?>">이전</a></li>
            <?php        
                }
                if($current_page < $last_page-1){
            ?>
                    <li class="next"><a href="/board_list.php?current_page=<?php echo $current_page+1?>">다음</a></li>
            <?php
                }
            ?>
        </ul>
        <div class="btn-box">
            <a class="btn btn-default" href="/board_add_form.php">게시글 입력</a>
        </div>
    </div>
    </div>
    <!-- /Contact -->
		

    <?php
        require('./footer.php');
    ?>
		
	</body>
</html>
