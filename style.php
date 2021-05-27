<style>
/*!------------------------------------------------------------------
[MAIN STYLESHEET]

Template Name: Constra - Construction Html5 Template
Description: Constra - Construction Html5 Template
-------------------------------------------------------------------*/
/*------------------------------------------------------------------
[TABLE OF CONTENTS]
-------------------------------------------------------------------*/
@import url(https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800&display=swap);
/* Typography
================================================== */
body {
  background: #fff;
  color: #555;
}

body,
p {
  font-family: "Open Sans", sans-serif;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased !important;
  line-height: 26px;
  font-size: 15px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: #212121;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased !important;
}

h1 {
  font-size: 36px;
  line-height: 48px;
}

h2 {
  font-size: 28px;
  line-height: 36px;
  text-transform: uppercase;
  letter-spacing: -1px;
}

h3 {
  font-size: 24px;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: -.5px;
}

h4 {
  font-size: 18px;
  line-height: 28px;
  text-transform: uppercase;
  letter-spacing: -.2px;
}

h5 {
  font-size: 14px;
  line-height: 24px;
}

#block-views-front-page-blocks-block-1 
h2{ filter:none;
    background:none;
    border-top:3px solid #c34500;
    border-bottom:1px dotted #ccc;
    color:#252525;
    -webkit-border-radius:0;
    -moz-border-radius:0;
    border-radius:0;
  }
.live-feeds-block .more-link 
a{  text-decoration:none !important;
    font-size:1.5em;
  }
/* ใส่สีให้ข้างล่าง */
#cosine-day-year{
  border-radius:0 0 3px 3px;
  background-color:#f2f2f2;
}
#cosine-events-wraper{
  border-bottom:1px dotted #ccc;
  clear:both;
  margin-bottom:1.4em;
  overflow:hidden;
  padding-bottom:0.5em;
}
/* ทำให้เล็ก */
#cosine-calendar-item{
  text-align:center;
  width:66px;
  clear:both;
  float:left;
} 
/* ด้านบนของไอคอน */
#cosine-calendar-month{
  color:#fff;
  background-color:#0077ff;
  font-size:1.05em;
  border-radius:3px 3px 0 0;
  text-transform:uppercase;
}
/* วันที่ */
#cosine-calendar-day{
  font-size:2em;
  font-weight:bold;
  padding-top:4px;
}
/* ปี */
#cosine-calendar-year{
  font-size:1.1em;
  margin-top:2px;
}
#cosine-event-details{
  margin-left:80px;
}
#cosine-event-abstract{
  line-height:18px;
  font-size:14px;
}
#block-views-front-page-blocks-block 
h2{
    filter:none;
    background:none;
    border-top:3px solid #c34500;
    border-bottom:1px dotted #ccc;
    color:#252525;
    -webkit-border-radius:0;
    -moz-border-radius:0;
    border-radius:0;
  }

.alert .icon {
  margin-right: 15px;
}

/* Global styles
================================================== */
html {
  overflow-x: hidden !important;
  width: 100%;
  height: 100%;
  position: relative;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  border: 0;
  margin: 0;
  padding: 0;
}

.body-inner {
  position: relative;
  overflow: hidden;
}

.preload {
  position: fixed;
  background: #fff url(../images/preload.gif) center center no-repeat;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 99999;
}

a:link,
a:visited {
  text-decoration: none;
}

a {
  color: inherit;
  transition: .2s ease;
}

a:hover {
  text-decoration: none;
  color: #000;
}

a.read-more {
  color: #0077ff;
  font-weight: 700;
  text-transform: uppercase;
}

a.read-more:hover {
  color: #0077ff;
}

section,
.section-padding {
  padding: 70px 0;
  position: relative;
}

.no-padding {
  padding: 0;
}

.gap-60 {
  clear: both;
  height: 60px;
}

.gap-40 {
  clear: both;
  height: 40px;
}

.gap-30 {
  clear: both;
  height: 30px;
}

.gap-20 {
  clear: both;
  height: 20px;
}

.mrb-30 {
  margin-bottom: 30px;
}

.mrb-80 {
  margin-bottom: -80px;
}

.mrt-0 {
  margin-top: 0 !important;
  margin-bottom: 20px !important;
}

.pab {
  padding-bottom: 0;
}

a:focus {
  outline: 0;
}

.ts-padding {
  padding: 60px;
}

.solid-bg {
  background: #f9f9f9;
}

.dark-bg {
  background: #252525;
  color: #fff;
}

.dark-bg h2,
.dark-bg h3 {
  color: #fff;
}

.solid-row {
  background: #f0f0f0;
}

.bg-overlay {
  position: relative;
}

.bg-overlay .container {
  position: relative;
  z-index: 1;
}

