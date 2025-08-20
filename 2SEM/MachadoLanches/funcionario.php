<?php
// Formulário para cadastro de Funcionários
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 350px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        label {
            font-weight: bold;
            color: #34495e;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }
        input:focus, select:focus {
            border-color: #2980b9;
            box-shadow: 0 0 5px #2980b9;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #2980b9;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #1f6690;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Funcionários</h2>
        <form method="post" action="">
            <label for="nome_funcionario">Nome do Funcionário:</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" required>

            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>

            <label for="data_admissao">Data de Admissão:</label>
            <input type="date" id="data_admissao" name="data_admissao" required>

            <label for="ativo">Ativo:</label>
            <select id="ativo" name="ativo" required>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>

            <button type="submit">Cadastrar Funcionário</button>
        </form>
    </div>
</body>
</html>
