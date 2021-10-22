<?php

use PHPUnit\Framework\TestCase;
include('Calendar.php');
class CalendarTest extends TestCase
{

    private $calendar;

    public function setUp(): void
    {
        $this->calendar = new Calendar();

    }

    public function testCalendar()
    {

        $this->assertIsObject($this->calendar);

    }

    public function testAddEvent()
    {
        $cal = $this->calendar->add_event('22:00:00', 'nome', 1, "", 3, '2020/12/02');
        $this->assertEquals(1,$cal);

    }
}