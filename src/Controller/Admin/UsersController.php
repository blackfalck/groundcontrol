<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Validation\Validation;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function login()
    {
        
        if ($this->request->is('post')) {
            if (Validation::email($this->request->data['mail'])) {
                    $this->Auth->config('authenticate', [
                        'Form' => [
                            'fields' => ['username' => 'mail']
                        ]
                    ]);
                    $this->Auth->constructAuthenticate();
            }

                $user = $this->Auth->identify();
                
                $user = $this->Users->get($user['id'], [
                    'contain' => ['Roles']
                ])->toArray();
                
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
                
                $this->Flash->error(__('Invalid email or password, try again'));
        }
        
        $user = $this->Users->newEntity();
        
        $this->set('title', 'login');
        $this->set('subtitle', 'login_description');
        $this->set('page', 'login');
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function view()
    {
        echo 'admin';
        $id = $this->Auth->user('id');
        
        $user = $this->Users->get($id, [
            'contain' => ['Roles']
        ]);
        
        unset($user->password);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            
            $role = $this->Users->Roles->find('all')
                        ->where(['alias' => 'customer'])
                        ->first();
            
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->role_id = $role->id;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                
                return $this->redirect(['action' => 'login']);
            } 
            
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
            return $this->redirect($this->referer());
            
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}
