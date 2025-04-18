<?php

namespace Tests\Feature;

use Weijiajia\Saloonphp\FiveSim\FiveSimConnector;
use Weijiajia\Saloonphp\FiveSim\Data\CheckOrder\OrderData;
use Spatie\LaravelData\DataCollection;
use Saloon\Http\Faking\MockClient;
use Weijiajia\Saloonphp\FiveSim\Requests\Purchase\BuyNumber;
use Saloon\Http\Faking\MockResponse;
use Weijiajia\Saloonphp\FiveSim\Requests\Order\CheckOrder;

beforeEach(function () {
    $this->connector = new FiveSimConnector('');
    $this->connector->debug();
});

it('can get balance', function () {
    $balance = $this->connector->resource()->getBalance();
    expect($balance->json())->toBeArray();
});

it('can get product', function () {
    $product = $this->connector->resource()->productRequests('any', 'any');
    expect($product->json())->toBeArray();
});

it('can get countries', function () {
    $countries = $this->connector->resource()->countries();
    expect($countries->json())->toBeArray();
});


it('can buyNumber', function () {

    $mockClient = new MockClient([
        BuyNumber::class => MockResponse::make(body: '{
  "id":11631253,
  "phone":"+79000381454",
  "operator":"beeline",
  "product":"vkontakte",
  "price":21,
  "status":"PENDING",
  "expires":"2018-10-13T08:28:38.809469028Z",
  "sms":null,
  "created_at":"2018-10-13T08:13:38.809469028Z",
  "forwarding":false,
  "forwarding_number":"",
  "country":"russia"
}

', status: 200),
    ]);
    
    $this->connector->withMockClient($mockClient);

    $order = $this->connector->resource()->buyNumber('canada', 'any', 'apple');
    expect($order->json())->toBeArray();
});


it('can check order', function () {
    $mockClient = new MockClient([
        CheckOrder::class => MockResponse::make(body: '{
  "id": 11631253,
  "created_at": "2018-10-13T08:13:38.809469028Z",
  "phone": "+79000381454",
  "product": "vkontakte",
  "price": 21,
  "status": "RECEIVED",
  "expires": "2018-10-13T08:28:38.809469028Z",
  "sms": [
      {
        "created_at":"2018-10-13T08:20:38.809469028Z",
        "date":"2018-10-13T08:19:38Z",
        "sender":"VKcom",
        "text":"VK: 09363 - use this code to reclaim your suspended profile.",
        "code":"09363"
      }
  ],
  "forwarding": false,
  "forwarding_number": "",
  "country":"russia"
}
', status: 200),
    ]);
    
    $this->connector->withMockClient($mockClient);

    $response = $this->connector->resource()->checkOrder(11631253);
    expect($response)->toBeInstanceOf(OrderData::class)->and($response->sms)->toBeInstanceOf(DataCollection::class);
});







