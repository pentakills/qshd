<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:31:"./template/pc/lists_product.htm";i:1590217257;s:55:"D:\phpStudy\PHPTutorial\WWW\bjhd\template\pc\header.htm";i:1590217258;s:55:"D:\phpStudy\PHPTutorial\WWW\bjhd\template\pc\footer.htm";i:1590458653;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/global.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/widget.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/variouscomponents.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/images.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/theme.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/color_0.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min.js"></script>
<!--[if !IE]><!-->
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<!--<![endif]-->
<!--[if gte IE 9]>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<![endif]-->
<!--[if lt IE 9]>
      <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome-ie7.min.css">
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/selectivizr.js"></script>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/html5shiv.min.js"></script>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/respond.min.js"></script>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/modernizr.min.js"></script>
    <![endif]-->
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/lightbox.min.css" rel="stylesheet">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.superslide.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/common.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/theme.js"></script>
<!-- feib -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/layer.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/language.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/ajax-url.js"></script>
<!-- plugins -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.formsvalidation.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.nodecommon.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/extend.js"></script>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.min.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/animate.min.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/components.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.menu_style.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.init.js"></script>
<script type="text/javascript">
$(function(){
    dataAnimate();
    (function($,lanno){
        if(lanno === "" || lanno === "default"){
            return '';
        }
        $(".w-languege").each(function(){
            $(this).find("a").each(function(){
                if($(this).data("lanno") === lanno){
                    $(this).addClass("cur");
                }else{
                    if($(this).hasClass("cur")){
                        $(this).removeClass("cur");
                    }
                }
            });
        });
    })(jQuery,"cn");
});
</script>
</head>
<body>
<div class="body"> <div class="w-container w-header w-header-common">
    <div class="row clearfix" style="background: url(template/pc/skin/img/db1.jpg);">
      <div class="mobile-nav-toggle"><i class="fa fa-navicon fa-2x"></i></div>
      <div class="nav_right_mask"></div>
      <div class="row_top">
        <div class="row_top_in clearfix">
          <div class="column column6">
            <div class="col-logo">
              <div class="w-logo">
            <h1 style="display:none;"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"></a></h1>
            <a  href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"  class="w-logo-img"  > <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>"/> </a> </div>
            </div>
          </div>
          <div class="column column6 clearfix">
            <div class="topLogBox topLogBoxPc">
              <div class="topLogBox-in">
                <div class="lscPc clearfix"> </div>
                <div class="searchPc clearfix"> </div>
                <div class="clearfix">
                  <div class="w-custom">
                    <div class="li-div" >
                      <div class="w-text"  style="">
                        <div style="overflow:hidden;">
                          <div style="float:right;"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/59f2a2f3cfdf2.png" style="float:left; margin-top:5px; "/>
                            <div style="font-style:italic; color:#fff; margin-left:50px;">咨询热线<br/>
                              <span style="color:#fff; font-size:20px; font-weight:bold;margin-right: 10px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menuPc">
        <div class="menuPc_in">
          <div class="w-nav g-active-add">
            <div class="w-nav-in">
              <ul class="nav_inner clearfix" id="g-web-ul-menu" style="display:none;">
                <li  class="<?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>"><a href = "<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" >首页</a><i class="nav_simpline_cur"></i></li>
              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
              <li  class="<?php echo $field['currentstyle']; ?>">
                <div class="li-parent-div li-parentOne-div"><a href = "<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><i class="fa fa-plus"></i><?php endif; ?> </a></div>
                <i class="nav_simpline_cur"></i> <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
                <div class="submenu">
                  <div class="back-div"><i class="fa fa-angle-left"></i><span>返回</span></div>
                  <ul>
                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,10, true) : $field['children']->slice(0,10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
                    <li><a href = "<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li>
                    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                  </ul>
                </div>
                <?php endif; ?> </li>
              <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                <div class="nav_moveBox"></div>
              </ul>
            </div>
          </div>
           
        </div>
      </div>
      <div class="col-right clearfix">
        <div class="w-nav g-active-add">
          <div class="w-nav-in">
            <ul class="nav_inner clearfix">
              <li  class="<?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>"><a href = "<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" >首页</a><i class="nav_simpline_cur"></i></li>
              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
              <li  class="<?php echo $field['currentstyle']; ?>">
                <div class="li-parent-div li-parentOne-div"><a href = "<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><i class="fa fa-plus"></i><?php endif; ?> </a></div>
                <i class="nav_simpline_cur"></i> <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
                <div class="submenu">
                  <div class="back-div"><i class="fa fa-angle-left"></i><span>返回</span></div>
                  <ul>
                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,5, true) : $field['children']->slice(0,5, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
                    <li><a href = "<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li>
                    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                  </ul>
                </div>
                <?php endif; ?> </li>
              <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
              <div class="nav_moveBox"></div>
            </ul>
          </div>
        </div>
        
        <div class="topLogBox topLogBoxTel">
          <div class="topLogBox-in"> </div>
        </div>
      </div>
    </div>
  </div>
  <section class="w-container bannerBox ">
    <div class="banner"> <img src="<?php if(!(empty($eyou['field']['banner']) || (($eyou['field']['banner'] instanceof \think\Collection || $eyou['field']['banner'] instanceof \think\Paginator ) && $eyou['field']['banner']->isEmpty()))): ?><?php echo $eyou['field']['banner']; else: ?><?php echo gettoptype($eyou['field']['typeid'],'banner'); endif; ?>" alt="<?php echo $eyou['field']['typename']; ?>" title="" style=""  /><span style="display:none;">none</span></div>
  </section>
    <div class="w-container w-main">
    <div class="row">
      <div class="wrap-content-in w-system w-productcom">
        <div class="w-system-in"> 
          <div class="side_bar">
            <div class="w-com-menu w-com-menu-V">
              <div class="w-com-menu-in">
                <div class="systitle">
                  <div class="systitle-in"><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></div>
                  <i class="fa icon_menuControl"></i></div>
                <ul class="ul-parent">
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "cur"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
                <li class="li-parent <?php echo $field['currentstyle']; ?>" >
                  <div class="div-parent"> <a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a><span class="menu_simpline_cur"></span></div>
                </li>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="side_left">
            <style type="text/css">
        .w-prd-list1 .w-prd-list-cell{ width:24.99%; *width:24.98%;}
    </style>
            <div class="crumbs">
              <div class="crumbs_in">您当前的位置: &nbsp; <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?></div>
            </div>
            <div class="w-prd-list w-prd-list1 prd_imgScaleBig" id="n4">
              <div class="w-prd-list-in clearfix">
              <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 12, "", "", "desc");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
                <div class="w-prd-list-cell">
                  <div class="w-prd-list-cell-in">
                    <div class="w-prd-con">
                      <div class="w-prd-imgbox" title="<?php echo $field['title']; ?>"> <a target="_self" href="<?php echo $field['arcurl']; ?>" class="img-count w-prd-img">
                        <div class="aspectRatio" style="padding-bottom:100%"></div>
                        <div class="img-count-in"><img alt="<?php echo $field['title']; ?>" src="<?php echo $field['litpic']; ?>" /></div>
                        </a> </div>
                      <div class="w-prd-infobox"  style="text-align:left">
                        <h2 class="w-prd-name" title="<?php echo $field['title']; ?>"> <a target="_self" href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a> </h2>
                      </div>
                    </div>
                  </div>
                </div>
              <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>  
              </div>
            </div>
           <div class="next1">  <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pre,pageno,next,end", "2"); echo $__VALUE__; ?></div>
          </div>
          <script type="text/javascript">
    $(function () {
        $("#n4").listRow({
            row:4,
            rowList: ".w-prd-list-cell",
            rowFind: ".w-prd-infobox"
        });
    });
