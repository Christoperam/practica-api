<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container fluid">
        <div class="row"></div>
        <br><br>
        <div class="row">
            <div class="col-sm-12">
                <h3 style="text-align: center;">Marvel API</h3>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            @foreach ($showArray as $item)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">ID</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['id'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['name'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['description'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">Modified</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['modified'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">Comics Availables</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['comics']['available'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">Series Availables</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['series']['available'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-1"></div>
                                <label for="" class="col-sm-4 col-form-label">Stories Available</label>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    {{ $item['stories']['available'] }}
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>