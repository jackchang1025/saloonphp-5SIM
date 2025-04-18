<?php

namespace Weijiajia\Saloonphp\FiveSim;

use Weijiajia\Saloonphp\FiveSim\Requests\Order\BanOrder;
use Weijiajia\Saloonphp\FiveSim\Requests\Order\CancelOrder;
use Weijiajia\Saloonphp\FiveSim\Requests\Order\CheckOrder;
use Weijiajia\Saloonphp\FiveSim\Requests\Order\FinishOrder;
use Weijiajia\Saloonphp\FiveSim\Requests\Order\SmsInboxList;
use Weijiajia\Saloonphp\FiveSim\Requests\Prices\GetPrices;
use Weijiajia\Saloonphp\FiveSim\Requests\Prices\GetPricesByCountry;
use Weijiajia\Saloonphp\FiveSim\Requests\Prices\GetPricesByCountryAndProduct;
use Weijiajia\Saloonphp\FiveSim\Requests\Prices\GetPricesByProduct;
use Weijiajia\Saloonphp\FiveSim\Requests\Products\GetProducts;
use Weijiajia\Saloonphp\FiveSim\Requests\Purchase\BuyHostingNumber;
use Weijiajia\Saloonphp\FiveSim\Requests\Purchase\BuyNumber;
use Weijiajia\Saloonphp\FiveSim\Requests\Purchase\RebuyNumber;
use Weijiajia\Saloonphp\FiveSim\Requests\User\GetBalance;
use Weijiajia\Saloonphp\FiveSim\Requests\Countries\Countries;
use Weijiajia\Saloonphp\FiveSim\Requests\Purchase\BuyMultipleNumbers;
use Weijiajia\Saloonphp\FiveSim\Requests\Purchase\BuySpecificNumber;
use Weijiajia\Saloonphp\FiveSim\Data\CheckOrder\OrderData;
use Weijiajia\Saloonphp\FiveSim\Data\Products\ProductsData;
/**
 * 5SIM API 客户端主类
 */
class Resource
{


    /**
     * 
     * 创建一个新的 5SIM 客户端实例
     */
    public function __construct(protected FiveSimConnector $connector)
    {
        
    }

    /**
     * 获取用户余额
     */
    public function getBalance()
    {
        return $this->connector->send(new GetBalance());
    }

    /**
     * 购买激活号码
     */
    public function buyNumber(string $country, string $operator, string $product)
    {
        return $this->connector->send(new BuyNumber($country, $operator, $product));
    }

    /**
     * 购买托管号码
     */
    public function buyHostingNumber(string $country, string $operator, string $product)
    {
        return $this->connector->send(new BuyHostingNumber($country, $operator, $product));
    }

    /**
     * 重新购买号码
     */
    public function rebuyNumber(string $product, string $phone)
    {
        return $this->connector->send(new RebuyNumber($product, $phone));
    }

    /**
     * 检查订单状态
     */
    public function checkOrder(string $orderId): OrderData
    {
        return $this->connector->send(new CheckOrder($orderId))->dto();
    }

    /**
     * 完成订单
     */
    public function finishOrder(string $orderId)
    {
        return $this->connector->send(new FinishOrder($orderId));
    }

    /**
     * 取消订单
     */
    public function cancelOrder(string $orderId)
    {
        return $this->connector->send(new CancelOrder($orderId));
    }

    /**
     * 封禁订单
     */
    public function banOrder(string $orderId)
    {
        return $this->connector->send(new BanOrder($orderId));
    }

    /**
     * 获取短信收件箱列表
     */
    public function smsInboxList(string $orderId)
    {
        return $this->connector->send(new SmsInboxList($orderId));
    }

    /**
     * 获取产品列表
     */
    public function productRequests(string $country, string $operator, string $product):ProductsData
    {
        return $this->connector->send(new GetProducts($country, $operator, $product))->dto();
    }

    /**
     * 获取价格列表
     */
    public function priceRequests()
    {
        return $this->connector->send(new GetPrices());
    }

    /**
     * 按国家获取价格列表
     */
    public function priceRequestsByCountry(string $country)
    {
        return $this->connector->send(new GetPricesByCountry($country));
    }

    /**
     * 按产品获取价格列表
     */
    public function priceRequestsByProduct(string $product)
    {
        return $this->connector->send(new GetPricesByProduct($product));
    }

    /**
     * 按国家和产品获取价格列表
     */
    public function priceRequestsByCountryAndProduct(string $country, string $product)
    {
        return $this->connector->send(new GetPricesByCountryAndProduct($country, $product));
    }

    /**
     * 获取国家列表
     */
    public function countries()
    {
        return $this->connector->send(new Countries());
    }

    /**
     * 批量购买激活号码
     */
    public function buyMultipleNumbers(string $country, string $operator, string $product, int $quantity)
    {
        return $this->connector->send(new BuyMultipleNumbers($country, $operator, $product, $quantity));
    }

    /**
     * 购买指定号码
     */
    public function buySpecificNumber(string $country, string $operator, string $product, string $phone)
    {
        return $this->connector->send(new BuySpecificNumber($country, $operator, $product, $phone));
    }
} 