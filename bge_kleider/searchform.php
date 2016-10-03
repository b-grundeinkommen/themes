
    <h2 class="skip"><a name="searchform"><?php _e("Search", 'BGE_kleider'); ?></a></h2>

    <form method="get" class="searchform" action="<?php echo home_url('','relative'); ?>/">
            <label class="skip" for="suche"><?php _e("Search for", 'BGE_kleider'); ?>:</label>
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="suche" placeholder="<?php _e("Enter search term", 'BGE_kleider'); ?>"  
                onfocus="if(this.value=='<?php _e("Enter search term", 'BGE_kleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("Enter search term", 'BGE_kleider'); ?>';" />
            
             in <?php wp_dropdown_categories( 'show_option_all='.__('All categories','BGE_kleider') ); ?> 
            <input type="submit" class="searchsubmit" value="<?php _e("Search", 'BGE_kleider'); ?>" />
    </form>
    