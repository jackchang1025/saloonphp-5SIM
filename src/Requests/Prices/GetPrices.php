<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Prices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 获取所有产品价格的请求
 */
class GetPrices extends Request
{
    /**
     * HTTP 请求方法
     */
    protected Method $method = Method::GET;

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return '/guest/prices';
    }
} 