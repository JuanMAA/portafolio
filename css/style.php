
<?php 

  $random_number = rand(1,3);
  $primary_color = null;
  $rgb_color = null;

  switch ($random_number) {
    case 1:
        $primary_color = '#173e8b';
        $rgb_color = '90deg, rgba(12,139,247,0.60) 0%, rgba(12,74,237,0.60) 35%, rgba(0,178,224,0.15) 100%';
        break;
    case 2:
        $primary_color = '#30a360'; 
        $rgb_color = '90deg, rgba(100,185,38,0.60) 0%, rgba(61,168,80,0.60) 35%, rgba(48,163,96,0.15) 100%'; 
        break;
    case 3:
        $primary_color = '#FA7E5F'; 
        $rgb_color = '90deg, rgba(247,71,12,0.60) 0%, rgba(240,122,46,0.60) 35%, rgba(247,71,12,0.15) 100%'; 
        break;
  }

?>

<style>

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  outline: none;
  list-style: none;
  word-wrap: break-word;
}
.profile-badge--light {
  box-shadow: 0px 0px 27px 3px rgb(0 0 0 / 6%) !important;
}
.artdeco-entity-image--circle-4{
  width: 100% !important;
  height: 100% !important;
  padding-left: 35px !important;
  padding-right: 35px !important;
}
.profile-badge__header-logo-icon--light{
  color: <?php echo $primary_color ?> !important;
}
.profile-badge__header--light{
  text-align: center !important;
  background-color: #fafafa !important;
}
.profile-badge__cta-btn--light{
  box-shadow: inset 0 0 0 1px <?php echo $primary_color ?> !important;
  color: <?php echo $primary_color ?> !important;
}
.profile-badge--width-330 {
  width: 100% !important;
}
body {
  /*font-family: 'Raleway', sans-serif;*/
  font-size: 14px;
  line-height: 26px;
  font-weight: 400;
  letter-spacing: 0.5px;
  color: #777;
  overflow-x: hidden;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  /*font-family: 'Raleway', sans-serif;*/
  color: #222;
}
img {
  max-width: 100%;
  height: auto;
}
ul {
  padding: 0;
  list-style: none;
}
p {
  margin: 0;
}
a:hover {
  text-decoration: none;
  outline: none;
}
.text_white {
  color: #fff;
}
.padding_0 {
  padding: 0;
}
.gray_bg {
  background: #fafafa;
}
.gray_bg {
  background: #fafafa;
}
/* START PRELOADER DESIGN */
.preloader {
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  background: linear-gradient(<?php echo $rgb_color ?>);
  z-index: 99999;
}
.spinner {
  width: 50px;
  height: 50px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -25px 0 0 -25px;
  font-size: 10px;
  text-indent: -12345px;
  z-index: 10000;
}
.double-bounce1,
.double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0.6;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: sk-bounce 2s infinite ease-in-out;
  animation: sk-bounce 2s infinite ease-in-out;
}
.double-bounce2 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
@-webkit-keyframes sk-bounce {
  0%,
  100% {
    -webkit-transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
  }
}
@keyframes sk-bounce {
  0%,
  100% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}
/* END PRELOADER DESIGN */
.blue_bg {
  background: <?php echo $primary_color ?>;
}
/* Start Section-Padding */
.section_padding {
  padding: 55px 0;
}
.pb_70 {
  padding-bottom: 70px;
}
/* End Section-Padding */
/* Start Section-Heading */
.section_heading  {
  padding-bottom: 40px;
}

.section_heading .sm_border_1{
  background-color: #173e8b;
}

.section_bg_1 strong{
  background: #173e8b;
}
.section_bg_2 strong{
  background: #0f9170;
}
.section_bg_3 strong{
  background: #b45617;
}
.section_bg_4 strong{
  background: #9c2241;
}
.section_bg_5 strong{
  background: #29a796;
}

.section_heading strong {
  background: <?php echo $primary_color ?>;
  color: #fff;
  font-weight: 600;
  text-transform: uppercase;
  box-shadow: -1px 1px 1px rgba(20, 97, 255, 0.1) !important;
  font-size: 10px;
  border-radius: 5px;
  padding: 5px 15px;
}
.section_heading h2 {
  font-size: 42px;
  font-weight: 600;
  color: #222;
  margin-top: 5px;
  margin-bottom: 10px;
}
.section_heading .sm_border {
  display: block;
  height: 1px;
  width: 300px;
  margin-bottom: 15px;
  bottom: -15px;
  position: relative;
  left: 50%;
  background-color: <?php echo $primary_color ?>;
  -webkit-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}
