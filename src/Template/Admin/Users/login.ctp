<h1>
    <?php
    echo $var;
    ?>
</h1>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li>
            <?=
            $this->Html->link(__('New User'), ['_ext' => false, '_exte' => false, 'plugin' => true, 'prefix' => 'admin', 'controller' => 'users', 'action' => 'add']);
            die();
            ?>
        </li>
    </ul>
</nav>