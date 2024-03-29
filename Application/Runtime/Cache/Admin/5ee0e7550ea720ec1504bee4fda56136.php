<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>一家依-我的推荐</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="/Public/assets/js/jquery.min.js"></script>

    <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/assets/css/style.css"/>

</head>
<body class="job-list-container">
    <div class="job-list-container">
        <div class="job-list-header">我的推荐</div>
            <div class="job-list-line ">
                    <div class="job-list-info">
                        <div class="my-under-line-title" id="my_recommend" page="1">我的推荐</div>
                    </div>
                    <div class="my-under-line-container">
                        <div class="my-under-line-container-header am-g">
                            <div class="am-u-sm-3">姓名</div>
                            <div class="am-u-sm-5">手机</div>
                            <div class="am-u-sm-4">推荐日期</div>
                        </div>
                        <div id="recommend-container">
                            <?php if(is_array($recommend)): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$R): $mod = ($i % 2 );++$i;?><div class="my-under-line-container-content am-g">
                                    <div class="am-u-sm-3"><?php echo ($R["user_name"]); ?></div>
                                    <div class="am-u-sm-5"><?php echo ($R["telephone"]); ?></div>
                                    <div class="am-u-sm-4"><?php echo ($R["recommend_date"]); ?></div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>

                    </div>

                    <div class="job-list-detail-btn">
                        <button class="am-btn am-btn-success am-round" id="recommend-more">查看更多</button>
                    </div>
                </div>

        <div class="job-list-line ">
            <div class="job-list-info">
                <div class="my-under-line-title" page="1" id="my-fans">我的粉丝</div>
            </div>
            <div class="my-under-line-container" >
                <div class="my-under-line-container-header am-g">
                    <div class="am-u-sm-3">姓名</div>
                    <div class="am-u-sm-5">手机</div>
                    <div class="am-u-sm-4"></div>
                </div>
                <div id="fans-container" >
                    <?php if(is_array($fans)): $i = 0; $__LIST__ = $fans;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="my-under-line-container-content am-g">
                            <div class="am-u-sm-3"><?php echo ($vo["user_name"]); ?></div>
                            <div class="am-u-sm-5"><?php echo ($vo["telephone"]); ?></div>
                            <div class="am-u-sm-4"></div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>

            <div class="job-list-detail-btn">
                <button class="am-btn am-btn-success am-round" id="fans-more">加载更多</button>
            </div>
        </div>

        </div>
        <div class="job-list-footer">
        </div>
    </div>
<div>
  <div style="margin:0 0 20px 0"></div>
  <p style="text-align:center">© 2015 版权所有 一家依</p>
</div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">

        <li>
            <a href="/admin/index/yijiayi/id/<?php echo session('id');?>">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>

        <li>
            <a href="/admin/job/index/id/<?php echo session('id');?>">
                <span class="am-icon-briefcase"></span>
                <span class="am-navbar-label">职位</span>
            </a>
        </li>

        <li>
            <a href="/admin/usercenter/user_center" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">我</span>
            </a>
        </li>
    </ul>
</div>
</body>
<script>
    $current_url = window.location.pathname;
</script>
</html >

</body>
<script>
    if(<?php echo ($fans_end); ?> == 1){
        $('#fans-more').attr('disabled', true);
        $('#fans-more').text('没有更多');
    }else if(<?php echo ($recommend_end); ?> == 1){
        $('#recommend-more').attr('disabled', true);
        $('#recommend-more').text('没有更多');
    }
    $('#fans-more').on('click', function(){
        if($('#fans-more').attr('disabled') != 'disabled'){
            $('#fans-more').html('<span style="display: inline-block;"><i class="am-icon-spinner am-icon-spin"></i></span>');
            page = parseInt($('#my-fans').attr('page')) + 1;
//            console.log(page);
            $.ajax({
                url:'read_more_fans',
                data:{
                    page:page
                },
                type:'GET',
                dataType:'json',
                success:function(result){
                    $('#my-fans').attr('page', page);
//                    console.log(result);
//                    console.log('success');
                    var fans = result.fans;
                    var html = '';
                    if (fans != null){
                        for(var i=0; i < fans.length; i++){
                            html += '<div class="my-under-line-container-content am-g">'+
                            '<div class="am-u-sm-3">' + fans[i].user_name +'</div>'+
                            '<div class="am-u-sm-5">'+fans[i].telephone + '</div>'+
                            '<div class="am-u-sm-4"></div>'+
                            '</div>'
                        }
                        $('#fans-container').append(html);
//                        console.log(html);
                    }

                    if(result.is_end == 1){
                        $('#fans-more').attr('disabled', true);
                        $('#fans-more').text('没有更多');
                    }
                },
                error:function(request, status, error){
                    console.log('errro')
                }
            })
        }

    })

    $('#recommend-more').on('click', function(){
        if($('#recommend-more').attr('disabled') != 'disabled'){
            $('#recommend-more').html('<span style="display: inline-block;"><i class="am-icon-spinner am-icon-spin"></i></span>');
            page = parseInt($('#my_recommend').attr('page')) + 1;
            console.log(page);
            $.ajax({
                url:'read_more_recommend',
                data:{
                    page:page
                },
                type:'GET',
                dataType:'json',
                success:function(result){
                    $('#my_recommend').attr('page', page);
//                    console.log(result);
//                    console.log('success');
                    var recommends = result.recommends;
                    var html = '';
                    if (recommends != null){
                        for(var i=0; i < recommends.length; i++){
                            var recommend_date = '';
                            if(recommends[i].recommend_date != null){
                                recommend_date = recommends[i].recommend_date
                            }
                            html += '<div class="my-under-line-container-content am-g">'+
                            '<div class="am-u-sm-3">' + recommends[i].user_name +'</div>'+
                            '<div class="am-u-sm-5">'+recommends[i].telephone + '</div>'+
                            '<div class="am-u-sm-4">'+ recommend_date+'</div>'+
                            '</div>'
                        }
                        $('#recommend-container').append(html);
//                        console.log(html);
                    }

                    if(result.is_end == 1){
                        $('#recommend-more').attr('disabled', true);
                        $('#recommend-more').text('没有更多');
                    }
                },
                error:function(request, status, error){
                    console.log('errro')
                }
            })
        }

    })
</script>
</html>