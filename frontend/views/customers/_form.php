<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'addr')->textArea(['maxlength' => true]) ?>
        </div>
        
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'c')->textInput() ?>
         </div>
        
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'a')->textInput() ?>
        </div>
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 't')->textInput() ?>
        </div>
       
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'p')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
        </div>
        
<!--         <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'department_id')->
            dropDownList(\yii\helpers\ArrayHelper::map(frontend\models\Departments::find()->all(), 'id','name'),
                    ['prompt'=>'<--เลือกแผนก-->']
                    ) ?>
             
        </div>
        
  -->      
  
  
        
         <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'interest')->textInput(['maxlength' => true]) ?>
        </div>
        
         <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        
         <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'pic')->textInput(['maxlength' => true]) ?>
        </div>
        
         <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'createdate')->textInput() ?>
        </div>
    </div>
    


    

    

    

    

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
