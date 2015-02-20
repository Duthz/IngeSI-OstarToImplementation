<html>
    <header><title>Réapprovisionner</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    </header>
    <body>
    <?php include("connexion.php") ?>
    <?php
        if(isset($_GET["idReapp"])){
            $req="CALL resupplying(?)";
            $co=connect();
            $requete=$co->prepare($req);
            $requete->bindParam(1,$_GET["idReapp"]);
            $verif=$requete->execute();
            header("Location: liste_reapprovisionnement.php");
        }
    ?>
    </body>
</html>
