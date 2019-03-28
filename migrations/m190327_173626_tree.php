<?php

use yii\db\Migration;

/**
 * Class m190327_173626_tree
 */
class m190327_173626_tree extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tree}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'parent_id' => $this->integer(11),


        ], $tableOptions);

        $this->createIndex('idx-parent_id', '{{%tree}}', 'parent_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tree}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190327_173626_tree cannot be reverted.\n";

        return false;
    }
    */
}
