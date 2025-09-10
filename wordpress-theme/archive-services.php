<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('All Services', 'serviceconnect'); ?></h1>
            <p class="page-description"><?php esc_html_e('Browse all available services and find the perfect professional for your needs.', 'serviceconnect'); ?></p>
        </header>
        
        <?php if (have_posts()) : ?>
            <div class="services-archive-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('service-archive-item'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="service-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'service_category');
                            if ($categories) :
                            ?>
                                <div class="service-categories">
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo esc_url(get_term_link($category)); ?>" class="category-tag">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="service-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div class="service-actions">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                                    <?php esc_html_e('Learn More', 'serviceconnect'); ?>
                                </a>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                                    <?php esc_html_e('Get Quotes', 'serviceconnect'); ?>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_navigation(); ?>
            
        <?php else : ?>
            <div class="no-services">
                <h3><?php esc_html_e('No services found', 'serviceconnect'); ?></h3>
                <p><?php esc_html_e('We\'re constantly adding new services. Check back soon!', 'serviceconnect'); ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <?php esc_html_e('Back to Home', 'serviceconnect'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
.page-header {
    text-align: center;
    margin-bottom: 4rem;
    padding: 2rem 0;
}

.page-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: var(--black);
}

.page-description {
    font-size: 1.125rem;
    color: var(--gray-600);
    max-width: 600px;
    margin: 0 auto;
}

.services-archive-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.service-archive-item {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.service-archive-item:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-xl);
}

.service-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.service-content {
    padding: 1.5rem;
}

.service-title {
    margin-bottom: 1rem;
}

.service-title a {
    text-decoration: none;
    color: var(--black);
}

.service-title a:hover {
    color: var(--primary-gold);
}

.service-categories {
    margin-bottom: 1rem;
}

.category-tag {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: var(--primary-gold-light);
    color: var(--primary-gold-dark);
    text-decoration: none;
    border-radius: 20px;
    font-size: 0.875rem;
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
}

.category-tag:hover {
    background: var(--primary-gold);
    color: var(--white);
}

.service-excerpt {
    margin-bottom: 1.5rem;
    color: var(--gray-600);
}

.service-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.no-services {
    text-align: center;
    padding: 4rem 2rem;
}

@media (max-width: 768px) {
    .services-archive-grid {
        grid-template-columns: 1fr;
    }
    
    .service-actions {
        flex-direction: column;
    }
}
</style>

<?php get_footer(); ?>