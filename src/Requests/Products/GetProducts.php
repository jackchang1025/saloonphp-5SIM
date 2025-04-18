<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Weijiajia\Saloonphp\FiveSim\Enums\Operator;
use Weijiajia\Saloonphp\FiveSim\Data\Products\ProductsData;
use Saloon\Http\Response;

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
        protected string $country = Operator::ANY_OPERATOR->value,
        protected string $operator = Operator::ANY_OPERATOR->value,
        protected string $product = Operator::ANY_OPERATOR->value,
    ) {
    }

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return sprintf('/guest/products/%s/%s/%s', $this->country, $this->operator, $this->product);
    }

    public function createDtoFromResponse(Response $response): ProductsData
    {
        return ProductsData::fromResponse($response->json());
    }
} 