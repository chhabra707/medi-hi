<?php

/*
	
@package sunsettheme
-- Page Template

*/

?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
<style type="text/css" scoped>
    html { scroll-behavior: smooth; } 
</style>
 <!-- Section 1 (start) -->
 <section class="text-justify">
        <!-- Main slider (start) -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide object-fit-slide">
					        <img src="<?php bloginfo('template_directory') ?>/img/Bild2.jpg" alt="" >
                </div>
                <div class="swiper-slide object-fit-slide">
				          <img src="<?php bloginfo('template_directory') ?>/img/Bild3.jpg" >
                </div>
                <div class="swiper-slide object-fit-slide">
				          <img src="<?php bloginfo('template_directory') ?>/img/Bild4.jpg">
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
    
        <!-- Content (start) -->
        <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2">
            <h2 class="px-8 text-left font-size-24 leading-relaxed " style="font-size:25px; color:rgba(0,0,0,.8); line-height: 1.3em;">
				<?php _e('Himedi meets doctors of <strong>first-class</strong> hospitals in Korea on behalf of you.','brand-h'); ?>
            </h2>
            <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:20px; font-weight:400; line-height:1.2;color:rgba(0,0,0,.5)!important">
				<?php _e('We lead you to world-best medical staff<br class="br-hidden"> and best remedies.','brand-h'); ?>
            </p>
        </div>
        <!-- Content (end) -->
    
        <!-- Arrow icon (start) -->
        <a href="#section2">
            <img class="mx-auto lg:pt-0 pt-10 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
        </a>
        <!-- Arrow icon (end) -->
    
    </section>
    <!-- Section 1 (end) -->
	<!-- Section1-1 (start) -->
	  <!-- Content (start) -->
	  <div class="mt-40 w-full" id="section2">
	    <img src="<?php bloginfo('template_directory') ?>/img/section1-1.jpg" alt="">
	  </div>
	  <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2">
	  	<h2 class="px-8 font-size-24 text-left leading-relaxed " style="font-size:25px; font-weight:400; color:#000; line-height: 1.3em; font-family:arial;">
				<?php _e('Just send us your medical records. You do not need to come to Korea.','brand-h'); ?>
            </h2>
            <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size: 20px; text-align: left!important;    font-family: Noto Sans Light, sans-serif!important; line-height: 1.2; color: rgba(0,0,0,.5)!important; word-break: break-all;">
				<?php _e('Send your relevant medical records such as treatment history, image, etc.','brand-h'); ?>
            </p>
        </div>
		<!-- Content (end) -->
		
		<!-- Arrow icon (start) section3 -->
        <a href="#graphs">
          <img class="mx-auto lg:pt-0 pt-40 pb-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
        </a>
		<!-- Arrow icon (end) -->
		
	<!-- Section1-1 (end) -->
    <!-- Section 2 (start) -->
    <section id="graphs" class="mt-10 w-full text-center overflow-hidden">
  <!-- Chart By Harsh -->

  <div class="w-full bg-gray-100 text-justify">
		<div class="medi_graph flex flex-col justify-center flex-wrap" style="max-height: 450px;">
			<p class="pt-4 px-8 text-gray-700 text-center font-noto-regular leading-none" style="font-size:20px">
				<?php _e('The survival rate of patients with one of the 5 major cancers compared <br class="lg:hidden block">to that in the U.S.','brand-h'); ?>
			</p>
      
      <div class="flex-1 flex justify-center flex-wrap" style="max-width: 635px;">
            <div class="w-screen">
                <canvas id="chart_1" width="635px" height="350"></canvas>
            </div>
      </div>

		</div>
		<div class="medi_graph flex flex-col justify-center  flex-wrap hidden" style="max-height: 450px;">
			<p class="pt-4 px-8 text-gray-700 text-center font-noto-regular leading-none" style="font-size:20px;">
				<?php _e('No. of hospitals per a thousand people among OECD countries','brand-h'); ?>
			</p>
      
      <div class="flex-1 flex justify-center flex-wrap" style="max-width: 635px;">
            <div class="w-screen my-10">
                <canvas id="chart_2" width="635px" height="350"></canvas>
            </div>
        </div>

		</div>
		<div class="medi_graph flex flex-col justify-center  flex-wrap hidden" style="max-height: 450px;">
			<p class="pt-4 px-2  text-gray-700 text-center font-noto-regular leading-none" style="font-size:20px;">
				<?php _e('Medical expenses for serious illnesses in <br> <b>Germany VS Korea','brand-h'); ?></b>
			</p>

      <div id="chart_3_cont" class="flex-auto flex flex-wrap mx-10 w-full" style="max-width: 635px;">
            <div class="w-full flex flex-row p-4">
                <div class="flex-auto w-1/2" >
                    <!-- <p class="left-0 top-0 text-gray-500">$1M</p> -->
                    <canvas id="chart_3_1" width="300" height="350"></canvas>
                </div>
                <div class="flex-auto  w-1/2 " >
                    <!-- <p class="left-0 top-0 text-gray-500">$1M</p> -->
                    <canvas id="chart_3_2" width="300" height="350"></canvas>
                </div>
            </div>
        </div>

		</div>
	</div>

  <div class="lg:pt-32 pt-10 flex justify-between px-10 py-10">
		<button onclick="showGraph(1)"  class="grph_btn border-2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 mr-3 text-lg leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">5 major cancers compared to that in the U.S.</button>
		<button onclick="showGraph(2)"  class="grph_btn border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 text-lg mr-3 leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">No. of hospitals per a thousand people among OECD countries</button>
		<button onclick="showGraph(3)"  class="grph_btn border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 text-lg leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">Korea’s medical service boasts a world-class level.</button>
	</div>
   
  <!-- Chart Text (start) -->
  <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2 px-12">
        <h2 class="title-1" >
        <?php _e('Korea’s medical service boasts a world-class level.','brand-h'); ?>
        </h2>
        <p class="pt-4 sub-title-1" >
        <?php _e('Every aspect of it—including technology, skills, infrastructures, <br class="lg:hidden block">and prices—is all highly credible.','brand-h'); ?>
        </p>
    </div>

	<!-- Chart Text (end) -->

  <!-- Arrow icon (start) -->
  <a href="#section4">
    <img class="mx-auto lg:pt-10 pt-32 pb-30 lg:mt-20 mb-40 lg:mb-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
  </a>
	<!-- Arrow icon (end) -->	
  
