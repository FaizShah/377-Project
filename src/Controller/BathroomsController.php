<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bathrooms Controller
 *
 * @property \App\Model\Table\BathroomsTable $Bathrooms
 *
 * @method \App\Model\Entity\Bathroom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BathroomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Buildings']
        ];
        $bathrooms = $this->paginate($this->Bathrooms);

        $this->set(compact('bathrooms'));
    }

    /**
     * View method
     *
     * @param string|null $id Bathroom id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bathroom = $this->Bathrooms->get($id, [
            'contain' => ['Buildings']
        ]);

        $this->set('bathroom', $bathroom);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bathroom = $this->Bathrooms->newEntity();
        if ($this->request->is('post')) {
            $bathroom = $this->Bathrooms->patchEntity($bathroom, $this->request->getData());
            if ($this->Bathrooms->save($bathroom)) {
                $this->Flash->success(__('The bathroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bathroom could not be saved. Please, try again.'));
        }
        $buildings = $this->Bathrooms->Buildings->find('list', ['limit' => 200]);
        $this->set(compact('bathroom', 'buildings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bathroom id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bathroom = $this->Bathrooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bathroom = $this->Bathrooms->patchEntity($bathroom, $this->request->getData());
            if ($this->Bathrooms->save($bathroom)) {
                $this->Flash->success(__('The bathroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bathroom could not be saved. Please, try again.'));
        }
        $buildings = $this->Bathrooms->Buildings->find('list', ['limit' => 200]);
        $this->set(compact('bathroom', 'buildings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bathroom id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bathroom = $this->Bathrooms->get($id);
        if ($this->Bathrooms->delete($bathroom)) {
            $this->Flash->success(__('The bathroom has been deleted.'));
        } else {
            $this->Flash->error(__('The bathroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
