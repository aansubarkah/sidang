<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assemblies Cause'), ['action' => 'edit', $assembliesCause->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assemblies Cause'), ['action' => 'delete', $assembliesCause->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assembliesCause->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies Causes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assemblies Cause'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assembliesCauses view large-9 medium-8 columns content">
    <h3><?= h($assembliesCause->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Assembly') ?></th>
            <td><?= $assembliesCause->has('assembly') ? $this->Html->link($assembliesCause->assembly->name, ['controller' => 'Assemblies', 'action' => 'view', $assembliesCause->assembly->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cause') ?></th>
            <td><?= $assembliesCause->has('cause') ? $this->Html->link($assembliesCause->cause->id, ['controller' => 'Causes', 'action' => 'view', $assembliesCause->cause->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assembliesCause->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assembliesCause->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assembliesCause->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $assembliesCause->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
