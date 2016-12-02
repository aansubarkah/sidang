<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidences Program'), ['action' => 'edit', $evidencesProgram->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidences Program'), ['action' => 'delete', $evidencesProgram->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesProgram->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences Programs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidences Program'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidencesPrograms view large-9 medium-8 columns content">
    <h3><?= h($evidencesProgram->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Evidence') ?></th>
            <td><?= $evidencesProgram->has('evidence') ? $this->Html->link($evidencesProgram->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesProgram->evidence->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Program') ?></th>
            <td><?= $evidencesProgram->has('program') ? $this->Html->link($evidencesProgram->program->id, ['controller' => 'Programs', 'action' => 'view', $evidencesProgram->program->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidencesProgram->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evidencesProgram->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evidencesProgram->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $evidencesProgram->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
