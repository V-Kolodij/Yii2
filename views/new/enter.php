<?php
use yii\helpers\Html;
//use yii\widget\ActiveForm;
use yii\bootstrap\ActiveForm;


$this->title = 'New Form';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin();
?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<?= $form->field($model,'phone_number'); ?>
<div class="form-group">
	<?= Html::submitButton('Go!', ['class'=>'btn btn-primary'])?>
</div>

<?php ActiveForm::end();?>
