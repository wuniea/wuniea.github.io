<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <title>PHP Test
        </title>
        <style>
            body {
                background: #000;
                padding: 0;
                margin: 0;
            }
            .welcome-page {
                color: #fff;
            }
            .welcome-page {
                padding: 0px 40px;
                height: 100%;
                width: 100%;
                overflow: scroll;
                text-align: center;
            }
            .welcome-page .header {
                background: url(https://dn-coding-net-production-pp.qbox.me/a32c304a-cf34-410f-930f-8675e8a6741d.png) no-repeat;
                background-size: 650px;
                background-position: center -284px;
                height: 140px;
                margin-bottom: 40px;
            }
            .welcome-page .logo {
                display: inline-block;
                transform: translateY(7px);
                background: url(http://ide.test:8060/5395cf9e60c35411d9bb99cae72722e8.svg) -10px -9px no-repeat;
                background-size: 100% 150%;
                height: 40px;
                width: 270px;
                /*     filter: invert(100%); */
            }
            .welcome-page .coding-logo {
                width: 114px;
                height: 24px;
                background: url(https://dn-coding-net-production-pp.qbox.me/0905c8a9-5b33-4819-83d4-3cd0528b0c86.png) 0px 0px no-repeat;
                margin: 0 auto;
                background-size: cover;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="welcome-page">
            <div class="header">
            </div>
            <h1>欢迎使用 
                <div class="logo">
                </div>
            </h1>
            <div class="subtitle">您将获得前所未有的云端开发体验
            </div>
            <div class="subtitle">
                <?php
                echo "<p>现在时间是 " . date("h:i:sa") . "</p>";
                ?>
            </div>
            <div class="coding-logo">
            </div>
        </div>
    </body>
</html>
