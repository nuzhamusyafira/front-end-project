<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<title>Screen 2</title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Open+Sans);
		@mixin hidden-content() {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}
		body{
			margin: 0;
			min-width: 1488px;
			font-family: 'Open Sans';
		}
		.navbar{
			height: 80px;
			background-color: #38C4CA;
		}
		.schoter{
			font-size: 32pt;
			color: #FFFFFF;
			line-height: 80px;
			padding-left: 48px;
		}
		.schoter .text{
			float: left; 
			margin: 0 38px 0 0; 
			font-family: 'Helvetica';
		}
		.schoter .bar{
			float: left; 
			margin: 0 26px 0 0; 
			font-size: 26px;
		}
		.search{
			border-radius: 4px;
			font-size: 20pt;
			width: 788px;
			color: #9B9B9B;
			height: 50px;
			border: solid #979797;
			padding-left: 12px;
			margin-top: 14px;
			margin-right: 156px;
		}
		.login{
			float: left;
			line-height: 80px;
		}
		.login .text{
			width: 68px; 
			color: #9B9B9B; 
			font-size: 20pt; 
			float: left;
		}
		.login img{
			width: 40px; 
			height: 40px; 
			border-radius: 50%; 
			float: left; 
			margin: 20px 26px 0 0;
		}
		.login .bell{
			float: left; 
			margin: 0 65px 0 0; 
			font-size: 26px;
		}
		.menu{
			margin-top: 18px;
			margin-left: 48px;
			color: #B2B0B0;
			font-size: 20pt;
		}
		.header{
			margin-top: 24px;
			font-size: 36pt;
			color: #313131;
			font-weight: bold;
			font-family: 'Helvetica';
			margin-left: 264px;
		}
		.content{
			margin-top: 34px;
			width: 943px;
			font-size: 24pt;
			color: #545454;
			margin-left: 264px;
		}
		.bubble{
			margin-top: 44px;
			margin-left: 264px;
			font-size: 20pt;
			width: 943px;
		}
		.box{
			cursor: pointer;
			padding: 0 15px;
			height: 50px;
			margin-bottom: 30px;
			margin-top: -16px;
			margin-right: 18px;
			color: #545454;
			border: 1px solid #545454;
			border-radius: 50vh;
			float: left;
			line-height: 50px;
			background-color: #FBFBFB;
		}
		.box:hover{
			cursor: pointer;
			padding: 0 15px;
			height: 50px;
			margin-bottom: 30px;
			margin-right: 18px;
			color: #FFFFFF;
			border: 1px solid #2E9DA1;
			border-radius: 50vh;
			float: left;
			line-height: 50px;
			background-color: #38C4CA;
		}
		.checkbox{
			position: absolute;
			opacity: 0;
			cursor: pointer;
			height: 0;
			width: 0;
		}
		.checkbox:checked ~ .box{
			cursor: pointer;
			padding: 0 15px;
			height: 50px;
			margin-bottom: 30px;
			margin-right: 18px;
			color: #FFFFFF;
			border: 1px solid #2E9DA1;
			border-radius: 50vh;
			float: left;
			line-height: 50px;
			background-color: #38C4CA;
		}
		.done{
			cursor: pointer;
			text-align: center;
			line-height: 64px;
			padding-top: 0;
			border: none;
			border-radius: 6px;
			clear: both;
			height: 64px;
			width: 330px;
			font-size: 24pt;
			font-weight: bold;
			color: #FFFFFF;
			background-color: #5F9BE1;
		}
		.dialog{
			text-align: center;
			line-height: 60px;
			position: fixed;
			font-size: 25px;
			color: #FFFFFF;
			bottom: 40px;
			right: 65px;
			width: 60px;
			height: 60px;
			border-radius: 50%;
			cursor: pointer;
			background-color: #178FDD;
			border: solid #0B5789;
		}
		.container{
			margin-bottom: 30px;
			color: #545454;
		}
		.container img{
			border-radius: 4px;
			width: 200px;
			height: 100%;
		}
		.container .text{
			font-size: 30px;
			font-weight: bold;			
			color: #313131;
		}
	</style>
</head>
<body>
	<div class="navbar">
		<div class="schoter">
			<div class="bar"><i class="fa fa-bars"></i></div>
			<div class="text">Schoters</div>
		</div>
		<div style="float: left;">
			<input class="search" type="text" placeholder="Cari beasiswa apa?">
		</div>
		<div class="login">
			<div class="text">Login</div>
			<img src="https://us.123rf.com/450wm/alekseyvanin/alekseyvanin1704/alekseyvanin170403663/76699411-user-icon-vector-profile-solid-logo-illustration-pictogram-isolated-on-white.jpg?ver=6"/>
			<div class="bell"><i class="fa fa-bell"></i></div>
		</div>
	</div>
	<div class="menu">Home > Profile > Preference > Categories</div>
	<div class="header">Top Scholarship Categories that You Pick</div>
	<div class="bubble">
		<?php
			$json = file_get_contents('https://private-90552-schoterspersonal.apiary-mock.com/categories');
	        $obj = json_decode($json);
			if (isset($_POST['check'])){
				foreach ($_POST['check'] as $each_check){
					foreach ($obj as $o) {
						if ($o->id == $each_check) {
		?>
							<div class="container">
								<img src="<?php echo $o->image_url; ?>">
								<div class="text"><?php echo $o->name; ?></div>
								<div><?php echo $o->description_eng; ?></div>
							</div>
		<?php
								break;
						}
					}
				}
			}
		?>
	</div>
	<div class="dialog">
		<i class="fas fa-comment"></i>
	</div>
</body>
</html>