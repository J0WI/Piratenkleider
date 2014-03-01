<?php
/* 
 Template Name: Aktionpage
 */
?>
<?php get_header('menuless');
    global $defaultoptions;
    global $options;
?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">     
	
	
	<?php 
	   if ( have_posts() ) while ( have_posts() ) : the_post();         
		$custom_fields = get_post_custom();
                $attribs = array(
                    "credits" => $options['img-meta-credits'],
                );
     
		$image_url = '';
		$image_alt = '';
		if (has_post_thumbnail()) { 
		    $thumbid = get_post_thumbnail_id(get_the_ID());
		     // array($options['bigslider-thumb-width'],$options['bigslider-thumb-height'])
		    $image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
		    $image_url = $image_url_data[0];
		    $attribs = piratenkleider_get_image_attributs($thumbid);
		}

		if (isset($image_url) && (strlen($image_url)>4)) { 
		    if ($options['seitenbild-size']==1) {
			echo '<div class="content-header-big">';
		    } else {
			echo '<div class="content-header">';
		    }
		    ?>
			<header>
			    <h1 class="post-title"><span><?php the_title(); ?></span></h1>
			</header>	    
		       <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">
                        <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  ?>
		       </div>
		    </div>  	
		<?php } ?>

	     <div class="skin">
	    <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
		<header><h1 class="post-title"><span><?php the_title(); ?></span></h1></header>
	    <?php } 
		echo '<article>';
		   the_content(); 
		echo '</article>';
	    if ($options['aktiv-commentsonpages']==1) {
		echo '<div class="post-comments" id="comments">';
		 comments_template( '', true );
		echo '</div>';  
	    }    


	    wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) );                   
	    edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' );
        endwhile; 
	?>
      </div>
    </div>
    <?php 
	$nosidebar = get_post_meta( get_the_ID(), 'piratenkleider_nosidebar', true ); 
	if( !empty( $nosidebar ) && $nosidebar==1) {
	    echo "<!-- no sidebar -->\n";
	} else { ?>
    <div class="content-aside">
      <div class="skin">                
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
          
            <?php
	    
	    $custom_fields = get_post_custom();
	      if (isset($custom_fields['piratenkleider_sidebar-content'])) {
		    $text = $custom_fields['piratenkleider_sidebar-content'][0];
	      } elseif (isset($custom_fields['right_column'])) {
		  /* Look for variable as in V2 for downwards compatibility ... */
		    $text = $custom_fields['right_column'][0];
	      }


	    if  (isset($text) 
			&& (strlen(trim($text))>0)) {
		echo '<div class="">';
		echo do_shortcode($text); 
		echo "</div>\n";
	    }
	    get_sidebar(); 
             ?>
      </div>
    </div>
	<?php } ?>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
