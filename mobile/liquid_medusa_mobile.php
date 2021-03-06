<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" href="./css/common.css">
        <link rel="stylesheet" href="./css/liquid_medusa_mobile_style.css">
        <link rel="stylesheet" href="./dist/css/swiper.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.event.drag/2.2/jquery.event.drag.min.js"></script>
        <script type="text/javascript" src="./js/jquery.litebox.js"></script>
        <script src="./dist/js/swiper.min.js"></script>
        <script>
                $(function() {
                        $('.litebox-trigger').LiteBox();
                });
        </script>
        <style>
            * {text-shadow:none;}
            
            .navi {display:none;position:relative;top:0;left:10px;}
            .ui-collapsible-heading-toggle {left:15px;}
            .ui-collapsible-content {margin-left:30px;}
            .ui-btn {right:15px;}
            
            .ui-tabs {padding:0;}
                        
            .swiper-container {
                width: 100%;
                height: 100%;
                position:absolute;
            }
            
            .swiper-slide {
                position:relative;
                text-align: center;
                font-size: 18px;

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
            
            .swiper-slide img {
                width:250px;
                height:250px;
                top:50px;
            }
            

        </style>
    </head>
    <body>
        <div id="wrap">
            
            
            <header>
                <div id="header">
                    <h2><img src="./img/menu.png" alt="menu"></h2>
                    <h1><a href="./index.php" data-ajax="false"><img src="./img/logo.png" alt="logo"></a></h1>
                </div>
                <div id="demo-borders" class="navi">
                    <div data-role="collapsible" data-inset="false">
                        <h3>회사소개</h3>
                        <ul data-role="listview">
                            <li><a href="./company_mobile.php" data-ajax="false">회사소개</a></li>
                            <li><a href="./certification_mobile.php" data-ajax="false">인증서</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>액상소개</h3>
                        <ul data-role="listview">
                            <li><a href="./liquid_novo_mobile.php" data-ajax="false">NOVO</a></li>
                            <li><a href="./liquid_medusa_mobile.php" data-ajax="false">MEDUSA</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>제품소개</h3>
                        <ul data-role="listview">
                            <li><a href="./cato_mobile.php" data-ajax="false">CATOMIZER</a></li>
                            <li><a href="./k600_mobile.php" data-ajax="false">K600</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>고객지원</h3>
                        <ul data-role="listview">
                            <li><a href="./faq_mobile.php" data-ajax="false">자주묻는질문</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>연락처</h3>
                        <ul data-role="listview">
                            <li><a href="./question_kr_mobile.php" data-ajax="false">한국/문의</a></li>
                            <li><a href="./question_ch_mobile.php" data-ajax="false">중국/문의</a></li>
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
                <div class="page_name">
                    <div class="name_txt" style="font-size:20px;"><span style="font-weight:500;">메두사 리퀴드&nbsp;</span>MEDUSA LIQUID</div>
                </div>                
                
                <div data-role="tabs">
                          
                    <div class="navbar" data-role="navbar" style="position:relative;left:13px;top:100px;z-index:10;">  
                        <ul>
                            <li><a href="#tab01" data-ajax="false" class="ui-btn-active">메두사 0.95%</a></li>
                            <li><a href="#tab02" data-ajax="false">메두사 0.30%</a></li>
                        </ul>
                    </div>
                    
                        
                    <div id="tab01">
                                   
                    <div id="sort_product">
                        <div id="sort1">
                            <div class="sort_name"><span class="leftT"></span><div class="name">MEDUSA 메두사</div><span class="rightT"></span></div>
                            <div class="swiper-container">      
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide litebox-trigger" data-template="#britishtobacco">
                                        <a href="#"><img src="../img/medusa/95/britishtobacco.png" alt="britishtobacco"></a>                       
                                        <script type="text/template" id="britishtobacco">
                                            <img src='../img/product/medusa/britishtobacco.jpg' alt='britishtobacco' class="product">                                            
                                        </script>                                      
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#blood">
                                        <a href="#"><img src="../img/medusa/95/blood.png" alt="blood"></a>                                                                           
                                        <script type="text/template" id="blood">
                                            <img src='../img/product/medusa/blood.jpg' alt='blood' class="product">                                        								
                                        </script>                                    
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#iceblackhole">
                                        <a href="#"><img src="../img/medusa/95/iceblackhole.png" alt="iceblackhole"></a>                                     
                                        <script type="text/template" id="iceblackhole">
                                            <img src='../img/product/medusa/iceblackhole.jpg' alt='iceblackhole' class="product">  	
                                        </script>     
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#iceblending">
                                        <a href="#"><img src="../img/medusa/95/iceblending.png" alt="iceblending"></a>                                       
                                        <script type="text/template" id="iceblending">
                                            <img src='../img/product/medusa/iceblending.jpg' alt='iceblending' class="product">		
                                        </script>       
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#headshot">
                                        <a href="#"><img src="../img/medusa/95/headshot.png" alt="headshot"></a>                                            
                                        <script type="text/template" id="headshot">
                                            <img src='../img/product/medusa/headshot.jpg' alt='headshot' class="product">	
                                        </script>
                                    </div>
                                </div>         
                                <!-- Add Pagination -->
                                <div class="swiper-pagination" style="bottom:20px;"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>     
                            </div>    
                        </div>
                            
                                                    
                        </div>
                    </div>
                    
                        
                    <div id="tab02">
                                   
                    <div id="sort_product">
                        <div id="sort1">
                            <div class="sort_name"><span class="leftT"></span><div class="name">MEDUSA 메두사</div><span class="rightT"></span></div>
                            <div class="swiper-container">      
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide litebox-trigger" data-template="#britishtobacco">
                                        <a href="#"><img src="../img/medusa/30/britishtobacco.png" alt="britishtobacco"></a>                       
                                        <script type="text/template" id="britishtobacco">
                                            <img src='../img/product/medusa/britishtobacco.jpg' alt='britishtobacco' class="product">                                            
                                        </script>                                      
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#blood">
                                        <a href="#"><img src="../img/medusa/30/blood.png" alt="blood"></a>                                                                           
                                        <script type="text/template" id="blood">
                                            <img src='../img/product/medusa/blood.jpg' alt='blood' class="product">                                        								
                                        </script>                                    
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#iceblackhole">
                                        <a href="#"><img src="../img/medusa/30/iceblackhole.png" alt="iceblackhole"></a>                                     
                                        <script type="text/template" id="iceblackhole">
                                            <img src='../img/product/medusa/iceblackhole.jpg' alt='iceblackhole' class="product">  	
                                        </script>     
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#iceblending">
                                        <a href="#"><img src="../img/medusa/30/iceblending.png" alt="iceblending"></a>                                       
                                        <script type="text/template" id="iceblending">
                                            <img src='../img/product/medusa/iceblending.jpg' alt='iceblending' class="product">		
                                        </script>       
                                    </div>
                                    <div class="swiper-slide litebox-trigger" data-template="#headshot">
                                        <a href="#"><img src="../img/medusa/30/headshot.png" alt="headshot"></a>                                            
                                        <script type="text/template" id="headshot">
                                            <img src='../img/product/medusa/headshot.jpg' alt='headshot' class="product">	
                                        </script>
                                    </div>
                                </div>         
                                <!-- Add Pagination -->
                                <div class="swiper-pagination" style="bottom:20px;"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>     
                            </div>    
                        </div>
                            
                                                    
                        </div>
                    </div>
                </div>
                        
                        
                        
                    <script>
                        var bodyWidth=$('body').width();
                        var sortWidth=$('#sort1 img').width();
                        var sortLeft=bodyWidth/2-sortWidth/2;

                        $('#sort1 img').css({'position':'absolute','left':sortLeft});
                    </script>


                    <script>
                        var bodyWidth=$('body').width();
                        var sortNameWidth=$('.sort_name').width();
                        var sortNameLeft=bodyWidth/2-sortNameWidth/2;

                        $('.sort_name').css({'position':'absolute','left':sortNameLeft});
                    </script>


                    <script>

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
                                                 
                
                
                
            </div><!--#content-->
            
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
                
        
        
    </body>
</html>