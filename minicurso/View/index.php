<html>
<head>
	<title>PHPConf - Mini-curso</title>
</head>
<body>
	<h1>Index.php</h1>
	<div>Div 1, teste!</div>
	<?php
		require(__DIR__ . './../index.php');
		var_dump($users);
	?>
</body>
</html>