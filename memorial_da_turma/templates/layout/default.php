
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-6/assets/css/footer-6.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-1/assets/css/footer-1.css">
</head>
<style>
  #menu{
    padding-top:20px;
    padding-bottom:20px;
  }
  #a{
    background-color:black;
    width:250px;
  }
</style>
<body>
<header>
      <div id="menu" class="row gy-3 gy-md-5 gy-xl-0 align-items-sm-center">
        <div class="col-xs-12 col-sm-6 col-xl-3 order-0 order-xl-0">
          <div class="footer-logo-wrapper text-center text-sm-start">
            <a href="#!">
            </a>
          </div>
        </div>

        <div class="col-xs-12 col-xl-6 order-2 order-xl-1">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link link-secondary px-2 px-md-3" href="/cakephp/memorial_da_turma/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary px-2 px-md-3" href="/cakephp/memorial_da_turma/users">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary px-2 px-md-3" href="/cakephp/memorial_da_turma/projetos">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary px-2 px-md-3" href="/cakephp/memorial_da_turma/viagens">Viagens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary px-2 px-md-3" href="/cakephp/memorial_da_turma/users">Login</a>
            </li>
          </ul>
        </div>
    </div>
</header>
    
<main class="main">
    <div class="">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>

<footer class="footer">
  <section class="bg-light py-5 py-xl-8 py-xxl-9 border-top border-light">
    <div class="container overflow-hidden d-flex justify-content-center">
      <div class="row gy-5 gy-md-0">
        <div class="col-xs-12 col-md-12 order-6 order-md-6">
          <div class="copyright text-center text-md-start">
            &copy; 2024. Todos os Direitos Reservados.
          </div>
          <div class="copyright text-center text-md-start">
            Feito por <a href="https://bootstrapbrain.com/" class="link-secondary text-decoration-none">12ºE Turno 1</a> com <span class="text-primary">&#9829;</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
</html>