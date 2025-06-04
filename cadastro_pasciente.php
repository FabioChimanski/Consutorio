<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro pasciente</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro pascientes</h1>
        <form>
            <div class="mb-3">
                <label  class="form-label">Nome:</label>
                <input class="form-control" type="text" type="nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data nascimento::</label>
                <input class="form-control" type="data" type="data_nascimento" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF:</label>
                <input class="form-control" type="number" type="cpf" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone:</label>
                <input class="form-control" type="number" type="telefone" required>
            </div>
        </form>
    </div>

</body>
</html>