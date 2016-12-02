<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evidences Program'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesPrograms index large-9 medium-8 columns content">
    <h3><?= __('Evidences Programs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evidence_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('program_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evidencesPrograms as $evidencesProgram): ?>
            <tr>
                <td><?= $this->Number->format($evidencesProgram->id) ?></td>
                <td><?= $evidencesProgram->has('evidence') ? $this->Html->link($evidencesProgram->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesProgram->evidence->id]) : '' ?></td>
                <td><?= $evidencesProgram->has('program') ? $this->Html->link($evidencesProgram->program->id, ['controller' => 'Programs', 'action' => 'view', $evidencesProgram->program->id]) : '' ?></td>
                <td><?= h($evidencesProgram->created) ?></td>
                <td><?= h($evidencesProgram->modified) ?></td>
                <td><?= h($evidencesProgram->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evidencesProgram->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evidencesProgram->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evidencesProgram->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesProgram->id)]) ?>
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
