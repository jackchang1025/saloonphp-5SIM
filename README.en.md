# SaloonPHP 5SIM Client

English Documentation | [中文文档](README.md)

This package provides a [5SIM](https://5sim.net) API client built on [SaloonPHP](https://docs.saloon.dev/). 5SIM is a platform that offers virtual phone numbers for receiving SMS verification codes from various applications.

## Features

- Complete support for all 5SIM API functionalities
- Uses PHP 8.1+ native enum types
- Built on SaloonPHP, easily extensible
- Type-safe API interactions
- Comprehensive exception handling

## Installation

You can install the package via Composer:

```bash
composer require weijiajia/saloonphp-5sim
```

## Basic Usage

### Initializing the Client

```php
use Weijiajia\Saloonphp\FiveSim\FiveSimConnector;
use Weijiajia\Saloonphp\FiveSim\Enums\Operator;
use Weijiajia\Saloonphp\FiveSim\Enums\Product;

// Create a new 5SIM client instance
$connector = new FiveSimConnector('YOUR_5SIM_API_KEY');
$client = $connector->resource();
```

### Getting User Balance

```php
$response = $client->getBalance();
$balance = $response->json();
```

### Purchasing Numbers

```php
// Buy activation number
$response = $client->buyNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM);
$order = $response->json();

// Buy hosting number
$response = $client->buyHostingNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM);
$order = $response->json();

// Rebuy number
$response = $client->rebuyNumber(Product::TELEGRAM, '7912345678');
$order = $response->json();

// Buy multiple numbers
$response = $client->buyMultipleNumbers('russia', Operator::ANY_OPERATOR, Product::TELEGRAM, 5);
$orders = $response->json();

// Buy specific number
$response = $client->buySpecificNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM, '7912345678');
$order = $response->json();
```

### Querying Products and Prices

```php
// Get countries list
$response = $client->countries();
$countries = $response->json();

// Get products list
$response = $client->productRequests('russia', Product::TELEGRAM);
$products = $response->json();

// Get prices list
$response = $client->priceRequests();
$prices = $response->json();

// Get prices by country
$response = $client->priceRequestsByCountry('russia');
$prices = $response->json();

// Get prices by product
$response = $client->priceRequestsByProduct(Product::TELEGRAM);
$prices = $response->json();

// Get prices by country and product
$response = $client->priceRequestsByCountryAndProduct('russia', Product::TELEGRAM);
$prices = $response->json();
```

### Order Management

```php
// Check order status
$response = $client->checkOrder('12345678');
$orderStatus = $response->json();

// Finish order
$response = $client->finishOrder('12345678');
$result = $response->json();

// Cancel order
$response = $client->cancelOrder('12345678');
$result = $response->json();

// Ban order
$response = $client->banOrder('12345678');
$result = $response->json();

// Get SMS inbox list
$response = $client->smsInboxList('12345678');
$messages = $response->json();
```

## Using Enum Types

The package provides enum classes to help you correctly specify operators and products:

```php
use Weijiajia\Saloonphp\FiveSim\Enums\Operator;
use Weijiajia\Saloonphp\FiveSim\Enums\Product;

// Using predefined operator constants
$operator = Operator::ANY_OPERATOR;
$operator = Operator::BEELINE;
$operator = Operator::MEGAFON;
$operator = Operator::MTS;
$operator = Operator::TELE2;
// ... and more

// Using predefined product constants
$product = Product::TELEGRAM;
$product = Product::WHATSAPP;
$product = Product::FACEBOOK;
$product = Product::INSTAGRAM;
$product = Product::OPENAI;
// ... and more
```

## Exception Handling

All API-related errors will throw corresponding exceptions, which you can handle using try/catch blocks:

```php
use Saloon\Exceptions\Request\RequestException;

try {
    $response = $client->buyNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM);
    $order = $response->json();
} catch (RequestException $e) {
    echo 'Error occurred: ' . $e->getMessage();
    echo 'Response status: ' . $e->getResponse()->status();
    echo 'Response body: ' . $e->getResponse()->body();
}
```

## Contributing

Contributions are welcome via issues or pull requests.

## License

This package is released under the MIT License. See the [LICENSE](LICENSE) file for details. 