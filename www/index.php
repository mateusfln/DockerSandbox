<?php 
require_once __DIR__ . '/Model/Database.php';

echo '<pre>';
var_dump(Database::getInstance());
?>
<h1>
    <?= 'Docker Rodando' ?>
</h1>

<h2>
    <?= 'Com: ' ?>
</h2>

<h3>
    <?= 'PHP: '.phpversion() ?>
</h3>
<h3>
    <?= 'Mysql: ' ?>
</h3>
<h3>
    <?= 'PHP: '.phpversion() ?>
</h3>
