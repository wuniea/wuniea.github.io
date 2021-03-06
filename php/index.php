<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Web Demo | Cloud Studio</title>
    <style>
            body {
                background: #fff;
                padding: 0;
                margin: 0;
                font-family: "PingFang SC", "Helvetica Neue", "Hiragino Sans GB", "Segoe UI", "Microsoft YaHei", 微软雅黑, sans-serif;
                font-size: 16px;
            }

            a {
                color: #0066FF;
                text-decoration: none;
            }

            a:hover {
                color: #0047B1;
            }

            h2 {
                font-size: 36px;
                font-weight: 500;
            }

            .container {
                width: 100%;
                text-align: center;
            }

            .cover {
                width: 100%;
                height: 390px;
                background: url("https://dn-coding-net-production-pp.qbox.me/8564b26a-9cba-4417-951a-ab0d6f735c77.png") no-repeat bottom;
                background-size: 700px;
                background-color: #1E1E1E;
                color: #fff;
                padding-top: 150px;
                display: block;
            }

            .header {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                padding: 24px;
                display: flex;
            }

            .header .logo {
                background: url("https://webide-1255989204.cos.ap-chengdu.myqcloud.com/StudioWebResource/Images/CloudStudio-Logo-Light.svg") -10px -9px no-repeat;
                height: 0px;
                width: 161px;
                padding-top: 20px;
                overflow: hidden;
                display: inline-block;
            }

            .header .nav {
                display: flex;
                flex: 1;
                list-style-type: none;
                list-style-image: none;
                margin: 0;
                padding: 0;
            }

            .header .nav li {
                padding-left: 30px;
            }

            .header .nav a {
                font-size: 16px;
                color: #fff;
                text-decoration: none;
            }

            @media (max-width: 400px) {
                .header {
                    padding: 24px 12px;
                }
            }
            @media (max-width: 350px) {
                .header .nav li {
                    padding-left: 16px;
                }
            }

            #global_footer {
                text-align: left;
            }

            #global_footer .record {
                background: #232f40;
                color: #76808e;
            }

            #global_footer .record_img_info img{
                 position: absolute;
                 max-width: 353px;
                 width: 100%;
                 height: auto;
            }

            #global_footer .record_info {
                text-align: right;
                font-size: 12px;
            }

            #global_footer .record_info p {
                margin: 0;
                height: 18px;
                line-height: 18px;
            }

            #global_footer .record_info a {
                color: #76808e;
                text-decoration: none;
            }

            #global_footer .record_info a:hover {
                color: #ddd;
            }

            #global_footer .record_img_info {
                max-width: 1020px;
                margin: auto;
                padding: 30px 20px;
            }

            @media (max-width: 840px) {
                #global_footer .record_img_info img{
                    position: relative;
                    margin-bottom: 20px;
                }
                #global_footer .record_img_info {
                    text-align: center;
                }
                #global_footer .record_info {
                    text-align: center;
                }
            }

            .cover h1 {
                font-size: 60;
                margin-top: 0; 
                margin-bottom: 20px;
            }

            .dynamic {
                width: 100%;
                background: #F7FCFF;
                padding: 60px 0;
                font-weight: 500;
            }

            .dynamic .version {
                color: #0066FF;
            }

            .tcloud-coupon {
                padding: 80px 0;
            }

            .tcloud-coupon h2 {
                margin: 0 auto 60px;
            }

            .tcloud-coupon p {
                color: #425063;
                max-width: 340px;
                margin: 0 auto 30px;
            }

            .full-wide {
                width: 100%;
                height: 400px;
            }

            .half-wide {
                width: 50%;
                height: 400px;
                float: left;
                color: #fff;
            }

            .half-wide .content {
                width: 520px;
                height: 400px;
                margin: 0 auto;
            }

            .half-wide .left {
                width: 188px;
                float: left;
                text-align: left;
            }

            .half-wide .right {
                width: 300px;
                float: right;
                height: 280px;
            }

            .half-wide h2 {
                margin: 80px 0 40px;
                text-align: left;
            }

            .half-wide a {
                background: #fff;
                padding: 12px 20px;
                border-radius: 2px;
            }

            .half-wide a:hover {
                box-shadow: 0 2px 10px rgba(0,0,0,0.3);
            }

            .coding-intro {
                background: #267AF9;
            }

            .coding-intro a {
                color: #267AF9;
            }

            .coding-intro .right {
                background: url("https://dn-coding-net-production-pp.qbox.me/76fe0573-ef14-4670-9459-54186ca90a32.png") no-repeat;
                background-size: 300px auto; 
                margin-top: 54px; 
            }

            .invite-friend {
                background: #F7931B;
            }

            .invite-friend a {
                color: #F7931B;
            }

            .invite-friend .right {
                background: url("https://dn-coding-net-production-pp.qbox.me/fa15d556-a008-4f11-8f4a-83d0fd849537.png") no-repeat;
                background-size: 300px auto; 
                margin-top: 30px; 
            }

            @media (min-width: 1600px) {
                .half-wide .content {
                    width: 580px;
                }
            }

            @media (max-width: 1140px) {
                .half-wide .content {
                    width: 490px;
                }
            }

            @media (max-width: 1040px) {
                .full-wide {
                    width: 100%;
                    height: 800px;
                }
                .half-wide .content {
                    width: 580px;
                }
                .half-wide {
                    float: none;
                    width: 100%;
                }
            }

            @media (max-width: 640px) {
                .half-wide .content {
                    width: 490px;
                }
            }

            @media (max-width: 520px) {
                .full-wide {
                    height: auto;
                }
                .half-wide {
                    height: auto;
                }
                .half-wide .content{
                    height: auto;
                    width: 100%;
                    padding: 20px 0;
                }
                .half-wide .left {
                    float: none;
                    width: auto;
                    text-align: center;
                    padding: 40px 20px;
                }
                .invite-friend .left {
                    padding-bottom: 0;
                }
                .half-wide h2 {
                    text-align: center;
                    margin: 0 auto 40px;
                }
                .half-wide .right {
                    float: none;
                    margin: auto;
                }
            }


        </style>
