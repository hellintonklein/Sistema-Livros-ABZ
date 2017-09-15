<?php
use Migrations\AbstractMigration;

class CreateShelfs extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('shelfs');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        //      ->addForeignKey('user_id', 'users', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'));
        $table->create();
    }
}
