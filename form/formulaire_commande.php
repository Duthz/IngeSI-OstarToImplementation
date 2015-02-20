<html>
<head>
	<title>Commande de produit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
</head>
<body>

    <?php 
    include("connexion.php");             ?>

	<?php 
		if(isset($_GET["code"]) && isset($_GET["libelle"]) && isset($_GET["quantiteStock"])){
	?>	

	<h1 class="bg-info"><?php echo "Commande du produit : ".$_GET["libelle"]." - ".$_GET["code"] ?></h1>
	<h2><?php echo "Quantité en stock : ".$_GET["quantiteStock"]?></h3>

	<?php $reference = isset($_GET['code']) ? $_GET['code'] : ""; ?>
	
	<form action="formulaire_client.php" method="POST">
		<input type="hidden" name="reference" value="<?php echo $reference; ?>" /> 
		<table class="table table-condensed">
			<tr><td>Quantité à commander</td>
				<td><input type="text" name="quantiteCommande"/></td>
			<td><input class="btn btn-primary" type="submit" value="Commander"/></td>
			</tr>
		</table>
	</form>

	<?php	
	
	}else{ ?>	
		
	<form action="formulaire_client.php" method="POST">
		<table class="table table-condensed">
			<tr><td>Quantité à commander</td>
				<td><input type="text" name="quantiteCommande"/></td>
			<td><input class="btn btn-primary" type="submit" value="Commander"/></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>