<?php

/* base.html.twig */
class __TwigTemplate_3a13319b594405d1cdc56cf9b289cf438c2e2d100ac4953c1d1d994204decf1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE HTML>
<html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "- Game of Thrones</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </head>
    
    <body>
    <div class=\"header\" id=\"head\">
        <div class=\"header-top\">
                <div class=\"container\">
            <div class=\"logo\">
                <a href=\"index.html";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"></a><!--Put your logo here-->
                </div>
                <div class=\"top-menu\">
                    <span class=\"menu\"> </span>
                    <!--Menu-->
                <ul>
                <!--
                    <li><a href=\"#home\" class=\"active\" class=\"scroll\">home</a></li>
                        <li><a href=\"#aboutus\" class=\"scroll\">King of the North</a></li>
                            <li><a href=\"#service\" class=\"scroll\">Synopsis</a></li>
                                 <li><a href=\"#portfolio\" class=\"scroll\">Dead party</a></li>
                                    <li><a href=\"#testimonial\" class=\"scroll\">Quotes</a></li>
                                        <li><a href=\"#team\" class=\"scroll\">John Snow</a></li>
                                            <li><a href=\"#kill-now\" class=\"scroll\">Family</a></li>
                                                     <li><a href=\"#contact\" class=\"scroll\">contact</a></li>
                -->
                                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_list");
        echo "\" class=\"active\" class=\"scroll\">Inicio</a></li>
                                <li><a href=\"#\" class=\"active\" class=\"scroll\">Sobre mi</a></li>
                                <li><a href=\"#\" class=\"active\" class=\"scroll\">Contacto</a></li>
                                ";
        // line 78
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 79
            echo "                                    <li><a href=\"#\" class=\"active\" class=\"scroll\">Entrar</a></li>
                                ";
        }
        // line 81
        echo "                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 82
            echo "                                    <li><a href=\"#\" class=\"active\" class=\"scroll\">Salir</a></li>
                                ";
        }
        // line 84
        echo "                        </ul>
                        <!--End Menu-->
                    </div>
                     <!--script-nav-->
         <script>
         \$(\"span.menu\").click(function(){
         \$(\".top-menu ul\").slideToggle(\"slow\" , function(){
         });
         });
         </script>
                <div class=\"clearfix\"> </div>
                    </div>
                    </div>

<div class=\"slider\"> <!--Slider Section-->
     <div class=\"container\">
           <div class=\"callbacks_container\">
              <ul class=\"rslides\" id=\"slider\">
                 <li>             
                     <h3>“A mind needs books as a sword needs a whetstone, if it is to <span>keep its edge</span>.” </h3>
                    <p>― George R.R. Martin, A Game of Thrones</p>          
                 </li>
                 <li>             
                    <h3>“<span>Winter</span> is coming.”</h3>  
                    <p>― George R.R. Martin, A Game of Thrones</p>          
                 </li>
                 <li>             
                     <h3>“Some old wounds never truly heal, and bleed again at the <span>slightest word</span>. </h3>
                     <p>― George R.R. Martin, A Game of Thrones</p>               
                 </li>
              </ul>
          </div>
      </div>
</div>
</div> <!--End Slider Section-->


            <div class=\"content\"><!--Content Section-->
                
            ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "

            
            <div class=\"about-section\" id=\"aboutus\"><!--King Of The North Section-->
                
                <div class=\"about-grids\">

                <div class=\"col-md-6 left-grid\">

