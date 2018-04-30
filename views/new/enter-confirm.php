<?php
use yii\helpers\Html;

$this->title = 'Confirm Form';
$this->params['breadcrumbs'][] = $this->title;
echo "<h3>You indicated this DATA:</h3>";
echo Html::encode($model->name).'<br>';
echo Html::encode($model->email).'<br>';?>
<?= Html::encode($model->phone_number); ?>

