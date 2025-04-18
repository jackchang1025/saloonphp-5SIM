<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Purchase;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 购买托管号码的请求
 */
class BuyHostingNumber extends Request
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
        protected string $operator,
        protected string $product
    ) {
    }

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return sprintf(
            '/user/buy/hosting/%s/%s/%s',
            $this->country,
            $this->operator,
            $this->product
        );
    }
} 