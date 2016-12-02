<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assemblies Cause'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assembliesCauses index large-9 medium-8 columns content">
    <h3><?= __('Assemblies Causes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assembly_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cause_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assembliesCauses as $assembliesCause): ?>
            <tr>
                <td><?= $this->Number->format($assembliesCause->id) ?></td>
                <td><?= $assembliesCause->has('assembly') ? $this->Html->link($assembliesCause->assembly->name, ['controller' => 'Assemblies', 'action' => 'view', $assembliesCause->assembly->id]) : '' ?></td>
                <td><?= $assembliesCause->has('cause') ? $this->Html->link($assembliesCause->cause->id, ['controller' => 'Causes', 'action' => 'view', $assembliesCause->cause->id]) : '' ?></td>
                <td><?= h($assembliesCause->created) ?></td>
                <td><?= h($assembliesCause->modified) ?></td>
                <td><?= h($assembliesCause->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assembliesCause->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assembliesCause->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assembliesCause->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assembliesCause->id)]) ?>
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
