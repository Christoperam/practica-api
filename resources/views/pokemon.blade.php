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
    <div class="container-fluid">
        <div class="row"></div>
        <br><br>
        <div class="row">
            <div class="col-sm-12">
                <h3 style="text-align: center;">Pokemon API</h3>
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
                            <label for="" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-4">
                                {{ $item['name'] }}
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-1"></div>
                            <label for="" class="col-sm-4 col-form-label">URL</label>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-4">
                                {{ $item['url'] }}
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>