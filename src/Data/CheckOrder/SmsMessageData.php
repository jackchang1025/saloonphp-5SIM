<?php

namespace Weijiajia\Saloonphp\FiveSim\Data\CheckOrder;

use Spatie\LaravelData\Data;
use Carbon\Carbon;

class SmsMessageData extends Data
{
    public function __construct(
        public string $created_at,
        public string $date,
        public string $sender,
        public string $text,
        public ?string $code
    ) {
    }
    
    /**
     * 获取创建时间为 Carbon 对象
     */
    public function createdAt(): Carbon
    {
        return Carbon::parse($this->created_at);
    }
    
    /**
     * 获取发送日期为 Carbon 对象
     */
    public function dateAsCarbon(): Carbon
    {
        return Carbon::parse($this->date);
    }
}