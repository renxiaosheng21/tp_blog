<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\wamp64\www\personalBlog\public/../application/index\view\article\index.html";i:1528467933;s:78:"D:\wamp64\www\personalBlog\public/../application/index\view\common\header.html";i:1528467933;s:77:"D:\wamp64\www\personalBlog\public/../application/index\view\common\right.html";i:1528467933;s:78:"D:\wamp64\www\personalBlog\public/../application/index\view\common\footer.html";i:1550719287;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>博客项目开发练手</title>
        <meta name="keywords" content="博客项目开发练手" />
        <meta name="description" content="博客项目开发练手" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet" />
		<script type='text/javascript' src='__PUBLIC__/style/ismobile.js'></script>
    </head>

    <body>
        <!--顶部通栏-->
<div class="ladytop">
            <div class="nav">
                <div class="left"><a href=""><img src="__PUBLIC__/images/hunshang.png" alt="wed114婚尚"></a></div>
                <div class="right">
                    <div class="box">
                        <a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a> 
                        <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('cate/index',array('cateid'=>$value['id'])); ?>"  rel='dropmenu209'><?php echo $value['catename']; ?></a> 
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>

<div class="hotmenu">
	<div class="con">热门标签：
        <?php if(is_array($tagss) || $tagss instanceof \think\Collection || $tagss instanceof \think\Paginator): $i = 0; $__LIST__ = $tagss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <a href='http://127.0.0.1:81/personalBlog/public/index.php/index/search/index?keywords=<?php echo $v['tagname']; ?>'><?php echo $v['tagname']; ?></a> 
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
</div>

<!--顶部通栏-->

        <!--顶部通栏-->
        <script src='/jiehun/goto/my-65547.js' language='javascript'></script>

        <div class="position"><a href="<?php echo url('index/index'); ?>}">主页</a> > <a href="<?php echo url('cate/index',array('cateid'=>$cateres['id'])); ?>"><?php echo $cateres['catename']; ?></a> >  </div>

        <div class="overall">
            <div class="left">
                <div class="scrap">
                    <h1><?php echo $articleres['title']; ?></h1>
                    <div class="spread">
                        <span class="writor">发布时间：<?php echo date('Y-m-d',$articleres['time']); ?></span>
                        <span class="writor">编辑：<?php echo $articleres['author']; ?></span>
                        <span class="writor">标签：
                            <?php 
                                $arr=explode(',',$articleres['keywords']);
                                foreach($arr as $k => $v){
                                    echo "<a href='#'>$v</a>";
                                }
                            ?>
                        </span>
                        <span class="writor">热度：<?php echo $articleres['click']; ?></script></span>
                    </div>
                </div>

                <!--百度分享-->
                <script src='/jiehun/goto/my-65542.js' language='javascript'></script>

                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><?php echo $articleres['desc']; ?>
</p>
                    <span class="btn arr-right"></span>
                </div>

                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>
                <!-- 文章主体 -->
                <div class="substance">
                    <?php echo $articleres['content']; ?>
                </div>
                <!-- end文章主体 -->

                <div class="biaoqian">
                   
                </div>



                <!--相关阅读 -->
                <div class="xgread">
                    <div class="til"><h4>相关阅读</h4></div>
                    <div class="lef"><!--相关阅读主题链接--><script src='/jiehun/goto/my-65540.js' language='javascript'></script></div>
                    <div class="rig">
                        <ul>
                            <?php if(is_array($ralateres) || $ralateres instanceof \think\Collection || $ralateres instanceof \think\Paginator): $i = 0; $__LIST__ = $ralateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                                <li><a href='<?php echo url('article/index',array('arid'=>$value['id'])); ?>' target="_blank"><?php echo $value['title']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </ul>
                    </div>
                </div>

                <!--频道推荐-->
                <div class="hotsnew">
                    <div class="til"><h4>频道推荐</h4></div>
                    <ul>
                        <?php if(is_array($recres) || $recres instanceof \think\Collection || $recres instanceof \think\Paginator): $i = 0; $__LIST__ = $recres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                        <li>
                            <div class="tu">
                                <a href='<?php echo url('article/index',array('arid'=>$value['id'])); ?>' target="_blank">
                                    <img src="<?php if($value['pic'] != ''): ?>__IMG__<?php echo $value['pic']; else: ?>__PUBLIC__/images/error.png<?php endif; ?> " alt="<?php echo $value['title']; ?>"/>
                                </a>
                            </div>
                            <p><a href='<?php echo url('article/index',array('arid'=>$value['id'])); ?>'><?php echo $value['title']; ?></a></p>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>		
            </div>

    <!--右侧各种广告-->
    <!--猜你喜欢-->
        <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div class="right">
        <!--右侧各种广告-->
        <!--猜你喜欢-->
        <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
                <?php if(is_array($clicks) || $clicks instanceof \think\Collection || $clicks instanceof \think\Paginator): $i = 0; $__LIST__ = $clicks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                <li class="hm-t-item hm-t-item-img"><a data-pos="0" title="<?php echo $value['title']; ?>" target="_blank" href="<?php echo url('article/index',array('arid'=>$value['id'])); ?>" class="hm-t-img-title" style="visibility: visible;"><span><?php echo $value['title']; ?></span></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div></div></div>

    </div></div>
    <div style="height:15px"></div>
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
            <?php if(is_array($recs) || $recs instanceof \think\Collection || $recs instanceof \think\Paginator): $i = 0; $__LIST__ = $recs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
            <li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('article/index',array('arid'=>$value['id'])); ?>" target="_blank" title="<?php echo $value['title']; ?>" data-pos="0"><span><?php echo $value['title']; ?></span></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div></div></div>

</div></div>
<div style="height:15px"></div>

<div id="bdcs">
<div class="bdcs-container">
<meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  
<div id="default-searchbox" class="bdcs-main bdcs-clearfix">      
<div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          
<form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="<?php echo url('search/index'); ?>">                                                                                                                                   
<input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">              
<input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                       
</form>      
</div>                
<div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">              
<ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>          
</div>                  
</div>                           
</div>
</div>

<div style="height:15px">
</div>
</div>
    
</div>

<!--底部区域-->
<div class="footerd">
	<ul>
		<li>ThinkPHP个人博客项目</li>
	</ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="__PUBLIC__/images/js/count_zixun.js" language="JavaScript"></script></div>

    </body>
</html>