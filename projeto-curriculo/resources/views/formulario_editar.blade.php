<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Currículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center text-dark">Editar Currículo</h2>
            <p class="text-center text-muted">Você já enviou um currículo, deseja alterar as informações do seu currículo?</p>

            @if(session('successo'))
                <div class="alert alert-success">{{ session('successo') }}</div>
            @endif

            @error('arquivo')
                <div class="alert alert-danger">Arquivo inválido, verifique e tente novamente!</div>
            @enderror

            <form action="{{ route('curriculo.atualizar', $curriculo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $curriculo->nome }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $curriculo->telefone }}" required>
                </div>

                <div class="mb-3">
                    <label for="cargo_desejado" class="form-label">Cargo Desejado</label>
                    <input type="text" class="form-control" id="cargo_desejado" name="cargo_desejado" value="{{ $curriculo->cargo_desejado }}" required>
                </div>

                <div class="mb-3">
                    <label for="escolaridade" class="form-label">Escolaridade</label>
                    <select class="form-select" id="escolaridade" name="escolaridade" required>
                        <option value="Ensino Fundamental" {{ $curriculo->escolaridade == 'Ensino Fundamental' ? 'selected' : '' }}>Ensino Fundamental</option>
                        <option value="Ensino Médio" {{ $curriculo->escolaridade == 'Ensino Médio' ? 'selected' : '' }}>Ensino Médio</option>
                        <option value="Ensino Superior" {{ $curriculo->escolaridade == 'Ensino Superior' ? 'selected' : '' }}>Ensino Superior</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="observacoes" class="form-label">Observações</label>
                    <textarea class="form-control" id="observacoes" name="observacoes">{{ $curriculo->observacoes }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="arquivo" class="form-label">Currículo</label>
                    <input type="file" class="form-control" id="arquivo" name="arquivo" accept=".pdf, .doc, .docx">
                    <small>Arquivo atual: <a href="{{ asset('storage/' . $curriculo->arquivo) }}" target="_blank">Visualizar</a></small>
                </div>

                <button type="submit" class="btn btn-primary w-100">Atualizar</button>
            </form>
        </div>
    </div>
</body>
</html>
