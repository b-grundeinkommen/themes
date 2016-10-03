<?php
/**
 * BGE_kleider Constants
 *
 **/ 

$defaultoptions = array(
    'js-version'                    => '3.3',
    'content-width'                 => 665,
    'yt-content-width'              => 665,
    'yt-content-height'             => 500,
    'logo'                          => get_template_directory_uri() .'/images/logo.png',
    'logo-width'                    => 300,
    'logo-height'                   => 130,
    'background-header-image'	    => get_template_directory_uri() .'/images/default-header-background.png',
    'background-header-color'	    => 'eeeeee',
    'smallslider-thumb-width'       => 220,
    'smallslider-thumb-height'      => 185,
    'bigslider-thumb-width'         => 705,
    'bigslider-thumb-height'        => 240,
    'bigslider-thumb-crop'          => 1,
    'highslider-width'              => 1024,
    'highslider-height'             => 348,
    'highslider-crop'               => 1,
    
    'plakate-width'                 => 300,
    'plakate-height'                => 416,
    'plakate-title'		    => '',
    'plakate-url'		    => 'https://www.bgepartei.de',
    'plakate-altadressen'	    => '',
    'plakate-src'		    => array(),

    'src-flexslider'                => get_template_directory_uri(). "/js/jquery.flexslider.min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.min.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.min.js",
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/defaultbild-wikinger.jpg',
    'src-default-symbolbild-404'    => get_template_directory_uri() .'/images/default-404.jpg',
    'src-default-symbolbild-category'   => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-search' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-tag'    => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-author' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-archive' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-artikel-symbolbild' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'src-default-symbolbild-person' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'slider-defaultbildsrc'	    => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'src-linkicons-css'		    => get_template_directory_uri() .'/css/basemod_linkicons.min.css',        
    'src-hamburger-css'		    => get_template_directory_uri() .'/css/hamburger.min.css',     
    'src-hamburger-js'		    => get_template_directory_uri() .'/js/hamburger.min.js',    
    'src-adminjs'                   => get_template_directory_uri() .'/js/admin.min.js', 
    'src-admincss'                   => get_template_directory_uri() .'/css/admin.min.css', 
    'src-customlogincss'            => get_template_directory_uri() .'/css/custom-login.min.css', 

    'dir-default-plakate'	    => '/plakate',
    'login_errors'		    => 1,
    'slider-aktiv'                  => 1,    
    'aktiv-defaultseitenbild'       => 0,
    'seitenbild-size'		    => 1,
    'seitenbild-url'		    => '',
    'aktiv-artikelbild'		    => 1,
    'artikelbild-size'		    => 1,    
    'aktiv-commentsonpages'	    => 0,
    'aktiv-platzhalterbilder-indexseiten'   => 0,
    'indexseitenbild-size'	    => 1,
    'continuelink'		    => 0,
    'aktiv-suche'                   => 1,   
    'slider-defaultwerbeplakate'    => 1,
    'slider-numberarticle'          => 3,
    'slider-animationType'          => 'fade',
    'slider-Direction'              => 'horizontal',
    'slider-slideshowSpeed'         => 8000,
    'slider-animationDuration'      => 600,
    'slider-catid'                  => 1,
    'defaultwerbesticker'                   => 1,
    'aktiv-autoren'                         => 1,
    'newsletter'                            => 1,
    'alle-socialmediabuttons'               => 1,
    'aktiv-linkicons'			    => 1,
    'aktiv-linkmenu'                        => 1,
    'aktiv-startseite-kategorien'           => 0,
    'aktiv-startseite-tags'                 => 0,
    'aktiv-avatar'                          => 0,
    'aktiv-autokeywords'		    => 0,
    'aktiv-hamburger'			    => 0,
    'src-default-avatar'                    => get_template_directory_uri(). '/images/avataricon.gif',
    'seitenmenu_mode'			    => 0,
    'zeige_subpagesonly'                    => 1,
    'zeige_sidebarpagemenu'                 => 1,
    'zeige_commentbubble_null'              => 0,
    'zeigerechtsvorschriften'               => 1,
    

    'artikelstream-type'		    => 0,
    'artikelstream-exclusive-catliste'	    => array(), 
    /* Ids of categories */
    'artikelstream-maxnum-main'             =>  5,
    'artikelstream-maxnum-second'	    =>  1,
    'artikelstream-maxnum-linktipps'	    =>  1,
    'artikelstream-title-main'		    =>  __("Current entries", 'BGE_kleider'),
    'artikelstream-title-maincontinuelist'  =>  __("More entries", 'BGE_kleider'),
    'artikelstream-title-linktipps'	    =>  __("Bookmarks", 'BGE_kleider'),
    'artikelstream-title-linktippcontinuelist'=>  __("More bookmarks", 'BGE_kleider'),
    'artikelstream-title-second'	    =>  __("Other entries", 'BGE_kleider'),
    'artikelstream-title-secondcontinuelist'=>  __("More entries", 'BGE_kleider'),
    'artikelstream-show-second'		    => 1,
    'artikelstream-show-linktipps'	    => 1,
    'artikelstream-nextnum-main'	    => 5,
    'artikelstream-nextnum-second'	    => 5,
    'artikelstream-nextnum-linktipps'	    => 5,    
    'artikelstream-numfullwidth-main'       => 1,
    'artikelstream-numfullwidth-second'     => 1,
    'artikelstream-show-widget'		    => 0,
    'artikelstream-content-allow3column'    => 0, 
    'categoryindex-teaserlength'            => 170,
    'categoryindex-numlinklist'		    => 5,
    
    'category-teaser'			    => 1,
    'category-num-article-fullwidth'	    => 10,
    'category-num-article-halfwidth'	    => 0,
    
    'category-teaser-maxlength'		    => 500,            
    'category-teaser-titleup'		    => 1, /* Titles up */ 
    'category-teaser-datebox'		    => 4, 
	/* 0 = Datebox, 
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */ 
    'category-teaser-floating'		    => 0,
    'category-teaser-dateline'		    => 1,
        /* 1 = show Date on line up of the text if no datebox */
    'category-teaser-maxlength-halfwidth'   => 200,        
    'category-teaser-titleup-halfwidth'	    => 1, 
        /* 1= Titles up */ 
    'category-teaser-datebox-halfwidth'	    => 4, 
    'category-teaser-floating-halfwidth'    => 1,
    'category-teaser-dateline-halfwidth'    => 2, 
        /* 1 = show Date on line up of the text if no datebox */    
    'teaser-thumbnail_width'		    => 120,
    'teaser-thumbnail_height'		    => 120,
    'teaser-thumbnail_crop'		    => 1,
    
    'linktipp-thumbnail_width'		    => 320,
    'linktipp-thumbnail_height'		    => 320,
    'linktipp-thumbnail_crop'		    => 0,
    
    'person-thumbnail_width'		    => 200,
    'person-thumbnail_height'		    => 300,
    'person-thumbnail_crop'		    => 1,

    
    'sidebar-thumbnail_width'		    => 270,
    'sidebar-thumbnail_height'		    => 360,
    'sidebar-thumbnail_crop'		    => 1,
    'sidebar-thumbnail_name'		    => 'sidebar-thumb',

    'bannerlink-width'			    => 300,
    'bannerlink_name'			    => 'bannerlink-thumb',
    

    
    'src-teaser-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'teaser-thumbnail_fallback'		    => 1,
    
    'teaser-type'			    => 'big',    
    'teaser-title-maxlength'		    => 120,
    'teaser-subtitle'			    => __( 'Trending Topics', 'BGE_kleider' ),
    'teaser-title-words'		    => 7,

    'teaser_maxlength'			    => 500,
    'teaser-showcredits'                    => 1,
    'teaser-titleup'			    => 1, 
        /* Titles up */ 
    'teaser-datebox'			    => 4,
    'teaser-floating'			    => 0,
    'teaser-dateline'			    => 1, 
        /* 1 = show Date on line up of the text if no datebox */
    'teaser-maxlength-halfwidth'	    => 200,        
    'teaser-titleup-halfwidth'		    => 1, 
        /* Titles up */ 
    'teaser-datebox-halfwidth'		    => 4, 
    'teaser-floating-halfwidth'		    => 1,
    'teaser-dateline-halfwidth'		    => 1, 
        /* 1 = show Date on line up of the text if no datebox */      
     
    'url-newsletteranmeldung'		    => 'https://service.bgepartei.de/subscribe/newsletter',
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 1,
    'default_comment_notes_before'  => '<p class="comment-notes">'.__( 'Your email address won\'t be displayed. Required fields are marked with this sign: <span class="required">*</span>', 'BGE_kleider' ). '</p>',
    'comments_disclaimer'           => __('Notice: Comments reflect the opinions of those who wrote them. Allowing people to comment here does not mean that we also agree with them.', 'BGE_kleider' ),
    'disclaimer_post'               => '',
    'feed_cache_lifetime'           => 14400,
    'use_wp_feed_defaults'          => 1,
    'dir_feed_cache'                => '',
    'teaserlink1-title'             => __( 'Get Informed', 'BGE_kleider' ),
    'teaserlink1-untertitel'        => __( 'about our topics and visions!', 'BGE_kleider' ),            
    'teaserlink1-url'               => 'https://www.bgepartei.de/politik/themen/', 
    'teaserlink1-symbol'            => 'idee',
    
    'teaserlink2-title'             => __( 'Support us', 'BGE_kleider' ),
    'teaserlink2-untertitel'        => __( 'with your engagement!', 'BGE_kleider' ),            
    'teaserlink2-url'               => 'https://www.bgepartei.de/unterstutze-uns/', 
    'teaserlink2-symbol'            => 'herz',
    
    'teaserlink3-title'             => __( 'Become a BGEler!', 'BGE_kleider' ),
    'teaserlink3-untertitel'        => __( 'Subscribe to the BGE party', 'BGE_kleider' ),            
    'teaserlink3-url'               => 'https://www.bgepartei.de/mitmachen/mitglied-werden', 
    'teaserlink3-symbol'            => 'steuerrad',
    
    'stickerlink1-content'          => '<span class="gedreht">Become<br><span class="cicolor">BGEler!</span></span>',
    'stickerlink1-url'              => 'https://www.bgepartei.de/mitmachen/mitglied-werden/',
    'stickerlink2-content'          => '<span class="gedreht"><span class="cicolor">Support</span><br><span class="small">and help us</span> </span>',
    'stickerlink2-url'              => 'https://spenden.bgepartei.de/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',
    'default_footerlink_key'		    => 'International (with flags)',
    'default_footerlink_show'		    => 1,    
    'default_text_title_home_backlink'	    => __('Back to start page','BGE_kleider' ), 
    'yt-alternativeembed'		    => 1,
        /* YouTube Videos ueber eigenen Embedcode gestalten und an youtbe-nocookie lenken */
    'yt-norel'				    => 1,
	/* Keine weiteren Videos vorschlagen */
    'excerpt_allowtags'			    => '<br>,<br />',        
    'zeige_breadcrump'			    => 1,
    'breadcrumb_delimiter'		    => ' / ',    
    'breadcrumb_homelinktext'		    =>  __( 'Start page', 'BGE_kleider' ),
    'breadcrumb_beforehtml'		    =>  '<span class="current">',
    'breadcrumb_afterhtml'		    =>  '</span>',
    'zeige_breadcrump_frontpages'           => 0,
    
    

    
    'src-linktipp-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'src-person_bild_default'		    => '',
    'linktipps-titlepos'		    => 0, // 0 = ueber Bild/Text, 1 = unter Bild/Text
    'linktipps-linkpos'			    => 0, // 0 = Link auf dem Titel, 1 = Link auf Text/Bild, 2 = URL unter Bild/Text anzeigen&verlinken
    'linktipps-subtitlepos'		    => 0, // 0 = oben, vor Titel, 1 = oben nach titel, 2 = unten
    
    'stylefile-position'		    => 0,
    'aktiv-stylefile'			    => 0,
    'fonts-headers'                         => 'none',
    'fonts-menuheaders'                     => 'none',
    'fonts-content'                         => 'none',
    'img-meta-credits'                      => '',
    'feed-overwriteauthorstring'            => '',
    'feed-addthumbnail'                     => true,
    'feed-thumb-sizename'                   => 'feedthumb',
    'feed-thumb-width'                      => 600,
    'feed-thumb-height'                     => 315,
    'feed-thumb-crop'                       => false,
    'position_sidebarbottom'                => 0,
    'suche-treffer_pro_seite'               => 10,
    'suche-excerptlength'                   => 300,
    
    'meta-maxlengthvalue'                   => 140,
    'url-wiki'				    => 'https://wiki.bgepartei.de',
    'vcard-showfeed'                        => 1,
    'vcard-feed-maxnum'                     => 7,
    'vcard-showlocalentries'                => 1,
    'vcard-maxnum-selectlist'		    => 7,
    'sidebar-steckbrief-maxwidth'	    => 270,
    'sidebar-steckbrief-maxheight'	    => 360,
        
    'optionpage-tab-default'                => 'kopfteil',
    'open_graph-active'                   => true,
    'open_graph_excerptlength'              => 400,
);


