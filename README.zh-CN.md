# Coupon Contracts

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)
[![License](https://img.shields.io/packagist/l/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)
[![Build Status](https://img.shields.io/github/actions/workflow/status/tourze/coupon-contracts/ci.yml?style=flat-square)](https://github.com/tourze/coupon-contracts/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/tourze/coupon-contracts?style=flat-square)](https://coveralls.io/github/tourze/coupon-contracts)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)

PHP 优惠券和优惠码管理系统的契约/接口集合。

## 安装

```bash
composer require tourze/coupon-contracts
```

## 快速开始

此包提供两个主要接口用于构建优惠券系统：

### CouponInterface

优惠券对象的主要接口：

```php
<?php

use Tourze\CouponContracts\CouponInterface;

class MyCoupon implements CouponInterface
{
    // 您的优惠券实现
}
```

### CodeInterface

优惠码对象的接口：

```php
<?php

use Tourze\CouponContracts\CodeInterface;

class MyCouponCode implements CodeInterface
{
    // 您的优惠码实现
}
```

## 使用方法

这些接口旨在由您的优惠券系统类实现。它们为以下功能提供了一致的契约：

- 优惠券管理系统
- 优惠码生成和验证
- 与不同优惠券后端的集成

## 系统要求

- PHP 8.1 或更高版本

## 测试

```bash
composer test
```

## 许可证

此包是基于 [MIT 许可证](LICENSE) 开源的软件。
