<?php
   $title = "English Proficiency TOEFL"; 
   include ('header.php') ;
 ?>



<style type="">

/******************************************
EVENTS
******************************************/

.event-title.tagline-message h3 {
    font-size: 64px;
}

.event-title p {
    font-size: 18px;
    padding: 10px 0 20px;
}

.event-boxes .box {
    padding: 10px;
}

.event-desc {
    padding: 20px 20px 10px;
}

.box .event-desc h4 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 15px;
    padding: 0;
}

.box .event-desc small {
    background-color: #111;
    color: #ffffff;
    padding: 0 10px;
}

.teammembers img {
    width: 100%;
}

.teammembers:hover {
    cursor: pointer;
}

teammembers .magnifier {
    overflow: hidden;
}

.teammembers .magnifier p {
    padding-bottom: 10px;
}

.teammembers:hover .magnifier,
.entry:hover .magnifier {
    zoom: 1;
    filter: alpha(opacity=100);
    opacity: 1;
}

.teammembers {
    overflow: hidden;
    position: relative;
}

.visible-buttons1 {
    visibility: hidden;
    margin: 0 auto;
    opacity: 0;
    position: absolute;
    text-align: center;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -ms-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    bottom: -50%;
    left: 0;
    right: 0;
    padding: 50px 20px 40px;
    position: absolute;
    text-align: center;
}

.visible-buttons1 h4 {
    padding: 0;
    margin: 0;
    font-size: 18px;
}

.teammembers .magnifier {
    left: 0 !important;
    bottom: 0 !important;
    right: 0 !important;
    top: 0 !important;
}

.entry:hover .visible-buttons1 {
    opacity: 1;
    bottom: 0;
    visibility: visible;
}

.teambuttons p {
    color: #ffffff;
    padding: 0 30px 10px;
}

.teammembers .social-links i {
    color: #ffffff;
}

.teammembers .social-links a {
    color: #ffffff;
    display: inline-block;
    position: relative;
    width: 30px;
    font-size: 20px;
}

.teamdesc {
    border: 1px solid #eee;
    padding: 30px 30px;
}

.teamdesc h4 {
    padding: 0;
    margin: 0 0 5px;
    font-weight: 700;
    font-size: 18px;
}

.teamdesc p {
    display: block;
    font-style: italic;
    padding-bottom: 0;
    margin: 0;
}


