
<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
  echo "<script>
        window.location.href = 'https://m.aprend.com.br/'
    </script>";
} else {
    echo "";
}
?>
<?php
    $course = $_GET['course'];
    if($course == ''){
?>
<?php
    $q = $_GET['q'];
    $category = $_GET['category'];
    $sub_category = $_GET['sub_category'];
    if(($q != '') AND ($category == '') AND ($sub_category == '')){
?>
<!doctype html>
<html lang="pt-br">
<head>
  <title>Aprend - <?php $q = $_GET['q']; echo $q;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icone.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>

<style>

 body{
  overflow-x: hidden;
}
.carousel-wrap {
    margin-top: 30px;
    margin-left:0px;
    padding: 5px;
    width: 80%;
    position: relative;
}
.owl-carousel .item {
    position: relative;
    z-index: 100;
    -webkit-backface-visibility: hidden;
}
.owl-nav > div {
    margin-top: -26px;
    position: absolute;
    top: 50%;
    color: #cdcbcd;
}
.owl-nav i {
    font-size: 52px;
}
.owl-nav .owl-prev {
    left: -30px;
}
.owl-nav .owl-next {
    right: -30px;
}
.session_1 {
    max-width: 1200px;
    width: 90%;
}
.name_category {
    float: left;
    color:#000;
    text-decoration:none;
    margin-top:0px;
    margin-left:10px;
}
.details_slide {
    margin-top: -350px;
    position: absolute;
    float: left;
    max-width: 600px;
    width: 100%;
    font-weight: 700;
    color: #fff;
}
.details_slide_h2 {
    font-size: 60px;
}
.details_slide_p {
    font-size: 20px;
}
.button_pass_carrousel {
    color: #5b143e;
}
.button_pass_carrousel:hover {
    color: #5b143e;
}
.fa-angle-right {
    margin-top: -12px;
    margin-left: 5px;
    font-size:10px;
}
.fa-angle-left {
    margin-top: -12px;
    margin-left: -5px;
    font-size:10px;
}
.card_item {
    background: #fff;
    -webkit-box-shadow: 3px 1px 18px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 3px 1px 18px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
}
.item {
    padding-top: 15px;
    padding-bottom: 20px;
    padding-left: 2px;
    padding-right: 2px;
    cursor: pointer;
}
.responsive_image_course {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}
.button_pay {
    padding: 10px;
    border-radius: 50px;
    background: #5b143e;
    color: #fff;
    border: none;
    width: 90%;
    font-weight: 700;
}
.button_pay:hover {
    background: #5b143e;
    cursor:pointer;
}
.price_card {
    font-weight: 700;
    font-size: 15px;
    margin-top: -5px;
}
.text_card {
        font-weight: 700;
    font-size: 12px;
    margin-top: 5px;
      white-space: nowrap; 
  width: 90%; 
  overflow: hidden;
  text-overflow: ellipsis; 
}
.dropdown-menu {
    border-radius: 5px;
    font-size: 17px;
    width: 250px;
}
.fa-caret-right {
    color: #ff5454;
    float: right;
}

.header-root {
  background: #fff;
  color: #666;
  width:100%;
}

.navbar {
  display: flex;
  justify-content: space-between;
}

.logo {
  color: white;
  font-family: Roboto Condensed;
  font-size: 1.3rem;
  font-weight: 600;
  letter-spacing: -0.04rem;
  padding: 5px;
}

.search {
  position: relative;
  max-width: 900px;
  width:100%;
  margin-top:5px;
}

.search-form {
  width: -webkit-fill-available;
  padding: 10px 20px;
  border-radius: 50px;
  border:none;
  background: #fff;
  -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
  color: #5b143e;
  margin-right: 20px;
  height:30px;
}

.search-icon {
  font-size: 20px;
  line-height: 24px;
  width: 24px;
  height: 24px;
  border: 0;
  position: absolute;
  top: 20px;
  right: 40px;
  transform: translateY(-50%);
  outline: 0;
  cursor: pointer;
  background: #fff;
}

.mobile-search {
  display: none;
  height: 60px;
}

.show-mobile-search {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.go-back-icon {
  position: relative;
  color: #5b143e;
  font-weight: 400;
  cursor: pointer;
  font-size:25px;
  margin-left:0px;
}

.tooltip {
  position: absolute;
  top: 70px;
  font-size: 14px;
  background: rgba(255,255,255,0.15);
  padding: 7px;
  border-radius: 2px;
  opacity: 0;
  transition: opacity 250ms ease-in;
}
.fa-search{
  color: #5b143e;
}
.go-back-icon {
  &:hover {
    .tooltip {
      opacity: 1;
    }
  }
}

@media (min-width: 601px) {
  .hide-on-large {
    display: none;
  }
  
  .mobile-search {
    display: none;
  }
}


@media (max-width: 600px) {
  .hide {
    display: none;
  }
}
*:focus {
    outline: none;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.slideResponsive{
  max-width:1800px;
  width:100%;
}
.footer{
  border-top: 0.5px solid #c4c4c4;
  background: #fff;
  color:#fff;
  width:90%;
  margin-bottom:-20px;
  max-width:900px;
  padding:10px;
}
.text_footer{
  color:#000;
  font-size:13px;
  text-align:center;
}
.form_search{
  max-width:1400px;
  width:100%;
  margin-left:5%;
}
.card_ahref{
    color:#000;
    text-decoration:none;
}


::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #5b143e;
}
::-webkit-scrollbar-thumb:hover {
    background: #9c3270;
}

/* Category red */
.category{
  padding: 10px;
  position: relative;
  background: #fff;
  color:#5b143e;
}

/* highlight category items on hover */
.category:hover {
  color:#5b143e;
}

/* float and size li's */
#nav li {
  float: left;
  line-height: 50px;
  margin-top:-1px;
  border: 1px solid white;
}

/* default off */
ul,
li {
  margin: 0;
  padding: 0;
  list-style: none;
  color: #5b143e;
}

/* hover effect */
li:hover{
  color:#5b143e;
  cursor:pointer;
}


/* hide dropdowns */
.dropdown {
  display: none;
  position: absolute;
  border-radius:10px;
  padding:2px;
  border: none;
  background: #fff;
  -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
width:250px;
font-size:14px;
z-index:999;
text-align:left;
}


.category:hover>.dropdown{
  display: block;
}

/* #nav ul li > ul > li */
.dropdown li{
  position: relative;
  background: #fff;
  border-radius:10px;
   width:100%;
  
}
.dropdown li a {
  margin-left: 0px;
  padding: 10px;
  border-radius:10px;
  background: transparent;
  width:100%;
}
.dropdown li.subcategory-item a {
  margin-left: 0px;
  padding: 10px;
  background: #fff;
  color: #5b143e;
}

.dropdown-subcategory{
  white-space:nowrap;
}

/* #nav ul li > ul > li > ul */
 .dropdown-subcategory .dropdown{
  display: none;
  position: absolute;
  top:0%;
  left:50%;;
  background: #fff;    
  text-align: center;
  border-radius:10px;
    -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
}

.dropdown-subcategory .subcategory-item a{
  background: #fff;
  border-radius:10px;
}

.dropdown li:hover ul {
  display: block;
  margin-left:120px;
}
.subcategory-item a:hover{
    color:#5b143e;
}
.a_href_menu{
      color: #5b143e;
    text-decoration:none;
}
.a_href_menu:hover{
    color:#5b143e;
}
.category_ahref{
    text-decoration:none;
     color: #5b143e;
     margin-top:20px;
}
.searchBox{
    max-width:650px;
    width:90%;
        -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
border-radius:50px;
padding:10px;
border:none;
}
.fodastico_salvador{
    margin-top:-40px;
}
.text_canto{
   float: right;
    text-decoration:none;
    margin-top:30px;
    margin-right:120px;
}
.text_canto2{
   float: right;
    text-decoration:none;
    margin-top:30px;
    margin-right:10px;
}

</style>
</head>
<body style="overflow-x: hidden;width:100%;">
  <header class="header-root">
  <div class="container">
    <nav class="navbar">
      <a href="https://aprend.com.br/"><div class="logo"><img src="../images/logo.png" width="100"></div></a>
        <div id="nav">
  <ul>
    <li class="category">
      Categorias
      <ul class="dropdown">
        <?php
        include_once("../config.php");
        $sql = "SELECT DISTINCT category FROM products";
        $result = $conn->query($sql,$firstname);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
        <li class="dropdown-subcategory">
            <a href="../buscar/?category=<?php echo $row["category"];?>" class="a_href_menu"><?php echo $row["category"];?> <i class="fa fa-angle-right"></i></a>
            <ul class="dropdown">                        
        <?php 
        $Category = $row["category"]; 
        define($Category); 
        ?>
        <?php
        include_once("../config.php");
        $sql2 = "SELECT DISTINCT sub_category FROM products WHERE category = '$Category'";
        $result2 = $conn->query($sql2,$firstname);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
        ?>
            <li class="subcategory-item"><a href="../buscar/?category=<?php echo $row["category"];?>&sub_category=<?php echo $row2["sub_category"];?>" class="a_href_menu"><?php echo $row2["sub_category"];?> <i class="fa fa-angle-right"></i></a></li>
        
        <?php
            }
        } else {
            echo 'Nenhuma Sub-Categoria Cadastra :(';
        }
        ?>
            </ul>
        </li>
        <?php
           }
        } else {
           echo 'Nenhuma Categoria Cadastrada :(';
        }
        ?> 
 
      </ul>
    </li>
  </ul>
