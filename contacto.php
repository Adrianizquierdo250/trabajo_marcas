<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="REFRESH" CONTENT="15;URL=index.html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Contacto</title>


    <link rel="stylesheet" href="css/mascara.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>


    <p>Gracias <?php echo htmlspecialchars($_POST['inputName']);?> <?php echo htmlspecialchars($_POST['inputSurname']);?> por contactar con nosotros</p>
    <p>Le enviaremos un correo a <?php echo $_POST['inputEmail'] ?> lo más rapido posible sobre su conulta en <?php echo $_POST['inputSelect']?></p>
    <p> Su mensaje ha sido:</p>
    <p><?php echo $_POST['inputMensaje'] ?></p>
    <p>serás redigirido en 15 segundos</p>
    <p>En caso contrario pincha <a href="index.html">aquí</a> </p>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<!-- Holder.js for placeholder images -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
</body>
</html>


