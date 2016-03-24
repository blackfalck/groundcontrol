<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Addresstype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addresstypes index large-9 medium-8 columns content">
    <h3><?= __('Addresstypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('alias') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('deleted') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addresstypes as $addresstype): ?>
            <tr>
                <td><?= h($addresstype->id) ?></td>
                <td><?= h($addresstype->name) ?></td>
                <td><?= h($addresstype->alias) ?></td>
                <td><?= $this->Number->format($addresstype->active) ?></td>
                <td><?= h($addresstype->created) ?></td>
                <td><?= h($addresstype->modified) ?></td>
                <td><?= h($addresstype->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addresstype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addresstype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addresstype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresstype->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
