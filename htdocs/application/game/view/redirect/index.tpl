{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px; }
        body{background: url(__STATIC__/game/img/bg9.png) repeat;}
        .system-message{ padding: 0px 0px; }
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px}
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px; }
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
        .system-message .showImg{ margin: 0 0;padding:0 0;width:100%;height:100%; }
        .system-message .showImg img{width:100%;}
    </style>
</head>
<body>
<div class="system-message">
    <?php switch ($code) {?>
    <?php case 1:?>
    <h1>:)</h1>
    <p class="success"><?php echo(strip_tags($msg));?></p>
    <?php break;?>
    <?php case 0:?>
    <div class="jiesan_tab">
        <img src="__STATIC__/game/img/newEdition/reminder.png" style="width:25%;position:absolute;top: 29.4%;right: 34%;z-index: 9002;" onclick="return false">
        <img src="__STATIC__/game/img/newEdition/tab.png" style="width:60%;position: absolute;top: 26.4%;left: 20%;z-index: 9001;" onclick="return false">
        <span style="position: absolute;top:38%;left: 30%;z-index: 9001;font-size:3rem;color:#F32C92;font-family:cursive;"><?php echo(strip_tags($msg));?></span>
    </div>
    <?php break;?>
    <?php case 2:?>
    <p class="showImg"><img src="__STATIC__/game/img/guide.gif"></p>
    <?php break;?>
    <?php } ?>
    <p class="detail"></p>
    <p class="jump">
        页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
    </p>
</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>
