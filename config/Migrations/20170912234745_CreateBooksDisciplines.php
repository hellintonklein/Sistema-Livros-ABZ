<?php
use Migrations\AbstractMigration;

class CreateBooksDisciplines extends AbstractMigration
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
        $table = $this->table('books_disciplines');
        $table->addColumn('book_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        //      ->addForeignKey('book_id', 'books', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'));
        $table->addColumn('discipline_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        //      ->addForeignKey('discipline_id', 'disciplines', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'));;
        $table->create();
    }
}
