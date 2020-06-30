# klarna-checkout
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 20200626163101
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/twulkau/.git"
    }
  ],
  "require": {
    "twulkau/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/klarna-checkout/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Klarna\Model\Order(); // \Klarna\Model\Order | 

try {
    $result = $apiInstance->createOrderMerchant($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrderMerchant: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**createOrderMerchant**](docs/Api/OrderApi.md#createordermerchant) | **POST** /checkout/v3/orders | Create a new order
*OrderApi* | [**readOrderMerchant**](docs/Api/OrderApi.md#readordermerchant) | **GET** /checkout/v3/orders/{order_id} | Retrieve an order
*OrderApi* | [**updateOrderMerchant**](docs/Api/OrderApi.md#updateordermerchant) | **POST** /checkout/v3/orders/{order_id} | Update an order


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AggregatedOrderAddressV2](docs/Model/AggregatedOrderAddressV2.md)
 - [AggregatedOrderCartItemV2](docs/Model/AggregatedOrderCartItemV2.md)
 - [AggregatedOrderCartV2](docs/Model/AggregatedOrderCartV2.md)
 - [AggregatedOrderPaymentProviderV2](docs/Model/AggregatedOrderPaymentProviderV2.md)
 - [AggregatedOrderRequestV2](docs/Model/AggregatedOrderRequestV2.md)
 - [AggregatedOrderUpdateRequestV2](docs/Model/AggregatedOrderUpdateRequestV2.md)
 - [Attachment](docs/Model/Attachment.md)
 - [Checkbox](docs/Model/Checkbox.md)
 - [CheckboxV2](docs/Model/CheckboxV2.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerV2](docs/Model/CustomerV2.md)
 - [DeliveryDetailsV1](docs/Model/DeliveryDetailsV1.md)
 - [Dimensions](docs/Model/Dimensions.md)
 - [Gui](docs/Model/Gui.md)
 - [MerchantAggregatedOrderRequestUpdateV2](docs/Model/MerchantAggregatedOrderRequestUpdateV2.md)
 - [MerchantAggregatedOrderV2](docs/Model/MerchantAggregatedOrderV2.md)
 - [MerchantRequested](docs/Model/MerchantRequested.md)
 - [MerchantRequestedCheckbox](docs/Model/MerchantRequestedCheckbox.md)
 - [MerchantUrls](docs/Model/MerchantUrls.md)
 - [Options](docs/Model/Options.md)
 - [Order](docs/Model/Order.md)
 - [OrderLine](docs/Model/OrderLine.md)
 - [PaymentProvider](docs/Model/PaymentProvider.md)
 - [PickupLocationV1](docs/Model/PickupLocationV1.md)
 - [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
 - [ProductV1](docs/Model/ProductV1.md)
 - [RecurringOrderRequestV1](docs/Model/RecurringOrderRequestV1.md)
 - [ShippingAttributes](docs/Model/ShippingAttributes.md)
 - [ShippingOption](docs/Model/ShippingOption.md)
 - [TimeslotV1](docs/Model/TimeslotV1.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




