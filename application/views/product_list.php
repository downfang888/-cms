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
                	<ul class="pic_list clear">
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
  <li><div class="imgbox"><a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank"><img src="<?=$v['image']?>"></a></div>
         <p><a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html"><?=$v['title']?></a></p>
   </li>  
<?php }}else{?>	
	<div style="padding:10px; color:#FF0000">暂无数据!</div>		
<?php } ?>                  
                    </ul>
                    <div class="page"><?=$pages?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('foot');?>