<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $addresstype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addresstype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Addresstypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addresstypes form large-9 medium-8 columns content">
    <?= $this->Form->create($addresstype) ?>
    <fieldset>
        <legend><?= __('Edit Addresstype') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('alias');
            echo $this->Form->input('active');
            echo $this->Form->input('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
