
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <?= $this->Html->css('stylesmain.css') ?>
<?= $this->Html->css('stylesmenu.css') ?>
<?= $this->Html->css('stylesfont.css') ?>


</head>
<body>
<!-- Margin Divs -->
 <div class="leftMarginDiv">  </div>
 <div class="rightMarginDiv">  </div>
 <div class="footer"> <span class="Righteous-Regular_1"> &copy; 2016 by Hapsat Software Solutions </span> </div>
  <!-- Margin Divs -->
   <!-- Begin menu -->
<div class="menu">
<ul class="navmenu">
  <li ><a class="font_8_bold" href="">Home</a></li>
  <li ><a class="font_8_bold" href="">About</a>
   
  </li>
  <li ><a class="font_8_bold" href="">Contact Us</a>
    
  </li>
 
</ul>
</div>


<div class="wrapper"> 
    
<?= $this->fetch('content') ?>
</div>
</body>
</html>
