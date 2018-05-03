<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Новини');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if( Yii::$app->user->isGuest)
        { //троха поговнокодимо)))
            echo "Добавити новину можуть тільки зареєстровані користувачі.<br><a href='".$_SERVER['PHP_SELF']."?r=site/login'>Зареєструватися</a>";
           }else{  
         echo Html::a(Yii::t('app', 'Добавити новину'), ['create'], ['class' => 'btn btn-success']);};
         ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'description:ntext',
            //'content:ntext',

            Yii::$app->user->isGuest ?(['class' => 'yii\grid\ActionColumn', 
            'template' =>'{view}']):(
            ['class' => 'yii\grid\ActionColumn'])
        ],
    ]); ?>
</div>
