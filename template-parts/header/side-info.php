<?php 
   $personal_side_email = get_theme_mod( 'personal_side_email', __('info@example.com', 'persona')); 
   $personal_side_phone = get_theme_mod( 'personal_side_phone', __('+964 742 44 763', 'persona')); 
   $personal_side_button = get_theme_mod( 'personal_side_button', __('Getting Started', 'persona')); 
   $personal_side_button_url = get_theme_mod( 'personal_side_button_url', __('#', 'persona')); 
   
   $personal_logo_switch = get_theme_mod( 'logo_switch', true); 
?> 

<!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__area-1">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__shape">
               <img class="offcanvas__shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/offcanvas-shape-1.png" alt="">
            </div>
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
                <?php if(!empty($personal_logo_switch)): ?>
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                    <?php persona_side_logo(); ?>
                  </div>
               </div>
               <?php endif; ?>
               <div class="mobile-menu fix d-lg-none"></div>
               <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                  <nav>
                    <?php persona_side_menu(); ?>
                  </nav>
               </div>
               <?php if(!empty($personal_side_button)): ?>
               <div class="offcanvas__btn">
                  <a href="<?php echo esc_html( $personal_side_button_url ); ?>" class="tp-btn-offcanvas"><?php echo esc_html( $personal_side_button ); ?><i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <?php endif; ?>
               <div class="offcanvas__social">
                  <h3 class="offcanvas__social-title"><?php echo esc_html( 'Follow :', 'persona' ) ?></h3>
                    <?php persona_social_icon(); ?>
               </div>
               <div class="offcanvas__contact">

                <?php if(!empty($personal_side_phone)): ?>
                  <p class="offcanvas__contact-call"><a href="tel:<?php echo esc_url( $personal_side_phone ); ?>"><?php echo esc_html( $personal_side_phone ); ?></a></p>
                  <?php endif; ?>

                  <?php if(!empty($personal_side_email)): ?>
                  <p class="offcanvas__contact-mail"><a href="<?php echo esc_url( $personal_side_email ); ?>"><?php echo esc_html( $personal_side_email ); ?></a></p>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->