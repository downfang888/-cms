<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
		$("#name").formValidator({onshow:"请输入会员组名称",onfocus:"请输入会员组名称"}).inputValidator({min:2,max:30,onerror:"2-30个字符之间"});

	
});
//-->
</script>


<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/member/group_add" method="post">
<div class="pad-10">
<div class="col-tab">
<ul class="tabBut cu-li"> 
  <li id="tab_setting_1" class="on">新增会员组名称</li>
</ul>

<div class="contentList pad-10">
<table width="100%" class="table_form">
<tr>
        <th width="100">会员组名称：</th>
        <td><input type="text" name="info[name]" id="name" class="input-text" size="20" value="" /> </td>
      </tr>


</table>

</div>

 <div class="nav10"></div>
    <input name="dosubmit" id="dosubmit" type="submit" value="提交" class="button">
</div>
</div>
</form>
</body>
</html>





