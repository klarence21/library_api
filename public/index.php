<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

  require '../src/vendor/autoload.php';
  $app = new \Slim\App;
  // Addition function
  $app->post('/plus', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no1 = $data->no1;
      $no2 = $data->no2;
      $result = $no1 + $no2;
      $response->getBody()->write("$no1 + $no2 = $result");
      return $response;
    });

    // Subtraction function
  $app->post('/minus', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no1 = $data->no1;
      $no2 = $data->no2;
      $result = $no1 - $no2;
      $response->getBody()->write("$no1 - $no2 = $result");
      return $response;
    });

    // Multiplication function
  $app->post('/times', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no1 = $data->no1;
      $no2 = $data->no2;
      $result = $no1 * $no2;
      $response->getBody()->write("$no1 * $no2 = $result");
      return $response;
    });

    // Division function
  $app->post('/divide', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no1 = $data->no1;
      $no2 = $data->no2;

      if ($no2 == 0) {
          $response->getBody()->write("Error: Division by zero is not allowed.");
      } else {
          $result = $no1 / $no2;
          $response->getBody()->write("$no1 / $no2 = $result");
      }
      return $response;
    });

    //Modulo function
    $app->post('/modulo', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no1 = $data->no1;
      $no2 = $data->no2;
      $result = $no1 % $no2;
      $response->getBody()->write("$no1 % $no2 = $result");
      return $response;
    });

  // Square function
  $app->post('/squared', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no = $data->no;
      $result = $no * $no;
      $response->getBody()->write("$no^2= $result");
      return $response;
    });

  // Square root function
  $app->post('/sqroot', function (Request $request, Response $response, array $args){
      $data = json_decode($request->getBody());
      $no = $data->no;
      $result = sqrt($no);
      $response->getBody()->write("√$no = $result");
      return $response;
    });

$app->run();

?>