</div>
      <form method="GET" action="../r/" class="form_search">
        <div class="search">
          <button class="search-icon large-search-icon hide"><i class="fa fa-search"></i></button>
          <input class="search-form hide" type="text" name="q" placeholder="Buscar por Cursos..." autocomplete="off" value="<?php $q = $_GET['q']; echo $q;?>">
          <button type="button" class="search-icon mobile-search-icon hide-on-large"><i class="fa fa-search"></i></button>
        </div>
      </form>
      </nav>
      <div class="mobile-search">
        <div class="go-back-icon"><i class="fa fa-arrow-left"></i> <div class="tooltip"></div></div>
      </div>
  </div>
</header>


<center>
<?php
error_reporting(E_ERROR | E_PARSE);
include_once("../config.php");
    $sql = "SELECT DISTINCT category FROM products ORDER BY category ASC";
    $result = $conn->query($sql,$firstname);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
?>
<?php 
    $Category = $row["category"]; 
    define($Category); 
              echo "<a href='../buscar/?category=$Category' class='name_category' style='display:"?><?php
            include_once("../config.php");
            $q = $_GET['q'];
            $sql2 = "SELECT * FROM products WHERE (product_name like '%$q%' OR category like '%$q%' OR (sub_category like '%$q%' OR idioma like '%$q%' OR (criador like '%$q%' OR tags like '%$q%'))) AND category = '$Category'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>
            <?php echo "block;";?>
          <?php
              }
            } else {
                echo 'none;';
            }
          ?>;<?php echo "'><h2><b>$Category</b></h2></a><a href='https://api.whatsapp.com/send?text=https%3A%2F%2Faprend.com.br%2Fbuscar%2F%3Fcategory%3D"?><?php
    $string = $Category;
    echo $string;
