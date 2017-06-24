<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Departments */

$this->title = 'เพิ่มข้อมูลแผนก';
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="panel panel-primary">
        <div class="panel-heading"> </div>
        <div class="panel-body">
              <?= $this->render('_form', [
        'model' => $model,
    ]) ?>  
            
        </div>
    
    </div>


</div>
