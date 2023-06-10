<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>Vista Crear</center>
                <br>
                <h2 class="text-center my-5">Formulario en LARAVEL</h2>
                <form action="{{ route('productos.formdata') }}" method="post" enctype="multipart/form-data">
                    <!-- <div class="form-group">
                        <label for="txtId">id</label>
                        <input type="text" class="form-control" name="txtId" placeholder="" id="txtId">
                    </div> -->
                    @csrf
                    <div class="form-group">
                        <label for="txtName">Nombre</label>
                        <input type="text" class="form-control" name="txtName" placeholder="" id="txtName" required>
                    </div>
                    <div class="form-group">
                        <label for="txtPrice">Precio</label>
                        <input type="number" class="form-control" name="txtPrice" placeholder="" id="txtPrice" required>
                    </div>
                    <div class="form-group">
                        <label for="txtStock">Existencia</label>
                        <input type="number" class="form-control" name="txtStock" placeholder="" id="txtStock" required>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success" value="btnSend" type="submit" name="btnSend">Enviar</button>
                    </div>
                    <!-- <button class="btn btn-primary" value="btnRead" type="submit" name="accion">READ</button>
                    <button class="btn btn-warning" value="btnUpdate" type="submit" name="accion">UPDATE</button>
                    <button class="btn btn-danger" value="btnDelete" type="submit" name="accion">DELETE</button> -->
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>