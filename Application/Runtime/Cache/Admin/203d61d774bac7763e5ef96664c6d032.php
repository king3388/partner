<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.2.1/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/assets/css//style.css">
    <script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdn.amazeui.org/amazeui/2.2.1/js/amazeui.min.js"></script>
    <link rel="alternate icon" type="image/png" href="/Public/assets/img//logo.png">
    <title>个人中心</title>
    <style>

    </style>
</head>
<body class="mine-body">


<div id="container">
    <div class="container-header">
        <div class="container-header-user">
            <a href="/admin/usercenter/user_info">
                <img class="am-circle" src="/Public/assets/img//head_image.jpg">
            </a>


        </div>
        <div class="container-header-text"><?php echo ($user["user_name"]); ?></div>
    </div>
    <div class="container-context">
        <div class="context-line">
            <a href="/admin/usercenter/my_under_line">
            <div class="am-u-sm-1 coral-color"><span class="am-icon-users"></span></div>
            <div class="am-u-sm-10">
                <div>我的推荐</div>
            </div>
            <div class="am-u-sm-1"  >
                <span class="am-icon-angle-right"></span>
            </div>
            </a>
        </div>

        <div class="context-line" >
            <a href="/admin/usercenter/my_application">
                <div class="am-u-sm-1"><span class="am-icon-file-text"></span></div>
                <div class="am-u-sm-10">
                    <div>我的职位申请</div>
                </div>
                <div class="am-u-sm-1"><span class="am-icon-angle-right"></span></div>
            </a>

        </div>


        <div class="context-line">
            <a href="/admin/usercenter/my_commission">
                <div class="am-u-sm-1 success-color"><span class="am-icon-yen"></span></div>
                <div class="am-u-sm-10">
                    <div>我的钱包</div>
                </div>
                <div class="am-u-sm-1" ><span class="am-icon-angle-right"></span></div>
            </a>
        </div>
        <div class="context-line"  style="display: <?php echo ($see_all_commission); ?>">
            <div class="am-u-sm-1" ><span class="am-icon-yen"></span></div>
            <a href="/admin/usercenter/commission_management">
                <div class="am-u-sm-10">
                    <div>应付佣金</div>
                </div>
                <div class="am-u-sm-1" ><span class="am-icon-angle-right"></span></div>
            </a>

        </div>
        <div class="context-line" style="display: <?php echo ($see_all_application); ?>">
            <a href="/admin/usercenter/application_management">
                <div class="am-u-sm-1"><span class="am-icon-list"></span></div>
                <div class="am-u-sm-10">
                    <div>应聘信息</div>
                </div>
                <div class="am-u-sm-1"><span class="am-icon-angle-right"></span></div>
            </a>

        </div>
        <div class="context-line" style="display:<?php echo ($see_public_job); ?>">
            <a href="/admin/job/publish">
                <div class="am-u-sm-1"><span class="am-icon-plus"></span></div>
                <div class="am-u-sm-10">
                    <div>发布招聘信息</div>
                </div>
                <div class="am-u-sm-1"><span class="am-icon-angle-right"></span></div>
            </a>

        </div>


        <div class="context-line">
            <a href="/admin/usercenter/user_info">
                <div class="am-u-sm-1"><span class="am-icon-info"></span></div>
                <div class="am-u-sm-10">
                    <div>我的资料</div>
                </div>
                <div class="am-u-sm-1"><span class="am-icon-angle-right"></span></div>
            </a>

        </div>

        <div class="context-line-bottom">
            <div class="log-out">
                <button class="am-btn am-btn-danger am-round" id="log-out-btn">退出登录</button>
            </div>
        </div>


    </div>
</div>


