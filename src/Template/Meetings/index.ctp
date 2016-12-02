<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="meetings index large-9 medium-8 columns content">
    <h3><?= __('Meetings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assembly_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cause_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datecancel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meetings as $meeting): ?>
            <tr>
                <td><?= $this->Number->format($meeting->id) ?></td>
                <td><?= $meeting->has('assembly') ? $this->Html->link($meeting->assembly->name, ['controller' => 'Assemblies', 'action' => 'view', $meeting->assembly->id]) : '' ?></td>
                <td><?= $meeting->has('cause') ? $this->Html->link($meeting->cause->id, ['controller' => 'Causes', 'action' => 'view', $meeting->cause->id]) : '' ?></td>
                <td><?= h($meeting->date) ?></td>
                <td><?= h($meeting->datecancel) ?></td>
                <td><?= h($meeting->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $meeting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meeting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meeting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meeting->id)]) ?>
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
