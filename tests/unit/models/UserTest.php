<?php

namespace models;

use app\models\User;
use app\fixtures;
use yii\test\Fixture;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {

    }

    /**
     * @return bool
     */
    public function testCreate()
    {
        $user = new User();
        $user->nickname = 'user1';
        $user->password = 'password1';
        $user->email = 'za@mail.ru';
        $user->role = 'admin';
        $user->authToken = $user->createAuthtoken();
        expect_that($user->save());
    }

    public function testCreateEmptyFormSubmit()
    {
        $user = new User();
        expect_not($user->validate());
        expect_not($user->save());
    }


}
