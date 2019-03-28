<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.03.2019
 * Time: 20:22
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Tree;
class TreeController extends Controller
{
 public function actionIndex() {

     $model = new Tree();
     $tree = $model->showTree(0);


      return   $this->render('index', ['tree' => $tree,
                                      'model' => $model]);

    // return $this->render('index', ['tree' => $tree]);
 }

 public function actionView($id) {

     $id = intval($id);
     $item = Tree::findOne($id);


     return $this->render('view', [
         'item' => $item,
     ]);
 }
}