</section>

<!-- Section 3 (start) -->
<section class="text-center" id="section4">
	<!-- Content (start) -->
	<div class="relative">
		<div class="bg-black w-full h-full absolute inset-0 opacity-50"></div>
		<img src="<?php bloginfo('template_directory') ?>/img/endCont.jpg">
		<p class="absolute inset-0 h-full text-white text-5xl px-5 contnet-addtional" style="font-size:24px; line-height:40px; font-family: Arial, Verdana, sans-serif!important; font-weight:400;">
			<?php _e('In addition <b class="font-extrabold">Himedi </b> has cared for <b class="font-extrabold">4,239</b> patients while addressing <b class="font-extrabold">10,290</b> inquiries in consultation with Korea’s best medical staff.','brand-h'); ?>
		</p>
	</div>
	<p class="lg:pt-24 pt-10 px-5 sub-title-1-c">
		<?php _e('You can reserve six world-class hospitals and other great hospitals. <br>( World\'s best 100 hospitals, April 2020 Newsweek',"brand-h"); ?>)
	</p>
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full pt-10 lg:px-32 px-10 lg:py-32 py-10">
		<div class="flex justify-between items-center content-center pb-5" style="height: 63.8px;">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log1.png" width="73px" alt="asan">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log2.png" width="73px" alt="samsung">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log6.png" width="63.8px" alt="yonsel">

		</div>
		<div class="flex justify-between items-center content-center pt-5" style="height: 63.8px;">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log4.png" width="73px" alt="medicine">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log5.png" width="73px" alt="catholic">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log3.png" width="73px" alt="snuh">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-brand text-white lg:w-1/2 w-12/12 mx-auto px-5 py-5 lg:px-0 mt-10 text-xs hover:bg-blue-500" style="border-radius:5px; border-color: #2681f3; font-size:16px; padding:10px 40px;">
      <a href="/interview" style="color:white!important;" class=""><?php _e('Check Success Story','brand-h'); ?></a>
    </button>
  </div>

  

	<!-- Button (end) -->
