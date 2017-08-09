<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li <?= !empty($page_active) ? $page_active : "" ?>>
            <?= $this->Html->link("<i class=\"fa fa-fw fa-files-o\"></i> " . __('Pages'), ['controller' => 'pages', 'action' => 'index'], ['escape' => false]) ?>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#appearance"><i class="fa fa-fw fa-desktop"></i> <?= __('Appearance') ?> <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="appearance" class="collapse">
                <li>
                    <?= $this->Html->link(__('Theme'), ['controller' => 'settings', 'action' => 'index']) ?>
                </li>
            </ul>
        </li>
        <li <?= !empty($user_active) ? $user_active : "" ?>>
            <?= $this->Html->link("<i class=\"fa fa-fw fa-user\"></i> " . __('Users'), ['controller' => 'users', 'action' => 'index'], ['escape' => false]) ?>
        </li>
        <li <?= !empty($setting_active) ? $setting_active : "" ?>>
            <a href="javascript:;" data-toggle="collapse" data-target="#settings"><i class="fa fa-fw fa-wrench"></i> <?= __('Settings') ?> <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="settings" class="collapse">
                <li>
                    <?= $this->Html->link(__('General'), ['controller' => 'settings', 'action' => 'index']) ?>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
