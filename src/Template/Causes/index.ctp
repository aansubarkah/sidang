<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cause'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causes index large-9 medium-8 columns content">
    <h3><?= __('Causes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dateregister') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datepmh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datephs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dateppp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($causes as $cause): ?>
            <tr>
                <td><?= $this->Number->format($cause->id) ?></td>
                <td><?= $cause->has('category') ? $this->Html->link($cause->category->name, ['controller' => 'Categories', 'action' => 'view', $cause->category->id]) : '' ?></td>
                <td><?= h($cause->number) ?></td>
                <td><?= h($cause->dateregister) ?></td>
                <td><?= h($cause->datepmh) ?></td>
                <td><?= h($cause->datephs) ?></td>
                <td><?= h($cause->dateppp) ?></td>
                <td><?= h($cause->created) ?></td>
                <td><?= h($cause->modified) ?></td>
                <td><?= h($cause->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cause->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cause->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cause->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cause->id)]) ?>
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
