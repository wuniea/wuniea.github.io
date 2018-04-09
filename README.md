## 欢迎来到 Cloud Studio

在这里，您可以方便的使用您的专用主机进行开发。

我们为您准备了三种语言的小示例来展现 Cloud Studio 的功能。分别是 Java， PHP 和 Python。

## Python Demo

请先在终端中输入 `cd python` 切换到 python 目录

默认的环境中自带 Python 2.7.12 版本，
直接在下方终端中输入 `python hello.py` 查看运行效果吧。

如果需要使用 Python 3 可以直接使用 `python3`

在终端中输入 `python3 snake.py` 可以开始玩贪吃蛇的小游戏

如果想要使用 pip3 请运行：

```
sudo apt-get update
sudo apt-get install python3-pip
sudo python3 -m pip install --upgrade pip
pip3 --version
```

## Java Demo

在 java 目录中，我们准备了一个 spring boot 的 demo。

切换到 java 目录，运行 `mvn package`，
等待编译完成之后，运行 `java -jar target/studio-demo-0.0.1-SNAPSHOT.jar`，
就可以启动服务。

也可以直接 `mvn spring-boot:run` 启动服务。

![图片](https://dn-coding-net-production-pp.qbox.me/62177c52-3f04-45f4-9f46-260e47efdcdb.jpeg)

完全启动之后，在右边的访问连接侧边栏中点击 8080 端口号旁边的加号，就可以生成一个访问连接，
点击访问连接，就可以看到我们的事例页面了。

## PHP Demo

在 php 目录下，运行 `php -S 0.0.0.0:8081` 可以启动 PHP 内置的 web server。
同样在右侧访问连接侧栏中将端口号改为 8081 并点击旁边的加号，生成 8081 端口的访问连接，点击就可以打开事例页面了。

## 其他语言支持

想要切换其他语言环境，可以在右边的运行环境设置中进行切换。

您也可以自己安装需要的环境，并在运行环境中进行保存。





Happy Coding！

![logo](https://dn-coding-net-production-pp.qbox.me/0905c8a9-5b33-4819-83d4-3cd0528b0c86.png)
