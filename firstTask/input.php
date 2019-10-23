<?
session_start();

if (isset($_POST['userValue'])) {
    $_SESSION['values'][] = (int)$_POST['userValue'];
    var_dump($_SESSION['values']);
}
?>
<a href="output.php">Output</a>
<form method="POST">
    <input type="number" name="userValue" placeholder="Enter your value">
    <button type="submit">Translate</button>
</form>