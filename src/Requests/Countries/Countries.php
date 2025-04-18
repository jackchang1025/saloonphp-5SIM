<?php

namespace Weijiajia\Saloonphp\FiveSim\Requests\Countries;

use Saloon\Enums\Method;
use Saloon\Http\Request;
class Countries extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/guest/countries';
    }
}