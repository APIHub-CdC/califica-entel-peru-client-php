<?php

namespace calificaentel\pe\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\Event\Emitter;
use \GuzzleHttp\Middleware;
use \GuzzleHttp\HandlerStack as handlerStack;

use \calificaentel\pe\Client\Configuration;
use \calificaentel\pe\Client\ApiException;
use \calificaentel\pe\Client\ObjectSerializer;

use \Signer\Manager\Interceptor\MiddlewareEvents;
use \Signer\Manager\Interceptor\KeyHandler;

class EntelRuc20ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');

        $this->signer = new \Signer\Manager\Interceptor\KeyHandler(null, null, $password);
        $events = new \Signer\Manager\Interceptor\MiddlewareEvents($this->signer);

        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));
        $config = new \calificaentel\pe\Client\Configuration();

        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \calificaentel\pe\Client\Api\EntelRuc20Api($client, $config);

    }
    
    
    
    public function testEntelRuc20()
    {
        
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \calificaentel\pe\Client\Model\Peticion();

        $request->setFolio("XX");
        $request->setTipoDocumento("XX");
        $request->setNumeroDocumento("XX");
        $request->setIdUsuario("XX");
        $request->setIdTipoOperacion("XX");

        try {
          $result = $this->apiInstance->entelRuc20($x_api_key, $username, $password, $request);
          $this->assertNotNull($result);
          } catch (Exception $e) {
            echo 'Exception when calling EntelRuc20Api->entelRuc20: ', $e->getMessage(), PHP_EOL;
        }
    }
}
