<?php
/**
 * Tests for DeepMinotaur
 */

use PHPUnit\Framework\TestCase;
use Deepminotaur\Deepminotaur;

class DeepminotaurTest extends TestCase {
    private Deepminotaur $instance;

    protected function setUp(): void {
        $this->instance = new Deepminotaur(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Deepminotaur::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
