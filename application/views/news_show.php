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
            <div class="second_main fr">
            	<div class="breadmenu tl" style="position:relative; float:right;"><?php $this->load->view('sys_nav');?></div>
                <div class="se_title">
                	<h2><?=$category['catname']?></h2>
                </div>
            	<div class="cont">
                	<div class="tit">
                    	  <h1><?=$data['res']['title']?></h1>
                    	<div class="date_msg">发布时间：：<?=date('Y-m-d',$data['res']['uptime'])?></div>
                    </div>
                    <div class="content">
                    	<?=$data['res']['content']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('foot');?>