<?php 
  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Slim\Factory\AppFactory;
  
  require __DIR__ . '/../vendor/autoload.php';
  
  $app = AppFactory::create();
  $app->setBasePath("/public");
  
  $app->get('/hello', function (Request $request, Response $response, $args) {
      $response->getBody()->write("world of php");
      return $response;
  });
  
  $app->run();
?>