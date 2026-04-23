<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar - Barbearia</title>
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
            font-size: 28px;
            letter-spacing: 4px;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 0 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #c8a951;
            font-size: 22px;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #aaa;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            background-color: #222;
            border: 1px solid #444;
            border-radius: 4px;
            color: #fff;
            font-size: 15px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #c8a951;
        }

        select option {
            background-color: #222;
        }

        .btn-enviar {
            width: 100%;
            padding: 14px;
            background-color: #c8a951;
            color: #111;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        .btn-enviar:hover {
            background-color: #e0bf6a;
        }

        .voltar {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #aaa;
            text-decoration: none;
            font-size: 14px;
        }

        .voltar:hover {
            color: #c8a951;
        }
    </style>
</head>
<body>

<header>
    <h1>BARBEARIA</h1>
</header>

<div class="container">
    <h2>Fazer Agendamento</h2>

    <form action="salvar_agendamento.php" method="POST">

        <div class="campo">
            <label>Seu nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome completo" required>
        </div>

        <div class="campo">
            <label>Seu telefone</label>
            <input type="text" name="telefone" placeholder="(11) 99999-9999" required>
        </div>

        <div class="campo">
            <label>Serviço</label>
            <select name="servico_id" required>
                <option value="">Selecione o serviço</option>
                <?php
                $servicos = mysqli_query($conn, "SELECT * FROM servicos");
                while ($s = mysqli_fetch_assoc($servicos)) {
                    echo "<option value='{$s['id']}'>{$s['nome']} - R$ {$s['preco']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="campo">
            <label>Barbeiro</label>
            <select name="barbeiro_id" required>
                <option value="">Selecione o barbeiro</option>
                <?php
                $barbeiros = mysqli_query($conn, "SELECT * FROM barbeiros WHERE ativo = 1");
                while ($b = mysqli_fetch_assoc($barbeiros)) {
                    echo "<option value='{$b['id']}'>{$b['nome']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="campo">
            <label>Data</label>
            <input type="date" name="data" required>
        </div>

        <div class="campo">
            <label>Horário</label>
            <select name="horario" required>
                <option value="">Selecione o horário</option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
            </select>
        </div>

        <button type="submit" class="btn-enviar">CONFIRMAR AGENDAMENTO</button>
    </form>

    <a href="index.php" class="voltar">← Voltar para o início</a>
</div>

</body>
</html>