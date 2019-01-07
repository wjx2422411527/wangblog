<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>王景笑博客</title>
<meta name="keywords" content="blog" />
<meta name="description" content="blog" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/base.css" rel="stylesheet">
<link href="css/m.css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js" ></script>
<script src="js/comm.js"></script>
</head>
<body>
<header id="header">
  <div class="navbox">
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <div class="logo"><a href="{{route('index')}}">王景笑个人博客</a></div>
    <nav>
      <ul id="starlist">
        <li><a href="{{route('index')}}">首页</a></li>
        <li><a href="{{route('about')}}">关于我</a></li>
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
<!--top end-->
<article>
  <div class="whitebg about">
    <div class="ab_box"> <i class="avatar_pic"><img src="images/touxing.jpg"></i>
      <h3>王景笑</h3>
      <p>一个00后的小站长！Web前端设计师、网页设计师。</p>
      <p>王笑笑公司设计总监，爱笑工作室创始人。</p>
    </div>
    <h2 class="gd_title">内心独白</h2>
    <p class="ab_dubai">我叫王景笑，我是一个00后的小站长！09年入行。我一直潜心研究网页前端技术，一边工作一边积累经验，分享一些个人博客模板，以及网站优化等心得。我入行早，大家也亲切的叫我“笑哥”。我的个人博客搜索“个人博客”、“博客”，一直都靠前。最有意思的是，我有三年的时间没有去更新它，依然排在前面。虽然期间有很多的不容易，但是我都没有放弃过。选了这一行 ，就深深的喜欢上它。我喜欢一句话“冥冥中该来则来，无处可逃”。我喜欢上了前端设计，喜欢坐在电脑前敲代码，喜欢跟一堆程序员聊天。这辈子，我也逃不出去了，深深的陷了进来。 </p>
    <span class="ly_button"><a href="#" target="_blank">留言</a></span>
    <h2 class="gd_title">心路历程</h2>
    <ul class="xinlu">
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/1.jpg"></i>
        <p>我是怎么评价自己的？</p>
        <span>我性格属于好静的，喜欢写写画画，自从读了计算机专业，那就更好静了，我可以两星期都不出门，但是半刻钟也不能离开电脑。</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/2.jpg"></i>
        <p>个人博客，属于我的小世界！</p>
        <span>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/3.jpg"></i>
        <p>【爱设计】安静地做一个爱设计的男孩</p>
        <span>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/4.jpg"></i>
        <p>【匆匆那些年】总结个人博客经历的这四年</p>
        <span>博客从最初的域名购买，到上线已经有四年的时间了，这四年的时间，有笑过，有怨过，有悔过，有执着过，也有放弃过…但最后还是坚持了下来，时间如此匆匆，等再回过头已来不及去弥补</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/ad.jpg"></i>
        <p>我是怎么评价自己的？</p>
        <span>我性格属于好静的，喜欢写写画画，自从读了计算机专业，那就更好静了，我可以两星期都不出门，但是半刻钟也不能离开电脑。</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/ad02.jpg"></i>
        <p>个人博客，属于我的小世界！</p>
        <span>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/b01.jpg"></i>
        <p>【爱设计】安静地做一个爱设计的男孩</p>
        <span>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</span></a></li>
      <li><a href="{{route('info')}}"  target="_blank"><i><img src="images/b05.jpg"></i>
        <p>【匆匆那些年】总结个人博客经历的这四年</p>
        <span>博客从最初的域名购买，到上线已经有四年的时间了，这四年的时间，有笑过，有怨过，有悔过，有执着过，也有放弃过…但最后还是坚持了下来，时间如此匆匆，等再回过头已来不及去弥补</span></a></li>
    </ul>
</article>
<footer>
  <div class="box">
    <div class="wxbox">
      <ul>
        <li><img src="images/weixin.png"><span>微信也是爱</span></li>
        <li><img src="images/zhifu.jpg"><span>支付宝也是爱</span></li>
      </ul>
    </div>
    <div class="endnav">
      <p><b>站点声明：</b></p>
      <p>1、本站个人博客模板，均为王景笑本人设计，个人可以使用，但是未经许可不得用于任何商业目的。</p>
      <p>2、所有文章未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=HHh9cn95b3F1cHVye1xtbTJ-c3E" target="_blank">dacesmiling@qq.com</a></p>
      <p>Copyright © <a href="http://www.yangqq.com" target="_blank">www.yangqq.com</a> All Rights Reserved. 备案号：<a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a></p>
    </div>
  </div>
  <a href="#">
  <div class="top"></div>
  </a> </footer>
</body>
</html>
