<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evidence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evidence->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidences form large-9 medium-8 columns content">
    <?= $this->Form->create($evidence) ?>
    <fieldset>
        <legend><?= __('Edit Evidence') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('active');
            echo $this->Form->input('decisions._ids', ['options' => $decisions]);
            echo $this->Form->input('programs._ids', ['options' => $programs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
