<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $pageTitle = 'Codeception - Docker demo';
        $buttonLabel = 'My button';
        $oldContentText = 'old content';
        $newContentText = 'new content';

        $I->amOnPage('/index.php');
        $I->see($pageTitle);
        $I->see($oldContentText);
        $I->dontSee($newContentText);
        $I->click($buttonLabel);
        $I->see($newContentText);
        $I->dontSee($oldContentText);
    }
}
