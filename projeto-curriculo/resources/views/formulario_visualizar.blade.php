<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Currículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center text-dark">Visualizar Currículo</h2>
            <p class="text-center text-muted">Suas informações de envio.</p>

            <div class="mb-3">
                <label class="form-label"><strong>Nome:</strong></label>
                <p>{{ $curriculo->nome }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>E-mail:</strong></label>
                <p>{{ $curriculo->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Telefone:</strong></label>
                <p>{{ $curriculo->telefone }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Cargo Desejado:</strong></label>
                <p>{{ $curriculo->cargo_desejado }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Escolaridade:</strong></label>
                <p>{{ $curriculo->escolaridade }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Observações:</strong></label>
                <p>{{ $curriculo->observacoes }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Currículo:</strong></label>
                <a href="{{ asset('storage/' . $curriculo->arquivo) }}" target="_blank" class="btn btn-primary btn-sm">
                    Ver Arquivo
                </a>
            </div>

            <div class="alert alert-info text-center mt-3">
                <strong>Status:</strong> {{ ucfirst($curriculo->status) }}
            </div>
        </div>
    </div>
</body>
</html>