?><?php echo "' class='text_canto'  style='display:"?><?php
            include_once("../config.php");
            $q = $_GET['q'];
            $sql2 = "SELECT * FROM products WHERE (product_name like '%$q%' OR category like '%$q%' OR (sub_category like '%$q%' OR idioma like '%$q%' OR (criador like '%$q%' OR tags like '%$q%'))) AND category = '$Category'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>
            <?php echo "block;";?>
          <?php
              }
            } else {
                echo 'none;';
            }
          ?>;<?php echo "'><b><i class='fa fa-share'></i> Compartilhar</b></a><a href='https://aprend.com.br/buscar/?category=$Category' class='text_canto2'  style='display:"?><?php
            include_once("../config.php");
            $q = $_GET['q'];
            $sql2 = "SELECT * FROM products WHERE (product_name like '%$q%' OR category like '%$q%' OR (sub_category like '%$q%' OR idioma like '%$q%' OR (criador like '%$q%' OR tags like '%$q%'))) AND category = '$Category'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>
            <?php echo "block;";?>
          <?php
              }
            } else {
                echo 'none;';
            }
          ?>;<?php echo "'><b><i class='fa fa-eye'></i> Ver Tudo</b></a><br/><br/>"; 
          ?>
          <div class="carousel-wrap" style="display:<?php
            include_once("../config.php");
            $q = $_GET['q'];
            $sql2 = "SELECT * FROM products WHERE (product_name like '%$q%' OR category like '%$q%' OR (sub_category like '%$q%' OR idioma like '%$q%' OR (criador like '%$q%' OR tags like '%$q%'))) AND category = '$Category'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>
            <?php echo "block;";?>
          <?php
              }
            } else {
                echo 'none;';
            }
          ?>;">
            <div class="owl-carousel">
          <?php
            include_once("../config.php");
            $q = $_GET['q'];
            $sql2 = "SELECT * FROM products WHERE (product_name like '%$q%' OR category like '%$q%' OR (sub_category like '%$q%' OR idioma like '%$q%' OR (criador like '%$q%' OR tags like '%$q%'))) AND category = '$Category'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>

              <div class="item"> 
                <a href="../?course=<?php echo $row2["id"]; ?>" class="card_ahref">
                  <div class="card_item">
                    <img src="../image.php?image=https://aprend.com.br/curso/images/<?php echo $row2["product_image"];?>&width=220&height=220" class="responsive_image_course">
                    <p class="text_card"><?php echo $row2["product_name"];?></p>
                    <p class="price_card">R$ <?php echo $row2["product_price"];?></p>
                    <a href="<?php echo $row2["linkHotmart"];?>"><button class="button_pay">Saiba Mais</button></a><br/><br/>
                  </div>
                </a>
              </div>

          <?php
              }
            } else {
                echo 'Nenhum Curso Cadastrado Nessa Categoria :(';
            }
          ?>
             </div>
            </div>
<?php
 }
}

?>


<footer class="footer">
  <img src="../images/logo.png" width="100">
  <p class="text_footer">Esse site ?? um cat??logo de cursos de terceiros que n??o s??o hospedados nessa plataforma.<br>
  <a href="footer/termos.pdf">Termos de Uso</a> | <a href="footer/politica.pdf">Pol??tica de Privacidade</a> | <a href="https://m.me/aprendbr">Contate-Nos</a>
