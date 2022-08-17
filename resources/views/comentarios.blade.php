<div class="container-fluid">
    <div class="row"></div>
    <br><br><br>
    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contenido</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($showComentarios as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['body'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>