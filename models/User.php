<?php


namespace app\models;


use app\Exceptions\CreateException;
use app\Exceptions\LoginException;
use app\models\services\Debug;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


class User extends ActiveRecord
{
    public $role = 'user';


    public function attributeLabels()
    {
        return [
            'nickname' => 'Имя',
            'email' => 'E-mail',
            'password' => 'Пароль'
        ];
    }

    public function rules()
    {
        return [
            [['nickname'], 'required'],
            ['email', 'email'],
            ['password', 'string'],
            ['email', 'safe'],
            ['nickname', 'safe'],
        ];
    }

    public function createAuthtoken()
    {
        return $authToken = md5(mt_rand(1, 100)) . md5(mt_rand(1, 100));
    }

    public function userSignIn($post)
    {
        $this->authToken = $this->createAuthtoken();
        $this->email = $post['email'];
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->nickname = $post['nickname'];

        if (!empty($_COOKIE['authToken'])){
            throw new CreateException('Для регистрации нового пользователя необходимо выйти из аккаунта.');
        }
        if (self::findOne(['email' => $post['email']])) {
            throw new CreateException('Пользователь с таким Email существует.');
        }

        if ($this->save()) {
            setcookie('authToken', $this->authToken, 0, '/');
            return $this;
        } else {
            throw new CreateException('Ошибка сохранения.');
        }
    }

    public function userLogout(User $user)
    {
        setcookie('authToken', $user->authToken, -20, '/');
    }

    public function userLogin($post)
    {
        $userVar = self::find()->where('`email` = \'' . $post['email'] . '\';')->all();
        $user = $userVar['0'];
        if ($user === null) {
            throw new LoginException('email не верный.');
        }

        $check = password_verify($post['password'], $user->password);

        if ($check === true) {
            setcookie('authToken', $user->authToken, 0, '/');
            return $user;
        } else {
            throw new LoginException('Пароль не верный');
        }
    }


}