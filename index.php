<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $mobileKeyWords = array ("iPhone", "iPod", "BlackBerry", "Android", "Windows CE", "LG", "MOT", "SAMSUNG", "SonyEricsson", "Mobile", "Symbian", "Opera Mobi", "Opera Mini", "IEmobile");
            for($i = 0 ; $i < count($mobileKeyWords) ; $i++) {
                if(strpos($_SERVER["HTTP_USER_AGENT"],$mobileKeyWords[$i]) == true) {
                    header("Location: ./mobile/index.php");
                    exit;
                }
            }
        ?>
        <meta charset="UTF-8">
	<title>NOVO</title>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/index_style.css">
        <link rel="stylesheet" href="./css/liquid_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/header.js"></script>
        <script type="text/javascript" src="./js/jquery.litebox.js"></script>
        <script>
                $(function() {
                        $('.litebox-trigger').LiteBox();
                });
        </script>
        <script>
            function fnMove(seq){
                var offset = $("#div"+seq).offset();
                $('html, body').animate({scrollTop:offset.top}, 400);
            }        
        </script>
            
    </head>
    <body>
        <div id="wrap">
            
            <?php include "./header.php"; ?>
            
            <div id="content">
                <div>
                    <nav>
                        <div class="gallery">
                            <ul>
                                <li>
                                    <div class="main_bg">     
                                        <div class="wrap_txt">
                                            <div class="main_txt">NOVO</div>
                                            <div class="sub_main_txt">NOVO LIQUID는 100% 국내기술력으로<br>
                                            대한민국에서 제조한 전자담배 액상입니다.</div>
                                        </div>
                                    </div>                           
                                </li>
                                <li>
                                    <div class="main_bg">     
                                        <div class="wrap_txt">
                                            <div class="main_txt">NOVO</div>
                                            <div class="sub_main_txt">NOVO LIQUID는 100% 국내기술력으로<br>
                                            대한민국에서 제조한 전자담배 액상입니다.</div>
                                        </div>
                                    </div>      
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    
                    <script>
                        $(document).ready(function() {
                           var $galleryLi=$('.gallery li');
                           var $htmlbg=$('html, body');
                           var $galleryLiSize=$galleryLi.size();
                           var $arrBg=[];
                           
                           for(var i=0; i<$galleryLiSize; i++) {
                               $arrBg.push('url(./img/main_'+(i)+'.png) no-repeat');
                               $galleryLi.eq(i).css({'background':$arrBg[i],'background-position':'center top','background-size':'contain'});                               
                           }
                           var num=-1;
                           function autoFade() {
                               num++;
                               $galleryLi.eq(num).fadeIn().siblings().fadeOut();
                               if(num==$galleryLiSize-1) {
                                   num=-1;
                               }
                           }                            
                           setInterval(autoFade,3000);

                        });
                        
                    </script>
                    <!--    
                    <div class="main_bg">     
                        <div class="wrap_txt">
                            <div class="main_txt">NOVO</div>
                            <div class="sub_main_txt">NOVO LIQUID는 100% 국내기술력으로<br>
                            대한민국에서 제조한 전자담배 액상입니다.</div>
                        </div>
                    </div>
                    -->
                    <div class="wrap_icon">
                        <div id="sort_icon">
                            <ul id="sort_img">
                                <li onclick="fnMove('1')"><a href="#"><img src="./img/tobacco.png" alt="tobacco"></a></li>
                                <li onclick="fnMove('2')"><a href="#"><img src="./img/fruit.png" alt="fruit"></a></li>
                                <li onclick="fnMove('3')"><a href="#"><img src="./img/menthol.png" alt="menthol"></a></li>
                                <li onclick="fnMove('3')"><a href="#"><img src="./img/dessert.png" alt="dessert"></a></li>
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
                
                
                
                
                <div id="div1">
                    <div class="sort_title" style="background-color:#a1dae8;">TOBACCO <span>연초향</span></div>
                    <ul class="liquid">
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#ms-blend">
                                <img src="./img/95/tobacco/ms-blend.png" alt="ms-blend" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                           
                                    <script type="text/template" id="ms-blend">
                                        <img src='./img/product/tobacco/ms-blend.jpg' alt='ms-blend' class="product">                                            
                                    </script>
                                </div>         
                            </div>
                            
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#ms-plus">
                                <img src="./img/95/tobacco/ms-plus.png" alt="ms-plus" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                          
                                    <script type="text/template" id="ms-plus">
                                        <img src='./img/product/tobacco/ms-plus.jpg' alt='ms-plus' class="product">                                        								
                                    </script>                                      
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#kor-mini">
                                <img src="./img/95/tobacco/kor-mini.png" alt="kor-mini" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                           
                                    <script type="text/template" id="kor-mini">
                                        <img src='./img/product/tobacco/kor-mini.jpg' alt='kor-mini' class="product">  	
                                    </script>     
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#usamix">
                                <img src="./img/95/tobacco/usamix.png" alt="usamix" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                         
                                    <script type="text/template" id="usamix">
                                        <img src='./img/product/tobacco/usamix.jpg' alt='usamix' class="product">		
                                    </script>       
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#desert">
                                <img src="./img/95/tobacco/desert.png" alt="desert" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                            
                                    <script type="text/template" id="desert">
                                        <img src='./img/product/tobacco/desert.jpg' alt='desert' class="product">	
                                    </script>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!--#tobacco-->

                
                <div id="div2">
                    <div class="sort_title" style="background-color:#00beb8;">FRUIT <span>과일향</span></div>
                    <ul class="liquid">
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#greenpunch">
                                <img src="./img/95/fruit/greenpunch.png" alt="greenpunch" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                                                      
                                    <script type="text/template" id="greenpunch">
                                        <img src='./img/product/fruit/greenpunch.jpg' alt='greenpunch' class="product">			
                                    </script>        
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#bluepunch">
                                <img src="./img/95/fruit/bluepunch.png" alt="bluepunch" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                               
                                    <script type="text/template" id="bluepunch">
                                        <img src='./img/product/fruit/bluepunch.jpg' alt='bluepunch' class="product">				
                                    </script>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#coollemon">
                                <img src="./img/95/fruit/coollemon.png" alt="coollemon" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                 
                                    <script type="text/template" id="coollemon">
                                        <img src='./img/product/fruit/coollemon.jpg' alt='coollemon' class="product">							
                                    </script>   
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#yellowpunch">
                                <img src="./img/95/fruit/yellowpunch.png" alt="yellowpunch" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                    
                                    <script type="text/template" id="yellowpunch">
                                        <img src='./img/product/fruit/yellowpunch.jpg' alt='yellowpunch' class="product">				
                                    </script>    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#whitepunch">
                                <img src="./img/95/fruit/whitepunch.png" alt="whitepunch" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                        
                                    <script type="text/template" id="whitepunch">
                                        <img src='./img/product/fruit/whitepunch.jpg' alt='whitepunch' class="product">					
                                    </script>   
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!--#fruit-->
                
                <div id="div3">
                    <div class="sort_title" style="background-color:#00beb8;">멘솔향&nbsp;<span>MENTHOL</span>&nbsp;&amp;&nbsp;디져트&nbsp;<span>DESSERT</span></div>
                    <ul class="liquid">
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#tabacmenthol">
                                <img src="./img/95/menthol/tabacmenthol.png" alt="tabacmenthol" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                       
                                    <script type="text/template" id="tabacmenthol">
                                        <img src='./img/product/menthol_dessert/tabacmenthol.jpg' alt='tabacmenthol' class="product">		
                                    </script>     
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#blackmenthol">
                                <img src="./img/95/menthol/blackmenthol.png" alt="blackmenthol" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                      
                                    <script type="text/template" id="blackmenthol">
                                        <img src='./img/product/menthol_dessert/blackmenthol.jpg' alt='blackmenthol' class="product">							
                                    </script>       
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#menthol">
                                <img src="./img/95/menthol/menthol.png" alt="menthol" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                          
                                    <script type="text/template" id="menthol">
                                        <img src='./img/product/menthol_dessert/menthol.jpg' alt='menthol' class="product">							
                                    </script>  
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#americano">
                                <img src="./img/95/dessert/americano.png" alt="americano" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                          
                                    <script type="text/template" id="americano">
                                        <img src='./img/product/menthol_dessert/americano.jpg' alt='americano' class="product">			
                                    </script>  
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="liquid_container litebox-trigger" data-template="#hazzlenut">
                                <img src="./img/95/dessert/hazzlenut.png" alt="hazzlenut" class="liquid_image">
                                <div class="middle">
                                    <div class="click_text">Click</div>                                                                    
                                    <script type="text/template" id="hazzlenut">
                                        <img src='./img/product/menthol_dessert/hazzlenut.jpg' alt='hazzlenut' class="product">			
                                    </script> 
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!--#menthol&dessert-->
                             
                <!--<div class="fadeImgBox">
                    <div class="imgBox">
                        <img src="" alt="" align="left">
                        <ul>
                            <li>
                                <table>
                                    <tr><td>MS-BLEND</td></tr>
                                    <tr><td>엠에스블랜드</td></tr>
                                    <tr><td>마일드 *븐의 부드러움과 말*루의 구수한 연초향을 구현 연초담배의 향을 최대한 느낄 수  있도록 만든 제품입니다.</td></tr>
                                    <tr><td>용량 : 30ML<br>니코틴 농도 : 0.95%</td></tr>
                                </table>                                
                            </li>
                            <li>
                                <table>
                                    <tr><td>MS-PLUS</td></tr>
                                    <tr><td>엠에스플러스</td></tr>
                                    <tr><td>연초담배가 가지고 있는 고유의 허브느낌과 강하고 묵직한 허브느낌을 블랜딩한 제품으로 좀 더 풍부하고 깊은 연초담배향을 구현한 제품입니다.</td></tr>
                                    <tr><td>용량 : 30ML<br>니코틴 농도 : 0.95%</td></tr>
                                </table>									                        
                            </li>
                            <li>
                                <table>
                                    <tr><td>KOR-MINI</td></tr>
                                    <tr><td>코리아미니</td></tr>
                                    <tr><td>국산 연초 담배 에*맛을  구현하여 순하고 깔끔한 담배향을  경험할 수 있습니다.</td></tr>
                                    <tr><td>용량 : 30ML<br>니코틴 농도 : 0.95%</td></tr>
                                </table>																	                        
                            </li>
                        </ul>             
                        <span class="close">X</span>
                    </div>
                </div>-->                     

                <script>
                    var $body=$('body');
                    var $fadeImgBox=$('.fadeImgBox');
                    var $imgBox=$('.imgBox');
                    var $spanClose=$('span.close');
                    var $spanContent=$('span.content');
                    
                    var $textArray=[];
                    

                    var $bodyWidth=$body.width();
                    var $bodyHeight=$body.height();
                    var $imgBoxWidth=$imgBox.width();
                    var $imgBoxHeight=$imgBox.height();

                    var $imgBoxLeft=$bodyWidth/2-$imgBoxWidth/2;
                    var $imgBoxTop=$bodyHeight/2-$imgBoxHeight/2;

                    $imgBox.css({'left':$imgBoxLeft,'top':$imgBoxTop});

                    var $liquidLi=$('.liquid li');

                    $liquidLi.on('click',function() {
                       var thisSrc=$(this).find('img').attr('src');
                       var thisTxt=$(this).find('.sTxt').text();
                       
                       //console.log(thisSrc);
                       var shortSrc = thisSrc.length;
                       var shortSrc=thisSrc.substr(5,shortSrc-5);
                       //console.log(shortSrc);
                       var longSrc='./img/click'+shortSrc;
                       //console.log(longSrc);
                       $imgBox.find('img').attr('alt',thisTxt);
                       $imgBox.find('img').attr('src',longSrc);
                       
                       
                       $fadeImgBox.fadeIn();
                    });
                    
                    $textArray.push("<table><tr><td>MS-BLEND</td></tr><tr><td>엠에스블랜드</td></tr><tr><td>마일드 *븐의 부드러움과 말*루의 구수한 연초향을 구현 연초담배의 향을 최대한 느낄 수  있도록 만든 제품입니다.</td></tr><tr><td>용량 : 30ML<br>니코틴 농도 : 0.95%</td></tr></table>")
                    $textArray.push("<table><tr><td>MS-PLUS</td></tr><tr><td>엠에스플러스</td></tr><tr><td>연초담배가 가지고 있는 고유의 허브느낌과 강하고 묵직한 허브느낌을 블랜딩한 제품으로 좀 더 풍부하고 깊은 연초담배향을 구현한 제품입니다.</td></tr><tr><td>용량 : 30ML<br>니코틴 농도 : 0.95%</td></tr></table>")

                    $liquidLi.on('click',function() {      
                        var idx=$(this).index();
                        for(var i=0; i<2;i++) {
                            $spanContent.eq(idx).html($textArray[i]);
                        }
                    });
                    

                    $spanClose.on('click',function() {
                       $fadeImgBox.fadeOut();
                    });
                </script>
                
            </div><!--#content-->
            
            <footer class="footer">
                <div class="footer_company">
                    상호명 : 씨엔엘&nbsp;&nbsp;&nbsp;&nbsp;대표자 : 이혜연&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;사업자등록번호 : 171-40-00216<br>
                    주소 : 경기도 성남시 분당구 판교로 700, E동 305호 (야탑동 151 분당테크노파크)<br>
                    Tel : 1661-0162&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax : 070-8228-4772&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail : cflavor@naver.com<br>
                    Copyright ⓒ 2017 씨엔엘. All Rights Reserved. <br>
                    <span style="color:#ff0">본 제품은 19세 미만 청소년에게 판매할 수 없습니다.</span><br>
                </div>
                <div class="footer_caution">
                    1. 노보 제품은 니코틴을 사용하고 있습니다. 2. 용도이외의 사용을 금합니다. 3. 본 제품은 금연을 위한 제품이 아닙니다. <br>
                    4. 법적연령 미만자(19세미만 청소년)에게 판매를 금지하며, 사용 또한 금지합니다. 5. 흡연 시 현기증, 구토, 설사 등 이상 <br>
                    증상이 나타나는 경우에는 즉시 사용을 중단하시고 의사와 상담하세요. 6. 유아, 어린이, 애완동물이 접근할 수 없도록 <br>
                    안전한 곳에 보관하세요. 7. 본제품은 중독성이 있는 제품입니다. 사용상 주의 하십시요. 8. 지나친 흡연은 당신의 건강을 <br>
                    해칠 수 있습니다. 일단 흡연을 하게 되면 끊기가 매우 어려우므로 주의하세요. <span style="color:#ff0">금연상담전화 1544-9030</span><br>
                </div>
            </footer>
           
        </div>
                
        <script type="text/javascript">initTopMenu(0,0);</script>
        
        
    </body>
</html>