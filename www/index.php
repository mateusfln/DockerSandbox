<?php 
require_once __DIR__ . '/Model/Database.php';

$pdo = Database::getInstance();
?>
<h1>
    <?= 'Docker Rodando' ?>
</h1>

<h3>
    <?= 'PHP: '.phpversion() ?>
</h3>
<h3>
    <?= 'Mysql: ' . $pdo->getConnection()->query('SELECT VERSION()')->fetchColumn() ?>
</h3>
<h3>
    <?= 'Nginx: '.explode('/', $_SERVER['SERVER_SOFTWARE'])[1]?>
</h3>


