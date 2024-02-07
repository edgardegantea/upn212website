<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('ofertaeducativa', 'OfertaEducativaController::index');
$routes->get('oe_lae', 'OfertaEducativaController::oe_lae');
$routes->get('oe_lie', 'OfertaEducativaController::oe_lie');
$routes->get('oe_lp', 'OfertaEducativaController::oe_lp');
$routes->get('oe_lpe', 'OfertaEducativaController::oe_lpe');
$routes->get('oe_mmems', 'OfertaEducativaController::oe_mmems');