.bg-overlay:after {
  background-color: rgba(0, 46, 91, 0.8);
  z-index: 0;
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.bg-overlay:after {
  position: relative;
}

.bg-overlay:after {
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 0;
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.content-hidden {
  position: absolute;
  height: 1px;
  width: 1px;
  clip: rect(1px, 1px, 1px, 1px);
  border: 0;
  overflow: hidden;
}

/* Dropcap */
.dropcap {
  font-size: 48px;
  line-height: 60px;
  padding: 0 7px;
  display: inline-block;
  font-weight: 700;
  margin: 5px 15px 5px 0;
  position: relative;
  text-transform: uppercase;
}

.dropcap.primary {
  background: #0077ff;
  color: #fff;
}

.dropcap.secondary {
  background: #3a5371;
  color: #fff;
}

/* Title */
.title {
  font-size: 32px;
  line-height: 36px;
  margin-bottom: 20px;
}

/* Title Border */
/* Section title */
.section-title {
  font-size: 18px;
  line-height: 28px;
  margin: 0;
  text-transform: uppercase;
  font-weight: 300;
}

.section-sub-title {
  font-weight: 900;
  font-size: 36px;
  line-height: 46px;
  margin: 0 0 60px;
  color: #212121;
}

@media (max-width: 575px) {
  .section-sub-title {
    font-size: 28px;
  }
}

/* Column title */
.column-title {
  margin: 0 0 40px;
}

.column-title-small {
  font-size: 20px;
  margin: 0 0 25px;
}

/* Page content title */
.page-content-title.first {
  margin-top: 0;
}

/* Video responsive */
.embed-responsive {
  padding-bottom: 56.25%;
  position: relative;
  display: block;
  height: 0;
  overflow: hidden;
}

.embed-responsive iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

/* Input form */
.form-control {
  box-shadow: none;
  border: 1px solid #dadada;
  padding: 5px 20px;
  height: 44px;
  background: none;
  color: #959595;
  font-size: 14px;
  border-radius: 0;
}

.form-control:focus {
  box-shadow: none;
  border: 1px solid #0077ff;
}

hr {
  background-color: #e7e7e7;
  border: 0;
  height: 1px;
  margin: 40px 0;
}

.alert hr {
  background: initial;
  margin: initial;
  border-top: 1px solid;
  height: initial;
  margin-bottom: 1rem;
  opacity: .2;
}

blockquote {
  padding: 25px;
  margin: 20px 0;
  background: #f9f9f9;
  position: relative;
  border-left: 3px solid #0077ff;
  padding-left: 40px;
}

blockquote.text-center {
  border-top: 3px solid #0077ff;
  border-left: 0;
  padding-left: 25px;
  padding-top: 50px;
}

blockquote.text-center:before {
  left: 50%;
  top: 10px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

blockquote.text-right {
  border-right: 3px solid #0077ff;
  padding-right: 40px;
  border-left: 0;
  padding-left: 25px;
}

blockquote.text-right:before {
  left: auto;
  right: 5px;
}

blockquote:before {
  content: "\f10d";
  font-family: "Font Awesome 5 Free";
  position: absolute;
  font-size: 28px;
  color: #E5E5E5;
  top: 5px;
  left: 5px;
  font-weight: 700;
  z-index: 0;
}

blockquote p {
  font-size: 14px;
  line-height: 22px;
  position: relative;
  z-index: 1;
  font-style: italic;
  margin-bottom: 0;
}

cite {
  display: block;
  font-size: 14px;
  margin-top: 10px;
}

/* Ul, Ol */
.list-round,
.list-arrow,
.list-check {
  list-style: none;
  margin: 0;
  padding: 0 0 0 15px;
}

.list-round li {
  line-height: 28px;
}

.list-round li:before {
  font-family: "Font Awesome 5 Free";
  content: "\f138";
  margin-right: 10px;
  color: #0077ff;
  font-size: 12px;
}

.list-arrow {
  padding: 0;
}

ul.list-arrow li:before {
  font-family: "Font Awesome 5 Free";
  content: "\f105";
  margin-right: 10px;
  color: #0077ff;
  font-size: 16px;
  font-weight: bold;
}

ul.list-check li:before {
  font-family: "Font Awesome 5 Free";
  content: "\f00c";
  margin-right: 10px;
  color: #0077ff;
  font-size: 14px;
}

/* Bootstrap */
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover,
.nav-tabs > li > a:hover,
.nav-tabs > li > a {
  border: 0;
}

.nav > li > a:focus,
.nav > li > a:hover {
  background: none;
}

.pattern-bg {
  background: #f5f5f5 url(../images/crossword.png);
}

a[href^=tel] {
  color: inherit;
  text-decoration: none;
}

/* Button */
.btn:active, .btn:focus {
  box-shadow: none !important;
}

.btn-primary,
.btn-dark {
  border: 0;
  border-radius: 3px;
  padding: 12px 20px 10px;
  font-weight: 700;
  text-transform: uppercase;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  transition: 350ms;
  font-size: 14px;
}

@media (max-width: 767px) {
  .btn-primary,
  .btn-dark {
    font-size: 13px;
  }
}

.btn-white.btn-primary {
  background: #fff;
  color: #0077ff;
}

.btn-primary {
  background: #0077ff;
}

.btn-dark {
  background: #23282d;
}

.btn-primary:hover,
.btn-dark:hover,
.btn-white.btn-primary:hover {
  background: #111;
  color: #fff;
}

.btn-primary:hover:active, .btn-primary:hover:focus,
.btn-dark:hover:active,
.btn-dark:hover:focus,
.btn-white.btn-primary:hover:active,
.btn-white.btn-primary:hover:focus {
  color: #fff;
  background-color: #111 !important;
}

.general-btn {
  margin-top: 50px;
}

/* Bootstrap */
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover,
.nav-tabs > li > a:hover,
.nav-tabs > li > a {
  border: 0;
}

.nav > li > a:focus,
.nav > li > a:hover {
  background: none;
}

.pattern-bg {
  background: #f5f5f5 url(../images/crossword.png);
}

a[href^=tel] {
  color: inherit;
  text-decoration: none;
}

/* Top Bar
================================================== */
.top-bar {
  padding: 8px 0;
  background: #0077ff;
  position: relative;
}

/* Top info */
ul.top-info {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul.top-info li {
  position: relative;
  line-height: 10px;
  display: inline-block;
  margin-left: 0;
  padding-right: 15px;
}

ul.top-info li i {
  font-size: 18px;
  position: relative;
  top: 2px;
  margin-right: 5px;
}

ul.top-info li p.info-text {
  margin: 0;
  line-height: normal;
  display: inline-block;
  flex-direction: column;
  color: black;
}

/* Top social */
.top-social ul {
  list-style: none;
  padding: 0;
  margin: 0;
  margin-right: -12px;
}

@media (max-width: 767px) {
  .top-social ul {
    margin-right: 0;
  }
}

.top-social ul li {
  display: inline-block;
  padding: 0;
}

.top-social ul li a {
  color: #2c2c2c;
  font-size: 14px;
  transition: 400ms;
  padding: 9px 12px;
}

.top-social ul li a:hover {
  color: #333;
}

/* Top bar border */
.top-bar-border {
  padding: 8px 20px 8px;
  border-bottom: 1px solid #ddd;
}

.top-bar-border ul.top-info {
  color: #fff;
  font-weight: 400;
}

.top-bar-border .top-social li a {
  color: #7c7c7c;
}

.top-bar-border ul.top-info li i {
  color: #0077ff;
}

/* Header area
================================================== */
.header {
  background: #fff;
  position: relative;
  box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.1);
}

.header-one,
.header-one .site-navigation {
  background: #23282d;
}

.header-one .navbar-collapse {
  padding-left: 0;
}

@media (max-width: 991px) {
  .navbar-collapse.collapse {
    overflow-y: auto;
  }
}

.header-one ul.navbar-nav > li {
  padding-left: 0;
  padding-right: 30px;
}

@media (max-width: 991px) {
  .header-one ul.navbar-nav > li {
    padding-right: 0;
  }
}

.header-one .logo-area {
  padding: 30px 0;
}

.navbar-fixed {
  z-index: 9999;
  position: fixed;
  width: 100%;
  top: 0;
}

.header-two {
  background: #fff;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.15);
  padding: 15px 0;
}

.header-two .navbar-fixed {
  background-color: #fff;
}

ul.navbar-nav > li > a {
  padding: 15px 0 !important;
  color: #fff;
}

@media (max-width: 991px) {
  ul.navbar-nav > li > a {
    padding: 1px 0 !important;
  }
  .navbar-nav {
    margin-bottom: 15px;
  }
}

ul.navbar-nav > li:hover > a,
ul.navbar-nav > li.active > a {
  color: #0077ff !important;
}

/*-- Logo --*/
.logo img {
  width: auto;
  height: 35px;
}

.header-two .logo img {
  height: 75px;
}

/* header right */
.header-right {
  float: right;
}

ul.top-info-box {
  list-style: none;
  margin: 0;
  padding: 0;
  float: right;
}

@media (max-width: 767px) {
  ul.top-info-box {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
  }
}

ul.top-info-box li {
  position: relative;
  float: left;
  margin-left: 0;
  border-right: 1px solid #dedede;
  border-right: 1px solid rgba(0, 0, 0, 0.1);
  padding-right: 25px;
  margin-right: 25px;
}

@media (max-width: 767px) {
  ul.top-info-box li {
    border: 0;
    text-align: center;
    margin: 0;
    flex: 0 0 50%;
    padding: 0;
    margin-top: 10px;
  }
}

@media (max-width: 400px) {
  ul.top-info-box li {
    border: 0;
    text-align: center;
    margin: 0;
    flex: 0 0 100%;
    margin-top: 15px;
  }
}

ul.top-info-box li:last-child {
  margin-right: 0;
  padding-right: 0;
  border-right: 0;
}

ul.top-info-box li.last {
  border-right: 0;
}

ul.top-info-box li .info-box span.info-icon {
  font-size: 20px;
  display: inline-block;
  text-align: center;
  margin: 2px 5px 0 0;
  position: relative;
}

ul.top-info-box li .info-box .info-box-content {
  display: inline-block;
  font-family: "Montserrat", sans-serif;
  flex-direction: column;
}

ul.top-info-box li .info-box .info-box-title {
  font-size: 14px;
  margin-bottom: 8px;
  line-height: normal;
}

ul.top-info-box li .info-box .info-box-subtitle {
  margin: 0;
  line-height: normal;
  font-size: 15px;
  font-weight: 700;
  color: #111;
}

/*-- Search start --*/
ul.top-info-box > li.nav-search {
  cursor: pointer;
  padding-left: 30px;
  margin-left: 30px;
}

ul.top-info-box > li.nav-search:before {
  position: absolute;
  content: '';
  background: #ddd;
  left: 0;
  width: 1px;
  height: 40px;
  top: 50%;
  margin-top: -10px;
}

ul.top-info-box > li.nav-search i {
  font-size: 20px;
  top: 10px;
  position: relative;
  cursor: pointer;
  color: #999;
}

/* Main navigation */
.navbar-toggler {
  float: left;
  margin-top: 10px;
  padding: 12px;
}

.navbar {
  border-radius: 0;
  border: 0;
  margin-bottom: 0;
}

.navbar-toggler {
  margin: 10px 0;
  padding: 6px;
  border-radius: 0;
  font-size: 1rem;
  background: #0077ff;
}

.navbar-toggler:focus {
  outline: 0;
}

.navbar-dark .navbar-toggler-icon,
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

ul.navbar-nav > li:hover > a,
ul.navbar-nav > li.active > a {
  color: #0077ff;
  position: relative;
}

ul.navbar-nav > li {
  padding: 0 13px;
  position: relative;
}

@media (max-width: 1200px) {
  ul.navbar-nav > li {
    padding: 0 9px;
  }
  ul.navbar-nav > li .nav-link {
    font-size: 20px;
  }
}

.header-two .navbar-nav > .header-get-a-quote {
  top: -4px;
}

@media (max-width: 991px) {
  .header-two ul.navbar-nav > li {
    padding: 0;
    width: 100%;
  }
}

ul.navbar-nav > li:last-child {
  padding-right: 0;
}

ul.navbar-nav > li:last-child:after {
  background: none;
}

ul.navbar-nav > li > a:hover,
ul.navbar-nav > li > a:focus {
  background: none;
}

ul.navbar-nav > li > a i {
  font-weight: 700;
}

@media (max-width: 991px) {
  ul.navbar-nav > li > a i {
    float: right;
    background: #0077ff;
    padding: 6px 10px;
    margin-top: 7px;
  }
  .header-two ul.navbar-nav > li > a i {
    color: #fff;
  }
  .header-two ul.navbar-nav > li.active > a i,
  .header-two ul.navbar-nav > li > a.active i {
    color: #0077ff;
  }
}

ul.navbar-nav > li > a:after,
ul.navbar-nav > li > a:after {
  display: none;
}

ul.navbar-nav > li > a {
  font-family: "Montserrat", sans-serif;
  color: #fff !important;
  text-rendering: optimizeLegibility;
  font-weight: 700 !important;
  text-transform: uppercase;
  letter-spacing: -.2px;
  font-size: 14px;
  margin: 0;
  line-height: 40px;
  padding: 30px 0;
  transition: 350ms;
}

.navbar-light ul.navbar-nav > li > a {
  color: #000 !important;
  font-size: 13px;
}

/* Dropdown */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -2px;
  border-radius: 0;
}

.dropdown-submenu > a:after {
  display: block;
  content: "\f105";
  font-family: "Font Awesome 5 Free";
  float: right;
  margin-top: 0;
  margin-right: -5px;
  border: 0;
}

.dropdown-submenu:hover > a:after {
  border-left-color: #fff;
}

.dropdown-menu {
  text-align: left;
  background: #fff;
  z-index: 100;
  min-width: 200px;
  border-radius: 0;
  border: 0;
  border-top: 2px solid #0077ff;
  padding: 0 20px;
  margin: 0;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}

@media (max-width: 991px) {
  .dropdown-menu {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
  }
}

.dropdown-menu-large {
  min-width: 400px;
}

.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

.dropdown-menu-large > li > ul > li > a {
  padding-left: 0;
}

.dropdown-menu-large > li > ul > li.active > a {
  color: #0077ff !important;
}

.navbar-nav > li > .dropdown-menu a {
  background: none;
}

.dropdown-menu li a {
  font-family: "Montserrat", sans-serif;
  display: block;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
  line-height: normal;
  text-decoration: none;
  padding: 15px 0;
  letter-spacing: .3px;
  border-bottom: 1px solid #e5e5e5;
  color: #333333;
}

@media (max-width: 991px) {
  .dropdown-menu li a {
    padding: 12px 0;
  }
}

.dropdown-menu li:last-child > a {
  border-bottom: 0;
}

.dropdown-menu li a:hover,
.dropdown-menu li a:focus {
  color: #0077ff;
}

@media (min-width: 991px) {
  ul.nav li.dropdown:hover ul.dropdown-menu {
    display: block;
  }
}

@media (min-width: 991px) {
  ul.nav li.dropdown ul.dropdown-menu li.dropdown-submenu .dropdown-menu {
    left: 100%;
    top: 0;
    display: none;
  }
  ul.nav li.dropdown ul.dropdown-menu li.dropdown-submenu:hover .dropdown-menu {
    display: block;
  }
}

.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus,
.dropdown-menu > .active > .dropdown-menu > .active > a {
  background: none;
  color: #0077ff;
}

/*-- Nav Search start --*/
.site-navigation .container,
.search-area {
  position: relative;
}

.search-area {
  min-height: 70px;
  padding-right: 0;
}

.nav-search {
  position: absolute;
  cursor: pointer;
  top: 22px;
  right: 18px;
  color: #999;
}

@media (max-width: 991px) {
  .nav-search {
    top: 17px;
  }
}

.search-block {
  background-color: rgba(0, 0, 0, 0.65);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  display: none;
  padding: 10px;
  position: absolute;
  right: 15px;
  top: 100%;
  width: 300px;
  z-index: 10;
  margin-top: 0;
}

@media (max-width: 991px) {
  .search-block {
    top: 58px;
  }
}

.search-block .form-control {
  background-color: #0077ff;
  border: none;
  color: #fff;
  width: 100%;
  height: 40px;
  padding: 0 12px;
}

.search-block .search-close {
  color: #999;
  position: absolute;
  top: -53px;
  right: -4px;
  font-size: 32px;
  cursor: pointer;
  background: #23282d;
  padding: 5px;
}

@media (max-width: 991px) {
  .search-block .search-close {
    top: -46px;
  }
}

.search-area .nav-search {
  top: 23px;
}

.search-area .search-block .search-close {
  top: -50px;
}

.search-area .search-block {
  right: 0;
}

/* Get a quote */
.header-get-a-quote .btn-primary {
  padding: 12px 25px !important;
  font-size: 13px;
  border-radius: 3px;
  line-height: normal;
  text-transform: capitalize;
  color: #fff;
  margin-top: 5px;
}

@media (max-width: 1200px) {
  .header-get-a-quote .btn-primary {
    padding: 12px !important;
  }
}

@media (max-width: 991px) {
  .header-get-a-quote .btn-primary {
    padding: 12px 30px !important;
  }
}

.header-get-a-quote .btn-primary:hover {
  background: #272d33;
  color: #0077ff !important;
}

ul.navbar-nav > li.header-get-a-quote:hover > a:after {
  position: relative;
  content: no-close-quote;
}

/* Table of Content
==================================================
1.    Slider
2.    Call to action
3.    Features
4.    Facts
5.    Services
6.   Project area
7.   Content area
8.   Testimonial
9.   Subscribe area
10.   News section
11.   Footer
12.   Sub Pages
13.   Contact Us
14.   News Listing
15.   News Single
16.   Sidebar
17.   Error page
*/
/* Slider
================================================== */
/*-- Main slide --*/
.banner-carousel .banner-carousel-item {
  height: 700px;
  color: #fff;
  background-position: 50% 50%;
  background-size: cover;
}

@media (max-width: 991px) {
  .banner-carousel .banner-carousel-item {
    height: 550px;
  }
}

@media (max-width: 575px) {
  .banner-carousel .banner-carousel-item {
    height: 450px;
  }
}

.slider-content {
  position: relative;
  height: 100%;
  width: 100%;
}

.slide-title-box {
  font-size: 16px;
  line-height: 39px;
  background: #0077ff;
  color: #fff;
  display: inline-block;
  padding: 0 15px;
  margin: 0 0 10px;
}

.slide-title {
  font-size: 30px;
  line-height: 36px;
  font-weight: 300;
  color: #fff;
  margin: 20px 0 10px;
}

@media (max-width: 991px) {
  .slide-title {
    font-size: 22px;
  }
}

@media (max-width: 575px) {
  .slide-title {
    font-size: 16px;
  }
}

.slide-sub-title {
  font-style: normal;
  font-size: 60px;
  line-height: 58px;
  margin: 20px 0;
  color: #fff;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: -1px;
}

@media (max-width: 991px) {
  .slide-sub-title {
    font-size: 46px;
  }
}

@media (max-width: 575px) {
  .slide-sub-title {
    font-size: 30px;
    line-height: 30px;
  }
}

.slider-text {
  display: table;
  vertical-align: bottom;
  color: #fff;
  padding-left: 40%;
  width: 100%;
  padding-bottom: 0;
  padding-top: 20px;
}

.slider-text .slide-head {
  font-size: 36px;
  color: #0052a5;
  position: relative;
}

.slider-img {
  display: block;
  position: absolute;
  top: -80px;
  left: 20%;
  width: 314px;
  max-height: 100%;
}

.slider-img img {
  display: block;
  position: relative;
  max-height: 100%;
  width: auto;
}

.slider.btn {
  margin: 15px 5px 0;
  border: 2px solid transparent;
}

@media (max-width: 575px) {
  .slider.btn {
    font-size: 12px;
  }
}

.slider.border {
  background: none;
  border: 2px solid #0077ff !important;
}

.slider.border:hover {
  background: #0077ff;
  border: 2px solid transparent;
}

/* Carousel control */
.banner-carousel .carousel-control {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  text-shadow: none;
  transition: all .25s ease;
  padding: 0;
  outline: 0;
  border: 0;
}

@media (max-width: 575px) {
  .banner-carousel .carousel-control {
    display: none !important;
  }
}

.banner-carousel .slick-dots {
  opacity: 0;
  filter: alpha(opacity=0);
  bottom: 60px;
}

.slick-dots li button::before {
  font-size: 12px;
}

.slick-dots li button:hover:before, .slick-dots .slick-dots li button:focus:before,
.slick-dots li.slick-active button:before {
  opacity: 1;
  color: #0077ff;
}

.slick-slide {
  outline: 0;
}

.banner-carousel:hover .carousel-control,
.banner-carousel:hover .carousel-control,
.banner-carousel:hover .slick-dots {
  opacity: 1;
  filter: alpha(opacity=100);
}

.banner-carousel .carousel-control.left {
  left: 20px;
}

.banner-carousel .carousel-control.right {
  right: 20px;
}

.banner-carousel .carousel-control i {
  background: rgba(0, 0, 0, 0.3);
  color: #fff;
  line-height: 58px;
  width: 60px;
  height: 60px;
  font-size: 22px;
  border-radius: 0;
  transition: all 500ms ease;
}

.banner-carousel .carousel-control i:hover {
  background: #0077ff;
  color: #fff;
}

/*-- Animation */
.banner-carousel [data-animation-in] {
  opacity: 0;
}

/* slick Box slider */
.box-slider-content {
  top: 50%;
  padding: 0;
  position: absolute;
  width: 100%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

@media (max-width: 767px) {
  .box-slider-content {
    top: auto;
    -webkit-transform: translateY(0);
            transform: translateY(0);
    left: 20px;
    bottom: 20px;
    width: calc(100% - 40px);
  }
}

.box-slider-text {
  background: #111;
  background: rgba(0, 0, 0, 0.65);
  display: inline-block;
  padding: 20px 30px;
  max-width: 650px;
}

.box-slide-title {
  font-size: 18px;
  font-weight: 300;
  margin: 0;
  color: #fff;
}

@media (max-width: 767px) {
  .box-slide-title {
    font-size: 16px;
  }
}

.box-slide-sub-title {
  font-size: 36px;
  margin: 8px 0 10px;
  color: #fff;
}

@media (max-width: 767px) {
  .box-slide-sub-title {
    font-size: 26px;
  }
}

.box-slide-description {
  color: #fff;
}

@media (max-width: 767px) {
  .box-slide-description {
    font-size: 15px;
  }
}

.box-slider-text .btn {
  padding: 10px 20px;
}

.box-slide.owl-theme .owl-controls {
  margin: -20px;
}

/* Call to action
================================================== */
.call-to-action {
  background-color: #272d33;
  padding: 30px;
}

.call-to-action-title {
  color: #fff;
  margin: 0;
  padding: 25px 0;
  line-height: normal;
  font-size: 22px;
  text-transform: capitalize;
}

/* Action style box */
.call-to-action-box {
  margin-top: -50px;
}

.call-to-action-box .action-style-box {
  background: #0077ff;
  padding: 30px;
}

.action-title {
  color: #fff;
  margin: 0;
  line-height: 36px;
  font-size: 18px;
  text-transform: uppercase;
}

/* Intro
================================================== */
/* Intro */
.ts-intro {
  padding-right: 20px;
}

.into-title {
  font-weight: 300;
  text-transform: uppercase;
  font-size: 18px;
  line-height: normal;
  margin: 0;
}

.into-sub-title {
  font-weight: 900;
  text-transform: uppercase;
  font-size: 32px;
  line-height: normal;
  margin: 10px 0;
}

/*-- Featured Tab --*/
.featured-tab {
  padding-left: 15px;
}

.featured-tab .nav-tabs {
  border: 0;
}

.featured-tab .nav-tabs > li > a {
  font-family: 'Roboto Slab', serif;
  background: #272d33;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  border-radius: 0;
  text-transform: uppercase;
  line-height: 50px;
  margin: 0 1px 20px;
  padding: 0 20px;
  border: 0 !important;
  transition: all 300ms ease;
}

.featured-tab .tab-content {
  border-top: 0;
  padding: 0;
  overflow: hidden;
}

.featured-tab .nav.nav-tabs {
  margin-bottom: 10px;
}

.featured-tab .nav-tabs > li.active > a {
  color: #fff;
  background: #0077ff;
  position: relative;
}

.featured-tab .nav-tabs > li.active > a:after {
  position: absolute;
  content: " ";
  width: auto;
  height: auto;
  bottom: -20px;
  left: 50%;
  border-width: 10px;
  border-style: solid;
  border-color: #0077ff rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

.featured-tab .lead {
  font-size: 18px;
  line-height: 28px;
  color: #303030;
  font-weight: 400;
}

.featured-tab .tab-pane img.pull-left {
  margin: 0 30px 10px 0;
}

.featured-tab .tab-pane img.pull-right {
  margin: 0 0 0 30px;
}

.featured-tab .tab-icon i {
  font-size: 230px;
}

.tab-image-content {
  padding-left: 0;
}

.featured-tab .border-title.border-left {
  display: inline-block;
  margin-bottom: 25px;
  font-size: 20px;
}

/* Tab services */
.featured-tab.tab-services .nav-tabs > li > a {
  font-size: 14px;
  padding: 0 21px;
  text-transform: capitalize;
}

.featured-tab.tab-services .nav.nav-tabs {
  margin-bottom: 20px;
}

/* Facts
================================================== */
.facts-wrapper {
  text-align: center;
}

.facts-wrapper .ts-facts {
  color: #fff;
}

.ts-facts .ts-facts-icon i {
  font-size: 42px;
  color: #0077ff;
}

.ts-facts .ts-facts-content .ts-facts-num {
  color: #fff;
  font-size: 44px;
  margin: 30px 0 20px;
}

.ts-facts .ts-facts-content .ts-facts-title {
  font-size: 16px;
  color: #0077ff;
  margin: 0;
}

/* Services
================================================== */
/* Service box */
.ts-service-box .ts-service-icon i {
  font-size: 36px;
  float: left;
  color: #0077ff;
}

.ts-service-box .ts-service-box-content {
  margin-left: 62px;
  margin-bottom: 30px;
}

.tab-content .ts-service-box .ts-service-box-content {
  margin-left: 90px;
}

.ts-service-box .ts-service-box-content h3 {
  font-size: 16px;
  margin-bottom: 10px;
  line-height: 28px;
}

.ts-service-box .ts-service-box-info {
  margin-left: 25px;
  margin-bottom: 40px;
}

.service-box-title {
  font-size: 16px;
  margin: 0 0 10px;
}

.service-box-title a {
  color: #333;
}

.service-box-title a:hover {
  color: #0077ff;
}

.ts-pricing-name a {
  color: rgb(255, 255, 255);
}

.ts-pricing-name a:hover {
  color: #0077ff;
}

/* Service box bg */
.ts-service-box-bg {
  background: #252525;
  color: #fff;
  padding: 30px;
}

.ts-service-box-bg h4,
.ts-service-box-bg h3 {
  color: #fff;
}

/* Service box 

.ts-service-box .ts-service-icon i {
  font-size: 24px;
  float: left;
  color: #fff;
  background: $color-primary;
  border-radius: 100%;
  width: 60px;
  height: 60px;
  line-height: 60px;
  text-align: center;
}

.ts-service-box .ts-service-box-content {
  margin-left: 80px;
  margin-bottom: 30px;
}

.tab-content .ts-service-box .ts-service-box-content {
  margin-left: 90px;
}

.ts-service-box .ts-service-box-content h3 {
  font-size: 18px;
  margin-bottom: 15px;
}

.ts-service-box .ts-service-box-info {
  margin-left: 90px;
  margin-bottom: 40px;
}

.service-box-title {
  font-size: 18px;
  margin: 0 0 10px;
}

.service-box-title a {
  color: #333;
}

.service-box-title a:hover {
  color: $color-primary;
}

.service-center-img {
  padding: 0 20px;
}
*/
/* Icon squre */
.ts-service-icon.icon-round i {
  font-size: 24px;
  color: #fff;
  background: #0077ff;
  text-align: center;
  border-radius: 100%;
  width: 60px;
  height: 60px;
  line-height: 60px;
  margin-bottom: 20px;
  position: relative;
  float: none;
}

/* Icon left */
.ts-service-box.icon-left .ts-service-box-icon {
  float: left;
}

.ts-service-box.icon-left .ts-service-box-icon i {
  background: #0077ff;
  color: #fff;
}

.ts-service-box.icon-left .ts-service-box-info {
  margin-left: 90px;
}

.ts-service-box.icon-left .ts-service-box-info h3 {
  margin-top: 0;
  margin-bottom: 5px;
}

/* Service no box */
.service-no {
  font-size: 48px;
  color: #dbdbdb;
  float: left;
  margin-top: 10px;
}

.ts-service-box-content .ts-service-box-info {
  margin-left: 90px;
}

/* Service Image */
.ts-service-image-wrapper {
  margin-bottom: 30px;
}

.ts-service-icon i {
  font-size: 28px;
  margin-right: 15px;
  margin-top: 2px;
}

.ts-service-info {
  margin-left: 30px;
}

.ts-service-info h3 {
  font-size: 16px;
}

.ts-service-info .learn-more {
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
}

.ts-service-info .learn-more:hover {
  color: #0077ff;
}

/* Service Classic */
.ts-service-classic .ts-service-icon i {
  font-size: 24px;
  float: left;
  color: #fff;
  background: #0077ff;
  border-radius: 100%;
  width: 60px;
  height: 60px;
  line-height: 60px;
  text-align: center;
  transition: all 0.3s;
}

.ts-service-classic .ts-service-box-info {
  margin-left: 80px;
}

.ts-service-classic:hover .ts-service-icon i {
  background: #0077ff;
}

/* Projects area
================================================== */
/* Project filter nav */
.shuffle-btn-group {
  display: inline-block;
  margin: 20px 0 50px;
  width: 100%;
  border-bottom: 3px solid #0077ff;
}

.shuffle-btn-group label {
  display: inline-block;
  color: #212121;
  font-size: 14px;
  padding: 6px 25px;
  padding-top: 10px;
  font-weight: 700;
  text-transform: uppercase;
  transition: all 0.3s;
  cursor: pointer;
  margin: 0;
}

.shuffle-btn-group label.active {
  color: #212121;
  background: #0077ff;
}

.shuffle-btn-group label input {
  display: none;
}

/* Project shuffle Item */
.shuffle-item {
  padding: 0;
}

.shuffle-item .project-img-container {
  position: relative;
  overflow: hidden;
}

.shuffle-item .project-img-container img {
  -webkit-transform: perspective(1px) scale3d(1.1, 1.1, 1);
          transform: perspective(1px) scale3d(1.1, 1.1, 1);
  transition: all 400ms;
}

.shuffle-item .project-img-container:hover img {
  -webkit-transform: perspective(1px) scale3d(1.15, 1.15, 1);
          transform: perspective(1px) scale3d(1.15, 1.15, 1);
}

.shuffle-item .project-img-container:after {
  opacity: 0;
  position: absolute;
  content: '';
  top: 0;
  right: auto;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  transition: all 400ms;
}

.shuffle-item .project-img-container:hover:after {
  opacity: 1;
}

.shuffle-item .project-img-container .gallery-popup .gallery-icon {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  padding: 5px 12px;
  background: #0077ff;
  color: #fff;
  opacity: 0;
  -webkit-transform: perspective(1px) scale3d(0, 0, 0);
          transform: perspective(1px) scale3d(0, 0, 0);
  transition: all 400ms;
}

.shuffle-item .project-img-container:hover .gallery-popup .gallery-icon {
  opacity: 1;
  -webkit-transform: perspective(1px) scale3d(1, 1, 1);
          transform: perspective(1px) scale3d(1, 1, 1);
}

.shuffle-item .project-img-container .project-item-info {
  position: absolute;
  top: 50%;
  margin-top: -10%;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 0 30px;
  z-index: 1;
}

.shuffle-item .project-img-container .project-item-info-content {
  opacity: 0;
  -webkit-transform: perspective(1px) translate3d(0, 15px, 0);
          transform: perspective(1px) translate3d(0, 15px, 0);
  transition: all 400ms;
}

.shuffle-item .project-img-container .project-item-info-content .project-item-title {
  font-size: 20px;
}

.shuffle-item .project-img-container .project-item-info-content .project-item-title a {
  color: #fff;
}

.shuffle-item .project-img-container .project-item-info-content .project-item-title a:hover {
  color: #0077ff;
}

.shuffle-item .project-img-container .project-item-info-content .project-cat {
  background: #0077ff;
  display: inline-block;
  padding: 2px 8px;
  font-weight: 700;
  color: #000;
  font-size: 10px;
  text-transform: uppercase;
}

.shuffle-item .project-img-container:hover .project-item-info-content {
  opacity: 1;
  -webkit-transform: perspective(1px) translate3d(0, 0, 0);
          transform: perspective(1px) translate3d(0, 0, 0);
}

.general-btn .btn-primary:hover {
  background: #000;
}

/* Project owl */
.owl-theme.project-slide {
  margin-top: 60px;
}

.project-slide .item {
  position: relative;
  overflow: hidden;
  width: 100%;
}

.project-item img {
  width: 100%;
  max-width: auto;
  transition: all 0.6s ease 0s;
}

.project-item:hover img {
  -webkit-transform: scale(1.1, 1.1);
          transform: scale(1.1, 1.1);
}

.project-item-content {
  position: absolute;
  bottom: -1px;
  padding: 15px 20px;
  width: 100%;
  background: #0077ff;
}

.owl-theme.project-slide .owl-nav > div {
  position: absolute;
  top: -70px;
  right: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.project-slide .owl-nav > div {
  display: inline-block;
  margin: 0 2px;
  font-size: 20px;
  background: #0077ff;
  color: #fff;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
}

.owl-theme.project-slide .owl-nav > .owl-prev {
  right: 35px;
  left: auto;
}

/* Projects Single page */
.project-title {
  font-size: 30px;
}

.project-info-label {
  color: #303030;
  font-weight: 700;
  font-size: 14px;
}

.project-info-content {
  font-size: 12px;
}

.project-info li {
  margin-bottom: 5px;
}

.project-link {
  margin-top: 15px;
}

/* Content area
================================================== */
/* Accordion */
.accordion-group .card {
  border-radius: 0;
  margin-bottom: 10px;
  border-bottom: 1px solid #dfdfdf !important;
}

.accordion-group .card-body {
  padding: 15px 20px;
}

.accordion-group .card-body img {
  max-width: 100px;
  margin-bottom: 10px;
}

.accordion-group .card-header .btn {
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 700;
  padding: 13px 15px;
  padding-bottom: 10px;
}

.accordion-group .card-header .btn:before {
  font-family: "Font Awesome 5 Free";
  position: absolute;
  z-index: 0;
  font-size: 14px;
  right: 16px;
  padding: 3px 8px 1px;
  text-align: center;
  border-radius: 3px;
  top: 12px;
  content: "\f107";
  font-weight: 700;
  background-color: #333;
  color: #fff;
  transition: .3s;
}

.accordion-group .card-header .btn[aria-expanded="true"] {
  color: #0077ff;
}

.accordion-group .card-header .btn[aria-expanded="true"]::before {
  content: "\f106";
  background-color: #0077ff;
}

.accordion-group.accordion-classic .card-header .btn:before {
  display: none;
}

/* Clients */
.clients-logo {
  margin: 0 0 30px;
  border: 1px solid #dadada;
  min-height: 105px;
  padding: 0 30px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-content: center;
}

.clients-logo img {
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
  -webkit-filter: gray;
          filter: gray;
}

/* Testimonial
================================================== */
.testimonial-area {
  padding: 100px 0;
  background-color: #0077ff;
  background-image: url(../images/parallax2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: 50% 50%;
}

.testimonial-area .border-title,
.testimonial-area .border-sub-title {
  color: #fff;
}

.quote-item .quote-text {
  margin: 0 0 10px;
  display: inline-block;
  padding: 0 40px 30px 60px;
  background-color: #fff;
  position: relative;
  font-size: 16px;
  font-style: italic;
}

@media (max-width: 575px) {
  .quote-item .quote-text {
    padding: 0 40px 30px 50px;
  }
}

.quote-item .quote-text:before {
  content: "\f10d";
  font-family: "Font Awesome 5 Free";
  position: absolute;
  font-size: 30px;
  left: 0;
  top: 0;
  font-weight: 700;
  color: #ffc009;
}

.testimonial-slide .slick-dots {
  bottom: -35px;
}

img.testimonial-thumb {
  max-width: 80px;
  float: left;
  margin-right: 20px;
  border-radius: 5px;
}

.quote-item-info {
  padding-top: 15px;
  display: inline-block;
}

.quote-author {
  font-size: 16px;
  line-height: 18px;
  margin: 0 0 2px;
  font-weight: 700;
  display: block;
  color: #0077ff;
}

.quote-item-footer {
  margin-top: 0;
  margin-left: 60px;
}

@media (max-width: 575px) {
  .quote-item-footer {
    margin-left: 0;
  }
}

/* Testimonial Border */
.quote-item.quote-border .quote-text-border {
  border: 1px solid #0077ff;
  padding: 20px;
  position: relative;
  line-height: 28px;
  color: #666;
  font-size: 18px;
  text-align: center;
}

.quote-item.quote-border .quote-text-border:before {
  border: 12px solid;
  border-color: #e1e1e1 transparent transparent;
  border-top-color: #0077ff;
  bottom: -24px;
  position: absolute;
  content: "";
  display: block;
  height: 0;
  width: 0;
  left: 0;
  margin: 0 auto;
  right: 0;
}

.quote-item.quote-border .quote-text-border:after {
  border: 12px solid;
  border-color: #fff transparent transparent;
  bottom: -22px;
  position: absolute;
  content: "";
  display: block;
  height: 0;
  width: 0;
  left: 0;
  margin: 0 auto;
  right: 0;
}

.quote-item.quote-border .quote-item-footer {
  margin-left: 0;
  text-align: center;
  margin-top: 35px;
}

.quote-item.quote-border .quote-item-footer img.testimonial-thumb {
  float: none;
  margin: 0;
}

.quote-item.quote-border .quote-item-footer .quote-item-info {
  display: block;
}

/* Subscribe area
================================================== */
.subscribe {
  background: #0077ff;
  padding: 0;
}

/* Call to action */
.subscribe-call-to-acton {
  min-height: 115px;
  padding: 30px 0 0 30px;
}

@media (max-width: 575px) {
  .subscribe-call-to-acton {
    text-align: center;
    padding: 30px 0;
    min-height: auto;
  }
}

.subscribe-call-to-acton h3 {
  font-size: 18px;
  margin-top: 0;
  margin-bottom: 5px;
}

.subscribe-call-to-acton h4 {
  color: #fff;
  font-size: 24px;
  margin: 0;
}

/* Newsletter */
.ts-newsletter {
  background: #252525;
  position: relative;
  min-height: 115px;
  padding: 15px 0 0 50px;
}

@media (max-width: 767px) {
  .ts-newsletter {
    padding-top: 20px;
    padding-bottom: 10px;
  }
}

@media (max-width: 575px) {
  .ts-newsletter {
    padding: 30px 5px 15px 5px;
    min-height: auto;
    text-align: center;
  }
}

.ts-newsletter:after {
  content: "";
  position: absolute;
  background: #252525;
  display: block;
  width: 100%;
  height: 100%;
  right: -100%;
  top: 0;
}

.newsletter-form input {
  background: none;
  font-size: 12px;
  height: 45px;
  border: 1px solid rgba(255, 255, 255, 0.3);
}

/* News section
================================================== */
.latest-post {
  position: relative;
}

.latest-post .image-angle:before {
  border-bottom: 20px solid #f9f9f9;
}

.latest-post .post-title {
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  font-weight: 600;
}

.latest-post .post-title a {
  color: #303030;
}

.latest-post .post-title a:hover {
  color: #0077ff;
}

.latest-post-meta {
  font-size: 13px;
  text-transform: uppercase;
}

.latest-post .post-body {
  padding: 20px 0 5px;
}

/* Footer
================================================== */
/*- Footer common */
.footer {
  background-color: #0d0d0d;
  color: #999;
}

.footer-main {
  padding: 80px 0 60px;
}

.footer .widget-title {
  font-size: 16px;
  font-weight: 700;
  position: relative;
  margin: 0 0 30px;
  padding-left: 15px;
  text-transform: uppercase;
  color: #fff;
  border-left: 3px solid #0077ff;
}

/* Footer about us */
.footer-logo {
  margin-bottom: 25px;
  max-height: 35px;
}

/* Footer social */
.footer-social {
  margin-top: 15px;
}

.footer-social .widget-title {
  font-size: 14px;
  margin-bottom: 10px;
}

.footer-social ul {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-left: -13px;
}

.footer-social ul li {
  display: inline-block;
}

.footer-social ul li a i {
  display: block;
  font-size: 16px;
  color: #999;
  transition: 400ms;
  padding: 10px 13px;
}

.footer-social ul li:hover {
  color: #fff;
}

/* Links */
.footer-widget ul.list-arrow li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.07);
  padding: 8px 0;
}

.footer-widget ul.list-arrow li:last-child {
  border-bottom: 0;
}

.footer-widget ul.list-arrow li a,
.footer-widget ul.list-arrow li:before {
  color: #747474;
}

.footer-widget ul.list-arrow li:hover a,
.footer-widget ul.list-arrow li:hover {
  color: #0077ff;
}

.working-hours {
  padding-right: 10px;
}

.working-hours .text-right {
  float: right;
}

/*-- Copyright --*/
.copyright {
  background: #0077ff;
  color: #111;
  padding: 25px 0;
  position: relative;
  z-index: 1;
  font-weight: 600;
  font-size: 12px;
}

.footer-menu ul li {
  display: inline-block;
  line-height: 12px;
  padding-left: 15px;
}

.footer-menu ul.nav li a {
  background: none;
  color: #111;
  padding: 0;
}

.footer-menu ul li a:hover {
  color: #fff;
}

#back-to-top {
  right: 40px;
  top: auto;
  z-index: 10;
  display: none;
}

#back-to-top .btn:focus {
  outline: 0;
  box-shadow: none;
}

@media (max-width: 767px) {
  #back-to-top {
    right: 15px;
  }
}

#back-to-top.position-fixed {
  bottom: 20px;
}

