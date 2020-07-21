<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Upload de Arquivos</title>
</head>

<body>
<div class="container mt-3">
    <center>
        <img src="assets/logo.jpg" alt="Logo" class="img-fluid logo">
    </center>
    <div class="card">
        <div class="card-body">
            <form action="processa.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="arquivo" id="arquivo">
                <label for='arquivo'>Selecionar um arquivo </label>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <div class="lista mt-5">
    <h2>Arquivos Recuperados</h2>
    <?php require  'lista.php';?>

   
    </div>
</div>
</body>

</html>