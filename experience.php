<?php include('connexion.php');
	$msg="";
	/*include('menu.php');*/
	if (isset($_POST['btnValider'])){
			$sql= "INSERT INTO experiences
			 (titre,debut,fin,entreprise,id_codeuses)
			 VALUES ('".mysqli_real_escape_string($link,$_POST['titre'])."',
			 		  '".mysqli_real_escape_string($link,$_POST['debut'])."',
			 		  '".mysqli_real_escape_string($link,$_POST['fin'])."',
			 		  '".mysqli_real_escape_string($link,$_POST['entreprise'])."',
			 		  '".mysqli_real_escape_string($link,$_POST['id_codeuses'])."')";
			$result=mysqli_query($link,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		

	}
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ajouter une expérience</title>

		<link rel="stylesheet" href="css/bootstrap.css" >

	</head>
	<body style="background-color: salmon;">
		
		 <div class="container-fluid">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

                        <span class="sr-only"> toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>

                    <a href="" class="navbar-brand a"> SheisthecodeCv</a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse" style="margin-left: 700px">
                    
                    <ul class="nav navbar-nav">

                        <li> <a href="#"> a propos </a></li>
                        <li> <a href="#"> user</a></li>
                    
                        
                    </ul>
                </div>
                
            </nav>
            </div>

		<table width="100%">
				<tr>
					<td width="22%" valign="top" style="margin-left: 20px;">
						<a href="modifier.php">Modifier le profil</a><br><br>
						<a href="creer.php">créer CV </a><br><br>
						<a href="cv.php">Afficher votre CV</a><br><br>
						<a href="experience.php">Ajouter Experience</a><br><br>
						<a href="diplome.php">Ajouter Diplome</a><br><br>
						<a href="interet.php">Ajouter Centre d'interet</a>
					</td>
					<td width="78%">
						<div class="container">

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">

									<form action="" method="POST" role="form" enctype="multipart/form-data">
										<legend><center><h2>Ajouter expérience</h2></center></legend>
										<span> <?php echo $msg; ?> </span>
									
										<div class="form-group">
											<label for="">Organisation</label>
											<input name="entreprise" type="text" class="form-control" id="" placeholder="nom de l'entreprise">
										</div>

										<div class="form-group">
											<label for="">Poste occupé</label>
											<input name="titre"" type="text" class="form-control" id="" placeholder="le poste occupé bdans l'entriprise">
										</div>

										<div class="form-group">
											<label for="">Date debut</label>
											<input name="debut" type="text" class="form-control" id="" placeholder="l'année d'obtention du diplôme">
										</div>
										
										<div class="form-group">
											<label for="">Date de fin</label>
											<input name="fin" type="text" class="form-control" id="" placeholder="l'année d'obtention du diplôme">
										</div>

										<div class="form-group">
							<label for="">codeuses:</label>
							<select name="id_codeuses" class="form-control">
					<?php
					//recupere toutes les categories dans la bd
					$sqlville="SELECT * FROM codeuses";
					//execute la requete et on la stock dans $repcategorie
					$repville=mysqli_query($link,$sqlville);
					//mysqli_fetch_array = permet de tran sformer le resultat $repcategorie en variable de type tableau $datacat
					// la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
					while ($dataville=mysqli_fetch_array($repville)) {
						?>
						<option value="<?php echo $dataville['id'];?>">
						<?php echo $dataville['id'].'-'.$dataville['nom'];?>
							
						</option>

						<?php
					}
					?>
								
							</select>
						</div>

										
									<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
<br>
			<div class="row">
				<table class="table">
			 	<tr>
			 		<td>Numero</td>
			 		<td>Organisation</td>
			 		<td>Poste occupé</td>
			 		<td>Date debut</td>
			 		<td>Date fin</td>
			 		<td>Modifier</td>
			 		<td>Supprimer</td>
			 		
			 	</tr>
			 	<?php 	
			 	$n="1";
			 	$requete="SELECT * FROM experiences";
			 	$result=mysqli_query($link,$requete);
			 	while($data=mysqli_fetch_array($result)){	 	 
			 	?>
			 	<tr>
			 		<td><?php echo $n; ?></td>
			 		<td><?php echo $data['entreprise']; ?></td> 
			 		<td><?php echo $data['titre']; ?></td>
			 		<td><?php echo $data['debut']; ?></td>
			 		<td><?php echo $data['fin']; ?></td>
			 		<td></td>
			 		<td></td>
			 			<!-- <a href="?id=<?php echo $data['id']; ?>">Modifier</a>
			 			<a href="?sup=<?php echo $data['id']; ?>">Supprimer</a>
			 		</td> -->
			 	</tr>
			 	<?php 
			 	$n++;
			 	}
			 	 ?>
			 	
			 	<tr>
			 		<td></td>
			 		<td></td>
			 		<td></td>
			 		<td></td>
			 		<td></td>
			 		<td></td>
			 		<td></td>
			 		
			 	</tr>
			 </table>
			</div>
			

		</div>

					</td>
				</tr>
			</table>

		
		

		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
