<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo Aprovado</title>
</head>
<body>
    <h1>Parabéns, {{ $curriculo->nome }}!</h1>
    <p>Seu currículo foi aprovado para o cargo de <strong>{{ $curriculo->cargo_desejado }}</strong>.</p>
    <p>Em breve, entraremos em contato com você.</p>
</body>
</html>
