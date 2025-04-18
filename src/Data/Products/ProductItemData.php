<?php

namespace Weijiajia\Saloonphp\FiveSim\Data\Products;

use Spatie\LaravelData\Data;

class ProductItemData extends Data
{
    public function __construct(
        public string $name,        // 产品名称 (例如: "1day", "vkontakte")
        public string $category,    // 产品类别 (例如: "hosting", "activation")
        public int $qty,            // 数量
        public float $price         // 价格
    ) {
    }
    
    /**
     * 产品是否为激活类型
     */
    public function isActivation(): bool
    {
        return strtolower($this->category) === 'activation';
    }
    
    /**
     * 产品是否为托管类型
     */
    public function isHosting(): bool
    {
        return strtolower($this->category) === 'hosting';
    }
    
    /**
     * 获取格式化价格
     */
    public function formattedPrice(): string
    {
        return number_format($this->price, 2);
    }
}