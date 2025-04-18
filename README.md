# SaloonPHP 5SIM 客户端

[English Documentation](README.en.md) | 中文文档

该扩展包提供了一个基于 [SaloonPHP](https://docs.saloon.dev/) 构建的 [5SIM](https://5sim.net) API 客户端。5SIM 是一个提供虚拟电话号码服务的平台，可用于接收各类应用的短信验证码。

## 功能特点

- 完整支持5SIM API的所有功能
- 使用PHP 8.1+原生枚举类型
- 基于SaloonPHP构建，易于扩展
- 类型安全的API交互方式
- 完善的异常处理机制

## 安装

你可以通过 Composer 安装该扩展包：

```bash
composer require weijiajia/saloonphp-5sim
```

## 基本用法

### 初始化客户端

```php
use Weijiajia\Saloonphp\FiveSim\FiveSimConnector;
use Weijiajia\Saloonphp\FiveSim\Enums\Operator;
use Weijiajia\Saloonphp\FiveSim\Enums\Product;

// 创建一个新的 5SIM 客户端实例
$connector = new FiveSimConnector('YOUR_5SIM_API_KEY');
$client = $connector->resource();
```

### 获取用户余额

```php
$response = $client->getBalance();
$balance = $response->json();
```

### 购买号码

```php
// 购买激活号码
$response = $client->buyNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM);
$order = $response->json();

// 购买托管号码
$response = $client->buyHostingNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM);
$order = $response->json();

// 重新购买号码
$response = $client->rebuyNumber(Product::TELEGRAM, '7912345678');
$order = $response->json();

// 批量购买号码
$response = $client->buyMultipleNumbers('russia', Operator::ANY_OPERATOR, Product::TELEGRAM, 5);
$orders = $response->json();

// 购买指定号码
$response = $client->buySpecificNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM, '7912345678');
$order = $response->json();
```

### 查询产品和价格

```php
// 获取国家列表
$response = $client->countries();
$countries = $response->json();

// 获取产品列表
$response = $client->productRequests('russia', Product::TELEGRAM);
$products = $response->json();

// 获取价格列表
$response = $client->priceRequests();
$prices = $response->json();

// 按国家获取价格列表
$response = $client->priceRequestsByCountry('russia');
$prices = $response->json();

// 按产品获取价格列表
$response = $client->priceRequestsByProduct(Product::TELEGRAM);
$prices = $response->json();

// 按国家和产品获取价格列表
$response = $client->priceRequestsByCountryAndProduct('russia', Product::TELEGRAM);
$prices = $response->json();
```

### 订单管理

```php
// 检查订单状态
$response = $client->checkOrder('12345678');
$orderStatus = $response->json();

// 完成订单
$response = $client->finishOrder('12345678');
$result = $response->json();

// 取消订单
$response = $client->cancelOrder('12345678');
$result = $response->json();

// 封禁订单
$response = $client->banOrder('12345678');
$result = $response->json();

// 获取短信收件箱列表
$response = $client->smsInboxList('12345678');
$messages = $response->json();
```

## 使用枚举类型

该扩展包提供了枚举类来帮助你正确地指定运营商和产品：

```php
use Weijiajia\Saloonphp\FiveSim\Enums\Operator;
use Weijiajia\Saloonphp\FiveSim\Enums\Product;

// 使用预定义的运营商常量
$operator = Operator::ANY_OPERATOR;
$operator = Operator::BEELINE;
$operator = Operator::MEGAFON;
$operator = Operator::MTS;
$operator = Operator::TELE2;
// ... 等等

// 使用预定义的产品常量
$product = Product::TELEGRAM;
$product = Product::WHATSAPP;
$product = Product::FACEBOOK;
$product = Product::INSTAGRAM;
$product = Product::OPENAI;
// ... 等等
```

## 异常处理

所有与API相关的错误都会抛出相应的异常，你可以使用 try/catch 块来处理这些异常：

```php
use Saloon\Exceptions\Request\RequestException;

try {
    $response = $client->buyNumber('russia', Operator::ANY_OPERATOR, Product::TELEGRAM);
    $order = $response->json();
} catch (RequestException $e) {
    echo '发生错误：' . $e->getMessage();
    echo '响应状态码：' . $e->getResponse()->status();
    echo '响应内容：' . $e->getResponse()->body();
}
```

## 贡献

欢迎通过创建 issue 或者提交 pull request 来贡献代码。

## 许可证

该扩展包基于 MIT 许可证发布。详情请参阅 [LICENSE](LICENSE) 文件。 