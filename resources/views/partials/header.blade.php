<header>
<div class="beam">
  <div class="container">
    <div class="row">
      <div class="col-12"><i class="fa fa-phone text-white mr-1" aria-hidden="true"></i><a href="tel: <?php echo the_field('numer_telefonu', 'option'); ?>" class="mr-3"><?php echo the_field('numer_telefonu', 'option'); ?></a> <i class="fa fa-envelope text-white mr-1" aria-hidden="true"></i><a href="mailto:<?php the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a><a class="pull-right" href="<?php echo the_field('link_fb', 'option'); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="header">
        <div class="logo">
          <a href="<?php echo get_home_url(); ?>"><img src="@asset('images/logo.jpg')"></a>
        </div>
        <nav class="menu">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</div>
</header> 