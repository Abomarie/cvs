<?php
	$msg="";
	include('connexion.php');
?>

 <!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--navigateur internet Exploreur-->
		<meta name="Viewport" content="witdth=device-width, initial-scale=1">
		<meta neme="description" content="c'est un blog">
		<meta name="author" content="">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	

		<title>cv</title>

	</head>

	<body>

		<div class="container" style="opacity: 0.85; padding:10px;">
			<div class="row-padding">

				<?php
				// Connexion à la base de données
				// une autre manière de se connecter à la base de données
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					// On récupère l'article selectionné
					$req = $bdd->prepare('SELECT id, nom,prenoms,naissance,resume,email,telephone,mdp,specialisation,photo FROM codeuses WHERE id=?');
					$req->execute(array($_GET['cv']));
					$donnees = $req->fetch();
					?>

			<table>
				<td><?php echo htmlspecialchars($donnees['nom']);?><?php echo htmlspecialchars($donnees['prenoms']);?><br>
					Né le <?php echo htmlspecialchars($donnees['naissance']);?><br>
					<?php echo htmlspecialchars($donnees['telephone']);?><br>
					<?php echo htmlspecialchars($donnees['email']);?>
				</td>
				<td style="margin-left: 50px"><?php echo htmlspecialchars($donnees['resume']);?>
					
				</td>
				<td style="margin-left: 50px;"><img src="upload/<?php echo $donnees['photo'];?>"  alt="" class="img-rounded" width="150px" height="150px"  /><br><?php echo htmlspecialchars($donnees['specialisation']);?>
				</td>
			</table>	  
					</div>
				</div>

				<div class="container" style="opacity: 0.85; padding:10px;">
			<div class="row-padding">
						<h2>Mes expériences</h2>
					<?php
				// Connexion à la base de données
				// une autre manière de se connecter à la base de données
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					// On récupère l'article selectionné
					$req = $bdd->prepare('SELECT id,titre,debut,fin,entreprise,id_codeuses FROM experiences INNER JOIN codeuses
                  ON codeuses.id = experiences.id_codeuses WHERE id=?');
					$req->execute(array($_GET['cv']));
					$donnees = $req->fetch();
					?>
					<table>
						<td><?php echo htmlspecialchars($donnees['debut']);?>-<?php echo htmlspecialchars($donnees['fin']);?></td>
						<td><?php echo htmlspecialchars($donnees['titre']);?></td>
						<td><?php echo htmlspecialchars($donnees['entreprise']);?>
					</table>


			</div>
		</div>

			<div class="container" style="opacity: 0.85; padding:10px;">
			<div class="row-padding">
					<h2>Mes diplômes</h2>
				<?php
				// Connexion à la base de données
				// une autre manière de se connecter à la base de données
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					// On récupère l'article selectionné
					$req = $bdd->prepare('SELECT id,anne,libelle,ecole,id_codeuses FROM codeuses WHERE id=?');
					$req->execute(array($_GET['cv']));
					$donnees = $req->fetch();
					?>

			<table>
				<td><?php echo htmlspecialchars($donnees['anne']);?>
				</td>
				<td><?php echo htmlspecialchars($donnees['ecole']);?>
				</td>
				<td><?php echo htmlspecialchars($donnees['libelle']);?></td>
			</table>	  
					</div>
				</div>

				

					
		
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>