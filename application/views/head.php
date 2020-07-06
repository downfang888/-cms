<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->load->view('sys_seo');?>
<base href="<?=base_url();?>" />
<link href="skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/require.min.js"></script>
</head>
<body>
<script type="text/javascript"> 
    function AddFavorite(){  
        if (document.all) {
            window.external.addFavorite(window.location.href, document.title);
        } 
        else if (window.sidebar) {
            window.sidebar.addPanel(document.title, window.location.href, "");
        }
    }
</script>
<div class="head">
  <div class="top">
    <div class="wrap clear">
      <div class="logo fl"> <a href="<?=base_url();?>"> <img src="upload/<?=$setting['logo']?>" height="63" /> </a> </div>
      <div class="infos fr clear">
        <p><em class="tel"></em>全国统一服务电话：<span> <?=$setting['tel']?></span></p>
        <div class="searchbox">
          <form action="<?=base_url();?>search/" target="_blank" method="get">
            <input class="text" type="text" name="q" />
            <input class="btn" type="submit" value="" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="menu" id="menu">
    <div class="wrap clear">
      <ul class="nav_ul clear">
       <li class="nav_li  <?php if(empty($top_category['tablename'])){ echo "active";}?>"><h2><a href="<?=base_url();?>">首页</a></h2></li>
      <?php foreach ($cat as $v){?>
      <li class="nav_li <?php if(isset($top_category['id']) && $top_category['id']==$v['id']){echo "active";}?>">
         <h2><a href="<?=$v['url']?>"><?=$v['catname']?></a></h2>
            <?php if(!empty($v['child'])){ ?>
              <div class="lists">
                 <ul class="list_ul">
                     <?php foreach ($v['child'] as $k){?>
                      <li class="list_li"><a href="<?=$k['url']?>"><?=$k['catname']?></a></li>
                     <?php }?> 
                 </ul>
             </div>
             <?php }?> 
             </li>
      <?php }?>
      </ul>
    </div>
  </div>
</div>