/*
 * Social Media 
 */
$default_socialmedia_liste = array(
    'delicious' => array(
	'name' => 'Delicious',
	'content'  => '',
	'active' => 0,
    ),
    'diaspora' => array(
	'name' => 'Diaspora',
	'content'  => 'https://joindiaspora.com/u/bgepartei',
	'active' => 0,
    ),
    'facebook' => array(
	'name' => 'Facebook',
	'content'  => 'https://www.facebook.com/bgeparteiDeutschland',
	'active' => 1,
    ),
    'twitter' => array(
	'name' => 'Twitter',
	'content'  => 'https://twitter.com/#!/bgepartei',
	'active' => 1,
    ),
    'gplus' => array(
	'name' => 'Google Plus',
	'content'  => 'https://plus.google.com/u/0/107862983960150496076/posts',
	'active' => 1,
    ),
    'flattr' => array(
	'name' => 'Flattr',
	'content'  => '',
	'active' => 0,
    ),
    'flickr' => array(
	'name' => 'Flickr',
	'content'  => 'https://secure.flickr.com/photos/bgepartei/',
	'active' => 0,
    ),
  
    'identica' => array(
	'name' => 'Identica',
	'content'  => 'https://identi.ca/bgepartei',
	'active' => 0,
    ),
    'itunes' => array(
	'name' => 'iTunes',
	'content'  => '',
	'active' => 0,
    ),
    'skype' => array(
	'name' => 'Skype',
	'content'  => '',
	'active' => 0,
    ),
    
    'youtube' => array(
	'name' => 'YouTube',
	'content'  => 'https://www.youtube.com/user/bgepartei',
	'active' => 1,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content'  => 'https://www.xing.com/net/bgepartei',
	'active' => 0,
    ),
    'tumblr' => array(
	'name' => 'Tumblr',
	'content'  => 'http://wirstellendasmalinfrage.tumblr.com',
	'active' => 0,
    ),
    'github' => array(
	'name' => 'GitHub',
	'content'  => '',
	'active' => 0,
    ),
    'appnet' => array(
	'name' => 'App.Net',
	'content'  => '',
	'active' => 0,
    ),
    'feed' => array(
	'name' => 'RSS Feed',
	'content'  => get_bloginfo( 'rss2_url' ),
	'active' => 1,
    ),
    'friendica' => array(
        'name' => 'Friendica',
        'content'  => 'https://pirati.ca/',
        'active' => 0,
    ),
    'instagram' => array(
        'name' => 'Instagram',
        'content'  => 'https://instagram.com/bgepartei/',
        'active' => 0,
    ),
); 


/* 
 * Default Links for Topmenu , can be overwritten bei widget  
 */
$default_toplink_liste = array(    
    'link1'  => array(
	'name'	    => __('Wiki', 'BGE_kleider' ),
	'content'  => 'https://wiki.bgepartei.de',
	'active'    => 1,
    ),
    'link2'  => array(
	'name'	    => __('BEO', 'BGE_kleider' ),
	'content'  => 'https://beo.bgepartei.de',
	'active'    => 1,
    ),
    'link3'  => array(
	'name'	    => __('Forum', 'BGE_kleider' ),
	'content'  => 'https://news.bgepartei.de',
	'active'    => 1,
    ),
    'link4'  => array(
	'name'	    => __('Chair', 'BGE_kleider' ),
	'content'  => 'https://vorstand.bgepartei.de',
	'active'    => 0,
    ),  
    'link5'  => array(
	'name'	    => __('Nachrichten', 'BGE_kleider' ),
	'content'  => 'https://nachrichten.bgepartei.de',
	'active'    => 1,
    ),
    'link6'  => array(
	'name'	    => __('Donating', 'BGE_kleider' ),
	'content'  => 'https://spenden.bgepartei.de',
	'active'    => 1,
    ),
    'link7'  => array(
	'name'	    => __('Shop', 'BGE_kleider' ),
	'content'  => 'https://shop.bgepartei.de',
	'active'    => 0,
    ),  
     'link8'  => array(
	'name'	    => __('BGE_info', 'BGE_kleider' ),
	'content'  => 'http://www.BGE_info.de',
	'active'    => 1,
    ),  
);


/**
 * Liste der Defaultbilder fuer Seiten und Slider
 */
$defaultbilder_liste = array(
	'0'=> array(
		'src' =>	get_template_directory_uri().'/images/default-vorlage.jpg',
		'label' => __( 'Default', 'BGE_kleider' )
	),
	'1'=> array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-wikinger.jpg',
		'label' => __( 'Wikinger', 'BGE_kleider' )
	),
);




/*
 * Default color modifications for standard css style
 */
$default_colorstyles = array(
    '-'  =>  __('Default Stylesheet', 'BGE_kleider' ),
    'colors_at.css' => __( 'Austria (Violet)', 'BGE_kleider' ),
    'colors_lu.css' => __( 'Luxemburgh (Violet)', 'BGE_kleider' ),
    'colors_hu.css' => __( 'Hungary (Violet)', 'BGE_kleider' ),
    'colors_tk.css' => __( 'Turkey (Cyan)', 'BGE_kleider' ),
    'colors_us.css' => __( 'USA (Violet)', 'BGE_kleider' ),
    'colors_nachrichten.css' => __( 'Nachrichten (Light Blue)', 'BGE_kleider' ),
    'colors_white.css' => __( 'White/Transparent', 'BGE_kleider' ),
    'colors_ch.css' => __( 'Switzerland', 'BGE_kleider' ),

 );
          


