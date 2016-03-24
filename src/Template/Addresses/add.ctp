<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresstypes'), ['controller' => 'Addresstypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Addresstype'), ['controller' => 'Addresstypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addresses form large-9 medium-8 columns content">
    <?= $this->Form->create($address) ?>
    <fieldset>
        <legend><?= __('Add Address') ?></legend>
        <?php
            echo $this->Form->input('addresstype_id', ['options' => $addresstypes]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('middlename');
            echo $this->Form->input('lastname');
            echo $this->Form->input('address');
            echo $this->Form->input('addresssecond');
            echo $this->Form->input('zipcode');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
