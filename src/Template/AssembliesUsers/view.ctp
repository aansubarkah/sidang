<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assemblies User'), ['action' => 'edit', $assembliesUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assemblies User'), ['action' => 'delete', $assembliesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assembliesUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assemblies User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assembliesUsers view large-9 medium-8 columns content">
    <h3><?= h($assembliesUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Assembly') ?></th>
            <td><?= $assembliesUser->has('assembly') ? $this->Html->link($assembliesUser->assembly->name, ['controller' => 'Assemblies', 'action' => 'view', $assembliesUser->assembly->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $assembliesUser->has('user') ? $this->Html->link($assembliesUser->user->id, ['controller' => 'Users', 'action' => 'view', $assembliesUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assembliesUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assembliesUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assembliesUser->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $assembliesUser->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
