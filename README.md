# JwtToken

## Example

```php
use Symflex\Component\Jwt\TokenFactory;

$header = [
    'data' => [
        'key' => 'value'
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