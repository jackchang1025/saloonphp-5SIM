<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Prices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 获取指定产品价格的请求
 */
class GetPricesByProduct extends Request
{
    /**
     * HTTP 请求方法
     */
    protected Method $method = Method::GET;

    /**
     * 构造函数
     */
    public function __construct(
        protected string $product
    ) {
    }

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return sprintf('/guest/prices?product=%s', $this->product);
    }
} 