<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>历史记录</title>
<meta name="keywords" content="blog" />
<meta name="description" content="blog" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/base.css" rel="stylesheet">
<link href="css/m.css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js" ></script>
<script src="js/comm.js"></script>
<script src="js/page.js"></script>
</head>
<body>
<header id="header">
  <div class="navbox">
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <div class="logo"><a href="{{route('index')}}">王景笑个人博客</a></div>
    <nav>
      <ul id="starlist">
        <li><a href="{{route('index')}}">首页</a></li>
        <li><a href="{{route('info')}}">关于我</a></li>
      </ul>
    </nav>
    <div class="searchico"></div>
  </div>
</header>
<div class="searchbox">
  <div class="search">
    <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
      <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字词" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字词'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字词'}" type="text">
      <input name="show" value="title" type="hidden">
      <input name="tempid" value="1" type="hidden">
      <input name="tbname" value="news" type="hidden">
      <input name="Submit" class="input_submit" value="搜索" type="submit">
    </form>
  </div>
  <div class="searchclose"></div>
</div>
<article>
  <div class="whitebg timebox">
 <h2 class="htitle">往期文章</h2>
<ul id="list" style="display:none;">
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">【个人博客空间申请】金牛云服，免费领空间啦</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">双十一，阿里云特惠活动，快来领券啦</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">第二届 优秀个人博客模板比赛参选活动</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">为什么说10月24日是程序员的节日？</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">即便是坑，我也想要拉你入伙！</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">我是怎么评价自己的？</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">作为一个设计师,如果遭到质疑你是否能恪守自己的原则?</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">【个人博客网站制作】自己不会个人博客网站制作，你会选择用什么博客程序源码？</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">如何快速建立自己的个人博客网站</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">个人博客用帝国cms 自定义页面 灵动标签调用网站所有信息</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">我的个人博客之——阿里云空间选择</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">建站流程篇——教你如何快速学会做网站</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">【分享】css3侧边栏导航不同方向划出效果</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">使用CSS3制作文字、图片倒影</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">三步实现滚动条触动css动画效果</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">十条设计原则教你学会如何设计网页布局!</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">别让这些闹心的套路，毁了你的网页设计</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">Color Scheme Designer 取色</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">按钮在线生成工具Button Maker</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">CSS3 Maker 在线生成代码</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">Ui Parade免费的UI在线设计工具</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">分享一个在线用css3生成气泡的工具CSS ARROW PLEASE!</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">安静地做一个爱设计的女子</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">电话以外的宁静</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">遇见一个未知的你</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">个人博客，属于我的小世界！</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">网易博客关闭，何不从此开始潇洒行走江湖！</a></i></li>
   <li><span>2018-11-22</span><i><a href="{{route('info')}}">Come on,行动起来吧!我们和时间来一场赛跑!</a></i></li>
</ul>
 <ul id="list2">
  </ul>
<div class="clear"></div>
  <script src="js/page2.js"></script>
  </div>
</article>
<footer>
  <div class="box">
    <div class="wxbox">
      <ul>
        <li><img src="images/wxgzh.jpg"><span>微信公众号</span></li>
        <li><img src="images/wx.png"><span>我的微信</span></li>
      </ul>
    </div>
    <div class="endnav">
      <p><b>站点声明：</b></p>
      <p>1、本站个人博客模板，均为杨青青本人设计，个人可以使用，但是未经许可不得用于任何商业目的。</p>
      <p>2、所有文章未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=HHh9cn95b3F1cHVye1xtbTJ-c3E" target="_blank">dacesmiling@qq.com</a></p>
      <p>Copyright © <a href="#" target="_blank">www.yangqq.com</a> All Rights Reserved. 备案号：<a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a></p>
    </div>
  </div>
  <a href="#">
  <div class="top"></div>
  </a> </footer>
</body>
</html>