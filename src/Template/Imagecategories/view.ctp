<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagecategory'), ['action' => 'edit', $imagecategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagecategory'), ['action' => 'delete', $imagecategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagecategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagecategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagecategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagecategories view large-9 medium-8 columns content">
    <h3><?= h($imagecategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($imagecategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($imagecategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Alias') ?></th>
            <td><?= h($imagecategory->alias) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $this->Number->format($imagecategory->active) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($imagecategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($imagecategory->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($imagecategory->deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Images') ?></h4>
        <?php if (!empty($imagecategory->images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Imagecategory Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Alt') ?></th>
                <th><?= __('Filename') ?></th>
                <th><?= __('Filenamehash') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($imagecategory->images as $images): ?>
            <tr>
                <td><?= h($images->id) ?></td>
                <td><?= h($images->imagecategory_id) ?></td>
                <td><?= h($images->name) ?></td>
                <td><?= h($images->alt) ?></td>
                <td><?= h($images->filename) ?></td>
                <td><?= h($images->filenamehash) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
