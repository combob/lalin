<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<?php
			echo anchor('Shops/index', 'Shops');
			echo '|';
			echo anchor('brands/index', 'Brands');
			
			echo br();
			echo "Fullname: ".$result->fname." ".$result->lname;
			echo br();
			echo "Username: ".$result->username;
			echo br();
			echo "Email: ".$result->gmail;
			echo br();
			echo "Phone Number: ".$result->phone;
			echo br();
			echo anchor('Logins/logout', 'Logout');
		?>
	</body>
</html>