<!--Rotas/ Chamada de metodos-->

<?php 

$url = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH);

switch ($url) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}