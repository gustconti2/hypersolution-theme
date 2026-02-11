<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <nav class="main-nav">

    <ul class="nav-list">

      <!-- Logo / Home -->
      <li class="nav-logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">
          HyperSolution
          <!-- later this becomes an <img> -->
        </a>
      </li>

      <!-- Scroll sections -->
      <li>
        <a href="<?php echo esc_url( home_url('/#nossa-missao') ); ?>">
          Nossa Missão
        </a>
      </li>

      <li>
        <a href="<?php echo esc_url( home_url('/#solucoes') ); ?>">
          Soluções
        </a>
      </li>

      <li>
        <a href="<?php echo esc_url( home_url('/#como-funciona') ); ?>">
          Como Funciona
        </a>
      </li>

      <li>
        <a href="<?php echo esc_url( home_url('/#cases') ); ?>">
          Cases
        </a>
      </li>

      <li>
        <a href="<?php echo esc_url( home_url('/#quem-somos') ); ?>">
          Quem Somos
        </a>
      </li>

      <!-- External page -->
      <li class="nav-cta">
        <a href="<?php echo esc_url( home_url('/contact') ); ?>">
          Diagnóstico
        </a>
      </li>

    </ul>
  
  </nav>
</header>
