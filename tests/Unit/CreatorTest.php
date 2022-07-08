<?php

namespace Unit;

use App\Patterns\Factory\lesson_2\People;
use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\lesson_2\CreatorPeople;
use App\Patterns\Factory\lesson_2\AsianCreator;
class CreatorTest extends TestCase
{
	public function test_creator_asian()
	{
		$this->assertInstanceOf(People::class, (new \App\Patterns\Factory\lesson_2\EuropianCreator()));
	}
}