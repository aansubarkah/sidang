<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Causes'), ['controller' => 'Causes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cause'), ['controller' => 'Causes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $category->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Causes') ?></h4>
        <?php if (!empty($category->causes)): ?>
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
            <?php foreach ($category->causes as $causes): ?>
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
</div>
