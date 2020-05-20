<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once("src\Math.php");

final class MathTest extends TestCase
{
    public function testIsPairWithPair(): void
    {
        $this->assertEquals(Math::isPair(2), true);
    }

}
