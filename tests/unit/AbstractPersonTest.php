<?php

use PHPUnit\Framework\TestCase;
use App\Worker;
use App\AbstractPerson;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleIsReturned()
    {
        $person = new Worker('Blue');

        $this->assertEquals('Mr. Blue', $person->getNameAndTitle());
    }

    public function testNameAndTitleIncludesValueFromGetTitle()
    {
        $mock = $this->getMockBuilder(AbstractPerson::class)
                    ->setConstructorArgs(['Blue'])
                    ->getMockForAbstractClass();

        $mock->method('getTitle')
            ->will($this->returnValue('Mr.'));

        $this->assertEquals('Mr. Blue', $mock->getNameAndTitle());
    }
}