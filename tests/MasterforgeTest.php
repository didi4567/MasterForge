<?php
/**
 * Tests for MasterForge
 */

use PHPUnit\Framework\TestCase;
use Masterforge\Masterforge;

class MasterforgeTest extends TestCase {
    private Masterforge $instance;

    protected function setUp(): void {
        $this->instance = new Masterforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Masterforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
