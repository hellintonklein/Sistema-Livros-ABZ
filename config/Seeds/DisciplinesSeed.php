<?php
use Migrations\AbstractSeed;

/**
 * Disciplines seed.
 */
class DisciplinesSeed extends AbstractSeed
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
          ['disciplina'=>'TSI31B','sigla'=>'TSI31B'],
          ['disciplina'=>'TSI31C','sigla'=>'TSI31C'],
          ['disciplina'=>'TSI31D','sigla'=>'TSI31D'],
          ['disciplina'=>'TSI31E','sigla'=>'TSI31E'],
          ['disciplina'=>'TSI32B','sigla'=>'TSI32B'],
          ['disciplina'=>'TSI32C','sigla'=>'TSI32C'],
          ['disciplina'=>'TSI32D','sigla'=>'TSI32D'],
          ['disciplina'=>'TSI32E','sigla'=>'TSI32E'],
          ['disciplina'=>'TSI32F','sigla'=>'TSI32F'],
          ['disciplina'=>'TSI33A','sigla'=>'TSI33A'], 
          ['disciplina'=>'TSI33B','sigla'=>'TSI33B'],
          ['disciplina'=>'TSI33C','sigla'=>'TSI33C'],
          ['disciplina'=>'TSI33F','sigla'=>'TSI33F'],
          ['disciplina'=>'TSI34A','sigla'=>'TSI34A'],
          ['disciplina'=>'TSI34B','sigla'=>'TSI34B'],
          ['disciplina'=>'TSI34C','sigla'=>'TSI34C'],
          ['disciplina'=>'TSI34D','sigla'=>'TSI34D'],
          ['disciplina'=>'TSI35A','sigla'=>'TSI35A'],
          ['disciplina'=>'TSI35B','sigla'=>'TSI35B'],
          ['disciplina'=>'TSI35E','sigla'=>'TSI35E'],
          ['disciplina'=>'TSI35F','sigla'=>'TSI35F'],
          ['disciplina'=>'TSI36B','sigla'=>'TSI36B'],
          ['disciplina'=>'TSI36C','sigla'=>'TSI36C'],
        ];

        $table = $this->table('disciplines');
        $table->insert($data)->save();
    }
}
