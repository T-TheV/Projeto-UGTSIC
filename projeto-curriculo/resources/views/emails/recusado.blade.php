<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo Recusado</title>
</head>
<body>
    <h1>Olá, {{ $curriculo->nome }}</h1>
    <p>Infelizmente, seu currículo para o cargo de <strong>{{ $curriculo->cargo_desejado }}</strong> foi recusado.</p>
    <p>Agradecemos por seu interesse e desejamos sucesso em sua jornada.</p>
</body>
</html>
