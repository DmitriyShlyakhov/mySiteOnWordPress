<? get_header(); ?>

    <section id="about" class="s_about bg_lite">
        <div class="section_header">
            <h2>
                <?
                $idAboutObj = get_category_by_slug('about');
                $aboutId = $idAboutObj->term_id;
                echo get_cat_name($aboutId);
                ?>
            </h2>
            <div class="s-descr_wrap">
                <div class="s_descr"><?= category_description($aboutId); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">

                    <? if (have_posts()) : query_posts('p=5');
                        while (have_posts()) : the_post(); ?>
                            <div class="col-md-4 col-md-push-4 animation_1">
                                <h3>foto</h3>
                                <div class="person">
                                    <? if (has_post_thumbnail()): ?>
                                        <a class="popup" href="<?
                                        $largeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                        echo $largeImageUrl[0]; ?>">
                                            <? the_post_thumbnail(array(400, 400)); ?>
                                        </a>
                                    <? endif; ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-pull-4 animation_2">
                                <h3 class="text_right"><? the_title(); ?></h3>
                                <? the_content(); ?>
                            </div>
                        <? endwhile; endif;
                    wp_reset_query(); ?>


                    <div class="col-md-4 animation_3 personal_last_block">
                        <? if (have_posts()) : query_posts('p=14');
                            while (have_posts()) : the_post(); ?>
                                <h3 class="text_left"><? the_title(); ?></h3>
                                <h2 class="personal_header"><?= get_bloginfo('name'); ?></h2>
                                <? the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                        <div class="social_wrap">
                            <ul>
                                <? if (have_posts()) : query_posts('cat=3');
                                    while (have_posts()) : the_post(); ?>
                                        <li><a href="<?= get_post_meta($post->ID, 'soc_url', true); ?>"
                                               title="<? the_title(); ?>" target="_blank"><i
                                                    class="fa <?= get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i>
                                            </a>
                                        </li>
                                    <? endwhile; endif;
                                wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="resume" class="s_resume bg_white">
        <div class="section_header">
            <h2><?
                $idResumeObj = get_category_by_slug('resume');
                $resumeId = $idResumeObj->term_id;
                echo get_cat_name($resumeId);
                ?></h2>
            <div class="s-descr_wrap">
                <div class="s_descr"><?= category_description($resumeId); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="resume_container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 left">
                        <h3><?= get_cat_name(6); ?></h3>
                        <div class="resume_icon"><i class="icon-basic-case"></i></div>

                        <? if (have_posts()) : query_posts('cat=6');
                            while (have_posts()) : the_post(); ?>
                                <div class="resume_item">
                                    <div class="year"><?= get_post_meta($post->ID, 'resume-years', true); ?></div>
                                    <div class="resume_decription"><?= get_post_meta($post->ID, 'resume_place', true); ?><strong><? the_title(); ?></strong></div>
                                    <? the_content(); ?>
                                </div>
                            <? endwhile; endif;
                        wp_reset_query(); ?>

                    </div>
                    <div class="col-md-6 col-sm-6 right">
                        <h3><?= get_cat_name(7); ?></h3>
                        <div class="resume_icon"><i class="icon-basic-book-pen"></i></div>

                        <? if (have_posts()) : query_posts('cat=7');
                            while (have_posts()) : the_post(); ?>
                                <div class="resume_item">
                                    <div class="year"><?= get_post_meta($post->ID, 'resume-years', true); ?></div>
                                    <div class="resume_decription"><? the_title(); ?></div>
                                    <? the_content(); ?>
                                </div>
                            <? endwhile; endif;
                        wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="s_portfolio bg_dark">
        <div class="section_header">
            <h2><?
                $idPortfolioObj = get_category_by_slug('portfolio');
                $portfolioId = $idPortfolioObj->term_id;
                echo get_cat_name($portfolioId);
                ?></h2>
            <div class="s-descr_wrap">
                <div class="s_descr"><?= category_description($portfolioId); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="filter_div controls">
                        <ul>
                            <li class="filter active" data-filter="all">all my projects</li>
                            <li class="filter" data-filter=".markup">markup</li>
                            <li class="filter" data-filter=".backend">backend</li>
                            <li class="filter" data-filter=".future">My future projects</li>
                        </ul>
                    </div>
                    <div id="portfolio_grid">

                        <? if (have_posts()) : query_posts('cat=8');
                            while (have_posts()) : the_post(); ?>
                                <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item <?
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags)
                                    foreach($tags as $tag){
                                        echo ' ' . $tag->name;
                                    }
                                ?>">
                                    <? the_post_thumbnail(array(400, 300)); ?>
                                    <div class="portr_iten_cont">
                                        <h3> <? the_title(); ?></h3>
                                        <? the_excerpt(); ?>
                                        <a href="#" class="popup_content">Look</a>
                                    </div>
                                    <div class="hidden">
                                        <div class="port_descr">
                                            <div class="modal_box_content">
                                                <button class="mfp-close" type="button" title="Close (Esc)">×</button>
                                                <h3><? the_title(); ?></h3>
                                                <? the_content(); ?>
                                                <img src="<?
                                                $largeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                                echo $largeImageUrl[0]; ?>" alt="<? the_title(); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endwhile; endif;
                        wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="s_contacts bg_lite">
        <div class="section_header">
            <h2><?
                $idContactsObj = get_category_by_slug('contacts');
                $contactsId = $idContactsObj->term_id;
                echo get_cat_name($contactsId);
                ?></h2>
            <div class="s-descr_wrap">
                <div class="s_descr"><?= category_description($contactsId); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-geolocalize-05"></div>
                            <h3>Address:</h3>
                            <p>
                                <? $options = get_option('sample_theme_options');
                                echo $options['addresstext']; ?>
                            </p>
                        </div>
                        <div class="contact_box">
                            <div class="contacts_icon icon-basic-smartphone"></div>
                            <h3>Phhone:</h3>
                            <p>
                                <? $options = get_option('sample_theme_options');
                                echo $options['phonetext']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form action="//formspree.io/dinavl@rambler.ru" method="post" class="main_form" novalidate
                              target="_blank">
                            <label class="form-group">
                                <span class="color_element">*</span>Your name:
                                <input type="text" name="name" placeholder="Your name"
                                       data-validation-required-message="You have not entered a name" required/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span>Your E-mail:
                                <input type="email" name="email" placeholder="Your E-mail"
                                       data-validation-required-message="Not correctly E-mail" required/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span>Your message:
                                <textarea name="message" placeholder="Your message"
                                          data-validation-required-message="You did not enter a message" required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <button>Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? get_footer(); ?>