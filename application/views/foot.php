<div class="copyright">
    <div class="wrap" style=" position:relative;">
    	<div class="cl10"></div>
        <p class="logobg">
        
          <img src="upload/<?=$setting['weixin']?>" width="90" height="90" />
          </p>
        <div class="link"><span>友情连接：</span>
 <?php
foreach($this->p->get_links() as $v){
 echo "<a href='{$v['url']}' target='_blank'>{$v['name']}</a> | ";
}
?>
         </div>
        <div class="cl30"></div>
        <div  class="foot_copy">
       <?=$setting['copy']?> 
        <span>技术支持：<a href="http://www.aisoker.com/" target="_blank">爱搜客建站</a></span>
        </div>
        
    </div>
</div>
<ul class="rightNav">
    
  <li class="text"><a href="message/">在线留言</a></li>
  
  <li class="text"><a href="article/6.html">联系我们</a></li>
   
    <li id="goTop"><a href="<?=$_SERVER['REQUEST_URI']?>#" title="返回顶部"><img src="skin/images/back.png"></a></li>
</ul>
</body>
</html>