<?php 
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

    switch ($url) {
        case 'localhost/MisOfertas/index.php':
            $current = 'bienvenido';
        break;
        case 'localhost/MisOfertas/view/catalogo.php':
            $current = 'catalogo';
            $url = '../';
        break;
        case 'localhost/MisOfertas/view/menu.php':
            $current = 'menu';
            $url = '../';
        break;
        case 'localhost/MisOfertas/view/pedido.php':
            $current = 'pedido';
            $url = '../';
        break;
        
        default:
            echo "Esta siendo manipulado";
        break;
    }
    
?>