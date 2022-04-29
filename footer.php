<?php wp_footer(); ?>

<footer class="page-footer theme-bg">

  <div class="footer-copyright theme-bg theme-border">
    <div class="container">
  
			<div class="row">      	        
      
        <div class="col m6 s12">
          <div style="display:inline-block">
            <div class="hide-on-med-and-up" style="margin: 0.6rem 0 0.8rem">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-nav',
                  'menu_class' => 'nav--footer',
                )
              );  
            ?>
<!--             
              <p class="no-margin no-padding small-link">
                <a href="../terms-and-conditions/" class="no-margin no-padding small-link theme-text2">Terms and Conditions.</a>
              </p>
              <p class="no-margin no-padding small-link">  
                <a href="../privacy-policy/" class="no-margin no-padding small-link theme-text2">Privacy Policy.</a>
              </p> -->


              <!-- <p class="no-margin no-padding small-link theme-text">Website by
                <a class="wired theme-text2" href="http://www.wiredprogress.co.uk/" target="_blank"><span>wired</span>progress</a>
              </p> -->
            </div>
            <!-- <p class="hide-on-small-only theme-text2">Website by
            	<a class="wired theme-text2" href="http://www.wiredprogress.co.uk/" target="_blank"><span>wired</span>progress</a>
            </p> -->
          </div>

          
        </div>
        
        <div class="col m6 s12 hide-on-small-only">
          <div class="right">
          <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-nav',
                  'menu_class' => 'nav--footer',
                )
              );  
            ?>
            
          </div>
        </div>     

      </div>    
    
    
    </div>
  </div>
</footer>



</body>
</html>