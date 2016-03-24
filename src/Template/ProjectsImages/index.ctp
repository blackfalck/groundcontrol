<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projects Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projectsImages index large-9 medium-8 columns content">
    <h3><?= __('Projects Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('project_id') ?></th>
                <th><?= $this->Paginator->sort('image_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectsImages as $projectsImage): ?>
            <tr>
                <td><?= h($projectsImage->id) ?></td>
                <td><?= $projectsImage->has('project') ? $this->Html->link($projectsImage->project->title, ['controller' => 'Projects', 'action' => 'view', $projectsImage->project->id]) : '' ?></td>
                <td><?= $projectsImage->has('image') ? $this->Html->link($projectsImage->image->name, ['controller' => 'Images', 'action' => 'view', $projectsImage->image->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projectsImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectsImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectsImage->id)]) ?>
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