</footer>
</center>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script type="text/javascript">
$(".owl-carousel").owlCarousel({
    loop: !1,
    margin: 10,
    nav: !0,
    navText: ["<div class='button_pass_carrousel'><i class='fa fa-angle-left'></i></div>", "<div class='button_pass_carrousel'><i class='fa fa-angle-right'></i></div>"],
    autoplay: false,
    autoplayHoverPause: !0,
    responsive: { 0: { items: 2 }, 600: { items: 3 }, 1000: { items: 6 } },
});
</script>
<script>
$(document).ready(function(){
 
 var limit = <?php
                            include_once("config.php");
                            $sql = "SELECT COUNT(DISTINCT category) AS NumberCategorys FROM products";
                            $result = $conn->query($sql,$firstname);
                                if ($row = $result->fetch_assoc()) {
                                        echo ''.$row["NumberCategorys"].'';
                                    }
                                else {
                                    echo '0';
                                }
                        ?>;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"search1.php?q=<?php $q = $_GET['q']; echo $q;?>",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_products').append(data);
    if(data == '')
    {
     $('#load_data_products').html("");
     action = 'active';
    }
    else
    {
     $('#load_data_products').html("");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'inactive';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_products").height() && action == 'inactive')
  {
   action = 'inactive';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 99999999);
  }
 });
 
});
</script>
<script type="text/javascript">
  window.addEventListener("load", function() {
  const searchIcon = document.querySelector(".large-search-icon");
  const mobileSearchIcon = document.querySelector(".mobile-search-icon");
  const mobileSearch = document.querySelector(".mobile-search");
  const navbar = document.querySelector(".navbar");
  const goBack = document.querySelector(".go-back-icon");


  mobileSearchIcon.addEventListener("click", () => {
    mobileSearch.classList.toggle("show-mobile-search");

    if(mobileSearch.classList.contains("show-mobile-search")) {
      navbar.classList.add("hide");
    } else {
      navbar.classList.remove("hide");
    }
  });

  goBack.addEventListener("click", () => {
    if(mobileSearch.classList.contains("show-mobile-search")) {
      mobileSearch.classList.remove("show-mobile-search");
      navbar.classList.remove("hide");
    } 
  });

});
</script>
</body>
</html>
<?php       
    } if(($q == '') AND ($category != '') AND ($sub_category == '')){
?>

 <!doctype html>
<html lang="pt-br">
<head>
  <title>Aprend - CATEGORIAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icone.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>

<style>

 body{
  overflow-x: hidden;
}
.carousel-wrap {
    margin-top: 30px;
    margin-left:0px;
    padding: 5px;
    width: 80%;
    position: relative;
}
.owl-carousel .item {
    position: relative;
    z-index: 100;
    -webkit-backface-visibility: hidden;
}
.owl-nav > div {
    margin-top: -26px;
    position: absolute;
    top: 50%;
    color: #cdcbcd;
}
.owl-nav i {
    font-size: 52px;
}
.owl-nav .owl-prev {
    left: -30px;
}
.owl-nav .owl-next {
    right: -30px;
}
.session_1 {
    max-width: 1200px;
    width: 90%;
}
.name_category {
    float: left;
    color:#000;
    text-decoration:none;
    margin-top:0px;
    margin-left:10px;
}
.details_slide {
    margin-top: -350px;
    position: absolute;
    float: left;
    max-width: 600px;
    width: 100%;
    font-weight: 700;
    color: #fff;
}
.details_slide_h2 {
    font-size: 60px;
}
.details_slide_p {
    font-size: 20px;
}
.button_pass_carrousel {
    color: #5b143e;
}
.button_pass_carrousel:hover {
    color: #5b143e;
}
.fa-angle-right {
    margin-top: -12px;
    margin-left: 5px;
    font-size:10px;
}
.fa-angle-left {
    margin-top: -12px;
    margin-left: -5px;
    font-size:10px;
}
.card_item {
    background: #fff;
    -webkit-box-shadow: 3px 1px 18px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 3px 1px 18px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
}
.item {
    padding-top: 15px;
    padding-bottom: 20px;
    padding-left: 2px;
    padding-right: 2px;
    cursor: pointer;
}
.responsive_image_course {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}
.button_pay {
    padding: 10px;
    border-radius: 50px;
    background: #5b143e;
    color: #fff;
    border: none;
    width: 90%;
    font-weight: 700;
}
.button_pay:hover {
    background: #5b143e;
    cursor:pointer;
}
.price_card {
    font-weight: 700;
    font-size: 15px;
    margin-top: -5px;
}
.text_card {
        font-weight: 700;
    font-size: 12px;
    margin-top: 5px;
      white-space: nowrap; 
  width: 90%; 
  overflow: hidden;
  text-overflow: ellipsis; 
}
.dropdown-menu {
    border-radius: 5px;
    font-size: 17px;
    width: 250px;
}
.fa-caret-right {
    color: #ff5454;
    float: right;
}

.header-root {
  background: #fff;
  color: #666;
  width:100%;
}

.navbar {
  display: flex;
  justify-content: space-between;
}

.logo {
  color: white;
  font-family: Roboto Condensed;
  font-size: 1.3rem;
  font-weight: 600;
  letter-spacing: -0.04rem;
  padding: 5px;
}

.search {
  position: relative;
  max-width: 900px;
  width:100%;
  margin-top:5px;
}

.search-form {
  width: -webkit-fill-available;
  padding: 10px 20px;
  border-radius: 50px;
  border:none;
  background: #fff;
  -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
  color: #5b143e;
  margin-right: 20px;
  height:30px;
}

.search-icon {
  font-size: 20px;
  line-height: 24px;
  width: 24px;
  height: 24px;
  border: 0;
  position: absolute;
  top: 20px;
  right: 40px;
  transform: translateY(-50%);
  outline: 0;
  cursor: pointer;
  background: #fff;
}

.mobile-search {
  display: none;
  height: 60px;
}

.show-mobile-search {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.go-back-icon {
  position: relative;
  color: #5b143e;
  font-weight: 400;
  cursor: pointer;
  font-size:25px;
  margin-left:0px;
}

.tooltip {
  position: absolute;
  top: 70px;
  font-size: 14px;
  background: rgba(255,255,255,0.15);
  padding: 7px;
  border-radius: 2px;
  opacity: 0;
  transition: opacity 250ms ease-in;
}
.fa-search{
  color: #5b143e;
}
.go-back-icon {
  &:hover {
    .tooltip {
      opacity: 1;
    }
  }
}

@media (min-width: 601px) {
  .hide-on-large {
    display: none;
  }
  
  .mobile-search {
    display: none;
  }
}


@media (max-width: 600px) {
  .hide {
    display: none;
  }
}
*:focus {
    outline: none;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.slideResponsive{
  max-width:1800px;
  width:100%;
}
.footer{
  border-top: 0.5px solid #c4c4c4;
  background: #fff;
  color:#fff;
  width:90%;
  margin-bottom:-20px;
  max-width:900px;
  padding:10px;
}
.text_footer{
  color:#000;
  font-size:13px;
  text-align:center;
}
.form_search{
  max-width:1400px;
  width:100%;
  margin-left:5%;
}
.card_ahref{
    color:#000;
    text-decoration:none;
}


::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #5b143e;
}
::-webkit-scrollbar-thumb:hover {
    background: #9c3270;
}

/* Category red */
.category{
  padding: 10px;
  position: relative;
  background: #fff;
  color:#5b143e;
}

/* highlight category items on hover */
.category:hover {
  color:#5b143e;
}

/* float and size li's */
#nav li {
  float: left;
  line-height: 50px;
  margin-top:-1px;
  border: 1px solid white;
}

/* default off */
ul,
li {
  margin: 0;
  padding: 0;
  list-style: none;
  color: #5b143e;
}

/* hover effect */
li:hover{
  color:#5b143e;
  cursor:pointer;
}


/* hide dropdowns */
.dropdown {
  display: none;
  position: absolute;
  border-radius:10px;
  padding:2px;
  border: none;
  background: #fff;
  -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
width:250px;
font-size:14px;
z-index:999;
text-align:left;
}


.category:hover>.dropdown{
  display: block;
}

/* #nav ul li > ul > li */
.dropdown li{
  position: relative;
  background: #fff;
  border-radius:10px;
   width:100%;
  
}
.dropdown li a {
  margin-left: 0px;
  padding: 10px;
  border-radius:10px;
  background: transparent;
  width:100%;
}
.dropdown li.subcategory-item a {
  margin-left: 0px;
  padding: 10px;
  background: #fff;
  color: #5b143e;
}

.dropdown-subcategory{
  white-space:nowrap;
}

/* #nav ul li > ul > li > ul */
 .dropdown-subcategory .dropdown{
  display: none;
  position: absolute;
  top:0%;
  left:50%;;
  background: #fff;    
  text-align: center;
  border-radius:10px;
    -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
}

.dropdown-subcategory .subcategory-item a{
  background: #fff;
  border-radius:10px;
}

.dropdown li:hover ul {
  display: block;
  margin-left:120px;
}
.subcategory-item a:hover{
    color:#5b143e;
}
.a_href_menu{
      color: #5b143e;
    text-decoration:none;
}
.a_href_menu:hover{
    color:#5b143e;
}
.category_ahref{
    text-decoration:none;
     color: #5b143e;
     margin-top:20px;
}
.searchBox{
    max-width:650px;
    width:90%;
        -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
border-radius:50px;
padding:10px;
border:none;
}
.fodastico_salvador{
    margin-top:-40px;
}
.text_canto{
   float: right;
    text-decoration:none;
    margin-top:30px;
    margin-right:120px;
}
.text_canto2{
   float: right;
    text-decoration:none;
    margin-top:30px;
    margin-right:10px;
}

</style>
</head>
<body style="overflow-x: hidden;width:100%;">
<div id="loader"></div>
<div id="myDiv">
  <header class="header-root">
  <div class="container">
    <nav class="navbar">
      <a href="https://aprend.com.br/"><div class="logo"><img src="https://aprend.com.br//images/logo.png" width="100"></div></a>
        <div id="nav">
  <ul>
    <li class="category">
      Categorias
      <ul class="dropdown">
        <?php
        include_once("../config.php");
        $sql = "SELECT DISTINCT category FROM products";
        $result = $conn->query($sql,$firstname);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
        <li class="dropdown-subcategory">
            <a href="../buscar/?category=<?php echo $row["category"];?>" class="a_href_menu"><?php echo $row["category"];?> <i class="fa fa-angle-right"></i></a>
            <ul class="dropdown">                        
        <?php 
        $Category = $row["category"]; 
        define($Category); 
        ?>
        <?php
        include_once("../config.php");
        $sql2 = "SELECT DISTINCT sub_category FROM products WHERE category = '$Category'";
        $result2 = $conn->query($sql2,$firstname);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
        ?>
            <li class="subcategory-item"><a href="../buscar/?category=<?php echo $row["category"];?>&sub_category=<?php echo $row2["sub_category"];?>" class="a_href_menu"><?php echo $row2["sub_category"];?> <i class="fa fa-angle-right"></i></a></li>
        
        <?php
            }
        } else {
            echo 'Nenhuma Sub-Categoria Cadastra :(';
        }
        ?>
            </ul>
        </li>
        <?php
           }
        } else {
           echo 'Nenhuma Categoria Cadastrada :(';
        }
        ?> 
 
      </ul>
    </li>
  </ul>
