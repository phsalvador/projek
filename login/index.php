<?php
ini_set('display_erros',0);
error_reporting(0);
?>	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projek</title>
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
	<div id="Cadastrar"><a href="/cadastro.php" title="Cadastre-se e faça parte da nossa equipe!">Cadastre-se &raquo;</div>
	<div id="login" class="bradius">
    	<div class="message"></div>
        <div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="css/img/logo.png" alt="<?php echo $title;?>" title="<?php echo $title;?> width="250" height="76"></div>
        <div class="acomodar">
        <form action="" method="post">
        <label for="email">E-mail:</label><input id="email "type="text" class="txt bradius" name="email" value=""/>
        <label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" name="senha" value=""/>
        <input type="submit" class="sb bradius" value="Entrar"/>
        </form>
        
        </div>
    </div>
</body>
</html>