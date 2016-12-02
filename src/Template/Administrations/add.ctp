<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Administrations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrations form large-9 medium-8 columns content">
    <?= $this->Form->create($administration) ?>
    <fieldset>
        <legend><?= __('Add Administration') ?></legend>
        <?php
            echo $this->Form->input('decision_id', ['options' => $decisions]);
            echo $this->Form->input('date');
            echo $this->Form->input('datepbt', ['empty' => true]);
            echo $this->Form->input('datebht', ['empty' => true]);
            echo $this->Form->input('datephs', ['empty' => true]);
            echo $this->Form->input('dateikrar', ['empty' => true]);
            echo $this->Form->input('datesetor', ['empty' => true]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
