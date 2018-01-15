<?php

use yii\db\Migration;

/**
 * Handles adding position to table `user`.
 */
class m180115_020619_add_position_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'quotes', $this->string(255)->after('username'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'quotes');
    }
}
