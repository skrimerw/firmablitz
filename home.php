<?php
/*
    Template Name: home
  */
?>

<? get_header(); ?>

<main>
  <section class="hero">
    <div class="hero__container container">
      <?php the_field('hero_text') ?>
      <a href="tel:<?php the_field('phone-number') ?>" class="hero__link">JETZT ANRUFEN</a>
    </div>
    <div class="cover">
    </div>
  </section>
  <section class="services">
    <div class="services__container container">
      <h2 class="section-title services__title">Unsere Leistungen im Überblick
        in Hamburg</h2>
      <?php if (have_rows('services')): ?>
        <ul class="services__cards">
          <?php while (have_rows('services')): the_row();
            $image = get_sub_field('image');
            $desc = get_sub_field('desc');
          ?>
            <li class="services__card">
              <img src="<?php echo $image ?>" class="services__card-img" />
              <p class="services__card-text">
                <?php echo $desc ?>
              </p>

            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </section>
  <section class="about" id="about-us">
    <div class="about__container container">
      <div class="about__content">
        <h2 class="about__title section-title">
          Über Uns
        </h2>
        <?php the_field('about_text') ?>
      </div>
      <div class="about__photos">
        <img src="<?php bloginfo('template_url') ?>/images/1.jpg" alt="" class="about__img">
        <img src="<?php bloginfo('template_url') ?>/images/2.jpg" alt="" class="about__img">
        <img src="<?php bloginfo('template_url') ?>/images/3.jpg" alt="" class="about__img">
        <img src="<?php bloginfo('template_url') ?>/images/4.jpg" alt="" class="about__img">
      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="container">
      <h2 class="benefits__title section-title">
        Ihr Vorteile mit Firma Blitz
      </h2>
      <?php if (have_rows('benefits')): ?>
        <ol class="benefits__content">
          <?php while (have_rows('benefits')): the_row();
            $title = get_sub_field('title');
            $desc = get_sub_field('desc');
          ?>
            <li>
              <h3 class="benefits__item-title">
                <?php echo $title ?>
              </h3>
              <p class="benefits__item-text">
                <?php echo $desc ?>
              </p>
            </li>
          <?php endwhile; ?>
        </ol>
      <?php endif; ?>
    </div>
  </section>
  <section class="quality">
    <div class="quality__container container">
      <h2 class="quality__title">Qualität und Zuverlässigkeit</h1>
        <hr class="quality__line">
        <p class="quality__text">
          Dafür steht Firma
          <br>
          Blitz jedem tag
        </p>
    </div>
    <div class="cover"></div>
  </section>
  <section class="intresting">
    <div class="intresting__container container">
      <h2 class="intresting__title">
        Interessieren Sie sich für unsere Dienstleistungen, benötigen Sie Hilfe?
      </h2>
      <a class="intresting__link" href="#call-us">
        Kostenloses Angebot anfordern
      </a>
    </div>
    <div class="cover"></div>
  </section>
  <section class="request" id="call-us">
    <div class="request__container container">
      <h2 class="request__title">
        Antrag für kostenlose Besichtigung
      </h2>
      <?php echo do_shortcode('[contact-form-7 id="bf46ed8" title="Заявка на бесплатный просмотр" html_class="request__form"]') ?>
    </div>
    <div class="cover"></div>
  </section>
  <section class="call">
    <div class="container">
      <h2 class="call__title section-title">
        Rückruf-Service: Wir rufen Sie selbstverständlich gerne zurück!
      </h2>
      <p class="call__text">
        Nutzen Sie unseren kostenlosen Rückruf-Service! Wir benötigen nur die Angabe Ihrer Telefonummer und eventuell
        den Zeitpunkt wann wir Sie zurückrufen dürfen. Wir melden uns dann schnellstmöglich bei Ihnen.
      </p>
      <?php echo do_shortcode('[contact-form-7 id="671b22d" title="Услуга обратного звонка" html_class="call__form"]') ?>
    </div>
  </section>
  <? get_footer() ?>