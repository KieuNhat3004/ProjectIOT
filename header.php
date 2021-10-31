<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' type='text/css' href="css1/bootstrap.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/header1.css"/>
</head>
<header>
<div class="header">
	<div class="logo">
		<a href="index.php">Lac Hong University</a>
		<p>Thanh San - Việt Nhật - Văn Viên - Thanh Trúc</p>
	</div>
</div>
<?php  
  if (isset($_GET['error'])) {
		if ($_GET['error'] == "wrongpasswordup") {
			echo '	<script type="text/javascript">
					 	setTimeout(function () {
			                $(".up_info1").fadeIn(200);
			                $(".up_info1").text("The password is wrong!!");
			                $("#admin-account").modal("show");
		              	}, 500);
		              	setTimeout(function () {
		                	$(".up_info1").fadeOut(1000);
		              	}, 3000);
					</script>';
		}
	} 
	if (isset($_GET['success'])) {
		if ($_GET['success'] == "updated") {
			echo '	<script type="text/javascript">
			 			setTimeout(function () {
			                $(".up_info2").fadeIn(200);
			                $(".up_info2").text("Your Account has been updated");
              			}, 500);
              			setTimeout(function () {
                			$(".up_info2").fadeOut(1000);
              			}, 3000);
					</script>';
		}
	}
?>
<div class="topnav" id="myTopnav">
	<a href="index.php">Bảng Điều Khiển</a>
	<a href="devices.php">Thiết Bị</a>
	<!-- <a href="User.php">Nhân Viên</a> -->
	<!-- <ul class="menu">
		<li>
			<a href="#">Nhân Viên<span class="arrow">&#9660;</span></a>

			<ul class="sub-menu">
			<li><a href="User.php">Danh Sách Nhân Viên</a></li>
			<li><a href="ManageUsers.php">Quản Lý Nhân Viên</a></li>
			<li><a href="UsersLog.php">Nhật Ký Nhân Viên</a></li>
		</ul>
		</li>
	</ul> -->
		<!-- <div class="wrapper">
			<nav class="menu">
				<ul class="clearfix">
					<li>
						<a href="#">Nhân Viên<span class="arrow">&#9660;</span></a>
		
						<ul class="sub-menu">
						<li><a href="User.php">Danh Sách Nhân Viên</a></li>
						<li><a href="ManageUsers.php">Quản Lý Nhân Viên</a></li>
						<li><a href="UsersLog.php">Nhật Ký Nhân Viên</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div> -->

		<div id="menu">
            <ul>
                <li>
                    <a href="User.php">Nhân Viên  <span class="arrow">&#9660;</span></a>
                    <ul class="menu-con">
                        <li>
                            <a href="ManageUsers.php">Quản Lý Nhân Viên</a>
                            <ul class="menu-con1">
                                <li>
									<a href="UsersLog.php">Nhật Ký Nhân Viên</a>
								</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

	
    <!-- <a href="ManageUsers.php">Quản Lý Nhân Viên</a>
    <a href="UsersLog.php">Nhật Ký Nhân Viên</a> -->
    
	
	<div style="float: right;">
	
		<?php  
			if (isset($_SESSION['Admin-name'])) {
				echo '<a href="#" data-toggle="modal" data-target="#admin-account">'.$_SESSION['Admin-name'].'</a>';
				echo '<a href="logout.php">Log Out</a>';
			}
			else{
				echo '<a href="login.php">Log In</a>';
				
			}
		?>
	</div>
    
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
	  <i class="fa fa-bars"></i></a>
	  <!-- <p>Cảnh báo: Không!</p> -->
	  
</div>
<div class="up_info1 alert-danger"></div>
<div class="up_info2 alert-success"></div>
</header>
<script>
	function navFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
</script>

<!-- Account Update -->
<div class="modal fade" id="admin-account" tabindex="-1" role="dialog" aria-labelledby="Admin Update" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Cập Nhật Thông Tin Tài Khoản:</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="ac_update.php" method="POST" enctype="multipart/form-data">
	      <div class="modal-body">
	      	<label for="User-mail"><b>Tên Tài Khoản:</b></label>
	      	<input type="text" name="up_name" placeholder="Enter your Name..." value="<?php echo $_SESSION['Admin-name']; ?>" required/><br>
	      	<label for="User-mail"><b>Tài Khoản E-mail:</b></label>
	      	<input type="email" name="up_email" placeholder="Enter your E-mail..." value="<?php echo $_SESSION['Admin-email']; ?>" required/><br>
	      	<label for="User-psw"><b>Mật Khẩu</b></label>
	      	<input type="password" name="up_pwd" placeholder="Enter your Password..." required/><br>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" name="update" class="btn btn-success">Lưu Thay Đổi</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
	      </div>
	  </form>
    </div>
  </div>
</div>
<!-- //Account Update -->
	

	
