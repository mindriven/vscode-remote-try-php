<?php

class FirstApiCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {

        $I->sendPost('/api.php', [
            'name' => 'davert',
            'email' => 'davert@codeception.com'
        ]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"result":"ok"}');
    }
}
