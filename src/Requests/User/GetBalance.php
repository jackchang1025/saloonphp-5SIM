<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\User;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 获取用户余额信息的请求
 */
class GetBalance extends Request
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
        return '/user/profile';
    }
} 