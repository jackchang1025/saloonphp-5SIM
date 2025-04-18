<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 获取产品列表的请求
 */
class GetProducts extends Request
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
        return sprintf('/guest/products/%s/%s', $this->country, $this->product);
    }
} 