#back-to-top .btn.btn-primary {
  width: 36px;
  height: 36px;
  line-height: 36px;
  background: rgba(0, 0, 0, 0.9);
  border-radius: 3px;
  color: #0077ff;
  font-weight: 700;
  font-size: 16px;
  padding: 0;
}

@media (max-width: 767px) {
  #back-to-top .btn.btn-primary {
    width: 32px;
    height: 32px;
    line-height: 32px;
    font-size: 14px;
  }
}

#back-to-top .btn.btn-primary:hover {
  color: #fff;
}

/* Sub Pages
================================================== */
/*-- Title border --*/
.main-container .border-left {
  margin-bottom: 30px;
}

/*-- Banner --*/
.banner-area {
  position: relative;
  min-height: 300px;
  color: #fff;
  background-position: 50% 50%;
  background-size: cover;
}

.banner-title {
  color: #fff;
  text-transform: uppercase;
  font-size: 58px;
  font-weight: 900;
}

@media (max-width: 767px) {
  .banner-title {
    font-size: 48px;
  }
}

@media (max-width: 575px) {
  .banner-title {
    font-size: 32px;
  }
}

.banner-text {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  max-width: 1170px;
  margin: 0 auto;
  width: 100%;
  z-index: 1;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.banner-heading {
  text-align: center;
}

.breadcrumb {
  padding: 0;
  background: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 12px;
}

.breadcrumb li a,
.breadcrumb .breadcrumb-item,
.breadcrumb li a:focus,
.breadcrumb li a:hover {
  color: #fff !important;
}

.breadcrumb .breadcrumb-item + .breadcrumb-item::before {
  color: #fff;
}

/*-- About us page --*/
/* Slider pages */
.page-slider .carousel-control {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background-color: transparent;
  text-shadow: none;
  transition: all .25s ease;
  padding: 0;
  outline: 0;
  border: 0;
}

.page-slider .carousel-control.left {
  left: 0;
}

.page-slider .carousel-control.right {
  right: 0;
}

.page-slider .carousel-control i {
  background: rgba(0, 0, 0, 0.3);
  color: #fff;
  line-height: 70px;
  width: 40px;
  height: 70px;
  font-size: 22px;
  border-radius: 0;
  transition: all 500ms ease;
}

.page-slider .carousel-control i:hover {
  background: #0077ff;
  color: #fff;
}

.page-slider.small-bg .item {
  min-height: 330px;
  background-size: cover;
}

.page-slider.small-bg .box-slider-content {
  left: 20%;
}

.page-slider.small-bg .box-slider-text {
  background: rgba(0, 0, 0, 0.55);
  padding: 5px 20px;
}

.page-slider.small-bg .box-slide-title {
  font-size: 28px;
  color: #fff;
  font-weight: 900;
}

/*-- Get a quote page --*/
.page-quote-form {
  background: #f2f2f2;
  padding: 30px 50px 50px;
}

.get-a-quote-img {
  margin-bottom: -190px;
}

/*-- Partners carousel --*/
.partner-logo {
  border: 1px solid #eee;
  padding: 20px;
  margin-top: 40px;
  margin-bottom: 10px;
}

.partner-logo img {
  transition: 350ms;
  opacity: .6;
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
}

.partner-logo:hover img {
  opacity: 1;
  -webkit-filter: grayscale(0%);
          filter: grayscale(0%);
}

#partners-carousel .partner-logo {
  border: 0;
  border-right: 1px solid #eee;
  padding: 0 15px;
  margin-top: 20px;
}

