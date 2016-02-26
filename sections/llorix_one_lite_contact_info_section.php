<!-- =========================
 SECTION: CONTACT INFO  
============================== -->
<?php
	$llorix_one_lite_contact_info_item = get_theme_mod('llorix_one_lite_contact_info_content',
		json_encode(
			array( 
					array("icon_value" => "icon-basic-mail" ,"text" => "contact@site.com", "link" => "#",'id' => 'llorix_one_lite_56d069b78cb6e' ), 
					array("icon_value" => "icon-basic-geolocalize-01" ,"text" => "Company address", "link" => "#",'id' => 'llorix_one_lite_56d069b88cb6f' ), 
					array("icon_value" => "icon-basic-tablet" ,"text" => "0 332 548 954", "link" => "#",'id' => 'llorix_one_lite_56d069b98cb70' ) 
				)
		)
	);

	if( !llorix_one_lite_general_repeater_is_empty($llorix_one_lite_contact_info_item) ){
		$llorix_one_lite_contact_info_item_decoded = json_decode($llorix_one_lite_contact_info_item);
	?>
			<div class="contact-info" id="contactinfo" role="region" aria-label="<?php esc_html_e('Contact Info','llorix-one-lite'); ?>">
				<div class="section-overlay-layer">
					<div class="container">

						<!-- CONTACT INFO -->
						<div class="row contact-links">

							<?php

								if(!empty($llorix_one_lite_contact_info_item_decoded)){

										foreach($llorix_one_lite_contact_info_item_decoded as $llorix_one_contact_item){
											if(!empty($llorix_one_contact_item->link)){
												echo '<div class="col-sm-4 contact-link-box col-xs-12">';
												if(!empty($llorix_one_contact_item->icon_value)){
													if(function_exists('icl_t')){
														echo '<div class="icon-container"><span class="'.icl_t('Contact icon',$llorix_one_contact_item->id.'_contact_icon',esc_attr($llorix_one_contact_item->icon_value)) .' colored-text"></span></div>';
													} else {
														echo '<div class="icon-container"><span class="'.esc_attr($llorix_one_contact_item->icon_value).' colored-text"></span></div>';
													}
												}
												if(!empty($llorix_one_contact_item->text)){
													if(function_exists('icl_t')){
														echo '<a href="'.icl_t('Contact link',$llorix_one_contact_item->id.'_contact_link',esc_url($llorix_one_contact_item->link)).'" class="strong">'.icl_t('Contact',$llorix_one_contact_item->id.'_contact',html_entity_decode($llorix_one_contact_item->text)).'</a>';
													} else {
														echo '<a href="'.$llorix_one_contact_item->link.'" class="strong">'.html_entity_decode($llorix_one_contact_item->text).'</a>';
													}
												}
												echo '</div>';
											} else {

												echo '<div class="col-sm-4 contact-link-box  col-xs-12">';
												if(!empty($llorix_one_contact_item->icon_value)){
													if(function_exists('icl_t')){
														echo '<div class="icon-container"><span class="'.icl_t('Contact icon',$llorix_one_contact_item->id.'_contact_icon',esc_attr($llorix_one_contact_item->icon_value)).' colored-text"></span></div>';
													} else {
														echo '<div class="icon-container"><span class="'.esc_attr($llorix_one_contact_item->icon_value).' colored-text"></span></div>';
													}
												}
												if(!empty($llorix_one_contact_item->text)){
													if(function_exists('icl_t')){
														echo '<a href="" class="strong">'.icl_t('Contact',$llorix_one_contact_item->id.'_contact',html_entity_decode($llorix_one_contact_item->text)).'</a>';
													} else {
														echo '<a href="" class="strong">'.html_entity_decode($llorix_one_contact_item->text).'</a>';
													}
												}
												echo '</div>';
											}
										}
								}

							?>         
						</div><!-- .contact-links -->
					</div><!-- .container -->
				</div>
			</div><!-- .contact-info -->
<?php
	} 
?>