<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidences Decision'), ['action' => 'edit', $evidencesDecision->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidences Decision'), ['action' => 'delete', $evidencesDecision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesDecision->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences Decisions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidences Decision'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidencesDecisions view large-9 medium-8 columns content">
    <h3><?= h($evidencesDecision->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Evidence') ?></th>
            <td><?= $evidencesDecision->has('evidence') ? $this->Html->link($evidencesDecision->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesDecision->evidence->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decision') ?></th>
            <td><?= $evidencesDecision->has('decision') ? $this->Html->link($evidencesDecision->decision->name, ['controller' => 'Decisions', 'action' => 'view', $evidencesDecision->decision->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidencesDecision->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evidencesDecision->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evidencesDecision->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $evidencesDecision->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
