<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.03.2019
 * Time: 20:30
 */
use app\models\Tree;
use app\controllers\TreeController;
use yii\helpers\Html;
use\yii\bootstrap\Modal;
use yii\captcha\Captcha;
use yii\bootstrap\ActiveForm;

    echo '<ul>';


    foreach($tree as $tr) {
        Modal::begin([
            'header' => '<h2>Hello world</h2>',
            'toggleButton' => ['label' => $tr['name']],
            'footer' => '',
        ]);

     $form = ActiveForm::begin(['id' => 'contact-form']);

    echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
]); ?>
<div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
</div>
   <?= '<li>' . Html::a($tr['name'], ['tree/view', 'id' => $tr['id']]) . '<li>';
    ActiveForm::end();
        Modal::end();
    }


    echo '</ul>';