<div class=\"right-grid1-icon\">
                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon.png"), "html", null, true);
        echo "\"> <!--Put your Central Icon HERE-->
                    </div>
                    <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pic1.gif"), "html", null, true);
        echo "\"/><!--Put your Right Image HERE-->
                    </div>
                    <div class=\"col-md-6 right-grid\">
                        <div class=\"right-top\">
                        <h3>King of the <span>North</span></h3>
                        <p>King in the North was the title given to the ruler of the North during its time as an independent kingdom, before the coming of the Targaryens.</p>
                        <p class=\"lable1\">A colloquial title also used for the rulers of the North was the \"Kings of Winter\". House Stark ruled as Kings in the North for thousands of years.
                            </p>
                        <p class=\"lable1\">The ancient Kings of Winter, House Stark ruled as Kings in the North stretching back into the mists of time, before written history began six thousand years ago, when the Andals invaded all of southern Westeros.
                            </p>
                            </div>
                            <div class=\"right-bottom\">
                        <h4>\"There sits the only king I mean to bend my knee to:<br>the King in the North!\" <br> ―Lord Greatjon Umber, indicating King Robb Stark<h4>
                        </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                        </div>
                </div><!--End King Of The North Section-->
                <div class=\"services-section\" id=\"service\"><!--Synopsis Section-->
                    <div class=\"container\">
                        <div class=\"col-md-6 service-leftgrid\">
                            
                            <h3><img src=\"images/icon1.png\">Season <span>5</span></h3>
                            <p>Season 5 of Game of Thrones was commissioned by HBO on 8 April 2014, following a substantial increase in audience figures between the third and fourth seasons. The fifth and sixth seasons were commissioned simultaneously, the first time HBO has commissioned two seasons at once for a major drama series.
                            </p>
                            </div>
                            <div class=\"col-md-6 service-rightgrid\">
                                <div class=\"service1\">
                                <div class=\"right-grid1\">
                                <img src=\"images/img1.png\">
                                </div>
                                <div class=\"right-grid2\">
                                    <br><h4>Khaleesi</h4>
                                        <p>Khaleesi is a Dothraki title referring to the wife of the khal. A khaleesi's status varies greatly from khalasar to khalasar. </p>
                            </div>
                            <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"service2\">
                                <div class=\"right-grid1\">
                                <img src=\"images/img2.png\">
                                </div>
                                <div class=\"right-grid2\">
                                    <h4>Margaery Tyrell</h4>
                                        <p>Margaery Tyrell is a major character in the second, third, fourth and fifth seasons. She is played by Natalie Dormer and debuts in \"What is Dead May Never Die.</p>
                            </div>
                            <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"service3\">
                                <div class=\"right-grid1\">
                                <img src=\"images/img3.png\">
                                </div>
                                <div class=\"right-grid2\">
                                    <h4>Game of Thrones on HBO</h4>
                                        <p>The official website for Game of Thrones on HBO, featuring videos, images, schedule information and episode guides.</p>
                            </div>
                            <div class=\"clearfix\"> </div>
                            </div>
                                </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div><!--End Synopsis Section-->
                    <div class=\"portfolio-section\" id=\"portfolio\"><!--Portfolio Section-->
                        <div class=\"continer\">
                            <div class=\"portfolio-header\">
                                
                                <h3><img src=\"images/img3.png\"><span>Dead</span> party.</h3>
                                <p>All died since the beginning of the series.</p>
                                </div>
                                 <div class=\"portfolio\"  id=\"portfolio\">
                    <ul id=\"filters\" class=\"clearfix\">
                            <li><span class=\"filter active\" data-filter=\"app card icon web\">Season 5</span></li>
                            <li><span class=\"filter\" data-filter=\"app\">Season 4</span></li>
                            <li><span class=\"filter\" data-filter=\"card\">Season 3</span></li>
                            <li><span class=\"filter\" data-filter=\"app card icon\">Season 2</span></li>
                            <li><span class=\"filter\" data-filter=\"card icon web\">Season 1</span></li>
                            </ul>
        <!-- portfolio-section -->
        </div>
    <div id=\"portfoliolist\">
                    <div class=\"portfolio card mix_all\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/1.jpg\" class=\"swipebox\"  title=\"Image Title\"> 
                                <img src=\"images/1.jpg\" class=\"img-responsive\" alt=\"\"> <!-- Put your image here -->
                                <span class=\"zoom-icon\"></span> </a></div></div>    

                    <div class=\"portfolio app mix_all \" data-cat=\"app\" style=\"display: inline-block; opacity: 1; \">
                        <div class=\"portfolio-wrapper grid_box\">        
                             <a href=\"images/2.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/2.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>                  
                    <div class=\"portfolio card mix_all\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/3.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/3.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>      
                    <div class=\"portfolio app mix_all\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/4.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/4.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>  
                
                    <div class=\"portfolio card mix_all\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/5.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/5.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>      
                    <div class=\"portfolio icon mix_all\" data-cat=\"icon\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/6.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/6.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>  
                    
                    <div class=\"portfolio card mix_all\" data-cat=\" web\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/7.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/7.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>      
                    <div class=\"portfolio card mix_all\" data-cat=\"icon\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">        
                            <a href=\"images/8.jpg\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"images/8.jpg\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a><!-- Put your image here -->
                        </div>
                    </div>                                          
                    <div class=\"clearfix\"> </div>                               
                </div>
                    <div class=\"clearfix\"> </div>
    </div><!--End Portfolio Section-->
                            
      <!-- Script for gallery Here -->
                <script type=\"text/javascript\" src=\"js/jquery.mixitup.min.js\"></script>
                    <script type=\"text/javascript\">
                    \$(function () {
                        
                        var filterList = {
                        
                            init: function () {
                            
                                // MixItUp plugin
                                // http://mixitup.io
                                \$('#portfoliolist').mixitup({
                                    targetSelector: '.portfolio',
                                    filterSelector: '.filter',
                                    effects: ['fade'],
                                    easing: 'snap',
                                    // call the hover effect
                                    onMixEnd: filterList.hoverEffect()
                                });             
                            
                            },
                            
                            hoverEffect: function () {
                            
                                // Simple parallax effect
                                \$('#portfoliolist .portfolio').hover(
                                    function () {
                                        \$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                        \$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');             
                                    },
                                    function () {
                                        \$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                        \$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');                               
                                    }       
                                );              
                            
                            }
                
                        };
                        
                        // Run the show!
                        filterList.init();
                        
                        
                    }); 
                    </script>
