<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projects Image'), ['action' => 'edit', $projectsImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projects Image'), ['action' => 'delete', $projectsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectsImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projects Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectsImages view large-9 medium-8 columns content">
    <h3><?= h($projectsImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($projectsImage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Project') ?></th>
            <td><?= $projectsImage->has('project') ? $this->Html->link($projectsImage->project->title, ['controller' => 'Projects', 'action' => 'view', $projectsImage->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= $projectsImage->has('image') ? $this->Html->link($projectsImage->image->name, ['controller' => 'Images', 'action' => 'view', $projectsImage->image->id]) : '' ?></td>
        </tr>
    </table>
</div>
