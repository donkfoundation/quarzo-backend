<?php
// Verificar si se proporciona el parámetro 'controller' en la URL
if (isset($_GET['controller'])) {
    // Obtener el nombre del controlador desde la URL
    $controllerName = $_GET['controller'];

    // Verificar si el archivo del controlador existe

    //mi ruta absoluta PERSONAL (cambiar)
    $controllerFile = "C:/xampp/htdocs/quarzo-backend/app/controller/$controllerName/$controllerName.php";
    if (file_exists($controllerFile)) {
        // Incluir el archivo del controlador
        require_once($controllerFile);

        // Verificar si se proporciona el parámetro 'method' en la URL
        if (isset($_GET['method'])) {
            // Obtener el nombre del método desde la URL
            $methodName = $_GET['method'];

            // Verificar si la clase del controlador existe
            if (class_exists($controllerName)) {
                // Crear una instancia del controlador
                $controller = new $controllerName();

                // Verificar si el método existe en el controlador
                if (method_exists($controller, $methodName)) {
                    // Llamar al método en el controlador
                    $result = $controller->$methodName();

                    // Puedes devolver el resultado como JSON, por ejemplo
                    header('Content-Type: application/json');
                    echo json_encode($result);
                } else {
                    // Método no encontrado
                    http_response_code(404);
                    echo "Método no encontrado";
                }
            } else {
                // Clase de controlador no encontrada
                http_response_code(404);
                echo "Clase de controlador no encontrada";
            }
        } else {
            // Parámetro 'method' faltante en la URL
            http_response_code(400);
            echo "Parámetro 'method' faltante en la URL";
        }
    } else {
        // Archivo de controlador no encontrado
        http_response_code(404);
        echo "Archivo de controlador no encontrado";
    }
} else {
    // Parámetro 'controller' faltante en la URL
    http_response_code(400);
    echo "Parámetro 'controller' faltante en la URL";
}
?>