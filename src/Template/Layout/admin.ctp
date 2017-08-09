<?php
$cakeDescription = 'SB Admin';
?>
<!DOCTYPE html>
<html>

    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon'); ?>
        <?php
        $css = array(
            'admin/bootstrap.min.css',
            'admin/sb-admin.css',
            'admin/morris.css',
            'font-awesome.min.css',
            'admin/texteditor/editor.css');
        ?>
        <?= $this->Html->css($css); ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

        <style>

            section {
                width: 81%;
                margin: auto;
                text-align: left;
            }
        </style>
    </head>

    <body>

        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?= $this->element('navigation') ?>
                <?= $this->element('sidebar'); ?>
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

    </body>
    <?php
    $script = array(
        'admin/jquery.js',
        'admin/bootstrap.min.js',
        'admin/raphael.min.js',
        'admin/morris.min.js',
        'admin/morris-data.js',
        'admin/texteditor/editor.js'
    );
    ?>
    <?=
    $this->Html->script($script);
    ?>
    <?= $this->fetch('script') ?>
    <script>
        $('#txtedit').Editor();
    </script>
</html>