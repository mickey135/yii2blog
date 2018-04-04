<?php
/**
 * Created by PhpStorm.
 * User: 12916
 * Date: 2018/4/4
 * Time: 10:54
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Adminuser;
/* @var $this yii\web\View */
/* @var $model common\models\Adminuser */

$model = Adminuser::findOne($id);

$this->title = '权限设置：'.$model->username;
$this->params['breadcrumbs'][] = ['label' => '管理员', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '权限设置';
?>
<div class="adminuser-privilege-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::checkboxList('newPri',$AuthAssignmentArray,$allPrivilegesArray);?>

    <div class="form-group">
        <?= Html::submitButton('设置') ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>