#partners-carousel .partner-logo.last {
  border-right: 0;
}

/*-- Team page --*/
.team-slide .slick-slide {
  margin-left: 25px;
  padding-bottom: 60px;
}

.team-slide .slick-list {
  margin-left: -25px;
}

.team-slide .carousel-control {
  position: absolute;
  bottom: 0;
  left: 50%;
  border: 0;
  background-color: #ddd;
  height: 37px;
  width: 37px;
  border-radius: 4px;
  transition: .3s;
  z-index: 6;
}

.team-slide .carousel-control:hover {
  background-color: #0077ff;
  color: #fff;
}

.team-slide .carousel-control.left {
  -webkit-transform: translateX(calc(-50% - 25px));
          transform: translateX(calc(-50% - 25px));
}

.team-slide .carousel-control.right {
  -webkit-transform: translateX(calc(-50% + 25px));
          transform: translateX(calc(-50% + 25px));
}

.team-slide .carousel-control.slick-disabled {
  opacity: .4;
}

.team-slide .carousel-control.slick-disabled:hover {
  background-color: #ddd;
  color: #000;
}

.ts-team-wrapper {
  position: relative;
  overflow: hidden;
}

.ts-team-wrapper .ts-team-content {
  position: absolute;
  top: 76%;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 15px 25px;
  margin-top: 0;
  color: #fff;
  background: rgba(0, 0, 0, 0.5);
  transition: 350ms;
}

