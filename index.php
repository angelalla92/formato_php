<?php
if(isset($_GET['url'])){
    $view=$_GET['url'];
    switch($view){
        case 'home':
        include './app/view/usuario.html';
        break;
        // case 'angela':
        // include './ajax/listando.php';
        // break;
    }
}else{
    echo "<a href='./home'>home</a><br>";
}
?>