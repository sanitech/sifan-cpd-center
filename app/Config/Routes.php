<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('email', 'Home::sendContact');
$routes->get('logout', 'Home::logout');
$routes->get('faq', 'Home::faq');
$routes->get('course', 'Course::index');
$routes->post('fetchCourse', 'Course::fetchCourse');
$routes->get('course/(:num)', 'Course::courseBySingle/$1');
$routes->get('category/(:num)', 'Course::courseByCategory/$1');

$routes->group('super/admin', static function ($route) {
    $route->get('/', 'AdminPanel::index');
    $route->get('dashboard', 'AdminPanel::dashboard');
    $route->get('category', 'AdminPanel::category');
    $route->get('course', 'AdminPanel::courseList');
    $route->get('event', 'AdminPanel::event');
    $route->get('team', 'AdminPanel::team');
});



$routes->post('admin/login', 'AdminLoginController::adminLoginController');

$routes->post('create/event', 'EventController::createEvent');
$routes->get('delete/event/(:num)', 'EventController::deleteEvent/$1');
$routes->post('edit/event/now', 'EventController::editEventBy');
$routes->get('edit/event/(:num)', 'EventController::editEvent/$1');

$routes->post('create/course', 'CourseController::createCourse');
$routes->get('edit/course/(:num)', 'CourseController::editCourse/$1');
$routes->get('delete/course/(:num)', 'CourseController::deleteCourse/$1');
$routes->post('edit/course/now', 'CourseController::editCourseBy');

$routes->post('create/course/category', 'CourseController::createCategory');
$routes->get('delete/course/category/(:num)', 'CourseController::deleteCategory/$1');
$routes->get('edit/course/category/(:num)', 'CourseController::editCategory/$1');
$routes->post('edit/course/category/now', 'CourseController::editCategoryBy');
$routes->get('status/course/category/(:num)', 'CourseController::enableDisabled/$1');

$routes->get('edit/team/(:num)', 'TeamController::editTeam/$1');
$routes->post('edit/team/now', 'TeamController::editTeamBy');
$routes->get('delete/team/(:num)', 'TeamController::deleteTeam/$1');
$routes->post('create/team', 'TeamController::createTeam');
$routes->get('status/team/(:num)', 'TeamController::enableDisabled/$1');
