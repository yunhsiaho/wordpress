<?php wp_footer();
?> 
<!-- ROW NEWSLETTER -->
<div class="newsletter">
    <!-- <div class="shapeDivider mb-5"><?php dynamic_sidebar('footer-area-divider');?></div> -->
    <div class="row p-5 bg-dark text-white">
      <div class="col-md-4 p-5">
        <h3 class="h1 p-2">Join Our Newsletter</h3>
      </div>
      <div class="col-md-8 mt-5 justify-content-center align-items-center">
        <div class="row w-100 ml-5 justify-content-center">
          <input class="w-50 email-field" type="text" placeholder="Your Email Adress" class="">
          </div>
          <div class="row w-100 mt-2 justify-content-center">
            <button type="button" class=" w-25 bg-white text-dark subscribe-btn">SUBSCRIBE</button>
      </div>
      </div>
    </div>
  </div>
 <!-- END OF ROW NEWSLETTER --> 
  <!-- ROW DEV RESTAURANT --> 
<div class="dev restaurant">
    <div class="shapeDivider mb-5"><?php dynamic_sidebar('footer-area-divider');?></div>
    <div class="row p-5 bg-dark text-white">
      <div class="col-md-4 p-2">
        <h3 class="text-left h1">Dev Restaurant</h3>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium rerum repellendus obcaecati eum magni impedit, alias.</p>
      </div>
    <!-- ICONS ROW -->
      <div class="col-md-6 ml-5 d-flex justify-content-center align-items-center">
        <div class="row w-100 ml-5 justify-content-center">
        <div class="mr-2 network" id="twitter">
                <img  src="./assets/svg/twitter.svg" alt="">
        </div>
        <div class="mr-2 network" id="facebook">
                <img  src="./assets/svg/facebook.svg" alt="">
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
      <!-- END OF THE ICONS ROW -->
    <div class="opening-hours">
        <div class="row p-5 d-flex bg-dark text-white">
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
    </div>
  </div>   
</body>
</html>
