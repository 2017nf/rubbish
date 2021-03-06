<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\Program Files\xampp\htdocs/application/game\view\index\index.html";i:1514432356;}*/ ?>
<!DOCTYPE>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta name="description" content="不超过150个字符"/>
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index,follow"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="HandheldFriendly" content="true">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" href="__STATIC__/game/css/play.css">

    <style>
         body{background: url(__STATIC__/game/img/bg9.png) repeat;}
         .header{width: 100%;height: 4.5rem;border-bottom: 1px solid #ccc;}
         .overlay{background: rgba(0,0,0,0.4);position: absolute;top: 0;left: 0;bottom: 0;right:0;z-index: 8000;display: none;}
				 .overlay_tab{background: rgba(0,0,0,0.4);position: absolute;top: 0;left: 0;bottom: 0;right:0;z-index: 9000;display: none;}
				 .setact .createRoom{width:12rem;position: absolute;top: 11.5%;left:28%;z-index: 8701;line-height: 2.3rem;text-shadow: 2px 1px #472205;margin-top: 0.2rem;}
         .setact .closeGame{width: 2.2rem;position: absolute;top: 12.5%;right: 3.2%;z-index: 8701;}
        .setact .cons{width: 85%;z-index: 8700;position: absolute; top: 15%;left: 50%;margin-left: -42.5%;background: url(__STATIC__/game/img/newEdition/setactBg.png) no-repeat;background-size:100% 100%;}
        /*.setact .cons h2{text-align: center;text-decoration: underline;font-weight: bold;color: #7fe4cb;line-height: 2.3rem;text-shadow: 2px 1px #472205;margin-top: 0.2rem;}*/
				.setact .cons ul.tabs-tishi{margin-top:2%;margin-bottom:2%;}
				.setact .cons ul.tabs-tishi p{width:90%;line-height: 2rem;text-align: center;margin:0.1rem 0;}
				.setact .cons ul.tabs-tishi p img{padding-left:3.9%;width:104%;height:0.25rem;}
				.setact .cons ul.tabs-tishi .tabs-tishi-1{padding-left:3%;margin-bottom:-1.5%;font-size: 0.8rem;color: #84C8DD;}

        .setact .cons ul.tabs-con{width: 95%;margin-left: 2.5%;padding-top: 0.1rem;}
        .setact .cons ul.tabs-con li{margin-top: 0.25rem;padding:0.6rem;font-size: 0.9rem;list-style: none;height: 1.2rem;}
				.setact .cons ul.tabs-con li p{width:90%;margin-top: -3.5%;margin-left:-5%;text-align: center;}
				.setact .cons ul.tabs-con li p img{padding-left:2.5%;width:116%;height:0.25rem;}

        /*.setact .cons ul.tabs-con li:visible:nth-child(3),.setact .cons ul.tabs-con li:visible:nth-child(4){height: 2.5rem;}*/
        /*.setact .cons ul.tabs-con li span{font-size: 0.9rem;margin-left: 1.3rem;}*/
        .setact .tabs{width: 95%;margin-left:2.5%;margin-bottom:1.5%;margin-top:2rem;height: 2rem;display: flex;justify-content: space-between;}
        .setact .tabs li{float: left;list-style: none;color:white;font-weight: bold;background: url(__STATIC__/game/img/newEdition/yellowBg.png) no-repeat;background-size:100% 100%;text-align: center;width: 19%;}
        .setact .tabs li span{width:3.5rem;font-size: 0.8rem;height: 1rem;display: inline-block;margin-top: 0.35rem;}
        .cur{height:2rem;background: url(__STATIC__/game/img/newEdition/redBg.png) no-repeat!important;background-size:100% 100%!important;text-align: center!important;width: 18.5%!important;}

        .selections{width: 85%;float: right;}
        .selections label{font-size: 0.9rem;margin-left: 2.5%;}
        .confirms{text-align: center;}
        .confirms img{position:absolute;width:18rem;left:8%;margin-top: 0.6rem;}
        .header>img{width: 3.2em;margin:0.6rem 0 0 1rem;vertical-align: middle;}
        .header>span{display: inline-block;padding:0.2rem 1.2rem 0.4rem 0.4rem;background:#564C4A;color: #eee;font-size: 1rem;line-height:1rem;border-top-right-radius: 0.9rem;border-bottom-right-radius: 0.9rem;border: 1px solid #666;vertical-align: bottom;margin-bottom: 0.8rem;font-size: 0.8rem;}
        .header p{float: right;}
        .header p img{width: 1.7em;margin:1.2rem 0 0 1rem;vertical-align: middle;}
        .header p span{display: inline-block;padding:0.2rem 1.2rem 0.2rem 0.4rem;background:#564C4A;color: #eee;font-size: 1rem;line-height:1rem;border-top-right-radius: 0.9rem;border-bottom-right-radius: 0.9rem;border: 1px solid #666;vertical-align: bottom;margin-bottom: 0.4rem;margin-right: 1rem;font-size: 0.8rem;}

        .setroom{width: 40%;border:2px solid white;border-radius: 1rem;overflow:hidden;margin-left: 30%;margin-top: 35%;box-shadow: 0px 0px 4rem #8e8e8e;}
        .setroom img{width: 100%;margin-left: 0%;margin-top: 0%;}

        .game{width: 100%;border-radius: 1rem;margin: 0 0;padding:0;position: absolute;top:0.8rem}
        .game img{width: 95%;margin-left: 2%;margin-top: 0%;}

				.box-intogame_1>img{width:75%;position: absolute;top: 25%;right: 13%;z-index: 9001;}
				.box-intogame_2>img{width:25%;position:absolute;top: 29.4%;right: 37%;z-index: 9001;}
				.box-intogame_3>img{width:45%;position:absolute;top: 40.5%;left:29%;z-index: 9001;}
				.box-intogame_4>img{width:20%;position:absolute;top: 50%;left: 20%;z-index: 9001;}
				.box-intogame_5>img{width:20%;position:absolute;top: 50%;right: 20%;z-index: 9001;}

				.footer{background: url(__STATIC__/game/img/newEdition/footerbackground.png) repeat;width:100%;height:20%;position: absolute;bottom:0%;}
				.footer .footer_left{width:20%;height:20%;}
				.footer .footer_middle{width:10%;height: 10%;}

    </style>
    <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="overlay"></div>
		<div class="overlay_tab"></div>
     <!-- <div class="header">
        <img src="<?php echo $memberinfo['photo']; ?>" style=""><span><?php echo $memberinfo['nickname']; ?></span>
        <p>
            <img src="__STATIC__/game/img/roomCard.png"><span><?php echo $memberinfo['cards']; ?></span>
        </p>
     </div> -->
    <p class="setroom" style="display: none;">
        <img src="__STATIC__/game/img/6666.jpg">
    </p>
    <p class="game">
        <img src="__STATIC__/game/img/douniuGame.png">
    </p>

    <div class="setact" style="display: none;">
				<img class="createRoom" src="__STATIC__/game/img/newEdition/createRoom.png">
        <img class="closeGame" src="__STATIC__/game/img/newEdition/closes.png">
        <div class="cons">
            <form id="createfrom" action="<?php echo url('Douniuplaywjy/roomcreate'); ?>" method="post" callback="none1">
              <input type="hidden" name="gametype" id="gametype" value="1">
              <!-- <h2>创建房间</h2> -->
              <ul class="tabs">
                   <li onclick="$('#gametype').val(1);" class="cur"><span>牛牛上庄</span></li>
                   <li onclick="$('#gametype').val(2);"><span>固定庄家</span></li>
                   <li onclick="$('#gametype').val(3);"><span>自由抢庄</span></li>
                   <li onclick="$('#gametype').val(4);"><span>明牌抢庄</span></li>
                   <li onclick="$('#gametype').val(5);"><span>通比牛牛</span></li>
              </ul>
							<ul class="tabs-tishi">
								<p>
										<img src="__STATIC__/game/img/newEdition/segmentingLine.png">
										<p class="tabs-tishi-1"><img src="__STATIC__/game/img/newEdition/horn.png" align="center" style="width:30px;height:21px;"  /><span style="margin-left:1%;font-size:0.9rem;color:#61B1F7;">创建房间,游戏未进行,不消耗房卡</span></p>
								</p>
							</ul>
              <ul class="tabs-con">
									<li>
											<p><img src="__STATIC__/game/img/newEdition/segmentingLine.png"></p>
									</li>
                  <li class="zero" style="margin-top:-12%;font-size:1rem;color:#2969B6;">底分:<div class="selections">
                    <label><input name="score" id="inputfirst" type="radio" checked="checked" value="1" style="display:none;" /><img class="tick" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom" width="20" height="23" /><img class="selectSwitch" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;display:none;" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">1分</span></label>
                    <label><input name="score" type="radio" value="3" style="display:none;" /><img class="tick" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">3分</span></label>
                    <label><input name="score" type="radio" value="5" style="display:none;" /><img class="tick" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">5分</span></label>
                  </div></li>
                  <li class="forth" style="display: none;margin-top:-12%;margin-bottom:-6%;font-size:1rem;color:#2969B6;">底分:<div class="selections">
                    <label><input id="forthinputfirst" name="score" type="radio" checked="checked" value="5" style="display:none;" /><img class="tick_5" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;" width="20" height="23" /><img class="selectSwitch5" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;display:none;" width="20" height="20" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">5分</span></label>
                    <label><input name="score" type="radio" value="10" style="display:none;" /><img class="tick_5" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch5" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">10分</span></label>
                    <label><input name="score" type="radio" value="20" style="display:none;" /><img class="tick_5" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch5" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">20分</span></label>
                  </div></li>
									<li>
											<p><img src="__STATIC__/game/img/newEdition/segmentingLine.png"></p>
									</li>
                  <li style="margin-top:-18%;margin-bottom:11%;font-size:1rem;color:#2969B6;">规则:<div class="selections">
                    <label style="display: block;"><input name="rule" type="radio" checked="checked" value="1" style="display:none;" /><img class="tick_1" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;" width="20" height="23" /><img class="selectSwitch1" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;display:none;" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">牛牛x3&nbsp;牛九x2&nbsp;牛八x2</span></label>
                    <label style="display: block;padding-top:4%;"><input name="rule" type="radio" value="2" style="display:none;" /><img class="tick_1" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch1" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">牛牛x4&nbsp;牛九x3&nbsp;牛八x2&nbsp;牛七x2</span></label>
                  </div></li>
									<li style="margin-top:12%;">
											<p><img src="__STATIC__/game/img/newEdition/segmentingLine.png"></p>
									</li>
                  <li style="margin-top:-12%;font-size:1rem;color:#2969B6;">牌型:<div class="selections">
                    <label><input name="types[1]" type="checkbox" value="5" style="display:none;" /><img class="tick_2" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch2" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">五花牛(5倍)</span></label>
                    <label><input name="types[2]" type="checkbox" value="6" style="display:none;" /><img class="tick_2" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch2" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">炸弹牛(6倍)</span></label>
                    <label style="display: block;padding-top:4%;"><input name="types[3]" type="checkbox" value="8" style="display:none;" /><img class="tick_2" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch2" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">五小牛(8倍)</span></label>
                  </div></li>
									<li style="margin-top:11%;">
											<p><img src="__STATIC__/game/img/newEdition/segmentingLine.png"></p>
									</li>
                  <li style="margin-top:-12%;font-size:1rem;color:#2969B6;margin-bottom:2%;">局数:<div class="selections">
                    <label><input name="gamenum" type="radio" checked="checked" value="10:1" style="display:none;" /><img class="tick_3" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;" width="20" height="23" /><img class="selectSwitch3" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;display:none;" width="18" height="18" /><span style="margin-left:2%;font-size:1rem;color:#2969B6;">10局x1房卡</span></label>
                    <label style="padding-left:2%;"><input name="gamenum" type="radio" value="20:2" style="display:none;" /><img class="tick_3" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch3" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">20局x2房卡</span></label>
                  </div></li>
									<li class="oneth" style="display: none;margin-top:2%;">
											<p><img src="__STATIC__/game/img/newEdition/segmentingLine.png"></p>
									</li>
                  <li class="oneth" style="display: none;margin-top:-12%;color:#2969B6;margin-bottom:2%;">上庄:<div class="selections">
                    <label><input name="openroom" type="radio" value="0" style="display:none;" /><img class="tick_4" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;" width="20" height="23" /><img class="selectSwitch4" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom;display:none;" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">无</span></label>
                    <label style="margin-left:4%;"><input name="openroom" type="radio" value="100" style="display:none;" /><img class="tick_4" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch4" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">100</span></label>
                    <label style="margin-left:4%;"><input name="openroom" type="radio" value="300" style="display:none;" /><img class="tick_4" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch4" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">300</span></label>
                    <label style="margin-left:4%;"><input name="openroom" type="radio" value="500" style="display:none;" /><img class="tick_4" src="__STATIC__/game/img/newEdition/tick.png" style="vertical-align:text-bottom;display:none;" width="20" height="23" /><img class="selectSwitch4" src="__STATIC__/game/img/newEdition/selectionBox.png" style="vertical-align:text-bottom" width="18" height="18" /><span style="margin-left:1%;font-size:1rem;color:#2969B6;">500</span></label>
                  </div></li>
              </ul>
              <div class="confirms">
                  <!-- <img onclick="$('#createfrom').submit();" type="sub" src="__STATIC__/game/img/qd.png"> -->
									<img onclick="showIntoGames()" type="sub" src="__STATIC__/game/img/newEdition/startName.png">
              </div>
            </form>
        </div>
    </div>

		<div class="box-intogame" style="display:none;">
				<div class="box-intogame_1">
					<img src="__STATIC__/game/img/newEdition/tab.png">
				</div>
				<div class="box-intogame_2">
					<img src="__STATIC__/game/img/newEdition/reminder.png">
				</div>
				<div class="box-intogame_3">
					<img src="__STATIC__/game/img/newEdition/gameSuccess.png">
				</div>
				<div class="box-intogame_4">
					<img src="__STATIC__/game/img/newEdition/intoGame.png" onclick="fromSubmit()">
				</div>
				<div class="box-intogame_5">
					<img src="__STATIC__/game/img/newEdition/cancelGame.png" onclick="cancelSubmit()">
				</div>
		</div>

		<div class="footer">
				<div class="footer_left">
						<img src="__STATIC__/game/img/newEdition/headImg.png" style="width:100px;height:100px;position: absolute;bottom:2%;left:2%;" />
						<!-- background: url(__STATIC__/game/img/newEdition/headImg.png) no-repeat; -->
						<img src="<?php echo $memberinfo['photo']; ?>" style="width:82px;height:82px;border-radius:100%;position:absolute;bottom:9%;left:3.8%;">
				</div>
				<div class="footer_middle">
						<p>
								<img src="__STATIC__/game/img/newEdition/nickname.png" style="width:70px;height:25px;position:absolute;bottom:35%;left:29%;" />
								<span style="position:absolute;bottom:37%;left:33%;color:white;"><?php echo $memberinfo['nickname']; ?></span>
						</p>
						<p>
								<img src="__STATIC__/game/img/newEdition/fangka.png" style="width:20px;height:26px;position:absolute;bottom:12%;left:30%;" />
								<span style="position:absolute;bottom:15%;left:36%;color:white;">x <?php echo $memberinfo['cards']; ?></span>
						</p>
						<!-- <p>
								<img src="__STATIC__/game/img/newEdition/money.png" style="width:70px;height:25px;position:absolute;bottom:10%;left:30%;" />
								<span style="position:absolute;bottom:12%;left:34%;color:white;">100</span>
						</p> -->
				</div>
				<div class="footer_right">
						<p>
								<img src="__STATIC__/game/img/newEdition/meinv.png" style="width:180px;height:286px;position:absolute;bottom:0%;right:0%;" />
						</p>
				</div>
		</div>

    <script src="__STATIC__/game/js/jquery-1.12.1.js" type="text/javascript"></script>
    <script src="__STATIC__/js/setajax.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".game").click(function(){
               $(".overlay,.setact").show();
            });
            $(".setact .cons .tabs-con li").eq(3).css("height","2.5rem").end().eq(2).css("height","2.5rem");
            $(".tabs li").click(function(){
               $(this).addClass("cur").siblings().removeClass("cur");
                $("input[name='score']").prop('checked', false);
                $("input[name='openroom']").prop('checked', false);
               	$("#inputfirst").prop('checked', true);

								//点击选项卡，重置
								$(".tick").hide();
								$(".selectSwitch").show();
								$(".tick_1").hide();
								$(".selectSwitch1").show();
								$(".tick_3").hide();
								$(".selectSwitch3").show();
								$(".tick_4").hide();
								$(".selectSwitch4").show();
								$(".tick_5").hide();
								$(".selectSwitch5").show();

								//重置后显示
								$(".tick").first().show();
								$(".selectSwitch").first().hide();
								$(".tick_1").first().show();
								$(".selectSwitch1").first().hide();
								$(".tick_3").first().show();
								$(".selectSwitch3").first().hide();
								$(".tick_4").first().show();
								$(".selectSwitch4").first().hide();
								$(".tick_5").first().show();
								$(".selectSwitch5").first().hide();

               switch($(this).index()){
                case 1:
                    $(".zero").show();
                    $(".oneth").show();
                    $("input[name='openroom']").first().prop('checked', false);
                    $(".forth").hide();break;
                case 4:
                    $(".zero").hide();
                    $(".forth").show();
                    $("#forthinputfirst").prop('checked', true);
                    $(".oneth").hide();break;
                default:
                    $(".zero").show();
                    $(".forth").hide();
                    $(".oneth").hide();
               }

							 // if($("input[name='gamenum']").attr("checked")){
								//  alert($("input[name='gamenum']").val());
							 // }

							 //获取所有的img图片
							//  var $elements = $('.tick');
							//  var len = $elements.length;
							//  //alert('有 ' + len + ' 个相同class');
							//  $elements.each(function() {
							// 		// var msg = $(this).attr("class");
							// 		// $("."+msg).hide();
							// 		if (($(this).prev()).attr("checked")) {
	            //         $(this).show();
	            //     }
							//  });

            });
            $(".closeGame").click(function(){
                $(".setact").add(".overlay").hide();
            });

						//点击切换
						$(".selectSwitch").click(function(){
                //alert(($(this).prev().prev()).val());
								//选中目标
								($(this).prev().prev()).attr("checked",true);
								//清除所有选中
								var msg = ($(this).prev()).attr("class");
								var msg1 = $(this).attr("class");
								// alert(msg);
								// alert(msg1);
								$("."+msg).hide();
								if (($(this).prev().prev()).attr("checked")) {
										$("."+msg1).show();
										$(this).hide();
										$(this).prev().show();
                }
            });

						$(".selectSwitch1").click(function(){
								($(this).prev().prev()).attr("checked",true);
								//清除所有选中
								var msg = ($(this).prev()).attr("class");
								var msg1 = $(this).attr("class");
								// alert(msg);
								// alert(msg1);
								$("."+msg).hide();
								if (($(this).prev().prev()).attr("checked")) {
										$("."+msg1).show();
										$(this).hide();
										$(this).prev().show();
								}
            });

						$(".selectSwitch2").click(function(){
								($(this).prev().prev()).attr("checked",true);
								//清除所有选中
								// var msg = ($(this).prev()).attr("class");
								// var msg1 = $(this).attr("class");
								// alert(msg);
								// alert(msg1);
								//$("."+msg).hide();
								if (($(this).prev().prev()).attr("checked")) {
										$(this).hide();
										$(this).prev().show();
								}
            });

						$(".tick_2").click(function(){
                //alert(($(this).prev().prev()).val());
								//清除所有选中
								($(this).prev()).attr("checked",false);
								$(this).hide();
								$(this).next().show();
            });

						$(".selectSwitch3").click(function(){
								($(this).prev().prev()).attr("checked",true);
								//清除所有选中
								var msg = ($(this).prev()).attr("class");
								var msg1 = $(this).attr("class");
								// alert(msg);
								// alert(msg1);
								$("."+msg).hide();
								if (($(this).prev().prev()).attr("checked")) {
										$("."+msg1).show();
										$(this).hide();
										$(this).prev().show();
								}
            });

						$(".selectSwitch4").click(function(){
								($(this).prev().prev()).attr("checked",true);
								//清除所有选中
								var msg = ($(this).prev()).attr("class");
								var msg1 = $(this).attr("class");
								// alert(msg);
								// alert(msg1);
								$("."+msg).hide();
								if (($(this).prev().prev()).attr("checked")) {
										$("."+msg1).show();
										$(this).hide();
										$(this).prev().show();
								}
						});

						$(".selectSwitch5").click(function(){
								($(this).prev().prev()).attr("checked",true);
								//清除所有选中
								var msg = ($(this).prev()).attr("class");
								var msg1 = $(this).attr("class");
								// alert(msg);
								// alert(msg1);
								$("."+msg).hide();
								if (($(this).prev().prev()).attr("checked")) {
										$("."+msg1).show();
										$(this).hide();
										$(this).prev().show();
								}
						});

        });

				//点击切换
				function selectSwitch(){
					//设置radio
					($(this).prev().prev()).attr("checked",true);

					//获取当前点击对象的上一个兄弟的类
					var msg = ($(this).prev()).attr("class");
					var msg1 = $(this).attr("class");
					alert(msg);
					alert(msg1);
					$("."+msg).hide();
					if (($(this).prev().prev()).attr("checked")) {
							$("."+msg1).show();
							$(this).hide();
							$(this).prev().show();
					}
				}

				function fromSubmit(){
					//提交表单
					$('#createfrom').submit();
					$(".box-intogame").hide();
					$(".overlay_tab").hide();
				}

				function cancelSubmit(){
					//取消提交
					$(".box-intogame").hide();
					$(".overlay_tab").hide();
				}

        $('#createfrom').ajaxsubmit({success:function(ret){
            window.location.href=ret.url;
        }});

				function showIntoGames(){
					$(".overlay_tab").show();
					$(".box-intogame").show();
				}
    </script>
</body>
</html>
