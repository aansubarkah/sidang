<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assemblies'), ['controller' => 'Assemblies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assembly'), ['controller' => 'Assemblies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($user->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assemblies') ?></h4>
        <?php if (!empty($user->assemblies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->assemblies as $assemblies): ?>
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
</div>
