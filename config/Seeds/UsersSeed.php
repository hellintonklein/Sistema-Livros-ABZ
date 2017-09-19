<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
          ['username'=>'admin@utfpr.tsi', 'password'=>'$2y$10$LLJ8QBUtq5hNZkkpbQJ46OGF4eTvhMGHROv/MkreZlBSaoIXHKRga',
          'name'=>'admin', 'email'=>'admin@admin.com', 'role'=>'A'],
          ['username'=>'admin', 'password'=>'$2y$10$6SWfdJ6ecdKNyLl7VI5Uq.VPZrsyFrJtkyfhmDw1j41N0yzI3zqGW',
          'name'=>'admin2', 'email'=>'admin2@admin.com', 'role'=>'A'],
          ['username'=>'utfpr', 'password'=>'$2y$10$tPDA8e1lwMgKLfSnqMHjNeu6lYed5Ad1bzI.kVZnM/XdOafD2eP9u',
          'name'=>'Biblioteca UTFPR', 'email'=>'biblioteca@utfpr.com', 'role'=>'A']
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
