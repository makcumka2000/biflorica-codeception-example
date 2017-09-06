<?php
class BuyCest
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/marketPlaceNew/default/login');
        $I->wait(1);
        $I->fillField('#LoginForm_username', 'b1@biflorica.com');
        $I->fillField('#LoginForm_password', '123456');
        $I->click('#loginButton');
        $I->wait(1);
    }

    public function testCest(AcceptanceTester $I)
    {
        $I->amOnPage('/marketPlaceNew/default/orders');

        $I->click('#create_order_button');

        $I->fillField('//*[@id="orderAdate"]', '6 Sep 2017');

        $I->fillField('//*[@id="orderExpected"]', '5');

        $I->click('/html/body/div[6]/div[1]/div[2]/table/tbody/tr[2]/td[6]');

        $I->fillField('//*[@id="orderName"]', $orderName = md5(time()));


        $I->click('Сохранить');

        $I->wait(2);

        $I->seeLink($orderName);

        $I->click($orderName);
        $I->wait(1);
        $I->see($orderName);

    }




}