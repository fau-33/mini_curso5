<html>
	<head>
		<title>Instagram</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	<body>
		<div id="primeira">
			<div id="topo">
				<img id="logo" src="instagram_logo.png" height="35" />
			</div>			
		</div>

		<div class="area">
		    
			<div class="post">
				<img onclick="abrirLigthbox(this)" src="fotos/foto1.jpg" width="100%" />
			</div>
			
		</div>
		
		<div id="ligthbox_fundo" onclick="fecharLigthbox()"></div>
		<div id="ligthbox_foto" onclick="fecharLigthbox()"></div>
		
		<script type="text/javascript">
            function abrirLigthbox(obj){
                document.body.scrollTop = 0;
                
                document.getElementById(ligthbox_fundo).style.backgroundColor = "#000000";
                
                document.getElementById(ligthbox_fundo).style.display = "block";
                document.getElementById(ligthbox_foto).style.display = "block";
                
                document.getElementById(ligthbox_foto).innerHTML = "<img src='"+obj.getAttribute("src")+"' width='100%'/>";
            }
            function fecharLigthbox(){
                document.getElementById(ligthbox_fundo).style.display = "none";
                document.getElementById(ligthbox_foto).style.display = "none";
            }
            
            
            
        </script>
		
		
	</body>
</html>