</div>
      <form method="GET" action="../r/" class="form_search">
        <div class="search">
          <button class="search-icon large-search-icon hide"><i class="fa fa-search"></i></button>
          <input class="search-form hide" type="text" name="q" placeholder="Buscar por Cursos..." autocomplete="off" value="<?php $i = $_GET['i']; echo $i;?>">
          <button type="button" class="search-icon mobile-search-icon hide-on-large"><i class="fa fa-search"></i></button>
        </div>
      </form>
      </nav>
      <div class="mobile-search">
        <div class="go-back-icon"><i class="fa fa-arrow-left"></i> <div class="tooltip"></div></div>
      </div>
  </div>
</header>
<center>
<?php
error_reporting(E_ERROR | E_PARSE);
include_once("../config.php");
    $sql = "SELECT DISTINCT category,sub_category FROM products ORDER BY sub_category ASC";
    $result = $conn->query($sql,$firstname);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
?>


<?php
    include_once("../config.php");
    $category = $_GET['category'];
    $sql = "SELECT DISTINCT sub_category,category FROM products WHERE category='$category'";
    $result = $conn->query($sql,$firstname);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
?>

<a href='../buscar/?category=<?php echo $row["category"];?>&sub_category=<?php echo $row["sub_category"];?>' class='name_category'><h2><b><?php echo $row["sub_category"];?></b></h2></a><a href='https://api.whatsapp.com/send?text=https%3A%2F%2Faprend.com.br%2Fbuscar%2F%3Fcategory%3D<?php
    $string = $row["category"];
    echo $string;
?>%26sub_category%3D<?php
    $string = $row["sub_category"];
    echo $string;
?>' class='text_canto'><b><i class='fa fa-share'></i> Compartilhar</b></a><a href='https://aprend.com.br/buscar/?category=<?php echo $row["category"];?>&sub_category=<?php echo $row["sub_category"];?>' class='text_canto2'><b><i class='fa fa-eye'></i> Ver Tudo</b></a><br/><br/>
<div class="carousel-wrap">
  <div class="owl-carousel">  
    
    <?php
        include_once("../config.php");
        $SubCategory = $row["sub_category"];
        $sql2 = "SELECT * FROM products WHERE sub_category = '$SubCategory'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>
            <div class="item"> 
                <a href="../p/?course=<?php echo $row2["id"]; ?>" class="card_ahref">
                  <div class="card_item">
                    <img src="https://aprend.com.br/image.php?image=https://aprend.com.br/curso/images/<?php echo $row2["product_image"];?>&width=220&height=220" class="responsive_image_course">
                    <p class="text_card"><?php echo $row2["product_name"];?></p>
                    <p class="price_card">R$ <?php echo $row2["product_price"];?></p>
                    <a href="../p/?course=<?php echo $row2["id"]; ?>"><button class="button_pay">Saiba Mais</button></a><br/><br/>
                  </div>
                </a>
            </div>
          <?php
              }
            } else {
                echo 'Nenhum Curso Cadastrado Nessa Categoria :(';
            }
          ?>
    
    
  </div>        
</div>


<?php
            }
        } else {
            $category = $_GET['category'];
            echo "<script>
                    window.location.href = 'https://aprend.com.br/r/?q=$category'
                </script>";
        }
?>


<?php
 }
}

?>



<footer class="footer">
  <img src="../images/logo.png" width="100">
  <p class="text_footer">Esse site ?? um cat??logo de cursos de terceiros que n??o s??o hospedados nessa plataforma.<br>
  <a href="footer/termos.pdf">Termos de Uso</a> | <a href="footer/politica.pdf">Pol??tica de Privacidade</a> | <a href="https://m.me/aprendbr">Contate-Nos</a>
