<?php $this->load->view('head');?>
<div class="banner">
  <div id="play">
        <div class="packet imgbox">
            <ul>
<?php foreach($this->p->get_poster(18) as $v){
 echo "<li><img src='{$v['image']}' alt='{$v['name']}' /></li>";
}?>             
            </ul>
            <div class="wrap" style="position:relative; z-index:99999;">
                <ol class="clear">
<?php $nn=1; foreach($this->p->get_poster(18) as $v){
  if($nn==1){
     echo '<li class="active">'.$nn.'</li>';
  }else{
     echo '<li>'.$nn.'</li>';
  }
$nn++;}?>                     
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="wrap">
        <div class="successAL">
            <div class="big_title">
                <a href="/DE15006/channels/433.html" class="more">more+</a>
                <h3>产品中心</h3>
            </div>
            <div id="my_sc_box">
                <div id="my_scroll" style="width: 2080px; left: -798.5px;">
                    <div id="my_div1">
<?php foreach($this->p->get_list(6,'product') as $v){ ?>
   <div class="my_sc_Div"><p><a href="product/show/<?=$v['id']?>.html" class="my_sc_a"><img src="<?=$v['image']?>" width="224" height="150" /></a></p></div>
<?php }?>  
                    </div>
                    <div id="my_div2">
 <?php $nn=0; foreach($this->p->get_list(12,'product') as $v){ if($nn>5){?>
   <div class="my_sc_Div"><p><a href="product/show/<?=$v['id']?>.html" class="my_sc_a"><img src="<?=$v['image']?>" width="224" height="150" /></a></p></div>
<?php }$nn++;}?>
                    </div>
                </div>
            </div>
      </div>
        <div class="clear">
          <div class="blank_pane fl">
              <div class="big_title">
                    <h3>公司简介</h3>
                </div>
                <div class="con">
                  <div class="cl15"></div>
                  <p><?php echo str_cut(strip_tags($this->p->get_article(2,'content')),400)?><a href="article/2.html" class="fr">详情>></a></p>
                </div>
            </div>
            <div class="blank_pane fr">
              <div class="big_title">
                  <a href="article/52.html" class="more">more+</a>
                    <h3>服务项目</h3>
                </div>
                <div class="con">
                
             <?php $nn=0; foreach ($cat[52]['child'] as $v){ if($nn<2){?>
     
              <div class="pic_list clear">
                      <div class="imgbox fl"><img src="upload/<?=$v['image']?>" width="127" height="80" /></div>
                        <div class="infos fr">
                          <h3><a href="<?=$v['url']?>"><?=$v['catname']?></a></h3>
                            <p><?php echo str_cut(strip_tags($this->p->get_article($v['id'],'content')),90)?><a href="<?=$v['url']?>" class="fr">【阅读详细】</a></p>
                        </div>
                    </div>
		  <?php $nn++; }}?> 
                    
                </div>
            </div>
        </div>
        <div class="clear">
          <div class="blank_pane fl">
              <div class="big_title">
                  <a href="news/" class="more">more+</a>
                    <h3>最新动态</h3>
                </div>
                <div class="con">
                  <div class="newslist2">

 <ul>
 <?php foreach($this->p->get_list(6,'news') as $v){ ?>
      <li><span ><?=date('Y-m-d',$v['uptime'])?></span><a href="news/show/<?=$v['id']?>.html"><?=$v['title']?></a></li>
<?php } ?> 

 </ul>   
                    </div>
                </div>
            </div>
            <div class="blank_pane fr">
              <div class="big_title">
                    <h3>联系我们</h3>
                </div>
                <div class="con clear">
                  <div class="cl20"></div>
                    
                    <div class="mapBox"><img src="skin/images/ditu.jpg" width="170" height="165" /></div>
                    <div class="map_infos fr">
                      <?=$setting['index_c']?>
                    </div>
                    
                </div>
            </div>

        </div>
        <div class="cl30"></div>
    </div>
</div>

<?php $this->load->view('foot');?>