<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Shelfs Controller
 *
 * @property \App\Model\Table\ShelfsTable $Shelfs *
 * @method \App\Model\Entity\Shelf[] paginate($object = null, array $settings = [])
 */
class ShelfsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $shelfs = $this->paginate($this->Shelfs);

        $this->set(compact('shelfs'));
        $this->set('_serialize', ['shelfs']);
    }

    /**
     * View method
     *
     * @param string|null $id Shelf id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shelfTable = TableRegistry::get('Shelfs');
        $query = $shelfTable->find('all')
                ->where(['user_id'] == $this->Auth->user('id'));
        
        $shelfId = $query->first();
        $shelf = $this->Shelfs->get($shelfId->id, [
            'contain' => ['Users', 'Books']
        ]);

        $this->set('shelf', $shelf);
        $this->set('_serialize', ['shelf']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shelf = $this->Shelfs->newEntity();
        if ($this->request->is('post')) {
            $shelf = $this->Shelfs->patchEntity($shelf, $this->request->getData());
            if ($this->Shelfs->save($shelf)) {
                $this->Flash->success(__('The shelf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shelf could not be saved. Please, try again.'));
        }
        $users = $this->Shelfs->Users->find('list', ['limit' => 200]);
        $this->set(compact('shelf', 'users'));
        $this->set('_serialize', ['shelf']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shelf id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shelf = $this->Shelfs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shelf = $this->Shelfs->patchEntity($shelf, $this->request->getData());
            if ($this->Shelfs->save($shelf)) {
                $this->Flash->success(__('The shelf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shelf could not be saved. Please, try again.'));
        }
        $users = $this->Shelfs->Users->find('list', ['limit' => 200]);
        $this->set(compact('shelf', 'users'));
        $this->set('_serialize', ['shelf']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shelf id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shelf = $this->Shelfs->get($id);
        if ($this->Shelfs->delete($shelf)) {
            $this->Flash->success(__('The shelf has been deleted.'));
        } else {
            $this->Flash->error(__('The shelf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
