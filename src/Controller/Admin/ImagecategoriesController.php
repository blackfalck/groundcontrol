<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagecategories Controller
 *
 * @property \App\Model\Table\ImagecategoriesTable $Imagecategories
 */
class ImagecategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $imagecategories = $this->paginate($this->Imagecategories);

        $this->set(compact('imagecategories'));
        $this->set('_serialize', ['imagecategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagecategory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagecategory = $this->Imagecategories->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('imagecategory', $imagecategory);
        $this->set('_serialize', ['imagecategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagecategory = $this->Imagecategories->newEntity();
        if ($this->request->is('post')) {
            $imagecategory = $this->Imagecategories->patchEntity($imagecategory, $this->request->data);
            if ($this->Imagecategories->save($imagecategory)) {
                $this->Flash->success(__('The imagecategory has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The imagecategory could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('imagecategory'));
        $this->set('_serialize', ['imagecategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagecategory id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagecategory = $this->Imagecategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagecategory = $this->Imagecategories->patchEntity($imagecategory, $this->request->data);
            if ($this->Imagecategories->save($imagecategory)) {
                $this->Flash->success(__('The imagecategory has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The imagecategory could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('imagecategory'));
        $this->set('_serialize', ['imagecategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagecategory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagecategory = $this->Imagecategories->get($id);
        if ($this->Imagecategories->delete($imagecategory)) {
            $this->Flash->success(__('The imagecategory has been deleted.'));
        } else {
            $this->Flash->error(__('The imagecategory could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
