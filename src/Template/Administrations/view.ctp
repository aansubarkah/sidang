<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administration'), ['action' => 'edit', $administration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administration'), ['action' => 'delete', $administration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administration'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrations view large-9 medium-8 columns content">
    <h3><?= h($administration->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Decision') ?></th>
            <td><?= $administration->has('decision') ? $this->Html->link($administration->decision->name, ['controller' => 'Decisions', 'action' => 'view', $administration->decision->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($administration->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($administration->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datepbt') ?></th>
            <td><?= h($administration->datepbt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datebht') ?></th>
            <td><?= h($administration->datebht) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datephs') ?></th>
            <td><?= h($administration->datephs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateikrar') ?></th>
            <td><?= h($administration->dateikrar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datesetor') ?></th>
            <td><?= h($administration->datesetor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($administration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($administration->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $administration->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