$default_fonts = array(
    'none'=> array(
        'title' => __( 'Use default font settings', 'BGE_kleider' ),
        'family' => '',
    ),      
    'serifdefault' => array(
        'title' => __( 'Georgia, Times, Calibri, serif', 'BGE_kleider' ),
        'family' => 'Georgia, Times, Calibri, serif',
    ),       
    'sansserifdefault' => array(
        'title' => __( 'Helvetica, Verdana, Arial, sans-serif', 'BGE_kleider' ),
        'family' => 'Helvetica, Verdana, Arial, sans-serif',
        'comments'  =>  __( 'Use default sans serif font', 'BGE_kleider' ),
    ),  
    'BebasNeue' => array(
        'title' => __( 'Bebas Neue', 'BGE_kleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'ttf'   => '/fonts/BebasNeue-webfont.ttf',
        'woff'   => '/fonts/BebasNeue-webfont.woff',
    ),
    'Awesome' => array(
        'title' => __( 'Awesome', 'BGE_kleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'ttf'   => '/fonts/fontawesome-webfont.ttf',
        'woff'   => '/fonts/fontawesome-webfont.woff',
    ),
    'DroidSans' => array(
        'title' => __( 'Droid Sans', 'BGE_kleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'eot'   => '/fonts/DroidSans.eot',
        'ttf'   => '/fonts/DroidSans.ttf',
    ),    
    'LinLibertine' => array(
        'title' => __( 'Libertine', 'BGE_kleider' ),
        'comments'  => '',        
        'webfont'   => 1,
        'woff'   => '/fonts/LinLibertine_R.woff',
    ), 
    'PoliticsHead' => array(
        'title' => __( 'PoliticsHead', 'BGE_kleider' ),
        'comments'  => '',        
        'webfont'   => 1,
        'woff'   => '/fonts/PoliticsHeadv1_9.woff',
        'eot'   => '/fonts/PoliticsHeadv1_9.ttf',
    ), 
    'monospace' => array(
        'title' => __( '"Courier New", Courier, monospace', 'BGE_kleider' ),
        'family' => '"Courier New", Courier, monospace',
    ),    
      
);

/*
 * Default font modifications for standard css style
 */
$default_alternativestyles = array(
    'style.css'	    => __( 'Default Style', 'BGE_kleider' ),
    'sample.css'    => __( 'Empty CSS', 'BGE_kleider' ),
    'scapegoat.css' => __( 'Scapegoat-Adaption (1.5)', 'BGE_kleider' ),
);

/*
 * default links for BGE party worldwide and in germany
 */

 $default_footerlink_liste = array(
     __( 'Germany', 'BGE_kleider' )  => array(
        'title' => __( 'BGE Party Germany', 'BGE_kleider' ),
        'url'   => 'https://www.bgepartei.de',
        'sublist'   => array(
            __('Baden-W&uuml;rttemberg', 'BGE_kleider' ) => 'https://bgepartei-bw.de/',
            __('Bayern', 'BGE_kleider' ) => 'https://bgepartei-bayern.de/',
            __('Berlin', 'BGE_kleider' ) => 'http://berlin.bgepartei.de/',
            __('Brandenburg', 'BGE_kleider' ) => 'https://www.BGE_brandenburg.de/',
            __('Bremen', 'BGE_kleider' ) => 'http://bremen.bgepartei.de/',
            __('Hamburg', 'BGE_kleider' ) => 'http://www.bgepartei-hamburg.de/',
            __('Hessen', 'BGE_kleider' ) => 'https://www.bgepartei-hessen.de/',
            __('Mecklenburg-Vorpommern', 'BGE_kleider' ) => 'http://www.bgepartei-mv.de/',
            __('Niedersachsen', 'BGE_kleider' ) => 'https://www.BGE_-nds.de/',
            __('Nordrhein-Westfalen', 'BGE_kleider' ) => 'http://www.bgepartei-nrw.de/',
            __('Rheinland-Pfalz', 'BGE_kleider' ) => 'http://www.BGE_-rlp.de/',
            __('Saarland', 'BGE_kleider' ) => 'https://bgepartei-saarland.de/',
            __('Sachsen', 'BGE_kleider' ) => 'http://www.BGE_-sachsen.de/',
            __('Sachsen-Anhalt', 'BGE_kleider' ) => 'https://www.BGE_-lsa.de/',
            __('Schleswig-Holstein', 'BGE_kleider' ) => 'https://landesportal.bgepartei-sh.de/',
            __('Th&uuml;ringen', 'BGE_kleider' ) => 'http://www.BGE_-thueringen.de/'
        )
     ),
     __( 'Schweiz', 'BGE_kleider' )  => array(
        'title' => __( 'bgepartei Schweiz', 'BGE_kleider' ),
        'url'   => 'https://bgepartei.ch',
        'sublist'   => array(
            __('Aargau', 'BGE_kleider' ) => 'https://www.BGE_-aargau.ch/',
            __('Bern', 'BGE_kleider' ) => 'https://be.bgepartei.ch/',
            __('Beider Basel', 'BGE_kleider' ) => 'https://BGE_-basel.ch/',
            __('Genf', 'BGE_kleider' ) => 'https://ge.partiBGE.ch/',
            __('St. Gallen und beider Appenzell', 'BGE_kleider' ) => 'https://sg.partiBGE.ch/',
            __('Tessin', 'BGE_kleider' ) => 'https://www.partitopirata.ch/',
            __('Thurgau-Schaffhausen', 'BGE_kleider' ) => 'https://tg.partiBGE.ch/',
            __('Waadt', 'BGE_kleider' ) => 'https://vd.partiBGE.ch/',
            __('Wallis', 'BGE_kleider' ) => 'https://vs.bgepartei.ch/',
            __('Zentralschweiz', 'BGE_kleider' ) => 'https://zs.bgepartei.ch/',
            __('Z&uuml;rich', 'BGE_kleider' ) => 'https://zh.bgepartei.ch/',
        )
     ),
     __('International', 'BGE_kleider' ) => array(
         'title' => __('BGE Parties International', 'BGE_kleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             __('Australia', 'BGE_kleider' ) => 'http://BGEparty.org.au/',
             __('Austria', 'BGE_kleider' ) => 'http://bgepartei.at/',
             __('Argentina', 'BGE_kleider' ) => 'http://www.partidopirata.com.ar/',
             __('Belarus', 'BGE_kleider' ) => 'http://BGEs.by/',            
             __('Beligium', 'BGE_kleider' ) => 'https://BGEparty.be/',
             __('Brazil', 'BGE_kleider' ) => 'http://www.partidopirata.org/',
             __('Canada', 'BGE_kleider' ) => 'http://www.BGEpartyofcanada.com/',
             __('Chile', 'BGE_kleider' ) => 'http://www.partidopirata.cl/',
             __('Columbia', 'BGE_kleider' ) => 'http://pp.interlecto.net/',
             __('Croatia', 'BGE_kleider' ) => 'https://pirati.hr/',
//             __('Cyprus', 'BGE_kleider' ) => 'http://www.BGEpartycyprus.com/',
             __('Czech Republic', 'BGE_kleider' ) => 'http://www.ceskapiratskastrana.cz/',
             __('Denmark', 'BGE_kleider' ) => 'http://piratpartiet.dk/',
             __('Estonia', 'BGE_kleider' ) => 'http://piraadipartei.ee/',
             __('Finland', 'BGE_kleider' ) => 'https://piraattipuolue.fi/',
             __('France', 'BGE_kleider' ) => 'https://partiBGE.org/',
             __('Germany', 'BGE_kleider' ) => 'https://www.bgepartei.de/', 
             __('Greece', 'BGE_kleider' ) => 'https://BGEparty.gr/',
  //           __('Guatemala', 'BGE_kleider' ) => 'http://partidopirata.org.gt/',
             __('Hungary', 'BGE_kleider' ) => 'http://kalozpart.org/',
             __('Iceland', 'BGE_kleider') => 'http://BGEparty.is/',
             __('Israel', 'BGE_kleider') => 'http://piratim.org/',
             __('Italy', 'BGE_kleider' ) => 'http://www.partito-pirata.it/',
             __('Japan', 'BGE_kleider' ) =>  'http://www.BGEpartyjapan.org/',  
             __('Kazakhstan', 'BGE_kleider' ) => 'http://BGEparty.kz/',
             __('Korea, South', 'BGE_kleider' ) => 'http://BGEparty.kr/',
             __('Latvia', 'BGE_kleider' ) => 'http://piratupartija.lv/',
//             __('Lithuania', 'BGE_kleider' ) => 'http://piratupartija.lt/',
             __('Luxembourg', 'BGE_kleider' ) => 'http://www.BGEpartei.lu/',
//             __('Mexico', 'BGE_kleider' ) => 'http://www.partidopiratamexicano.org/',
             __('Netherlands', 'BGE_kleider' ) => 'https://www.BGE_partij.nl/',
             __('New Zealand', 'BGE_kleider' ) => 'http://BGEparty.org.nz/',
             __('Peru', 'BGE_kleider' ) => 'http://wiki.freeculture.org/BGElera',
             __('Poland', 'BGE_kleider' ) => 'https://polskapartiapiratow.pl/',
             __('Portugal', 'BGE_kleider' ) => 'http://www.partidopiratapt.eu/',
             __('Romania', 'BGE_kleider' ) => 'http://www.partidulpirat.ro/',
             __('Russia', 'BGE_kleider' ) => 'http://BGE-party.ru/',
             __('Serbia', 'BGE_kleider' ) => 'http://www.piratskapartija.com/',
             __('Sweden', 'BGE_kleider' ) => 'https://www.piratpartiet.se/',
             __('Switzerland', 'BGE_kleider' ) => 'https://www.bgepartei.ch/',
             __('Slovakia', 'BGE_kleider' ) => 'http://www.piratskastrana.sk/',
             __('Slovenia', 'BGE_kleider' ) => 'http://www.piratskastranka.net/',
             __('Spain', 'BGE_kleider' ) => 'http://www.partidopirata.es/',
             __('Turkey', 'BGE_kleider' ) => 'https://korsanparti.org/',
             __('Ukraine', 'BGE_kleider' ) => 'http://pp-ua.org/',
//             __('Uruguay', 'BGE_kleider' ) => 'http://partidopirata.org.uy/',
             __('United Kingdom', 'BGE_kleider') => 'https://BGEparty.org.uk/',
             __('United States', 'BGE_kleider' ) => 'http://usBGEs.org/',

         )
     ), 
      __('International (with flags)', 'BGE_kleider' ) => array(
         'title' => __('BGE Parties International', 'BGE_kleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
            '<span class="flagicon-au"></span> '. __('Australia', 'BGE_kleider' ) => 'http://BGEparty.org.au/',
            '<span class="flagicon-at"></span> '. __('Austria', 'BGE_kleider' ) => 'http://bgepartei.at/',
            '<span class="flagicon-ar"></span> '. __('Argentina', 'BGE_kleider' ) => 'http://www.partidopirata.com.ar/',
            '<span class="flagicon-by"></span> '. __('Belarus', 'BGE_kleider' ) => 'http://BGEs.by/',            
            '<span class="flagicon-be"></span> '. __('Beligium', 'BGE_kleider' ) => 'https://BGEparty.be/',
            '<span class="flagicon-br"></span> '. __('Brazil', 'BGE_kleider' ) => 'http://www.partidopirata.org/',
            '<span class="flagicon-ca"></span> '. __('Canada', 'BGE_kleider' ) => 'http://www.BGEpartyofcanada.com/',
            '<span class="flagicon-cl"></span> '. __('Chile', 'BGE_kleider' ) => 'http://www.partidopirata.cl/',
            '<span class="flagicon-co"></span> '. __('Columbia', 'BGE_kleider' ) => 'http://pp.interlecto.net/',
            '<span class="flagicon-hr"></span> '. __('Croatia', 'BGE_kleider' ) => 'https://pirati.hr/',
    //        '<span class="flagicon-cy"></span> '. __('Cyprus', 'BGE_kleider' ) => 'http://www.BGEpartycyprus.com/',
            '<span class="flagicon-cz"></span> '. __('Czech Republic', 'BGE_kleider' ) => 'http://www.ceskapiratskastrana.cz/',
            '<span class="flagicon-dk"></span> '. __('Denmark', 'BGE_kleider' ) => 'http://piratpartiet.dk/',
            '<span class="flagicon-ee"></span> '. __('Estonia', 'BGE_kleider' ) => 'http://piraadipartei.ee/',
            '<span class="flagicon-fi"></span> '. __('Finland', 'BGE_kleider' ) => 'https://piraattipuolue.fi/',
            '<span class="flagicon-fr"></span> '. __('France', 'BGE_kleider' ) => 'https://partiBGE.org/',
            '<span class="flagicon-de"></span> '. __('Germany', 'BGE_kleider' ) => 'https://www.bgepartei.de/', 
            '<span class="flagicon-gr"></span> '. __('Greece', 'BGE_kleider' ) => 'https://BGEparty.gr/',
    //        '<span class="flagicon-gt"></span> '. __('Guatemala', 'BGE_kleider' ) => 'http://partidopirata.org.gt/',
            '<span class="flagicon-hu"></span> '. __('Hungary', 'BGE_kleider' ) => 'http://kalozpart.org/',
            '<span class="flagicon-is"></span> '. __('Iceland', 'BGE_kleider') => 'http://BGEparty.is/',
            '<span class="flagicon-il"></span> '. __('Israel', 'BGE_kleider') => 'http://piratim.org/',
            '<span class="flagicon-it"></span> '. __('Italy', 'BGE_kleider' ) => 'http://www.partito-pirata.it/',
            '<span class="flagicon-jp"></span> '. __('Japan', 'BGE_kleider' ) =>  'http://www.BGEpartyjapan.org/',  
            '<span class="flagicon-kz"></span> '. __('Kazakhstan', 'BGE_kleider' ) => 'http://BGEparty.kz/',
            '<span class="flagicon-kr"></span> '. __('Korea, South', 'BGE_kleider' ) => 'http://BGEparty.kr/',
            '<span class="flagicon-lv"></span> '. __('Latvia', 'BGE_kleider' ) => 'http://piratupartija.lv/',
    //        '<span class="flagicon-lt"></span> '. __('Lithuania', 'BGE_kleider' ) => 'http://piratupartija.lt/',
            '<span class="flagicon-lu"></span> '. __('Luxembourg', 'BGE_kleider' ) => 'http://www.BGEpartei.lu/',
    //        '<span class="flagicon-mx"></span> '. __('Mexico', 'BGE_kleider' ) => 'http://www.partidopiratamexicano.org/',
            '<span class="flagicon-nl"></span> '. __('Netherlands', 'BGE_kleider' ) => 'https://www.BGE_partij.nl/',
            '<span class="flagicon-nz"></span>  '. __('New Zealand', 'BGE_kleider' ) => 'http://BGEparty.org.nz/',
            '<span class="flagicon-pe"></span> '. __('Peru', 'BGE_kleider' ) => 'http://wiki.freeculture.org/BGElera',
            '<span class="flagicon-pl"></span> '. __('Poland', 'BGE_kleider' ) => 'https://polskapartiapiratow.pl/',
            '<span class="flagicon-pt"></span> '. __('Portugal', 'BGE_kleider' ) => 'http://www.partidopiratapt.eu/',
            '<span class="flagicon-ro"></span> '. __('Romania', 'BGE_kleider' ) => 'http://www.partidulpirat.ro/',
            '<span class="flagicon-ru"></span> '. __('Russia', 'BGE_kleider' ) => 'http://BGE-party.ru/',
            '<span class="flagicon-rs"></span> '. __('Serbia', 'BGE_kleider' ) => 'http://www.piratskapartija.com/',
            '<span class="flagicon-se"></span> '. __('Sweden', 'BGE_kleider' ) => 'https://www.piratpartiet.se/',
            '<span class="flagicon-ch"></span> '. __('Switzerland', 'BGE_kleider' ) => 'https://www.bgepartei.ch/',
            '<span class="flagicon-sk"></span> '. __('Slovakia', 'BGE_kleider' ) => 'http://www.piratskastrana.sk/',
            '<span class="flagicon-si"></span> '. __('Slovenia', 'BGE_kleider' ) => 'http://www.piratskastranka.net/',
            '<span class="flagicon-es"></span> '. __('Spain', 'BGE_kleider' ) => 'http://www.partidopirata.es/',
            '<span class="flagicon-tr"></span> '. __('Turkey', 'BGE_kleider' ) => 'http://www.korsanpartisi.org/',
            '<span class="flagicon-ua"></span> '. __('Ukraine', 'BGE_kleider' ) => 'http://pp-ua.org/',
    //        '<span class="flagicon-uy"></span> '. __('Uruguay', 'BGE_kleider' ) => 'http://partidopirata.org.uy/',
            '<span class="flagicon-uk"></span> '. __('United Kingdom', 'BGE_kleider') => 'https://BGEparty.org.uk/',
            '<span class="flagicon-us"></span> '. __('United States', 'BGE_kleider' ) => 'http://usBGEs.org/',             
         )
     ), 
     'Baden-Wuerttemberg' => array(
         'title' => __('BGE Party Country Association','BGE_kleider').' Baden-W&uuml;rttemberg',
         'url'  => 'http://www.bgepartei-bw.de/',
         'sublist' => array(
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Freiburg' => 'https://bzv-fr.bgepartei-bw.de/',      
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Stuttgart' => 'http://www.BGE_-bzv-stuttgart.de/',
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' T&uuml;bingen' => 'https://bzv.bgepartei-tuebingen.de/',          
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' B&ouml;blingen' => 'https://wiki.bgepartei.de/BW:Landkreis_B%C3%B6blingen/District Chapter',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Calw-Freudenstadt' => 'https://wiki.bgepartei.de/BW:Kreisverband_Calw-Freudenstadt',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Heidenheim' => 'http://www.BGE_-heidenheim.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Heilbronn' => 'http://www.bgepartei-heilbronn.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Karlsruhe Land' => 'http://BGE_-ka-land.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Karlsruhe Stadt' => 'http://www.BGE_-karlsruhe.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Ludwigsburg' => 'http://www.bgepartei-ludwigsburg.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Mannheim' => 'http://bgepartei-mannheim.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rastatt-Baden-Baden' => 'http://BGE_-rastatt.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Ravensburg-Bodenseekreis' => 'http://www.BGE_-rvfn.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Reutlingen-T&uuml;bingen' => 'http://bgepartei-reutlingen-tuebingen.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rhein-Neckar/Heidelberg' => 'http://BGE_-rnhd.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Schw&auml;bisch Hall' => 'http://www.kocher-jagst-BGE_.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Stuttgart' => 'https://www.bgepartei-stuttgart.de',
             __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Ulm/Alb-Donau-Kreis' => 'http://www.bgepartei-ulm.de',            
         )
     ),  
     'Bayern' => array(
         'title' => __('BGE Party Country Association','BGE_kleider').'Bayern',
         'url'  => 'http://www.bgepartei-bayern.de/',
         'sublist' => array(
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Mittelfranken' => 'http://BGE_-mfr.de/',
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Oberbayern' => 'http://oberbayern.bgepartei.de/',
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Oberfranken' => 'http://BGE_-oberfranken.de/',
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Oberpfalz' => 'http://oberpfalz.bgepartei.de/',
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Schwaben' => 'http://www.BGE_-schwaben.de/',
             __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Unterfranken' => 'https://BGE_-ufr.de/',
         ) 
     ), 
    'Brandenburg' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Brandenburg',
        'url'  => 'http://www.BGE_brandenburg.de/',
        'sublist' => array(
            __('<abbr title="Town Chapter">TC</abbr>','BGE_kleider').' Potsdam' => 'http://www.BGE_-potsdam.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Brandenburg an der Havel' => 'https://brb.BGE_brandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Havelland' => 'https://hvl.BGE_brandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' M&auml;rkisch-Oderland' => 'https://mol.BGE_brandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Oberhavel' => 'https://ohv.BGE_brandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Potsdam-Mittelmark' => 'https://pm.BGE_brandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Teltow-Fl&auml;ming' => 'https://tf.BGE_brandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' Barnim-Uckermark' => 'https://barum.BGE_brandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' Dahme-Oder-Spree' => 'https://dos.BGE_brandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' Prignitz-Ruppin' => 'https://pr.BGE_brandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' S&uuml;dbrandenburg' => 'https://sued.BGE_brandenburg.de/',
        )
    ),
   
    
    'Hamburg' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Hamburg',
        'url'  => 'http://www.bgepartei-hamburg.de/',
        'sublist' => array(
            __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Bergedorf' => 'http://www.bgepartei-bergedorf.de/',
            __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Harburg' => 'http://www.BGE_-harburg.de/',
            __('<abbr title="District Association">DA</abbr>','BGE_kleider').' Hamburg-Nord' => 'https://wiki.bgepartei.de/HH:Country Chapter_Nord',
            'Eimb&uuml;tteler BGE_' => 'https://wiki.bgepartei.de/HH:Eimsb%C3%BCtteler_BGE_',
        )
    ),
    'Hessen' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Hessen',
        'url'  => 'http://www.bgepartei-hessen.de/',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Bergstra&szlig;e' => 'http://www.BGE_-bergstrasse.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Darmstadt/Darmstadt-Dieburg' => 'http://www.bgepartei-darmstadt.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Frankfurt am Main' => 'http://www.bgepartei-frankfurt.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Gie&szlig;en' => 'http://www.BGE_-giessen.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Gross-Gerau' => 'http://www.bgepartei-gross-gerau.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Hochtaunus' => 'http://www.bgepartei-hochtaunus.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Kassel' => 'http://www.bgepartei-kassel.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Main-Kinzig' => 'http://www.kinzigBGE_.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Main-Taunus' => 'http://www.BGE_-mtk.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Marburg-Biedenkopf' => 'https://www.bgepartei-marburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Odenwald' => 'http://www.bgepartei-odenwald.de/',                                    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Offenbach-Land' => 'http://www.kreisBGE_-of.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rheingau-Taunus' => 'http://www.bgepartei-rtk.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Schwalm-Eder' => 'http://www.BGE_-sek.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Waldeck-Frankenberg' => 'http://www.BGE_-wa-fkb.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Wetterau' => 'http://www.bgepartei-wetterau.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Wiesbaden' => 'http://www.bgepartei-wiesbaden.de/',
        )
    ),
     'Mecklenburg-Vorpommern' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').'Mecklenburg-Vorpommern',
        'url'  => 'http://www.bgepartei-mv.de/',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Vorpommern-Greiswald' => 'http://BGE_-hgw.de/',
            'Rostock' => 'http://rostock.bgepartei-mv.de/',
            'Neubrandenburg' => 'http://bgepartei-mv.de/stammtisch-neubrandenburg-0',
            'Schwerin' => 'http://www.schweriner-BGE_.de/',
            'Usedom' => 'http://www.BGE_-usedom.de/',
           
        )
    ),
   'Niedersachsen' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Niedersachsen',
        'url' => 'http://www.BGE_-nds.de/',
        'sublist' => array(
            __('<abbr title="Town Chapter">TC</abbr>','BGE_kleider').' Braunschweig' => 'http://www.bgepartei-braunschweig.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Celle' => 'http://www.BGE_-celle.de/',    
            __('<abbr title="Town Chapter">TC</abbr>','BGE_kleider').' Delmenhorst' => 'http://www.bgepartei-delmenhorst.de/',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Diepholz' => 'http://www.bgepartei-diepholz.de/',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Goslar' => 'http://www.BGE_-goslar.de/',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' G&ouml;ttingen' => 'http://www.bgepartei-goettingen.de/',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Grafschaft Bentheim' => 'http://www.grafschafter-BGE_.de/',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Hameln-Pyrmont' => 'http://www.BGE_-hameln.de/',    
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' Hannover' =>'http://www.BGE_hannover.de/', 
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Helmstedt' => 'https://wiki.bgepartei.de/NDS:Helmstedt',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Hildesheim' => 'http://www.bgepartei-hildesheim.de/',    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Niedersachsen-Nordost' => 'http://www.heide-BGE_.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Nienburg/Weser' => 'http://www.BGE_-nienburg.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Northeim' => 'http://www.bgepartei-northeim.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Osnabr&uuml;ck' => 'https://www.BGE_-osnabrueck.de',   
            __('<abbr title="Town Chapter">TC</abbr>','BGE_kleider').' Oldenburg' => 'https://www.bgepartei-oldenburg.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Oldenburg Land' => 'http://www.bgepartei-landkreis-oldenburg.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Osterholz' => 'http://www.BGE_-ohz.de/', 	    
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Osterode' => 'http://www.bgepartei-osterode.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Peine' => 'http://wiki.bgepartei.de/NDS:Kreisverband_Peine',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Stade' => 'http://www.BGE_-stade.de/',   
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Schaumburg' => 'http://www.BGE_-schaumburg.de/',            
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Wolfenb&uuml;ttel-Salzgitter' => 'http://www.bgepartei-wolfenbuettel.de/',   
            __('<abbr title="Town Chapter">TC</abbr>','BGE_kleider').' Wolfsburg' => 'http://wolfsburg.bgepartei-nds.de/',   
      
        )
    ),    
    'Nordrhein-Westfalen' => array(
      'title' => __('BGE Party Country Association','BGE_kleider').' Nordrhein-Westfalen',
      'url' => 'http://www.bgepartei-nrw.de/',
      'sublist' => array(   
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Bielefeld' =>'http://www.BGE_-bielefeld.de',        
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Bochum' =>'http://BGE_bochum.de',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Bonn' =>'https://bgepartei-bonn.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Dortmund' =>'http://bgepartei-dortmund.de',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Duisburg' =>'http://www.bgepartei-duisburg.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' D&uuml;sseldorf' =>'http://bgepartei-duesseldorf.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' G&uuml;terslohe' =>'http://www.bgepartei-guetersloh.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Hagen' =>'http://BGE_hagen.org',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Herford' =>'https://wiki.bgepartei.de/NRW:Kreis_Herford',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Herne' =>'http://www.BGE_-herne.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Lippe' =>'http://www.bgepartei-lippe.de',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Kleve' =>'http://www.bgepartei-kleve.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' K&ouml;ln' =>'https://bgepartei-koeln.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Krefeld' =>'http://www.seidenstadt-BGE_.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Minden-L&uuml;bbecke' =>'http://bgepartei-milk.de',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' M&uuml;nster' =>'http://www.bgepartei-muenster.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Neukirchen-Vluyn' =>'http://www.BGE_-neukirchen-vluyn.de',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rhein-Erft' =>'https://bgepartei-rhein-erft.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rhein-Sieg-Kreis' =>'http://www.bgepartei-rhein-sieg.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Soest' =>'http://www.bgepartei-soest.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Soest' =>'http://www.bgepartei-soest.de/',
        __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Wesel' =>'http://www.BGE_-kreiswesel.de',
          )
    ),
      'Rheinland-Pfalz' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Rheinland-Pfalz',
        'url'  => 'http://www.BGE_-rlp.de',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Ahrweiler' => 'http://wiki.bgepartei.de/RP:Kreisverband_Ahrweiler',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Altenkirchen' => 'https://wiki.bgepartei.de/RP:Kreisverband_Altenkirchen',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Koblenz' => 'http://www.bgepartei-koblenz.de',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Mittelhaardt' => 'http://www.bgepartei-mittelhaardt.de',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rhein-Pfalz' => 'http://www.BGE_-rp.de',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Rheinhessen' => 'http://www.BGE_-rheinhessen.de',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' S&uuml;dpfalz' => 'https://wiki.bgepartei.de/RP:Kreisverband_S%C3%BCdpfalz',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Trier/Trier-Saarburg' => 'http://BGE_-trier.de',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Worms' => 'http://www.BGE_-worms.de',
        )
    ),
      'Sachsen' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Sachsen',
        'url'  => 'http://BGE_-sachsen.de/',
        'sublist' => array(
            __('<abbr title="Town Chapter">TC</abbr>','BGE_kleider').' Dresden Neustadt' => 'http://www.neustadtBGE_.de/',          
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Bautzen' => 'http://www.BGE_-bautzen.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Chemnitz' => 'http://www.BGE_-chemnitz.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Dresden' => 'http://www.BGE_-dresden.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Erzgebirge' => 'http://www.BGE_-erzgebirge.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' G&ouml;rlitz' => 'http://www.BGE_-goerlitz.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Leipzig' => 'http://www.BGE_-leipzig.de',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Mei&szlig;en' => 'http://BGE_-meissen.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Mittelsachsen' => 'http://www.BGE_-mittelsachsen.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' SOE' => 'http://www.BGE_-soe.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Vogtland' => 'http://www.bgepartei-vogtland.de/',         
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' Leipziger Umland' => 'http://www.piralum.de/',    
        )
    ),
      'Sachsen-Anhalt' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Sachsen-Anhalt',
        'url'  => 'http://www.BGE_-lsa.de',
        'sublist' => array(
            __('<abbr title="Regional Chapter">RC</abbr>','BGE_kleider').' Altmark' => 'http://www.BGE_-altmark.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' B&ouml;rde' => 'http://www.BGE_-boerde.de/',
            'Burgenlandkreis / Saalekreis' => 'https://www.BGE_-lsa.de/regionen/burgenlandkreis-saalekreis',
            'Halle (Saale)' => 'http://www.BGE_-halle.de/',
            'Harz' => 'http://BGE_-harz.de/',
            'Magdeburg' => 'http://www.BGE_-magdeburg.de/',
            'Mansfeld-S&uuml;dharz' => 'http://www.BGE_-msh.de/',
            'Wittenberg' => 'http://bgepartei-wittenberg.de/',
        )
    ),
      'Thueringen' => array(
        'title' => __('BGE Party Country Association','BGE_kleider').' Th&uuml;ringen',
        'url'  => 'http://www.BGE_-thueringen.de/',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Altenburger Land' => 'http://BGE_-altenburger-land.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Wartburgkreis' => 'http://wartburgBGE_.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Erfurt' => 'http://www.BGE_-erfurt.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Gera' => 'http://BGE_-gera.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Gotha' => 'http://BGE_-gotha.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Ilm-Kreis' => 'http://BGE_-ilmkreis.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Schmalkalden-Meiningen' => 'http://BGE_-schmalkalden-meiningen.de/',
            __('<abbr title="District Chapter">DC</abbr>','BGE_kleider').' Jena' => 'https://jena.BGE_-thueringen.de/',
        )
    ),
);

