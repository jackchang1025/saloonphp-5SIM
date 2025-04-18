<?php

namespace Tests\Feature;

use Weijiajia\Saloonphp\FiveSim\FiveSimConnector;

beforeEach(function () {
    $this->connector = new FiveSimConnector('...');
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
    $order = $this->connector->resource()->buyNumber('canada', 'any', 'apple');
    expect($order->json())->toBeArray();
});





