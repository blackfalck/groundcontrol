<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'view'
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            ]
        ]);

        if(!empty($this->request->session()->read('locale'))){
            $locale = $this->request->session()->read('locale');
        }
        else{
           $locale = 'en_US';
           $session = $this->request->session();
           $session->write('locale', $locale);
        }
        
        I18n::locale($locale);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
    
    public function isAuthorized($user)
    {         
        // Admin can access every action
        if (isset($user['role']) && $user['role']['alias'] === 'admin') {
            return true;
        }
        
        // Default deny
        return false;
    }
}
