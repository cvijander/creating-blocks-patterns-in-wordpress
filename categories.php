<?php 

function lil_bp_register_block_categories() {
    register_block_pattern_category (
        'cta',
         array (
            'label' => _x('Calls to Action','lil-bp'),
           )
        );

    register_block_pattern_category(
        'lil',
        array(
            'label' => _x('LinkedIn Learning', 'lil-bp'),
        )
    );    
}

add_action('init','lil_bp_register_block_categories');

?>