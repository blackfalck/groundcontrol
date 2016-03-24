<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagecategory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagecategories index large-9 medium-8 columns content">
    <h3><?= __('Imagecategories') ?></h3>
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
            <?php foreach ($imagecategories as $imagecategory): ?>
            <tr>
                <td><?= h($imagecategory->id) ?></td>
                <td><?= h($imagecategory->name) ?></td>
                <td><?= h($imagecategory->alias) ?></td>
                <td><?= $this->Number->format($imagecategory->active) ?></td>
                <td><?= h($imagecategory->created) ?></td>
                <td><?= h($imagecategory->modified) ?></td>
                <td><?= h($imagecategory->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagecategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagecategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagecategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagecategory->id)]) ?>
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
