<html>
<head>
	<title>Liste des produits</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
</head>
<body>
    <?php include("connexion.php") ?>
	<?php
		$req="SELECT * FROM produit";
		$co=connect();	
		$requete=$co->query($req);
		echo'
		<h1 class="bg-info">Liste des produits</h1>
		<table class="table table-condensed">
			<tr>
				<th>Code Barre</th>
				<th>Libellé</th>
				<th>Fournisseur</th>
				<th>Seuil</th>
				<th>Quantité en stock</th>
				<th>Quantité de réapprovisionnement</th>
				<th>Commander</th>
			<tr>';
		while($liste = $requete->fetch()){
			echo'<tr>
				<td>'.$liste["reference"].'</td>
				<td>'.$liste["libelle"].'</td>
				<td>'.$liste["fournisseur"].'</td>
				<td>'.$liste["seuil"].'</td>
				<td>'.$liste["quantiteStock"].'</td>	
				<td>'.$liste["quantiteReapprovisionnement"].'</td>	
				<td><a class="btn btn-primary" href="formulaire_commande.php?code='.$liste["reference"].'&libelle='.$liste["libelle"].'&quantiteStock='.$liste["quantiteStock"].'">Commander</a></td>	
			</tr>';
		}	
		echo"		
		</table>	
		";
	?>
</body>
</html>