</section>
<!-- Section 3 (end) -->

<!-- Section 3-1 (start) -->
<section class="text-center mt-40 pt-20" style="background-color:#f2f3f5;">
	<!-- Content (start) -->
	<h2 class="text-center px-6 font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
		<?php _e('Get a personalized consultation suitable to you','brand-h'); ?>
	</h2>	
	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10" style="border-radius: 50%; width: 47px; font-size: 18px;">
		01
	</button>
	<div class="flex px-8">
		<div class="h-32 w-32 flex itmes-center remove_icon justify-center items-start mt-3" style="color:blue; margin-right:10px;">
		<img src="<?php bloginfo('template_directory') ?>/img/hospital-user-light.svg" >
		</div>
    <div class="mb-5">
      <div class="text-black mb-5 mt-4 font-bold text-center px-3 font-size-24 leading-none">
		  <?php _e('Consulting directly with a doctor on behalf of you','brand-h'); ?>
		</div>
      <div class="text-xl leading-none text-center" style="">
		  *<?php _e('Available only for patients already with medical records','brand-h'); ?>
		</div>
    </div>
	</div>

	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10" style="border-radius: 50%; width: 47px; font-size: 18px;">
		02
	</button>
	<div class="flex px-8">
		<div class="lg:h-32 h-20 lg:w-32 w-20 flex itmes-center remove_icon justify-center items-start mt-3" style="color:blue; margin-right:20px;">
		<img src="<?php bloginfo('template_directory') ?>/img/user-md-chat-light.svg" >
		</div>
    <div class="mb-5 w-full">
	<div class="text-black mb-5 mt-4 font-bold text-center px-3 font-size-24 leading-none">
		  <?php _e('Telemedicine consultation','brand-h'); ?>
		</div>
		<div class="text-xl leading-none text-center" style="">
			  *<?php _e('Available for new patients as well','brand-h'); ?>
		</div>
    </div>
	</div>

	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10" style="border-radius: 50%; width: 47px; font-size: 18px;">
		03
	</button>
	<div class="flex px-8">
    <div class="lg:h-32 h-20 lg:w-32 w-20 flex itmes-center remove_icon justify-center items-start mt-3" style="color:blue; margin-right:20px;">
      <img src="<?php bloginfo('template_directory') ?>/img/notes-medical-light.svg" >
    </div>
    <div class="mb-5 w-full">
		<div class="text-black mb-5 mt-4 font-bold text-center px-3 font-size-24 leading-none">
		  <?php _e('Request for the 2nd opinion','brand-h'); ?>
		</div>
		<div class="text-xl leading-none text-center" style="">
		  *<?php _e('Available for new patients as well','brand-h'); ?>
		</div>
    </div>
	</div>
  <!-- Button (start) -->
  <div class="flex justify-center">
  
    <!-- <button class="bg-white px-5 py-5 text-blue-500 w-56 mx-auto mt-10 mb-24" style="border-radius:10px; font-size:18px"> -->
	<a href="/inquiry" class="w-full">
    <button class="bg-white text-blue-500 text-white text-white lg:w-2/3 w-7/12 mx-auto px-5 py-5 mb-20 lg:px-0 mt-40 text-xs hover:bg-blue-500 hover:text-white" style="border-radius:10px; font-size:18px; font-family:'Noto Sans', sans-serif!important">
      <?php _e('Inquiry','brand-h'); ?>
    </button>
  </a>
  </div>
	<!-- Button (end) -->

	<!-- Content (end) -->
</section>
<!-- Section 3-1 (end) -->
<!-- Section 3-2 (start) -->
<div class="mt-20 px-5">
  <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700" style="margin:0 auto">
