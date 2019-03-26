<?php
/**
 * カスタムメニューの登録
 */
register_nav_menus();

/**
 * カスタム投稿タイプ（News）の登録
 */
register_post_type(
    'news',
    array(
        'label' => 'News',
        'public' => true,
        'supports' => array('title', 'thumbnail')
    )
    );
