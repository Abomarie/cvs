<?php include('connexion.php');
    $msg="";
    /*include('menu.php');*/
    if (isset($_POST['btnValider'])){
      ) {
            $sql= "SELECT email,mdp FROM codeuses
             ";
            $result=mysqli_query($link  ,$sql);
            if ($result) {
                $msg='Insertion reussie';
            }else{
                $msg=mysqli_error($link);
            }
        }

    }
 ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
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
                        <li> <a href="inscription.php"> s'inscrire </a></li>
                        <li> <a href="login.php"> se connecter </a></li>
                        
                    </ul>
                </div>
                
            </nav>
            </div>


        <div class="container">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend><center><h2>login</h2></center></legend>
                        <span> <?php echo $msg; ?> </span>
                 

                       

                       

                       

                        <div class="form-group">
                            <label for="">Email:</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Entrer votre email">
                        </div>

                       

                        <div class="form-group">
                            <label for="">Mot de passe:</label>
                            <input name="mdp" type="text" class="form-control" id="mdp" placeholder="Entrer votre mot de passe">
                        </div>

                        

                        
                        
                        <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block"><a href="index.php"></a>Valider</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>

        <!-- jQuery -->
        <script src=""></script>
        <!-- Bootstrap JavaScript -->
        <script src=""></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
    </body>
</html>