<?
    require_once "models/Masiv.php";
    $mas = new Masiv();
    if(isset($_POST['userValue'])) {
        $mas->add($_POST['userValue']);
    } 
?>

<form method="POST">
    <input type="number" name="userValue" placeholder="Enter Value">
    <button type="submit">Add</button>
</form>