<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

<header>
    <h1 class="text-center mt-5">Formulario de envio con GET Y POST</h1>
</header>
<main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
            <form action="prueba.php" method="POST">
                <div class="form-group">
                    <label for="numero1">numero 1</label>
                    <input type="number" class="form-control" id="numero1" name="numero1">
                </div>
                <div class="form-group">
                    <label for="numero2">numero 2</label>
                    <input type="number" class="form-control" id="numero2" name="numero2">
                </div>
                <button type="submit" class="btn btn-success btn-block">Enviar</button>
            </form>
            </div>
        </div>
    </div>

</main>
<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>

</html>