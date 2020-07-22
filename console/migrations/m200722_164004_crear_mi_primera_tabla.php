<?php

class m200722_164004_crear_mi_primera_tabla extends \yii\db\Migration
{

    /**
     * @inheritdoc
     */
    public function up()
    {
       
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
       

        $this->createTable('personas', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(40)->notNull(),            
            'ap' => $this->string(60)->notNull(),
            
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('personas');
    }
}