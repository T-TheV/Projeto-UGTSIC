<?<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo currículo recebido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Confirmação de Envio</h2>
        </div>
        <div class="content">
            <p>Olá,</p>
            <p>Um currículo foi recebido com os seguintes dados:</p>
                <p><strong>Nome:</strong> {{ $data['nome'] }}</p>
                <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
                <p><strong>Telefone:</strong> {{ $data['telefone'] }}</p>
                <p><strong>Cargo Desejado:</strong> {{ $data['cargo_desejado'] }}</p>
                <p><strong>Escolaridade:</strong> {{ $data['escolaridade'] }}</p>
                <p><strong>Observações:</strong> {{ $data['observacoes'] ?? 'Nenhuma observação' }}</p>
                <p><strong>Ip:</strong> {{ $data['ip']}}</p>
        </div>
        <div class="footer">
            <p>Este é um e-mail automático. Não responda.</p>
        </div>
    </div>
</body>
</html>