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
      <div class="services__cards">
        <div class="services__card">
          <img src="<?php bloginfo('template_url') ?>/images/house.png" class="services__card-img" />
          <p class="services__card-text">
            Haushaltsauflösung, Wohnungsauflösung, Nachlassräumung und
            Nachlassankauf
          </p>
        </div>
        <div class="services__card">
          <img src="<?php bloginfo('template_url') ?>/images/recycle.png" class="services__card-img" />
          <p class="services__card-text">
            Entrümpelung und Entsorgung
          </p>
        </div>
        <div class="services__card">
          <img src="<?php bloginfo('template_url') ?>/images/trash.png" class="services__card-img" />
          <p class="services__card-text">
            Sperrmüll und Papiermüll Entsorgung
          </p>
        </div>
        <div class="services__card">
          <img src="<?php bloginfo('template_url') ?>/images/roll.png" class="services__card-img" />
          <p class="services__card-text">
            Wand- und Bodenbelagsentfernung
            Tapeten- und Teppichentfernung
          </p>
        </div>
        <div class="services__card">
          <img src="<?php bloginfo('template_url') ?>/images/gear.svg" class="services__card-img" />
          <p class="services__card-text">
            Kostenlose Besichtigung, Beratung & Angebotsabgabe
          </p>
        </div>
        <div class="services__card">
          <img src="<?php bloginfo('template_url') ?>/images/contact.svg" class="services__card-img" />
          <p class="services__card-text">
            Festpreise und Termintreue
          </p>
        </div>
      </div>
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
      <?php the_field('benefits') ?>
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
      <form action="#" class="call__form">
        <input type="text" class="call__input" name="phone" placeholder="Telefonnummer">
        <input type="date" class="call__input" name="date" placeholder="Datum">
        <input type="time" class="call__input" name="time" placeholder="Uhrzeit">
        <button type="submit" class="call__btn">Rückruf anforden</button>
      </form>
    </div>
  </section>
  <? get_footer() ?>