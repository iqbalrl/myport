<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Iqbal Rahmat Liyadi</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Dealer Maju Bersama</li>',
                    ['label' => '<i class="fa fa-truck"></i><span>Propinsi</span>', 'url' => ['/propinsi']],
                    ['label' => '<i class="fa fa-truck"></i><span>Kokab</span>', 'url' => ['/kokab']],
                    ['label' => '<i class="fa fa-truck"></i><span>Kecamatan</span>', 'url' => ['/kecamatan']],
                    ['label' => '<i class="fa fa-truck"></i><span>Pembelian</span>', 'url' => ['/pembelian']],
                    ['label' => '<i class="fa fa-usd"></i><span>Penjualan</span>','url' =>['/penjualan']],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],
                ],
            ]
        );
        ?>

    </section>

</aside>
