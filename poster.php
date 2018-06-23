<?php
header("Content-type: text/html; charset=utf-8"); 
// 对上传的图片进行比例缩放
$imgname = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
    $filepath = './image/';
    if(move_uploaded_file($tmp,$filepath.$imgname)){
    }else{
        echo "上传失败";
    }

$pic_name = $filepath.$imgname;
$new=imagecreatetruecolor(200, 300);//200和300是头像显示最好的尺寸
if ($_FILES['myfile']['type'] == "image/jpeg") {
    $img=imagecreatefromjpeg($pic_name);
}elseif ($_FILES['myfile']['type'] == "image/png") {
    $img=imagecreatefrompng($pic_name);
}else{
    echo '<script type="text/javascript"> alert("请上传jpg或者png格式图片");location.href="./form.php";</script>';
}


list($width, $height)=getimagesize($pic_name);
imagecopyresized($new, $img,0, 0,0, 0,200, 300, $width, $height);
imagejpeg($new, "./image/0.jpg");
unlink($filepath.$imgname); 

$main = imagecreatefrompng ('./image/bg2.png');  
$font = './meng.ttf';
$width = imagesx ( $main );  
$height = imagesy ( $main );  

$target = imagecreatetruecolor ( $width, $height );  
$back =imagecolorallocatealpha($target, 255, 255, 255,127);
imagefill ( $target, 0, 0, $back);  

imagecopyresampled ( $target, $main, 0, 0, 0, 0, $width, $height, $width, $height );  

$fontSize = 15;//磅值字体  
$fontColor = imagecolorallocate ( $target, 0, 0, 0 );//字的RGB颜色  
$data1 = $_POST["name"];
$data2 = $_POST["sex"];
$data3 = $_POST["time"];
$data4 = $_POST["location"];
$data5 = "20180623";
// $fontBox = imagettfbbox($fontSize, 0, $font, $data);//文字水平居中实质  
imagettftext ($target, $fontSize, 0, 120, 95, $fontColor, $font, $data1);
imagettftext ($target, $fontSize, 0, 120, 170, $fontColor, $font, $data2);
imagettftext ($target, $fontSize, 0, 150, 245, $fontColor, $font, $data3);
imagettftext ($target, $fontSize, 0, 150, 320, $fontColor, $font, $data4);
imagettftext ($target, $fontSize, 0, 120, 395, $fontColor, $font, $data5);

$child1 = imagecreatefromjpeg ( './image/0.jpg');  
imagecopymerge ( $target, $child1, 290, 80, 0, 0, imagesx ( $child1 ), imagesy ( $child1 ), 100 );
$child2 = imagecreatefrompng ( './image/zhang.png');  
imagecopymerge ( $target, $child2, 200, 100, 0, 0, imagesx ( $child2 ), imagesy ( $child2 ), 100 );

$img = 'wangjun.png';
imagepng ( $target, './' . $img, 9);  

imagedestroy ($main);  
imagedestroy ($target);  
imagedestroy ($child1); 
imagedestroy ($child2); 
//generateImg ( './image/bg.jpg', $data[0], $data[1]);  
?>  
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>晒晒最萌团员证</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="width" />
        <meta id="viewport" content="width=device-width, user-scalable=no,initial-scale=1" name="viewport" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta content="telephone=no" name="format-detection" />
        <!--移动端版本兼容 -->
        <script type="text/javascript">
            var phoneW =  parseInt(window.screen.width),phoneScale = phoneW/640 ,ua = navigator.userAgent;
            if (/Android (\d+\.\d+)/.test(ua)){
                var version = parseFloat(RegExp.$1);
                if(version>2.3){document.write('<meta name="viewport" content="width=640, initial-scale='+phoneScale+', minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                }else{document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');}
            } else {document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');}
        </script>
        <link href="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/css/all.css" type="text/css" rel="stylesheet"/>
        <link href="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/js/upload/style.css" type="text/css" rel="stylesheet"/>
        <link href="./css/index.css" type="text/css" rel="stylesheet"/>
        <script src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/js/jquery-1.11.1.min.js"></script>
        <script src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/js/common.js"></script>
    </head>
    <body>
        <!--音乐 start-->
        <div id="music" class="active">
             <div id="audio-btn1" class="on">
                  <audio loop src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/music.mp3" id="media" preload loop="loop"></audio>
             </div>
        </div>
        <!--音乐 ended-->
        <section class="main-page bg clearfix">
            <div class="book-warp" style="padding:0;">
                <img src="./wangjun.png"/>
                <div class="book">
                    <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/book.png" class="book-img"/>
                    <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/book_word.png" class="book-word"/>
                </div>
                <div class="hand"><a class="in" href="javascript:void(0);"></a></div>
            </div>
            <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/xing.png" class="cai xing" />
            <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/xing1.png" class="cai xing1" />
            <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/ball.png" class="cai ball" />
            <div class="detail-btns">
                <a class="fl" href="javascript:void(0);"  onclick="showModal('#shareModal');" ><img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/share_btn.png" /></a>
                
                                <a class="fr" href="form.php"><img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/ismy.png" /></a>
                                
            </div>
            <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/word1.png" class="bot-tips"/>
        </section>
        
        <!-- 分享 -->
        <div class="modal" id="shareModal" onclick="hideModal('#shareModal');">
            <div class="modal-bg"></div>
            <div class="modal-body share-warp">
                <img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/share.png"/>
            </div>
        </div>
        
        <script>
            $('.hand,.book').on('click',function(){
                $('.hand').hide();
                $('.main-page').addClass('current');
                setTimeout(function(){
                    $('.book .book-word').addClass('hide');
                },1000)
            });
            $(function(){
                audioAutoPlay('media');
                document.getElementById('media').onloadstart=function(){
                    audioAutoPlay('media');
                };
            })
        </script>
        <script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script>
            var web_content = '晒晒最萌团员证';
            var descr = '快打开你的专属团员证';
            var descrr = '快打开你的专属团员证';
            var link = 'http://h5.gstai.com/cyl_synth_ylc/detail.php?openid=odJDfjlFi6XZBBcxM7-B5-wqMxik';
            var imgurl = 'http://h5.gstai.com/cyl_synth_ylc/images/share.jpg';
            wx.config({
                debug: false,
                appId: 'wx99961ab843f829a8',
                timestamp: 1529741701,
                nonceStr: 'XFU7l9irQVj7R9CF',
                signature: '878fe1b70b8c710a17c9aa02284e477768c43d48',
                jsApiList: [
                    // 所有要调用的 API 都要加到这个列表中
                    'onMenuShareAppMessage',
                    'onMenuShareTimeline',
                    'onMenuShareQQ',
                    'onMenuShareWeibo',
                ]
            });
            wx.ready(function () {
                wx.showOptionMenu();

                // 2. 分享接口
                // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
                wx.onMenuShareAppMessage({
                    title: web_content,
                    desc: descr,
                    link: link,
                    imgUrl: imgurl,
                });
                // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
                wx.onMenuShareTimeline({
                    title: descrr,
                    desc: descrr,
                    link: link,
                    imgUrl: imgurl,
                });
            });
            wx.error(function (res) {
                //alert(res.errMsg);
            });
        </script>
    </body>
</html> 