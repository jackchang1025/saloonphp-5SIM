<?php

namespace Weijiajia\Saloonphp\FiveSim\Data\Products;


use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Illuminate\Support\Collection;

class ProductsData extends Data
{
    /**
     * @param DataCollection<ProductItemData> $products 产品集合
     */
    public function __construct(
        #[DataCollectionOf(ProductItemData::class)]
        public DataCollection $products
    ) {
    }
    
    /**
     * 从 API 响应创建产品数据对象
     */
    public static function fromResponse(array $data): self
    {
        $products = [];
        
        foreach ($data as $name => $details) {
            $products[] = [
                'name' => $name,
                'category' => $details['Category'] ?? '',
                'qty' => $details['Qty'] ?? 0,
                'price' => $details['Price'] ?? 0.0,
            ];
        }
        
        return self::from($products);
    }
    
    /**
     * 获取所有激活类产品
     * 
     * @return Collection<ProductItemData>
     */
    public function getActivationProducts(): Collection
    {
        return $this->products
            ->toCollection()
            ->filter(fn(ProductItemData $product) => $product->isActivation());
    }
    
    /**
     * 获取所有托管类产品
     * 
     * @return Collection<ProductItemData>
     */
    public function getHostingProducts(): Collection
    {
        return $this->products
            ->toCollection()
            ->filter(fn(ProductItemData $product) => $product->isHosting());
    }
    
    /**
     * 获取指定名称的产品
     */
    public function getProductByName(string $name): ?ProductItemData
    {
        return $this->products
            ->toCollection()
            ->first(fn(ProductItemData $product) => $product->name === $name);
    }
    
    /**
     * 获取所有产品名称列表
     * 
     * @return string[]
     */
    public function getProductNames(): array
    {
        return $this->products
            ->toCollection()
            ->map(fn(ProductItemData $product) => $product->name)
            ->toArray();
    }
    
    /**
     * 按价格排序产品（从低到高）
     * 
     * @return Collection<ProductItemData>
     */
    public function sortByPrice(bool $descending = false): Collection
    {
        $products = $this->products->toCollection();
        
        if ($descending) {
            return $products->sortByDesc(fn(ProductItemData $product) => $product->price);
        }
        
        return $products->sortBy(fn(ProductItemData $product) => $product->price);
    }
    
    /**
     * 获取最便宜的产品
     */
    public function getCheapestProduct(): ?ProductItemData
    {
        if ($this->products->isEmpty()) {
            return null;
        }
        
        return $this->sortByPrice()->first();
    }
}