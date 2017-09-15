<?php
use Migrations\AbstractMigration;

class CreateReservations extends AbstractMigration
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
        $table = $this->table('reservations');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        //      ->addForeignKey('user_id', 'users', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'));
        $table->addColumn('book_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        //      ->addForeignKey('book_id', 'books', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'));
        $table->addColumn('reserved_on', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('reserved_until', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('borrowed_on', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('borrowed_until', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('returned_in', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
