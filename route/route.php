<?php
require 'auth/auth.php';
require_once 'config.php';
function handleRoute() {

    // Get the full URL path
$request = $_SERVER['REQUEST_URI'];

// Remove '/hotel-booking/' from the URL
$request = str_replace(BASE_URL, "", $request);
// die($request);


    switch ($request) {
        case '/':
            require 'frontend/customer/index.php';
            break;
        case '/home':
            require 'frontend/customer/index.php';
            break;
        case '/login':
            require 'frontend/admin/login.php';
            break;
        case '/about':
            require 'frontend/customer/about.php';
            break;
            case '/contact':
                require 'frontend/customer/contact.php';
                break;


        case '/dashboard':
            protectRoute();   // Protect this route  
            require 'frontend/admin/dashboard.php';
            break;

        // case '/admin/category':
        //     protectRoute();   // Protect this route
        //     require 'frontend/admin/category/index.php';
        //     break;
        
        case '/admin/category/create':
            protectRoute();   // Protect this route
            require 'frontend/admin/category/create.php';
            break;

        case '/admin/category/show':
            protectRoute();   // Protect this route
            require 'frontend/admin/category/index.php';
            break;
            
        // case '/admin/category/edit':
        //     protectRoute();   // Protect this route
        //     require 'frontend/admin/category/edit.php';
        //     break;

         case (strpos($request,'/category/edit/') !== false):
            protectRoute();   // Protect this route
            $parts = explode('/', trim($request, '/'));
            $id = end($parts);
            if(!is_numeric($id)){
                echo 'The given id is not a number';
                exit;
            }



            require 'frontend/admin/category/edit.php';
            break;

        case '/admin/category/create':
            protectRoute();   // Protect this route
            require 'frontend/admin/category/create.php';
            break;



        case '/logout':
            logout();
            header('Location: login');
            exit();
        default:

        die('404 rerr');
            http_response_code(404);
            // echo "Not found";
            require 'frontend/404.php';
            break;
    }

    // die($request);

}



handleRoute();
// die('after');
?>