<!--<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "-->
     <!--id="">-->
    <!--<ul class="am-navbar-nav am-cf am-avg-sm-4">-->

        <!--<li data-am-navbar-share>-->
            <!--<a href="###" style="color: #0078d2;">-->
                <!--<span class="am-icon-home"></span>-->
                <!--<span class="am-navbar-label">首页</span>-->
            <!--</a>-->
        <!--</li>-->

        <!--<li>-->
            <!--<a href="/admin/job/index" class="">-->
                <!--<span class="am-icon-briefcase"></span>-->
                <!--<span class="am-navbar-label">职位</span>-->
            <!--</a>-->
        <!--</li>-->
        <!--<li>-->
            <!--<a href="/admin/usercenter/user_center/user_name" class="">-->
                <!--<span class="am-icon-user"></span>-->
                <!--<span class="am-navbar-label">我</span>-->
            <!--</a>-->
        <!--</li>-->
    <!--</ul>-->
<!--</div>-->
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



<!-- 侧边栏内容 -->
<!--<div id="my-under-line" class="am-offcanvas">-->
    <!--<div class="am-offcanvas-bar  am-offcanvas-bar-flip am-offcanvas-bar-full-width">-->

        <!--<div class="am-offcanvas-content">-->
            <!--<div class="am-offcanvas-header am-g">-->
                <!--<div class="am-u-sm-1" id="my-under-line-back"><span class="am-icon-angle-left"></span></div>-->
                <!--<div class="am-u-sm-10">我的推荐</div>-->
                <!--<div class="am-u-sm-1">&nbsp;</div>-->
            <!--</div>-->
            <!--<div class="am-offcanvas-content-underline">-->
                <!--&lt;!&ndash;<div class="loading">&ndash;&gt;-->
                <!--&lt;!&ndash;<i class="am-icon-spinner am-icon-spin am-icon-lg"></i>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->

                <!--<div class="my-underline-list">-->
                    <!--<div class="my-underline-line-header am-g">-->
                        <!--<div class="am-u-sm-3">姓名代号</div>-->
                        <!--<div class="am-u-sm-3"></div>-->
                        <!--<div class="am-u-sm-3">上岗时间</div>-->
                        <!--<div class="am-u-sm-3"></div>-->
                    <!--</div>-->
                    <!--<?php if(is_array($underlines)): $i = 0; $__LIST__ = $underlines;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$line): $mod = ($i % 2 );++$i;?>-->
                        <!--<div class="my-underline-list">-->
                            <!--<div class="my-underline-line am-g">-->
                                <!--<div class="am-u-sm-3"><?php echo ($line["user_name"]); ?></div>-->
                                <!--<div class="am-u-sm-3"><?php echo ($line["date_of_process"]); ?></div>-->
                                <!--<div class="am-u-sm-3"><?php echo ($line["date_of_work"]); ?></div>-->
                                <!--<div class="am-u-sm-3"><?php echo ($line["status"]); ?></div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>-->

                <!--</div>-->

            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->


