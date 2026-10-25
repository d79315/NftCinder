<?php
/**
 * Tests for NftCinder
 */

use PHPUnit\Framework\TestCase;
use Nftcinder\Nftcinder;

class NftcinderTest extends TestCase {
    private Nftcinder $instance;

    protected function setUp(): void {
        $this->instance = new Nftcinder(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftcinder::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