</footer>
</center>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script type="text/javascript">
$(".owl-carousel").owlCarousel({
    loop: !1,
    margin: 10,
    nav: !0,
    navText: ["<div class='button_pass_carrousel'><i class='fa fa-angle-left'></i></div>", "<div class='button_pass_carrousel'><i class='fa fa-angle-right'></i></div>"],
    autoplay: false,
    autoplayHoverPause: !0,
    responsive: { 0: { items: 2 }, 600: { items: 3 }, 1000: { items: 6 } },
});
</script>
<script>
$(document).ready(function(){
 
 var limit = <?php
                            include_once("config.php");
                            $sql = "SELECT COUNT(DISTINCT category) AS NumberCategorys FROM products";
                            $result = $conn->query($sql,$firstname);
                                if ($row = $result->fetch_assoc()) {
                                        echo ''.$row["NumberCategorys"].'';
                                    }
                                else {
                                    echo '0';
                                }
                        ?>;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"1.php?category=<?php $category = $_GET['category']; echo $category;?>",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_products').append(data);
    if(data == '')
    {
     $('#load_data_products').html("");
     action = 'active';
    }
    else
    {
     $('#load_data_products').html("");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'inactive';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_products").height() && action == 'inactive')
  {
   action = 'inactive';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 99999999);
  }
 });
 
});
</script>
<script type="text/javascript">
  window.addEventListener("load", function() {
  const searchIcon = document.querySelector(".large-search-icon");
  const mobileSearchIcon = document.querySelector(".mobile-search-icon");
  const mobileSearch = document.querySelector(".mobile-search");
  const navbar = document.querySelector(".navbar");
  const goBack = document.querySelector(".go-back-icon");


  mobileSearchIcon.addEventListener("click", () => {
    mobileSearch.classList.toggle("show-mobile-search");

    if(mobileSearch.classList.contains("show-mobile-search")) {
      navbar.classList.add("hide");
    } else {
      navbar.classList.remove("hide");
    }
  });

  goBack.addEventListener("click", () => {
    if(mobileSearch.classList.contains("show-mobile-search")) {
      mobileSearch.classList.remove("show-mobile-search");
      navbar.classList.remove("hide");
    } 
  });

});
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>


<?php       
    } if(($q == '') AND ($category != '') AND ($sub_category != '')){
?>
    <!doctype html>
<html lang="pt-br">
<head>
  <title>Aprend - SUB CATEGORIAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icone.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>

<style>

 body{
  overflow-x: hidden;
}
.carousel-wrap {
    margin-top: 30px;
    margin-left:0px;
    padding: 5px;
    width: 80%;
    position: relative;
}
.owl-carousel .item {
    position: relative;
    z-index: 100;
    -webkit-backface-visibility: hidden;
}
.owl-nav > div {
    margin-top: -26px;
    position: absolute;
    top: 50%;
    color: #cdcbcd;
}
.owl-nav i {
    font-size: 52px;
}
.owl-nav .owl-prev {
    left: -30px;
}
.owl-nav .owl-next {
    right: -30px;
}
.session_1 {
    max-width: 1200px;
    width: 90%;
}
.name_category {
    float: left;
    color:#000;
    text-decoration:none;
    margin-top:0px;
    margin-left:10px;
}
.details_slide {
    margin-top: -350px;
    position: absolute;
    float: left;
    max-width: 600px;
    width: 100%;
    font-weight: 700;
    color: #fff;
}
.details_slide_h2 {
    font-size: 60px;
}
.details_slide_p {
    font-size: 20px;
}
.button_pass_carrousel {
    color: #5b143e;
}
.button_pass_carrousel:hover {
    color: #5b143e;
}
.fa-angle-right {
    margin-top: -12px;
    margin-left: 5px;
    font-size:10px;
}
.fa-angle-left {
    margin-top: -12px;
    margin-left: -5px;
    font-size:10px;
}
.card_item {
    background: #fff;
    -webkit-box-shadow: 3px 1px 18px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 3px 1px 18px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
}
.item {
    padding-top: 15px;
    padding-bottom: 20px;
    padding-left: 2px;
    padding-right: 2px;
    cursor: pointer;
}
.responsive_image_course {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}
.button_pay {
    padding: 10px;
    border-radius: 50px;
    background: #5b143e;
    color: #fff;
    border: none;
    width: 90%;
    font-weight: 700;
}
.button_pay:hover {
    background: #5b143e;
    cursor:pointer;
}
.price_card {
    font-weight: 700;
    font-size: 15px;
    margin-top: -5px;
}
.text_card {
        font-weight: 700;
    font-size: 12px;
    margin-top: 5px;
      white-space: nowrap; 
  width: 90%; 
  overflow: hidden;
  text-overflow: ellipsis; 
}
.dropdown-menu {
    border-radius: 5px;
    font-size: 17px;
    width: 250px;
}
.fa-caret-right {
    color: #ff5454;
    float: right;
}

.header-root {
  background: #fff;
  color: #666;
  width:100%;
}

.navbar {
  display: flex;
  justify-content: space-between;
}

.logo {
  color: white;
  font-family: Roboto Condensed;
  font-size: 1.3rem;
  font-weight: 600;
  letter-spacing: -0.04rem;
  padding: 5px;
}

.search {
  position: relative;
  max-width: 900px;
  width:100%;
  margin-top:5px;
}

.search-form {
  width: -webkit-fill-available;
  padding: 10px 20px;
  border-radius: 50px;
  border:none;
  background: #fff;
  -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
  color: #5b143e;
  margin-right: 20px;
  height:30px;
}

.search-icon {
  font-size: 20px;
  line-height: 24px;
  width: 24px;
  height: 24px;
  border: 0;
  position: absolute;
  top: 20px;
  right: 40px;
  transform: translateY(-50%);
  outline: 0;
  cursor: pointer;
  background: #fff;
}

.mobile-search {
  display: none;
  height: 60px;
}

.show-mobile-search {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.go-back-icon {
  position: relative;
  color: #5b143e;
  font-weight: 400;
  cursor: pointer;
  font-size:25px;
  margin-left:0px;
}

.tooltip {
  position: absolute;
  top: 70px;
  font-size: 14px;
  background: rgba(255,255,255,0.15);
  padding: 7px;
  border-radius: 2px;
  opacity: 0;
  transition: opacity 250ms ease-in;
}
.fa-search{
  color: #5b143e;
}
.go-back-icon {
  &:hover {
    .tooltip {
      opacity: 1;
    }
  }
}

@media (min-width: 601px) {
  .hide-on-large {
    display: none;
  }
  
  .mobile-search {
    display: none;
  }
}


@media (max-width: 600px) {
  .hide {
    display: none;
  }
}
*:focus {
    outline: none;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.slideResponsive{
  max-width:1800px;
  width:100%;
}
.footer{
  border-top: 0.5px solid #c4c4c4;
  background: #fff;
  color:#fff;
  width:90%;
  margin-bottom:-20px;
  max-width:900px;
  padding:10px;
}
.text_footer{
  color:#000;
  font-size:13px;
  text-align:center;
}
.form_search{
  max-width:1400px;
  width:100%;
  margin-left:5%;
}
.card_ahref{
    color:#000;
    text-decoration:none;
}


::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #5b143e;
}
::-webkit-scrollbar-thumb:hover {
    background: #9c3270;
}

/* Category red */
.category{
  padding: 10px;
  position: relative;
  background: #fff;
  color:#5b143e;
}

/* highlight category items on hover */
.category:hover {
  color:#5b143e;
}

/* float and size li's */
#nav li {
  float: left;
  line-height: 50px;
  margin-top:-1px;
  border: 1px solid white;
}

/* default off */
ul,
li {
  margin: 0;
  padding: 0;
  list-style: none;
  color: #5b143e;
}

/* hover effect */
li:hover{
  color:#5b143e;
  cursor:pointer;
}


/* hide dropdowns */
.dropdown {
  display: none;
  position: absolute;
  border-radius:10px;
  padding:2px;
  border: none;
  background: #fff;
  -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
width:250px;
font-size:14px;
z-index:999;
text-align:left;
}


.category:hover>.dropdown{
  display: block;
}

/* #nav ul li > ul > li */
.dropdown li{
  position: relative;
  background: #fff;
  border-radius:10px;
   width:100%;
  
}
.dropdown li a {
  margin-left: 0px;
  padding: 10px;
  border-radius:10px;
  background: transparent;
  width:100%;
}
.dropdown li.subcategory-item a {
  margin-left: 0px;
  padding: 10px;
  background: #fff;
  color: #5b143e;
}

.dropdown-subcategory{
  white-space:nowrap;
}

/* #nav ul li > ul > li > ul */
 .dropdown-subcategory .dropdown{
  display: none;
  position: absolute;
  top:0%;
  left:50%;;
  background: #fff;    
  text-align: center;
  border-radius:10px;
    -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
}

.dropdown-subcategory .subcategory-item a{
  background: #fff;
  border-radius:10px;
}

.dropdown li:hover ul {
  display: block;
  margin-left:120px;
}
.subcategory-item a:hover{
    color:#5b143e;
}
.a_href_menu{
      color: #5b143e;
    text-decoration:none;
}
.a_href_menu:hover{
    color:#5b143e;
}
.category_ahref{
    text-decoration:none;
     color: #5b143e;
     margin-top:20px;
}
.searchBox{
    max-width:650px;
    width:90%;
        -webkit-box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18); 
box-shadow: 5px 5px 14px 1px rgba(0,0,0,0.18);
border-radius:50px;
padding:10px;
border:none;
}
.fodastico_salvador{
    margin-top:-40px;
}

