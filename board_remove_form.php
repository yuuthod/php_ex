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
            <?php
                $board_no = $_GET["board_no"];
            ?>
            <h1>글을 삭제하시려면 비밀번호를 입력해 주세요</h1>
            <form class="form-inline" id="removeForm" action="/board_remove_action.php" method="post">
                <input name="board_no" value="<?php echo $board_no ?>" type="hidden" />
                <div class="form-group">
                    <label for="boardPw">비밀번호확인 :</label> 
                    <input class="form-control" id="board_pw" name="board_pw" type="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-default" id="removeButton" type="submit" value="삭제" />
                </div>
            </form>            
        </div>
    </div>
    <!-- /Contact -->
		

    <?php
        require('./footer.php');
    ?>
		
	</body>
</html>
