<?php 

function lil_bp_patterns() {
   include ('patterns-content.php');


   $patterns = array(
     'lil-block-patterns/podcast-embed' => array (
            'title'=>__("Podcast Embed",'lil-bp'),
            'description'=>_x('A set of blocks that embed a Spotify podcast episode with buttons','lil-bp'),
            'content' => $podcast_embed,
            'categories' => array('buttons','lil'),
     ),
       
        'lil-block-patterns/cta' => array (
            'title'=>__("Call to Action",'lil-bp'),
            'description'=>_x('A 2-column CTA with button','lil-bp'),
            'content' => $cta,
            'categories' => array('buttons','columns','cta','lil'),
            'keywords' => array('cta','call to action','content upgrade'),
        ),


         'lil-block-patterns/pricing-table' =>   array(
            'title' => __("Pricing table", 'lil-bp'),
            'description' => _x('A 3-column pricing table with buttons', 'lil-bp'),
            'content' => $pricing_table,
            'categories' => array('buttons', 'columns','lil'),
            'keywords' => array('cta', 'call to action', 'pricing table'),
         ),

          'lil-block-patterns/bio-box' => array(
            'title' => __("Bio box", 'lil-bp'),
            'description' => _x('A 2-column author bio box with social icons', 'lil-bp'),
            'content' => $bio_box,
            'categories' => array('buttons', 'columns','lil'),
            'keywords' => array('bio', 'author', 'social'),
          ),

           'lil-block-patterns/contact-card'=> array(        
            'title' => __("Contact card", 'lil-bp'),
            'description' => _x('A 2-column author contact card with social icons', 'lil-bp'),
            'content' => $contact_card,
            'categories' => array('buttons', 'columns','lil'),
            'keywords' => array('bio', 'contact', 'social','address','phone','email'),
           ),

           
        'lil-block-patterns/query' =>        array(
            'title' => __("3 Column Posts", 'lil-bp'),
            'description' => _x('A 3-column post layout', 'lil-bp'),
            'content' => $query,
            'categories' => array('query', 'columns','lil'),
            'keywords' => array('posts', 'query', 'post layout'),
        ),
  
        'lil-block-patterns/masthead' =>        array(
            'title' => __("Masthead", 'lil-bp'),
            'description' => _x('A 3-column header layout', 'lil-bp'),
            'content' => $masthead,
            'categories' => array('columns','header','lil'),
            'keywords' => array('masthead', 'header', 'site info'),
        ),
         
          'lil-block-patterns/currently-listening'=>        array(
            'title' => __("Currently listening", 'lil-bp'),
            'description' => _x('An embed widget to show what we are listening to', 'lil-bp'),
            'content' => $listening,
            'categories' => array('text','lil'),
            'keywords' => array('music', 'embed', 'mood'),
          ),

           'lil-block-patterns/hero'=> array(
        
            'title' => __("Hero section", 'lil-bp'),
            'description' => _x('A cover block with text and a button for a CTA', 'lil-bp'),
            'content' => $hero,
            'categories' => array('text','header','lil','cta'),
            'keywords' => array('hero section', 'CTA', 'call to action'),
           ),        
     );

     foreach ($patterns as $slug => $props) {
        register_block_pattern($slug, $props);
     }
    
}


add_action('init','lil_bp_patterns');

?>