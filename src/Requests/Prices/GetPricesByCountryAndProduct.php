<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Prices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 获取指定国家和产品价格的请求
 */
class GetPricesByCountryAndProduct extends Request
{
    /**
     * HTTP 请求方法
     */
    protected Method $method = Method::GET;

    /**
     * 构造函数
     */
    public function __construct(
        protected string $country,
        protected string $product
    ) {
    }

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return sprintf('/guest/prices?country=%s&product=%s', $this->country, $this->product);
    }
} 