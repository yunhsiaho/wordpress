<div class="dev-restaurant">
    <!-- <div class="shapeDivider mb-5"><?php dynamic_sidebar('footer-area-divider');?></div> -->
    <div class="row p-5 text-white">
      <div class="col-md-6 p-5">
        <h3 class="text-left h1">Dev Restaurant</h3>
        <div class="col-md-6">
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium rerum repellendus obcaecati eum magni impedit, alias.</p>
      </div>
      </div>
    <!-- ICONS ROW -->
      <div class="col-md-6 ml-5 d-flex justify-content-center align-items-center">
        <div class="row w-100 ml-5 justify-content-center">
        <div class="mr-2 network" id="twitter">
                <img  src="./assets/svg/twitter.svg" alt="">
        </div>
        <div class="mr-2 network" id="facebook">
                <img  src="./assets/svg/linkedin.svg" alt="">
        </div>
        <div class="mr-2 network" id="instagram">
                <img  src="./assets/svg/instagram.svg" alt="">
        </div>
        <div class="mr-2 network" id="linkedin">
                <img  src="./assets/svg/linkedin.svg" alt="">
        </div>
        </div>
      </div>
    </div>
    <div class="opening-hours">
        <div class="row p-5 d-flex text-white">
        <div class="col-md-4 p-5">
            <h5 class="h5">Open hours</h5>
            <div class="gridHr">
              <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="" alt=""></div>
              <div class="weekdays">Mondays   -------------Closed</div>               
              <div class="weekdays">Tue - Fri --------------10am-12am</div> 
              <div class="weekdays">Sat - Sun -------------7am-1am</div> 
              <div class="weekdays">Public Holidays  --------7am-1am</div> 
              <!-- <div class="middle"><hr></div> -->
              <div class="rightSide"><?php the_field('monday', 'options');?></div>
          </div>
        </div> 
        <div class="col-md-8 mt-5 justify-content-center align-items-center">
        <div class="row w-100 ml-5 justify-content-center">
        <h5 class="h5">Contact us</h5>
          </div>
          <div class="row w-100 mt-2 justify-content-center">
            <!-- <button type="button" class=" w-25 bg-white text-dark subscribe-btn">SUBSCRIBE</button> -->
      </div>
      </div> 
      <!-- <div class="row w-100 mt-0 justify-content-center">
      </div> -->
      <div class="d-flex justify-content-center">
      <div class="text-center p-3">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( '' ); ?>
        <a href="<?php echo esc_url( __( '#', '' ) ); ?>">
        <?php printf( esc_html__( '' ), '' ); ?>
        </a>
        </p>
      </div>
    </div>
    </div>  
  </div>  
</div>



<div class="socialmedia">
               <img src="./assets/svg/instagram.svg" alt="" class="socmed">
               <img src="./assets/svg/facebook.svg" alt="" class="socmed">
               <img src="./assets/svg/linkedin.svg" alt="" class="socmed">
               <img src="./assets/svg/twitter.svg" alt="" class="socmed">
             </div>

/*
Theme Name: WP_Restaurant
Theme URI: http://wordpress.org/themes/twentythirteen
Author: Team Pomodoro
Author URI: http://wordpress.org/
Description: The 2013 theme for WordPress takes us back to the blog, featuring a full range of post formats, each displayed beautifully in their own unique way. Design details abound, starting with a vibrant color scheme and matching header images, beautiful typography and icons, and a flexible layout that looks great on any device, big or small.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: Team Pomodoro
*/

/* .subscribe-btn{
    margin-left: 45%;
    height: 60px;
    border-radius: 7px;
    width: 100px;
} */
.bouton{
    width: 100px;
    margin-left: 170px;
    margin-top: -6;
    height: 60px;
    border-radius: 7px;
}
.email-field{
    /* margin-left: 20%; */
    height: 60px; 
    border-radius: 7px;
}
.email{
width: 80px;
}
.upnewsletter{
  background: url('../assets/images/hachures-noires.png') no-repeat;
  width: 82.5%;
  height: auto;
  margin: 0em 7em 0 7em;
  position: relative;
  top: 50;
}
.newsletter{
    margin: 0 10%;
    /* width: 80%; */
    background-color: #292929;
}

.opening-hours{
    background-color: #292929;  
    color: white;
    width: 50px;
}
.form{
    display: flex;
}
.joinNews{
    font-size: 50px ;
    font-weight:500;
}
.footer{
    background-color: #292929;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;   
    padding: 2rem 10%;
}
.box-un-footer{
    display: flex;
    justify-content: space-between;
    width: 20%;
}

.bouttons-sm{
    display: flex;
}
