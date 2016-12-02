<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Causes Client'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causesClients index large-9 medium-8 columns content">
    <h3><?= __('Causes Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cause_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($causesClients as $causesClient): ?>
            <tr>
                <td><?= $this->Number->format($causesClient->id) ?></td>
                <td><?= $causesClient->has('cause') ? $this->Html->link($causesClient->cause->id, ['controller' => 'Causes', 'action' => 'view', $causesClient->cause->id]) : '' ?></td>
                <td><?= $causesClient->has('client') ? $this->Html->link($causesClient->client->id, ['controller' => 'Clients', 'action' => 'view', $causesClient->client->id]) : '' ?></td>
                <td><?= h($causesClient->position) ?></td>
                <td><?= h($causesClient->created) ?></td>
                <td><?= h($causesClient->modified) ?></td>
                <td><?= h($causesClient->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $causesClient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $causesClient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $causesClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causesClient->id)]) ?>
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
