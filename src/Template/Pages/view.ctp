<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Page'), ['action' => 'edit', $page->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Pages'), ['controller' => 'Pages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Page'), ['controller' => 'Pages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pages view large-9 medium-8 columns content">
    <h3><?= h($page->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($page->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Parent Page') ?></th>
            <td><?= $page->has('parent_page') ? $this->Html->link($page->parent_page->title, ['controller' => 'Pages', 'action' => 'view', $page->parent_page->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($page->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Alias') ?></th>
            <td><?= h($page->alias) ?></td>
        </tr>
        <tr>
            <th><?= __('Subtitle') ?></th>
            <td><?= h($page->subtitle) ?></td>
        </tr>
        <tr>
            <th><?= __('Lft') ?></th>
            <td><?= $this->Number->format($page->lft) ?></td>
        </tr>
        <tr>
            <th><?= __('Rght') ?></th>
            <td><?= $this->Number->format($page->rght) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $this->Number->format($page->active) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($page->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($page->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($page->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Metadescription') ?></h4>
        <?= $this->Text->autoParagraph(h($page->metadescription)); ?>
    </div>
    <div class="row">
        <h4><?= __('Metakey') ?></h4>
        <?= $this->Text->autoParagraph(h($page->metakey)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($page->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pages') ?></h4>
        <?php if (!empty($page->child_pages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Alias') ?></th>
                <th><?= __('Subtitle') ?></th>
                <th><?= __('Metadescription') ?></th>
                <th><?= __('Metakey') ?></th>
                <th><?= __('Content') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deleted') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($page->child_pages as $childPages): ?>
            <tr>
                <td><?= h($childPages->id) ?></td>
                <td><?= h($childPages->parent_id) ?></td>
                <td><?= h($childPages->title) ?></td>
                <td><?= h($childPages->alias) ?></td>
                <td><?= h($childPages->subtitle) ?></td>
                <td><?= h($childPages->metadescription) ?></td>
                <td><?= h($childPages->metakey) ?></td>
                <td><?= h($childPages->content) ?></td>
                <td><?= h($childPages->lft) ?></td>
                <td><?= h($childPages->rght) ?></td>
                <td><?= h($childPages->active) ?></td>
                <td><?= h($childPages->created) ?></td>
                <td><?= h($childPages->modified) ?></td>
                <td><?= h($childPages->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pages', 'action' => 'view', $childPages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pages', 'action' => 'edit', $childPages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pages', 'action' => 'delete', $childPages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childPages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
