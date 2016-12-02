<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cause'), ['action' => 'edit', $cause->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cause'), ['action' => 'delete', $cause->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cause->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Causes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cause'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="causes view large-9 medium-8 columns content">
    <h3><?= h($cause->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $cause->has('category') ? $this->Html->link($cause->category->name, ['controller' => 'Categories', 'action' => 'view', $cause->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($cause->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cause->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateregister') ?></th>
            <td><?= h($cause->dateregister) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datepmh') ?></th>
            <td><?= h($cause->datepmh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datephs') ?></th>
            <td><?= h($cause->datephs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateppp') ?></th>
            <td><?= h($cause->dateppp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cause->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cause->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $cause->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Meetings') ?></h4>
        <?php if (!empty($cause->meetings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Assembly Id') ?></th>
                <th scope="col"><?= __('Cause Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Datecancel') ?></th>
                <th scope="col"><?= __('Causingcancel') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cause->meetings as $meetings): ?>
            <tr>
                <td><?= h($meetings->id) ?></td>
                <td><?= h($meetings->assembly_id) ?></td>
                <td><?= h($meetings->cause_id) ?></td>
                <td><?= h($meetings->date) ?></td>
                <td><?= h($meetings->datecancel) ?></td>
                <td><?= h($meetings->causingcancel) ?></td>
                <td><?= h($meetings->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Meetings', 'action' => 'view', $meetings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Meetings', 'action' => 'edit', $meetings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Meetings', 'action' => 'delete', $meetings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meetings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Assemblies') ?></h4>
        <?php if (!empty($cause->assemblies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cause->assemblies as $assemblies): ?>
            <tr>
                <td><?= h($assemblies->id) ?></td>
                <td><?= h($assemblies->name) ?></td>
                <td><?= h($assemblies->created) ?></td>
                <td><?= h($assemblies->modified) ?></td>
                <td><?= h($assemblies->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Assemblies', 'action' => 'view', $assemblies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Assemblies', 'action' => 'edit', $assemblies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assemblies', 'action' => 'delete', $assemblies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assemblies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Clients') ?></h4>
        <?php if (!empty($cause->clients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Fullname') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cause->clients as $clients): ?>
            <tr>
                <td><?= h($clients->id) ?></td>
                <td><?= h($clients->number) ?></td>
                <td><?= h($clients->fullname) ?></td>
                <td><?= h($clients->created) ?></td>
                <td><?= h($clients->modified) ?></td>
                <td><?= h($clients->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
