<?php
session_start();

if (!isset($_SESSION['textos'])) {
    $_SESSION['textos'] = [];
}

if (isset($_POST['texto']) && !empty($_POST['texto'])) {
    $_SESSION['textos'][] = $_POST['texto'];
}

if (isset($_GET['remover'])) {
    $index = $_GET['remover'];
    unset($_SESSION['textos'][$index]);
    $_SESSION['textos'] = array_values($_SESSION['textos']); 
    header('Location: index.php'); 
}

if (isset($_POST['limpar'])) {
    $_SESSION['textos'] = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Texto com Histórico</title>
</head>
<body>

<h2>Enviar Texto</h2>
<form method="post">
    <label for="texto">Texto:</label>
    <input type="text" name="texto" id="texto" required>
    <button type="submit">Enviar</button>
</form>

<h2>Histórico de Textos Enviados</h2>
<?php if (!empty($_SESSION['textos'])): ?>
    <ul>
        <?php foreach ($_SESSION['textos'] as $index => $texto): ?>
            <li>
                <?= htmlspecialchars($texto) ?> 
                
                - <a href="?remover=<?= $index ?>" onclick="return confirm('Tem certeza que deseja remover este texto?');">
                    <img src="delete_icon.png" alt="[remover]" style="width:20px; height:20px;">
                  </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="post">
        <button type="submit" name="limpar">Limpar Histórico</button>
    </form>
<?php else: ?>
    <p>Nenhum texto enviado.</p>
<?php endif; ?>

</body>
</html>
