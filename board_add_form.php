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
        <form id="addForm" action="/board_add_action.php" method="post">
            <div class="form-group">
                <label for="board_pw">비밀번호 :</label> 
                <input class="form-control" name="board_pw" id="board_pw" type="password" />
            </div>
            <div class="form-group">
                <label for="board_title">제목 :</label> 
                <input class="form-control" name="board_title" id="board_title" type="text" />
            </div>
            <div class="form-group">
                <label for="board_content">내용 :</label>
                <textarea class="form-control" name="board_content" id="board_content" rows="10" cols="70"></textarea>
            </div>
            <div class="form-group">
                <label for="board_user">이름 :</label> 
                <input class="form-control" name="board_user" id="board_user" type="text" />
            </div>
            <div class="btn-box">
                <input class="btn btn-default" id="addButton" type="submit" value="글입력" /> 
                <input class="btn btn-default" type="reset" value="초기화" /> 
                <a class="btn btn-default" href="/board_list.php">글목록</a>
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
