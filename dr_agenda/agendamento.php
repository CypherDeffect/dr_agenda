<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agendamento</title>
</head>
<body>
<?php /*
     <!-- Resultados da busca -->
     <?php if (isset($_GET['specialty'])): ?>
            <?php
            // Simulação de resultados da busca
            $specialty = htmlspecialchars($_GET['specialty']);
            $results = ["Dr. João - Cardiologista", "Dra. Maria - Dermatologista"];
            ?>
            <h3>Resultados para "<?php echo $specialty; ?>"</h3>
            <ul>
                <?php foreach ($results as $result): ?>
                    <li><?php echo $result; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
*/?>

<!-- Formulário de agendamento -->
        <form method="POST" action="appointment.php">
            <h2>Escolha a Data e Horário</h2>
            <input type="date" name="date" required>
            <select name="time" required>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
            </select>
            <button type="submit">Agendar Consulta</button>
        </form>
    
</body>
</html>    


    