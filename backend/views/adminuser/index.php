<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdminuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '管理员管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增管理员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'nickname',
//            'password',
            'email:email',
            //'profile:ntext',

            ['class' => 'yii\grid\ActionColumn',
                        'template'=>'{view}{update}{privilege}',
                        'buttons'=>[
                                      'privilege'=>function($url,$model,$key)
                                      {
                                          $options=[
                                                  'title'=>Yii::t('yii','权限'),
                                                  'aria-lable'=>Yii::t('yii','权限'),
                                                  'data-pjax'=>'0',
                                          ];

                                          return Html::a('<span class="glyphicon glyphicon-user"></span>',$url,$options);
                                      }
                        ],
            ],
        ],
    ]); ?>
</div>