@media (max-width: 1200px) {
  .ts-team-wrapper .ts-team-content {
    top: 72%;
  }
}

@media (max-width: 575px) {
  .ts-team-wrapper .ts-team-content {
    text-align: center;
  }
}

.ts-team-wrapper .ts-name {
  font-size: 16px;
  margin-top: 0;
  margin-bottom: 3px;
  line-height: normal;
  color: #0077ff;
}

.ts-team-wrapper .ts-designation {
  color: #fff;
  font-size: 14px;
  margin-bottom: 15px;
  font-weight: 700;
}

.ts-team-wrapper .team-social-icons a i {
  color: #fff;
  margin-right: 8px;
  text-align: center;
  transition: 400ms;
}

.ts-team-wrapper .team-social-icons a i:hover {
  color: #0077ff;
}

.ts-team-wrapper:hover .ts-team-content {
  top: 0;
  padding-top: 50px;
}

/* Team Classic */
.ts-team-content-classic {
  margin-top: 15px;
}

.ts-team-content-classic .ts-name {
  font-size: 16px;
  margin-bottom: 5px;
  color: #212121;
}

.ts-team-content-classic .ts-designation {
  color: #888;
  margin-bottom: 5px;
  font-weight: 600;
}

.ts-team-content-classic .team-social-icons a i {
  color: #999;
}

