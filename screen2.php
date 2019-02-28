<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/screen2.css">
	<title>Screen 2</title>
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