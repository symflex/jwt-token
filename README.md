# JwtToken

## Example

```php
use Symflex\Component\Jwt\TokenFactory;
use Symflex\Component\Jwt\Token\Header\Algorithm;
use Symflex\Component\Jwt\Token\Header\Type;

$header = [
    'data' => [
        Algorithm::KEY => new Rsa256(),
        Type::KEY => new Jwt()
    ],
    'encoded' => 'base64 encoded json string'   
];

$payload = [
    'data' => [
        'key' => 'value'
    ],
    'encoded' => 'base64 encoded json string'   
];

$signature = [
    'data' => 'signature string',
    'encoded' => 'base64 encoded json string'   
];



$tokenFactory = new TokenFactory();
$tokenFactory->createToken($header, $payload, $signature);

```