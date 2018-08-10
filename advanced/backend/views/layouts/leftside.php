<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<aside class="main-sidebar">
  
    <section class="sidebar">

        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Beranda', 'icon' => 'fa fa-home', 'url' => ['/site']],
                        ['label' => 'Kelas Reguler', 'icon' => 'fa fa-users', 'url' => ['/tb-siswa']],
                        ['label' => 'Kelas Intensif', 'icon' => 'fa fa-user', 'url' => ['/tb-siswa']], 
                        ['label' => 'Akun user', 'icon' => 'fa fa-user', 'url' => ['/tb-siswa']],
                        ['label' => 'Penjadwalan', 'icon' => 'fa fa-calendar', 'url' => ['/tbjadwal']],
                        ['label' => 'Daftar Ruangan', 'icon' => 'fa fa-list', 'url' => ['/tb-ruangan']],
                       
                    ],
                ]
        )
        ?>
        
    </section>
</aside>