.text_canto{
   float: right;
    text-decoration:none;
    margin-top:30px;
    margin-right:120px;
}
.text_canto2{
   float: right;
    text-decoration:none;
    margin-top:30px;
    margin-right:10px;
}
</style>
</head>
<body >
<div id="loader"></div>
<div id="myDiv">
  <header class="header-root">
  <div class="container">
    <nav class="navbar">
      <a href="https://aprend.com.br/"><div class="logo"><img src="../images/logo.png" width="100"></div></a>
        <div id="nav">
  <ul>
    <li class="category">
      Categorias
      <ul class="dropdown">
        <?php
        include_once("../config.php");
        $sql = "SELECT DISTINCT category FROM products";
        $result = $conn->query($sql,$firstname);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
        <li class="dropdown-subcategory">
            <a href="../buscar/?category=<?php echo $row["category"];?>" class="a_href_menu"><?php echo $row["category"];?> <i class="fa fa-angle-right"></i></a>
            <ul class="dropdown">                        
        <?php 
        $Category = $row["category"]; 
        define($Category); 
        ?>
        <?php
        include_once("../config.php");
        $sql2 = "SELECT DISTINCT sub_category FROM products WHERE category = '$Category'";
        $result2 = $conn->query($sql2,$firstname);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
        ?>
            <li class="subcategory-item"><a href="../buscar/?category=<?php echo $row["category"];?>&sub_category=<?php echo $row2["sub_category"];?>" class="a_href_menu"><?php echo $row2["sub_category"];?> <i class="fa fa-angle-right"></i></a></li>
        
        <?php
            }
        } else {
            echo 'Nenhuma Sub-Categoria Cadastra :(';
        }
        ?>
            </ul>
        </li>
        <?php
           }
        } else {
           echo 'Nenhuma Categoria Cadastrada :(';
        }
        ?> 
 
      </ul>
    </li>
  </ul>
</div>
      <form method="GET" action="../r/" class="form_search">
        <div class="search">
          <button class="search-icon large-search-icon hide"><i class="fa fa-search"></i></button>
          <input class="search-form hide" type="text" name="q" placeholder="Buscar por Cursos..." autocomplete="off" value="<?php $i = $_GET['i']; echo $i;?>">
          <button type="button" class="search-icon mobile-search-icon hide-on-large"><i class="fa fa-search"></i></button>
        </div>
      </form>
      </nav>
      <div class="mobile-search">
        <div class="go-back-icon"><i class="fa fa-arrow-left"></i> <div class="tooltip"></div></div>
      </div>
  </div>
