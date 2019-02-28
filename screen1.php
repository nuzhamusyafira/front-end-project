<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/screen1.css">
	<title>Screen 1</title>
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
	<div class="menu">Home > Profile > Preference</div>
	<div class="header">Personalize your Schoters homepage</div>
	<div class="content">Pick 5 top scholarship categories that you are interested to help us deliver the most relevant information with your preferences</div>
	<div class="bubble">
		<form name="search-form" action="screen2.php" method="post">
			<?php
				$json = file_get_contents('https://private-90552-schoterspersonal.apiary-mock.com/categories');
		        $obj = json_decode($json);
		        foreach ($obj as $o) {
			?>
			<label>
				<input class="checkbox" type="checkbox" name="check[]" value="<?php echo $o->id; ?>">
				<div class="box"><?php echo $o->name; ?></div>
			</label>
			<?php
				}
			?>
			<div class="done" onclick="document.forms['search-form'].submit();">Done</div>
		</form>
	</div>
	<div class="dialog">
		<i class="fas fa-comment"></i>
	</div>
</body>
</html>