<!-- End portfolio-section  -->
</div>
<!-- QUotes -->
                <div class=\"testimonial-section\" id=\"testimonial\">
                        <div class=\"container\">
                            <div class=\"testimonial-header\">
                                
                                <h3><img src=\"images/icon3.png\"> Best <span>Quotes</span></h3>
                                <p>Best quotes in Game of Thrones.</p>
                                </div> <div class=\"wmuSlider example1\">
            <div class=\"container-flueid\">
                <article style=\"position: absolute;\"> 
                    <div class=\" cont span_2_of_3  client-main\">
                            <div class=\"slide-text\">
                                <h4> “Why is it that when one man builds a wall, the next man immediately needs to know what's on the other side?”</h4>
                               <img src=\"images/icon8.png\">
                         </div>
                    </div>
                 </article>
                 <article style=\"position: absolute;\"> 
                    <div class=\" cont span_2_of_3  client-main\">
                            <div class=\"slide-text\">
                                <h4> “Once you’ve accepted your flaws, no one can use them against you.”</h4>
                                <img src=\"images/icon8.png\">    
                            </div> 
                    </div>
                 </article>
                 <article style=\"position: absolute;\"> 
                    <div class=\"cont span_2_of_3  client-main\">
                            <div class=\"slide-text\">
                                <h4> ‘Tears aren’t a woman’s only weapon. The best one’s between your legs. ’</h4>
                            <img src=\"images/icon9.png\">
                            </div>
                    </div>
                 </article>
                 <article style=\"position: absolute;\"> 
                    <div class=\"cont span_2_of_3  client-main\">
                            <div class=\"slide-text\">
                                <h4> ‘I am not questioning your honor, I am denying its existence.’</h4>
                            <img src=\"images/icon8.png\">
                            </div>
                    </div>
                 </article>
                 <article style=\"position: absolute;\"> 
                    <div class=\"cont span_2_of_3  client-main\">
                            <div class=\"slide-text\">
                                <h4> ‘You are as big a fool as every other man. That little worm between your legs does half your thinking.’</h4>
                                <img src=\"images/icon9.png\">
                            </div>
                    </div>
                 </article>
                 
                  <script src=\"js/jquery.wmuSlider.js\"></script> 
                    <script>
                         \$('.example1').wmuSlider();         
                    </script>   
                        <div class=\"clearfix\"> </div>
             </div>
         </div>
     </div>
     </div>
    <div class=\"team-section\" id=\"team\"><!-- John Snow -->
                <div class=\"container\">
                            <div class=\"team-header\">
                                
                                <h3><img src=\"images/icon1.png\"> About <span>Me</span></h3>

                                <p>Hello, i'm John Snow, webdesigner.</p>
                                </div>
                                <div class=\"team-grids\">
                                    <div class=\"col-md-4 team-grid\">
                                        <img src=\"images/t1.jpg\">
                            </div>
                                    <div class=\"team-grids\">
                                    <div class=\"col-md-8 team-grid\">
                                        <div class=\"team-content\">
                                            <h4>John Snow</h4><br><br><br><br>
                                            <h3>Webdesigner</h3><h2>In North</h2>
                                            <br>
                                        <p> i'm the bastard son of Eddard Stark, by a mother whose identity is a source of speculation. Raised by his father alongside his true-born half-siblings, but joins the Night's Watch when i nears adulthood. i'm constantly accompanied by my albino direwolf Ghost. At the beginning of A Game of Thrones, i fourteen years old. i'm one of the major POV characters in the books.</p>
                                        </div>
                        </div>
                            </div>
                        <div class=\"clearfix\"> </div>
                            </div> 
                            </div>
                        </div><!-- End John Snow -->



                        <div class=\"kill-now-section\" id=\"kill-now\">
                        <div class=\"container\">
                            <div class=\"kill-now-header\">
                                
                            <h3><img src=\"images/img3.png\"> GoT <span>Family</span></h3>
                                <p>The big family in Game Of Thrones</p>
                                </div>
                                <div class=\"kill-now-grids\"><!-- Columns 1 -->
                                    <div class=\"col-md-4 pric-grid effect\">
                                        <div class=\"pric-top\">
                                            <span>1</span>                                          
                                            <h4>Stark</h4>
                                        </div>
                                        <div class=\"pric-list\">
                                            <ul>
                                                <li>Edard Stark</li>
                                                <li>Catelyn Stark</li>
                                                <li>Robb Stark</li>
                                                <li>Arya Stark</li>
                                                <li>John Snow</li>
                                             </ul>
                                        <p><a href=\"\">Kill now</a></p>
                                        </div>
                                        </div>
                                        <div class=\"col-md-4 pric-grid effect\"><!-- Columns 2 -->
                                        <div class=\"pric-top\">
                                            <span>2</span>                                          
                                            <h4>Lannister</h4>
                                        </div>
                                        <div class=\"pric-list\">
                                            <ul>
                                            <li>Tywin Lannister</li>
                                                <li>Jaime Lannister</li>
                                                <li>Tyrion Lannister</li>
                                                <li>Cersei Lannister</li>
                                                <li>Joffrey Lannister</li>
                                            </ul>
                                        <p><a href=\"\">Kill now</a></p>
                                        </div>
                                        </div>
                                        <div class=\"col-md-4 pric-grid effect\"><!-- Columns 3 -->
                                        <div class=\"pric-top\">
                                            <span>3</span>                                          
                                            <h4>Targaryen</h4>
                                        </div>
                                        <div class=\"pric-list\">
                                            <ul>
                                                <li>Khaleesi</li>
                                                <li>Jorah Mormont</li>
                                                <li>Khal Drogo</li>
                                                <li>Viserys Targaryen</li>
                                                <li>Jorah Mormont</li>
                                        </ul>
                                        <p><a href=\"\">Kill now</a></p>
                                        </div>
                                        </div>
                                        <div class=\"clearfix\"> </div>
                                    </div>
                            </div>
                        </div>


                        <!--Contact Section-->
                    <div class=\"contact-section\" id=\"contact\">
                        <div class=\"contact-grids\">
                            <div class=\"col-md-6 contact-leftgrid\">
                            <!--Title Contact Section-->
                                <h3><img src=\"images/icon7.png\"> Send me a <span>Sword</span></h3>
                                <p>Kill me with a sword, please.</p>
                                <!--End Title Contact Section-->
                            <form>
                                <input type=\"text\" class=\"text\" value=\"Name \" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name ';}\">
                                 <input type=\"text\" class=\"text\" value=\"Email \" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email ';}\">
                                    <textarea value=\"Message\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Message';}\">Message </textarea>
                                        <input type=\"submit\" value=\"SEND\">
                                </form>
                            </div>
                            <!--Google Maps Section-->
                            <div class=\"col-md-6 contact-rightgrid\">
                                <div class=\"google-map\">
                                    <img src=\"images/map.jpg\"> </img>
                                    </div>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        
                        </div>
                        </div>
                    </div> <!--End Contact Section-->
                    
            <div class=\"footer-section\">
                                <div class=\"container\">
                                    
                                    <div class=\"footer-top\">
                                    <p> Designed by <a href=\"http://w3layouts.com\" target=\"target_blank\">Didier Laureaux</a></p>
                                </div>
                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            /*
                            var defaults = {
                                containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear' 
                            };
                            */
                            
                            \$().UItoTop({ easingType: 'easeOutQuart' });
                            
                        });
                    </script>
                <a class=\"scroll\" href=\"#head\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>


                </div>
            </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Game Of Thrones";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/swipebox.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<!------ Light Box ------>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.swipebox.min.j"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            \$(\".swipebox\").swipebox();
        });
    </script>
    <!------ Eng Light Box ------>

<!---- start-smoth-scrolling---->
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){     
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1200);
            });
        });
    </script>
<!---End-smoth-scrolling---->
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
 <script>
    \$(function () {
      \$(\"#slider\").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: \"callbacks\",
        pager: true,
      });
    });
  </script>
";
    }

    // line 123
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 123,  601 => 39,  588 => 29,  584 => 28,  572 => 19,  567 => 17,  563 => 15,  560 => 14,  554 => 12,  549 => 10,  544 => 9,  541 => 8,  535 => 5,  149 => 136,  144 => 134,  132 => 124,  130 => 123,  89 => 84,  85 => 82,  82 => 81,  78 => 79,  76 => 78,  70 => 75,  49 => 59,  40 => 52,  37 => 14,  35 => 8,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\GoT\\app\\Resources\\views\\base.html.twig");
    }
}
