<?php

class TestParent
{
    protected function testMethod()
    {
        echo 'It works!';
    }

    public function showMessage()
    {
        $this->testMethod();
    }
}

class TestInheritance extends TestParent
{
    public function testPublic()
    {
        $this->testMethod();
    }
}

$testParentObj = new TestParent();
$TestInheritanceObj = new TestInheritance();
// $testParentObj->showMessage();
// $TestInheritanceObj->testPublic();
// $testParentObj->testMethod();