</header>

<center>
<?php
error_reporting(E_ERROR | E_PARSE);
include_once("../config.php");
    $sql = "SELECT DISTINCT category FROM products ORDER BY category ASC";
    $result = $conn->query($sql,$firstname);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
?>

<?php
    include_once("../config.php");
    $category = $_GET['category'];
    $sub_category = $_GET['sub_category'];
    $sql = "SELECT DISTINCT sub_category,category FROM products WHERE sub_category='$sub_category'";
    $result = $conn->query($sql,$firstname);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
?>

<a href='../buscar/?category=<?php echo $row["category"];?>&sub_category=<?php echo $row["sub_category"];?>' class='name_category'><h2><b><?php echo $row["sub_category"];?></b></h2></a><a href='https://api.whatsapp.com/send?text=https%3A%2F%2Faprend.com.br%2Fbuscar%2F%3Fcategory%3D<?php
    $string = $row["category"];
    echo $string;
?>%26sub_category%3D<?php
    $string = $row["sub_category"];
    echo $string;
?>' class='text_canto'><b><i class='fa fa-share'></i> Compartilhar</b></a><br/><br/>
<div class="carousel-wrap">
  <div class="owl-carousel">  
    
    <?php
        include_once("../config.php");
        $Category = $row["category"];
        $SubCategory = $row["sub_category"];
        $sql2 = "SELECT * FROM products WHERE sub_category='$SubCategory'";
            $result2 = $conn->query($sql2,$firstname);
              if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { 
          ?>
            <div class="item"> 
                <a href="../p/?course=<?php echo $row2["id"]; ?>" class="card_ahref">
                  <div class="card_item">
                    <img src="https://aprend.com.br/image.php?image=https://aprend.com.br/curso/images/<?php echo $row2["product_image"];?>&width=280&height=280" class="responsive_image_course">
                    <p class="text_card"><?php echo $row2["product_name"];?></p>
                    <p class="price_card">R$ <?php echo $row2["product_price"];?></p>
                    <a href="../p/?course=<?php echo $row2["id"]; ?>"><button class="button_pay">Saiba Mais</button></a><br/><br/>
                  </div>
                </a>
            </div>
          <?php
              }
            } else {
                echo 'Nenhum Curso Cadastrado Nessa Categoria :(';
            }
          ?>
    
    
  </div>        
</div>


<?php
            }
        } else {
            $category = $_GET['category'];
            echo "<script>
                    window.location.href = 'https://aprend.com.br/buscar/?category=$category'
                </script>";
        }
?>


<?php
 }
}

?>


<footer class="footer">
  <img src="../images/logo.png" width="100">
  <p class="text_footer">Esse site ?? um cat??logo de cursos de terceiros que n??o s??o hospedados nessa plataforma.<br>
  <a href="footer/termos.pdf">Termos de Uso</a> | <a href="footer/politica.pdf">Pol??tica de Privacidade</a> | <a href="https://m.me/aprendbr">Contate-Nos</a>
</footer>
</center>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
<script type="text/javascript">
$(".owl-carousel").owlCarousel({
    loop: !1,
    margin: 10,
    nav: !0,
    navText: ["<div class='button_pass_carrousel'><i class='fa fa-angle-left'></i></div>", "<div class='button_pass_carrousel'><i class='fa fa-angle-right'></i></div>"],
    autoplay: false,
    autoplayHoverPause: !0,
    responsive: { 0: { items: 2 }, 600: { items: 3 }, 1000: { items: 6 } },
});
</script>
<script>
$(document).ready(function(){
 
 var limit = <?php
                            include_once("config.php");
                            $sql = "SELECT COUNT(DISTINCT category) AS NumberCategorys FROM products";
                            $result = $conn->query($sql,$firstname);
                                if ($row = $result->fetch_assoc()) {
                                        echo ''.$row["NumberCategorys"].'';
                                    }
                                else {
                                    echo '0';
                                }
                        ?>;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"sub_category1.php?category=<?php $category = $_GET['category']; echo $category;?>&sub_category=<?php $sub_category = $_GET['sub_category']; echo $sub_category;?>",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_products').append(data);
    if(data == '')
    {
     $('#load_data_products').html("");
     action = 'active';
    }
    else
    {
     $('#load_data_products').html("");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'inactive';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_products").height() && action == 'inactive')
  {
   action = 'inactive';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 99999999);
  }
 });
 
});
</script>
<script type="text/javascript">
  window.addEventListener("load", function() {
  const searchIcon = document.querySelector(".large-search-icon");
  const mobileSearchIcon = document.querySelector(".mobile-search-icon");
  const mobileSearch = document.querySelector(".mobile-search");
  const navbar = document.querySelector(".navbar");
  const goBack = document.querySelector(".go-back-icon");


  mobileSearchIcon.addEventListener("click", () => {
    mobileSearch.classList.toggle("show-mobile-search");

    if(mobileSearch.classList.contains("show-mobile-search")) {
      navbar.classList.add("hide");
    } else {
      navbar.classList.remove("hide");
    }
  });

  goBack.addEventListener("click", () => {
    if(mobileSearch.classList.contains("show-mobile-search")) {
      mobileSearch.classList.remove("show-mobile-search");
      navbar.classList.remove("hide");
    } 
  });

});
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>

<?php
    }
?>

<?php       
    } else{
        include_once("config.php");
        $course = $_GET['course'];
        $sql = "SELECT * FROM products WHERE id='$course'";
        $result = $conn->query($sql,$firstname);
            if ($row = $result->fetch_assoc()) {
                echo file_get_contents($row["linkHotmart"]);
            } else {
                echo "<script>
        window.location.href = 'https://aprend.com.br/'
    </script>";
            }

    }
?>


