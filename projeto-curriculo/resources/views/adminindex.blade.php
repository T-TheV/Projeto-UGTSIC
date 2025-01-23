<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Currículos Enviados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Currículos Enviados</h1>

        @if(session('successo'))
            <div class="alert alert-success">{{ session('successo') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Cargo Desejado</th>
                    <th>Escolaridade</th>
                    <th>Currículo</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($curriculo as $curriculo)
                    <tr>
                        <td>{{ $curriculo->id }}</td>
                        <td>{{ $curriculo->nome }}</td>
                        <td>{{ $curriculo->email }}</td>
                        <td>{{ $curriculo->telefone }}</td>
                        <td>{{ $curriculo->cargo_desejado }}</td>
                        <td>{{ $curriculo->escolaridade }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $curriculo->arquivo) }}" target="_blank"
                                class="btn btn-sm btn-primary">
                                Ver Currículo
                            </a>
                        </td>
                        <td>
                            @if($curriculo->status === 'pendente')
                                <form action="{{ route('curriculo.aprovar', $curriculo->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Aprovar</button>
                                </form>

                                <form action="{{ route('curriculo.recusar', $curriculo->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Recusar</button>
                                </form>
                            @else
                                <span class="badge {{ $curriculo->status === 'aprovado' ? 'bg-success' : 'bg-danger' }}">
                                    {{ ucfirst($curriculo->status) }}
                                </span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Nenhum currículo encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>

</html>