/* 
 * Teaser symbols
 */
$defaultplakate_textsymbolliste = array(
    'idee'  => "0021",
    'person'  => "263A",
    'herz'  => "2665",
    'email'  => "2709",
    'at'  => "0040",
    'check'  => "2713",
    'nocheck'  => "2717",
    'telefon'  => "2706",
    'anker'  => "2693",
    'skull'  => "2620",
    'female'  => "2640",
    'male'  => "2642",
    'malefemale'  => "26A5",
    'schreiben'  => "270D",
    'rollstuhl'  => "267F",
    'steuerrad'  => "2638",
    'musiknote'  => "266B",
    'paragraph'  => "00A7",
    'play'  => "25B6",
    'save'  => "2714",
    'spark'  => "2737",
    'star'  => "2605",
    'eins'  => "2460",
    'zwei'  => "2461",    
    'drei'  => "2462", 
    'euro'  => "20AC",
    'dollar'  => "0024",
    'copyright'  => "00A9",       
);



 foreach($defaultplakate_textsymbolliste as $i => $value) {
     $defaultplakate_textsymbolliste_entity[$i] = '&#x'.$value.';';
 } 
 $categories=get_categories(array('orderby' => 'name','order' => 'ASC'));
 foreach($categories as $category) {
     if (!is_wp_error( $category )) {
	$currentcatliste[$category->cat_ID] = $category->name.' ('.$category->count.' '.__('Entries','BGE_kleider').')';
     }
 }        


