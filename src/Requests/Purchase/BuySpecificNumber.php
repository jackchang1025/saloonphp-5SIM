<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Purchase;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 购买指定号码的请求
 */
class BuySpecificNumber extends Request
{
    protected Method $method = Method::POST;

    public function __construct(
        protected string $country,
        protected string $operator,
        protected string $product,
        protected string $phone
    ) {}

    public function resolveEndpoint(): string
    {
        return sprintf('/user/buy/activation/%s/%s/%s', $this->country, $this->operator, $this->product);
    }

    public function defaultBody(): array
    {
        return [
            'phone' => $this->phone,
        ];
    }
}