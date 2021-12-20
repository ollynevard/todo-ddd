<?php

namespace App\Features;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class TaskContext implements Context
{
    /**
     * @When /^I create a task without setting the status$/
     */
    public function iCreateATaskWithoutSettingTheStatus()
    {
        throw new PendingException();
    }

    /**
     * @Then the status will be :arg1
     */
    public function theStatusWillBe($arg1)
    {
        throw new PendingException();
    }
}