<svg class="w-8 h-8" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-nurse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.41,318,224,413.39,128.59,318C57.09,321.09,0,379.59,0,451.8A58.23,58.23,0,0,0,58.2,510H389.8A58.23,58.23,0,0,0,448,451.8C448,379.59,390.91,321.09,319.41,318ZM208,478H58.2A26.28,26.28,0,0,1,32,451.8c0-47.46,38-92.44,84.73-100.41L208,442.66Zm181.8,0H240V442.64l91.25-91.25C378,359.36,416,404.34,416,451.8A26.28,26.28,0,0,1,389.8,478ZM224,302A128,128,0,0,0,352,174V63.82a32,32,0,0,0-20.76-30L246.47,2.07a64.06,64.06,0,0,0-44.94,0L116.76,33.86A32,32,0,0,0,96,63.82V174A128,128,0,0,0,224,302ZM128,63.82,212.77,32a32,32,0,0,1,22.47,0L320,63.82V142H128ZM320,174a96,96,0,0,1-192,0ZM259,72.67H237.33V51a5,5,0,0,0-5-5H215.67a5,5,0,0,0-5,5V72.67H189a5,5,0,0,0-5,5V94.33a5,5,0,0,0,5,5h21.67V121a5,5,0,0,0,5,5h16.66a5,5,0,0,0,5-5V99.33H259a5,5,0,0,0,5-5V77.67A5,5,0,0,0,259,72.67Z"></path></svg>
</div>
  <h2 class="text-center px-6 font-size-24 leading-relaxed " style="font-size: 22px; color: rgba(0,0,0,.8)!important; font-family: Noto Sans Regular, sans-serif!important; text-align: center!important; line-height: 1.5em;">
    <?php _e('Himedi recommends remedies and best doctors for you.','brand-h'); ?>
  </div>
  <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3; margin-top:12px;">
    <h2>STEP 01</h2>
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px; font-family: 'noto_sanslight'!important;">
    <?php _e('Let <strong style="font-family: Noto Sans, sans-serif!important;">Himedi</strong> know your disease name and questions you want to ask doctors. ','brand-h'); ?>
  </div>
  <p class="px-6 pt-0 leading-none mt-3" style="font-size: 14px;
    text-align: left!important; font-family: Noto Sans Light, sans-serif!important; line-height: 1.2; color: rgba(0,0,0,.5)!important;">
    <?php _e('Based on the information you share and consultations, Himedi will recommend best-suitable remedies and doctors for you.','brand-h'); ?> 
  </div>
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
    <button class="bg-brand px-5 py-5 text-white w-7/12 lg:w-4/12 mx-auto mt-10 mb-20 font-size-24 hover:bg-blue-500" style="border-radius:10px; font-size:16px; padding:10px 40px;">
      <a href="/affiliate" style="color:white!important;" class=""><?php _e('Check hospitals','brand-h'); ?></a>
    </button>
  </div>
	<!-- Button (end) -->
	<div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
    <h2>STEP 02</h2>
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px; font-family: 'noto_sanslight'!important;">
  <?php _e('If you would like to receive the <strong style="font-family: Noto Sans, sans-serif!important;">second opinion</strong> or deputy consultation from the recommended doctors, please share more detailed <strong style="font-family: Noto Sans, sans-serif!important;">medical records','brand-h'); ?></strong>.
  </div>
  <!-- Main slider (start) -->
  <div class="swiper-container content-step2" style="">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper mt-2">
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
  <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
    <h2>STEP 03</h2>
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px;">
    <?php _e('Based on the shared materials, Himedi proposes a plan for treatment available in Korea.','brand-h'); ?>
  </div>
  <div class="mt-12">
    <img src="<?php bloginfo('template_directory') ?>/img/section3-3-1.jpg" width="632px" height="348px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center mt-24">
	<!-- <button class="bg-brand px-5 py-5 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px"> -->
	<button class="bg-brand px-5 py-5 text-white w-9/12 lg:w-6/12 mx-auto mt-10 mb-20 font-size-24 hover:bg-blue-500" style="border-radius:10px; font-size:16px; padding:13px 40px;">
      <a href="/success-cases" style="color:white"><?php _e('Check medical diagnoses','brand-h'); ?></a>
    </button>
  </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-20">
    <h2 class="px-8 text-left font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
      <?php _e('Feel free to ask us anything. <br><strong>We will reply </strong><br> kindly and promptly.','brand-h'); ?>
    </div>
    <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:16px; line-height:26px; font-weight:400;">
      <?php _e('Do you have difficulty in inquiring? <br>We give sincere answers to any question for patients’ recovery.','brand-h'); ?>
    </div>
    <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
      <?php _e('Start consultation','brand-h'); ?> &#62;
    </div>
    <div>
      <!-- <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt=""> -->
      <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/himedi-whatsapp1.png" width="346px" height="346px" alt="himedi-whatsapp">
    </div>
  </div>
  <!-- <div class="px-10"> 
    <div class="font-bold text-blue-500 text-4xl">
      * Period required: about 10 days
    </div>
    <div class="px-8">
      Examination results are made available within 10 days from the time when records are received and delivered.
    </div>
    <div class="font-bold text-blue-500 text-4xl mt-20">
      * Estimated cost: Please inquire.
    </div>
    <div class="px-8">
      Examination results are made available within 10 days from the time when records are received and delivered.
    </div> -->
    <!-- Button (start) -->
    <!-- <div class="flex justify-center mt-24">
      <button class="bg-brand px-5 py-5 w-56 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px">
        Inquiry
      </button>
    </div> -->
	  <!-- Button (end) -->
  </div>
  <div class="mt-20">
  <h2 class="px-8 font-bold text-left font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
      <?php _e('Himedi solves problems that patients and their caregivers face.','brand-h'); ?>
    </div>
    <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:16px; line-height:26px; font-weight:400;">
      <?php _e('Himedi dreams of a heartwarming world where everyone enjoys a healthy life. Going beyond the step of medical tourism, Himedi, as a complex medical service platform, presents a new direction for medical service.','brand-h'); ?>
    </div>
    <!-- Button (start) -->
    <div class="flex justify-center my-24 mb-32">
      <a href="/about-us">
        <button class="border button-12 px-20 py-5 mx-auto mt-10">
			<?php _e('Himedi Story','brand-h'); ?>
        </button>
        </a>
    </div>
	  <!-- Button (end) -->
    
  </div>

  <!-- Section 3-2 (end) -->
  <!--.entry-content-->
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script>
  function showGraph(n) {
    let texts = document.getElementsByClassName('medi_graph')
    let graphBtns = document.getElementsByClassName('grph_btn')
    for (let index = 0; index < texts.length; index++) {
        const graph = texts[index];
        const graphBtn = graphBtns[index];
        graph.classList.add("hidden");
        graphBtn.classList.remove("border-2");
    }
    texts[n-1].classList.remove("hidden")
    graphBtns[n-1].classList.add("border-2")
  }

  function addDataValuesToBars(dist, myColor) {
    return function (){
      let chartInstance = this.chart;
      let ctx = chartInstance.ctx;
      ctx.font = Chart.helpers.fontString(10, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';
      ctx.fillStyle = myColor? myColor: "#fff";
      this.data.datasets.forEach(function (dataset, i) {
          let meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function (bar, index) {
              let data = dataset.data[index];
              ctx.fillText(data, bar._model.x, bar._model.y + dist);
          });
      });
    }
  }

  //** Chart One */
  const chartOneCtx = document.getElementById('chart_1').getContext('2d');
  const chartOneDataLabels = ["Gastric Cancer","Colon Cancer","Breast Cancer","Liver Cancer","Cervical Cancer"]
  const chartOneBlueBarValues = [76, 76, 93, 35, 80]
  const chartOneGreyBarValues = [32, 66, 91, 19, 69]

  const chartOneOption = {
      type: 'bar',
      data: {
          labels: chartOneDataLabels,
          datasets: [{
              data: chartOneBlueBarValues,
              backgroundColor: "rgb(66, 135, 245)",
          },
          {
              data: chartOneGreyBarValues,
              backgroundColor: "rgb(158, 158, 158)",
          }
          ]
      },
      options: {
          scales: {
              xAxes: [
                  {
                      categoryPercentage: 0.5,
                      barPercentage: 1.0,   
                      ticks:{
                        display: (screen.width <= 600)? false:true,
                      },
                      gridLines:{
                        drawBorder: true,
                        drawOnChartArea: false,
                      }
                  }
              ],
              yAxes: [{
                  position: 'right',
                  ticks: {
                    display: false,
                      beginAtZero: true
                  },
                  gridLines:{
                      drawBorder: true,
                      display: false,
                  }
              }]
          },
          legend: {
              display: false,
          },
          layout: {
              padding: {
                  left: 0,
                  right: 0,
                  top: 0,
                  bottom: 0
              }
          },
          tooltips: {
              enabled: false
          },
          events: [],
          responsive: true,
          onResize:(myChart, size)=>{
            if(screen.width <= 600){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
          maintainAspectRatio:true,
          animation: {
              onComplete: addDataValuesToBars(20)
          }
      }
  }

  //** Chart Two */
  const chartTwoCtx = document.getElementById('chart_2').getContext('2d');
  const chartTwoDataLabels = ["South Korea", "Japan", "Australia", "Finland", "France", "Germany", "Mexico", "Switzerland", "Czech Republic", "Canada", "Chile", "U.S.", "Hungary"]
  const chartTwoBlueBarValues = [74, 67, 56, 48, 46, 38, 37, 34, 25, 20, 20, 17, 17]

  const getColors = () => {
    let maxValue = Math.max(...chartTwoBlueBarValues)
    let index = chartTwoBlueBarValues.indexOf(maxValue)
    let col = []
    chartTwoBlueBarValues.forEach((elm, i)=>{
        if(i === index){
            col.push("rgb(66, 135, 245)");
        }else{
            col.push("rgb(158, 158, 158)");
        }
    })
    return col;
  }

  const chartTwoOption = {
    type: 'bar',
    data: {
        labels: chartTwoDataLabels,
        datasets: [{
            data: chartTwoBlueBarValues,
            backgroundColor: getColors(),
        }
        ]
    },
    options: {
        scales: {
            xAxes: [
                {
                    categoryPercentage: 0.5,
                    barPercentage: 1.0,
                    ticks:{
                      display: (screen.width <= 600)? false:true,
                      },
                      gridLines:{
                        drawBorder: true,
                        drawOnChartArea: false,
                      }
                }
            ],
            yAxes: [{
                position: 'left',
                ticks: {
                  beginAtZero: true,
                    display: false
                },
                gridLines:{
                  display: false,
                }
            }]
        },
        legend: {
            display: false,
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            enabled: false
        },
        events: [],
        responsive: true,
        onResize:(myChart, size)=>{
            if(screen.width <= 600){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
        maintainAspectRatio: true,
        animation: {
            onComplete: addDataValuesToBars(-5,'#000')
        }
    }
  }

  //** Chart Three */
  const chartThreeOneCtx = document.getElementById('chart_3_1').getContext('2d');
  const chartThreeOneLabels = ["Hematologic malignancy"]
  const chartThreeOneBlueBarValuesOne = [5.85]
  const chartThreeOneGreyBarValuesOne = [0.92]

  const chartThreeTwoCtx = document.getElementById('chart_3_2').getContext('2d');
  const chartThreeTwoLabels = ["Brain cancer"]
  const chartThreeTwoBlueBarValuesTwo = [5.0]
  const chartThreeTwoGreyBarValuesTwo = [3.5]

  const chartThreeOneOption = {
    type: 'bar',
    data: {
        labels: chartThreeOneLabels,
        datasets: [{
            data: chartThreeOneBlueBarValuesOne,
            backgroundColor: "rgb(66, 135, 245)",
        },
        {
            data: chartThreeOneGreyBarValuesOne,
            backgroundColor: "rgb(158, 158, 158)",
        }
        ]
    },
    options: {
        scales: {
            xAxes: [
                {
                    categoryPercentage: 0.5,
                    barPercentage: 0.4,
                    gridLines: {
                        drawBorder: true,
                        drawOnChartArea: false
                    },
                    ticks:{
                      display: (screen.width <= 400)?false:true,
                    }
                }
            ],
            yAxes: [{
                position: 'right',
                gridLines: {
                    display: false,
                },
                ticks: {
                    display: false,
                    beginAtZero: true, 
                    max:10
                },
            }]
        },
        legend: {
            display: false,
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            enabled: false
        },
        events: [],
        responsive: true,
        onResize:(myChart, size)=>{
            if(screen.width <= 400){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
        maintainAspectRatio: true,
        animation: {
            onComplete: addDataValuesToBars(-5, '#000')
        }
    }
  }

  const chartThreeTwoOption = {
    type: 'bar',
    data: {
        labels: chartThreeTwoLabels,
        datasets: [{
            data: chartThreeTwoBlueBarValuesTwo,
            backgroundColor: "rgb(66, 135, 245)",
        },
        {
            data: chartThreeTwoGreyBarValuesTwo,
            backgroundColor: "rgb(158, 158, 158)",
        }
        ]
    },
    options: {
        scales: {
            xAxes: [
                {
                    categoryPercentage: 0.5,
                    barPercentage: 0.4,
                    gridLines: {
                        drawBorder: true,
                        drawOnChartArea: false
                    },
                    ticks:{
                      display: (screen.width <= 400)?false:true,
                }
              }
            ],
            yAxes: [{
                position: 'right',
                gridLines: {
                    display: false,
                },
                ticks: {
                    display: false,
                    beginAtZero: true,
                    max:10
                },
            }]
        },
        legend: {
            display: false,
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            enabled: false
        },
        events: [],
        responsive: true,
        onResize:(myChart, size)=>{
            if(screen.width <= 400){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
        onReady:()=>{
          console.log("runn>");
        },
        maintainAspectRatio: true,
        animation: {
            onComplete: addDataValuesToBars(-5, '#000')
        }
    }
  }

  function isScrolledIntoView(elem){
      var docViewTop = document.getScrollTop();
      var docViewBottom = docViewTop + window.innerHeight;
      var elemTop = elem.offsetTop
      var elemBottom = elemTop + elem.height;
      return ((elemTop >= docViewTop) && (elemBottom <= docViewBottom));
}

document.getScrollTop = function() {
    if (window.pageYOffset != undefined) {
        return pageYOffset;
    } else {
        var sx, sy, d = document,
            r = d.documentElement,
            b = d.body;
        sy = r.scrollTop || b.scrollTop || 0;
        return sy;
    }
}

function isHidden(el) {
    return (el.offsetParent === null)
}

let chartOneElm =document.getElementById('chart_1');
let chartTwoElm =document.getElementById('chart_2');
let chartThreeOneElm =document.getElementById('chart_3_1');
let chartThreeTwoElm =document.getElementById('chart_3_2');

let chartOne 
let chartTwo 
let chartThreeOne
let chartThreeTwo

let flag = true;

document.body.onscroll = (e)=>{
  if(isScrolledIntoView(chartOneElm) && !isHidden(chartOneElm)){
    if(!chartOne) chartOne = new Chart(chartOneCtx, chartOneOption);
  }else{
    chartOne = undefined;
  }

  if(isScrolledIntoView(chartTwoElm) && !isHidden(chartTwoElm)){
    if(!chartTwo) chartTwo = new Chart(chartTwoCtx, chartTwoOption);
  }else{
    chartTwo = undefined;
  }
  
  if(isScrolledIntoView(chartThreeOneElm) && !isHidden(chartThreeOneElm) && isScrolledIntoView(chartThreeTwoElm) && !isHidden(chartThreeTwoElm)){
    if(!chartThreeOne && !chartThreeTwo){
      chartThreeOne = new Chart(chartThreeOneCtx, chartThreeOneOption);
      chartThreeTwo = new Chart(chartThreeTwoCtx, chartThreeTwoOption);
     }
  } else{
    chartThreeOne = undefined;
    chartThreeTwo = undefined;
  }
}

function scrolldiv(elmId) { 
  var elem = document.getElementById(elmId); 
  elem.scrollIntoView(); 
}

  </script>


</article>