<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 28.03.2019
 * Time: 9:28
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Treetwo;
class TreetwoController extends Controller
{
  public function actionIndex() {

      $model = new Treetwo();

      return $this->render('index', [
          'model' => $model,
      ]);
  }
}