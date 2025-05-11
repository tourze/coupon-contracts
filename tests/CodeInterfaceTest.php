<?php

namespace Tourze\CouponContracts\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Tourze\CouponContracts\CodeInterface;
use Tourze\CouponContracts\Tests\Mock\MockCode;

/**
 * CodeInterface 接口的单元测试
 */
class CodeInterfaceTest extends TestCase
{
    /**
     * 测试接口是否存在
     */
    public function testInterfaceExists()
    {
        $this->assertTrue(interface_exists(CodeInterface::class));
        
        $reflection = new ReflectionClass(CodeInterface::class);
        $this->assertTrue($reflection->isInterface());
    }
    
    /**
     * 测试接口是否可以被实现
     */
    public function testCanBeImplemented()
    {
        $mockCode = new MockCode();
        $this->assertInstanceOf(CodeInterface::class, $mockCode);
    }
    
    /**
     * 测试接口作为类型提示是否可以正常工作
     */
    public function testTypeHinting()
    {
        $mockCode = new MockCode();
        
        // 测试接口作为参数类型
        $this->assertTrue($this->acceptsCodeInterface($mockCode));
        
        // 测试接口作为返回类型
        $this->assertInstanceOf(CodeInterface::class, $this->returnsCodeInterface());
    }
    
    /**
     * 接受 CodeInterface 类型参数的辅助方法
     *
     * @param CodeInterface $code
     * @return bool
     */
    private function acceptsCodeInterface(CodeInterface $code): bool
    {
        return true;
    }
    
    /**
     * 返回 CodeInterface 类型对象的辅助方法
     *
     * @return CodeInterface
     */
    private function returnsCodeInterface(): CodeInterface
    {
        return new MockCode();
    }
} 