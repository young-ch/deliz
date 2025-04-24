<?php
require __DIR__ . 'C:\xampp\phpMyAdmin\vendor\autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use App\ContactHandler;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Create app
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routing middleware
$app->addRoutingMiddleware();

// Set base path for subdirectory
$app->setBasePath('/deliz');

// Add view renderer
$renderer = new PhpRenderer(__DIR__ . '/templates');

// Routes
$app->get('/', function (Request $request, Response $response) use ($renderer) {
    return $renderer->render($response, 'home.php');
});

$app->get('/about', function (Request $request, Response $response) use ($renderer) {
    return $renderer->render($response, 'about.php');
});

$app->get('/products', function (Request $request, Response $response) use ($renderer) {
    return $renderer->render($response, 'products.php');
});

$app->get('/contact', function (Request $request, Response $response) use ($renderer) {
    return $renderer->render($response, 'contact.php');
});

// Contact form submission handler
$app->post('/submit-contact', function (Request $request, Response $response) {
    $contactHandler = new ContactHandler();
    $result = $contactHandler->handleSubmission($request);
    
    $response->getBody()->write(json_encode($result));
    return $response->withHeader('Content-Type', 'application/json');
});

// Run app
$app->run(); 