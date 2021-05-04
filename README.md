# califica-entel-peru-client-php
Devuelve la calificación de personas juridicas basado en reglas proporcionadas por ENTEL.
<br/><img src='https://github.com/APIHub-CdC/imagenes-cdc/blob/master/circulo_de_credito-apihub.png' height='37' width='160'/><br/>

## Requisitos

PHP 7.1 ó superior


### Dependencias adicionales
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
- En caso de no ser así, para linux use los siguientes comandos

```sh
#ejemplo con php en versión 7.3 para otra versión colocar php{version}-curl
apt-get install php7.3-curl
apt-get install php7.3-mbstring
```
- Composer [vea como instalar][1]

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Agregar el producto a la aplicación

Al iniciar sesión seguir los siguientes pasos:

 1. Dar clic en la sección "**Mis aplicaciones**".
 2. Seleccionar la aplicación.
 3. Ir a la pestaña de "**Editar '@tuApp**' ".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/edit_applications.jpg" width="900">
    </p>
 4. Al abrirse la ventana emergente, seleccionar el producto.
 5. Dar clic en el botón "**Guardar App**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/selected_product.jpg" width="400">
    </p>

### Paso 2. Capturar los datos de la petición

Los siguientes datos a modificar se encuentran en ***test/Api/ApiTest.php***

Es importante contar con el setUp() que se encargará de inicializar la url. Modificar la URL ***('the_url')*** de la petición del objeto ***$config***, como se muestra en el siguiente fragmento de código:

```php
<?php
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
```
```php

<?php
/**
* Este es el método que se será ejecutado en la prueba ubicado en path/to/repository/test/Api/EntelRuc20ApiTest.php
*/
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
?>
```
## Pruebas unitarias

Para ejecutar las pruebas unitarias:

```sh
./vendor/bin/phpunit
```

---
[CONDICIONES DE USO, REPRODUCCIÓN Y DISTRIBUCIÓN](https://github.com/APIHub-CdC/licencias-cdc)

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
