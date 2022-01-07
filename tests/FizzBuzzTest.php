<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    public function test_fizz_if_divisible_by_three() {
        //Given
        $number = 3;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Fizz", $result);
    }
    public function test_fizz_if_divisible_by_five() {
        //Given
        $number = 5;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Buzz", $result);
    }   
    public function test_fizz_if_divisible_by_five_and_three() {
        //Given
        $number = 15;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("FizzBuzz", $result);
    }
    public function test_fizz_if_no_divisible() {
        //Given
        $number = 7;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals($number, $result);
    }
    public function test_fizz_if_contain_a_three() {
        //Given
        $number = 31;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Fizz", $result);
    }
    public function test_fizz_if_contain_a_five() {
        //Given
        $number = 52;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Buzz", $result);
    }
}