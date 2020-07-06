<?php $this->load->view('head');?>
<div class="banner3" style="background:url(upload/<?=$top_category['image']?>);"></div>
<div class="container">
	<div class="wrap">
        <div class="box clear">
        	<div class="second_side fl">
                <div class="side_menu">
                    <h3 class="title"><?=$top_category['catname']?></h3>
                    <ul class="side_menu_list">
 <?php foreach ($cat[$top_category['id']]['child'] as $v){?>
	 <li <?php if($v['id']==$category['id']){echo "class='active'";}?>><a href="<?=$v['url']?>" ><?=$v['catname']?></a></li>
<?php }?>
                    </ul>
                </div>
            </div>
            <div class="second_main_pro fr">
            	<div class="breadmenu tl" style="position:relative; float:right;"><?php $this->load->view('sys_nav');?></div>
                <div class="se_title">
                	<h2><?=$category['catname']?></h2>
                </div>
            	<div class="cont">
                    <div class="content clear">
                        <!--放大镜-->
                        <div id="magnifierBox">
                            <div id="magnifierDiv1" class="divStyle">
                                <img src="<?=$data['res']['image']?>" alt="" height="241" width="364"><!--小图-->
                                <span style="display: none; left: 66px; top: 143px;" id="magnifierSon"></span><!--浮层-->
                            </div>
                            <div style="display: none;" id="magnifierDiv2" class="divStyle">
                                <img style="left: -93.7895px; top: -157px;" src="<?=$data['res']['image']?>" alt="" id="magnifierImg1" height="400" width="680"><!--大图-->
                            </div>
                        </div>
                        <!--放大镜结束-->
                        <div class="pro_con fr">
                        	<div class="tit"><?=$data['res']['title']?></div>
                            <div class="cont"><span class="fb">简介</span>:<?=$data['res']['des']?></div>
                        </div>
                    </div>
                    <div class="cl10"></div>
                    <div class="scroll_box">
                    	<div class="tab_card"><span class="active">产品详情</span></div>
                        <div class="tab_con">
                        	<div class="tab_con_pane" style="display:block;">
                            	<?=$data['res']['content']?>
                            </div>
                        	
                        </div>
                    </div>
                    <div class="cl30"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('foot');?>