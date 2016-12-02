<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administration'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrations index large-9 medium-8 columns content">
    <h3><?= __('Administrations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decision_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datepbt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datebht') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datephs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dateikrar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datesetor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrations as $administration): ?>
            <tr>
                <td><?= $this->Number->format($administration->id) ?></td>
                <td><?= $administration->has('decision') ? $this->Html->link($administration->decision->name, ['controller' => 'Decisions', 'action' => 'view', $administration->decision->id]) : '' ?></td>
                <td><?= h($administration->date) ?></td>
                <td><?= h($administration->datepbt) ?></td>
                <td><?= h($administration->datebht) ?></td>
                <td><?= h($administration->datephs) ?></td>
                <td><?= h($administration->dateikrar) ?></td>
                <td><?= h($administration->datesetor) ?></td>
                <td><?= h($administration->created) ?></td>
                <td><?= h($administration->modified) ?></td>
                <td><?= h($administration->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administration->id)]) ?>
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
