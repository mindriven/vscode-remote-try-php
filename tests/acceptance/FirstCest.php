<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
        $I->see('Hello remote world! ');
    }
}