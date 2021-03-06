
<!--This page contains all html and php code for the login of the users
    All of the vaidations will be done in the this same page as the html form
    once the user has log in the page will redirect the user to index.php-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php session_start(); ?>

        <link rel="icon" href="../../FrontEnd/img/icon.png">
        <title>Tripshare</title>

        <!-- Bootstrap core CSS -->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="../../FrontEnd/css/landing-page.min.css" rel="stylesheet">


        <!-- Bootstrap core JavaScript -->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    </head>

    <body>

        <div>
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
                <h5 class="my-0 mr-md-auto font-weight-normal">
                    <a href="../../index.php">
                        <img src="../../FrontEnd/img/tripshare logo2.png" height="60"></h5>
                    </a>
                    <nav class="my-2 my-md-0 mr-md-3">
                        <a class="p-2 text-dark" href="../../index.php">Buscar viaje</a>
                        <a class="p-2 text-dark" href="#">Organizar viaje</a>
                        <?php
                        include '../../libraries.php';
                        profileButtom();
                        ?>
                    </nav>
                    <?php
                    accessButtom();
                    ?>
            </div>
        </div>

        <?php
       // include '../../libraries.php';
        //get values from previous hidden form
        $driver = $_POST['name'];
        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        //$fecha = $_POST['fecha'];
        $trip_id = $_POST['id'];
        //echo "trip id:" . $trip_id;
        //echo $driver;
        ?>

        <header>
            <div class="container">
                <form action="#" method="POST">
                    <div class="col-md-12 col-lg-8 col-xl-10 mx-auto">
                        <h1>Mi viaje</h1>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-2 mb-md-0">
                                <img class="user-pic" src="../img/user_icon.jpg" alt="" width="100px">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <label for="uname"><b>Conductor:</b></label>

                            </div>
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <a><?php echo $driver; ?></a>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <label for="uname"><b>Origen: </b></label>
                            </div>
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <a><?php echo $origen ?></a>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <label for="uname"><b>Destino: </b></label>
                            </div>
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <a><?php echo $destino ?></a>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <label for="uname"><b>Valoración: </b></label>
                            </div>
                            <div class="col-2 col-md-2 mb-2 mb-md-0">
                                <input type="number" name="valoracion" min="0" max="10" value="5" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <label for="uname"><b>Comentarios:</b></label>
                            </div>
                            <textarea name="comentario" class="form-control" cols=""rows="5" id="comment"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12 col-lg-6 col-xl-6 mx-auto"> 
                        <div class="form-row">
                            <div class="col-12 col-md-4 mb-2 mb-md-0 mx-auto">
                                <div class="form-group">
                                    <input type="submit" name="send" class="btn btn-block btn-primary" value="Valorar">   
                                    <input type="hidden" name="driver" value="<?//php $driver ?>">
                                    <input type="hidden" name="origen" value="<?php echo $origen ?>">
                                    <input type="hidden" name="destino" value="<?php echo $destino ?>">
                                    <input type="hidden" name="trip_id" value="<?php echo $trip_id ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </header>
    </body>

    <?php
    include_once '../../BackEnd/Valoraciones/valoracion.php';

    newValoracion();
    ?>


    <!-- Footer -->
      <?php footer() ?>



</html>