</head>
<body>
    <div class="container">
        <div class="cover">
            <div class="header">
                <a href="https://studio.coding.net" class="logo">Cloud Studio</a>
                <ul class="nav">
                    <li>
                        <a href="https://studio.coding.net/intro" target="_blank" rel="noopener noreferrer">产品介绍</a>
                    </li>
                    <li>
                        <a href="https://coding.net/help/doc/webide" target="_blank" rel="noopener noreferrer">帮助</a>
                    </li>
                </ul>
            </div>
            <h1 class="title">欢迎使用 Cloud Studio</h1>
            <p class="subtitle">这是一个 PHP Web Demo</p>
        </div>
        <div class="dynamic">
                        <?php
                echo '<span>当前系统的 PHP 版本为</span>
        <span class="version"> v' . phpversion() . '</span>
        ';
                ?>
        </div>
        <div class="tcloud-coupon">
            <h2>领券免费使用 Cloud Studio</h2>
            <p>绑定腾讯云账号即可领取一百元腾讯云代金券，足够 Cloud Studio 使用 6 个月。</p>
            <a href="https://dnspod.cloud.tencent.com/act/coding">领取腾讯云优惠券</a>
        </div>
        <div class="full-wide">
            <div class="half-wide coding-intro">
                <div class="content">
                    <div class="left">
                        <h2>面向未来的项目与代码管理工具</h2>
                        <a href="https://coding.net/about">了解 CODING</a>
                    </div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="half-wide invite-friend">
                <div class="content">
                    <div class="left">
                        <h2>邀请好友送现金红包</h2>
                        <a href="https://coding.net/help/account/invitation.html">查看活动详情</a>
                    </div>
                    <div class="right"></div>
                </div>
            </div>
        </div>
        <div id="global_footer">
            <div class="record">
                <div class="record_img_info">
                    <a href="https://coding.net/index">
                        <img src="https://dn-coding-net-production-pp.qbox.me/0905c8a9-5b33-4819-83d4-3cd0528b0c86.png"></a>
                    <div class="record_info">
                        <p>
                            <a href="https://coding.net/privacy" target="_blank" rel="noopener noreferrer">隐私策略</a>
                            <!-- react-text: 70 -->
                            |
                            <!-- /react-text -->
                            <a href="https://coding.net/terms" target="_blank" rel="noopener noreferrer">服务条款</a>
                            <!-- react-text: 72 -->
                            |
                            <!-- /react-text -->
                            <a href="https://coding.net/security" target="_blank" rel="noopener noreferrer">安全策略</a>
                        </p>
                        <p>
                            <a href="https://coding.net/index">© 2017 Coding.net</a>
                            <!-- react-text: 76 -->
                            |
                            <!-- /react-text -->
                            <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="noopener noreferrer">粤ICP备14029750号</a>
                            <!-- react-text: 78 -->
                            | 深圳市扣钉网络科技有限公司
                            <!-- /react-text --> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>