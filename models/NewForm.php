<?php
namespace app\models;

use Yii;
use yii\base\Model;

class NewForm extends Model{
	public $name;
	public $email;
	public $phone_number;

//перевизначимо функцію рулес (правила валідаціі та обов'язкових полів')
public function rules(){
	return [
		[['name','email','phone_number'],'required'],
		['email','email'],
	];
}


} 