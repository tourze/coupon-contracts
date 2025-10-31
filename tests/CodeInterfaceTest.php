<?php

namespace Tourze\CouponContracts\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tourze\CouponContracts\CodeInterface;
use Tourze\CouponContracts\Tests\Mock\MockCode;

/**
 * CodeInterface 接口的单元测试
 *
 * @internal
 */
#[CoversClass(CodeInterface::class)]
final class CodeInterfaceTest extends TestCase
{
    /**
     * 测试接口是否存在
     */
    public function testInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(CodeInterface::class));

        $reflection = new \ReflectionClass(CodeInterface::class);
        $this->assertTrue($reflection->isInterface());
    }

    /**
     * 测试接口是否可以被实现
     */
    public function testCanBeImplemented(): void
    {
        $mockCode = new MockCode();
        $this->assertInstanceOf(CodeInterface::class, $mockCode);
    }

    /**
     * 测试接口作为类型提示是否可以正常工作
     */
    public function testTypeHinting(): void
    {
        $mockCode = new MockCode();

        // 测试接口作为参数类型
        $this->assertTrue($this->acceptsCodeInterface($mockCode));

        // 测试接口作为返回类型
        $this->assertInstanceOf(CodeInterface::class, $this->returnsCodeInterface());
    }

    /**
     * 接受 CodeInterface 类型参数的辅助方法
     */
    private function acceptsCodeInterface(CodeInterface $code): bool
    {
        return true;
    }

    /**
     * 返回 CodeInterface 类型对象的辅助方法
     */
    private function returnsCodeInterface(): CodeInterface
    {
        return new MockCode();
    }
}
