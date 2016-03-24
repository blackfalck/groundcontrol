<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectsImages Controller
 *
 * @property \App\Model\Table\ProjectsImagesTable $ProjectsImages
 */
class ProjectsImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Images']
        ];
        $projectsImages = $this->paginate($this->ProjectsImages);

        $this->set(compact('projectsImages'));
        $this->set('_serialize', ['projectsImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Projects Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectsImage = $this->ProjectsImages->get($id, [
            'contain' => ['Projects', 'Images']
        ]);

        $this->set('projectsImage', $projectsImage);
        $this->set('_serialize', ['projectsImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectsImage = $this->ProjectsImages->newEntity();
        if ($this->request->is('post')) {
            $projectsImage = $this->ProjectsImages->patchEntity($projectsImage, $this->request->data);
            if ($this->ProjectsImages->save($projectsImage)) {
                $this->Flash->success(__('The projects image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The projects image could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectsImages->Projects->find('list', ['limit' => 200]);
        $images = $this->ProjectsImages->Images->find('list', ['limit' => 200]);
        $this->set(compact('projectsImage', 'projects', 'images'));
        $this->set('_serialize', ['projectsImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Projects Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectsImage = $this->ProjectsImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectsImage = $this->ProjectsImages->patchEntity($projectsImage, $this->request->data);
            if ($this->ProjectsImages->save($projectsImage)) {
                $this->Flash->success(__('The projects image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The projects image could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectsImages->Projects->find('list', ['limit' => 200]);
        $images = $this->ProjectsImages->Images->find('list', ['limit' => 200]);
        $this->set(compact('projectsImage', 'projects', 'images'));
        $this->set('_serialize', ['projectsImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Projects Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectsImage = $this->ProjectsImages->get($id);
        if ($this->ProjectsImages->delete($projectsImage)) {
            $this->Flash->success(__('The projects image has been deleted.'));
        } else {
            $this->Flash->error(__('The projects image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
