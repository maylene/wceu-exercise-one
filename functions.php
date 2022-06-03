<?php
function wceu_exercise_one_scripts()
{
    wp_enqueue_style(
        'wceu-exercise-one-style',
        get_stylesheet_uri(),
        array('twenty-twenty-one-style')
    );
}
add_action('wp_enqueue_scripts', 'wceu_exercise_one_scripts');