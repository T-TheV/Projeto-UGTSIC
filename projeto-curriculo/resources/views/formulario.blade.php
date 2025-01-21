<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Currículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #007BFF, #6C757D);
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .btn-primary:hover {
            background-color: #004085;
        }

        .form-control.is-valid {
            border-color: #198754;
            box-shadow: 0 0 5px #198754;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            box-shadow: 0 0 5px #dc3545;
        }

        #fileName {
            margin-top: 5px;
            font-size: 0.9rem;
            color: #198754;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card p-4">
            <h2 class="text-center text-dark">Envio de Currículos</h2>
            <p class="text-center text-muted">Preencha o formulário abaixo para enviar seu currículo.</p>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @error('arquivo')
                <div class="alert alert-danger">Arquivo inválido, verifique e tente novamente!</div>
            @enderror
            <form id="curriculoForm" action="{{ route('curriculo.enviar') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo"
                        required>
                    <div class="invalid-feedback">O campo Nome é obrigatório.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Seu melhor e-mail"
                        required>
                    <div class="invalid-feedback">Insira um e-mail válido.</div>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx"
                        required>
                    <div class="invalid-feedback">Informe um telefone válido.</div>
                </div>
                <div class="mb-3">
                    <label for="cargo_desejado" class="form-label">Cargo Desejado</label>
                    <input type="text" class="form-control" id="cargo_desejado" name="cargo_desejado"
                        placeholder="Digite o cargo desejado" required>
                    <div class="invalid-feedback">O campo Cargo Desejado é obrigatório.</div>
                </div>
                <div class="mb-3">
                    <label for="escolaridade" class="form-label">Escolaridade</label>
                    <select class="form-select" id="escolaridade" name="escolaridade" required>
                        <option value="" disabled selected>Selecione sua escolaridade</option>
                        <option value="Ensino Fundamental">Ensino Fundamental</option>
                        <option value="Ensino Médio">Ensino Médio</option>
                        <option value="Ensino Superior">Ensino Superior</option>
                    </select>
                    <div class="invalid-feedback">Escolha uma opção válida.</div>
                </div>
                <div class="mb-3">
                    <label for="observacoes" class="form-label">Observações</label>
                    <textarea class="form-control" id="observacoes" name="observacoes"
                        placeholder="Comentários adicionais"></textarea>
                </div>
                <div class="mb-3">
                    <label for="arquivo" class="form-label">Currículo</label>
                    <input type="file" class="form-control" id="arquivo" name="arquivo" accept=".pdf, .doc, .docx"
                        required>
                    <small id="fileName">Nenhum arquivo selecionado</small>
                    <div class="invalid-feedback">Envie um arquivo válido (.pdf, .doc, .docx) com até 1MB.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('curriculoForm');
            const fileInput = document.getElementById('arquivo');
            const fileName = document.getElementById('fileName');

            form.addEventListener('submit', function (e) {
                const inputs = form.querySelectorAll('input, select');
                let isValid = true;

                inputs.forEach(input => {
                    if (input.checkValidity()) {
                        input.classList.add('is-valid');
                        isValid = true;
                    } else {
                        input.classList.remove('is-valid');
                        input.classList.add('is-invalid');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });

            fileInput.addEventListener('change', function () {
                if (fileInput.files.length > 0) {
                    fileName.textContent = `Arquivo selecionado: ${fileInput.files[0].name}`;
                } else {
                    fileName.textContent = 'Nenhum arquivo selecionado';
                }
            });
        });
    </script>
</body>

</html>