.ts-team-content-classic .team-social-icons a i:hover {
  color: #0077ff;
} 

/*-- Pricing table  --*/
.ts-pricing-box {
  margin: 20px 0;
  padding: 0;
  text-align: center;
  background: #f9f9f9;
}

.ts-pricing-box .ts-pricing-header {
  background: #888888;
  color: #fff;
  position: relative;
  padding: 30px 20px;
}

.ts-pricing-box .ts-pricing-name {
  font-size: 18px;
  line-height: normal;
  margin: 0 0 5px 0;
  color: #fff;
}

.ts-pricing-box .ts-pricing-price {
  font-size: 44px;
  color: #fff;
  margin: 15px 0 0;
  display: inline-block;
}

.ts-pricing-box .ts-pricing-price > small {
  font-size: 16px;
  line-height: 16px;
  display: block;
  margin-top: 15px;
  color: #fff;
}

.ts-pricing-box .ts-pricing-features {
  padding: 15px 0;
}

.ts-pricing-box .ts-pricing-features ul {
  padding: 0 20px;
}

.ts-pricing-box .ts-pricing-features ul > li {
  padding: 20px 0;
  border-top: 1px dotted #e5e5e5;
}

.ts-pricing-box .ts-pricing-features ul > li:first-child {
  border-top: 0;
}

