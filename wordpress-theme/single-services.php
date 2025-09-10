<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('service-single'); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="service-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="service-meta">
                        <?php
                        $categories = get_the_terms(get_the_ID(), 'service_category');
                        if ($categories) :
                        ?>
                            <div class="service-categories">
                                <strong><?php esc_html_e('Categories:', 'serviceconnect'); ?></strong>
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?php echo esc_url(get_term_link($category)); ?>" class="category-tag">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </header>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
                <div class="service-cta">
                    <h3><?php esc_html_e('Need this service?', 'serviceconnect'); ?></h3>
                    <p><?php esc_html_e('Get free quotes from qualified professionals in your area.', 'serviceconnect'); ?></p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-large">
                        <?php esc_html_e('Get Quotes Now', 'serviceconnect'); ?>
                    </a>
                </div>
            </article>
            
            <?php
            // Related services
            $related_services = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand'
            ));
            
            if ($related_services->have_posts()) :
            ?>
                <section class="related-services">
                    <h3><?php esc_html_e('Related Services', 'serviceconnect'); ?></h3>
                    <div class="services-grid">
                        <?php while ($related_services->have_posts()) : $related_services->the_post(); ?>
                            <div class="service-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="service-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="service-content">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                                        <?php esc_html_e('Learn More', 'serviceconnect'); ?>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>