.nopadtop {
    padding-top: 0 !important;
}
.section.gb {
    background-color: #f6f6f6;
}
.parallax {
    background-attachment: fixed;
    background-position: 50% 0;
    background-repeat: no-repeat;
    height: 100%;
    position: relative;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.parallax.parallax-off {
    background-attachment: scroll;
    display: block;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    position: relative;
    background-position: top center;
    vertical-align: sub;
    width: 100%;
    z-index: 2;
}



/******************************************
SECTIONS
******************************************/

.event-section {
    height: 100vh;
    height: 100%;
    padding: 5rem 0;
}

.parallax {
    background-attachment: fixed;
    background-position: 50% 0;
    background-repeat: no-repeat;
    height: 100%;
    position: relative;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.parallax.parallax-off {
    background-attachment: scroll;
    display: block;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    position: relative;
    background-position: top center;
    vertical-align: sub;
    width: 100%;
    z-index: 2;
}

.no-scroll-xy {
    overflow: hidden !important;
    -webkit-transition: all .4s ease-in-out;
    -moz-transition: all .4s ease-in-out;
    -ms-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.boxed {
    box-shadow: 0 30px 50px 0 rgba(1, 1, 1, 0.18);
    padding: 8rem 4rem 8rem;
    background-color: #ffffff;
    margin-top: -60px;
}

.boxed.boxedp4 {
    padding-top: 4rem;
}

.section {
    background-color: #ffffff;
    padding: 8rem 0;
    position: relative;
    display: block;
}

.section-title {
    margin-bottom: 45px;
}

.text-widget h3,
.section-title h3 {
    margin: 0 0 25px;
    padding: 0;
    line-height: 1;
    font-size: 30px;
    font-weight: 700;
}

.section-title p {
    max-width: 800px;
    margin: 0 auto;
    padding: 0;
    font-size: 16px;
    font-family: 'Droid Serif', sans-serif;
    font-style: italic;
}

.section.gb {
    background-color: #f6f6f6;
}

.section.db {
    background-color: #000000;
}

.overlay {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
    background: url(images/pattern.png) repeat center center rgba(0, 0, 0, 0.7);
}

.video-section {
    position: relative;
}

.slider-bottom {
    position: absolute;
    bottom: 40px;
    left: 0;
    font-size: 10px;
    text-transform: uppercase;
    color: #ffffff;
    letter-spacing: 3px;
    z-index: 11;
    right: 0;
    margin: auto;
    text-align: center;
}

.slider-bottom i {
    display: block;
    font-size: 14px;
    padding: 10px;
}

.home-text-wrapper {
    display: table;
    width: 100%;
    height: 100%;
    max-width: 900px;
    position: relative;
    text-align: center;
    z-index: 11;
}

.home-content {
    position: relative;
}

.home-message {
    display: table-cell;
    height: 100%;
    vertical-align: middle;
}

.home-message p {
    font-size: 54px;
    color: #ffffff;
    padding: 0;
    margin: 0;
    font-weight: 700;
}

.home-message small {
    font-size: 16px;
    font-family: 'Droid Serif', sans-serif;
    font-style: italic;
    display: block;
    padding: 20px 0 35px;
    margin: 0;
}

.nopadtop {
    padding-top: 0 !important;
}

.box {
    background-color: #ffffff;
    padding: 4rem;
    position: relative;
    z-index: 11;
}

.box p {
    padding: 0;
    margin-bottom: 15px;
}

.box i {
    margin-bottom: 30px;
    display: inline-block;
    line-height: 1;
    font-size: 46px
}

.box h4 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 20px;
    padding: 0;
}

.m30 {
    margin-top: -60px;
}

.readmore {
    font-weight: 700;
    font-size: 15px;
}

.readmore:after {
    content: "\f107";
    vertical-align: middle;
    padding-left: 5px;
    font-family: "Flaticon";
    font-size: 11px;
}

.image-box {
    position: relative;
}

.image-box .overlay {
    background-image: none;
    border-radius: 6px;
    background-color: rgba(0, 0, 0, 0.2);
}

.image-box img {
    width: 100%;
}

.image-box h4 a,
.image-box h4 {
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    top: 50%;
    z-index: 1;
    font-size: 20px;
    margin: -7px auto;
    color: #ffffff;
}

hr.invis {
    border: 0;
    margin: 30px 0;
}
.colorpaste
{
  background-color: #01bacf;
  text-transform: uppercase;
}
####upcoming
.newclass
{
  background-color: #black;
  color: white;
}
.ieltstext{
    text-transform: uppercase;
    font-family: 'Droid Serif', sans-serif;
}

.ieltstext:hover
{
    color: #01bacf;
}
.ieltstextB{
    font-family: 'Droid Serif', sans-serif;
    padding-bottom: 40px;
}
.ieltstextB:hover{
    color:#D9D9D9;

}
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.ieltsimage{
padding-bottom: 50px;
}
.ieltsimage:hover{
    opacity: 75%;
}
.addingpad
{
    padding: 50px;
}
</style>


    <section class="parallax event-section" data-stellar-background-ratio="0.5" style="background-image:url('img/tofel.jpg'); ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h3 class="shadow">TOEFL</h3>
                            <p class="whitingcheck">ROAD TO TOEFL</p>
                            <a href="#module" class="btn btn-primary">See TOEFL Modules</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->


        </section><!-- end section -->







        <section id="module" class="section" style="background-color: black; color: white;" >
            <div class="container">
                <div class="section-title text-center">
                        <h1 class="ieltstext addingpad" >TOEFL consists of four module<h1>
                        <div class="row">
                          <div class="column">
                            <h1 class="ieltstext"> Reading Comprehension<h1>
                                <p class="ieltstextB">In this section, you will be required to read 3-5 passages and answer 12-14 questions on each passage. The section is scored based on the number of correct reading comprehension responses.</p> 
                          </div>
                          <div class="column">
                            <h1 class="ieltstext">Listening Comprehension<h1>
                                <p class="ieltstextB">In this section, you will hear short conversations as well as long conversations. After the short conversation, you will be asked one question and multiple choices of answers will be given. You have to choose one answer. </p>
                          </div>
                          <div class="column">
                            <h1 class="ieltstext"> Speaking Section<h1>
                                <p class="ieltstextB">For you to earn the highest scores in the Speaking Section, your responses must fulfill the demands of the task given with only minor mistakes or lapses. The test graders are looking for a highly intelligible and sustained conversation. </p>
                          </div>
                          <div class="column">
                            <h1 class="ieltstext">Writing Section<h1>
                                <p class="ieltstextB">The essay should effectively address a topic. The response should be well-organized and well-developed using relevant explanations and detailed support. Furthermore, it should also display unity, progression, and coherence. </p>
                          </div>
                        </div>
                    
                </div><!-- end title -->

                
                </div><!-- end row -->
            </div><!-- end container -->
        </section>



<?php include ('footer.php') ?>