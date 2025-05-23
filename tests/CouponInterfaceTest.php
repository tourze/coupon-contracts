<?php

namespace Tourze\CouponContracts\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Tourze\CouponContracts\CouponInterface;
use Tourze\CouponContracts\Tests\Mock\MockCoupon;

/**
 * CouponInterface 接口的单元测试
 */
class CouponInterfaceTest extends TestCase
{
    /**
     * 测试接口是否存在
     */
    public function testInterfaceExists()
    {
        $this->assertTrue(interface_exists(CouponInterface::class));
        
        $reflection = new ReflectionClass(CouponInterface::class);
        $this->assertTrue($reflection->isInterface());
    }
    
    /**
     * 测试接口是否可以被实现
     */
    public function testCanBeImplemented()
    {
        $mockCoupon = new MockCoupon();
        $this->assertInstanceOf(CouponInterface::class, $mockCoupon);
    }
    
    /**
     * 测试接口作为类型提示是否可以正常工作
     */
    public function testTypeHinting()
    {
        $mockCoupon = new MockCoupon();
        
        // 测试接口作为参数类型
        $this->assertTrue($this->acceptsCouponInterface($mockCoupon));
        
        // 测试接口作为返回类型
        $this->assertInstanceOf(CouponInterface::class, $this->returnsCouponInterface());
    }
    
    /**
     * 接受 CouponInterface 类型参数的辅助方法
     *
     * @param CouponInterface $coupon
     * @return bool
     */
    private function acceptsCouponInterface(CouponInterface $coupon): bool
    {
        return true;
    }
    
    /**
     * 返回 CouponInterface 类型对象的辅助方法
     *
     * @return CouponInterface
     */
    private function returnsCouponInterface(): CouponInterface
    {
        return new MockCoupon();
    }
} 