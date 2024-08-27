<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Agenda</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

   <div class="app">
        <h1>Busque por um especialista:</h1>
            <form action="search.php" method="POST"> <?php // aqui deve ser alterado para o banco de dados ?>
                <input type="text" name="query" placeholder="Digite o nome ou área de especialidade" required>
                <button type="submit">Buscar</button>
            </form>

 </div>
    

</body>
</html>