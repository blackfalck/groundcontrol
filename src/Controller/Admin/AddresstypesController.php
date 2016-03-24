<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Addresstypes Controller
 *
 * @property \App\Model\Table\AddresstypesTable $Addresstypes
 */
class AddresstypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $addresstypes = $this->paginate($this->Addresstypes);

        $this->set(compact('addresstypes'));
        $this->set('_serialize', ['addresstypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Addresstype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addresstype = $this->Addresstypes->get($id, [
            'contain' => ['Addresses']
        ]);

        $this->set('addresstype', $addresstype);
        $this->set('_serialize', ['addresstype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addresstype = $this->Addresstypes->newEntity();
        if ($this->request->is('post')) {
            $addresstype = $this->Addresstypes->patchEntity($addresstype, $this->request->data);
            if ($this->Addresstypes->save($addresstype)) {
                $this->Flash->success(__('The addresstype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The addresstype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('addresstype'));
        $this->set('_serialize', ['addresstype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Addresstype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addresstype = $this->Addresstypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addresstype = $this->Addresstypes->patchEntity($addresstype, $this->request->data);
            if ($this->Addresstypes->save($addresstype)) {
                $this->Flash->success(__('The addresstype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The addresstype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('addresstype'));
        $this->set('_serialize', ['addresstype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Addresstype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addresstype = $this->Addresstypes->get($id);
        if ($this->Addresstypes->delete($addresstype)) {
            $this->Flash->success(__('The addresstype has been deleted.'));
        } else {
            $this->Flash->error(__('The addresstype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
