<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assemblies User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assembliesUsers index large-9 medium-8 columns content">
    <h3><?= __('Assemblies Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assembly_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assembliesUsers as $assembliesUser): ?>
            <tr>
                <td><?= $this->Number->format($assembliesUser->id) ?></td>
                <td><?= $assembliesUser->has('assembly') ? $this->Html->link($assembliesUser->assembly->name, ['controller' => 'Assemblies', 'action' => 'view', $assembliesUser->assembly->id]) : '' ?></td>
                <td><?= $assembliesUser->has('user') ? $this->Html->link($assembliesUser->user->id, ['controller' => 'Users', 'action' => 'view', $assembliesUser->user->id]) : '' ?></td>
                <td><?= h($assembliesUser->created) ?></td>
                <td><?= h($assembliesUser->modified) ?></td>
                <td><?= h($assembliesUser->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assembliesUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assembliesUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assembliesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assembliesUser->id)]) ?>
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
