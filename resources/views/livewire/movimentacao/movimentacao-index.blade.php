<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produto ID</th>
                                <th>User ID</th>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th>Data_Movimentação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movimentacaos as $m)
                                <tr>
                                    <td>{{ $m->produto_id }}</td>
                                    <td>{{ $m->user_id }}</td>
                                    <td>{{$m->tipo}}</td>
                                    <td>{{ $m->quantidade }}</td>
                                    <td>{{ $m->data_movimentacao }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
