<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Causes Client'), ['action' => 'edit', $causesClient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Causes Client'), ['action' => 'delete', $causesClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causesClient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Causes Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Causes Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="causesClients view large-9 medium-8 columns content">
    <h3><?= h($causesClient->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cause') ?></th>
            <td><?= $causesClient->has('cause') ? $this->Html->link($causesClient->cause->id, ['controller' => 'Causes', 'action' => 'view', $causesClient->cause->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $causesClient->has('client') ? $this->Html->link($causesClient->client->id, ['controller' => 'Clients', 'action' => 'view', $causesClient->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($causesClient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($causesClient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($causesClient->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $causesClient->position ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $causesClient->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