.cst_border {
  display: block;
  height: 1px;
  width: 500px;
  position: relative;
  margin-bottom: 30px;
  left: 50%;
  background-color: <?php echo $primary_color ?>;
  -webkit-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}
.section_heading span {
  font-weight: 400;
  color: <?php echo $primary_color ?>;
}
.section_heading p {
  margin-bottom: 20px;
  margin: 0 auto;
  max-width: 700px;
}
/* End Section-Heading */
/* ----------------------------------------------------------------
    [ End Basics ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 02 Start Buttons ]
-----------------------------------------------------------------*/
/* Start Btn-Style */
.banner_content .banner_btn {
  padding: 13px 41px;
  font-size: 18px;
  font-weight: 600;
  border-radius: 0;
  letter-spacing: 0.6px;
  margin-bottom: 45px;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.banner_content .banner_btn:hover {
  background: <?php echo $primary_color ?>;
  color: #fff;
  border-color: <?php echo $primary_color ?>;
}
.main_btn {
  color: #fff;
  font-size: 14px;
  margin-top: 20px;
  text-transform: capitalize;
  padding: 13px 20px;
  letter-spacing: 0.6px;
  font-weight: 600;
  background: <?php echo $primary_color ?>;
  /* BGBOTONES */
  line-height: 10px;
  border: none;
  border-radius: 5px;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out 0s;
}
.main_btn_curr {
  color: #fff;
  font-size: 14px;
  text-transform: capitalize;
  padding: 13px 20px;
  letter-spacing: 0.6px;
  font-weight: 600;
  background: <?php echo $primary_color ?>;
  /* BGBOTONES */
  line-height: 10px;
  border: none;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out 0s;
}
.main_sm_btn {
  color: #fff;
  font-size: 12px;
  margin-top: 5px;
  text-transform: capitalize;
  padding: 10px 15px;
  letter-spacing: 0.6px;
  font-weight: 600;
  background: <?php echo $primary_color ?>;
  /* BGBOTONES */
  line-height: 10px;
  border: none;
  border-radius: 5px;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out 0s;
}
.main_btn:focus,
.main_btn:hover {
  color: <?php echo $primary_color ?>;
  background: #fff;
  border: none;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 25px;
}
.blog-info .blog_btn {
  padding: 20px 30px;
}
/* ----------------------------------------------------------------
    [ End Buttons ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 03 Start Header ]
-----------------------------------------------------------------*/
.navbar-default {
  border: none;
  border-radius: 0;
  margin-bottom: 0;
  width: 100%;
  padding: 2px 0;
  background-color: rgba(255, 255, 255, 0.1);

  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
.navbar-brand p {
  font-size: 30px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #fff;
  /*font-family: 'Raleway', sans-serif;*/
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #fff;
}
.menu-top {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  background-color: <?php echo $primary_color ?> !important;
}
.navbar-center {
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
}
.navbar-default .navbar-nav > li > a {
  color: #fff;
  font-size: 16px;
  font-weight: 400;
  text-transform: capitalize;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: rgba(255, 255, 255, 0.7);
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: rgba(255, 255, 255, 0.7);
  background-color: transparent;
}
.mobile-nav {
  display: none;
}
.navbar-default.menu-shrink {
  background-color: #fff;
  box-shadow: -1px 1px 1px rgba(20, 97, 255, 0.1);
  width: 100%;
  animation: fadeInDown 1s both 0.2s;
}
.navbar-default.menu-shrink .navbar-brand p {
  color: #222;
}
.navbar-default.menu-shrink li a {
  color: white !important;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
}
.navbar-default.menu-shrink li a:hover {
  color: rgba(255, 255, 255, 0.7) !important;
}
.navbar-default.menu-shrink .navbar-nav > .active > a,
.navbar-default.menu-shrink .navbar-nav > .active > a:hover,
.navbar-default.menu-shrink .navbar-nav > .active > a:focus {
  /*color: <?php echo $primary_color ?> !important;*/
  color: rgba(255, 255, 255, 0.7) !important;
  background-color: rgba(255, 255, 255, 0.1);
}
.navbar-default .navbar-toggle {
  background: #fff none repeat scroll 0 0;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #fff;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: <?php echo $primary_color ?>;
}
/* ----------------------------------------------------------------
     [ End Header ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
     [ 04 Start Banner ]
-----------------------------------------------------------------*/
.main_banner {
  height: 520px;
  background-size: cover;
  background-repeat: no-repeat;
}
.banner_bg {
  background-image: url(images/banner-1.jpg);
  background-size: cover;
  background-position: center center;
  position: relative;
}
.banner_bg:before {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(<?php echo $rgb_color ?>);
}
#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
}
.banner_content {
  margin-top: 185px;
}
.banner_content strong {
  color: <?php echo $primary_color ?>;
  font-size: 30px;
  background: #fff;
  padding: 4px 18px;
  border-radius: 5px;
}
.banner_content h1 {
  color: #fff;
  font-size: 50px;
  margin: 20px 0 5px;
}
.banner_content h1 span .fw_600 {
  font-weight: 600;
}
.banner_content h1 span .fw_300 {
  font-weight: 300;
}
.banner_content p {
  color: #fff;
  padding-bottom: 0;
}
.banner_social_link {
  margin-top: 25px;
}
.banner_social_link li {
  display: inline-block;
  margin-right: 12px;
}
.banner_social_link li a {
  color: #fff;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  display: inline-block;
  font-size: 30px;
  transition: 0.5s;
}
.banner_social_link li a:hover {
  background: #fff;
  border-radius: 10%;
  border-color: #fff;
  color: #124cc2;
}
/* Creative Banner Style */
.creative_banner_1 {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  border-width: 10rem 100vw 0 0;
  border-color: transparent #fff #fff transparent;
  border-style: solid;
}
.creative_banner_2 {
  position: relative;
  top: 100%;
  width: 100%;
  height: 0;
}
.creative_banner_2:before {
  content: '';
  position: absolute;
  bottom: -25px;
  left: 0;
  width: 100%;
  background-image: url(../images/shape.png);
  height: 150px;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}
.creative_banner_3 {
  position: relative;
  top: 100%;
  width: 100%;
  height: 0;
}
.creative_banner_3:before {
  content: "";
  border-right: 50vw solid #fff;
  border-top: 160px solid transparent;
  bottom: 0;
  right: 0;
  position: absolute;
  height: 0;
  width: 0;
}
.creative_banner_3:after {
  content: '';
  position: absolute;
  border-left: 50vw solid #fff;
  border-top: 160px solid transparent;
  bottom: 0;
  height: 0;
  left: 0;
  width: 0;
}
.creative_banner_4 {
  position: relative;
  top: 100%;
  width: 100%;
  height: 0;
}
.creative_banner_4:before {
  content: '';
  position: absolute;
  bottom: -60px;
  left: 0;
  width: 100%;
  background-image: url(../images/bottom-color.png);
  height: 150px;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}
.banner_bg {
  width: 100%;
  position: relative;
  z-index: 1;
}
.banner_bg:after {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  z-index: -1;
}
.svg.shape {
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 100%;
  z-index: 999;
}
.svg.shape svg {
  width: 100%;
  height: 100%;
  color: #fff !important;
}
/* ----------------------------------------------------------------
    [ End Banner ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 05 Start About ]
-----------------------------------------------------------------*/
.about_image {
  position: relative;
  z-index: 9;
}
.about_image:before {
  content: "";
  width: 60%;
  height: 98%;
  top: 13px;
  right: 203px;
  position: absolute;
  border: 10px solid <?php echo $primary_color ?>;
  z-index: -1;
}
.about_image:after {
  content: "";
  width: 60%;
  height: 96%;
  top: 24px;
  left: 0;
  position: absolute;
  background-image: url(../images/dott.jpg);
  z-index: -1;
}
.single_about h4 {
  font-size: 22px;
  font-weight: 700;
  margin: 0 0 15px;
  position: relative;
}
.single_about h4:after {
  position: absolute;
  content: "";
  width: 60px;
  height: 4px;
  background-color: #222;
  letter-spacing: 0px;
  bottom: -14px;
  margin: 0;
  left: 0;
}
.single_about h3 {
  font-size: 30px;
  color: <?php echo $primary_color ?>;
  font-weight: 400;
  margin: 20px 0 20px;
}
.about_details {
  margin-top: 20px;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
}
.about_details li {
  color: #333;
  display: inline-block;
  margin-top: 15px;
  width: 49%;
}
.about_details span {
  color: #222;
  font-weight: 500;
  text-transform: capitalize;
  display: inline-block;
  width: 40%;
}
.about_details ul li span > i {
  border: 1px solid #111;
  border-radius: 50%;
  color: #111;
  height: 30px;
  line-height: 30px;
  margin-right: 5px;
  text-align: center;
  width: 30px;
}
.ct_about {
  margin: 10px 0;
}
.ct_about span i {
  margin-right: 5px;
}
.single_about a i {
  margin-right: 20px;
  padding-right: 20px;
  border-right: 1px solid #ddd;
}
/* ----------------------------------------------------------------
    [ End About ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 06 Start Service ]
-----------------------------------------------------------------*/
.single-service {
  border: 1px solid #f7f7f7;
  padding: 40px 30px;
  background: #fff;
  margin-bottom: 30px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
  position: relative;
  transition: all 0.4s ease;
  border-bottom: 3px solid transparent;
}
.single-service:hover {
  background: #fff;
  border-bottom: 3px solid <?php echo $primary_color ?>;
  transform: translateY(-7px);
}
.single-service i {
  font-size: 40px;
  display: block;
  color: <?php echo $primary_color ?>;
}
.single-service h4 {
  font-size: 22px;
  margin-top: 30px;
  text-transform: capitalize;
  color: #222;
  font-weight: 500;
  transition: all 0.4s ease;
}
.single-service:hover h4 {
  color: <?php echo $primary_color ?>;
}
.single-service p {
  margin-top: 15px;
}
/* ----------------------------------------------------------------
    [ End Service ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 07 Start Cta ]
-----------------------------------------------------------------*/
.cta_section {
  background: url(images/banner-1.jpg);
  position: relative;
  background-size: cover;
  background-attachment: fixed;
}
.cta_section:before {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(<?php echo $rgb_color ?>);
}
.cta_content h3 {
  color: #fff;
  font-size: 30px;
  margin-top: 0;
  margin-bottom: 35px;
}
/* ----------------------------------------------------------------
    [ End Cta ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 08 Start Works ]
-----------------------------------------------------------------*/
.work_filter ul {
  padding: 0;
  list-style: none;
  margin-bottom: 30px;
}
.work_filter ul li {
  font-weight: 600;
  text-transform: capitalize;
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  border-radius: 30px;
  padding: 7px 20px;
  letter-spacing: 1px;
  background: #fafafa;
  margin: 0 5px 20px;
  transition: all 0.5s ease-in-out;
}
.work_filter ul li:hover {
  border-color: <?php echo $primary_color ?>;
  background: <?php echo $primary_color ?>;
  color: #fff;
}
.work_filter .active {
  color: #fff;
  border-color: <?php echo $primary_color ?>;
  background: <?php echo $primary_color ?>;
}
.work_content_area .item-img {
  position: relative;
  margin-bottom: 30px;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
}
.work_content_area .item-img:hover {
  -webkit-box-shadow: -10px 10px 30px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 10px 30px rgba(0, 0, 0, 0.1);
}
.work_content_area .item-img:hover .item-img-overlay {
  visibility: visible;
  opacity: 1;
}
.work_content_area .item-img-overlay {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  padding: 30px;
  background: rgba(255, 255, 255, 0.95);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.work_content_area .item-img-overlay .icon {
  position: absolute;
  right: 30px;
  bottom: 30px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  border: 1px solid <?php echo $primary_color ?>;
  text-align: center;
  font-size: 20px;
  color: <?php echo $primary_color ?>;
}
.work_content_area .item-img-overlay p {
  color: <?php echo $primary_color ?>;
  font-weight: 400;
  font-size: 13px;
}
.work_content_area .item-img-overlay h5 {
  font-weight: 400;
  font-size: 16px;
  margin-top: 5px;
}
/* ----------------------------------------------------------------
    [ End Works ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 09 Start Counter ]
-----------------------------------------------------------------*/
#counter_area {
  background: url(../images/counter.jpg);
  position: relative;
  background-size: cover;
  background-attachment: fixed;
}
#counter_area:before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  right: 0;
  bottom: 0;
  background: linear-gradient(<?php echo $rgb_color ?>);
}
.single_counter.border_left {
  border-left: 1px solid #fff;
}
.single_counter .icon {
  margin-bottom: 25px;
}
.single_counter .icon i {
  font-size: 40px;
  color: #fff;
}
.single_counter span {
  font-size: 30px;
  font-weight: 800;
  font-style: italic;
  color: #fff;
}
.single_counter h5 {
  font-size: 16px;
  color: #fff;
  font-weight: 600;
  margin-bottom: 0;
}
/* ----------------------------------------------------------------
    [ End Counter ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 10 Start Resume ]
-----------------------------------------------------------------*/
.education-container {
  position: relative;
  display: block;
  margin: 0;
}
.edu-list {
  position: relative;
  display: block;
  margin: 0 50px;
  list-style: none;
}
.edu-list > li {
  position: relative;
  margin: 0 0 30px;
  padding-left: 15px;
}
.edu-list > li strong {
  color: <?php echo $primary_color ?>;
  font-size: 14px;
}
.edu-list > li h5 {
  font-size: 16px;
  font-weight: 600;
}
.edu-list > li:not(:last-child)::before {
  content: '';
  position: absolute;
  top: 40px;
  left: -27px;
  width: 3px;
  height: 100%;
  background: <?php echo $primary_color ?>;
}
.edu-list > li::after {
  content: "\e032";
  position: absolute;
  top: 0;
  left: -50px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 100%;
  text-align: center;
  font-size: 20px;
  /*font-family: 'et-line';*/
  background: <?php echo $primary_color ?>;
  color: #fff;
  box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.07);
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.experience > li::after {
  content: "\e015";
  position: absolute;
  top: 0;
  left: -50px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 100%;
  text-align: center;
  font-size: 20px;
  /*font-family: 'et-line';*/
  background: <?php echo $primary_color ?>;
  color: #fff;
  box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.07);
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.skils-front > li::after {
  content: "\f5fc";
  position: absolute;
  top: 0;
  left: -50px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 100%;
  text-align: center;
  font-size: 20px;
  /*font-family: 'et-line';*/
  background: <?php echo $primary_color ?>;
  color: #fff;
  box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.07);
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
/* ----------------------------------------------------------------
    [ End Resume ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 11 Start Testimonial ]
-----------------------------------------------------------------*/
#testimonial_area {
  background-image: url(../images/testi-bg.jpg);
  background-size: cover;
  background-attachment: fixed;
  background-position: center center;
  position: relative;
}
#testimonial_area:before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  right: 0;
  bottom: 0;
  background: linear-gradient(<?php echo $rgb_color ?>);
}
.single_testimonial {
  background: #fff;
  padding: 30px;
  margin: 35px 0px 0;
  position: relative;
  display: block;
}
.single_testimonial .testimonial-title {
  font-size: 16px;
  font-weight: 700;
  color: <?php echo $primary_color ?>;
  margin-top: 25px;
  margin-bottom: 5px;
  text-transform: capitalize;
  letter-spacing: 1px;
}
.single_testimonial .test_designation {
  display: block;
  font-size: 13px;
  margin: 0 0 10px;
  font-weight: 400;
}
.single_testimonial .pic {
  width: 70px;
  height: 70px;
  position: absolute;
  top: -34px;
  left: 0;
  bottom: 0;
  margin: 0 auto;
  right: 0;
  z-index: 1;
}
.single_testimonial .pic img {
  width: 100%;
  height: auto;
  border-radius: 50%;
}
#testimonial_area .owl-nav {
  position: absolute;
  top: 50%;
  width: 100%;
}
#testimonial_area .owl-prev,
#testimonial_area .owl-next {
  width: 40px;
  height: 40px;
  line-height: 40px;
  color: #fff;
  border-radius: 50%;
  text-align: center;
  background-image: linear-gradient(<?php echo $rgb_color ?>);
  position: absolute;
}
#testimonial_area .owl-prev {
  left: -60px;
}
#testimonial_area .owl-next {
  right: -60px;
}
/* ----------------------------------------------------------------
    [ End Testimonial ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 12 Start Blog ]
-----------------------------------------------------------------*/
.single_blog {
  margin-bottom: 30px;
}
.blog-thumb {
  background: #ffffff;
  -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
  border-radius: 3px;
  text-align: left;
  margin-bottom: 30px;
}
.blog-thumb small {
  color: <?php echo $primary_color ?>;
  font-weight: 500;
  display: block;
}
.blog-thumb small .fa {
  margin-right: 5px;
}
.blog-thumb small,
.blog-thumb small + span {
  display: inline-block;
  vertical-align: middle;
}
.blog-thumb small + span {
  color: #777;
  font-size: 10px;
  font-weight: bold;
  text-transform: capitalize;
  margin-left: 2px;
}
.blog-thumb h4 {
  padding: 8px 0 12px;
  font-size: 22px;
  margin: 0;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
}
.blog-thumb h4:hover {
  color: <?php echo $primary_color ?>;
}
#blog-detail h2 {
  padding: 25px 0 10px 0;
}
.blog-info {
  padding: 45px 35px;
}
.blog-info .blog_btn {
  padding: 20px 30px;
}
/* ----------------------------------------------------------------
    [ End Blog ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 13 Start Contact ]
-----------------------------------------------------------------*/
#contact {
  background: #fafafa;
}
#contact-form .form-group input {
  border-color: #ddd;
  height: 40px;
  border-radius: 0;
  box-shadow: none;
}
#contact-form .form-group input:focus {
  border-color: <?php echo $primary_color ?>;
}
#contact-form .form-group textarea {
  border-color: #ddd;
  border-radius: 0;
  box-shadow: none;
}
#contact-form .form-group textarea:focus {
  border-color: <?php echo $primary_color ?>;
}
.contact_widget_area {
  margin-left: 30px;
  background: #fff;
  -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.contact_widget_area .contact_info {
  padding: 30px 30px;
  margin-bottom: -13px;
}
.contact_widget_area .contact_info i {
  font-size: 30px;
  color: <?php echo $primary_color ?>;
  float: left;
  padding-right: 25px;
}
.contact_widget_area .contact_info h5 {
  color: #222;
  font-size: 16px;
  font-weight: 600;
  margin: 0 0 10px;
}
.contact_widget_area .contact_info p {
  padding-left: 53px;
  margin: 0;
}
#submitButton {
  width: 100%;
}
/* ----------------------------------------------------------------
    [ End Contact ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 14 Start Footer ]
-----------------------------------------------------------------*/
.footer {
  padding: 30px 0 20px;
  background: <?php echo $primary_color ?>;
}
.copy-text p {
  color: #fff;
  margin-top: 9px;
  margin-bottom: 0;
}
.social-link li {
  display: inline-block;
  margin: 0 5px;
}
.social-link li a {
  color: #fff;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  display: inline-block;
  font-size: 25px;
  transition: all 0.5s;
}
.social-link li a:hover {
  background: #fff;
  color: <?php echo $primary_color ?>;
}
/* ----------------------------------------------------------------
    [ End Footer ]
-----------------------------------------------------------------*/
/* ----------------------------------------------------------------
    [ 15 Start Top-control ]
-----------------------------------------------------------------*/
.topcontrol {
  background: <?php echo $primary_color ?> none repeat scroll 0 0;
  border-radius: 0;
  bottom: 5px;
  margin-bottom: 80px;
  box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.2);
  color: #fff;
  cursor: pointer;
  font-size: 26px;
  height: 40px;
  opacity: 1;
  filter: alpha(opacity=100);
  padding: 6px 12px;
  border-radius: 100%;
  position: fixed;
  margin-right: 10px;
  -webkit-transition: all 0.2s ease 0s;
  transition: all 0.2s ease 0s;
  width: 40px;
  z-index: 99;
}
.topcontrol:hover {
  background: #fff;
  color: <?php echo $primary_color ?>;
}
/* ----------------------------------------------------------------
    [ End Top-control ]
-----------------------------------------------------------------*/

</style>

