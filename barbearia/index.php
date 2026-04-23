<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #1a1a1a;
            color: #fff;
        }

        header {
            background-color: #111;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #c8a951;
        }

        header h1 {
            color: #c8a951;
            font-size: 32px;
            letter-spacing: 4px;
        }

        header p {
            color: #aaa;
            margin-top: 5px;
            font-size: 14px;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
        }

        .hero h2 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #fff;
        }

        .hero p {
            color: #aaa;
            font-size: 16px;
            margin-bottom: 40px;
        }

        .btn-agendar {
            background-color: #c8a951;
            color: #111;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 4px;
            letter-spacing: 1px;
        }

        .btn-agendar:hover {
            background-color: #e0bf6a;
        }

        .servicos {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 60px 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #222;
            border: 1px solid #333;
            border-top: 3px solid #c8a951;
            padding: 30px;
            width: 220px;
            text-align: center;
            border-radius: 4px;
        }

        .card h3 {
            color: #c8a951;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .card p {
            color: #aaa;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .card .preco {
            color: #fff;
            font-size: 22px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #555;
            font-size: 13px;
            border-top: 1px solid #333;
        }
    </style>
</head>
<body>

<header>
    <h1>BARBEARIA</h1>
    <p>Tradição e estilo em cada corte</p>
</header>

<div class="hero">
    <h2>Agende seu horário online</h2>
    <p>Rápido, fácil e sem precisar ligar</p>
    <a href="agendamento.php" class="btn-agendar">AGENDAR AGORA</a>
</div>

<div class="servicos">
    <div class="card">
        <h3>Corte</h3>
        <p>30 minutos</p>
        <span class="preco">R$ 35,00</span>
    </div>
    <div class="card">
        <h3>Barba</h3>
        <p>20 minutos</p>
        <span class="preco">R$ 25,00</span>
    </div>
    <div class="card">
        <h3>Corte + Barba</h3>
        <p>50 minutos</p>
        <span class="preco">R$ 55,00</span>
    </div>
</div>

<footer>
    <p>© 2026 Barbearia — Todos os direitos reservados</p>
</footer>

</body>
</html>