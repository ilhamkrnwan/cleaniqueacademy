<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( '1' === $comment_count ) {
                echo '1 Komentar';
            } else {
                echo esc_html( $comment_count ) . ' Komentar';
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
            ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p style="color: var(--color-text-muted);">Komentar telah ditutup.</p>
    <?php endif; ?>

    <?php
    comment_form( array(
        'title_reply'          => 'Tinggalkan Komentar',
        'title_reply_to'       => 'Balas Komentar %s',
        'label_submit'         => 'Kirim Komentar',
        'class_submit'         => 'btn btn-primary',
        'comment_notes_before' => '<p style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 1.25rem;">Alamat email Anda tidak akan dipublikasikan.</p>',
    ) );
    ?>
</div>