<!-- 应付佣金 -->
<!--<div id="commission-list" class="am-offcanvas">-->
    <!--<div class="am-offcanvas-bar am-offcanvas-bar-flip am-offcanvas-bar-full-width background-color-white">-->

        <!--<div class="am-offcanvas-content">-->
            <!--<div class="am-offcanvas-header am-g">-->
                <!--<div class="am-u-sm-1" id="commission-back"><span class="am-icon-angle-left"></span></div>-->
                <!--<div class="am-u-sm-10">应付佣金</div>-->
                <!--<div class="am-u-sm-1">&nbsp;</div>-->
            <!--</div>-->

            <!--<div class="all-unpayed-commission">-->
                <!--<div class="unpayed-header am-g">-->
                    <!--<div class="am-u-sm-8">需要支付的人数：<span class="flash"><?php echo ($unpayed_member_count); ?>人</span></div>-->
                    <!--<div class="am-u-sm-4 flash">&nbsp;</div>-->
                <!--</div>-->
                <!--<div class="all-unpayed-list">-->
                    <!--<div class="am-panel-group" id="all-unpayed-accordion">-->
                        <!--<div class="am-panel am-panel-default without-border-shadow ">-->
                            <!--<?php if(is_array($all_commission_unpayed)): $i = 0; $__LIST__ = $all_commission_unpayed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$all_unpayed): $mod = ($i % 2 );++$i;?>-->
                                <!--<div class="unpayed-panel-title am-g" >-->
                                    <!--<div class="am-u-sm-11" data-am-collapse="{parent: '#all-unpayed-accordion', target: '#unpayed-line<?php echo ($all_unpayed["user_id"]); ?>'}">-->
                                        <!--<div class="am-u-sm-10">-->
                                            <!--<span class="am-panel-title " >-->
                                                <!--<?php echo ($all_unpayed["user_name"]); ?>：￥<?php echo ($all_unpayed["sum"]); ?>-->
                                            <!--</span>-->
                                        <!--</div>-->
                                        <!--<div class="am-u-sm-1 ">-->
                                            <!--<span id='unpayed-angle<?php echo ($all_unpayed["user_id"]); ?>' class="am-icon-angle-down"></span>-->
                                        <!--</div>-->
                                        <!--<div class="am-u-sm-1"></div>-->
                                    <!--</div>-->

                                    <!--<div class="am-u-sm-1">-->
                                        <!--<span class="am-icon-check-square-o out-level-check" check-class-id="<?php echo ($all_unpayed["user_id"]); ?>" checked="0"></span>-->
                                    <!--</div>-->

                                <!--</div>-->
                                <!--<div  id="unpayed-line<?php echo ($all_unpayed["user_id"]); ?>" unpayed-angle-id="unpayed-angle<?php echo ($all_unpayed["user_id"]); ?>" class="unpayed-line-class am-panel-collapse am-collapse">-->
                                    <!--<div class="unpayed-line am-g">-->
                                        <!--<?php if(is_array($all_unpayed["lists"])): $i = 0; $__LIST__ = $all_unpayed["lists"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                            <!--<div class="row" style="background-color: <?php if($vo['need_to_pay'] == 1){echo '#f5f5f5';} ?>">-->
                                                <!--<div class="am-u-sm-5"><?php echo ($vo["fee"]); ?></div>-->
                                                <!--<div class="am-u-sm-5"><?php echo ($vo["date_to_pay"]); ?></div><div class="am-u-sm-1"></div>-->
                                                <!--<div class="am-u-sm-1">-->
                                                    <!--<span class="am-icon-check-square-o in-level-check" sub-check-class-id="<?php echo ($all_unpayed["user_id"]); ?>" commission_id="<?php echo ($vo["commission_id"]); ?>" checked="0"></span>-->
                                                <!--</div>-->
                                            <!--</div>-->

                                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                    <!--</div>-->

                                <!--</div>-->
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->


                    <!--</div>-->
                <!--</div>-->

            <!--</div>-->

            <!--</div>-->
            <!--<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "-->
                 <!--id="">-->
                <!--<div class="am-g">-->
                    <!--<div class="am-u-sm-6">-->
                        <!--<div class="margin-center" id="export-list">导出所选清单</div>-->

                    <!--</div>-->
                    <!--<div class="am-u-sm-6">-->
                        <!--<div class="margin-center" id="set-payed">标志为支付</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->

            <!--<div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">-->
                <!--<div class="am-modal-dialog">-->
                    <!--<div class="am-modal-hd">标志为已支付</div>-->
                    <!--<div class="am-modal-bd">-->
                        <!--你确定要标志为已支付吗？-->
                    <!--</div>-->
                    <!--<div class="am-modal-footer">-->
                        <!--<span class="am-modal-btn" data-am-modal-cancel>取消</span>-->
                        <!--<span class="am-modal-btn" data-am-modal-confirm>确定</span>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->


        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<!--&lt;!&ndash;退出登录&ndash;&gt;-->

<div class="am-modal am-modal-confirm" tabindex="-1" id="log-out">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">退出登录</div>
        <div class="am-modal-bd">
            你确定要退出登录吗？
        </div>
        <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
        </div>
    </div>
</div>


<!-- 侧边栏我的钱包内容 -->
<!--<div id="my-commision-list" class="am-offcanvas">-->
    <!--<div class="am-offcanvas-bar  am-offcanvas-bar-flip am-offcanvas-bar-full-width">-->

        <!--<div class="am-offcanvas-content">-->
            <!--<div class="am-offcanvas-header am-g">-->
                <!--<div class="am-u-sm-1" id="my-commission-list-back"><span class="am-icon-angle-left"></span></div>-->
                <!--<div class="am-u-sm-10">我的钱包</div>-->
                <!--<div class="am-u-sm-1">&nbsp;</div>-->
            <!--</div>-->
            <!--<div class="am-offcanvas-content-underline">-->

                <!--<div class="am-panel-group" id="accordion">-->
                    <!--<div class="am-panel am-panel-default">-->
                        <!--<div class="am-panel-hd">-->
                            <!--<h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#unpayed-detail'}">-->
                                <!--未支付佣金：￥<?php echo ($unpayed_sum); ?>-->
                            <!--</h4>-->
                        <!--</div>-->
                        <!--<div id="unpayed-detail" class="am-panel-collapse am-collapse am-in">-->
                            <!--<div class="am-panel-bd">-->
                                <!--<div class="my-underline-list">-->
                                    <!--<div class="my-underline-line-header am-g">-->
                                        <!--<div class="am-u-sm-4">下线姓名</div>-->
                                        <!--<div class="am-u-sm-4">佣金（元）</div>-->
                                        <!--<div class="am-u-sm-4">应付日期</div>-->
                                    <!--</div>-->
                                    <!--<?php if(is_array($unpayed_list)): $i = 0; $__LIST__ = $unpayed_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$line): $mod = ($i % 2 );++$i;?>-->
                                        <!--<div class="my-underline-line am-g" style="background-color: <?php if($line['need_to_pay']==1){echo '#f8b47e';}?>">-->
                                            <!--<div class="am-u-sm-4"><?php echo ($line["user_name"]); ?></div>-->
                                            <!--<div class="am-u-sm-4"><?php echo ($line["fee"]); ?></div>-->
                                            <!--<div class="am-u-sm-4"><?php echo ($line["date_to_pay"]); ?></div>-->
                                        <!--</div>-->
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->

                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="am-panel am-panel-default">-->
                        <!--<div class="am-panel-hd">-->
                            <!--<h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#payed-detail'}">-->
                                <!--已支付佣金：￥<?php echo ($payed_sum); ?>-->
                            <!--</h4>-->
                        <!--</div>-->
                        <!--<div id="payed-detail" class="am-panel-collapse am-collapse">-->
                            <!--<div class="am-panel-bd">-->
                                <!--<div class="my-underline-list">-->
                                    <!--<div class="my-underline-line-header am-g">-->
                                        <!--<div class="am-u-sm-4">下线姓名</div>-->
                                        <!--<div class="am-u-sm-4">佣金（元）</div>-->
                                        <!--<div class="am-u-sm-4">应付日期</div>-->
                                    <!--</div>-->
                                    <!--<?php if(is_array($payed_list)): $i = 0; $__LIST__ = $payed_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$line): $mod = ($i % 2 );++$i;?>-->
                                        <!--<div class="my-underline-line am-g">-->
                                            <!--<div class="am-u-sm-4"><?php echo ($line["user_name"]); ?></div>-->
                                            <!--<div class="am-u-sm-4"><?php echo ($line["fee"]); ?></div>-->
                                            <!--<div class="am-u-sm-4"><?php echo ($line["date_to_pay"]); ?></div>-->
                                        <!--</div>-->
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<script>
    //右滑关闭模板
    $('.am-offcanvas').hammer().on('swiperight' ,function(){
        $(this).offCanvas('close');
        console.log('关闭面板');
    })


    //选择框变色响应
    $(".out-level-check").on('click', function(){
        var checked = this.getAttribute('checked');
        var check_class_id = this.getAttribute('check-class-id');
        if(checked == 0){
            this.setAttribute('checked', '1');
            $("[sub-check-class-id=" + check_class_id + "]").addClass('checked');
            $("[sub-check-class-id=" + check_class_id + "]").each(function(){
                this.setAttribute('checked', '1');
            })

            $(this).addClass('checked');
        }else{
            this.setAttribute('checked', '0')
            $("[sub-check-class-id=" + check_class_id + "]").removeClass('checked');
            $("[sub-check-class-id=" + check_class_id + "]").each(function(){
                this.setAttribute('checked', '0');
            })
            $(this).removeClass('checked');
        }
    })
    $('.in-level-check').on('click', function(){
        var checked = this.getAttribute('checked');
        if(checked == 0){
            $(this).addClass('checked')
            this.setAttribute('checked', '1');
        }else{
            $(this).removeClass('checked')
            this.setAttribute('checked', '0');
        }
    })

    //箭头翻转
    $('.unpayed-line-class').on('open.collapse.amui', function(){
        var angle_id = this.getAttribute('unpayed-angle-id');
        var angle = $('#' + angle_id);
        angle.removeClass('angle-back').addClass('angle');
    });
    $('.unpayed-line-class').on('close.collapse.amui', function(){
        var angle_id = this.getAttribute('unpayed-angle-id');
        var angle = $('#' + angle_id);
        angle.removeClass('angle').addClass('angle-back');
    });


    //导出选定行
    $('#export-list').on('click', function(){
        //组合参数到请求中
        var selected_commission_id = get_checked_commission_unpayed();
        var i = 0;

        var param = "?" + i + '=' + selected_commission_id[i]
        for(i=1; i < selected_commission_id.length; i++){
            param = param + '&' + i + '=' + selected_commission_id[i] ;
        }
        console.log(param);

        window.location.href = 'export_csv' + param;
    })

    //获取所有选择的未支付的行
    function get_checked_commission_unpayed(){
        console.log('进入函数');
        var all_list_unpayed = $('.in-level-check');
        var checked_commission = new Array();
        all_list_unpayed.each(function(){
            if(this.getAttribute('checked') == '1'){
                checked_commission.push(this.getAttribute('commission_id'));

            }

        })
        return checked_commission;

    }

    //将选择的标志为支付
    function set_checked_commission_payed(selected_commission_id){
        $.ajax({
            url:'set_commission_payed',
            data:{
                selected_commission_id:selected_commission_id
            },
            type:'POST',
            dataType:'json',

            success:function(data){
                //将标志为支付的行隐藏
                var index = 0;
                for(index; index < selected_commission_id.length; index++){
                    $("[commission_id="+ selected_commission_id[index] +"]").parent().parent().fadeOut();
                }

                console.log(data.result);
            },
            error:function(request, status, e){
                console.log(status)
            }
        })

    }

    //退出登录
    $('#log-out-btn').on('click', function(){
        $('#log-out').modal({
            relatedTarget: this,
            onConfirm: function(options) {
                window.location.href = '/admin/job/outlogin'
                console.log('log-out');
            },
            onCancel: function() {
                console.log('取消');
            }
        });
    })

    //标志为已支付
    $('#set-payed').on('click', function(){
        $('#my-confirm').modal({
            relatedTarget: this,
            onConfirm: function(options) {
                var commission_selected = get_checked_commission_unpayed();
                var i = 0;
                set_checked_commission_payed(commission_selected);
                for(i; i < commission_selected.length; i++){

                    console.log(commission_selected[i]);
                }
                console.log('标志为已支付');
            },
            onCancel: function() {
                console.log('取消标志');
            }
        });
    })

    $('#my-under-line').on('open.offcanvas.amui', function(){
        //加载我的下线
        console.log('my-under-line offcanvas open')
    });

    $('#my-under-line').on('close.offcanvas.amui', function(){
        console.log('my-under-line offcanvas close')
    });

    $('#my-under-line-back').on('click', function(){
        $('#my-under-line').offCanvas('close')
    })
    $('#my-commission-list-back').on('click', function(){
        $('#my-commision-list').offCanvas('close')
    })

    $('#commission-back').on('click', function(){
        $('#commission-list').offCanvas('close')
    })


</script>
</body>
</html>