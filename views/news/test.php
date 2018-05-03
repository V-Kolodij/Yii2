<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>News</h1>
<ul>
<?php foreach ($news as $new): ?>
    <li>
        <?= Html::encode("{$new->title} ({$new->description})") ?>
        <?= Html::encode("{$new->content}") ?>
    </li>
<?php endforeach; ?>
</ul>

