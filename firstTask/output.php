<?
    session_start();
    sort($_SESSION['values']);
?>
<a href="input.php">Input</a>
<ul>
    <? foreach($_SESSION['values'] as $value){ ?>
        <li><?= $value?></li>
    <?}?>
</ul>