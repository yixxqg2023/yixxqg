# 写在前面的话
本软件主要是依靠第三方浏览器脚本进行视频和文章的自动浏览，不打算做题，只是为了节省浏览视频文章的时间

我的理想状态是每天睡醒躺在床上通过推送的消息让挂机软件自动开始浏览文章视频，等我吃完饭打开手机花一分钟答题截图发给领导，每天的40分就完工。

答题是有这个功能，但是我默认是关闭了的，会被查。


# 易语言开发的学习强国挂机软件
易语言 学习强国 挂机 ~~多账户~~ windows版本

# 软件思路
~~原有思路：基于techstudy油猴脚本，通过chrome调试端口管理操作浏览器。定时启用浏览器刷新cookies，定时执行脚本~~

~~更新为全后台模拟，不载入油猴脚本，软件测试为单机版不需要授权~~
软件长期挂机在电脑

1.时间到推送登录消息到微信公众号

  1.1 没醒，错过了登录二维码，此时软件会持续监听登录请求，睡醒后可以通过消息自带的页面推送登录请求到软件，软件会再次发起登录
  
  1.2 醒了，收到的消息不能直接跳转到学习强国软件，此时可以

      1.2.1 截图自带的二维码，打开学习强国扫码从图库读取，然后登录
      
      1.2.2 微信右上角，选择浏览器打开，此时通过浏览器，直接点击蓝色字体跳转到学习强国登录即可
      
2. 学习完了，推送分数到微信，等待第二天到时间，中间不需要干啥，除非有时候莫名其妙bug，如果一个小时你都没收到浏览完毕的推送消息，那么你自己去电脑上看看卡哪了。自己手动点 “全流程” 按钮走一边就行
   

# 安全性

不要在更换陌生网络环境挂机，已测试高分账号长期手机刷分的换浏览器刷会被警告。低分10000以下的警告程度大大减少。建议单机版在自己办公室挂机

~~# 授权~~

~~多账户版本目前仅提供给内测用户授权使用，绑定机器~~
~~单账户挂机的免费无限使用~~
~~- 需要授权请邮件：yixxqg@gmail.com~~

# 单机版 - 无需授权
~~后台刷新保活，定时执行脚本。更简单更安全。~~

现在不保活cookie，每天使用指令获取二维码到微信自己登录就行

# 使用方式
1.首先，你得有个pushplus的推送token   [https://www.pushplus.plus/](https://www.pushplus.plus/)

然后没了。直接把token填进软件，设置好定时时间然后重启软件就行，不放心就点那个全流程的按钮体验一下

