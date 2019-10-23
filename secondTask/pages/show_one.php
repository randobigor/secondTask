<?
    require_once "models/Masiv.php";
    $mas = new Masiv();
    if(isset($_POST['showIndex'])) {
        $val = $mas->showOne($_POST['showIndex']);
        echo $val;
    }
?>

<form method="POST">
    <input type="number" name="showIndex" placeholder="Enter index to show Value">
    <button type="submit">Show</button>
</form>
