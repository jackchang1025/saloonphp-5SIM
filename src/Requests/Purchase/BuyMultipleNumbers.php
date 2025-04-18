<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Purchase;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 批量购买激活号码的请求
 */
class BuyMultipleNumbers extends Request
{
    protected Method $method = Method::POST;

    public function __construct(
        protected string $country,
        protected string $operator,
        protected string $product,
        protected int $quantity
    ) {}

    public function resolveEndpoint(): string
    {
        return sprintf('/user/buy/activation/%s/%s/%s', $this->country, $this->operator, $this->product);
    }

    public function defaultBody(): array
    {
        return [
            'quantity' => $this->quantity,
        ];
    }
}