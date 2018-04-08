<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>



<section class="container sidebar">
    <div class="row">
        <div class="col-md-3">
            <h2 class="title">
                幣種
            </h2>
            <div class="sidebar-group">
                <?php

				   $args = array('category_name' => 'currencies');
				   $category_posts = new WP_Query($args);

				   if($category_posts->have_posts()) : 
				      while($category_posts->have_posts()) : 
				         $category_posts->the_post();
				?>

		         <?php 
					// if ( in_category( 'currencies' ) ) : 
					$title= str_ireplace('"', '', trim(get_the_title()));  
					$desc= str_ireplace('"', '', trim(get_the_content()));
				?>	
					<a href="<?php the_permalink(); ?>" class="item-coin">

	                    <div class="avatar">
	                        <img src="<?php the_field('cp_img'); ?>" alt="" />
	                    </div>
	                    <div class="title">
	                        <p><?php echo $title; ?></p>
	                    </div>
	                    
	                </a>    

				<?php
				      endwhile;
				   else : 
				?>

				      <!-- NO POSTS -->

				<?php
				   endif;
				?>

            </div>
        </div>
        <div class="coin-main col-md-9">
            <h2 class="title">
                細節
            </h2>
            <div class="content">
                <div class="comp-cointop">
                    
                    <div class="left">
                        <img src="<?php the_field('cp_img'); ?>" alt="" />
                    </div>
                    <div class="right">
                        <h2><?php the_field('cp_name'); ?></h2>
                        <p><a href="<?php the_field('cp_slug'); ?>"><?php the_field('cp_slug'); ?></a>  </p>
                    </div>
                    
                </div>
                
                <div class="comp-coindesc">
                    <h4 class="title">理念</h4>
                    <div class="desc">
                        <?php the_field('理念'); ?>
                    </div>
                </div>
                <div class="comp-coindesc">
                    <h4 class="title">未來應用</h4>
                    <div class="desc">
                        <?php the_field('未來應用'); ?>
                    </div>
                </div>
                <div class="comp-coindesc">
                    <h4 class="title">生活化應用場景</h4>
                    <div class="desc">
                        <?php the_field('生活化應用場景'); ?>
                    </div>
                </div>
                <div class="comp-coindesc widget">
                    <script type="text/javascript">
                        baseUrl = "https://widgets.cryptocompare.com/";
                        var scripts = document.getElementsByTagName("script");
                        var embedder = scripts[ scripts.length - 1 ];
                        (function (){
                        var appName = encodeURIComponent(window.location.hostname);
                        if(appName==""){appName="local";}
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        var theUrl = baseUrl+'serve/v1/coin/chart?fsym=<?php the_field('cp_slug'); ?>&tsym=USD';
                        s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                        embedder.parentNode.appendChild(s);
                        })();
                    </script>
                </div>
                
                <div class="row">
                    <div class="col-md-6 padding">
                        <div class="comp-coindesc">
                            <h4 class="title">歷史事件時間線</h4>
                            <div class="desc">
                                 <?php the_field('歷史事件時間線'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 padding">
                        <div class="comp-coindesc">
                            <h4 class="title">經營方向</h4>
                            <div class="desc">
                                <?php the_field('經營方向'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="comp-coindesc">
                        <h4 class="title">團隊</h4>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="coin-person">
                                    <img class="img-circle" src="<?php the_field('團隊_成員圖片1'); ?>" height="150">
                                    <div class="separator"></div>
                                    <h4><?php the_field('團隊_成員名稱1'); ?></h4>
                                    <p><?php the_field('團隊_成員介紹1'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="coin-person">
                                    <img class="img-circle" src="<?php the_field('團隊_成員圖片2'); ?>" height="150">
                                    <div class="separator"></div>
                                    <h4><?php the_field('團隊_成員名稱2'); ?></h4>
                                    <p><?php the_field('團隊_成員介紹2'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="coin-person">
                                    <img class="img-circle" src="<?php the_field('團隊_成員圖片3'); ?>" height="150">
                                    <div class="separator"></div>
                                    <h4><?php the_field('團隊_成員名稱3'); ?></h4>
                                    <p><?php the_field('團隊_成員介紹3'); ?></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="comp-coindesc">
                        <h4 class="title">合作夥伴和投資人</h4>
                        <div class="desc">
                            <?php the_field('合作夥伴和投資人'); ?>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
