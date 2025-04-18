<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Order;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 检查订单状态的请求
 */
class CheckOrder extends Request
{
    /**
     * HTTP 请求方法
     */
    protected Method $method = Method::GET;

    /**
     * 构造函数
     */
    public function __construct(
        protected string $orderId
    ) {
    }

    /**
     * 请求的路径
     */
    public function resolveEndpoint(): string
    {
        return sprintf('/user/check/%s', $this->orderId);
    }
} 