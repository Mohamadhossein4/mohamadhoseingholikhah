<?php
if (isset($_POST['submit'])) {
    $a = $_POST['n1'];
    $i=1;
        $f=0;
    while ($i<$a/2){
        $i=$i+1;
        if ($a%$i===0)$f=0;
        else $f=1;
    }

switch ($a%2){
    case 0:
        echo "زوج";
        break;
    default:
        echo "فرد";
        break;

}
    switch ($f){
        case 0:
            echo "اول نیست";
            break;
        case 1:
            echo "اول است";
            break;
    }
}
?>
<form method="post">
    <label> number:</label><br/>
    <input type="number" name="n1"/>
    <input type="submit" name="submit" value="run"/>



</form>