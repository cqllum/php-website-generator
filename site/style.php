<?php

header("Content-type: text/css");

require_once __DIR__ . "/includes/glob.inc.php";

?>


@import "assets/css/bootstrap.css";
@import "assets/css/animate.css";
@import "assets/css/animsition.css";
@import "assets/css/woocommerce.css";
@import "assets/css/owl.carousel.css";
@import "assets/css/font-awesome.css";
@import "assets/css/ionicons.css";
@import "assets/css/font-etline.css";
@import "assets/css/autora-icons.css";

/* For Revolution Slider */
@import "includes/rev-slider/css/settings.css";
@import "includes/rev-slider/css/layers.css";
@import "includes/rev-slider/css/navigation.css";

/**
  *	Reset Browsers
  * General
  * Elements
  * Forms
  * Typography
  * Extra classes
  * Layouts
  * Column
  * Effect
  * Rev Slider
  * Top Bar
  * Header
  * Featured Title
  * Blog Post
  * Widgets
  * Pagination
  * Footer
  * Bottom
  * Scroll Top
  * Switcher
  * Boxed
  * Media Queries
*/

/* Reset Browsers
-------------------------------------------------------------- */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;font:inherit;vertical-align:baseline;font-family:inherit;font-size:100%;font-style:inherit;font-weight:inherit;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}html{font-size:62.5%;overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;}*,*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}body{background:#fff;line-height:1;}article,aside,details,figcaption,figure,footer,header,main,nav,section{display:block}ol,ul{list-style:none}table{border-collapse:collapse;border-spacing:0;}caption,th,td{font-weight:normal;text-align:left;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}blockquote,q{quotes:none}a:focus{outline:none}a:hover,a:active{outline:0}a img{border:0}img{max-width:100%;height:auto;}select{max-width:100%}

/* General
-------------------------------------------------------------- */
body,
button,
input,
select,
textarea { font-family: 'Open Sans', sans-serif; font-weight: 400; color: #555555; font-size: 14px; line-height: 24px; background-color: #fff; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; text-rendering: optimizeLegibility; overflow-x: hidden; overflow-y: auto; }
img { height: auto; max-width: 100%; vertical-align: middle; -ms-interpolation-mode: bicubic }
p { margin: 0 0 20px; }
strong,
b,
cite { font-weight: bold; }
dfn,
cite,
em,
i,
blockquote { font-style: italic; }
blockquote { position: relative; background-color: transparent;  margin: 0px; padding: 0 0 0 32px; }
blockquote > p:last-child { margin-bottom: 0; }
blockquote cite { position: absolute; right: 0; bottom: 0; }
blockquote em,
blockquote i { font-style: normal; }
abbr,
acronym { border-bottom: 1px dotted #e0e0e0; cursor: help; }
mark,
ins { text-decoration: none; }
sup,
sub { font-size: 75%; height: 0; line-height: 0; position: relative; vertical-align: baseline; }
sup { top: -6px; }
sub { bottom: -3px; }
small { font-size: 75%; }
big { font-size: 125%; }
address { font-style: italic; margin: 0 0 20px; }
code,
kbd,
tt,
var,
samp,
pre { margin: 20px 0; padding: 4px 12px; background: #f5f5f5; border: 1px solid #e0e0e0; overflow-x: auto;  -webkit-hyphens: none; -moz-hyphens: none; hyphens: none; border-radius: 0; height: auto; }

/* Elements
-------------------------------------------------------------- */
html { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
*,
*:before,
*:after { -webkit-box-sizing: inherit; -moz-box-sizing: inherit; box-sizing: inherit; }
hr { background-color: #e0e0e0; border: 0; height: 1px; margin-bottom: 20px; }

/* List */
ul,
ol { padding: 0; margin: 0 0 20px 20px; }
ul { list-style: disc; }
ol { list-style: decimal; }
li > ul,
li > ol { margin-bottom: 0; }
li { list-style: none;}
ul li,
ol li { padding: 0.1em 0; }
dl,
dd { margin: 0 0 20px; }
dt { font-weight: bold; }
del, .disable { text-decoration: line-through; filter: alpha(opacity=50); opacity: 0.5;}

/* Table */
table,
th,
td { border: 1px solid #e0e0e0; }
table { border-collapse: separate; border-spacing: 0; border-width: 1px 0 0 1px; margin: 0 0 30px; table-layout: fixed; width: 100%; }
caption, th, td { font-weight: normal; text-align: left; }
th { border-width: 0 1px 1px 0; font-weight: bold; }
td { border-width: 0 1px 1px 0; }
th,
td { padding: 8px 12px; }
a:hover { text-decoration: none; }

/* Media */
embed,
iframe,
object,
video { margin-bottom: 20px; max-width: 100%; vertical-align: middle; }
p > embed,
p > iframe,
p > object,
p > video { margin-bottom: 0; }

/* Accessibility - Text meant only for screen readers */
.screen-reader-text { clip: rect(1px, 1px, 1px, 1px); position: absolute !important; height: 1px; width: 1px; overflow: hidden; }
.screen-reader-text:focus { background-color: #f1f1f1; border-radius: 3px; box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6); clip: auto !important; color: #21759b; display: block; height: auto; left: 5px; line-height: normal; padding: 15px 23px 14px; text-decoration: none; top: 5px; width: auto; z-index: 100000; }

/* Forms
-------------------------------------------------------------- */
/* Fixes */
button,
input { line-height: normal; }
button, input, select, textarea { font-size: 100%; line-height: inherit; margin: 0; vertical-align: baseline; }
input,
textarea { font-size: 1em; max-width: 100%; background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)); /* Removing the inner shadow on iOS inputs */ }
textarea { overflow: auto; /* Removes default vertical scrollbar in IE6/7/8/9 */ vertical-align: top; /* Improves readability and alignment in all browsers */ }
input[type="checkbox"] { display: inline; }
button,
input[type="button"],
input[type="reset"],
input[type="submit"] { line-height: 1; cursor: pointer; -webkit-appearance: button; border: 0; }
input[type="checkbox"],
input[type="radio"] { padding: 0; /* Addresses excess padding in IE8/9 */ }
input[type="search"] { -webkit-appearance: textfield; /* Addresses appearance set to searchfield in S5, Chrome */ }
input[type="search"]::-webkit-search-decoration { /* Corrects inner padding displayed oddly in S5, Chrome on OSX */ -webkit-appearance: none; }
button::-moz-focus-inner,
input::-moz-focus-inner { border: 0; padding: 0; }

/* Remove chrome yellow autofill */
input:-webkit-autofill { -webkit-box-shadow: 0 0 0px 1000px #f7f7f7 inset }

/* Reset search styling */
input[type="search"] { outline: 0 }
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-results-button,
input[type="search"]::-webkit-search-results-decoration { display: none }

/* Input normal */
select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"] { color: #777; border: 1px solid #e7e7e7; padding: 13px 20px; letter-spacing: 0px; background-color: transparent; line-height: inherit; width: 100%; margin-bottom: 14px; height: auto; text-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-transition: border ease .238s; -moz-transition: border ease .238s; transition: border ease .238s; }

/* Contact Form 7 */
.wpcf7-form select,
.wpcf7-form textarea,
.wpcf7-form input { margin-bottom: 0; }

/* Input focus */
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus { border-color: <?= $data['design']['theme1']; ?>; outline: 0; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; }

/* Button */
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {  letter-spacing: 0.5px;  font-weight: 600;  text-transform: uppercase; background-color: <?= $data['design']['theme1']; ?>; color: #fff; padding: 16px 30px; display: inline-block; font-family: 'Montserrat', sans-serif; -webkit-appearance: none; -webkit-transition: all ease 0.3s; -moz-transition: all ease 0.3s; transition: all ease 0.3s; }

/* Button hover + focus */
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus { outline: 0; background-color: #222; }

/* Placeholder color */
::-webkit-input-placeholder { color: #999; }
:-moz-placeholder { color: #999; }
::-moz-placeholder { color: #999; opacity: 1; }/* Since FF19 lowers the opacity of the placeholder by default */ }
:-ms-input-placeholder { color: #999; }

/* Links */
a { color: #222; outline: 0; text-decoration: none; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease;  -ms-transition: all 0.3s ease;   -o-transition: all 0.3s ease;      transition: all 0.3s ease;}
a:hover,
a:focus,
a:active { outline: 0; color: <?= $data['design']['theme1']; ?>; text-decoration: none }

/* Typography
-------------------------------------------------------------- */
h1,
h2,
h3,
h4,
h5,
h6 { font-family: 'Montserrat', sans-serif; color: #222; font-weight: 600; line-height: 1.5; margin: 0 0 15px; text-rendering: optimizeLegibility; }

h1 { font-size: 2.428em; } /* 34px */
h2 { font-size: 2em; } /* 30px */
h3 { font-size: 1.714em; } /* 24px */
h4 { font-size: 1.428em; } /* 20px */
h5 { font-size: 1.2em; } /* 18px */
h6 { font-size: 1.142em; } /* 16px */

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a { color: inherit }

/* Extra classes
-------------------------------------------------------------- */
.no-margin { margin: 0px !important; }
.no-border { border: 0px !important; }
.no-letter-spacing { letter-spacing: 0px !important;; }
.max-width-770 { max-width: 770px !important; }
.max-width-680 { max-width: 680px !important; }

.font-heading { font-family: 'Montserrat', sans-serif; }

.font-size-35 { font-size: 35px !important; }
.font-size-30 { font-size: 30px !important; }
.font-size-28 { font-size: 28px !important; }
.font-size-16 { font-size: 16px !important; }
.font-size-14 { font-size: 14px !important; }

.font-weight-700 { font-weight: 700 !important; }
.font-weight-600 { font-weight: 600 !important; }
.font-weight-400 { font-weight: 400 !important; }

.line-height-62 { line-height: 62px !important; }
.line-height-50 { line-height: 50px !important; }
.line-height-39 { line-height: 39px !important; }
.line-height-28 { line-height: 28px !important; }
.line-height-27 { line-height: 27px !important; }
.line-height-26 { line-height: 26px !important; }
.line-height-24 { line-height: 24px !important; }
.line-height-normal { line-height: normal !important; }

.letter-spacing-1-4 { letter-spacing: 1.4px !important; }
.letter-spacing-1-1 { letter-spacing: 1.1px !important; }
.letter-spacing-03 { letter-spacing: 0.3px !important; }
.letter-spacing-01 { letter-spacing: 0.1px !important; }
.letter-spacing-005 { letter-spacing: -0.05px !important; }

.text-accent { color: <?= $data['design']['theme1']; ?> !important;  }
.text-white { color: #fff !important; }
.text-808 { color: #808080 !important; }
.text-777 { color: #777 !important; }
.text-666 { color: #666 !important; }

.bg-light-grey { background-color: #f3f4f6 !important; }
.bg-white-column { background-color: #fff !important;}
.bg-light-snow { background-color: #fafafb; }
.bg-f7f { background-color: #f7f7f7 !important;}
.bg-ffc { background-color: <?= $data['design']['theme1']; ?> !important;}
.bg-row-1 { background: url('assets/img/page/bg-quote.jpg') center center no-repeat; background-size: cover; }
.bg-row-2 { background: url('assets/img/page/bg-iconbox.jpg') center center no-repeat; background-size: cover; }

.padding-top-45 { padding-top: 45px !important; }
.padding-top-17 { padding-top: 17px !important; }
.padding-top-16 { padding-top: 16px !important; }

.padding-left-13 { padding-left: 13px !important; }
.padding-left-7 { padding-left: 7px !important; }

.margin-top-55 { margin-top: 55px !important; }
.margin-top-51 { margin-top: 51px !important; }
.margin-top-40 { margin-top: 40px !important; }
.margin-top-33 { margin-top: 33px !important; }
.margin-top-30 { margin-top: 30px !important; }
.margin-top-28 { margin-top: 28px !important; }
.margin-top-27 { margin-top: 27px !important; }
.margin-top-22 { margin-top: 22px !important; }
.margin-top-20 { margin-top: 20px !important; }
.margin-top-18 { margin-top: 18px !important; }
.margin-top-14 { margin-top: 14px !important; }
.margin-top-13 { margin-top: 13px !important; }
.margin-top-11 { margin-top: 11px !important; }
.margin-top-7 { margin-top: 7px !important; }
.margin-top-3 { margin-top: 3px !important; }

.margin-bottom-43 { margin-bottom: 43px !important; }
.margin-bottom-31 { margin-bottom: 31px !important; }
.margin-bottom-30 { margin-bottom: 30px !important; }
.margin-bottom-23 { margin-bottom: 23px !important; }
.margin-bottom-15 { margin-bottom: 15px !important; }
.margin-bottom-14 { margin-bottom: 14px !important; }

.margin-right-18 { margin-right: 18px !important; }
.margin-right-10 { margin-right: 10px !important; }
.margin-right-12 { margin-right: 12px !important; }
.margin-right-8 { margin-right: 8px !important; }
.margin-right-6 { margin-right: 6px !important; }

.position-relative { position: relative; }

.right-38 { right: 38px !important; }
.maxwidth-99 { max-width: 99% !important; }

/* Layouts
-------------------------------------------------------------- */
#main-content { padding: 81px 0px; }
body.page #main-content { padding-top: 0; padding-bottom: 0; }

/* Inner Content */
#inner-content,
#inner-sidebar { position: relative; z-index: 1; }

/* Sidebar Right */
.sidebar-right #site-content { float: left; width: 71.9%; }
.sidebar-right.width-73 #site-content {width: 73.1%; }
.sidebar-right.width-71 #site-content {width: 71.8%; }
.sidebar-right #sidebar { float: right; width: 23.1%; }

/* Sidebar left */
.sidebar-left #site-content { float: right; width: 71.7%; }
.sidebar-left #sidebar { float: left; width: 23.1%; }


/* No Sidebar */
.no-sidebar #site-content { width: 100% !important; max-width: none !important; float: none !important; }

/* Column
-------------------------------------------------------------- */
.row.gutter-16 { margin-left: -8px; margin-right: -8px; }
.row.gutter-16 > [class*="col-"] { padding-left: 8px; padding-right: 8px; }

.themesflat-row.separator.light > [class*="col"]  { border-left: 1px solid rgba(255,255,255, 0.2); }
.themesflat-row.separator.light > [class*="col"]:first-child { border-left: 0px; }

.themesflat-row.gutter-15 { margin-left: -7.5px; margin-right: -7.5px; }
.themesflat-row.gutter-15 > [class*="col"] { padding-left: 7.5px; padding-right: 7.5px; }
.themesflat-row.gutter-30 { margin-left: -15px; margin-right: -15px; }
.themesflat-row.gutter-30 > [class*="col"] { padding-left: 15px; padding-right: 15px; }

.themesflat-row .span_1_of_4 { width: 33.333333%; float: left; }
.themesflat-row .span_1_of_3 { width: 25%; float: left; }
.themesflat-row .span_1_of_6 { width: 50%; float: left; }
.themesflat-row .span_1_of_12 { width: 100%; }

.themesflat-row.separator.drank > [class*="span_"]  { border-left: 1px solid #f2f2f2; }
.themesflat-row.separator.drank > [class*="span_"]:first-child { border-left: 0px; }

/* Effect
-------------------------------------------------------------- */
.data-effect .data-effect-item { position: relative; overflow: hidden; }
.overlay-effect { position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; visibility: hidden; -webkit-transform: translate3d(0,50%,0) matrix(1, 0, -0.1, 1, 0, 0); -moz-transform: translate3d(0,50%,0) matrix(1, 0, -0.1, 1, 0, 0); -ms-transform: translate3d(0,50%,0) matrix(1, 0, -0.1, 1, 0, 0); -o-transform: translate3d(0,50%,0) matrix(1, 0, -0.1, 1, 0, 0); transform: translate3d(0,50%,0) matrix(1, 0, -0.1, 1, 0, 0); -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.overlay-effect.bg-color-1 { background-color: rgba(0,0,0,0.2); }
.overlay-effect.bg-color-2 { background-color: rgba(0,0,0,0.3); }
.overlay-effect.bg-color-3 { background-color: rgba(0,0,0,0.7); }
.overlay-effect.bg-color-4 { background-color: rgba(0,0,0,0.6); }
.overlay-effect.bg-color-accent { background-color: rgba(0,0,0,0.4) }

.data-effect-item:hover .overlay-effect {-webkit-transform: translate3d(0,0,0) ; -moz-transform: translate3d(0,0,0) ; -ms-transform: translate3d(0,0,0) ; -o-transform: translate3d(0,0,0); transform: translate3d(0,0,0) ; opacity: 1; visibility: visible; }

.has-effect-icon { position: relative; }
.has-effect-icon .elm-link { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); opacity: 0; visibility: hidden; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; transform: scale(0.5);}
.has-effect-icon .elm-link span,
.has-effect-icon .elm-link a { display: block; text-align: center; }
.has-effect-icon .elm-link span:before,
.has-effect-icon .elm-link a:before { content: ""; font-family: "Ionicons"; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }

.has-effect-icon.offset-v-43 .elm-link {  margin-top: -43px; }
.has-effect-icon.offset-v-19 .elm-link {  margin-top: -19px; }
.has-effect-icon.offset-v-25 .elm-link {  margin-top: -25px; }

.has-effect-icon.offset-h-49 .elm-link {  margin-left: -49px; }
.has-effect-icon.offset-h-46 .elm-link {  margin-left: -46px; }
.has-effect-icon.offset-h-24 .elm-link {  margin-left: -24px; }

/* Icon 1 */
.has-effect-icon .elm-link a.icon-1 { width: 50px; height: 50px; background-color: transparent;  border: 1px solid #fff; line-height: 50px; color: #fff; font-size: 28px;  }
.has-effect-icon .elm-link a.icon-1:before { content: "\f1fe"; }
.has-effect-icon .elm-link a.icon-1.icon-search:before { content: "\f4a4"; }

/* Icon 2 */
.has-effect-icon .elm-link a.icon-2 { font-size: 20px; color: #fff; margin-top: -10px; margin-left: -10px; }
.has-effect-icon .elm-link a.icon-2:before { content: "\f1fe"; }

/* Icon 3 */
.has-effect-icon .elm-link span.icon-3 { font-size: 20px; color: #fff; margin-top: -10px; margin-left: -10px;  }
.has-effect-icon .elm-link span.icon-3:before { content: "\f4a4" ; }

.has-effect-icon:hover .elm-link { opacity: 1; visibility: visible;  transform: scale(1); }
.has-effect-icon .elm-link a.icon-1:hover { border-color: <?= $data['design']['theme1']; ?>; background-color: <?= $data['design']['theme1']; ?>; }

.has-effect-icon .elm-link a.icon-2:hover,
.has-effect-icon .elm-link span.icon-3:hover { color: <?= $data['design']['theme1']; ?>; }

/* Icon 4 */
.has-effect-icon.w40 .elm-link > a { width: 40px; height: 40px; line-height: 40px; font-size: 20px; vertical-align: top; }

/* Rev Slider
-------------------------------------------------------------- */
.custom .tp-bullet { background-color: #f2f2f2; border-radius: 50%; } 
.custom .tp-bullet:hover, .custom .tp-bullet.selected { background-color: <?= $data['design']['theme1']; ?>; display:none;}   

.custom.tparrows { background-color: #e7e7e7; border-radius: 50%;display:none; }
.tp-leftarrow.tparrows { margin-left: 15px; }
.tp-rightarrow.tparrows { margin-right: 15px; }
.custom.tparrows:before { color: #bdbdbd; }
.custom.tparrows:hover { background-color: <?= $data['design']['theme1']; ?>; }
.custom.tparrows:hover:before { color: #fff; }

/* Top Bar
-------------------------------------------------------------- */
#top-bar { position: relative; z-index: 1; }
#top-bar, #top-bar a { color: #999; }
#top-bar .top-bar-inner-wrap { display: table; width: 100%; padding: 12px 0px 13px 0px; }
#top-bar .top-bar-content { display: table-cell; width: 60%; text-align: left; vertical-align: middle; }
#top-bar .top-bar-socials { display: table-cell; width: 40%; text-align: right; vertical-align: middle; }

/* Top Bar Content */
#top-bar .top-bar-content .content { position: relative; display: inline-block; padding: 0px 17px 0px 21px ; margin: 0px 6px; }
#top-bar .top-bar-content .content:first-child { margin-left: 0px; }
#top-bar .top-bar-content .content:last-child { margin-right: 0px; }
#top-bar .top-bar-content .content:before { content: ""; position: absolute; font-family: "FontAwesome"; top: 0; left: 0; }
#top-bar .top-bar-content .content.address:before { content: "\f015"; }
#top-bar .top-bar-content .content.phone:before { content: "\f098"; }
#top-bar .top-bar-content .content.time:before { content: "\f017"; }
#top-bar .top-bar-content .content:after { content: ""; position: absolute; top: 50%; right: 0; width: 2px; height: 10px; background-color: #444; transform: translateY(-50%);  }
#top-bar .top-bar-content .content:last-child:after { width: 0px; height: 0px; background-color: transparent; }

/* Top Bar Socials*/
#top-bar .top-bar-socials .text { padding-right: 18px; }
#top-bar .top-bar-socials .icons a { display: inline-block; text-align: center; position: relative; padding: 0px 15.8px; }
#top-bar .top-bar-socials .icons a:before { content: ""; position: absolute; top: 50%; left: 0; width: 2px; height: 10px; background-color: #444; transform: translateY(-50%);  }
#top-bar .top-bar-socials .icons a:last-child { padding-right: 0px !important; }

#top-bar .top-bar-socials .icons a:hover { color: <?= $data['design']['theme1']; ?>; }

/* Style 1 */
.topbar-style-1 #top-bar { background-color: #262626;  }

/* Style 2 */
.topbar-style-2 #top-bar { background-color: #e9e9e9;  }
.topbar-style-2 #top-bar .top-bar-socials .icons a:before,
.topbar-style-2 #top-bar .top-bar-content .content:after { background-color: #d5d4d4;  }
.topbar-style-2 #top-bar .top-bar-socials .icons a { padding: 0px 10.5px; }
.topbar-style-2 #top-bar .top-bar-socials .text { padding-right: 11px; }

/* Style 3 */
.topbar-style-3 #top-bar { background-color: rgba(0,0,0,0.2);  }
.topbar-style-3 #top-bar,
.topbar-style-3 #top-bar a { color: rgba(255,255,255,0.7); }
.topbar-style-3 #top-bar .top-bar-inner-wrap { border-bottom: 1px solid rgba(255,255,255,0.15); }
.topbar-style-3 #top-bar .top-bar-content .content { padding: 0px 12px 0px 22px; margin: 0 4px; }
.topbar-style-3 #top-bar .top-bar-content .content:first-child { margin-left: 0px; }
.topbar-style-3 #top-bar .top-bar-socials .icons a:before,
.topbar-style-3 #top-bar .top-bar-content .content:after { background-color: rgba(126,121,122,0.7); }
.topbar-style-3 #top-bar .top-bar-socials .icons a { padding: 0px 10.5px; }
.topbar-style-3 #top-bar .top-bar-socials .text { padding-right: 10px; font-size: 13px; }

/* Header
-------------------------------------------------------------- */
#site-header { position: relative; background-color: #fff; box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.2);  }
#site-header-inner { position: relative; }
#site-header .wrap-inner { padding-top: 28.5px; padding-bottom: 28.5px;  -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }

.menu-has-search #site-header #main-nav { right: 28px; }
.menu-has-search #site-header #header-search  { display: block; }

#site-header #header-search { position: absolute; right: 15px; top: 50%; z-index: 10; display: none; -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%);  }

/* Site Logo */
#site-logo { float: left; max-width: 100%; }

/* Main Nav */
#main-nav ul { margin: 0px; }
#main-nav ul li { position: relative;  list-style: none;}
#main-nav > ul > li { float: left; padding: 0px 17.5px; }
#main-nav > ul > li > a { display: block; font-size: 14px; font-weight: 600; color: #222; position: relative; line-height: 100px;  font-family: 'Montserrat', sans-serif; }

/* Sub Menu */
#main-nav .sub-menu { position: absolute; top: 100%; left: 0; width: 250px; padding: 15px 0px; background-color: #262626; z-index: 9999; opacity: 0; visibility: hidden; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; -webkit-transform: translateY(15px);-moz-transform: translateY(15px); -ms-transform: translateY(15px);
   -o-transform: translateY(15px); transform: translateY(15px);  }
#main-nav .right-sub-menu { left: auto; right: 0; }
#main-nav .sub-menu li a { font-family: 'Montserrat', sans-serif; display: block; font-size: 14px; color: #999;  padding: 5px 20px; font-weight: 600;  }

#main-nav li:hover .sub-menu { opacity: 1; visibility: visible; -webkit-transform: translateY(0);-moz-transform: translateY(0); -ms-transform: translateY(0);
   -o-transform: translateY(0); transform: translateY(0); }
#main-nav .sub-menu li a:hover, #main-nav .sub-menu li.current-item a { color: <?= $data['design']['theme1']; ?>; }
      
/* Mobile Menu */
#main-nav-mobi { display: block; margin: 0 auto; width: 100%; position: absolute; top: 100%; left: 0; z-index: 9999; background-color: #f6f6f6;  }
#main-nav-mobi ul { display: block; list-style: none; margin: 0; padding: 0; }
#main-nav-mobi ul li { margin: 0; text-align: center; cursor: pointer; padding: 0; border-top: 1px solid #ebebeb; position: relative; }
#main-nav-mobi ul > li > a { color: #999; display: inline-block; font-size: 14px; text-transform: uppercase; line-height: 48px; font-weight: 600; }
#main-nav-mobi ul li:first-child { border-top: 0px; }
#main-nav-mobi ul > li.current-menu-item > a,
#main-nav-mobi ul > li > a:hover { color: <?= $data['design']['theme1']; ?>; }

#main-nav-mobi .menu-item-has-children .arrow { cursor: pointer; display: inline-block; font-size: 20px; font-family: "FontAwesome"; line-height: 48px; position: absolute; right: 15px; text-align: center; top: 0; width: 48px; }
#main-nav-mobi .menu-item-has-children .arrow:before { content: "\f103"; color: #b1b1b1; }
#main-nav-mobi .menu-item-has-children .arrow.active:before { content: "\f102"; }
#main-nav-mobi ul ul li { background-color: #f2f2f2; border-color: #ebebeb; }

/* Search icon */
#site-header .header-search-icon { display: block; font-size: 14px; line-height: 100px; }

/* Search Form */
#site-header .header-search-form { position: absolute; right: 0px; top: 100%;  width: 270px; opacity: 0; visibility: hidden; }
#site-header .header-search-field { width: 300px;  margin: 0; padding-top: 13px; padding: 10px 50px 10px 20px; background-color: #fff; box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.2);  -webkit-box-shadow:0px 0px 7px 0px rgba(0, 0, 0, 0.15);  }
#site-header .header-search-submit { position: absolute; right: 0; top: 0; padding: 16px; }
#site-header .header-search-form.show { filter: alpha(opacity=100); opacity: 1; visibility: visible; }

/* Mobile Menu Button */
.mobile-button { display: none; position: absolute; width: 26px; height: 26px; float: right; top: 50%; right: 15px; background-color: transparent; cursor: pointer; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;  -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%); }
.mobile-button:before,
.mobile-button:after, 
.mobile-button span { background-color: <?= $data['design']['theme1']; ?>; -webkit-transition: all ease 0.3s; -moz-transition: all ease 0.3s; transition: all ease 0.3s; }
.mobile-button:before,
.mobile-button:after { content: ''; position: absolute; top: 0; height: 3px; width: 100%; left: 0; top: 50%; -webkit-transform-origin: 50% 50%; -ms-transform-origin: 50% 50%; transform-origin: 50% 50%; }
.mobile-button span { position: absolute; width: 100%; height: 3px; left: 0; top: 50%; overflow: hidden; text-indent: 200%; }
.mobile-button:before { -webkit-transform: translate3d(0,-7px,0); -moz-transform: translate3d(0,-7px,0); transform: translate3d(0,-7px,0); }
.mobile-button:after { -webkit-transform: translate3d(0,7px,0); -moz-transform: translate3d(0,7px,0); transform: translate3d(0,7px,0); }
.mobile-button.active span { opacity: 0; }
.mobile-button.active:before { -webkit-transform: rotate3d(0, 0, 1, 45deg); -moz-transform: rotate3d(0, 0, 1, 45deg); transform: rotate3d(0, 0, 1, 45deg); }
.mobile-button.active:after { -webkit-transform: rotate3d(0, 0, 1, -45deg); -moz-transform: rotate3d(0, 0, 1, -45deg); transform: rotate3d(0, 0, 1, -45deg); }

/* Header Fixed */
#site-header.is-fixed { position: fixed; top: 0; left: 0; width: 100%; z-index: 9999; }
#site-header.is-fixed.is-small .wrap-inner { padding-top: 20px; padding-bottom: 20px; }
#site-header.is-fixed.is-small .header-search-icon,
#site-header.is-fixed.is-small .nav-top-cart-wrapper .nav-cart-trigger,
#site-header.is-fixed.is-small #main-nav > ul > li > a { line-height: 76px; }

/* Style 1 */
.header-style-1 #site-header #main-nav { position: absolute; right: 0px; top: 50%; z-index: 99; -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%); }
.header-style-1.menu-has-search #site-header #main-nav { right: 44px; }
.header-style-1 #site-header #main-nav > ul > li.current-menu-item > a,
.header-style-1 #site-header #main-nav > ul > li:hover > a { color: <?= $data['design']['theme1']; ?>; }
 
/* Style 2 */
.header-style-2 #site-header #main-nav { position: absolute; right: 0px; top: 50%; z-index: 99; -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%); }
.header-style-2.menu-has-search #site-header #main-nav { right: 44px; }
.header-style-2 #site-logo {margin-left: 6px; }
.header-style-2 #site-header .wrap-inner { padding-top: 31px; padding-bottom: 30px; }
.header-style-2 #main-nav > ul > li > a,
.header-style-2 #site-header .header-search-icon { line-height: 101px; }

.header-style-2 #main-nav > ul > li > a:after { content: ""; position: absolute; bottom: 0; left: 0; width: 0%; height: 3px; background-color: <?= $data['design']['theme1']; ?>; opacity: 0; visibility: hidden;  -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.header-style-2 #main-nav > ul > li.current-menu-item > a:after ,
.header-style-2 #main-nav > ul > li > a:hover:after { opacity: 1; visibility: visible; width: 100%; }

/* Style 3 */
.header-style-3 #site-header { background-color: rgba(0,0,0,0.2); box-shadow: none; }
.header-style-3 #site-header #site-logo { margin-left: 2px; }
.header-style-3 #site-header #main-nav { position: absolute; right: 0px; top: 50%; z-index: 99; -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%); }
.header-style-3.menu-has-search #site-header #main-nav { right: 44px; }

.header-style-3 #site-header .header-search-icon,
.header-style-3 #site-header #main-nav > ul > li > a { color: #fff; }
.header-style-3 #site-header #main-nav > ul > li.current-menu-item > a,
.header-style-3 #site-header #main-nav > ul > li:hover > a { color: <?= $data['design']['theme1']; ?>; }
.header-style-3 #site-header .header-search-icon,
.header-style-3 #main-nav > ul > li > a { line-height: 99px; }
.header-style-3 #site-header .wrap-inner { padding: 30px 0px; }

.header-style-3 #site-header.is-fixed.is-small { background-color: #3e3e3e; }

/* Absolute */
.site-header-absolute #site-header-wrap { position: absolute; top: 0; left: 0; width: 100%; z-index: 100; }

/* Featured Title
-------------------------------------------------------------- */
#featured-title { background-color: #f2f2f2; }
#featured-title .featured-title-inner-wrap { padding: 28px 0px 30px 0px; display: table; overflow: hidden; width: 100%; }
#featured-title .featured-title-heading-wrap { display: table-cell; text-align: right; vertical-align: middle; width: 65%; padding-top: 6px; }
#featured-title .feautured-title-heading { margin: 0px; font-size: 18px; line-height: 24px; }
#featured-title #breadcrumbs { display: table-cell; text-align: left; vertical-align: middle;  width: 35%; padding-top: 5px; }
#featured-title #breadcrumbs .sep { padding: 0px 10px; color: #e0e0e0; }
#featured-title #breadcrumbs span.trail-end { color: #999; }
#featured-title #breadcrumbs a.trail-begin { color: #555; }
#featured-title #breadcrumbs a:hover { color: <?= $data['design']['theme1']; ?>; }

/* Blog Post
-------------------------------------------------------------- */
.hentry { margin-top: 31px; padding-top: 40px; border-top: 1px solid #ebecf2;  }
.hentry:first-child { margin: 0px; border: none; padding: 0px; }
.hentry .post-content-wrap { padding: 35px 0px 0px 0px; }

/* Post media */
.post-media { position: relative; }
.post-media > .post-calendar { position: absolute; top: 15px; left: 17px;  }
.post-media > .post-calendar .entry-calendar { display: inline-block; background-color: <?= $data['design']['theme1']; ?>; color: #fff;  font-weight: 600; text-align: center; line-height: 26px;padding: 13px 18px 5px 18px; }

.post-media .entry-calendar > span { display: block; font-family: 'Montserrat', sans-serif; }
.post-media .entry-calendar > span.day { font-size: 30px;  }
.post-media .entry-calendar > span.month { font-size: 12px; }

/* Post title */
.hentry .post-title { font-size: 16px; margin-bottom: 5px; }

/* Post meta */
.hentry .post-meta { color: #999; line-height: 27px; margin-bottom: 15px; }
.hentry .post-meta a { color: #999; }
.hentry .post-meta .item { display: inline-block; position: relative; margin-right: 9px; padding-left: 14px;}
.hentry .post-meta .item:first-child { padding-left: 0px; }
.hentry .post-meta .item:last-child { margin-right: 0px; }
.hentry .post-meta .item:before { content: ""; position: absolute; top: 9px; left: 0; background-color: #e5e5e5; width: 2px; height: 10px; }
.hentry .post-meta .item:first-child:before { width: 0px; height: 0px; background-color: transparent; }

.hentry .post-meta a:hover { color: <?= $data['design']['theme1']; ?>; }

/* Post content */
.hentry .post-excerpt { margin-bottom: 28px; }
.hentry .post-excerpt p:first-child { margin: 0px; }
.hentry .box-excerpt { margin: 27px 0px; }
.hentry .box-excerpt .thumb { float: left; margin: 4px 31px 0 0;}
.hentry .box-excerpt .text { overflow: hidden; }

/* Post read more */
.hentry .post-link a { display: inline-block; font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 600; color: #fff; background-color: <?= $data['design']['theme1']; ?>; text-align: center; padding: 11px 31px; letter-spacing: 0.5px; position: relative; overflow: hidden; z-index: 1;  }
.hentry .post-link a:before { content: ""; position: absolute; width: 100%; height: 0%; z-index: -1; top: 50%; left: 50%; opacity: 0; visibility: hidden; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; -webkit-transform: translate(-50%,-50%); -moz-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%); -o-transform: translate(-50%,-50%); transform: translate(-50%,-50%); }

.hentry .post-link a:hover:before {  opacity: 1; visibility: visible; height: 100%; background-color: #262626; }

/* Post tags */
.hentry .post-tags-socials { width: 100%; display: table; }
.hentry .post-tags { display: table-cell; vertical-align: middle; width: 50%;  text-align: left;}
.hentry .post-socials { display: table-cell; vertical-align: middle; width: 50%;  text-align: right;}
.hentry .post-tags > span { font-weight: 600; color: #222; font-style: italic; padding-right: 6px; }
.hentry .post-tags a {  display: inline-block; text-align: center; font-size: 12px; color: #a1a1a1; z-index: 1; padding: 3px 15px 3px 18px; margin: 0px 18px 0px 0px; font-family: 'Montserrat', sans-serif; border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7; border-left: 1px solid #e7e7e7; letter-spacing: 0.7px; position: relative; }
.hentry .post-tags a:before { content:'';position:absolute;top: 4px;right: -12px;  height: 23px;width: 22px;border-radius: 4px; background-color: #fff;border-right: 1px solid #e7e7e7;border-top: 1px solid #e7e7e7;transform: rotate(45deg) skew(7deg); -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; z-index: -1; overflow: hidden; }

.hentry .post-socials a { width: 28px; height: 28px; line-height: 28px; display: inline-block; background-color: transparent; text-align: center;  color: #fff;}
.hentry .post-socials a.facebook { background-color: #2d55a1; }
.hentry .post-socials a.twitter { background-color: #1bbcf2; }
.hentry .post-socials a.linkedin { background-color: #0690c9; }
.hentry .post-socials a.pinterest { background-color: #ec4b2e; }

.hentry .post-socials a:hover,
.hentry .post-tags a:hover { background-color: <?= $data['design']['theme1']; ?>; color: #fff; }

.hentry .post-tags a:hover { border-color: <?= $data['design']['theme1']; ?>; }

.hentry .post-tags a:hover:before { background-color: <?= $data['design']['theme1']; ?>; border-color:<?= $data['design']['theme1']; ?>;}

/* Comments */
.comments-area { padding-top: 58px; }
.comments-area .comments-title,
.comments-area .comment-reply-title { font-size: 16px; line-height: 28px; text-transform: uppercase; margin-bottom: 0px; }

/* Comments list */
.comment-list { margin: 0px; }
.comment-list li.comment { padding: 0px; }
.comment-list article { position: relative; padding: 26px 0px 35px 0px; border-bottom: 1px solid #f2f2f2; margin-bottom: 6px;}
.comment-list article .gravatar { width: 80px; height: 80px; float: left; margin-right: 22px; margin-top: 5px;}
.comment-list article .comment-content { overflow: hidden; }
.comment-list article .comment-content p { margin: 0px; }
.comment-list .comment-meta { margin-bottom: 17px; }
.comment-list .comment-meta .comment-author { text-transform: uppercase; font-size: 14px; line-height: 23px; display: inline-block; padding-right: 16px; margin: 0px;}
.comment-list .comment-meta .comment-time { line-height: 23px; color: #999;  display: inline-block; padding-left: 20px; position: relative;}
.comment-list .comment-meta .comment-time:before { content: ""; width: 2px; height: 10px; background-color: #f2f2f2; position: absolute; top: 50%; left: 0; transform: translateY(-50%); }
.comment-list .comment-reply { position: absolute; top: 23px; right: 6px;  }
.comment-list .comment-reply:after { content: "\f13a"; font-family: "Ionicons"; right: 0; top: 0;  color: <?= $data['design']['theme1']; ?>; margin-right: -5px; padding-left: 5px; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.comment-list .comment-reply a { color: <?= $data['design']['theme1']; ?>; font-family: 'Montserrat', sans-serif; font-weight: 600; letter-spacing: 0.5px;  }

.comment-list .children { margin: 0px; }
.comment-list .children > li { padding: 0px 0px 0px 71px; }
.comment-list .children > li .gravatar { margin-right: 19px; margin-top: 3px; }
.comment-list .children > li .comment-meta { margin-bottom: 12px; }
.comment-list .children > li article { margin-bottom: 8px; }

.comment-list .comment-reply a:hover ,
.comment-list .comment-reply:hover:after { color: #222; }

/* Style 2 */
.comment-list.style-2 li { background-color: #f5f5f5; margin-top: 6px; }
.comment-list.style-2 li:first-child { margin-top: 0px; }
.comment-list.style-2 article { margin: 0px; border: none; padding: 31px 40px 31px 39px; }
.comment-list.style-2 article .gravatar { width: 106px; height: 106px; margin: 7px 31px 0px 0px; }
.comment-list.style-2 .comment-meta .comment-author { font-size: 16px; line-height: 26px; padding-right: 8px; }
.comment-list.style-2 .comment-meta .comment-position { line-height: 26px; font-family: 'Montserrat', sans-serif; color: #999; display: inline-block; padding-left: 11px; position: relative; }
.comment-list.style-2 .comment-meta .comment-position:before { content: ""; width: 1px; height: 10px; background-color: #e0e0e0; position: absolute; top: 50%; left: 0; transform: translateY(-50%); }
.comment-list.style-2 .comment-meta { margin-bottom: 6px; }
.comment-list.style-2 .comment-text p { letter-spacing: 0.1px; margin-bottom: 15px; }
.comment-list.style-2 .comment-text .socials > a { display: inline-block; width: 28px; height: 28px; text-align: center; line-height: 28px; color: #898989; background-color: #fff; font-size: 16px; margin: 0px 0.9px;}
.comment-list.style-2 .comment-text .socials > a:first-child { margin-left: 0px; }

.comment-list.style-2 .comment-text .socials > a:hover { background-color: <?= $data['design']['theme1']; ?>; color: #fff; }

/* Comments respond */
.comment-respond { padding-top: 52px; }
#commentform .name-wrap ,
#commentform .email-wrap{ width: 49.2%; float: left; margin-right: 1.6%; }
#commentform .email-wrap { margin-right: 0px; }
#commentform input[type="text"],
#commentform input[type="email"],
#commentform textarea { background-color: #fafafb; }
#commentform textarea { height: 150px; }
#comments .comment-respond .form-submit { margin: 0px; }

/* Widgets
-------------------------------------------------------------- */
#sidebar .widget { position: relative; z-index: 1; margin-top: 56px; }
#sidebar .widget:first-child { margin: 0px; }

/* Center */
.widget.align-center { text-align: center; }

/* Box shadow */
.widget.has-shadow { box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.03); }

/* No sep */
.widget.no-sep .widget-title span { padding: 0px; }
.widget.no-sep .widget-title span:after { height: 0px; width: 0px; background-color: transparent; }

/* Border */
.widget.has-border.border-solid { border: 1px solid #f2f2f2; }

/* Widget title */
.widget .widget-title { font-size: 16px; margin-bottom: 22px; position: relative; z-index: 1;}
.widget .widget-title span { display: block; position: relative; padding: 0px 0px 16px 0px; }
.widget .widget-title span:after { content: ""; position: absolute; top: 100%; left: 0; height: 2px; width: 60px; background-color: <?= $data['design']['theme1']; ?>; }

/* Widget Search */
#sidebar .widget.widget_search .search-form { position: relative; }
#sidebar .widget.widget_search .search-form .search-field { background-color: #fff; padding-right: 50px; margin: 0; }
#sidebar .widget.widget_search .search-form .search-submit { position: absolute; background-color: #999; top: 0px; right: 0px; width: 50px; height: 52px; text-align: center; text-indent: 9999px; padding: 0; overflow: hidden; }
#sidebar .widget.widget_search .search-form .search-submit:before { content: "\f002";font-family: "FontAwesome"; color: #fff; font-size: 15px; width: 50px; height: 52px; line-height: 52px; position: absolute; top: 0; left: 0; text-align: center; text-indent: 0; opacity: 1;  -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;  }
#sidebar .widget.widget_search .search-form .search-submit:hover { background-color: <?= $data['design']['theme1']; ?>; }

/* Widget follow */
#sidebar .widget.widget_follow .follow-wrap.col3 { margin: 0px -4px; }
#sidebar .widget.widget_follow .follow-wrap.col3 > .follow-item { width: 33.333%; float: left; height: auto; }
#sidebar .widget.widget_follow .follow-wrap.g8 .follow-item { padding: 0px 4px; }
#sidebar .widget.widget_follow .follow-item .inner { background-color: #3b59a1; color: #fff; display: block; text-align: center; padding: 18px 7px 14px 7px; }
#sidebar .widget.widget_follow .follow-item.twitter .inner { background-color: #46b0e4; }
#sidebar .widget.widget_follow .follow-item.google .inner { background-color: #dd4c39; }
#sidebar .widget.widget_follow .follow-item a { display: inline-block; position: relative; text-align: center; font-size: 18px; color: #fff; width: 45px; height: 45px; line-height: 45px; border-radius: 50%; background-color: rgba(255,255,255,0.2); }
#sidebar .widget.widget_follow .follow-item .text { display: block; margin-top: 13px; line-height: 18px; }

#sidebar .widget.widget_follow .follow-item:hover a { background-color: <?= $data['design']['theme1']; ?>; }

/* Widget lastest */
.widget.widget_lastest ul { margin: 0px; }
.widget.widget_lastest ul li { margin-top: 33px; padding: 0px; }
.widget.widget_lastest ul li:first-child { margin-top: 0px; border: none; }
.widget.widget_lastest .thumb { width: 65px; height: 65px; float: left; margin-right: 19px; margin-top: 5px; }
.widget.widget_lastest .text { overflow: hidden; }
.widget.widget_lastest h3 { font-size: 12px; line-height: 24px; margin: 0px; letter-spacing: 0.4px; font-weight: 400; }
.widget.widget_lastest .post-date { font-size: 13px; color: #999;  }

#footer .widget.widget_lastest h3 { color: #fff; }
#footer .widget.widget_lastest .post-date { color: #777879; }

/* Widget tags */
.widget.widget_tags .tags-list a { position: relative; display: inline-block; float: left; text-align: center; font-size: 12px; color: #a1a1a1; z-index: 1; padding: 4px 15px 4px 20px; margin: 0px 18px 9px 0px; font-family: 'Montserrat', sans-serif; border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7; border-left: 1px solid #e7e7e7; letter-spacing: 0.7px; }

.widget.widget_tags .tags-list a:before {content:'';position:absolute;top: 4px;	right: -12px;  height: 24px;width: 23px;border-radius: 4px; background-color: #fff;border-right: 1px solid #e7e7e7;border-top: 1px solid #e7e7e7;transform: rotate(45deg) skew(7deg); -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; z-index: -1; overflow: hidden;}

#footer .widget.widget_tags .tags-list a { color: rgba(255,255,255,0.6); border: 0px; background-color: #1d1d1d; }
#footer .widget.widget_tags .tags-list a:before { background-color: #1d1d1d; border-color:#1d1d1d;  }

#footer .widget.widget_tags .tags-list a:hover,
.widget.widget_tags .tags-list a:hover { background-color: <?= $data['design']['theme1']; ?>; color: #fff; }
#footer .widget.widget_tags .tags-list a:hover:before,
.widget.widget_tags .tags-list a:hover:before { background-color: <?= $data['design']['theme1']; ?>; border-color:<?= $data['design']['theme1']; ?>;}

/* Widget instagram */
.widget.widget_instagram .instagram-wrap.col3 { margin: 0px -4px; }
.widget.widget_instagram .instagram-wrap.col3 > .instagram_badge_image { width: 33.333%; float: left; height: auto; }
.widget.widget_instagram .instagram-wrap.g10 .instagram_badge_image { padding: 0px 5px; margin: 0 0 10px 0px; }
.widget.widget_instagram .instagram_badge_image a { position: relative; display: block; }

/* Widget list */
.widget.widget_list { background-color: #414141; }
.widget.widget_list .inner { padding: 18px 30px; }
.widget.widget_list ul { margin: 0px; }
.widget.widget_list .list-item { border-top: 1px solid rgba(255,255, 255, 0.1); padding: 12px 0px; }
.widget.widget_list .list-item:first-child { border-top: 0px; }
.widget.widget_list .list-item > a { position: relative; color: #fff; font-family: 'Montserrat', sans-serif; font-weight: 500; display: block; }
.widget.widget_list .list-item > a:before { content: ""; position: absolute; left: 0; top: 50%; transform: translateY(-50%); background-color: #b3b3b3; width: 6px; height: 6px; border-radius: 50%; }
.widget.widget_list .list-item .text { padding-left: 20px; display: block; overflow: hidden; }

.widget.widget_list .list-item > a:hover { color: <?= $data['design']['theme1']; ?>; }
.widget.widget_list .list-item > a:hover:before { background-color: <?= $data['design']['theme1']; ?>; }

/* Widget lastest twitter */
.widget.widget_lastest_twitter ul { margin: 0px; }
.widget.widget_lastest_twitter ul li { padding: 2px 0px; margin-top: 12px; }
.widget.widget_lastest_twitter ul li:first-child { margin-top: 0px; }
.widget.widget_lastest_twitter .icon-wrap { position: relative; float: left; margin-top: 5px; margin-right: 15px; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.widget.widget_lastest_twitter .icon-wrap.has-width.w30 { width: 30px; height: 30px; line-height: 30px;  display: inline-block; text-align: center; background-color: #414141; color: #fff; }
.widget.widget_lastest_twitter .text { overflow: hidden; font-weight: 300; color: #666; }
.widget.widget_lastest_twitter .text a { font-weight: 600; color: #222; }
.widget.widget_lastest_twitter .text p { margin: 0px; }

.widget.widget_lastest_twitter li:hover .icon-wrap.has-width.w30 { background-color: <?= $data['design']['theme1']; ?>; }
.widget.widget_lastest_twitter .text a:hover { color: <?= $data['design']['theme1']; ?>; }

/* Widget help */
.widget.widget_help .inner { padding: 44px 20px 33px 20px; }

/* Pagination
-------------------------------------------------------------- */
.themesflat-pagination { margin-top: 34px; padding-top: 39px; border-top: 1px solid #e7e7e7; }
.themesflat-pagination ul { margin: 0px; position: relative; }
.themesflat-pagination ul li { display: inline-block; padding: 0px; margin-right: 5.5px; }
.themesflat-pagination ul li .page-numbers { display: inline-block; font-size: 14px; color: #777; text-align: center; width: 40px; height: 40px; border: 1px solid #e7e7e7; line-height: 40px; background-color: transparent; }
.themesflat-pagination ul li .page-numbers span.fa { font-size: 16px; }

.themesflat-pagination ul li .page-numbers:hover,
.themesflat-pagination ul li .page-numbers.current { background-color: <?= $data['design']['theme1']; ?>; color: #fff; border-color: <?= $data['design']['theme1']; ?>;  }

.themesflat-pagination .page-prev-next { width: 100%; border: 1px solid #e7e7e7;  }
.themesflat-pagination .page-prev-next > li { width: 49.7%; border-left: 1px solid #e7e7e7; display: inline-block; margin: 0px; padding: 13px 15px 11px 15px; }
.themesflat-pagination .page-prev-next > li:first-child { border-left: 0px; } 
.themesflat-pagination .page-prev-next > li a { display: block; text-transform: uppercase; font-size: 13px; font-family: 'Montserrat', sans-serif; color: #999; position: relative; z-index: 1;}
.themesflat-pagination .page-prev-next > li a:before { content: ""; font-family: "FontAwesome"; font-size: 18px; line-height: 22px; position: absolute; top: 0%; text-align: center; width: 22px; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.themesflat-pagination .page-prev-next > li a.prev:before { content: "\f104"; left: 0; }
.themesflat-pagination .page-prev-next > li a.next:before { content: "\f105"; right: 0;}
.themesflat-pagination .page-prev-next > li a:after { content: ""; position: absolute; width: 22px; height: 22px; border-radius: 50%; background-color: #e9e9e9; top: 0; z-index: -1;-webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;  }
.themesflat-pagination .page-prev-next > li a.prev:after { left: 0; }
.themesflat-pagination .page-prev-next > li a.next:after { right: 0; }
.themesflat-pagination .page-prev-next > li a.prev { padding-left: 36px; }
.themesflat-pagination .page-prev-next > li a.next { padding-right: 36px; }

.themesflat-pagination .page-prev-next > li a:hover { color: <?= $data['design']['theme1']; ?>;  }
.themesflat-pagination .page-prev-next > li a:hover:before { color: #fff; }
.themesflat-pagination .page-prev-next > li a:hover:after { background-color: <?= $data['design']['theme1']; ?>;  }

/* Footer
-------------------------------------------------------------- */
#footer { background: url('assets/img/page/bg-footer.jpg') no-repeat center center; background-size: cover;  position: relative; z-index: 1; padding: 79px 0px 72px 0px; }

#footer-widgets .widget .widget-title { color: #fff; font-size: 14px; margin-bottom: 24px; letter-spacing: 1.3px; margin-top: 2px; }
#footer-widgets .widget .widget-title span { padding: 0px 0px 8px 0px; }
#footer-widgets .widget .widget-title span:after { width: 40px; }
#footer-widgets .widget.widget_lastest ul li { border-top: 1px solid rgba(255,255,255,0.07); padding-top: 13px; margin-top: 19px; }
#footer-widgets .widget.widget_lastest ul li:first-child { border-top: 0px; padding-top: 0px; }
#footer-widgets .widget ul { margin: 0; list-style: none; }

#footer-widgets .widget p { color: #999; font-weight: 500; font-family: 'Montserrat', sans-serif; }

/* Widget text */
#footer-widgets .widget.widget_text { background: url('assets/img/page/bg-contact.png') no-repeat bottom right; }
#footer-widgets .widget.widget_text li { margin-top: 7px; }
#footer-widgets .widget.widget_text li:first-child { margin-top: 0px; }
#footer-widgets .widget.widget_text li .inner { position: relative; }
#footer-widgets .widget.widget_text span.fa { display: inline-block; text-align: center; background-color: #1d1d1d; color: <?= $data['design']['theme1']; ?>; font-size: 17px; width: 25px; height: 25px; line-height: 25px; float: left; margin: 0px 14px 0px 0px; }
#footer-widgets .widget.widget_text span.text { font-family: 'Montserrat', sans-serif; font-size: 12px; color: rgba(255,255,255,0.8); line-height: 14px; overflow: hidden; }
#footer-widgets .widget.widget_text span.sl { text-transform: uppercase; }

/* Bottom
-------------------------------------------------------------- */
#bottom { background-color: #1d1d1d ;  font-size: 13px; line-height: 26px; color: #8c8c8c; }
#bottom .bottom-bar-inner-wrap { padding: 26px 0px 28px 0px; display: table; overflow: hidden; width: 100%; position: relative; }
#bottom .bottom-bar-content { display: table-cell; margin: 0; text-align: left; width: 40%; vertical-align: middle; }
#bottom #copyright span { color: #8c8c8c; }
#bottom #copyright span.text { padding-left: 6px; letter-spacing: 0.6px; }
#bottom .bottom-bar-menu { display: table-cell; text-align: right; width: 60%; vertical-align: middle; }
#bottom ul.bottom-nav { margin: 0; list-style: none; }
#bottom ul.bottom-nav > li { display: inline-block; position: relative; padding: 0 14px; }
#bottom ul.bottom-nav > li:last-child { padding-right: 0px; }
#bottom ul.bottom-nav > li > a { font-size: 13px; line-height: 24px; font-family: 'Montserrat', sans-serif; color: #8c8c8c; position: relative; font-weight: 500; }

#bottom ul.bottom-nav > li.current-menu-item > a,
#bottom ul.bottom-nav > li > a:hover { color: <?= $data['design']['theme1']; ?>;  }

/* Scroll Top
-------------------------------------------------------------- */
#scroll-top { position: fixed; display: block; width: 35px; height: 35px; line-height: 35px; text-align: center; z-index: 1; right: 14px; bottom: 23px; opacity: 0; visibility: hidden; cursor: pointer; overflow: hidden; }

#scroll-top.show { right: 24px; opacity: 1; visibility: visible; }
#scroll-top:before,
#scroll-top:after { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;  }
#scroll-top:before { z-index: -1; background-color: #3e3e3e; }
#scroll-top:after { content: "\f10c"; font-family: "Ionicons"; font-size: 18px; color: #fff; }
#scroll-top:hover:before { background-color: <?= $data['design']['theme1']; ?>; }

/* Switcher
-------------------------------------------------------------- */
.switcher-container {  position: fixed;  left: -220px; top: 100px; width: 220px; background-color: #000; z-index: 99999999;}
.switcher-container h2 {color: #fff;font-size: 13px;font-weight: 700;letter-spacing: 0; text-transform: uppercase;height: 45px;	line-height: 45px;padding-left: 20px;padding-right: 30px;margin: 0;}
.switcher-container h2 a { background-color: <?= $data['design']['theme1']; ?>;display: block; position: absolute; right: -45px; top: 0; width: 45px; height: 45px; line-height: 45px;   text-align: center;  outline: 0;  color: #fff;}
.switcher-container h2 a.active:after {	position: absolute;	right: 21px;top: 0;	content: "\f104";font-family: "FontAwesome";color: #fff;font-size: 22px;}
.switcher-container h2 a.active i {	display: none;}
.switcher-container h2 a:hover,
.switcher-container h2 a:focus { text-decoration: none;}
.switcher-container h2 i {margin-top: 10px;font-size: 25px;color: #fff;
    -webkit-animation: fa-spin 2s infinite linear; animation: fa-spin 2s infinite linear; }
.switcher-container h2 i:hover {color: #fff;}
.switcher-container h3 { font-size: 12px; font-weight: 700; color: #fff; margin: 0; line-height: 22px; margin-bottom: 10px;}
.switcher-container .selector-box {color: #fff; overflow: hidden;}
.switcher-container .layout-switcher { margin: 0 0 10px 0; overflow: hidden;}
.switcher-container .layout-switcher a.layout { float: left; display: block; cursor: pointer; text-align: center; font-weight: 700; padding: 10px 20px;   margin-left: 10px;}
.switcher-container .layout-switcher a.layout:first-child { margin-left: 0;}
.switcher-container .layout-switcher a.layout:hover { color: #fff; cursor: pointer;}
.switcher-container .color-box { height: auto; overflow: hidden; margin-bottom: 6px;}
.switcher-container .styleswitch { margin-bottom: 10px;}
.sw-odd {background-color: #272727;	padding: 21px 0 30px 20px;-webkit-transition: all 0.3s; -moz-transition: all 0.3s;-ms-transition: all 0.3s; -o-transition: all 0.3s;transition: all 0.3s;}
.sw-even {background-color: #191919;padding: 21px 0 25px 20px;-webkit-transition: all 0.3s; -moz-transition: all 0.3s;-ms-transition: all 0.3s; -o-transition: all 0.3s;transition: all 0.3s;}
.sw-even a { text-transform: uppercase;font-size: 12px;line-height: 40px;color: #fff;border: 1px solid #fff;padding: 10px 20px 10px 20px;margin-right: 10px;
	letter-spacing: 1.8px;font-weight: 600;}
.sw-even a:hover {background-color: <?= $data['design']['theme1']; ?>; border: 1px solid <?= $data['design']['theme1']; ?>; color: #fff !important;}
.sw-light {	background-color: #fff;	color: #000 !important;}
.sw-odd a {	font-size: 16px;color: #fff;width: 100%;display: inline-block;line-height: 17px;width: 100%;position: relative;padding-left: 47px;}
.sw-odd .ws-colors a:before {background: none;}
.sw-odd .ws-colors a {position: relative;width: auto;padding: 0;width: 30px;height: 30px;background-color: #333;
	display: inline-block;margin-right: 5px;overflow: hidden;}
.sw-odd .ws-colors a.current:before {position: absolute; left: 8px; top: 6px;font-family: FontAwesome;content: "\f00c";color: #fff;z-index: 999;text-shadow: 0 0 2px rgba( 0, 0, 0, 1 );}
.sw-odd .ws-colors #color1 {background-color: <?= $data['design']['theme1']; ?>;}
.sw-odd .ws-colors #color2 {background-color: #3b59a1;}
.sw-odd .ws-colors #color3 {background-color: #46b0e4;}
.sw-odd .ws-colors #color4 {background-color: #dd4c39;}
.sw-even h3 {margin-bottom: 6px;}
.sw-odd .sw-image {padding: 0 20px 15px 0;}
.sw-odd .sw-image a {padding: 0;margin-bottom: 5px;}
.sw-odd .sw-image .sw-buy { padding: 16px 0px; color: #fff; width: 100%; }

/* Pattern */
.sw-pattern.pattern {-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; filter: alpha(opacity=0); opacity: 0;position: absolute;left: 0;top: 98%;
	background-color: #000000;width: 100%;z-index: -1;padding: 20px 0 30px 20px;}
.sw-pattern.pattern a {	width: 40px; height: 40px; display: inline-block;margin-right: 5px; margin-bottom: 5px; position: relative;}
.sw-pattern.pattern a.current:before {position: absolute; left: 12px; top: 6px;font-family: "FontAwesome";content: "\f00c";color: #fff;text-shadow: 0 0 2px rgba( 0, 0, 0, 1 );}

/* Boxed
-------------------------------------------------------------- */
.home-boxed #page {z-index: 0;	width: 92.708%;	margin: 0 auto;	background: #fff;height: 100%;overflow: hidden;	-webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.02); -moz-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.02);   box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.02);}

/* Media Queries
-------------------------------------------------------------- */
@media only screen and (max-width: 1199px) {
	.hentry .post-tags,
	#top-bar .top-bar-content { width: 70%; }

	.hentry .post-socials,
	#top-bar .top-bar-socials { width: 30%; }

	#bottom ul.bottom-nav > li { padding: 0px 10px; }

	.has-effect-icon.w40 .elm-link > a { width: 35px; height: 35px; line-height: 35px; }

	.right-38 { right: 0px !important; }

  .hentry .box-excerpt .text { overflow: inherit; }

  .widget.widget_list .inner { padding: 15px; }

  .themesflat-row.gutter-mobile .span_1_of_3 { width: 50%; }

  .divider.h35 { height: 35px; display: block; clear: both; }
}

@media only screen and (max-width: 991px) {
	#site-header .mobile-button { display: block; }

	#main-nav,
	.menu-has-search #site-header #header-search ,
	.menu-has-cart #site-header .nav-top-cart-wrapper,
	#top-bar .top-bar-content,
	.switcher-container,
	.row-information{ display: none; }

	#top-bar .top-bar-socials { width: 100%; display: block; text-align: center; }

	#main-content { padding: 60px 0px; }

	#featured-title .featured-title-heading-wrap,
	#featured-title #breadcrumbs { width: 50%; }	

  .sidebar-right #site-content,
  .sidebar-right #sidebar,
  .sidebar-left #sidebar,
  .sidebar-left #site-content,
  .sidebar-right.width-71 #site-content,
  .sidebar-right.width-73 #site-content { float: none; width: 100%; }

  .site-header-absolute #site-header-wrap { position: relative; }
  .header-style-3 #site-header { background-color: #3e3e3e; }
  .topbar-style-3 #top-bar { background-color:#262626; }

  .themesflat-row .span_1_of_3 { width: 50%; }
  .themesflat-row.gutter-30 > [class*="col"]:nth-child(3) { clear: both; }

  #footer { padding: 60px 0px; }

  #bottom .bottom-bar-menu,
  #bottom .bottom-bar-content { width: 50%; text-align: center; vertical-align: top; }

  .themesflat-row.separator.drank > [class*="span_"],
  .themesflat-row.separator.light > [class*="col"] { border-left: 0px; }
  
  .widget.widget_instagram .instagram-wrap.g10 .instagram_badge_image img { width: 100%; display: block; }

  .comment-list.style-2 article { padding: 15px; }

  .themesflat-row .col.span_1_of_4 { width: 100%; }

  .divider.h35 { height: 35px; display: none; height: 0; }
}

@media only screen and (max-width: 767px) {
	
	#site-header .wrap-inner { padding: 20px 0px; }

	#bottom .bottom-bar-content,
	#bottom .bottom-bar-menu { width: 100%; display: block; }
	#bottom .bottom-bar-menu { margin-top: 10px; }

	.hentry .box-excerpt .thumb { margin: 0px 0px 27px 0px; float: none;  }

	.comment-respond { padding-top: 35px; }

	.custom.tparrows ,
	.custom .tp-bullet { display: none; }

	.separator-solid .flat-content-wrap { border-bottom: 0px; }

  .themesflat-row .span_1_of_3,
	.themesflat-row .span_1_of_6,
  .themesflat-row.gutter-mobile .span_1_of_3 ,
	.themesflat-row .span_1_of_4 { width: 100%; }

	.padding-left-13 { padding: 0px !important; }
  
  .widget.widget_instagram .instagram_badge_image  img { display: block; width: 100%; }

}

@media only screen and (max-width: 479px) {
	
	#featured-title #breadcrumbs,
	.hentry .post-tags,
	.hentry .post-socials,
	#featured-title .featured-title-heading-wrap { display: block; width: 100%; text-align: left;  }

	.hentry .post-tags a { margin-bottom: 15px; }

	.themesflat-pagination .page-prev-next > li { width: 100%; border-left: 0px; border-top: 1px solid #e7e7e7;  }
	.themesflat-pagination .page-prev-next > li:first-child { border-top: 0px; }

	.comment-list .children { display: none; }
	.comment-list .comment-meta .comment-time { padding-left: 0px; }
	.comment-list .comment-meta .comment-time:before { width: 0px; height: 0px; background-color: transparent; }

	#commentform .name-wrap, #commentform .email-wrap { width: 100%; margin-right: 0px; }

	.comment-list.style-2 article { padding: 10px; }
	.comment-list.style-2 .comment-meta .comment-position:before { width: 0px; height: 0px; background-color: transparent; }
	.comment-list.style-2 .comment-meta .comment-position { padding-left: 0px; }

  .comment-list article .gravatar { float: none; margin: 0px; }
  .comment-list article .comment-content { position: relative; margin-top: 15px; }
  .comment-list .comment-reply { top: auto; right: 0; left: 0; bottom: 0; }
  .comment-list article .comment-content p { padding-bottom: 0px; }

  #comments .comment-list article .comment-content .comment-text { padding-bottom: 30px; }

  button, input[type="button"], input[type="reset"], input[type="submit"] { width: 100%; }

  .comment-list.style-2 article .gravatar { margin: 0px; }

}

/**
  *	Button
  * Headings
  * Icon Box
  * Half Background
  * List
  * Image box
  * Carousel Control
  * Carousel thumb
  * Parallax
  * Project
  * Testimonials
  * Quote
  * Tabs
  * Accordions
  * Partner
  * Progress Bar
  * Request
  * Contact Form 7
  * Filter
  * Maps
  * Pricing
  * Counter
  * Team
  * Content wrap
  * Gallery
  * Project detail
  * Lines
*/

/* Button
-------------------------------------------------------------- */
.themesflat-button { display: inline-block; font-size: 14px;  font-weight: 600; color: #fff; background-color: transparent; padding: 14px 40px;  font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px;  position: relative; z-index: 1; overflow: hidden; }
.themesflat-button.font-default { font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 400; padding: 13px 25px; letter-spacing: 0px; }
.themesflat-button.bg-accent { background-color: <?= $data['design']['theme2']; ?>; }
.themesflat-button.bg-white { background-color: #fff; color: <?= $data['design']['theme2']; ?>; }
.themesflat-button.bg-light-white { background-color: #f2f2f2; color: #555; }
.themesflat-button.bg-white.color-333 { background-color: #fff; color: #333; }
.themesflat-button.big { padding: 15px 36px; }
.themesflat-button.small { color: #444; padding: 14px 26px; }
.themesflat-button.pd30 { padding: 11px 30px; }

.themesflat-button:before { content: ""; position: absolute; width: 100%; height: 0%; z-index: -1; top: 50%; left: 50%; opacity: 0; visibility: hidden; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; -webkit-transform: translate(-50%,-50%); -moz-transform: translate(-50%,-50%) ; -ms-transform: translate(-50%,-50%); -o-transform: translate(-50%,-50%); transform: translate(-50%,-50%); }

.themesflat-button:hover:before { opacity: 1; visibility: visible; height: 100%; width: 110%;}
.themesflat-button.bg-white.color-333:hover:before,
.themesflat-button.bg-accent:hover:before { background-color: #212121;}
.themesflat-button.bg-light-white:hover:before,
.themesflat-button.bg-white:hover:before { background-color: <?= $data['design']['theme2']; ?>; }

.themesflat-button.bg-light-white:hover,
.themesflat-button.bg-white:hover,
.themesflat-button.bg-accent:hover { color: #fff; }

/* Button custom */
.button-wrap.has-icon .themesflat-button > span { position: relative; display: block; }
.button-wrap.has-icon .themesflat-button > span > .icon { position: absolute; top: 50%; transform: translateY(-50%); font-size: 25px; }
.button-wrap.has-icon.size-14 .themesflat-button > span > .icon { font-size: 14px; }

.button-wrap.has-icon.icon-left .themesflat-button > span > .icon { left: 0; }
.button-wrap.has-icon.icon-left .themesflat-button > span { padding-left: 34px; }
.button-wrap.has-icon.icon-left.pf21 .themesflat-button > span { padding-left: 21px; }

.button-wrap.has-icon.icon-right .themesflat-button > span > .icon { right: 0; }

.themesflat-button.w100 { width: 100%; }
.themesflat-button.pd26 {  padding: 14px 26px; }
.themesflat-button.pd32 {  padding: 14px 32px; }

/* Headings
-------------------------------------------------------------- */
.themesflat-headings .heading,
.themesflat-headings .sub-heading {  margin: 0px; }
.themesflat-headings .sup-heading { font-family: 'Montserrat', sans-serif; }
.themesflat-headings .sub-heading { font-weight: 300; color: #666; }
.themesflat-headings.text-center .sub-heading { text-align: center; margin: 0 auto; max-width: 590px;  }
.themesflat-headings .sep-icon { display: inline-block; position: relative; }

.themesflat-headings .sep-icon-after,
.themesflat-headings .sep-icon-before { display: block; position: absolute; top: 50%; border-bottom: 1px solid rgba(0,0,0,0.1); right: 100%; width: 9999px;  }
.themesflat-headings .sep-icon-after { right: auto; left: 100%; }
.themesflat-headings .sep.has-icon { display: block; height: auto; margin: 0 auto; overflow: hidden; }
.themesflat-headings .sep.has-icon .icon-wrap { display: inline-block; padding: 0px 8px; font-size: 22px;  }
.themesflat-headings .sep.has-icon .icon-wrap > i { color: <?= $data['design']['theme2']; ?>; }

.themesflat-headings .sep.width-125 { width: 125px; }
.themesflat-testimonials .sep.has-width.w80,
.themesflat-headings .sep.has-width.w80 { width: 80px; height: 2px; }
.themesflat-headings .sep.has-width.w60 { width: 60px; height: 2px; }
.themesflat-testimonials .sep.has-width.accent-bg,
.themesflat-headings .sep.has-width.accent-bg { background-color: <?= $data['design']['theme2']; ?>; }

.themesflat-headings .sep.border-color-light .sep-icon-after,
.themesflat-headings .sep.border-color-light .sep-icon-before { border-color: #777; }

/* Style 1 */
.themesflat-headings.style-1 .heading { font-size: 28px; line-height: 58px;}
.themesflat-headings.style-1 .sub-heading { font-size: 16px; line-height: 32px; margin-top: 16px;  }

/* Style 2 */
.themesflat-headings.style-2 .heading { font-size: 22px; line-height: 58px; }
.themesflat-headings.style-2 .sub-heading { font-size: 14px; line-height: 22px; font-weight: 400; color: #555; margin-top: 29px; }
.themesflat-headings.style-2 .sup-heading { font-size: 16px; color: #222;  }

/* Font hind */
.themesflat-headings.font-hind .sub-heading { font-size: 17px; line-height: 28px; margin-top: 13px; color: #808080; font-family: 'Hind', sans-serif; font-weight: 400; letter-spacing: -0.4px; max-width: 100%; }

/* Icon Box
-------------------------------------------------------------- */
.themesflat-icon-box .heading,
.themesflat-icon-box .sub-heading { margin: 0px; }
.themesflat-icon-box .sep { width: 60px; height: 2px; background-color: #e7e7e7; }

.themesflat-icon-box .icon-wrap { font-size: 45px; line-height: 57px; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }

/* Has width */
.themesflat-icon-box.has-width.w95 .icon-wrap { width: 95px; height: 95px; line-height: 95px; font-size: 45px; }

/* Circle */
.themesflat-icon-box.circle .icon-wrap { border-radius: 50%; }

/* Background */
.themesflat-icon-box.light-bg .icon-wrap { background-color: #f5f5f5;  position: relative; z-index: 1; }

/* Color */
.themesflat-icon-box.accent-color .icon-wrap { color: <?= $data['design']['theme2']; ?>; }

/* Border */
.themesflat-icon-box.border-light { border: 1px solid #f2f2f2; }

/* Center */
.themesflat-icon-box.align-center { text-align: center; }
.themesflat-icon-box.align-center  .icon-wrap { margin: 0 auto; }

.themesflat-icon-box.align-center .sep { margin: 0 auto; }

/* Padding inner */
.themesflat-icon-box.padding-inner { padding: 38px 15px 29px 15px; }

.themesflat-icon-box.padding-inner.pd33 { padding: 33px 15px 25px 15px; }

/*  Icon top */
.themesflat-icon-box.icon-top .icon-wrap { position: relative; }

/* Icon left */
.themesflat-icon-box.icon-left { position: relative; }
.themesflat-icon-box.icon-left .icon-wrap { position: absolute; top: 0; left: 0; }
.themesflat-icon-box.icon-left .text-wrap { padding-left: 80px; }

/* Style 1 */
.themesflat-icon-box.style-1 .heading { font-size: 18px; line-height: 28px; margin: 26px 0px 13px 0px; }
.themesflat-icon-box.style-1 .sub-heading { color: #666; line-height: 26px; margin-top: 19px; }

.themesflat-icon-box.style-1.light-bg .icon-wrap:before { content: ""; width: 100%; height: 100%; border-radius: 50%; background-color: <?= $data['design']['theme2']; ?>; position: absolute; top: 0; left: 0; z-index: -1; transform: scale(0.7); -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; opacity: 0; visibility: hidden; }

.themesflat-icon-box.style-1.light-bg:hover .icon-wrap:before { transform: scale(1);  opacity: 1; visibility: visible;}

.themesflat-icon-box.style-1.accent-color:hover .icon-wrap { color: #fff; }

/* Style 2 */
.themesflat-icon-box.style-2 .heading { font-size: 16px; line-height: 26px; margin: 0px; }
.themesflat-icon-box.style-2 .sub-heading { line-height: 26px; letter-spacing: 0.1px; margin-top: 15px;}

.themesflat-icon-box.style-2.accent-color:hover .icon-wrap { color: #222; }

.themesflat-icon-box.bg-white-column { -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.themesflat-icon-box.bg-white-column:hover { box-shadow: 1px 1px 10px 0px rgba(0, 0, 0, 0.2); }

/* Style 3 */
.themesflat-icon-box.style-3 { padding: 23px 0px 38px 0px; }
.themesflat-icon-box.style-3 .icon-wrap { font-size: 40px; line-height: 80px; }
.themesflat-icon-box.style-3 .heading { font-size: 16px; line-height: 30px; margin-top: 5px;  }
.themesflat-icon-box.style-3 .sub-heading { line-height: 22px; margin-top: 6px; }
.themesflat-icon-box.style-3 .more-link { display: block; line-height: 22px; color: #555; }
.themesflat-icon-box.style-3 .more-link a { color: #555; position: relative; }
.themesflat-icon-box.style-3 .more-link a:after { content: ""; position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background-color: #c0c0c0; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }

.themesflat-icon-box.style-3 .more-link a:hover { color: <?= $data['design']['theme2']; ?>; }
.themesflat-icon-box.style-3 .more-link a:hover:after { width: 0; }

@media only screen and (max-width: 1199px) {
	.themesflat-icon-box.padding-inner { padding: 15px; }
  .themesflat-icon-box.padding-inner.pd33 { padding: 10px; }
  .themesflat-icon-box.icon-left .text-wrap { padding-left: 62px; }
  .themesflat-icon-box.style-2 .heading { font-size: 14px; }
}

@media only screen and (max-width: 991px) {
  .themesflat-icon-box.style-3 .heading { font-size: 15px;  }
}

/* Half Background
-------------------------------------------------------------- */
.half-background { background-size: cover; background-repeat: no-repeat; background-position: center center; overflow: hidden; }

/* Style */
.half-background.style-1 { background-image: url('assets/img/gallery/gallery-1-960x560.jpg'); }
.half-background.style-2 { background-image: url('assets/img/bg-services-1-420x330.jpg'); }

@media only screen and (max-width: 991px) {
	.half-background.style-2 { height: 330px; }
}

@media only screen and (max-width: 767px) {
	.half-background.style-1 { height: 330px; }
	.half-background.style-2 { margin-top: 35px; }
}
/* List
-------------------------------------------------------------- */
.themesflat-list .inner { padding: 4px 0px; }
.themesflat-list .item { display: block; position: relative; }
.themesflat-list .icon { color: #999; }
.themesflat-list.has-icon .icon { display: inline-block; position: absolute; top: 50%; left: 0; transform: translateY(-50%); } 

.themesflat-list.has-icon.align-top .icon { top: 0; transform: translateY(0%);}

/* Icon left */
.themesflat-list.icon-left .item { padding-left: 15px; }

/* Font size */
.themesflat-list.has-icon.size-16 .icon { font-size: 16px;}

/* Style 1 */
.themesflat-list.style-1 .icon { color: <?= $data['design']['theme2']; ?>; }
.themesflat-list.style-1.icon-left .item { padding-left: 24px; width: 100%; }
.themesflat-list.style-1.icon-left.ofset-padding-32 .item { padding-left: 32px; }
.themesflat-list.style-1 .text { color: #666; }

/* Style 2 */
.themesflat-list.style-2 .text,
.themesflat-list.style-2 .icon { color: #777; }
.themesflat-list.style-2.icon-left .item { padding-left: 24px; }
.themesflat-list.style-2 .inner { padding: 0px; }

/* Image box
-------------------------------------------------------------- */
.themesflat-image-box .text-wrap { position: relative; }

/* Has icon */
.themesflat-image-box.has-icon .icon-wrap { display: inline-block; text-align: center; cursor: pointer;  }
.themesflat-image-box.has-icon.w65 .icon-wrap { width: 65px; height: 65px; height: 100%; background-color: #e2e2ea; line-height: 65px; font-size: 20px; color: #666; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.themesflat-image-box.has-icon.icon-right .icon-wrap { position: absolute; top: 0; right: 0;  }

.themesflat-image-box.has-icon:hover .icon-wrap { background-color: <?= $data['design']['theme2']; ?>; color: #fff;  }

/* Style 1 */
.themesflat-image-box.style-1 .text-wrap {  background-color: #f5f5f7; }
.themesflat-image-box.style-1 .heading { font-size: 16px; font-weight: 500; margin: 0px; line-height: 65px;  transform: translateX(21px);  }

/* Style 2 */
.themesflat-image-box.style-2 .text-wrap { padding: 28px 8px 28px 19px }
.themesflat-image-box.style-2 .heading { font-size: 16px; line-height: 26px; color: #222; font-weight: 600; margin: 0px; }
.themesflat-image-box.style-2 p { color: #777; margin: 15px 0px 0px 0px; line-height: 26px; letter-spacing: -0.1px; }
.themesflat-image-box.style-2 .elm-readmore a {  font-family: 'Montserrat', sans-serif; font-weight: 500; color: <?= $data['design']['theme2']; ?>; display: inline-block; margin-top: 10px; position: relative; }

.themesflat-image-box.style-2 .elm-readmore a:hover { transform: translateX(10px); }

@media only screen and (max-width: 1199px){
  .themesflat-image-box.style-2 .text-wrap { padding: 15px 0px; }
}

/* Carousel Control
-------------------------------------------------------------- */
.owl-theme .owl-nav, .owl-theme .owl-dots { display: none; }
.has-bullets .owl-theme .owl-dots { display: block; padding-top: 35px; }
.has-bullets.bullet24 .owl-theme .owl-dots { padding-top: 24px; }
.has-arrows .owl-theme .owl-nav { display: block; }
.has-arrows .owl-theme .owl-nav [class*='owl-'] { position: absolute; }
.has-arrows .owl-theme .owl-nav .owl-next { right: 0; }

/* Bullets Style */
.owl-theme .owl-dots { text-align: center; line-height: 10px; }
.owl-theme .owl-dots .owl-dot { display: inline-block; }
.owl-theme .owl-dots .owl-dot span { background-color: transparent; display: block; width: 10px; height: 10px; margin: 0 5px; border: 2px solid #ddd;  -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;  }
.owl-theme .owl-dots .owl-dot:hover span,
.owl-theme .owl-dots .owl-dot.active span { background-color: <?= $data['design']['theme2']; ?>; border-color:  <?= $data['design']['theme2']; ?>;  }

/* Arrows Center */
.has-arrows.arrow-center .owl-theme .owl-nav [class*='owl-'] { top: 50%; }
.has-arrows.arrow-center.offset-v-24 .owl-theme .owl-nav [class*='owl-'] { margin-top: -24px; }
.has-arrows.arrow-center.offset-v-60 .owl-theme .owl-nav [class*='owl-'] { margin-top: -60px; }
.has-arrows.arrow-center.offset-v-82 .owl-theme .owl-nav [class*='owl-'] { margin-top: -82px; }
.has-arrows.arrow-center.offset-v-111 .owl-theme .owl-nav [class*='owl-'] { margin-top: -111px; }

.has-arrows.arrow-center.offset-h-21 .owl-theme .owl-nav [class*='owl-'] { left: -21px; }
.has-arrows.arrow-center.offset-h-21 .owl-theme .owl-nav .owl-next { left: auto; right: -21px; }

/* Arrows Top */
.has-arrows.arrow-top .owl-theme .owl-nav [class*='owl-'] { right: 44px; }
.has-arrows.arrow-top .owl-theme .owl-nav .owl-next { right: 0; }
.has-arrows.arrow-top.arrow75 .owl-theme .owl-nav [class*='owl-'] { top: -75px; }

/* Arrows Style 1*/
.owl-theme .owl-nav [class*="owl-"] { text-align: center; background-color: <?= $data['design']['theme2']; ?>; color: #fff;  width: 40px; height: 40px; font-size: 0; display: inline-block; position: relative; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.owl-theme .owl-nav [class*="owl-"]:after { font-size: 20px; line-height: 40px; content: "\f3d2"; font-family: "Ionicons"; position: absolute; left: 0; top: 0; text-indent: 0; width: 100%; height: 100%; text-align: center; display: inline-block;}
.owl-theme .owl-nav .owl-next:after { content: "\f3d3"; }
.owl-theme .owl-nav [class*="owl-"]:hover { background-color: #3e3e3e; }
.owl-theme .owl-nav [class*="owl-"].disabled:hover,
.owl-theme .owl-nav [class*="owl-"].disabled { background-color: rgba(255,255,255,0.2); color: #fff; cursor: default; }

/* Arrows Style 2*/
.arrow-style-2 .owl-theme .owl-nav [class*="owl-"].disabled { background-color: #e7e7e7; color: #bdbdbd; }

/* Arrows & Bullets Circle */
.arrow-circle .owl-theme .owl-nav [class*="owl-"],
.bullet-circle .owl-theme .owl-dots .owl-dot span { border-radius: 50%; }

@media only screen and (max-width: 1199px) {
	.has-arrows.arrow-center.offset-v-82 .owl-theme .owl-nav [class*='owl-'] { margin-top: -150px; }
}

@media only screen and (max-width: 767px) {
	.has-arrows .owl-theme .owl-nav, .has-bullets .owl-theme .owl-dots { display: none ; }
}
/* Carousel thumb
-------------------------------------------------------------- */
.owl-theme .owl-thumbs { display: none; }
.has-thumb .owl-theme .owl-thumbs { display: block; }
.has-thumb .owl-thumbs .owl-thumb-item { display: inline-block; background-color: transparent; padding: 0px; margin: 20px 0px 0px 20px; }
.has-thumb .owl-thumbs .owl-thumb-item:first-child { margin-left: 0px; }

.has-thumb.w185 .owl-thumbs .owl-thumb-item { width: 184px; height: 106px; border: 1px solid transparent; }
.has-thumb.w185 .owl-thumbs .owl-thumb-item.active { border-color: <?= $data['design']['theme2']; ?>; }

@media only screen and (max-width: 1199px) {
	.has-thumb .owl-thumbs .owl-thumb-item:last-child { margin: 20px 0px 0px 0px; }
}

@media only screen and (max-width: 479px) {
	.has-thumb .owl-thumbs .owl-thumb-item { margin: 20px 0px 0px 0px; }
}

/* Parallax
-------------------------------------------------------------- */
.parallax { width: 100%; background-attachment: fixed; background-position: 50% 0; background-repeat: repeat;}
.parallax-1 { background-image: url('assets/img/parallax/parallax-1.jpg');  }
.parallax-2 { background-image: url('assets/img/parallax/parallax-2.jpg') ; }
.parallax-3 { background-image: url('assets/img/parallax/parallax-3.jpg');  }
.parallax-4 { background-image: url('assets/img/parallax/parallax-4.jpg') ; }

.parallax-overlay { position: relative; z-index: 1; }
.parallax-overlay .bg-parallax-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; }
.parallax-overlay .bg-parallax-overlay.overlay-black { background-color: rgba(40,42,48,0.8); }
.parallax-overlay .bg-parallax-overlay.overlay-black.style2 { background-color: rgba(0,0,0,0.7); }
.parallax-overlay .bg-parallax-overlay.overlay-black.style3 { background-color: rgba(0,0,0,0.8); }

/* Project
-------------------------------------------------------------- */
.themesflat-project .thumb { position: relative; }
.themesflat-project .heading { margin: 0px; }
.themesflat-project .elm-link { z-index: 2; }
.themesflat-project .elm-link > a { display: inline-block !important; margin: 0 4px; }
.themesflat-project .elm-meta > span { display: inline-block; position: relative; }

.themesflat-project.has-margin.mg15 { margin-left: -15px; 	margin-right: -15px;}
.themesflat-project.has-margin.mg15 .project-item { padding-left: 15px;padding-right: 15px;width: 33.33%; float: left; margin-bottom: 30px; }
.themesflat-project.has-margin.mg15.w25 .project-item { width: 25%; }

/* Style 1 */
.themesflat-project.style-1 .text-wrap { position: absolute; top: 50%; left: 50%; transform: translate(-50%, 6%); width: 100%; height: 100%;  z-index: 2; margin-left: 3px; opacity: 0; visibility: hidden; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;  }
.themesflat-project.style-1 .heading { font-size: 18px; line-height: 27px; color: #fff; }
.themesflat-project.style-1 .elm-meta > span { padding: 0px 11px; }
.themesflat-project.style-1 .elm-meta > span:before { content: ""; position: absolute; top: 50%; left: 0; transform: translateY(-50%); width: 1px; height: 10px; background-color: #bdbdbd;}
.themesflat-project.style-1 .elm-meta > span:first-child:before { background-color: transparent; width: 0; height: 0; } 
.themesflat-project.style-1 .elm-meta a { color: <?= $data['design']['theme2']; ?>; line-height: 26px;  }

.themesflat-project.style-1 .thumb:hover .text-wrap {  opacity: 1; visibility: visible; } 
.themesflat-project.style-1 .elm-meta a:hover { color: #fff; }

/* Style 2 */
.themesflat-project.style-2 .text-wrap { background-color: #f7f7f7; padding: 17px; }
.themesflat-project.style-2 .heading { font-size: 14px; line-height: 27px; }
.themesflat-project.style-2 .elm-meta > span { padding: 0px 8px 0px 14px; }
.themesflat-project.style-2 .elm-meta > span:first-child { padding-left: 0px; }
.themesflat-project.style-2 .elm-meta > span:before { content: ""; position: absolute; top: 50%; left: 0; transform: translateY(-50%); width: 1px; height: 10px; background-color: #e0e0e0;}
.themesflat-project.style-2 .elm-meta > span:first-child:before { background-color: transparent; width: 0; height: 0; } 
.themesflat-project.style-2 .elm-meta a { color: #7a7a7a; line-height: 20px;  }

.themesflat-project.style-2 .elm-meta a:hover { color: <?= $data['design']['theme2']; ?>; }

@media only screen and (max-width: 1199px) {
	.themesflat-project.style-1 .heading { font-size: 12px; }
	.themesflat-project.has-margin.mg15.w25 .project-item { width: 33.33%; }
  .themesflat-project.style-2 .text-wrap{ padding: 15px 5px; }
}

@media only screen and (max-width: 767px) {
	.themesflat-project.style-1 .heading { font-size: 14px; }
	.themesflat-project.has-margin.mg15.w25 .project-item ,
	.themesflat-project.has-margin.mg15 .project-item { width: 50%; }
}

@media only screen and (max-width: 479px) {
	.themesflat-project.has-margin.mg15.w25 .project-item,
	.themesflat-project.has-margin.mg15 .project-item { width: 100%; }
}

/* Testimonials
-------------------------------------------------------------- */
.themesflat-testimonials blockquote { padding: 0px; }
.themesflat-testimonials .name-pos .name  { margin: 0; }
.themesflat-testimonials.max-width-70 blockquote { max-width: 70%; margin: 0 auto; }

/* Center */
.themesflat-testimonials.align-center { text-align: center; }
.themesflat-testimonials.align-center .icon-wrap ,
.themesflat-testimonials.align-center .thumb,
.themesflat-testimonials.align-center .sep { margin: 0 auto; }

.themesflat-testimonials .text p { margin: 0px; }
.themesflat-testimonials .list-star i { color: <?= $data['design']['theme2']; ?>; letter-spacing: -0.5px; }

/* Has width */
.themesflat-testimonials.has-width.w100 .icon-wrap { width: 100px; height: 100px; line-height: 100px; font-size: 32px; color: #f6c01c; background-color: transparent; }
.themesflat-testimonials.has-width.w35 .icon-wrap { width: 35px; height: 35px;  line-height: 35px; font-size: 18px; color: #fff; background-color: <?= $data['design']['theme2']; ?>; display: inline-block; }

/* Circle */
.themesflat-testimonials.circle .icon-wrap { border-radius: 50%; }

/* Border  */
.themesflat-testimonials.border-solid .icon-wrap { border: 2px solid #606168; }

/* Style 1 */
.themesflat-testimonials.style-1 .text { margin-top: 41px; }
.themesflat-testimonials.style-1 .text p { font-size: 16px; line-height: 38px;  color: #fefefe; font-style: italic; }
.themesflat-testimonials.style-1 .sep { margin-top: 16px; }
.themesflat-testimonials.style-1 .name { font-size: 16px; line-height: 32px; color: #fff; margin: 33px 0px 0px 0px; }

/* Style 2 */
.themesflat-testimonials.style-2 .testimonial-item { padding-top: 45px; }
.themesflat-testimonials.style-2 .inner { position: relative; }
.themesflat-testimonials.style-2 .thumb { width: 90px; height: 90px; position: absolute; top: 0; left: 50%; transform: translate(-50%,-50%); z-index: 99; }
.themesflat-testimonials.style-2 .thumb img { border-radius: 50%; }
.themesflat-testimonials.style-2  .text { background-color: #fff; padding: 69px 30px 30px 30px; font-style: normal; }
.themesflat-testimonials.style-2 .name-pos .name { font-size: 16px; line-height: 16px; font-weight: 500; }
.themesflat-testimonials.style-2 .name-pos .position { font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 26px; color: #999; font-weight: 300; display: block; margin: 5px 5px 0px 0px; }
.themesflat-testimonials.style-2 .text p { line-height: 26px; color: #777; margin-top: 7px; }
.themesflat-testimonials.style-2 .list-star { margin-top: 18px; }

/* Style 3 */
.themesflat-testimonials.style-3 { background-color: #f7f7f7;  }
.themesflat-testimonials.style-3 .inner { padding: 42px 20px 33px 20px; }
.themesflat-testimonials.style-3 .thumb { width: 100px; height: 100px; position: relative; }
.themesflat-testimonials.style-3 .icon-wrap { position: absolute; right: 0; bottom: 0; }
.themesflat-testimonials.style-3 .text { font-style: normal; }
.themesflat-testimonials.style-3 p { color: #777; margin-top: 25px; }
.themesflat-testimonials.style-3 .name-pos .name { font-size: 16px; line-height: 26px;  margin-top: 24px; }
.themesflat-testimonials.style-3 .name-pos .position { color: #999; }

/* Quote
-------------------------------------------------------------- */
.themesflat-quote .inner { width: 100%; display: table; overflow: hidden; }
.themesflat-quote .heading-wrap { display: table-cell; vertical-align: middle; margin: 0; text-align: left; width: 75%; }
.themesflat-quote .button-wrap { display: table-cell; vertical-align: middle; margin: 0; text-align: right; width: 25%; }

/* Style 1 */
.themesflat-quote.style-1 .heading { margin: 0; font-size: 24px; color: #fff; }

@media only screen and (max-width: 991px) {
	.themesflat-quote .heading-wrap { width: 60%; }
	.themesflat-quote .button-wrap { width: 40%; }
}

@media only screen and (max-width: 767px) {
	.themesflat-testimonials.max-width-70 blockquote { max-width: 100%; }
}

@media only screen and (max-width: 479px) {
	.themesflat-quote .heading-wrap ,
	.themesflat-quote .button-wrap { display: block; width: 100%; text-align: left; }
	.themesflat-quote .button-wrap { margin-top: 15px; }
  .themesflat-quote.style-1 .heading { font-size: 18px; }
}

/* Tabs
-------------------------------------------------------------- */
.themesflat-tabs .tab-title { margin: 0 ; }
.themesflat-tabs .tab-title .item-title { font-family: "Montserrat", sans-serif;   padding: 0; list-style: none; display: inline-block; letter-spacing: 0.5px;  }
.themesflat-tabs .tab-title .item-title.active { position: relative;  }
.themesflat-tabs .tab-title .item-title > span { cursor: pointer;  transition: none;  display: inline-block; text-transform: uppercase; }

.themesflat-tabs.title-w170 .tab-title { width: 170px; }
/* Style 1 */
.themesflat-tabs.style-1 .tab-title  { margin:0 0 5px 0; background-color: transparent; }
.themesflat-tabs.style-1 .tab-title .item-title  { font-size: 14px; font-weight: 600; color: #777; margin: 0px 5px 0px 0px; border: 1px solid #f2f2f2; }
.themesflat-tabs.style-1 .tab-title .item-title > span { padding: 10px 36px 10px 39px; }
.themesflat-tabs.style-1 .tab-title .item-title.active > span { padding: 13px 36px 10px 39px; }
.themesflat-tabs.style-1 .tab-title .item-title.active { background-color: #fafafb; color: #2b323a;  }
.themesflat-tabs.style-1 .tab-content .item-content { padding: 19px 0px 19px 21px; background-color: #fafafb;  }
.themesflat-tabs.style-1 .tab-content .item-content p { margin: 0px 0px 8px 0px; line-height: 26px; color: #777; letter-spacing: -0.13px; }

.themesflat-tabs.style-1 .tab-content ul { margin: 0px; }
.themesflat-tabs.style-1 .tab-content ul li { padding: 5.5px 7px; }
.themesflat-tabs.style-1 .tab-content ul span { display: block; }
.themesflat-tabs.style-1 .tab-content ul span.fa { text-align: center; width: 30px; height: 30px; background-color: <?= $data['design']['theme2']; ?>; color: #fff; font-size: 16px; float: left; margin-right: 11px; line-height: 30px; }
.themesflat-tabs.style-1 .tab-content ul span.text { overflow: hidden; }

/* Style 2 */
.themesflat-tabs.style-2 { display: table; width: 100%; }
.themesflat-tabs.style-2 .tab-content-wrap ,
.themesflat-tabs.style-2 .tab-title { display: table-cell; vertical-align: top; }
.themesflat-tabs.style-2 .tab-title .item-title  { font-size: 14px; font-weight: 500; color: #777; margin: 0px 0px 5px 0px; background-color: #f1f1f1; display: block;}
.themesflat-tabs.style-2 .tab-title .item-title > span { padding: 13px 0px; display: block; text-align: center;}
.themesflat-tabs.style-2 .tab-content{ margin-left: 9px; }
.themesflat-tabs.style-2 .tab-content .item-content { padding: 20px 0px 19px 26px; background-color: transparent; border: 1px solid #f2f2f2;  }
.themesflat-tabs.style-2 .tab-content .item-content p { margin-top: 10px; letter-spacing: 0.07px; }
.themesflat-tabs.style-2 .tab-content .item-content p:first-child { margin: 0px; letter-spacing: 0px; }
.themesflat-tabs.style-2 .tab-title .item-title.active { background-color: <?= $data['design']['theme2']; ?>; color: #222; }

/* Has padding */
.themesflat-tabs.w168 .tab-title .item-title { width: 168px; text-align: center;  }
.themesflat-tabs.w168 .tab-title .item-title > span { padding: 10px 0px; }
.themesflat-tabs.w168 .tab-title .item-title.active > span { padding: 13px 0px 10px 0px; }


.themesflat-tabs.style-1 .tab-title .item-title:hover > span { color: #2b323a; }

@media only screen and (max-width: 1199px) {
	.themesflat-tabs.w168 .tab-title .item-title { width: 140px; }
	.themesflat-tabs.style-1 .tab-title .item-title.active > span,
	.themesflat-tabs.style-1 .tab-title .item-title > span { padding: 10px; }
}

@media only screen and (max-width: 991px) {
	.themesflat-tabs.w168 .tab-title .item-title { width: 100%; }
	.themesflat-tabs.style-1 .tab-title { margin: 0px; }
	.themesflat-tabs.style-1 .tab-title .item-title { margin: 0px 0px 5px 0px; display: block; }
	.themesflat-tabs.style-1 .tab-title .item-title { text-align: center; }
	.themesflat-tabs.style-1 .tab-title .item-title.active > span { padding: 10px 0px;  width: 100%; }
  .themesflat-tabs.style-2 .tab-content .item-content { padding: 15px; }
}

@media only screen and (max-width: 479px) {
	.themesflat-tabs.style-2 .tab-content-wrap, 
	.themesflat-tabs.style-2 .tab-title { display: block; text-align: left; }
	.themesflat-tabs.title-w170 .tab-title { width: 100%; }
	.themesflat-tabs.style-2 .tab-content { margin: 0px; }
}

/* Accordions
-------------------------------------------------------------- */
.themesflat-accordions .accordion-item { margin-bottom: 10px; }
.themesflat-accordions.style-4 .accordion-item { margin-bottom: 6px; }
.themesflat-accordions .accordion-item:last-child { margin-bottom: 0px; }
.themesflat-accordions .accordion-item .accordion-heading { position: relative;  margin-bottom: 0; cursor: pointer; position: relative; }
.themesflat-accordions .accordion-item .accordion-heading > .inner { display: block; position: relative; }

.themesflat-accordions .accordion-item .accordion-content { display: none;  }

/* Has icon */
.themesflat-accordions.has-icon .accordion-item .accordion-heading > .inner:before { content: "";  position: absolute; top: 50%; left: 0; transform: translateY(-50%);  -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }

.themesflat-accordions.has-icon.icon-left .accordion-item .accordion-heading > .inner { padding: 0px 0px 0px 34px; }
.themesflat-accordions.has-icon.icon-left.iconstyle-2 .accordion-item .accordion-heading > .inner { padding: 0px 0px 0px 64px; }

.themesflat-accordions.has-icon.iconstyle-1 .accordion-item .accordion-heading > .inner:before { content: "\e906"; font-family: "autoraicon" ; font-size: 20px; }
.themesflat-accordions.has-icon.iconstyle-2 .accordion-item .accordion-heading > .inner:before { content: "\f067"; font-family: "FontAwesome"; color: #999; font-size: 18px; width: 49px; height: 49px; text-align: center; line-height: 49px; background-color: transparent; border-right: 1px solid #f2f2f2; }

.themesflat-accordions.has-icon.iconstyle-1 .accordion-item.active .accordion-heading > .inner:before { color: <?= $data['design']['theme2']; ?>;  }
.themesflat-accordions.has-icon.iconstyle-2 .accordion-item.active .accordion-heading > .inner:before { content: "\f068"; color: #fff; background-color: <?= $data['design']['theme2']; ?>; border-color: <?= $data['design']['theme2']; ?>; }

.themesflat-accordions.has-icon.icon-right .accordion-item .accordion-heading > .inner:before { left: auto; right: 0; }

/* Style 1 */
.themesflat-accordions.style-1 .accordion-item { padding: 13px 0px; border: 1px solid #f2f2f2; background-color: transparent; }
.themesflat-accordions.style-1 .accordion-item.active {  padding: 22px 0px 20px 0px; }
.themesflat-accordions.style-1 .accordion-item .accordion-heading { font-size: 14px; color: #777; text-transform: uppercase; padding: 0px 22px; }
.themesflat-accordions.style-1 .accordion-item .accordion-content { padding-left: 56px; padding-top: 13px; line-height: 26px; letter-spacing: -0.07px; }
.themesflat-accordions.style-1 .accordion-item.active  { background-color: #fafafb;   }
.themesflat-accordions.style-1 .accordion-item.active  .accordion-heading { color: #222; }

/* Style 2 */
.themesflat-accordions.style-2 .accordion-item .accordion-heading { font-size: 14px; color: #777; text-transform: uppercase; padding: 0px 0px; border: 1px solid #f2f2f2;  background-color: transparent;}

.themesflat-accordions.style-2 .accordion-item  .accordion-heading {  padding: 13px 0px 14px 0px;  }
.themesflat-accordions.style-2 .accordion-item.active  .accordion-heading { color: #222;  }
.themesflat-accordions.style-2 .accordion-content { padding: 11px 0px 6px 0px; letter-spacing: 0.1px; line-height: 26px; }

/* Style 3 */
.themesflat-accordions.style-3 .accordion-item .accordion-heading { font-size: 16px; color: #777; font-weight: 500; border: 1px solid #f2f2f2;  background-color: transparent; font-weight: 500; text-transform: uppercase; padding: 11px 0px; }
.themesflat-accordions.style-3 .accordion-item.active  .accordion-heading { background-color: #fafafb; color: #222; font-weight: 600; }
.themesflat-accordions.style-3.has-icon.icon-left.iconstyle-2 .accordion-item .accordion-heading > .inner { padding: 0px 0px 0px 67px; }
.themesflat-accordions.style-3 .accordion-content { background-color: #fafafb; padding: 6px 10px 8px 19px; font-weight: 300; color: #777; margin-top: 4px; border: 1px solid #f2f2f2; line-height: 26px; letter-spacing: 0.1px; }

/* Style 4 */
.themesflat-accordions.style-4 .accordion-item .accordion-heading { font-size: 16px; color: #777; font-weight: 500; border: 1px solid #f2f2f2; background-color: #fafafb; text-transform: uppercase;  padding: 13px 23px;}
.themesflat-accordions.style-4 .accordion-item.active  .accordion-heading { background-color: <?= $data['design']['theme2']; ?>; border-color: <?= $data['design']['theme2']; ?>; color: #fff; }
.themesflat-accordions.style-4 .accordion-content { border: 1px solid #f2f2f2; padding: 22px 5px 22px 24px;  }
.themesflat-accordions.style-4.has-icon.icon-right .accordion-item .accordion-heading > .inner:before { color: #999; font-size: 30px; right: 0px; }
.themesflat-accordions.style-4.has-icon.icon-right .accordion-item.active .accordion-heading > .inner:before { color: #fff; }

.themesflat-accordions.style-4 .accordion-content .name { font-size: 14px; line-height: 24px; color: #555; margin-bottom: 10px; }
.themesflat-accordions.style-4 .accordion-content p { margin: 0px; }

.themesflat-accordions .accordion-item .accordion-heading:hover { color: #222;  }

@media only screen and (max-width: 991px) {
  .themesflat-accordions.style-2 .accordion-item .accordion-heading { font-size: 13px; padding: 6px 0px; }
}

@media only screen and (max-width: 767px) {
  .themesflat-accordions.style-2 .accordion-item .accordion-heading { padding: 15px 0px; }
}

@media only screen and (max-width: 479px) {
  .themesflat-accordions.style-2 .accordion-item .accordion-heading { padding: 6px 0px; }
}

/* Partner
-------------------------------------------------------------- */
.themesflat-partner.align-center { text-align: center; }
.themesflat-partner.align-center .thumb { margin: 0 auto; }
.themesflat-partner .thumb img { -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.themesflat-partner .partner-color { display: none !important; }
.themesflat-partner:hover .partner-default { display: none !important;  }
.themesflat-partner:hover .partner-color { display: block !important; }
/* Style 1 */
.themesflat-partner.style-1 .inner { border: 1px solid #f2f2f2; padding: 23px 0px 15px 0px; cursor: pointer; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease; }
.themesflat-partner.style-1 .thumb { width: 188px; height: 100px;  }
/* Style 2 */
.themesflat-partner.style-2 .thumb {width: 188px; height: 100px; }
.themesflat-partner.style-2 .inner { padding: 15px 0px; }

/* Progress Bar
-------------------------------------------------------------- */
.themesflat-progress { position: relative; overflow: hidden; }
.themesflat-progress .title,
.themesflat-progress .perc { line-height: normal; margin: 0; }
.themesflat-progress .title { position: absolute; left: 0; top: 0; }
.themesflat-progress .progress-animate { width: 0; }
.themesflat-progress .progress-bg { width: 100%; }
.themesflat-progress .perc { width: 0; text-align: right; filter: alpha(opacity=0); opacity: 0; -webkit-transition: opacity 1s ease-in-out; -moz-transition: opacity 1s ease-in-out; transition: opacity 1s ease-in-out; }
.themesflat-progress .perc.show { filter: alpha(opacity=100); opacity: 1; }

.themesflat-progress.height-10px .progress-animate { height: 10px; }

/* Style 1 */
.themesflat-progress.style-1 .title { font-size: 14px; font-weight: 400; letter-spacing: 0.6px; }
.themesflat-progress.style-1 .perc-wrap { font-family: 'Montserrat', sans-serif; color: #35383e; font-size: 14px; letter-spacing: 0.6px; }
.themesflat-progress.style-1 .progress-bg { background-color: #f7f7f7; margin-top: 13px; }
.themesflat-progress.style-1 .progress-animate { background-color: <?= $data['design']['theme2']; ?>; }

/* Request
-------------------------------------------------------------- */
.themesflat-request-box.style-1 .inner { display: table; width: 100%; overflow: hidden; }
.themesflat-request-box.style-1 .themesflat-headings { display: table-cell; vertical-align: top; width: 37%; text-align: left; }
.themesflat-request-box.style-1 .themesflat-contact-form { display: table-cell; vertical-align: top; width: 56%; text-align: right; }

@media only screen and (max-width: 991px) {
	.themesflat-request-box.style-1 .themesflat-headings,
	.themesflat-request-box.style-1 .themesflat-contact-form { display: block; width: 100%; text-align: left; }
	.themesflat-request-box.style-1 .themesflat-contact-form { margin-top: 15px; }
}
/* Contact Form 7
-------------------------------------------------------------- */
.themesflat-contact-form .wpcf7-form-control-wrap { position: relative; display: block; }

.themesflat-contact-form .wpcf7-form-control-wrap.your-name,
.themesflat-contact-form .wpcf7-form-control-wrap.your-email,
.themesflat-contact-form .wpcf7-form-control-wrap.your-phone { margin-bottom: 14px; }

/* Style 1 */
.themesflat-contact-form.style-1 input[type="text"],
.themesflat-contact-form.style-1 input[type="email"] { height: 46px; border-color: #fff; background: #fff; padding: 9px 19px; }
.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-name,
.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-email,
.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-phone { width: 49%; float: left; }
.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-name ,
.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-email{ margin-right: 2%; }
.themesflat-contact-form.style-1 .wrap-submit { float: left; }

/* Style 2 */
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-name,
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-email,
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-phone,
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-subject {  width: 49%; float: left; margin-bottom: 20px; }
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-name ,
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-email { margin-right: 2%; }
.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-message { clear: both; }
.themesflat-contact-form.style-2 input[type="text"],
.themesflat-contact-form.style-2 input[type="email"],
.themesflat-contact-form.style-2 textarea { background-color: #fafafb; font-weight: 300; }
.themesflat-contact-form.style-2 textarea { height: 188px; }
.themesflat-contact-form.style-2 input[type="submit"] { padding: 19px 49px; margin-top: 20px; }

.themesflat-contact-form.w100 .wpcf7-form-control-wrap.your-name,
.themesflat-contact-form.w100 .wpcf7-form-control-wrap.your-email,
.themesflat-contact-form.w100 .wpcf7-form-control-wrap.your-phone { width: 100%; float: none; margin-right: 0; margin-bottom: 9px; }
.themesflat-contact-form.w100 textarea { height: 142px; }
.themesflat-contact-form.w100 input[type="submit"] { margin-top: 9px; }

.themesflat-contact-form input[type="text"]:focus,
.themesflat-contact-form input[type="email"]:focus { border-color: <?= $data['design']['theme2']; ?>; }

@media only screen and (max-width: 479px) {
	.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-name,
	.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-email,
	.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-phone,
	.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-name,
	.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-email,
	.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-phone,
	.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-subject { width: 100%; }

	.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-name ,
	.themesflat-contact-form.style-1 .wpcf7-form-control-wrap.your-email,
	.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-name ,
	.themesflat-contact-form.style-2 .wpcf7-form-control-wrap.your-email { margin-right: 0px; }

  .themesflat-contact-form.style-1 .wrap-submit { float: none; }
}

/* Filter
-------------------------------------------------------------- */
.themesflat-filter { margin: 0px; }
.themesflat-filter li { display: inline-block; position: relative; padding: 0px; }

/* Absolute */
.themesflat-filter.filter-absolute { position: absolute; top: 50%; right: 0; transform: translateY(-50%); margin: 1px -3px 0px 0px; }
.themesflat-filter.filter-absolute.style-1 li a { margin: 0px 19px; }
/* Style 1 */
.themesflat-filter.style-1 li a { font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 28px; font-weight: 500; margin:0px 19.5px; color: #555; }
.themesflat-filter.style-1 li:last-child a { margin-right: 0px; }
.themesflat-filter.style-1 li:first-child a { margin-left: 0px; }
.themesflat-filter.style-1 li:before { content: ""; width: 1px; height: 10px; background-color: #d3d3d3; position: absolute; top: 50%; transform: translateY(-50%); left: 0; }
.themesflat-filter.style-1 li:first-child:before { width: 0; height: 0; background-color: transparent; } 

.themesflat-filter.style-1 li a:hover,
.themesflat-filter.style-1 li.active a { color: <?= $data['design']['theme2']; ?>; }

@media only screen and (max-width: 1199px) {
	.themesflat-filter.filter-absolute.style-1 li a,
	.themesflat-filter.style-1 li a { margin: 0px 10px; }
}

@media only screen and (max-width: 991px) {
	.themesflat-filter.filter-absolute { position: relative; top: 0; transform: translateY(0%);  margin: 0;}
}

@media only screen and (max-width: 479px) {
	.themesflat-filter li { padding: 5px 0px;}
	.themesflat-filter.style-1 li:before { width: 0px; height: 0px; background-color: transparent; }
}

/* Maps
-------------------------------------------------------------- */
.themesflat-map { height: 245px; }

/* Style 2 */
.themesflat-map.style-2 { height: 388px; }

/* Pricing
-------------------------------------------------------------- */
.row-price-table { width: 100%; }
.row-price-table.col4 > .themesflat-price-table { width: 25%; float: left; border-top: 1px solid #f2f2f2; border-bottom: 1px solid #f2f2f2; border-right: 1px solid #f2f2f2; }
.row-price-table.col4 > .themesflat-price-table:first-child { border-left: 1px solid #f2f2f2; }
.themesflat-price-table .title { margin: 0px; }
.themesflat-price-table ul { margin: 0px; }
.themesflat-price-table .sep.has-width.accent-bg { background-color: <?= $data['design']['theme2']; ?>; } 
.themesflat-price-table .sep.has-width.w80 { width: 80px; height: 2px; }
.themesflat-price-table .price-table-price .price-wrap { position: relative; }
.themesflat-price-table .price-table-price .price-wrap  span { font-family: 'Montserrat', sans-serif; font-weight: 500; display: inline-block; }
.themesflat-price-table .tag { display: inline-block;  font-family: 'Montserrat', sans-serif;  }

/* Style 1 */
.themesflat-price-table.style-1 { margin-top: 25px; }
.themesflat-price-table.style-1 .inner { padding: 43px 28px; }
.themesflat-price-table.style-1 .title { font-size: 18px; line-height: 24px; }
.themesflat-price-table.style-1 .tag { background-color: <?= $data['design']['theme2']; ?>; color: #363636; font-size: 12px; padding: 4px 16px; letter-spacing: 0.4px; margin: 12px 0px 6px 3px; font-weight: 500;  }
.themesflat-price-table.style-1 .sep { margin-top: 29px; }
.themesflat-price-table.style-1 .price-table-price { margin-top: 16px; }
.themesflat-price-table.style-1 .price-table-price .figure { font-size: 60px; line-height: 60px; color: <?= $data['design']['theme2']; ?>; }
.themesflat-price-table.style-1 .price-table-price .currency-month { position: absolute; bottom: 2px; right: 26px; }
.themesflat-price-table.style-1 .price-table-price .currency { color: <?= $data['design']['theme2']; ?>; }
.themesflat-price-table.style-1 .price-table-price .currency-month > span { position: relative; padding: 0px 16px; font-size: 18px; line-height: 24px;}
.themesflat-price-table.style-1 .price-table-price .currency-month > span:before { content: ""; position: absolute; left: 0; margin-left: -2px; top: 50%; width: 2px; height: 12px; background-color: #999; transform: translateY(-50%); }
.themesflat-price-table.style-1 .price-table-price .currency-month > span:first-child:before { width: 0; height: 0; background-color: transparent; }
.themesflat-price-table.style-1 .price-table-price .currency-month > span:first-child { padding-left: 0px; }
.themesflat-price-table.style-1 .price-table-features { margin-top: 13px; }
.themesflat-price-table.style-1 .price-table-features li { position: relative; line-height: 32px; }
.themesflat-price-table.style-1 .price-table-features li span { padding-left: 34px; }
.themesflat-price-table.style-1 .price-table-features li > i { position: absolute; top: 50%; left: 2px; transform: translateY(-50%); font-size: 8px; color: #cacaca; }

.themesflat-price-table.style-1 .price-table-features li.linethrough span { text-decoration: line-through; color: #b0b0b0; }
.themesflat-price-table.style-1 .price-table-features li.linethrough > i { text-decoration: line-through; color: #ebebeb; }
.themesflat-price-table.style-1 .price-table-button { margin-top: 23px; }
.themesflat-price-table.style-1 .price-table-button > a { padding: 11px 37px; }

.themesflat-price-table.active { margin-top: 0px;} 
.themesflat-price-table.active { background-color: #363636; border-color: #363636; }
.themesflat-price-table.active .price-table-price .month ,
.themesflat-price-table.active .price-table-features li span,
.themesflat-price-table.active .title { color: #fff; }

.themesflat-price-table.style-1 .tag:hover { background-color: #212121; color: #fff; }

@media only screen and (max-width: 1199px) {
	.themesflat-price-table.style-1 .price-table-price .currency-month { position: relative; bottom: 0; right: 0; }
  .themesflat-price-table.style-1 .inner { padding: 15px; }
}

@media only screen and (max-width: 991px)  {
	.row-price-table.col4 > .themesflat-price-table { width: 50%; }
}

@media only screen and (max-width: 479px)  {
	.row-price-table.col4 > .themesflat-price-table { width: 100%; }
	.themesflat-price-table.active { margin-top: 25px; }
}

/* Counter
-------------------------------------------------------------- */
.themesflat-counter .number-wrap { font-family: 'Montserrat', sans-serif; font-weight: 700; }
.themesflat-counter .heading { margin: 0px; }

/* Center */
.themesflat-counter.align-center .text-wrap { text-align: center; }

/* Style 1 */
.themesflat-counter.style-1 .number-wrap { color: #fff; font-size: 52px; line-height: 54px; }
.themesflat-counter.style-1 .suffix { color: <?= $data['design']['theme2']; ?>; }
.themesflat-counter.style-1 .heading {  font-size: 14px; line-height: 32px; color: #ebebeb; }

/* Team
-------------------------------------------------------------- */
.themesflat-team .thumb { position: relative; z-index: 1; }
.themesflat-team .socials { margin: 0px; }
.themesflat-team .socials li { display: inline-block; padding: 0px; margin: 0px 4px; }
.themesflat-team .socials li a { display: block; text-align: center; }
.themesflat-team .text-wrap .name { margin: 0px; }

/* Center */
.themesflat-team.align-center .text-wrap { text-align: center;  }

/* Style 1 */
.themesflat-team.style-1 .socials { position: absolute; text-align: center; width: 100%; height: 100%; left:0; top: 50%; z-index: 2; }
.themesflat-team.style-1 .socials li { opacity: 0; visibility: hidden; -webkit-transform: translate3d(0,-50%,0); transform: translate3d(0,-50%,0); -webkit-transition: opacity 0.2s, -webkit-transform 0.35s; transition: opacity 0.2s, transform 0.35s; }
.themesflat-team.style-1 .socials li a { width: 38px; height: 38px; line-height: 38px; color: #999; background-color: #fff; transform: translateY(-50%); }
.themesflat-team.style-1 .text-wrap { padding: 16px 0px; }
.themesflat-team.style-1 .text-wrap .name { font-size: 16px; line-height: 26px; letter-spacing: 0.5px; text-transform: uppercase; }
.themesflat-team.style-1 .text-wrap .position { letter-spacing: 0.5px; color: #999; }

.themesflat-team.style-1 .socials li a:hover { background-color: <?= $data['design']['theme2']; ?>; color: #fff; }
.themesflat-team.style-1 .team-item:hover .socials li { opacity: 1; visibility: visible; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); }
.themesflat-team.style-1 .team-item:hover .socials li:nth-child(3) { -webkit-transition-delay: 0.15s; transition-delay: 0.25s; }
.themesflat-team.style-1 .team-item:hover .socials li:nth-child(2) { -webkit-transition-delay: 0.1s; transition-delay: 0.15s; }
.themesflat-team.style-1 .team-item:hover .socials li:first-child { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; }

/* Content wrap
-------------------------------------------------------------- */
.separator-solid .flat-content-wrap { border-bottom: 1px solid #f2f2f2; padding-bottom: 22px; margin-bottom: 18px; }
.separator-solid .flat-content-wrap:last-child { border-bottom: 0px;  padding-bottom: 0px; margin: 0px;}
.flat-content-wrap .title { font-size: 18px; line-height: 36px; color: #222; font-weight: 600; letter-spacing: -0.15px; }
.flat-content-wrap p { color: #777; letter-spacing: -0.15px; margin: 0px; }
.flat-content-wrap .item { width: 50%; float: left; }
.flat-content-wrap .item .pd35 { padding: 20px 35px 18px 32px; }

.flat-content-wrap .sep.has-width.w60 { width: 60px; height: 2px; }
.flat-content-wrap .sep.has-width.accent-bg { background-color: <?= $data['design']['theme2']; ?>; }

.flat-content-wrap.pd26 { padding-left: 26px; }

/* Style 2 */
.flat-content-wrap.style-2 .title { font-size: 16px; line-height: 28px; margin: 0px; }
.flat-content-wrap.style-2 p { color: #555; letter-spacing: 0px; margin-top: 9px; }

/* Style 3 */
.flat-content-wrap.style-3 .title { font-size: 22px; line-height: 28px; margin: 0px; }
.flat-content-wrap.style-3 p { color: #777; letter-spacing: 0px; margin-top: 24px; }

@media only screen and (max-width: 1199px) {
  .flat-content-wrap.pd26 { padding-left: 10px; }
}

@media only screen and (max-width: 767px) {
  .flat-content-wrap.pd26 { padding-left: 0px; }
}

@media only screen and (max-width: 479px) {
	.flat-content-wrap .item { width: 100%; float: none; }
}
/* Gallery
-------------------------------------------------------------- */
.themesflat-gallery .thumb { position: relative; }
.themesflat-gallery .text-wrap span { font-family: 'Montserrat', sans-serif; text-transform: uppercase;  }

/* Style 1 */
.themesflat-gallery.style-1 .text-wrap { position: absolute; top: 50%; left: 39px; transform:  translateY(-50%); background-color: rgba(0,0,0,0.5); padding: 22px 44px 25px 32px; }
.themesflat-gallery.style-1 .text-wrap span { font-size: 22px; line-height: 35px; font-weight: 300; color: #fff; display: block;}
.themesflat-gallery.style-1 .text-wrap .heading { font-size: 28px; line-height: 35px; font-weight: 700; color: #fff; text-transform: uppercase; margin: 0px; }
.themesflat-gallery.style-1 a { padding: 11px 38px; margin-top: 21px; }

@media only screen and (max-width: 479px) {
	.themesflat-gallery.style-1 .text-wrap { display: none; }
}

/* Project detail
-------------------------------------------------------------- */
.detail-inner-wrap { width: 100%; }
.detail-inner-wrap .detail-info { float: left; margin-right: 35.5px; width: 28.7%; }
.detail-inner-wrap .detail-gallery { overflow: hidden; }

.detail-inner-wrap .list-info { margin: 15px 0px 0px 0px; }
.detail-inner-wrap .list-info  li { padding: 12.5px 0px; position: relative; border-top: 1px solid #f2f2f2;}
.detail-inner-wrap .list-info  li:first-child { border-top: 0px; }
.detail-inner-wrap .list-info span { color: #777; }
.detail-inner-wrap .list-info span > a { color: #777; font-style :italic; }
.detail-inner-wrap .list-info span.text { color: #222; }
.detail-inner-wrap .list-info.has-icon.icon-left .icon{ position: absolute; top: 50%; transform: translateY(-50%); left: 2px; }
.detail-inner-wrap .list-info.has-icon.icon-left span.text { padding-left: 30px; }
.detail-inner-wrap .list-info.has-icon.icon-left span.right { position: absolute; left: 169px; }

.detail-inner-wrap .list-info span > a:hover { color: <?= $data['design']['theme2']; ?>; }

@media only screen and (max-width: 991px) {
	.detail-inner-wrap .detail-info { width: 100%; float: none; margin: 0px; }
	.detail-inner-wrap .list-info.has-icon.icon-left span.right { left: 80%; }
}

@media only screen and (max-width: 479px) {
	.detail-inner-wrap .list-info.has-icon.icon-left span.right { left: 50%; }
}

/* Lines
-------------------------------------------------------------- */
.themesflat-lines .line { z-index: 1; display: block; }
.themesflat-lines .line-full .line { width: 100%; }

.themesflat-lines.style-1 .line { height: 1px; background-color: #f2f2f2; }



