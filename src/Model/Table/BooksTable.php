<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @property \App\Model\Table\ShelvesTable|\Cake\ORM\Association\BelongsTo $Shelves
 * @property \App\Model\Table\ReservationsTable|\Cake\ORM\Association\HasMany $Reservations
 * @property \App\Model\Table\DisciplinesTable|\Cake\ORM\Association\BelongsToMany $Disciplines
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */class BooksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('books');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Shelfs', [
           'foreignKey' => 'shelf_id',
            'joinType' => 'INNER'
        ]);
//        $this->hasMany('Reservations', [
//            'foreignKey' => 'book_id'
//        ]);
        $this->belongsToMany('Disciplines', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'discipline_id',
            'joinTable' => 'books_disciplines'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->integer('sumario')            ->allowEmpty('sumario');
        $validator
            ->scalar('title')            ->requirePresence('title', 'create')            ->notEmpty('title');
        $validator
            ->scalar('author')            ->requirePresence('author', 'create')            ->notEmpty('author');
        $validator
            ->scalar('editor')            ->requirePresence('editor', 'create')            ->notEmpty('editor');
        $validator
            ->integer('pages')            ->requirePresence('pages', 'create')            ->notEmpty('pages');
        $validator
            ->integer('quantity')            ->requirePresence('quantity', 'create')            ->notEmpty('quantity');
        $validator
            ->scalar('classification')            ->allowEmpty('classification');
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
//        $rules->add($rules->existsIn(['shelf_id'], 'Shelves'));

        return $rules;
    }
}
