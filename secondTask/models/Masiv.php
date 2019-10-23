<!-- <?session_start()?> -->
<?php
class Masiv
{
    public function add($value)
    {
        $_SESSION['values'][] = $value;
        var_dump($_SESSION['values']);
    }

    public function showAll()
    {
        echo "called showAll()";
        echo '<br>';
        var_dump($_SESSION['values']);
    }

    public function delete($index)
    {
        unset($_SESSION['values'][$index]);
    }

    public function showOne($index)
    {
        return $_SESSION['values'][$index];
    }
}
