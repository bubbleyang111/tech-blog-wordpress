<?php get_header(); ?>

<main class="site-main">
    <div class="posts-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article class="post-card">
                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            [AI Generated Tech Image]
                        <?php endif; ?>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-category">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                } else {
                                    echo 'CATEGORY_TECH';
                                }
                                ?>
                            </span>
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                        </div>
                        
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                if (get_the_title()) {
                                    the_title();
                                } else {
                                    echo 'TITLE: [Revolutionary AI Technology Breakthrough]';
                                }
                                ?>
                            </a>
                        </h2>
                        
                        <div class="post-excerpt">
                            <?php
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo 'EXCERPT: [Discover the latest advancements in AI and ML transforming the tech industry...]';
                            }
                            ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more">
                            Read More →
                        </a>
                    </div>
                </article>
        <?php
            endwhile;
        else :
        ?>
            <!-- Demo Posts with Placeholder Content -->
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <article class="post-card">
                    <div class="post-thumbnail">
                        [PLACEHOLDER_IMAGE_<?php echo $i; ?>: Tech Illustration]
                    </div>
                    
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-category">CATEGORY_AI</span>
                            <span class="post-date">DATE_PLACEHOLDER</span>
                        </div>
                        
                        <h2 class="post-title">
                            <a href="#">
                                TITLE_<?php echo $i; ?>: [Next-Gen Machine Learning Framework]
                            </a>
                        </h2>
                        
                        <div class="post-excerpt">
                            EXCERPT_<?php echo $i; ?>: [Exploring cutting-edge developments in technology, from neural networks to quantum computing...]
                        </div>
                        
                        <a href="#" class="read-more">
                            Read More →
                        </a>
                    </div>
                </article>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
    
    <?php
    // Pagination
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => '← Previous',
        'next_text' => 'Next →',
    ));
    ?>
</main>

<?php get_footer(); ?>
