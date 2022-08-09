<?php
$db=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=akara@4567");
$result = pg_query($db, "SELECT * FROM login");
$row=pg_fetch_array($result);
echo $row['name'];
?>

<!doctype html>
<html>
	<head>
		<title>Example website</title>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
      <style type="text/css">* {font-family: Inter;} body {padding: 2em;}</style>
	</head>
	<body>
		<div>
			<h1>Hello world!</h1>
			<p>This is a example website.</p>
            <!-- Hi! -->
			<p>
				<a href="#">Learn More</a>
			</p>
		</div>
	</body>
</html>