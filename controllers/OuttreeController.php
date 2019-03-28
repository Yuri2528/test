<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.03.2019
 * Time: 18:06
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Outtree;

class OuttreeController extends Controller

{
    public function actionIndex()
    {
        $model = new Outtree();
       $result = $model->tree(2, 0);
        return $this->render('index', [
            'result' => $result

        ]);
    }
}