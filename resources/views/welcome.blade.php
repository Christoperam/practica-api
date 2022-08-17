<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container fluid">
        <div class="row"></div>
        <br><br><br>
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Email</th>
                                <th scope="col">Calle</th>
                                <th scope="col">Num. Ext.</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">C&oacute;digo Postal</th>
                                <th scope="col">Latitud</th>
                                <th scope="col">Longuitud</th>
                                <th scope="col">Tel&eacute;fono</th>
                                <th scope="col">Sitio Web</th>
                                <th scope="col">Compañia</th>
                                <th scope="col">Frase</th>
                                <th scope="col">BS</th>
                            </tr>
                        </thead>
                        @foreach ($showArray as $item)
                            <tbody>
                                <tr>
                                    <th>{{ $item['name'] }}</th>
                                    <th>{{ $item['username'] }}</th>
                                    <th>{{ $item['email'] }}</th>
                                    <th>{{ $item['address']['street'] }}</th>
                                    <th>{{ $item['address']['suite'] }}</th>
                                    <th>{{ $item['address']['city'] }}</th>
                                    <th>{{ $item['address']['zipcode'] }}</th>
                                    <th>{{ $item['address']['geo']['lat'] }}</th>
                                    <th>{{ $item['address']['geo']['lng'] }}</th>
                                    <th>{{ $item['phone'] }}</th>
                                    <th>{{ $item['website'] }}</th>
                                    <th>{{ $item['company']['name'] }}</th>
                                    <th>{{ $item['company']['catchPhrase'] }}</th>
                                    <th>{{ $item['company']['bs'] }}</th>
                                </tr>
                            </tbody>  
                        @endforeach
                    </table>
                <br><br>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>