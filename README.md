# Coupon Contracts

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)
[![License](https://img.shields.io/packagist/l/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)
[![Build Status](https://img.shields.io/github/actions/workflow/status/tourze/coupon-contracts/ci.yml?style=flat-square)](https://github.com/tourze/coupon-contracts/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/tourze/coupon-contracts?style=flat-square)](https://coveralls.io/github/tourze/coupon-contracts)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/coupon-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/coupon-contracts)

A collection of PHP contracts/interfaces for coupon and coupon code management systems.

## Installation

```bash
composer require tourze/coupon-contracts
```

## Quick Start

This package provides two main interfaces for building coupon systems:

### CouponInterface

The main interface for coupon objects:

```php
<?php

use Tourze\CouponContracts\CouponInterface;

class MyCoupon implements CouponInterface
{
    // Your coupon implementation
}
```

### CodeInterface

The interface for coupon code objects:

```php
<?php

use Tourze\CouponContracts\CodeInterface;

class MyCouponCode implements CodeInterface
{
    // Your coupon code implementation
}
```

## Usage

These interfaces are designed to be implemented by your coupon system classes. They provide a consistent contract for:

- Coupon management systems
- Coupon code generation and validation
- Integration with different coupon backends

## Requirements

- PHP 8.1 or higher

## Testing

```bash
composer test
```

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).