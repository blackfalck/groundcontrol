<?= $this->Form->create($user) ?>
<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('mail', [
          'class' => 'form-control',
          'value' => $user->email,
          'label' => __('email')]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('email_error')?></div>
    </div> 
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('password', [
          'class' => 'form-control',
          'value' => "",
          'type' => 'password',
          'required' => false,
          'label' => __('password')
          ]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('password_error')?></div>
    </div> 
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4"> 
        <?= $this->Form->button(__('save'),[
            'class'=> 'btn btn-custom'
        ]); ?> 
    </div>
</div>

<?= $this->Form->end() ?>

