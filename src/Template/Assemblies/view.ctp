<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assembly'), ['action' => 'edit', $assembly->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assembly'), ['action' => 'delete', $assembly->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assembly->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assembly'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assemblies view large-9 medium-8 columns content">
    <h3><?= h($assembly->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($assembly->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assembly->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assembly->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assembly->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $assembly->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Meetings') ?></h4>
        <?php if (!empty($assembly->meetings)): ?>
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
            <?php foreach ($assembly->meetings as $meetings): ?>
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
        <h4><?= __('Related Causes') ?></h4>
        <?php if (!empty($assembly->causes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Dateregister') ?></th>
                <th scope="col"><?= __('Datepmh') ?></th>
                <th scope="col"><?= __('Datephs') ?></th>
                <th scope="col"><?= __('Dateppp') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($assembly->causes as $causes): ?>
            <tr>
                <td><?= h($causes->id) ?></td>
                <td><?= h($causes->category_id) ?></td>
                <td><?= h($causes->number) ?></td>
                <td><?= h($causes->dateregister) ?></td>
                <td><?= h($causes->datepmh) ?></td>
                <td><?= h($causes->datephs) ?></td>
                <td><?= h($causes->dateppp) ?></td>
                <td><?= h($causes->created) ?></td>
                <td><?= h($causes->modified) ?></td>
                <td><?= h($causes->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Causes', 'action' => 'view', $causes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Causes', 'action' => 'edit', $causes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Causes', 'action' => 'delete', $causes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($assembly->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Fullname') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($assembly->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->fullname) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->number) ?></td>
                <td><?= h($users->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
