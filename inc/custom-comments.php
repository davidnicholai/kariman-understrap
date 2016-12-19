<?php
/************* COMMENT LAYOUT *********************/
// Comment Form

    add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
    function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5 = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    $fields = array(
    'author' => '<div class="form-group comment-form-author">' .
    '<input class="form-control _comments-textfield" id="author" name="author" placeholder="NAME" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '></div>',
    'email' => '<div class="form-group comment-form-email">' .
    '<input class="form-control _comments-textfield" id="email" name="email" placeholder="EMAIL" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '></div>',
    // 'url' => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'understrap' ) . '</label> ' .
    // '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"></div>',
    );
    return $fields;
    }

    add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
    function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
    
    <textarea class="form-control _comments-textarea" id="comment" name="comment" placeholder="COMMENT" aria-required="true" cols="45" rows="8"></textarea>
    </div>';
    $args['class_submit'] = 'btn btn-secondary'; // since WP 4.1
    return $args;
    }
