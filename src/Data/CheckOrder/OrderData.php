<?php

namespace Weijiajia\Saloonphp\FiveSim\Data\CheckOrder;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Weijiajia\Saloonphp\FiveSim\Enums\OrderStatus;
class OrderData extends Data
{
    public function __construct(
        public int $id,
        public string $created_at,
        public string $phone,
        public string $product,
        public float $price,
        public string $status, 
        public string $expires,
        #[DataCollectionOf(SmsMessageData::class)]
        public ?DataCollection $sms = null,
        public bool $forwarding = false,
        public ?string $forwarding_number = null,
        public ?string $country = null
    ) {
    }


    public function status(): OrderStatus
    {
        return OrderStatus::from($this->status);
    }

    /**
     * 获取订单状态是否为已收到
     */
    public function isReceived(): bool
    {
        return $this->status === OrderStatus::RECEIVED;
    }
    
    /**
     * 获取订单创建时间为 Carbon 对象
     */
    public function createdAt(): Carbon
    {
        return Carbon::parse($this->created_at);
    }
    
    /**
     * 获取订单过期时间为 Carbon 对象
     */
    public function expiresAt(): Carbon
    {
        return Carbon::parse($this->expires);
    }
    
    /**
     * 获取最新短信
     */
    public function getLatestSms(): ?SmsMessageData
    {
        if ($this->sms?->isEmpty()) {
            return null;
        }
        
        // 克隆集合避免修改原始数据
        $sortedSms = clone $this->sms;
        
        // 按时间排序并返回最新消息
        return $sortedSms->sortByDesc(fn(SmsMessageData $sms) => $sms->date)->first();
    }
    
    /**
     * 获取验证码
     */
    public function getVerificationCode(): ?string
    {
        $latestSms = $this->getLatestSms();
        return $latestSms?->code;
    }
}