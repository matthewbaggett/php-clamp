<?php
class ClampTest extends \PHPUnit_Framework_TestCase{

    public function clampProvider(){
        return [
            [1,2,3,2],
            [1,2,0,1],
            [-1,2,0,0],
            [1,3,2,2],
            [0.001,0.003,0.002,0.002],
            [0.001,0.003,0.004,0.003],
            [0.001,0.003,0.000,0.001],
            [-1,+1,0,0],
            [-1,+1,0.5,0.5],
            [-1,+1,-2,-1],
            ['a','c','b','b'],
            ['a','c','d','c'],
        ];
    }

    /**
     * @dataProvider clampProvider
     */
    public function testClamp($min, $max, $current, $expected){
        $this->assertEquals($expected, clamp($min, $max, $current));
    }
}
