<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Commentstatus;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '评论管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建评论', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'content:ntext',
            [
                'attribute'=>'content',
                'value'=>'beginning',
            ],
//            'userid',
            [
                'attribute'=>'user.username',
                'label'=>'作者',
                'value'=>'user.username',
            ],
            //'status',
            [
                'attribute'=>'status',
                'value'=>'status0.name',
                'filter'=>Commentstatus::find()
                        ->select(['name','id'])
                        ->orderBy('position')
                        ->indexBy('id')
                        ->column(),
            ],
            //'create_time:datetime',
            [
                'attribute'=>'create_time',
                'format'=>['date','php:m-d H:i'],
            ],
            //'email:email',
            //'url:url',
            //'post_id',
            'post.title',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
