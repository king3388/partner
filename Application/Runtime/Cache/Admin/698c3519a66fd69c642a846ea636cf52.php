<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>一家依-合伙人-我的资料</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <script src="http://ttsstatic.qiniudn.com/jquery/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="/Public/assets/js/jquery.masonry.min.js"></script>
    <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
    <link rel="stylesheet" href="/Public/assets/css/style.css"/>
</head>
<body class="user-info-body">

    <div class="u-container">
        <div class="u-scroll">
            <section class="u-panel" id="u-panel-1">
                <div class="job-list-header">我的资料</div>
                <div class="user-info-container">
                    <div class="header-title"><span class="nick-name"><?php echo ($user_info["user_name"]); ?></span>的资料</div>
                    <div class="user-info-content">
                        <div class="user-info-line">
                            姓名：<span id="name-label"><?php echo ($user_info["user_name"]); ?></span>
                        </div>
                        <div class="user-info-line">
                            身份证号码：<span id="ID-label"><?php echo ($user_info["certification_id"]); ?></span>
                        </div>
                        <div class="user-info-line">
                            手机号码：<span id="tel-label"><?php echo ($user_info["telephone"]); ?></span>
                        </div>
                        <div class="user-info-line">
                            银行支行：<span id="bank-label"><?php echo ($user_info["bank"]); ?></span>
                        </div>
                        <div class="user-info-line">
                            银行卡号：<span id="bank-card-id-label"><?php echo ($user_info["bank_card_id"]); ?></span>
                        </div>
                        <div class="user-info-line">
                            邮箱：<span id="email-label"><?php echo ($user_info["email"]); ?></span>
                        </div>


                    </div>
                    <div class="user-info-footer">
                        <div class="user-info-button" id="edit-btn">编辑</div>
                    </div>
                </div>
            </section>

            <section class="u-panel" id="u-panel-2">
                <div class="job-list-header">我的资料</div>
                <div class="user-info-container">
                    <div class="header-title">编辑<span class="nick-name"><?php echo ($user_info["user_name"]); ?></span>的资料</div>
                    <div class="user-info-content">
                        <div class="user-info-line">
                            姓名：<input type="text" name="name" value="<?php echo ($user_info["user_name"]); ?>" >
                        </div>
                        <div class="user-info-line">
                            身份证号码：<input type="text" name="ID"  value="<?php echo ($user_info["certification_id"]); ?>">
                        </div>
                        <div class="user-info-line">
                            手机号码：<input type="text" name="tel"  value="<?php echo ($user_info["telephone"]); ?>">
                        </div>
                        <div class="user-info-line">
                            银行支行：<input type="text" name="bank"  value="<?php echo ($user_info["bank"]); ?>">
                        </div>
                        <div class="user-info-line">
                            银行卡号：<input type="text" name="bank-card-id"  value="<?php echo ($user_info["bank_card_id"]); ?>">
                        </div>
                        <div class="user-info-line">
                            邮箱：<input type="text" name="email"  value="<?php echo ($user_info["email"]); ?>">
                        </div>


                    </div>
                    <div class="user-info-footer">
                        <div class="user-info-button" id="commit-btn">保存</div>
                    </div>
                </div>
            </section>


        </div>
    </div>



</body>
<script>
    $('#edit-btn').on('click', function(){
        $('.u-scroll').removeClass('u-scroll').addClass('u-scroll-edit');
    })
    $('#commit-btn').on('click', function(){
        var email = $('[name=email]').val();
        var tel = $('[name=tel]').val();
        var name = $('[name=name]').val();
        var bank = $('[name=bank]').val();
        var bank_card_id = $('[name=bank-card-id]').val();
        var ID = $('[name=ID]').val();

        $.ajax({
                    url:('/admin/usercenter/update_user_info'),
                    data:{
                        email:email,
                        name:name,
                        tel:tel,
                        bank:bank,
                        bank_card_id:bank_card_id,
                        ID:ID
                    },
                    type:"POST",
                    dataType:'json',
                    success:function(data){
                        if(data.status == '1'){
                            $('.u-scroll-edit').removeClass('u-scroll-edit').addClass('u-scroll');
                            $('#name-label').html(name);
                            $('#tel-label').html(tel);
                            $('#ID-label').html(ID);
                            $('#bank-label').html(bank);
                            $('#bank-card-id-label').html(bank_card_id);
                            $('#email-label').html(email);
                            $('.nick-name').html(name);


                        }else{
                            alert('更新出现错误，请试一下');
                        }

                    },
                    error:function(request, status, error){
                        alert('更新出现错误，请试一下');
                    }
        }
        )



    })
</script>
</html>