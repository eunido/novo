<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
	<title>NOVO</title>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
        <!-- 안드로이드 홈화면추가시 상단 주소창 제거 -->
        <meta name="mobile-web-app-capable" content="yes">
        <!-- ios홈화면추가시 상단 주소창 제거 -->
        <meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/index_mobile_style.css">
        <link rel="stylesheet" href="./css/common.css">
        <link rel="stylesheet" href="./dist/css/swiper.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="./js/jquery.touchSlider.js"></script>
        <script src="./dist/js/swiper.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.event.drag/2.2/jquery.event.drag.min.js"></script>
        <script type="text/javascript" src="./js/jquery.litebox.js"></script>
        <script>
                $(function() {
                        $('.litebox-trigger').LiteBox();
                });
        </script>
        <style>
            .navi {display:none;position:relative;top:0;left:10px;}
            .ui-collapsible-heading-toggle {left:15px;}
            .ui-collapsible-content {margin-left:30px;}
            .ui-btn {right:15px;}
            
            
            .swiper-container {
                width: 300px;
                height: 300px;
            }
            
            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;

                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }
        </style>
        <script>
            function fnMove(seq){
                var offset = $("#sort"+seq).offset();
                $('html, body').animate({scrollTop:offset.top}, 400);
            }        
        </script>
    </head>
    <body>
        <div id="wrap">
            <header>
                <div id="header">
                    <h2><img src="./img/menu.png" alt="menu"></h2>
                    <h1><a href="./index_mobile.php"><img src="./img/logo.png" alt="logo"></a></h1>
                </div>
                <div id="demo-borders" class="navi">
                    <div data-role="collapsible" data-inset="false">
                        <h3>회사소개</h3>
                        <ul data-role="listview">
                            <li><a href="./company_mobile.php">회사소개</a></li>
                            <li><a href="./certification_mobile.php">인증서</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>액상소개</h3>
                        <ul data-role="listview">
                            <li><a href="./liquid_novo.php">NOVO</a></li>
                            <li><a href="./liquid_medusa.php">MEDUSA</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>제품소개</h3>
                        <ul data-role="listview">
                            <li><a href="./cato.php">CATOMIZER</a></li>
                            <li><a href="./k600.php">K600</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>고객지원</h3>
                        <ul data-role="listview">
                            <li><a href="./faq.php">자주묻는질문</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>연락처</h3>
                        <ul data-role="listview">
                            <li><a href="./question_kr.php">한국/문의</a></li>
                            <li><a href="./question_ch.php">중국/문의</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                </div>


                <script>
                    var $naviMenu=$('.navi');
                    var $menuBtn=$('#header h2 img');

                    $menuBtn.on({
                        'click':function() {
                            var src=($(this).attr('src')=='./img/menu.png') 
                            ? './img/close.png'
                            : './img/menu.png';
                            $(this).attr('src', src);
                            $naviMenu.toggleClass("navi");
                        }
                    });
                </script>
            </header>
            
            <div id="content">
                <section>
                    <article>
                        <div id="main">
                            <div id="main_img">
                                <div class="main_bg">
                                    <img src="./img/main_bg.png">
                                </div>
                                <div class="sort_gallery">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                       var $galleryLi=$('.sort_gallery li');
                                       var $galleryLiSize=$galleryLi.size();
                                       var $arrBg=[];

                                       for(var i=0;i<$galleryLiSize;i++) {
                                           console.log(i);
                                           $arrBg.push('url(./img/img_'+(i)+'.png) no-repeat 100%');
                                           console.log($arrBg[i]);
                                           $galleryLi.eq(i).css({'background':$arrBg[i],'background-size':'cover'});
                                       }
                                       var num=-1;
                                       function autoFade() {
                                           num++;
                                           $galleryLi.eq(num).fadeIn().siblings().fadeOut();

                                           if(num==$galleryLiSize-1) num=-1;
                                       }
                                       setInterval(autoFade,2000);
                                    });
                                </script>
                            </div>           
                            <div id="circle">
                            </div>

                            <script>
                                var bodyWidth=$('body').width();
                                var circleWidth=$('#circle').width();
                                var circleLeft=bodyWidth/2-circleWidth/2;

                                $('#circle').css({'position':'absolute','left':circleLeft});
                            </script>

                            <div class="main_txt">
                                <img src="./img/main_txt.png">
                            </div>
                            <div class="wrap_icon">
                                <div id="sort_icon">
                                    <ul id="sort_img">
                                        <li onclick="fnMove('1')"><a href="#"><img src="../img/tobacco.png" alt="tobacco"></a></li>
                                        <li onclick="fnMove('2')"><a href="#"><img src="../img/fruit.png" alt="fruit"></a></li>
                                        <li onclick="fnMove('3')"><a href="#"><img src="../img/menthol.png" alt="menthol"></a></li>
                                        <li onclick="fnMove('3')"><a href="#"><img src="../img/dessert.png" alt="dessert"></a></li>
                                    </ul>
                                    <ul id="sort_txt">
                                        <li>TOBACCO</li>
                                        <li>FRUIT</li>
                                        <li>MENTHOL</li>
                                        <li>DESERT</li>
                                    </ul>
                                </div>
                            </div>    
                        </div>
                    </article>
                    <article id="sort_product">
                        <div id="sort1">
                            <div class="sort_name"><span class="leftT"></span><div class="name">TOBACCO 연초향</div><span class="rightT"></span></div>
                            <div class="swiper-container">      
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                        <img src="../img/95/tobacco/ms-blend.png" alt="ms-blend">        
                                  </div>
                                  <div class="swiper-slide">
                                        <img src="../img/95/tobacco/ms-plus.png" alt="ms-plus">
                                  </div>
                                  <div class="swiper-slide">
                                        <img src="../img/95/tobacco/kor-mini.png" alt="kor-mini">  
                                  </div>
                                  <div class="swiper-slide">
                                        <img src="../img/95/tobacco/usamix.png" alt="usamix">
                                  </div>
                                  <div class="swiper-slide">
                                        <img src="../img/95/tobacco/desert.png" alt="desert">
                                  </div>
                                </div>         
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>     
                        </div> 
                        <script>
                            var bodyWidth=$('body').width();
                            var sortWidth=$('#sort1 img').width();
                            var sortLeft=bodyWidth/2-sortWidth/2;
                            
                            $('#sort1 img').css({'position':'absolute','left':sortLeft});
                        </script>                        
                        
                        <div id="sort2">
                            <div class="sort_name"><span class="leftT"></span><div class="name">FRUIT 과일향</div><span class="rightT"></span></div>
                            <span class="left"><</span>
                            <div class="touchSlider2">      
                                <ul style="float:left;display:block;">
                                  <li class="litebox-trigger" data-template="#whitepunch">
                                        <a href="#"><img src="../img/95/fruit/whitepunch.png" alt="whitepunch"></a>                                                     
                                        <script type="text/template" id="whitepunch">
                                            <img src='./img/product/fruit/whitepunch.jpg' alt='whitepunch'class="product">					
                                        </script>   
                                  </li>
                                  <li class="litebox-trigger" data-template="#greenpunch">
                                        <a href="#"><img src="../img/95/fruit/greenpunch.png" alt="greenpunch"></a>                                                                                  
                                        <script type="text/template" id="greenpunch">
                                            <img src='./img/product/fruit/greenpunch.jpg' alt='greenpunch'class="product">			
                                        </script>        
                                  </li>
                                  <li class="litebox-trigger" data-template="#bluepunch">
                                        <a href="#"><img src="../img/95/fruit/bluepunch.png" alt="bluepunch"></a>                                     
                                        <script type="text/template" id="bluepunch">
                                            <img src='./img/product/fruit/bluepunch.jpg' alt='bluepunch'class="product">				
                                        </script>
                                  </li>
                                  <li class="litebox-trigger" data-template="#coollemon">
                                        <a href="#"><img src="../img/95/fruit/coollemon.png" alt="coollemon"></a>                                              
                                        <script type="text/template" id="coollemon">
                                            <img src='./img/product/fruit/coollemon.jpg' alt='coollemon'class="product">							
                                        </script>   
                                  </li>
                                  <li class="litebox-trigger" data-template="#yellowpunch">
                                        <a href="#"><img src="../img/95/fruit/yellowpunch.png" alt="yellowpunch"></a>                                                  
                                        <script type="text/template" id="yellowpunch">
                                            <img src='./img/product/fruit/yellowpunch.jpg' alt='yellowpunch'class="product">				
                                        </script>    
                                  </li>
                                </ul>                      
                            </div>  
                            <span class="right">></span>                   
                        </div> 
                        <script>
                            var bodyWidth=$('body').width();
                            var sortWidth=$('#sort2 img').width();
                            var sortLeft=bodyWidth/2-sortWidth/2;

                            $('#sort2 img').css({'position':'absolute','left':sortLeft});
                        </script>

                        <div id="touchSlider_paging2" class="btn_area2" style="text-align:center;"></div>

                        <script>

                            $(".touchSlider2").touchSlider({
                                    initComplete : function (e) {
                                            $("#touchSlider_paging2").html("");
                                            var num = 1;
                                            $(".touchSlider2 ul li").each(function (i, el) {
                                                    if((i+1) % e._view == 0) {
                                                            $("#touchSlider_paging2").append('<div class="btn_page">page' + (num++) + '</div>');
                                                    }
                                            });
                                            $("#touchSlider_paging2 .btn_page").bind("click", function (e) {
                                                    var i = $(this).index();
                                                    $(".touchSlider2").get(0).go_page(i);
                                            });
                                    },
                                    counter : function (e) {
                                            $("#touchSlider_paging2 .btn_page").removeClass("on").eq(e.current-1).addClass("on");
                                    }
                            });

                        </script>         
                        <div id="sort3">
                            <div class="sort_name"><span class="leftT"></span><div class="name">MENTHOL 멘솔향 & <br>DESSERT 디져트</div><span class="rightT"></span></div>
                            <span class="left"><</span>
                            <div class="touchSlider3">      
                                <ul style="float:left;display:block;">
                                  <li class="litebox-trigger" data-template="#blackmenthol">
                                      <img src="../img/95/menthol/blackmenthol.png" alt="blackmenthol">                                    
                                        <script type="text/template" id="blackmenthol">
                                            <img class="product" src='./img/product/menthol_dessert/blackmenthol.jpg' alt='blackmenthol'>							
                                        </script>       
                                  </li>
                                  <li class="litebox-trigger" data-template="#tabacmenthol">
                                        <img src="../img/95/menthol/tabacmenthol.png" alt="tabacmenthol">                                                     
                                        <script type="text/template" id="tabacmenthol">
                                            <img class="product" src='./img/product/menthol_dessert/tabacmenthol.jpg' alt='tabacmenthol'>		
                                        </script>     
                                  </li>
                                  <li class="litebox-trigger" data-template="#menthol">
                                        <img src="../img/95/menthol/menthol.png" alt="menthol">                                                 
                                        <script type="text/template" id="menthol">
                                            <img class="product" src='./img/product/menthol_dessert/menthol.jpg' alt='menthol'>							
                                        </script>  
                                  </li>
                                  <li class="litebox-trigger" data-template="#americano">
                                        <img src="../img/95/dessert/americano.png" alt="americano">                                                         
                                        <script type="text/template" id="americano">
                                            <img class="product" src='./img/product/menthol_dessert/americano.jpg' alt='americano'>			
                                        </script>  
                                  </li>
                                  <li class="litebox-trigger" data-template="#hazzlenut">
                                        <img src="../img/95/dessert/hazzlenut.png" alt="hazzlenut">                                                             
                                        <script type="text/template" id="hazzlenut">
                                            <img class="product" src='./img/product/menthol_dessert/hazzlenut.jpg' alt='hazzlenut'>			
                                        </script> 
                                  </li>
                                </ul>                      
                            </div>  
                            <span class="right">></span>                   
                        </div> 
                        <script>
                            var bodyWidth=$('body').width();
                            var sortWidth=$('#sort3 img').width();
                            var sortLeft=bodyWidth/2-sortWidth/2;

                            $('#sort3 img').css({'position':'absolute','left':sortLeft});
                        </script>

                        <div id="touchSlider_paging3" class="btn_area3" style="text-align:center;"></div>

                        <script>

                            $(".touchSlider3").touchSlider({
                                    initComplete : function (e) {
                                            $("#touchSlider_paging3").html("");
                                            var num = 1;
                                            $(".touchSlider3 ul li").each(function (i, el) {
                                                    if((i+1) % e._view == 0) {
                                                            $("#touchSlider_paging3").append('<div class="btn_page">page' + (num++) + '</div>');
                                                    }
                                            });
                                            $("#touchSlider_paging3 .btn_page").bind("click", function (e) {
                                                    var i = $(this).index();
                                                    $(".touchSlider3").get(0).go_page(i);
                                            });
                                    },
                                    counter : function (e) {
                                            $("#touchSlider_paging3 .btn_page").removeClass("on").eq(e.current-1).addClass("on");
                                    }
                            });

                        </script>                     

                        </article> 
                    
                        <script>
                            var bodyWidth=$('body').width();
                            var sortNameWidth=$('.sort_name').width();
                            var sortNameLeft=bodyWidth/2-sortNameWidth/2;
                            
                            $('.sort_name').css({'position':'absolute','left':sortNameLeft});
                        </script>
                        
                        
                        <script>
                        var swiper = new Swiper('.swiper-container', {
                            pagination: '.swiper-pagination',
                            paginationClickable: '.swiper-pagination',
                            nextButton: '.swiper-button-next',
                            prevButton: '.swiper-button-prev',
                            loop: true
                        });

                        $('.swiper-container').each(function(){
                            new Swiper($(this), {
                                pagination: $(this).find('.swiper-pagination'),
                                paginationClickable: $(this).find('.swiper-pagination'),
                                nextButton: $(this).find('.swiper-button-next'),
                                prevButton: $(this).find('.swiper-button-prev'),
                                loop: true
                            });
                        });
                        </script>
                </section>
            </div> <!--#content-->
    
            <footer class="footer">
                <div class="footer_company">
                    상호명 : 씨엔엘&nbsp;&nbsp;&nbsp;&nbsp;대표자 : 이혜연&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;사업자등록번호 : 171-40-00216
                    주소 : 경기도 성남시 분당구 판교로 700, E동 305호 (야탑동 151 분당테크노파크)
                    Tel : 1661-0162&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax : 070-8228-4772&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail : cflavor@naver.com
                    Copyright ⓒ 2017 씨엔엘. All Rights Reserved. 
                    <span style="color:#ff0">본 제품은 19세 미만 청소년에게 판매할 수 없습니다.</span>
                </div>
                <div class="footer_caution">
                    1. 노보 제품은 니코틴을 사용하고 있습니다. 2. 용도이외의 사용을 금합니다. 3. 본 제품은 금연을 위한 제품이 아닙니다. 
                    4. 법적연령 미만자(19세미만 청소년)에게 판매를 금지하며, 사용 또한 금지합니다. 5. 흡연 시 현기증, 구토, 설사 등 이상 
                    증상이 나타나는 경우에는 즉시 사용을 중단하시고 의사와 상담하세요. 6. 유아, 어린이, 애완동물이 접근할 수 없도록 
                    안전한 곳에 보관하세요. 7. 본제품은 중독성이 있는 제품입니다. 사용상 주의 하십시요. 8. 지나친 흡연은 당신의 건강을 
                    해칠 수 있습니다. 일단 흡연을 하게 되면 끊기가 매우 어려우므로 주의하세요. 금연상담전화 1544-9030
                </div>
            </footer>        
        </div>
            
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    
    </body>
</html>
    
