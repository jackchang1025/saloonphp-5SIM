<?php

namespace Weijiajia\Saloonphp\FiveSim;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Weijiajia\SaloonphpLogsPlugin\Contracts\HasLoggerInterface;
use Weijiajia\SaloonphpLogsPlugin\HasLogger;

class FiveSimConnector extends Connector implements HasLoggerInterface
{
    use AcceptsJson;
    use AlwaysThrowOnErrors;
    use HasLogger;

    /**
     * 5SIM API 的基本 URL
     */
    public function resolveBaseUrl(): string
    {
        return 'https://5sim.net/v1';
    }

    /**
     * 创建一个新的 5SIM 连接器实例
     */
    public function __construct(
        protected string $apiKey
    ) {
    }

    /**
     * 获取认证配置
     */
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->apiKey);
    }

    public function resource(): Resource
    {
        return new Resource($this);
    }

} 