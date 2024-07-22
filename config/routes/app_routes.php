<?php

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use App\Controller;

return function (RoutingConfigurator $routes): void {
    // Guest routes

    $routes->add('app_auth_login', '/login')
        ->controller([Controller\LoginController::class, 'login'])
        ->methods(['GET', 'POST']);
        
    $routes->add('app_auth_logout', '/logout')
        ->controller([Controller\LoginController::class, 'logout'])
        ->methods(['GET']);

    $routes->add('app_auth_register', '/register')
        ->controller([Controller\RegistrationController::class, 'register'])
        ->methods(['GET', 'POST']);

        

    $routes->add('app_verify_email', '/verify/email')
        ->controller([Controller\RegistrationController::class, 'verifyUserEmail'])
        ->methods(['GET']);


    // Admin Routes

    $routes->add('app_admin_dashboard', '/admin/dashboard')
        ->controller([Controller\Admin\DashboardController::class, 'index'])
        ->methods(['GET']);

};