.ts-pricing-box .plan-action {
  padding-bottom: 40px;
}

/* Pricing featured */
.ts-pricing-box.ts-pricing-featured .ts-pricing-header {
  background: #0077ff;
}

/* Contact Us
================================================== */
.map {
  height: 450px;
  z-index: 1;
}

.contact-info-box {
  margin-top: 20px;
}

.contact-info-box i {
  float: left;
  font-size: 24px;
  color: #0077ff;
}

.contact-info-box-content {
  padding-left: 40px;
}

.contact-info-box-content h4 {
  font-size: 16px;
  margin-top: 0;
  line-height: normal;
  font-weight: 700;
}

.contact-info-box-content p {
  margin-bottom: 0;
}

label {
  font-weight: 400;
}

/* Contact page 2 */
.ts-service-box.text-center .ts-service-icon.icon-squre i {
  float: none;
  margin-bottom: 20px;
}

.ts-service-box.text-center .ts-service-box-content {
  margin: 0;
}

/* News Listing
================================================== */
.post {
  border-bottom: 1px solid #dadada;
  padding: 0 0 30px;
  margin: 0 0 45px;
}

.post.last {
  padding-bottom: 0;
  margin-bottom: 0;
  border-bottom: 0;
}

.post-body {
  padding: 20px 0;
}

.entry-header .entry-title {
  font-size: 24px;
  margin: 5px 0 15px;
  position: relative;
  line-height: 34px;
  text-transform: capitalize;
}

.entry-header .entry-title a {
  color: #303030;
}

.entry-header .entry-title a:hover {
  color: #0077ff;
}

.post-single .entry-header .entry-title {
  font-size: 28px;
}

/* Meta */
.post-meta {
  padding-bottom: 10px;
}

.post-meta a {
  color: #303030;
}

