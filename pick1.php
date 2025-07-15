<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Pick</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="pick2.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  <div id="header"><img src="PickWelcomeHeader.png" width="100%"></div>
  <div id="menu">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
</nav>
</div>
  <div id="LayoutDiv1"><h2 style="padding:0px 5px 0px 5px;">Welcome!</h2><p style="padding:0px 5px 0px 5px;font-size:15px;">A long-standing tradition at Southeastern Louisiana University, The Pick is an annual journal showcasing graduate and undergraduate works. Published by the English Department and the Southeastern Writing Center, The Pick invites submissions of writings year round from students of all disciplines. After an intense review from peers and faculty, the top essays are chosen for publication. For all students wishing to expand and test their writing skills, The Pick can provide the perfect opportunity to compete against peers while building confidence in one’s abilities and developing better writing techniques.</p>
 </div>
  <div id="LayoutDiv2"><img src="seluentrance.jpg" width="100%"></div>
  <div id="LayoutDiv3"><center><p style="padding:3px 0px 3px 0px; font-family:garamond; font-size:24px;">Where Do We Find Our Inspiration?</p></center></div>
  <div id="LayoutDiv4"><center><p style="padding:3px 0px 3px 0px; font-family:garamond; font-size:24px;">Where</p></center><center><p style="padding:3px 0px 3px 0px; font-family:garamond; font-size:18px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></center><center><p style="font-family:garamond; font-size:24px;">Where's Your Inspiriation?</p></center></div>
  <div id="footer"><center><img src="slogo.png">&nbsp;&nbsp;&nbsp;Home|Archive|Resources|Submissions
  </center></div>
</div>
</body>
</html>
