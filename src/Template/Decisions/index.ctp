<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administrations'), ['controller' => 'Administrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administration'), ['controller' => 'Administrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="decisions index large-9 medium-8 columns content">
    <h3><?= __('Decisions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meeting_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($decisions as $decision): ?>
            <tr>
                <td><?= $this->Number->format($decision->id) ?></td>
                <td><?= $decision->has('meeting') ? $this->Html->link($decision->meeting->id, ['controller' => 'Meetings', 'action' => 'view', $decision->meeting->id]) : '' ?></td>
                <td><?= h($decision->date) ?></td>
                <td><?= h($decision->number) ?></td>
                <td><?= h($decision->name) ?></td>
                <td><?= h($decision->created) ?></td>
                <td><?= h($decision->modified) ?></td>
                <td><?= h($decision->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $decision->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $decision->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $decision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decision->id)]) ?>
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