.post-meta a:hover {
  color: #0077ff;
}

.post-meta span {
  margin-right: 10px;
  padding-right: 10px;
  border-right: 1px solid #dadada;
  line-height: 12px;
  display: inline-block;
}

.post-meta i {
  color: #bbb;
  margin-right: 3px;
}

.post-meta .post-comment {
  border-right: 0;
}

.post-meta .post-comment .comments-link {
  margin-left: 5px;
}

.post-footer .btn.btn-primary {
  font-size: 12px;
  margin-top: 10px;
}

/* Pagination */
.paging {
  margin-bottom: -5px;
}

.pagination li a {
  border-radius: 0 !important;
  margin-right: 8px;
  color: #7c7c7c;
}

.pagination > .active > a,
.pagination > .active > a:hover,
.pagination > li > a:hover {
  color: #fff;
  background: #0077ff;
  border: 1px solid transparent;
}

/* News Single
================================================== */
.tags-area {
  margin: 20px 0;
}

.post-tags a {
  border: 1px solid #dadada;
  color: #7c7c7c;
  display: inline-block;
  font-size: 12px;
  padding: 3px 10px;
  margin-left: 3px;
}

.post-tags a:hover {
  background: #0077ff;
  color: #fff;
  border: 1px solid transparent;
}

/* Post social */
.post-social-icons > li {
  display: inline-block;
}

.post-social-icons a i {
  margin-left: 5px;
  font-size: 12px;
  width: 28px;
  height: 26px;
  line-height: 26px;
  color: #fff;
  text-align: center;
}

.post-social-icons a i.fa-facebook-f {
  background: #41578a;
}

.post-social-icons a i.fa-twitter {
  background: #64bae2;
}

.post-social-icons a i.fa-google-plus {
  background: #c0343d;
}

.post-social-icons a i.fa-linkedin {
  background: #3397b6;
}

/* Author box */
.author-box {
  border: 1px solid #dadada;
  padding: 20px 20px 15px;
  margin: 20px 0;
}

.author-img img {
  width: 110px;
  height: 110px;
  margin-right: 30px;
}

.author-info h3 {
  margin-top: 0;
  margin-bottom: 5px;
  font-size: 18px;
  font-weight: 600;
}

.author-info h3 span {
  font-size: 12px;
  color: #999;
  border-left: 1px solid #AFAFAF;
  padding-left: 10px;
  margin-left: 10px;
  font-weight: 500;
}

/* Comments area */
.comments-area {
  margin: 40px 0;
}

.comments-list .comment-content {
  margin: 15px 0;
}

.comments-list .comment-reply {
  color: #303030;
  font-weight: 400;
}

.comments-list .comment-reply:hover {
  color: #0077ff;
}

.comments-counter {
  font-size: 18px;
}

.comments-counter a {
  color: #323232;
}

.comments-list {
  list-style: none;
  margin: 0;
  padding: 20px 0;
}

.comments-list .comment {
  border-bottom: 1px solid #e7e7e7;
  padding-bottom: 20px;
  margin-bottom: 30px;
}

.comments-list .comment.last {
  border-bottom: 0;
  padding-bottom: 0;
  margin-bottom: 0;
}

.comments-list img.comment-avatar {
  width: 84px;
  height: 84px;
  margin-right: 30px;
}

@media (max-width: 575px) {
  .comments-list img.comment-avatar {
    width: 40px;
    height: 40px;
    margin-right: 25px;
  }
}

.comments-list .comment-author {
  margin-bottom: 0;
  margin-top: 0;
  font-weight: 600;
  font-size: 16px;
  color: #303030;
}

.comments-list .comment-date {
  color: #959595;
  margin-bottom: 5px;
  font-size: 12px;
}

@media (max-width: 575px) {
  .comments-list .comment-date {
    float: none !important;
    display: inline-block;
  }
}

.comments-reply {
  list-style: none;
  margin: 0 0 0 70px;
}

@media (max-width: 767px) {
  .comments-reply {
    margin: 0;
    padding: 0;
  }
}

.comments-form {
  margin-bottom: 0;
}

.comments-form .title-normal {
  margin-bottom: 20px;
}

.comments-form .btn.btn-primary {
  margin-top: 20px;
}

/* Sidebar
================================================== */
.sidebar .widget-title {
  font-size: 16px;
  font-weight: 700;
  position: relative;
  margin: 0 0 30px;
  padding-left: 15px;
  text-transform: uppercase;
  border-left: 3px solid #0077ff;
}

/* Widget common */
.sidebar .widget {
  margin-bottom: 40px;
}

.sidebar-left .widget {
  margin-right: 20px;
}

.sidebar-right .widget {
  margin-left: 20px;
}

.sidebar .widget.box {
  padding: 25px;
}

.widget.box.solid {
  background: #f2f2f2;
}

.widget.box.red {
  background: #ec483b;
  color: #fff;
}

.widget.box.red .widget-title {
  color: #fff;
}

.widget ul li {
  line-height: 30px;
}

.sidebar .widget ul li a {
  color: #303030;
}

.sidebar .widget ul li a:hover {
  color: #0077ff;
}

.sidebar .widget ul li i {
  margin-right: 5px;
}

.sidebar .btn {
  font-weight: 700;
  font-size: 12px;
  margin-top: 15px;
  padding: 10px 25px;
}

/* Sidebar nav */
.sidebar ul.nav-tabs {
  border: 0;
}

.sidebar ul.nav-tabs li {
  width: 100%;
}

.sidebar ul.nav-tabs li a {
  color: #303030;
  border-radius: 0;
  padding: 15px 0;
  padding-left: 0;
  font-weight: 400;
  border-bottom: 1px solid #ddd;
  display: block;
  transition: 400ms;
}

.sidebar ul.nav-tabs li.active a,
.sidebar ul.nav-tabs li:hover a {
  color: #0077ff;
}

.sidebar ul.nav-tabs li {
  color: #303030;
  line-height: normal;
}

.sidebar ul.nav-tabs li:last-child a {
  border-bottom: 0;
}

/* Service menu */
.sidebar ul.service-menu li {
  width: 100%;
}

.sidebar ul.service-menu li a {
  background-color: #f4f4f4;
  padding: 15px 20px;
  border: 0;
  margin-bottom: 8px;
  position: relative;
  transition: 400ms;
  display: block;
}

.sidebar ul.service-menu li.active a,
.sidebar ul.service-menu li:hover a {
  background: #0077ff;
  color: #fff;
  cursor: pointer;
}

/* Recent News */
.widget.recent-posts .widget-title {
  margin-bottom: 35px;
}

.widget.recent-posts ul li {
  border-bottom: 1px solid #dadada;
  padding-bottom: 15px;
  margin-bottom: 17px;
}

.widget.recent-posts ul li:last-child {
  border: 0;
  padding-bottom: 0;
  margin-bottom: 0;
}

.widget.recent-posts .posts-thumb img {
  margin-right: 15px;
  width: 90px;
  height: 70px;
}

.widget.recent-posts .post-info .entry-title {
  font-size: 13px;
  font-weight: 600;
  line-height: 20px;
  margin: 0;
}

.widget.recent-posts .post-info .entry-title a {
  color: #303030;
  display: inline-block;
}

.widget.recent-posts .post-info .entry-title a:hover {
  color: #0077ff;
}

.widget.recent-posts .post-date {
  font-weight: 400;
  color: #999;
  text-transform: capitalize;
}

/* Widget tags */
.widget-tags ul > li {
  float: left;
  margin: 3px;
}

.sidebar .widget-tags ul > li a {
  border: 1px solid #dadada;
  color: #303030;
  display: block;
  font-size: 14px;
  padding: 3px 15px;
  transition: all 0.3s ease 0s;
}

.sidebar .widget-tags ul > li a:hover {
  background: #0077ff;
  color: #fff;
  border: 1px solid transparent;
}

/* Error page
================================================== */
.error-page .error-code h2 {
  display: block;
  font-size: 200px;
  line-height: 200px;
  color: #303030;
  margin-bottom: 20px;
}

.error-page .error-body .btn {
  margin-top: 30px;
  font-weight: 700;
}

/*# sourceMappingURL=style.css.map */

@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');




</style>