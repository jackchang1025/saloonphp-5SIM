<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Order;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * 封禁订单的请求（如果来自服务的号码被屏蔽）
 */
class BanOrder extends Request
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
        return sprintf('/user/ban/%s', $this->orderId);
    }
} 