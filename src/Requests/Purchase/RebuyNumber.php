<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Purchase;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 重新购买号码的请求
 */
class RebuyNumber extends Request
{
    /**
     * HTTP 请求方法
     */
    protected Method $method = Method::GET;

    /**
     * 构造函数
     */
    public function __construct(
        protected string $product,
        protected string $phone
    ) {
    }

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return sprintf(
            '/user/reuse/%s/%s',
            $this->product,
            $this->phone
        );
    }
} 