<?php
use Migrations\AbstractSeed;

/**
 * Shelfs seed.
 */
class ShelfsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['user_id'=>1],
          ['user_id'=>2],
          ['user_id'=>3]
        ];

        $table = $this->table('shelfs');
        $table->insert($data)->save();
    }
}
