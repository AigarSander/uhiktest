<?php

require 'vendor\autoload.php';
require 'Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function calculatorWorksCorrectly()
    {
        /**
         * Given I have calculator open
         * When I pass data to calculator
         * Then I get back calculated data
         */
        $dataToPass = 5;
        $expectedUmbermoot = 20;
        $expectedPindala = 25;
        $convertedObj = new Calculator();
        $resultFromConverter = $convertedObj->instantiate($dataToPass);
        $this->assertEquals(
            $dataToPass,
            $resultFromConverter['a']
        );
        $this->assertEquals(
            $expectedUmbermoot,
            $resultFromConverter['umbermoot']
        );
        $this->assertEquals(
            $expectedPindala,
            $resultFromConverter['pindala']
        );
    }
}
