<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('favicon.png') ?>
    <!-- favicon -->
    <!-- <link rel="shortcut icon" type="image/png" href="/img/favicon.png"> -->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <?php //echo  $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
    <?=  $this->Html->css(['all.min','bootstrap.min', 'owl.carousel', 'magnific-popup','animate', 'main', 'responsive']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>
<body>
<?= $this->element('header')?>
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<?= $this->element('footer')?>
<?=  $this->Html->script(['jquery-1.11.3.min','bootstrap.min', 'jquery.countdown', 'jquery.isotope-3.0.6.min','waypoints', 'owl.carousel.min', 'jquery.magnific-popup.min','jquery.meanmenu.min','sticker','main']) ?>
</body>
</html>
