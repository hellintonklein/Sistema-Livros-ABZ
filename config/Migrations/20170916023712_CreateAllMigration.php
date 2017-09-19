<?php

use Migrations\AbstractMigration;

class CreateAllMigration extends AbstractMigration {

    public function up() {

        $this->table('books')
                ->addColumn('shelf_id', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('sumario', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => true,
                ])
                ->addColumn('title', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('author', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('editor', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('pages', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('quantity', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('classification', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => true,
                ])
                ->addColumn('created', 'datetime', [
                    'default' => 'CURRENT_TIMESTAMP',
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('modified', 'datetime', [
                    'default' => 'CURRENT_TIMESTAMP',
                    'limit' => null,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'shelf_id',
                        ]
                )
                ->create();

        $this->table('books_disciplines', ['id' => false, 'primary_key' => ['book_id', 'discipline_id']])
                ->addColumn('book_id', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('discipline_id', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('tipo', 'string', [
                    'default' => null,
                    'limit' => 45,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'book_id',
                        ]
                )
                ->addIndex(
                        [
                            'discipline_id',
                        ]
                )
                ->create();

        $this->table('disciplines')
                ->addColumn('disciplina', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('sigla', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->create();

        $this->table('reservations')
                ->addColumn('user_id', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('book_id', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addColumn('reserved_on', 'date', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('reserved_until', 'date', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('borrowed_on', 'date', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('borrowed_until', 'date', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('returned_in', 'date', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addIndex(
                        [
                            'book_id',
                        ]
                )
                ->addIndex(
                        [
                            'user_id',
                        ]
                )
                ->create();

        $this->table('shelfs')
                ->addColumn('user_id', 'integer', [
                    'default' => null,
                    'limit' => 11,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'user_id',
                        ]
                )
                ->create();

        $this->table('users')
                ->addColumn('username', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('password', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('name', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('email', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('phone', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => true,
                ])
                ->addColumn('role', 'string', [
                    'default' => 'N',
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('created', 'datetime', [
                    'default' => 'CURRENT_TIMESTAMP',
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('modified', 'datetime', [
                    'default' => 'CURRENT_TIMESTAMP',
                    'limit' => null,
                    'null' => false,
                ])
                ->create();

        $this->table('books')->addForeignKey(
                        'shelf_id', 'shelfs', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();

        $this->table('books_disciplines')->addForeignKey(
                        'book_id', 'books', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->addForeignKey(
                        'discipline_id', 'disciplines', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();

        $this->table('reservations')->addForeignKey(
                        'book_id', 'books', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->addForeignKey(
                        'user_id', 'users', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();

        $this->table('shelfs')->addForeignKey(
                        'user_id', 'users', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();
    }

    public function down() {
        $this->table('books')
                ->dropForeignKey(
                        'shelf_id');
        $this->table('books_disciplines')
                ->dropForeignKey(
                        'book_id')->dropForeignKey(
                'discipline_id');
        $this->table('reservations')
                ->dropForeignKey(
                        'book_id')->dropForeignKey(
                'user_id');
        $this->table('shelfs')
                ->dropForeignKey(
                        'user_id');
        $this->dropTable('books');
        $this->dropTable('books_disciplines');
        $this->dropTable('disciplines');
        $this->dropTable('reservations');
        $this->dropTable('shelfs');
        $this->dropTable('users');
    }

}
