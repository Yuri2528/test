<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.03.2019
 * Time: 15:48
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Html;
class Outtree extends Model
{

    public $id = [];
    public $title = [];
    public $parent_id =[];
    public $level;

    public function tree($parentId, $level) {

        $this->parent_id = $parentId;
        $this->level = $level;
        $this->level++;
        $this->id = range(1,1000);
        $this->title = range(1, 1000);
        if ($this->title >= 100 && $this->title <= 1000) {
           $this->title = array_rand($this->title);
        }

        $this->parent_id = range(2, 250, 8);

        $arr = [];
        $c = count($this->title);
       echo '<ul>';
        for($this->id = 0; $this->id < $c; $this->id++) {

        $arr[] = $this->title[$this->id];
       echo '<li>';
        echo Html::a($this->title, ['tree/view', 'id' => $this->id]);
         echo '</li>';
         $this->tree($arr, $this->level);
         $this->level--;
        }
        echo '</ul>';


      }
    }