$setoptions = array(
   'BGE_kleider_theme_options'   => array(
       
       'kopfteil'   => array(
           'tabtitle'   => __('Header', 'BGE_kleider'),
           'fields' => array(
              'aktiv-linkmenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Website Menu', 'BGE_kleider' ),
                  'label'   => __( 'Display list of several websites belonging to the BGE Party.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-linkmenu'],
              ),
              'aktiv-suche' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Search Form', 'BGE_kleider' ),
                  'label'   => __( 'Display search form.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-suche'],
              ),
              'defaultwerbesticker' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Stamps', 'BGE_kleider' ),
                  'label'   => __( 'Display stamps with short text or image in header', 'BGE_kleider' ),
                  'default' => $defaultoptions['defaultwerbesticker'],
              ),
              'stickerlink1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 1', 'BGE_kleider' ),
              ),
              'stickerlink1-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'BGE_kleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'BGE_kleider' ),
                  'default' => $defaultoptions['stickerlink1-content'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'BGE_kleider' ),
                  'label'   => __( 'Target URL for stamp', 'BGE_kleider' ),
                  'default' => $defaultoptions['stickerlink1-url'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 2', 'BGE_kleider' ),
              ),
               'stickerlink2-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'BGE_kleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'BGE_kleider' ),
                  'default' => $defaultoptions['stickerlink2-content'],
                   'parent'  => 'stickerlink2',
              ),
              'stickerlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'BGE_kleider' ),
                  'label'   => __( 'Target URL for stamp', 'BGE_kleider' ),
                  'default' => $defaultoptions['stickerlink2-url'],
                  'parent'  => 'stickerlink2',
              ),
              'stickerlink3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 3', 'BGE_kleider' ),
              ),
               'stickerlink3-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'BGE_kleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'BGE_kleider' ),
                  'default' => $defaultoptions['stickerlink3-content'],
                   'parent'  => 'stickerlink3',
              ),
              'stickerlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'BGE_kleider' ),
                  'label'   => __( 'Target URL for stamp', 'BGE_kleider' ),
                  'default' => $defaultoptions['stickerlink3-url'],
                  'parent'  => 'stickerlink3',
              ),
	      'toplinks'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Website Menu', 'BGE_kleider' ),
              ),
	      'toplinkliste'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Websites', 'BGE_kleider' ),
		  'liste'   => $default_toplink_liste,
		  'parent'  => 'toplinks',
		  'label'   => __( 'Default links for websites as menu in header. Can be replaced by defining a menu in section "Website Menu"', 'BGE_kleider' ),
	      ), 
               
           )
       ),
       'fussteil'   => array(
           'tabtitle'   => __('Footer', 'BGE_kleider'),
           'fields' => array(
              'default_footerlink_show' => array(
                  'type'    => 'bool',
                  'title'   => __( 'BGE Party Links', 'BGE_kleider' ),
                  'label'   => __( 'Display a list for several BGE Party sections worldwide or be some countries.', 'BGE_kleider' ),
                  'default' => $defaultoptions['default_footerlink_show'],
              ),
              'default_footerlink_key' => array(
                  'type'    => 'select',
                  'title'   => __( 'Section', 'BGE_kleider' ),
                  'label'   => __( 'Select section for display', 'BGE_kleider' ),
                  'default' => $defaultoptions['default_footerlink_key'],
                  'liste'   => $default_footerlink_liste,
              ),
          )
       ),
      'startseite'   => array(
           'tabtitle'   => __('Start page', 'BGE_kleider'),
           'fields' => array(
                            
              'aktiv-startseite-kategorien' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Categories', 'BGE_kleider' ),
                  'label'   => __( 'Display categories.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-startseite-kategorien'],
              ),
              'aktiv-startseite-tags' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Tags', 'BGE_kleider' ),
                  'label'   => __( 'Display tagcloud.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-startseite-tags'],
              ),
            
              'artikelstream'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Entry filter', 'BGE_kleider' ),                      
              ),     
               
               'artikelstream-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Set main entry list', 'BGE_kleider' ),
                  'label'   => __( 'Choose which entries are displayed on the start page.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-type'],
		  'liste'   =>  array(
                    0 => __("All entries (from every category) and bookmarks together","BGE_kleider"), 
                    1 => __("Only entries (from every category)","BGE_kleider"), 	    
                    2 => __("All entries, except those from defined categories","BGE_kleider"), 
                    ), 
                  'parent'  => 'artikelstream'
              ), 	
               
              'artikelstream-exclusive-catliste' => array(
                  'type'    => 'multiselectlist',
                  'title'   => __( 'Categories', 'BGE_kleider' ),
                  'label'   => __( 'Select categories, which entries should not appear in main entry list on start page.', 'BGE_kleider' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['artikelstream-exclusive-catliste'],
                  'parent'  => 'artikelstream'
              ),  
               'artikelstream-maxnum-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries', 'BGE_kleider' ),
                  'label'   => __( 'Number of entries in main entry list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-main'],
                  'parent'  => 'artikelstream'
              ), 
               'artikelstream-nextnum-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of elements for entries list', 'BGE_kleider' ),
                  'label'   => __( 'Number of link elements for a list for further entries.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-main'],
                  'parent'  => 'artikelstream'
              ), 
               'artikelstream-numfullwidth-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries in big sized view', 'BGE_kleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-numfullwidth-main'],
                  'parent'  => 'artikelstream'
              ),
             'artikelstream-title-main' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for main entry list', 'BGE_kleider' ),
                  'label'   => __( 'Sets a title above the main entry list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-title-main'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-maincontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for more entries', 'BGE_kleider' ),
                  'label'   => __( 'Sets a title for an additional entry list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-title-maincontinuelist'],
                  'parent'  => 'artikelstream',
              ),                
               
              'artikelstream-show-second' => array(
                  'type'    => 'select',
                  'title'   => __( 'Display second entry list', 'BGE_kleider' ),
                  'label'   => __( 'Activates a second entry list, made by those article categories which are not part of the main article list.', 'BGE_kleider' ),
                  'liste'   => array(
                      "0" => __("Hide", 'BGE_kleider'), 
                      "1" => __("Show",'BGE_kleider')),
                  'default' => $defaultoptions['artikelstream-show-second'],
                   'parent'  => 'artikelstream'
              ), 
               
              'artikelstream-maxnum-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of elements in second entry list', 'BGE_kleider' ),
                  'label'   => __( 'Sets the number of entries of the second entry list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-second'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-nextnum-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number more entries', 'BGE_kleider' ),
                  'label'   => __( 'Number of link elements for a list for further entries.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-second'],
                  'parent'  => 'artikelstream'
              ), 
                              
               'artikelstream-numfullwidth-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries in big sized view', 'BGE_kleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size. (Notice: Depends on design!)', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-numfullwidth-second'],
                  'parent'  => 'artikelstream'
              ), 
            'artikelstream-title-second' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title second entry list', 'BGE_kleider' ),
                  'label'   => __( 'Sets a title above the second entry list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-title-second'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-secondcontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for more entries', 'BGE_kleider' ),
                  'label'   => __( 'Subtitle for an additional entry list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-title-secondcontinuelist'],
                  'parent'  => 'artikelstream',
              ),                
              
               
              'artikelstream-show-linktipps' => array(
                  'type'    => 'select',
                  'title'   => __( 'Bookmarks', 'BGE_kleider' ),
                  'label'   => __( 'Display a bookmark section after main entry list, forming an own entry list. This list is positioned before the second entry list.', 'BGE_kleider' ),
                  'liste'   => array("0" => __("Hide", 'BGE_kleider'), 
                      "1" => __("Show",'BGE_kleider')),
                  'default' => $defaultoptions['artikelstream-show-linktipps'],
                   'parent'  => 'artikelstream'
              ), 
              'artikelstream-maxnum-linktipps' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of bookmarks', 'BGE_kleider' ),
                  'label'   => __( 'Number of bookmarks to display.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-linktipps'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-nextnum-linktipps' => array(
                  'type'    => 'number',
                  'title'   => __( 'Additional bookmarks', 'BGE_kleider' ),
                  'label'   => __( 'Number of additional bookmarks as a list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-linktipps'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-title-linktipps' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for bookmark section', 'BGE_kleider' ),
                  'label'   => __( 'Subtitle for bookmark section.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-title-linktipps'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-linktippcontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title additional bookmarks', 'BGE_kleider' ),
                  'label'   => __( 'Subtitle for list of additional bookmarks.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-title-linktippcontinuelist'],
                  'parent'  => 'artikelstream',
              ), 
            'artikelstream-show-widget' => array(
                  'type'    => 'select',
                  'title'   => __( 'Widget', 'BGE_kleider' ),
                  'label'   => __( 'Display a widget section after main entry list. This widget can be used to display text or even feeds of external sources.', 'BGE_kleider' ),
                  'liste'   => array("0" => __("Hide", 'BGE_kleider'), 
                      "1" => __("Show",'BGE_kleider')),
                  'default' => $defaultoptions['artikelstream-show-widget'],
                   'parent'  => 'artikelstream'
              ), 

 
            
            'auszuege'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Layout for entry excerpts', 'BGE_kleider' ),                      
              ),     
                              
             'teaser_maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length', 'BGE_kleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser_maxlength'],
                 'parent'  => 'auszuege'
              ),                        
              'teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'BGE_kleider' ),
                  'label'   => __( 'Title above thumbnail, date and text.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-titleup'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Layout entry info', 'BGE_kleider' ),
                  'label'   => __( 'Sets a thumbnail, image, datebox, YouTube video or default image in front of excerpt.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Display datebox","BGE_kleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","BGE_kleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","BGE_kleider"),
				5 => __("Hide entry info","BGE_kleider")), 
                  'parent'  => 'auszuege'
              ), 	              
	      'teaser-floating' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Floating excerpt', 'BGE_kleider' ),
                  'label'   => __( 'Excerpt text will float around entry info.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-floating'],
                  'parent'  => 'auszuege'
              ),  
               'teaser-dateline' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Date', 'BGE_kleider' ),
                  'label'   => __( 'Show date as first line after title.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-dateline'],
                  'parent'  => 'auszuege'
              ), 
               
                'teaser-maxlength-halfwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length', 'BGE_kleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt. (Small entry teaser in half content width).', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-maxlength-halfwidth'],
		'parent'  => 'auszuege'
              ),                 
             'teaser-titleup-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'BGE_kleider' ),
                  'label'   => __( 'Title above thumbnail, date and text. (Small entry teaser in half content width).', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-titleup-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Layout entry info', 'BGE_kleider' ),
                  'label'   => __( 'Sets a thumbnail, image, datebox, YouTube video or default image in front of excerpt. (Small entry teaser in half content width).', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Display datebox","BGE_kleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","BGE_kleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","BGE_kleider"),
				5 => __("Hide entry info","BGE_kleider")), 

                  'parent'  => 'auszuege'		  
              ), 
	      'teaser-floating-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Floating excerpt', 'BGE_kleider' ),
                  'label'   => __( 'Excerpt text will float around entry info. (Small entry teaser in half content width).', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-floating-halfwidth'],
                  'parent'  => 'auszuege'
              ), 	       
	       
               'teaser-dateline-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Date', 'BGE_kleider' ),
                  'label'   => __( 'Show date as first line after title. (Small entry teaser in half content width).', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-dateline-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
                    
	      'artikelstream-content-allow3column' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Two/Three column view', 'BGE_kleider' ),
                  'label'   => __( 'On big sized screen view (above 1350px resolution) use three column excerpts.', 'BGE_kleider' ),
                  'default' => $defaultoptions['artikelstream-content-allow3column'],
                  'parent'  => 'auszuege'
              ), 	       
	       
	       
              'sliderpars'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Slider', 'BGE_kleider' ),                      
              ),
              'slider-aktiv' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate', 'BGE_kleider' ),
                  'label'   => __( 'Activates slider for start pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['slider-aktiv'],
                  'parent'  => 'sliderpars'
              ),

            'teaser-subtitle' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'BGE_kleider' ),
                  'label'   => __( 'Text in front of every slider excerpt.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-subtitle'],
                  'parent'  => 'sliderpars'
              ),  
             'teaser-title-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Title length', 'BGE_kleider' ),
                  'label'   => __( 'Maximum number of chars for title in slider.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-title-maxlength'],
                   'parent'  => 'sliderpars'
              ),   
             'teaser-title-words' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of words', 'BGE_kleider' ),
                  'label'   => __( 'Maximum number of words in title. (Cannot have more chars as maximum title length).', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-title-words'],
                   'parent'  => 'sliderpars'
              ),
                              
               
               
              'slider-catid' => array(
                  'type'    => 'select',
                  'title'   => __( 'Category', 'BGE_kleider' ),
                  'label'   => __( 'Select category for slider entries.', 'BGE_kleider' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['slider-catid'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-numberarticle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Number slides', 'BGE_kleider' ),
                  'label'   => __( 'Maximum number for slides to show.', 'BGE_kleider' ),
                  'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7),
                  'default' => $defaultoptions['slider-numberarticle'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationType' => array(
                  'type'    => 'select',
                  'title'   => __( 'Animation', 'BGE_kleider' ),
                  'label'   => __( 'Type of animation', 'BGE_kleider' ),
                  'liste'   => array("fade" => "fade", "slide" => "slide"),
                  'default' => $defaultoptions['slider-animationType'],
                   'parent'  => 'sliderpars'
              ), 
                 
              'slider-Direction' => array(
                  'type'    => 'select',
                  'title'   => __( 'Direction', 'BGE_kleider' ),
                  'label'   => __( 'Choose direction for animated slides', 'BGE_kleider' ),
                  'liste'   => array("horizontal" => "horizontal" , "vertical" => "vertical"),
                  'default' => $defaultoptions['slider-Direction'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-slideshowSpeed' => array(
                  'type'    => 'number',
                  'title'   => __( 'Show Duration', 'BGE_kleider' ),
                  'label'   => __( 'Duration for presenting a slide in milliseconds.', 'BGE_kleider' ),
                  'default' => $defaultoptions['slider-slideshowSpeed'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationDuration' => array(
                  'type'    => 'number',
                  'title'   => __( 'Animation duration', 'BGE_kleider' ),
                  'label'   => __( 'Duration for sliding effect in milliseconds.', 'BGE_kleider' ),
                  'default' => $defaultoptions['slider-animationDuration'],
                   'parent'  => 'sliderpars'
              ),  
             'teaser-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Slide Size', 'BGE_kleider' ),
                  'label'   => __( 'Show slide as big thumbnail or small thumbnail with excerpt text.', 'BGE_kleider' ),
                  'liste'   => array("big" => "Big thumbnail", "small" => "Small thumbnail"),
                  'default' => $defaultoptions['teaser-type'],
                   'parent'  => 'sliderpars'
              ), 
               'teaser-showcredits' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Show credits', 'BGE_kleider' ),
                  'label'   => __( 'Display a line with credits/copyright info from thumbnail.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-showcredits'],
                  'parent'  => 'sliderpars'
              ),

              'slider-defaultbildsrc' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Default slider image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default slider image in case no thumbnail is present in entry.', 'BGE_kleider' ),
                  'default' => $defaultoptions['slider-defaultbildsrc'],		                     
		  'parent'  => 'sliderpars'
              ),

               
               
          )
       ), 
       'contentbereich'   => array(
           'tabtitle'   => __('Entries and pages', 'BGE_kleider'),
           'fields' => array(
	                    
              'post_disclaimer' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Disclaimer', 'BGE_kleider' ),
                  'label'   => __( 'Default disclaimer text.', 'BGE_kleider' ),
                  'default' => $defaultoptions['disclaimer_post'],
              ),    	       
	       
	      'category'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Index pages', 'BGE_kleider' ),
              ),
	       
	      'category-teaser'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Slider', 'BGE_kleider' ),
                  'label'   => __( 'Activate slider like on start page.', 'BGE_kleider' ),
                  'default' => $defaultoptions['category-teaser'],
		  'parent'  => 'category'
              ),   	       
	       
	    'category-num-article-fullwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries in big sized view', 'BGE_kleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size.', 'BGE_kleider' ),
                  'default' => $defaultoptions['category-num-article-fullwidth'],
		'parent'  => 'category'
              ),
              'category-num-article-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Number of entries in half sized view', 'BGE_kleider' ),
                  'label'   => __( 'How many entries will be displayed in half width of content size.', 'BGE_kleider' ),
                  'liste'   => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8, 10=>10, 12=>12, 14=>14, 16=>16),
                  'default' => $defaultoptions['category-num-article-halfwidth'],
		  'parent'  => 'category'
              ),    
	    'category-teaser-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length of excerpt', 'BGE_kleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt.', 'BGE_kleider' ),
                  'default' => $defaultoptions['category-teaser-maxlength'],
		'parent'  => 'category'
              ),                 
             'category-teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'BGE_kleider' ),
                  'label'   => __( 'Title above thumbnail, date and text.', 'BGE_kleider' ),
                  'default' => $defaultoptions['category-teaser-titleup'],
                  'parent'  => 'category'
              ), 
              'category-teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Layout entry info', 'BGE_kleider' ),
                  'label'   => __( 'Sets a thumbnail, image, datebox, youtube-video or default image in front of excerpt. (Small entry teaser in half content width).', 'BGE_kleider' ),
                  'default' => $defaultoptions['category-teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Display datebox","BGE_kleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","BGE_kleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","BGE_kleider"),
				5 => __("Hide entry info","BGE_kleider")),

                  'parent'  => 'category'
              ), 
	    'category-teaser-floating' => array(
                'type'    => 'bool',
                'title'   => __( 'Floating excerpt', 'BGE_kleider' ),
                'label'   => __( 'Excerpt text will float around entry info.', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-floating'],
                'parent'  => 'category'
            ), 
	       
            'category-teaser-dateline' => array(
                'type'    => 'bool',
                'title'   => __( 'Date', 'BGE_kleider' ),
                'label'   => __( 'Show date as first line after title.', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-dateline'],
                'parent'  => 'category'
            ), 
               
            'category-teaser-maxlength-halfwidth' => array(
                'type'    => 'number',
                'title'   => __( 'Length of excerpt', 'BGE_kleider' ),
                'label'   => __( 'Maximum numbers of chars in excerpt.', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-maxlength-halfwidth'],
		'parent'  => 'category'
            ),                 
            'category-teaser-titleup-halfwidth' => array(
                'type'    => 'bool',
                'title'   => __( 'Title up', 'BGE_kleider' ),
                'label'   => __( 'Title above thumbnail, date and text.', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-titleup-halfwidth'],
                'parent'  => 'category'
            ), 
            'category-teaser-datebox-halfwidth' => array(
                'type'    => 'select',
                'title'   => __( 'Layout entry info', 'BGE_kleider' ),
                'label'   => __( 'Sets a thumbnail, image, datebox, youtube-video or default image in front of excerpt. (Small entry teaser in half content width).', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		'liste'   =>  array(
				0 => __("Display datebox","BGE_kleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","BGE_kleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","BGE_kleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","BGE_kleider"),
				5 => __("Hide entry info","BGE_kleider")), 

                'parent'  => 'category'
            ), 
	    'category-teaser-floating-halfwidth' => array(
                'type'    => 'bool',
                'title'   => __( 'Floating excerpt', 'BGE_kleider' ),
                'label'   => __( 'Excerpt text will float around entry info. (Small entry teaser in half content width).', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-floating-halfwidth'],
                'parent'  => 'category'
            ), 
            'category-teaser-dateline-halfwidth' => array(
                'type'    => 'bool',
                'title'   => __( 'Date', 'BGE_kleider' ),
                'label'   => __( 'Show date as first line after title.', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-dateline-halfwidth'],
                'parent'  => 'category'
            ), 
	    'continuelink'   => array(
                'type'    => 'select',
                'title'   => __( 'Show Continue', 'BGE_kleider' ),
                'label'   => __( 'Whether to display a continue reading link.', 'BGE_kleider' ),
                'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		'liste'   =>  array(
				0 => __("Only if entry text ist longer as excerpt","BGE_kleider"), 
				1 => __("Always","BGE_kleider"), 	    
			        2 => __("Never","BGE_kleider"), 	    
				), 
                'parent'  => 'category'
            ),  
               
    
	    'darstellungseiten'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Pages', 'BGE_kleider' ),
            ),
	       
	    'aktiv-defaultseitenbild' => array(
                'type'    => 'bool',
                'title'   => __( 'Default image for pages', 'BGE_kleider' ),
                'label'   => __( 'Display default image for pages without own thumbnail.', 'BGE_kleider' ),
                'default' => $defaultoptions['aktiv-defaultseitenbild'],
		'parent'  => 'darstellungseiten'
            ),	      
	    'seitenbild-size' => array(
                'type'    => 'select',
                'title'   => __( 'Size', 'BGE_kleider' ),
                'label'   => __( 'Sets maximum height for page image', 'BGE_kleider' ),
                'default' => $defaultoptions['seitenbild-size'],		                     
		'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		'parent'  => 'darstellungseiten'
            ),	
	    'seiten-defaultbildsrc' => array(
                'type'    => 'imageurl',
                'title'   => __( 'Default image', 'BGE_kleider' ),
                'label'   => __( 'Sets a default image.', 'BGE_kleider' ),
                'default' => $defaultoptions['src-default-symbolbild'],		                     
		'parent'  => 'darstellungseiten',
		'maxwidth' => 705,
		'maxheight' => 240,
            ),	
	
	
	    'darstellungartikel'  => array(
                'type'    => 'section',
                'title'   => __( 'Entries', 'BGE_kleider' ),
            ),
	       
	    'aktiv-artikelbild' => array(
                'type'    => 'bool',
                'title'   => __( 'Default image for entries', 'BGE_kleider' ),
                'label'   => __( 'Display default image for entries without own thumbnail.', 'BGE_kleider' ),		  
                'default' => $defaultoptions['aktiv-artikelbild'],
		'parent'  => 'darstellungartikel'
            ),
	    'artikelbild-size' => array(
                'type'    => 'select',
                'title'   => __( 'Size', 'BGE_kleider' ),
                'label'   => __( 'Sets maximum height for page image.', 'BGE_kleider' ),
                'default' => $defaultoptions['artikelbild-size'],		                     
                'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		'parent'  => 'darstellungartikel'
            ),	

	    'artikelbild-src'  => array(
                'type'    => 'imageurl',
                'title'   => __( 'Default image', 'BGE_kleider' ),
                'label'   => __( 'Sets a default image.', 'BGE_kleider' ),
                'default' =>  $defaultoptions['src-default-artikel-symbolbild'],
                'parent'  => 'darstellungartikel',
		'maxwidth' => 705,
		'maxheight' => 240,
            ),
	       	       
	    'darstellungindexseiten'  => array(
                'type'    => 'section',
                'title'   => __( 'Index pages', 'BGE_kleider' ),
            ),
              'aktiv-platzhalterbilder-indexseiten' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Default image on index pages', 'BGE_kleider' ),
                  'label'   => __( 'Display default image for index pages (archives, tags, search, ..).', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-platzhalterbilder-indexseiten'],
		  'parent'  => 'darstellungindexseiten'
              ),
	      'indexseitenbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Size', 'BGE_kleider' ),
                  'label'   => __( 'Sets maximum height for page image.', 'BGE_kleider' ),
                  'default' => $defaultoptions['indexseitenbild-size'],		                     
		  'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		  'parent'  => 'darstellungindexseiten'
              ),
	      	       
	     'src-default-symbolbild-404' => array(
		    'type'    => 'imageurl',
		    'title'   => __( 'Errorpage default image', 'BGE_kleider' ),
		    'label'   => __( 'Sets a default image for errorpages.', 'BGE_kleider' ),
		    'default' => $defaultoptions['src-default-symbolbild-404'],
		    'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ),
	     'src-default-symbolbild-category' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Category default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for category pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-category'],
                  'parent'  => 'darstellungindexseiten',
		  'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	      'src-default-symbolbild-tag' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Tag page default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for tag and tagclound pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-tag'],
                  'parent'  => 'darstellungindexseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-author' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Author page default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for an author page.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-author'],
                  'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-archive' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Archive default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for archive pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-archive'],
                  'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	        'src-default-symbolbild-search' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Search page default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for search form and result page.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-search'],
                  'parent'  => 'darstellungindexseiten',
		     'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-person' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Business card default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for business card pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-person'],
                  'parent'  => 'darstellungindexseiten',
		     'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       
	       
	      'src-default-symbolbild' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Template default image', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default image for template pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['src-default-symbolbild'],
                  'parent'  => 'darstellungindexseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ),  

	       
	      'kommentare'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Comments', 'BGE_kleider' ),
              ),
	     'aktiv-commentreplylink' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Reply for comments', 'BGE_kleider' ),
                  'label'   => __( 'Allow to answer directly to other comments instead of the entry only.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-commentreplylink'],	
		 'parent'   => 'kommentare'
              ),
	      'aktiv-commentsonpages' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Comments on pages', 'BGE_kleider' ),
                  'label'   => __( 'Activates comments on pages instead of entries only.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-commentsonpages'],	
		 'parent'   => 'kommentare'
              ),
              'comments_disclaimer'  => array(
                  'type'    => 'html',
                  'title'   => __( 'Disclaimer', 'BGE_kleider' ),
                  'label'   => __( 'Sets a default disclaimer text, which can be shown above the comment form.', 'BGE_kleider' ),
                  'default' => $defaultoptions['comments_disclaimer'],
		  'parent'   => 'kommentare'
              ),               
               'zeige_commentbubble_null' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Comment Number', 'BGE_kleider' ),
                  'label'   => __( 'Displays number of comments, even if there are currently none on an entry.', 'BGE_kleider' ),
                  'default' => $defaultoptions['zeige_commentbubble_null'],
		   'parent'   => 'kommentare'
              ),            
	       
          )
       ),
       
       'sidebar'   => array(
           'tabtitle'   => __('Sidebar', 'BGE_kleider'),
           'fields' => array(
                'seitenmenu'  => array(
                    'type'    => 'section',
                    'title'   => __( 'Menu', 'BGE_kleider' ),
                ),
                'seitenmenu_mode' => array(
                    'type'    => 'select',
                    'title'   => __( 'Taxonomy', 'BGE_kleider' ),
                    'label'   => __( 'Sets type of menu to display on sidebar on subpages.', 'BGE_kleider' ),
                    'default' => $defaultoptions['seitenmenu_mode'],
                    'liste'   => array(
                        0 => __("Use menu", 'BGE_kleider'), 
                        1 => __("Use page hierarchy", 'BGE_kleider')),
                    'parent'  => 'seitenmenu',
              ),
              'zeige_subpagesonly' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Display subpages', 'BGE_kleider' ),
                  'label'   => __( 'Displays submenu from current page only instead of complete menu.', 'BGE_kleider' ),
                  'default' => $defaultoptions['zeige_subpagesonly'],
                  'parent'  => 'seitenmenu',
              ),
              'zeige_sidebarpagemenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Display full taxonomy', 'BGE_kleider' ),
                  'label'   => __( 'Displays all pages in sidebar, even if they are not part of defined menu.', 'BGE_kleider' ),
                  'default' => $defaultoptions['zeige_sidebarpagemenu'],
                  'parent'  => 'seitenmenu',
              ),
              
              'newsletter' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Newsletter', 'BGE_kleider' ),
                  'label'   => __( 'Displays subscribe form of a defined newsletter or mailing list.', 'BGE_kleider' ),
                  'default' => $defaultoptions['newsletter'],
              ),
              'url-newsletteranmeldung' => array(
                  'type'    => 'url',
                  'title'   => __( 'Newsletter / Mailing list', 'BGE_kleider' ),
                  'label'   => __( 'Default URL for a subscription for a mailing list', 'BGE_kleider' ),
                  'default' => $defaultoptions['url-newsletteranmeldung'],
              ), 
              'plakate'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Posters', 'BGE_kleider' ),
              ),
              'slider-defaultwerbeplakate' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate poster slider', 'BGE_kleider' ),
                  'label'   => __( 'Activates a slider with defined posters or other images in sidebar.', 'BGE_kleider' ),
                  'default' => $defaultoptions['slider-defaultwerbeplakate'],
                   'parent'  => 'plakate',
              ),	   
	       
	      'plakate-src' => array(
                  'type'    => 'bilddirchecklist',
                  'title'   => __( 'Select poster', 'BGE_kleider' ),
                  'label'   => __( 'Select poster to display as slides in sidebar.', 'BGE_kleider' ),
                  'default' => $defaultoptions['dir-default-plakate'],		                     
		  'parent'  => 'plakate'
              ), 
	       
              'plakate-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Optional alternative text', 'BGE_kleider' ),
                  'label'   => __( 'Sets a text as alternative text on all poster slides.', 'BGE_kleider' ),
                  'default' => $defaultoptions['plakate-title'],
                  'parent'  => 'plakate',
              ),   
              'plakate-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Optional URL', 'BGE_kleider' ),
                  'label'   => __( 'Sets an URL as target on clicking on poster slides.', 'BGE_kleider' ),
                  'default' => $defaultoptions['plakate-url'],
                  'parent'  => 'plakate',
              ),   
              'plakate-altadressen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Upload and select other posters', 'BGE_kleider' ),
                  'label'   => __('Manage other images to use for slider.', 'BGE_kleider'),
                  'default' => $defaultoptions['plakate-altadressen'],
                  'parent'  => 'plakate',
              ),   
               
              'teaser1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaser 1', 'BGE_kleider' ),                      
              ),
               'teaserlink1-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'BGE_kleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink1-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink1',
              ),
               'teaserlink1-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title', 'BGE_kleider' ),
                  'label'   => __( 'Short text as link title.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink1-title'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'BGE_kleider' ),
                  'label'   => __( 'Small text for second line.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink1-untertitel'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'BGE_kleider' ),
                  'label'   => __( 'Link target.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink1-url'],
                    'parent'  => 'teaserlink1',
              ),
              'teaser2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaser 2', 'BGE_kleider' ),                      
              ),
               'teaserlink2-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'BGE_kleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink2-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink2',
              ),
               'teaserlink2-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title', 'BGE_kleider' ),
                  'label'   => __( 'Short text as link title.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink2-title'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'BGE_kleider' ),
                  'label'   => __( 'Small text for second line.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink2-untertitel'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'BGE_kleider' ),
                  'label'   => __( 'Link target.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink2-url'],
                    'parent'  => 'teaserlink2',
              ),  
                'teaser3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaser 3', 'BGE_kleider' ),                      
              ),
               'teaserlink3-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'BGE_kleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink3-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink3',
              ),
               'teaserlink3-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title', 'BGE_kleider' ),
                  'label'   => __( 'Short text as link title.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink3-title'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'BGE_kleider' ),
                  'label'   => __( 'Small text for second line.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink3-untertitel'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'BGE_kleider' ),
                  'label'   => __( 'Link target.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaserlink3-url'],
                    'parent'  => 'teaserlink3',
              ),  
               
               
          )
       ),
       
       'socialmedia'   => array(
           'tabtitle'   => __('Social Media', 'BGE_kleider'),
           'fields' => array(
              
              'alle-socialmediabuttons' => array(
                  'type'    => 'select',
                  'title'   => __( 'Position', 'BGE_kleider' ),
                  'label'   => __( 'Where to display the social media buttons (depending on design).', 'BGE_kleider' ),
                  'liste'   => array(
		      0 => __( 'Do not display social media buttons', 'BGE_kleider' ) ,  
		      1 => __( 'Header', 'BGE_kleider' ), 
		      2 => __( 'Aside of content', 'BGE_kleider' )),
                  'default' => $defaultoptions['alle-socialmediabuttons'],
              ),  
	      'sm-list'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Social Media sites', 'BGE_kleider' ),
		  'liste'   => $default_socialmedia_liste,
	      ), 
	                      
          )
       ),
	'design'   => array(
           'tabtitle'   => __( 'Design', 'BGE_kleider' ),
           'fields' => array(
            
	       'style'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stylesheet', 'BGE_kleider' ),
              ),
	      'aktiv-alternativestyle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Change base design', 'BGE_kleider' ),
                  'label'   => __( 'Switches stylesheet to one of the following subdesigns.', 'BGE_kleider' ),
                  'default' => 'style.css',
                  'liste'   =>  $default_alternativestyles,
		  'parent'  => 'style', 
              ),

	    'css-colorfile' => array(
                  'type'    => 'select',
                  'title'   => __( 'Color subset', 'BGE_kleider' ),
                  'label'   => __( 'Changes colors of website (only by using BGE_kleider base stylesheet).', 'BGE_kleider' ),
                  'default' => '-',
                  'liste'   => $default_colorstyles,
		   'parent'  => 'style', 
              ),
              'aktiv-stylefile' => array(
                  'type'    => 'file',
                  'title'   => __( 'CSS file', 'BGE_kleider' ),
                  'label'   => __( 'Uploads an own CSS file.', 'BGE_kleider' ),
		   'parent'  => 'style',   
              ),
               'stylefile-position' => array(
                  'type'    => 'select',
                  'title'   => __( 'Order for css file', 'BGE_kleider' ),
                  'label'   => __( 'Sets priority and order for own css file in relation to theme files.', 'BGE_kleider' ),
                  'default' => 0,
                  'liste'   => array(
		      0 => __('None (Deactive)', 'BGE_kleider'),
                      1 => __('Previews (uses own css first, then theme files)', 'BGE_kleider'),
                      2 => __('After (uses theme files first, then own css file)', 'BGE_kleider'),
                      3 => __('Own css + colors/fonts (uses own css, do not load base css, but colors and fonts)', 'BGE_kleider'),
		      4 => __('Only (do not use any other css files)', 'BGE_kleider'),
                  ),
		  'parent'  => 'style', 
              ),  
              'aktiv-hamburger'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Hamburger Menu', 'BGE_kleider' ),
                  'label'   => __( 'Activates hamburger menu on small screen sizes.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-hamburger'],
		  'parent' => 'style',
              ),	       
	       
            'background'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Body background', 'BGE_kleider' ),
              ),
            'alt-body-background' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Alternative body background', 'BGE_kleider' ),
                  'label'   => __( 'Sets another background image for body; overwrites setting of CSS file.', 'BGE_kleider' ),
                  'default' => '',
                  'parent'  => 'background',
              ),   
             'alt-body-background-orix' => array(
                  'type'    => 'select',
                  'title'   => __( 'Horizontal orientation', 'BGE_kleider' ),
                  'label'   => __( 'Defines the orientation at x-axis', 'BGE_kleider' ),
                  'default' =>  'left',
                  'liste'   => array(
                      'left'=> __('left','BGE_kleider'),
                      'center' => __('center','BGE_kleider'),
                      'right' => __('right','BGE_kleider'),
                      ),
                  'parent'  => 'background',
              ),     
              'alt-body-background-oriy' => array(
                  'type'    => 'select',
                  'title'   => __( 'Vertical orientation', 'BGE_kleider' ),
                  'label'   => __( 'Defines the orientation at y-axis', 'BGE_kleider' ),
                  'default' => 'top',
                  'liste'   => array(
                     'top'=> __('top','BGE_kleider'),
                      'center' => __('center','BGE_kleider'),
                      'bottom' => __('bottom','BGE_kleider'),
                      ),
                  'parent'  => 'background',
              ), 
               'alt-body-background-repeat' => array(
                  'type'    => 'select',
                  'title'   => __( 'Repeat', 'BGE_kleider' ),
                  'label'   => __( 'Repeats the background image or not', 'BGE_kleider' ),
                  'default' => 'repeat',
                  'liste'   => array(
                      'repeat' => __('repeat','BGE_kleider'),
                      'repeat-x' => __('repeat-x','BGE_kleider'),
                      'repeat-y' => __('repeat-y','BGE_kleider'),
                      'no-repeat' => __('no-repeat','BGE_kleider'),
                      ),
                  'parent'  => 'background',
              ), 
               'fonts'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Fonts', 'BGE_kleider' ),
              ), 
              'fonts-headers' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Title fonts', 'BGE_kleider' ),
                  'label'   => __( 'Changes font at titles.', 'BGE_kleider' ),
                  'default' => $defaultoptions['fonts-headers'],
                  'liste'   => $default_fonts,
		  'parent'  => 'fonts', 
              ), 
              'fonts-menuheaders' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Menu fonts', 'BGE_kleider' ),
                  'label'   => __( 'Changes font for menu items.', 'BGE_kleider' ),
                  'default' => $defaultoptions['fonts-menuheaders'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'fonts', 
              ),                
              'fonts-content' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Text font', 'BGE_kleider' ),
                  'label'   => __( 'Changes font for text content.', 'BGE_kleider' ),
                  'default' => $defaultoptions['fonts-content'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'fonts', 
              ),               
	     
	      'aktiv-linkicons' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate link icons', 'BGE_kleider' ),
                  'label'   => __( 'Displays link icons at known target URLs and document types.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-linkicons'],         
		  	  'parent'  => 'fonts', 
              ),

             
              'breadcrumb'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Breadcrumb', 'BGE_kleider' ),
              ),
	      'zeige_breadcrump'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate', 'BGE_kleider' ),
                  'label'   => __( 'Display breadcrumb', 'BGE_kleider' ),
                  'default' => $defaultoptions['zeige_breadcrump'],
		  'parent' => 'breadcrumb',
              ),	       
	       'zeige_breadcrump_frontpages'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Breadcrumb on start page', 'BGE_kleider' ),
                  'label'   => __( 'Display breadcrumb also on start or front pages.', 'BGE_kleider' ),
                  'default' => $defaultoptions['zeige_breadcrump_frontpages'],
		   'parent' => 'breadcrumb',
              ),
	     
	       

	       
	       
	      'miscdesign'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Other options', 'BGE_kleider' ),
              ),
	       
	     'favicon-file' => array(
                  'type'    => 'image',
                  'title'   => __( 'Favicon', 'BGE_kleider' ),
                  'label'   => __( 'Set an own favicon file for your website.', 'BGE_kleider' ),
		  'parent' => 'miscdesign',
		  'maxwidth' =>  64,
		  'maxheight'=>  64,
              ),
	       'src-teaser-thumbnail_default'=> array(
                  'type'    => 'image',
                  'title'   => __( 'Fallback thumbnail', 'BGE_kleider' ),
                  'label'   => __( 'Defines an image as default thumbnail for entries on index pages.', 'BGE_kleider' ),
		  'parent' => 'miscdesign',
		  'maxwidth' =>  64,
		  'maxheight'=>  64,
              ),
	       
	      'css-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'CSS', 'BGE_kleider' ),
                  'label'   => __( 'Adds own CSS commands to the website.', 'BGE_kleider' ),
                  'default' => '',
		    'parent' => 'miscdesign',
              ),
	       'html-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'HTML', 'BGE_kleider' ),
                  'label'   => __( 'Adds own HTML commands at the end of the page (after footer, just before &lt;/body&gt;&lt;/html&gt;).', 'BGE_kleider' ),                  'default' => '',
		  'parent' => 'miscdesign',
              ),
	     
              'dimensions'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Image Dimensions', 'BGE_kleider' ),
              ), 
               
               
               
               'teaser-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Teaser Thumb Width', 'BGE_kleider' ),
                  'label'   => __( 'Width in px for thumbnail in teasers.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'teaser-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Teaser Thumb Height', 'BGE_kleider' ),
                  'label'   => __( 'Height in px for thumbnail in teasers.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-thumbnail_height'],
                   'parent'  => 'dimensions',
                ),              
                'teaser-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'BGE_kleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'BGE_kleider' ),
                  'default' => $defaultoptions['teaser-thumbnail_crop'],
		  'parent' => 'dimensions',
                ),


                'linktipp-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Bookmark Thumb Width', 'BGE_kleider' ),
                  'label'   => __( 'Width in px for thumbnail in bookmarks.', 'BGE_kleider' ),
                  'default' => $defaultoptions['linktipp-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'linktipp-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Bookmark Thumb Height', 'BGE_kleider' ),
                  'label'   => __( 'Height in px for thumbnail in bookmarks.', 'BGE_kleider' ),
                  'default' => $defaultoptions['linktipp-thumbnail_height'],
                   'parent'  => 'dimensions',
                ),  
               'linktipp-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'BGE_kleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'BGE_kleider' ),
                  'default' => $defaultoptions['linktipp-thumbnail_crop'],
		  'parent' => 'dimensions',
              ),
               

                'person-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Person Thumb Width', 'BGE_kleider' ),
                  'label'   => __( 'Width in px for thumbnail in business cards', 'BGE_kleider' ),
                  'default' => $defaultoptions['person-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'person-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Person Thumb Height', 'BGE_kleider' ),
                  'label'   => __( 'Height in px for thumbnail in business cards', 'BGE_kleider' ),
                  'default' => $defaultoptions['person-thumbnail_height'],
                   'parent'  => 'dimensions',
                ),  
                'person-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'BGE_kleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'BGE_kleider' ),
                  'default' => $defaultoptions['person-thumbnail_crop'],
		  'parent' => 'dimensions',
                ),
 
                'sidebar-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Sidebar Thumb Width', 'BGE_kleider' ),
                  'label'   => __( 'Width in px for sidebar thumbs', 'BGE_kleider' ),
                  'default' => $defaultoptions['sidebar-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'sidebar-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Sidebar Thumb Height', 'BGE_kleider' ),
                  'label'   => __( 'Height in px for sidebar thumbs', 'BGE_kleider' ),
                  'default' => $defaultoptions['sidebar-thumbnail_height'],
                   'parent'  => 'dimensions',
                ), 
                'sidebar-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'BGE_kleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'BGE_kleider' ),
                  'default' => $defaultoptions['sidebar-thumbnail_crop'],
		  'parent' => 'dimensions',
        ),
               
               
               
               
          )
       ),
       
       
       'sonstiges'   => array(
           'tabtitle'   => __('Misc', 'BGE_kleider'),
           'fields' => array(
	       'reset_options' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Reset', 'BGE_kleider' ),
                  'label'   => __( 'Resets all options to default.', 'BGE_kleider' ),
                  'default' => 0,
		  'mark_option' => 1,
              ),    
                                                
              'login_errors' => array(
                  'type'    => 'select',
                  'title'   => __( 'Error message on login', 'BGE_kleider' ),
                  'label'   => __( 'Choose whether error messages will be displayed on login screen. The error message could make it easier to guess valid login names.', 'BGE_kleider' ),
                  'liste'   => array(
                      1 => __( 'Display error message', 'BGE_kleider' ), 
                      0 => __( 'Do not display anything', 'BGE_kleider' )),
                  'default' => 1,
              ),

             	       
             
              
	     
              'yt-alternativeembed' => array(
                  'type'    => 'bool',
                  'title'   => __( 'YouTube', 'BGE_kleider' ),
                  'label'   => __( 'Embedded YouTube-Links as an inline video-frame from youtube-nocookie.com', 'BGE_kleider' ),
                  'default' => $defaultoptions['yt-alternativeembed'],
              ),  
	       
	      
	       
              'anonymitaet'  => array(
                  'type'    => 'section',
                  'title'   => __('Security', 'BGE_kleider'),         
              ),  
               
              'aktiv-autoren' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Show author', 'BGE_kleider' ),
                  'label'   => __( 'Displays the author of entries or pages at content information.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-autoren'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Anonymize comment user', 'BGE_kleider' ),
                  'label'   => __( 'Anonymize IP-Address and User-Agent-String and disables entry form for email. Will allow comment user to stay anonym, even against backend admins.', 'BGE_kleider' ),
                  'default' => $defaultoptions['anonymize-user'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user-commententries' => array(
                  'type'    => 'select',
                  'title'   => __( 'Identification', 'BGE_kleider' ),
                  'label'   => __( 'Form fields for comment user, allowing them to identify themselves', 'BGE_kleider' ),
                  'liste'   => array( 0 => "Name, URL,  E-Mail (Wordpress-Default)", 1=> "Name", 2 => "Name, URL"),
                  'default' => $defaultoptions['anonymize-user-commententries'],
                  'parent'  => 'anonymitaet',
              ),
              'aktiv-avatar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Show avatar', 'BGE_kleider' ),
                  'label'   => __( 'Activates use of services, show author avatars. Notice: This will allow avatar services to track users on this website.', 'BGE_kleider' ),
                  'default' => $defaultoptions['aktiv-avatar'],
                  'parent'  => 'anonymitaet',
              ),               
             'feed-overwriteauthorstring' => array(
                  'type'    => 'text',
                  'title'   => __( 'Feed author', 'BGE_kleider' ),
                  'label'   => __( 'Sets author name for rss feeds. This overwrites authorname from backend.', 'BGE_kleider' ),
                  'parent'  => 'anonymitaet',
              ),  
               
              'meta'  => array(
                  'type'    => 'section',
                  'title'   => __('Meta fields', 'BGE_kleider'),                   
              ),               
               'meta-author' => array(
                  'type'    => 'text',
                  'title'   => __( 'Author', 'BGE_kleider' ),
                  'label'   => __( 'Optional authorname for website on every page.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),  
                'meta-description' => array(
                  'type'    => 'text',
                  'title'   => __( 'Description', 'BGE_kleider' ),
                  'label'   => __( 'Optional description of website on every page.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),  
               'meta-keywords' => array(
                  'type'    => 'text',
                  'title'   => __( 'Keywords', 'BGE_kleider' ),
                  'label'   => __( 'Sets a list of keywords on every page.', 'BGE_kleider' ),
                  'parent'  => 'meta',                    
              ),   
	       'meta-verify-v1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Google Verify', 'BGE_kleider' ),
                  'label'   => __( 'Optional text field to enter a code for Google Verify.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),  

	       'aktiv-autokeywords'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Use tags for keywords', 'BGE_kleider' ),
                  'label'   => __( 'Generates keywords using known tags.', 'BGE_kleider'),
                  'default' => $defaultoptions['aktiv-autokeywords'],
                  'parent'  => 'meta',
              ),           
          	       'linktipps'  => array(
                  'type'    => 'section',
                  'title'   => __('Bookmarks', 'BGE_kleider'),                   
              ),            

               
              'linktipps-titlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Title', 'BGE_kleider' ),
                  'label'   => __( 'Sets the position of bookmark title', 'BGE_kleider'),		   
                  'default' => $defaultoptions['linktipps-titlepos'],
                  'liste'   => array( 
                        0   => __("On top of text or/and image", 'BGE_kleider'), 
                        1   => __("Below of text or/and image", 'BGE_kleider')),
                  'parent'  => 'linktipps',
              ),
                'linktipps-subtitlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Subtitle', 'BGE_kleider' ),
                  'label'   => __( 'Sets the position of subtitle', 'BGE_kleider'),		   
                  'default' => $defaultoptions['linktipps-subtitlepos'],
                  'liste'   => array( 
                       0 => __("Top", 'BGE_kleider'),
                        1 => __("Bottom", 'BGE_kleider')),
                  'parent'  => 'linktipps',
              ),
              'linktipps-linkpos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Link', 'BGE_kleider' ),
                  'label'   => __( 'Wether to set the target link.', 'BGE_kleider'),		   
                  'default' => $defaultoptions['linktipps-linkpos'],
                  'liste'   => array( 
                      0 => __( 'Link on title', 'BGE_kleider' ),
                      1 => __( 'Link on text and/or image', 'BGE_kleider' ),
                      2 => __( 'Show URL below of text and/or image', 'BGE_kleider' ),
                      3 => __( 'Link on title and on URL below of text and/or image', 'BGE_kleider' )),
                  'parent'  => 'linktipps',
              ),
             
	      
               
          ),
	),          
       'opengraph' => array(
           'tabtitle'   => __('OpenGraph / Schema', 'BGE_kleider'),
           'fields' => array(
                'meta'  => array(
                  'type'    => 'section',
                  'title'   => __('General Meta', 'BGE_kleider'),                   
              ),      
              'meta-itemtype-aboutpage' => array(
                  'type'    => 'text',
                  'title'   => __( 'Itemtype AboutPage', 'BGE_kleider' ),
                  'label'   => __( 'Enter ID or title to set the item type of this page to "AboutPage".', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-contactpage' => array(
                  'type'    => 'text',
                  'title'   => __( 'Itemtype ContactPage', 'BGE_kleider' ),
                  'label'   => __( 'Enter ID or title to set the item type of this page to "ContactPage".', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-ptype1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Post Type 1', 'BGE_kleider' ),
                  'label'   => __( 'Enter a custom post type.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-cst1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Item Type 1', 'BGE_kleider' ),
                  'label'   => __( 'Enter a custom schema.org microdata item type.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-ptype2' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Post Type 2', 'BGE_kleider' ),
                  'label'   => __( 'Enter a custom post type.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-cst2' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Item Type 2', 'BGE_kleider' ),
                  'label'   => __( 'Enter a custom schema.org microdata item type.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-org-name' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Name', 'BGE_kleider' ),
                  'label'   => __( 'Enter a custom name for your organization. If left empty the name of your blog will be used.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-org-desc' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Description', 'BGE_kleider' ),
                  'label'   => __( 'Enter a custom description of your organization. If left empty blog description will be used.', 'BGE_kleider' ),
                  'parent'  => 'meta',
              ),
               
            'og'  => array(
                  'type'    => 'section',
                  'title'   => __('Open Graph', 'BGE_kleider'),                   
              ),          
             'open_graph-active'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate Open Graph', 'BGE_kleider' ),
                  'label'   => __( 'Activates Open Graph Meta Tags from BGE_kleider', 'BGE_kleider' ),
                  'default' => $defaultoptions['open_graph-active'],
                  'parent'  => 'og',
              ),    
            'open_graph-twitterhandle'   => array(
                  'type'    => 'text',
                  'title'   => __( 'Twitter Handle', 'BGE_kleider' ),
                  'label'   => __( 'Twitter Nick without @ for Twitter Cards', 'BGE_kleider' ),
                  'parent'  => 'og',
              ), 
               
           )
       ),
       'crew'   => array(
           'tabtitle'   => __( 'Contact informations', 'BGE_kleider' ),
           'fields' => array(
	        'impressum'  => array(
                  'type'    => 'section',
                  'title'   => __('Imprint', 'BGE_kleider'),                   
		),               
               'impressumperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Responsible person', 'BGE_kleider' ),
                  'label'   => __( 'Name of responsible person for website', 'BGE_kleider' ),
		   'default'	=> '',
                  'parent'  => 'impressum',
		),  
                'impressumdienstanbieter' => array(
                  'type'    => 'text',
                  'title'   => __( 'Service provider', 'BGE_kleider' ),
                  'label'   => __( 'Public contact name for website owner.', 'BGE_kleider' ),
                  'parent'  => 'impressum',		    
		), 
	       'kontaktemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'Contact email', 'BGE_kleider' ),
                  'label'   => __( 'Public email address for contacting website owner.', 'BGE_kleider' ),
                  'parent'  => 'impressum',		    
		), 
               'kontakttelefon' => array(
                  'type'    => 'text',
                  'title'   => __( 'Phone', 'BGE_kleider' ),
                  'label'   => __( 'Phone number.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
               'kontaktfax' => array(
                  'type'    => 'text',
                  'title'   => __( 'Fax', 'BGE_kleider' ),
                  'label'   => __( 'Fax number', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
       
	       'lizenzen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Copyright informations', 'BGE_kleider' ),
                  'label'   => __( 'Addition field for copyright informations.', 'BGE_kleider' ),
                  'parent'  => 'impressum',		    
		), 
	       
	      'postanschrift'  => array(
                  'type'    => 'section',
                  'title'   => __('Postal address', 'BGE_kleider'),                   
		),  
      
               'posttitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'BGE_kleider' ),
                  'label'   => __( 'First line for postal contact form. E.g. Name of party.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		),  
                'postperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Additional contact line', 'BGE_kleider' ),
                  'label'   => __( 'Second line for postal contact form. E.g. to address someone special.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		 ),   
		'poststrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Street', 'BGE_kleider' ),
                  'label'   => __( 'Street and house number', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
		'poststadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'Postal code and town', 'BGE_kleider' ),
                  'label'   => __( 'Sets postal code and town for contact information.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
                
	       'ladung'  => array(
                  'type'    => 'section',
                  'title'   => __('Postal contact address for matters of law', 'BGE_kleider'),                   
		),               
               'ladungtitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'BGE_kleider' ),
                  'label'   => __( 'First line for postal contact form. E.g. Name of party.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		),  
                'ladungperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Additional name info', 'BGE_kleider' ),
                  'label'   => __( 'Second line for postal contact form. E.g. to address someone special.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		 ),   
		'ladungstrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Street', 'BGE_kleider' ),
                  'label'   => __( 'Street and house number.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 
		'ladungstadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'Postal code and town', 'BGE_kleider' ),
                  'label'   => __( 'Sets postal code and town for contact information.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 

	       
	       
	       'dsb'  => array(
                  'type'    => 'section',
                  'title'   => __('Privacy policy', 'BGE_kleider'),                   
		),               
               'dsbperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'BGE_kleider' ),
                  'label'   => __( 'Sets a name for someone responsible for questions concerning data protection.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		),  
                'dsbemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'Email address', 'BGE_kleider' ),
                  'label'   => __( 'Sets an email address.', 'BGE_kleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		 ),   
		

	  
	),   
      ),
   )
);

