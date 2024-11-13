<?php
require 'auth/auth.php';
function handleRoute() {

    // Get the full URL path
$request = $_SERVER['REQUEST_URI'];

// Remove '/hotel-booking/' from the URL
$request = str_replace("/hotel-booking", "", $request);
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
            // protectRoute();   // Protect this route
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
            
        case '/admin/category/edit':
            protectRoute();   // Protect this route
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
