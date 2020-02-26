<html>
	<head>
		<title>Página de Exemplo</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	<body>
		<div id="primeira">
			<div id="topo">
				<img id="logo" src="instagram_logo.png" height="35" />
			</div>			
		</div>

		<div class="area">
		    <?php
                
                $pdo = new PDO("mysql:dbname=instagram;host=localhost", "root", "");
            ?>
			<div class="post">
				<img src="fotos/foto1.jpg" width="100%" />
			</div>
		</div>
	</body>
</html>