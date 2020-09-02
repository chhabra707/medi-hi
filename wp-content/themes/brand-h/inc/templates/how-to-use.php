<?php

/*
	
@package sunsettheme
-- Page Template

*/

?>
<style>
body{
    font-family: 'Noto Sans', sans-serif!important;
}
@media only screen and (max-width: 600px) {
.object-fit-slide img {
	width:400px!important;
	height:350px!important;
	object-fit:cover;
  }
}
</style>
<article id="post-<?php the_ID();
					?>" <?php post_class();
						?>>
 
 <div class="mt-20 px-5">
  <div style="margin-top:110px;">
      <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700" style="margin:0 auto">
        <svg class="w-8 h-8" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-nurse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.41,318,224,413.39,128.59,318C57.09,321.09,0,379.59,0,451.8A58.23,58.23,0,0,0,58.2,510H389.8A58.23,58.23,0,0,0,448,451.8C448,379.59,390.91,321.09,319.41,318ZM208,478H58.2A26.28,26.28,0,0,1,32,451.8c0-47.46,38-92.44,84.73-100.41L208,442.66Zm181.8,0H240V442.64l91.25-91.25C378,359.36,416,404.34,416,451.8A26.28,26.28,0,0,1,389.8,478ZM224,302A128,128,0,0,0,352,174V63.82a32,32,0,0,0-20.76-30L246.47,2.07a64.06,64.06,0,0,0-44.94,0L116.76,33.86A32,32,0,0,0,96,63.82V174A128,128,0,0,0,224,302ZM128,63.82,212.77,32a32,32,0,0,1,22.47,0L320,63.82V142H128ZM320,174a96,96,0,0,1-192,0ZM259,72.67H237.33V51a5,5,0,0,0-5-5H215.67a5,5,0,0,0-5,5V72.67H189a5,5,0,0,0-5,5V94.33a5,5,0,0,0,5,5h21.67V121a5,5,0,0,0,5,5h16.66a5,5,0,0,0,5-5V99.33H259a5,5,0,0,0,5-5V77.67A5,5,0,0,0,259,72.67Z"></path></svg>
      </div>
  </div>
  <h2 class="text-center px-6 font-size-24 leading-relaxed " style="font-size: 24px; color: rgba(0,0,0,.8)!important; font-family: Noto Sans Regular, sans-serif!important; text-align: center!important; line-height: 1.5em;">
    <?php _e('Himedi recommends remedies and best doctors for you.','brand-h'); ?>
  </h2>
  <div class="mt-20 text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3; font-family: 'Noto Sans', sans-serif!important;">
    STEP 01
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px; font-family: 'noto_sanslight'!important;">
    <?php _e('Let <strong style="font-family: `Noto Sans`, sans-serif!important;">Himedi </strong> know your disease name and questions you want to ask doctors.','brand-h'); ?>
  </div>
  <p class="px-6 lg:pt-24 pt-0 font-roboto leading-none mt-3" style="font-size:16px; line-height:1.2;  font-family: 'Noto Sans', sans-serif!important;">
    <?php _e('Based on the information you share and consultations, Himedi will recommend best-suitable remedies and doctors for you.','brand-h'); ?>
  </p>
  <!-- <div style="height:500px"> #safari issue
    <div class="relative content-check-hospital">
      <img class="mx-auto mb-24 mt-5 absolute" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt="">
      <img class="absolute" src="<?php bloginfo('template_directory') ?>/img/inquiry.png" style="height:240px;top:90px;left:108px">
    </div>
  </div> -->
  <div style="height:400px">
    <div class="relative ">
      <img class="mx-auto mb-24 mt-5" src="<?php bloginfo('template_directory') ?>/img/himedi-inquiry-screen1.png" width="346px" height="346px" alt="">      
    </div>
  </div>

  <!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-brand px-5 py-5 text-white w-7/12 lg:w-4/12 mx-auto mt-10 mb-20" style="border-radius:10px; font-size:16px; padding:10px 40px;">
      <a href style="color:white!important;"><?php _e('Check hospitals','brand-h'); ?></a>
    </button>
  </div>
	<!-- Button (end) -->
	<div class=" mt-20 text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
    STEP 02
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px; font-family: 'noto_sanslight'!important;">
  <?php _e('If you would like to receive the <strong style="font-family: Noto Sans, sans-serif!important;">second opinion</strong> or deputy consultation from the recommended doctors, please share more detailed <strong style="font-family: Noto Sans, sans-serif!important;">medical records','brand-h'); ?></strong>.
  </div>
  <!-- Main slider (start) -->
  <div class="swiper-container content-step2" style="">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper mt-12">
          <!-- Slides -->
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-1.jpg" alt="">
          </div>
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-2.jpg" alt="" >
          </div>
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-3.jpg" alt="">
          </div>
          <!-- ... (use in case of pagination) -->
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <!-- <div class="swiper-button-prev"></div> -->
      <!-- <div class="swiper-button-next"></div> -->

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
  </div>
  <!-- Main slider (end) -->
  <div class=" mt-20 text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
    STEP 03
  </div>
  <div class=" text-left px-6 font-size-24 leading-none" style="line-height:1.2">
    <?php _e('Based on the shared materials, Himedi proposes a plan for treatment available in Korea.','brand-h'); ?>
  </div>
  <div class="mt-12">
    <img src="<?php bloginfo('template_directory') ?>/img/section3-3-1.jpg" width="632px" height="348px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center mt-24">
	<!-- <button class="bg-brand px-5 py-5 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px"> -->
	<button class="bg-brand px-5 py-5 text-white w-9/12 lg:w-6/12 mx-auto mt-10 mb-20" style="border-radius:10px; font-size:16px;">
      <a href="/success-cases" style="color:white"><?php _e('Check medical diagnoses','brand-h'); ?></a>
    </button>
  </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-20">
    <h2 class="px-8 text-left font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
      <?php _e('Feel free to ask us anything. <br><strong>We will reply</strong><br> kindly and promptly.','brand-h'); ?>
    </h2>
    <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:16px; line-height:26px; font-weight:400;">
      <?php _e('Do you have difficulty in inquiring? <br> We give sincere answers to any question for patients’ recovery.','brand-h'); ?>
    </p>
    <div class=" mt-20 text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
      <?php _e('Start consultation','brand-h'); ?> &#62;
    </div>
    <div>
      <!-- <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt=""> -->
      <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/himedi-whatsapp.png" width="346px" height="346px" alt="himedi-whatsapp">
    </div>
  </div>
  <div class="px-5"> 
    <h2 class=" mt-20 text-left px-0 font-size-24 leading-none" style="color:#2681F3; line-height:1.2; font-size:22px;">
      * <?php _e('Period required: about 10 days','brand-h'); ?>
    </h2>
    <p class="pt-0 px-5 text-gray-700 text-left font-size-24 leading-none" style="font-size: 16px; line-height: 26px; font-weight: 400;">
      <?php _e('Examination results are made available within 10 days from the time when records are received and delivered.','brand-h'); ?>
    </p>
    
    <h2 class=" mt-20 text-left px-0 font-size-24 leading-none" style="color:#2681F3; line-height:1.2; font-size:22px;">
      * <?php _e('Estimated cost: Please inquire.','brand-h'); ?>
    </h2>
    <p class="pt-0 px-5 text-gray-700 text-left font-size-24 leading-none" style="font-size: 16px; line-height: 26px; font-weight: 400;">
      <?php _e('Examination results are made available within 10 days from the time when records are received and delivered.','brand-h'); ?>
    </p>
  
    <!-- Button (start) -->
    <div class="flex justify-center my-24 mb-32">
      <a href="/inquiry">
        <button class="border button-12 px-20 py-5 mx-auto mt-10">
        <?php _e('Inquiry','brand-h'); ?>
        </button>
        </a>
    </div>
	  <!-- Button (end) -->
  </div>
 
  <!-- Section 3-2 (end) -->
	<!--.entry-content-->


</article>