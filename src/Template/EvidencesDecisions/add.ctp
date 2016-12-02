<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Evidences Decisions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decisions'), ['controller' => 'Decisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision'), ['controller' => 'Decisions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesDecisions form large-9 medium-8 columns content">
    <?= $this->Form->create($evidencesDecision) ?>
    <fieldset>
        <legend><?= __('Add Evidences Decision') ?></legend>
        <?php
            echo $this->Form->input('evidence_id', ['options' => $evidences]);
            echo $this->Form->input('decision_id', ['options' => $decisions]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
