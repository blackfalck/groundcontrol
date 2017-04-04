
<?= $this->Form->create(null, [
                  'url' => [
                      'controller' => 'Users',
                      'action' => 'login',
                      ],
                  'class' => 'intro-form',
                  'id' => 'register_form',
                  'role'=>'form'
              ]) ?>
              
              <h3 class="text-center"> <?= __('login') ?> </h3>
              
              <div class="form-group">
              <?= $this->Form->input( 'mail', 
                      [
                          'type' => 'text',
                          'class' => 'form-control',
                          'placeholder' => __('email'),
                          'required' => 'required'
                          
                          ]); 
                ?>
                  </div>
              <div class="form-group">
              <?= $this->Form->input( 'password', 
                      [
                          'type' => 'password',
                          'class' => 'form-control',
                          'placeholder' => __('password'),
                          'required' => 'required'
                          
                          ]); 
                ?>
              </div>
               <div class="form-group text-center">
               <?= $this->Form->button( __('sign_in'),[
                   'class'=> 'btn btn-custom'
               ]); ?> 
                   
              
               </div>
              <?= $this->Form->end() ?>