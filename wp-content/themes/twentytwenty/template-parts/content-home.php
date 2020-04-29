<?php
global $post;
$isHome = is_front_page();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("pagina-home"); ?>>
  <div class="container">
    <div class="container-home">
      <div class="bannerTop col-xs-12">
        <div class="bannerTop-Texto">
          <p>Eleve a autoestima das crianças através  da <span>mágica do sorriso.</span></p>
          <a href="/" class="home-banner-button">Quero ajudar<a>
        </div>
      </div>
    </div>
  </div>
  <?php the_content(); ?>
</article><!-- #post-## -->