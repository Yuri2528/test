<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tree".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 */
class Tree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $verifyCode;

    public static function tableName()
    {
        return 'tree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            ['verifycode', 'required'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
        ];
    }

    function showTree($parent_id) {

           return $this->find()
            ->where(['parent_id' => $parent_id])
            ->asArray()
            ->orderBy('name')
            ->all();

          // foreach($tr as $t) {

          //   $this->showTree($t['id']);

          //  }


          }



   }
