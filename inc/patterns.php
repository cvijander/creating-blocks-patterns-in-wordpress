<?php 

function lil_bp_patterns() {
    $podcast_embed = "<!-- wp:group {\"align\":\"wide\",\"backgroundColor\":\"black\",\"className\":\"podcast-embed\"} -->\n<div class=\"wp-block-group alignwide podcast-embed has-black-background-color has-background\"><!-- wp:spacer {\"height\":46} -->\n<div style=\"height:46px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:embed {\"url\":\"https://open.spotify.com/episode/5yuiJNugd6LupxUH2p4FmH?si=HOuq8K5sTIWcB_MX0LraNA\\u0026dl_branch=1\",\"type\":\"rich\",\"providerNameSlug\":\"spotify\",\"responsive\":true,\"className\":\"wp-embed-aspect-21-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify wp-embed-aspect-21-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://open.spotify.com/episode/5yuiJNugd6LupxUH2p4FmH?si=HOuq8K5sTIWcB_MX0LraNA\&amp;dl_branch=1\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\",\"align\":\"wide\"} -->\n<div class=\"wp-block-buttons alignwide is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Apple Podcasts</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Spotify</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Overcast</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">RSS</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:spacer {\"height\":63} -->\n<div style=\"height:63px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:group -->";

    $cta = "<!-- wp:group {\"align\":\"wide\",\"style\":{\"color\":{\"gradient\":\"linear-gradient(135deg,rgb(0,0,0) 0%,rgb(62,109,130) 46%,rgb(7,7,7) 100%)\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|base\"}}}},\"textColor\":\"base\",\"layout\":{\"type\":\"constrained\"}} -->\r\n<div class=\"wp-block-group alignwide has-base-color has-text-color has-background has-link-color\" style=\"background:linear-gradient(135deg,rgb(0,0,0) 0%,rgb(62,109,130) 46%,rgb(7,7,7) 100%)\"><!-- wp:spacer {\"height\":\"27px\"} -->\r\n<div style=\"height:27px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:columns {\"verticalAlignment\":null,\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"70%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:70%\"><!-- wp:heading -->\r\n<h2 class=\"wp-block-heading\">Ready to get Started?</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Click the button to schedule your FREE 30 minute consult.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"30%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:30%\"><!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"base\",\"textColor\":\"contrast\",\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|contrast\"}}}},\"className\":\"is-style-fill\"} -->\r\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button\">Schedule Now</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:spacer {\"height\":\"27px\"} -->\r\n<div style=\"height:27px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->";
 
    register_block_pattern(
        'lil-block-patterns/podcast-embed', 
        array (
            'title'=>__("Podcast Embed",'lil-bp'),
            'description'=>_x('A set of blocks that embed a Spotify podcast episode with buttons','lil-bp'),
            'content' => $podcast_embed,
            'categories' => array('buttons'),
        )
    );

     register_block_pattern(
        'lil-block-patterns/cta', 
        array (
            'title'=>__("Call to Action",'lil-bp'),
            'description'=>_x('A 2-column CTA with button','lil-bp'),
            'content' => $cta,
            'categories' => array('buttons','columns'),
            'keywords' => array('cta','call to action','content upgrade'),
            )
     );
}


add_action('init','lil_bp_patterns');

?>