</script> 
        </div>
      </div>
    </div>
  </div>
  <div class="w-container w-footer">
    <div class="w-footer-section pdTop-big pdBottom-big" >
      <div class="w-footer-in" style="max-width:;">
        <div class="foot-mask" ></div>
        <div class="w-foot-content  pdTop-default pdBottom-default" data-id="521382" data-type="31">
          <div class="li-div" data-comunique="cd01d5532bec73202c485ed5e9231abf">
            <div class="w-text"  style="">
            	<img style="float: right;" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?>" />
              <p>咨询热线：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>&nbsp;&nbsp;&nbsp;&nbsp;座机/传真：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?>&nbsp;&nbsp;&nbsp;&nbsp;邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?></p>
              <p>公司地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?></p>
              <p><?php echo htmlspecialchars_decode($global['web_copyright']); ?>--技术支持：<a href="http://www.0917bjms.com/">麦思科技</a> &nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>
<!--              <script type="text/javascript">document.write(unescape("%3Cspan id='cnzz_stat_icon_1278760977'%3E%3C/span%3E%3Cscript src='https://s9.cnzz.com/z_stat.php%3Fid%3D1278760977%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
 -->              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-service-fixed">
      <div class="service-item bg_s_default color_s_default aHoverbg_deepen aHovercolor_deepen service-item-top"> <i class="fa fa-caret-up"></i>
        <div class="top" onclick="$('body,html').animate({scrollTop: 0}, 'normal');">TOP</div>
      </div>
      <script type="text/javascript">
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 20) {
                    $('.w-service-fixed .service-item-top').show();
                } else {
                    $('.w-service-fixed .service-item-top').hide();
                }
            });
        });
    </script> 
    </div>
  </div>
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?>
<!-- 应用插件标签 start -->
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
<!-- 应用插件标签 end -->
</div>
<div class="topTel" onclick="$('body,html').animate({scrollTop: 0}, 500);"><i class="fa fa-arrow-up"></i></div>

<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.global.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.form.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.product_list.js"></script> 
</body>
</html>