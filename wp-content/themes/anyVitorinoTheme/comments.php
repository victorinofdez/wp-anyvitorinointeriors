<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

$comments = get_comments(array(
    'post_id' => get_the_ID(),
));

$args = array(
    'type' => 'all',
    'callback' => 'my_custom_comments'
);

?>

<!-- Begin tt-Comments list -->
<ul class="tt-comments-list">
    <h4 class="tt-bpc-heading"><?php echo get_comments_number(); ?> comments:</h4>
    <?php wp_list_comments($args, $comments); ?>
    
</ul>
<!-- End tt-Comments list -->

<?php
function my_custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li class="tt-comment">
        <a href="#" class="tt-comment-avatar">
            <img src="<?php echo get_avatar_url($comment); ?>" alt="image">
        </a>
        <div class="tt-comment-body">
            <div class="tt-comment-meta">
                <h4 class="tt-comment-heading"><?php echo get_comment_author_link(); ?></h4>
                <span class="tt-comment-time"><?php echo get_comment_date('j F, Y'); ?> a las <?php echo get_comment_time(); ?></span>
            </div>
            <span class="tt-comment-reply"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'Reply'))); ?></span>
            <div class="tt-comment-text">
                <p><?php comment_text(); ?></p>
            </div> <!-- /.tt-comment-text -->
        </div> <!-- /.tt-comment-body -->
    </li>
<?php
}
?>

<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'theme_text_domain' ), get_the_title() );
            } else {
                printf(
                    /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'theme_text_domain'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'avatar_size' => 100,
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'reply_text'  => __( 'Reply', 'theme_text_domain' ),
                ) );
            ?>
        </ol>

        <?php the_comments_pagination( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'theme_text_domain' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'theme_text_domain' ) . '</span>',
        ) );

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php _e( 'Comments are closed.', 'theme_text_domain' ); ?></p>
    <?php
    endif;

    $comments_args = array(
        'fields' => array(
            'author' => '<div class="tt-col-lg-6"><div class="tt-form-group"><label>Name <span class="required">*</span></label><input class="tt-form-control" id="author" name="author" type="text" placeholder="" required=""></div></div>',
            'email'  => '<div class="tt-col-lg-6"><div class="tt-form-group"><label>Email address <span class="small text-gray">(Optional)</span></label><input class="tt-form-control" id="email" name="email" type="email" placeholder=""></div></div>',
        ),
        'comment_field' => '<div class="tt-form-group"><label>Comment <span class="required">*</span></label><textarea class="tt-form-control" id="comment" name="comment" rows="6" placeholder="" required=""></textarea></div>',
        'comment_notes_before' => '<small class="tt-form-text">Fields marked with an asterisk (*) are required!</small>',
        'submit_button' => '<button type="submit" class="tt-btn tt-btn-primary margin-top-30"><div data-hover="Post Comment">Post Comment</div><span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span></button>',
    );

    comment_form($comments_args);
    ?>


</div><!-- .comments-area -->