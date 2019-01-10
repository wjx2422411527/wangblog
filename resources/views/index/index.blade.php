<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<meta name="keywords" content="blog">
<meta name="description" content="blog">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/base.css" rel="stylesheet">
<link href="css/m.css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js"></script>
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
  <!--lbox begin-->
  <div class="lbox">
    <!--banbox begin-->
    <div class="banbox">
      <div class="banner">
        <div id="banner" class="fader">
          <li class="slide"><a href="{{route('info')}}" target="_blank"><img src="images/1.jpg"></a></li>
          <li class="slide"><a href="{{route('info')}}" target="_blank"><img src="images/2.jpg"></a></li>
          <li class="slide"><a href="{{route('info')}}" target="_blank"><img src="images/3.jpg"></a></li>
          <li class="slide"><a href="{{route('info')}}" target="_blank"><img src="images/4.jpg"></a></li>
          <div class="fader_controls">
            <div class="page prev" data-target="prev"></div>
            <div class="page next" data-target="next"></div>
            <ul class="pager_list">
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--banbox end-->
    <!--headline begin-->`
    <div class="headline">
      <ul>
        <li><a href="{{route('time')}}" title="历史记录"><img src="images/h1.jpg" alt="历史记录"><span>历史记录</span></a></li>
        <li><a href="{{route('info')}}" title="个人网站做好了，百度不收录怎么办？来，看看他们怎么做的"><img src="images/h2.jpg" alt="个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</span></a></li>
      </ul>
    </div>
    <!--headline end-->
    <div class="clearblank"></div>
    <div class="tab_box whitebg">
      <div class="tab_buttons">
        <ul>
          <li class="newscurrent"><a href="javascrpt::">个人博客</a></li>
          <li><a href="javascrpt::">工作日记</a></li>
          <li><a href="javascrpt::">心路历程</a></li>
          <li><a href="javascrpt::">我的博客</a></li>
          <li><a href="javascrpt::">技术共享</a></li>
        </ul>
      </div>
      <div class="newstab">
        <div class="newsitem">
          <div class="newspic">
            <ul>
              <li><a href="{{route('info')}}"><img src="images/2.jpg"><span>个人博客，属于我的小世界！</span></a></li>
              <li><a href="{{route('info')}}"><img src="images/4.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
            </ul>
          </div>
          <ul class="newslist">
            <li><i></i><a href="{{route('info')}}">个人博客，属于我的小世界！</a>
              <p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">安静地做一个爱设计的女子</a>
              <p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">我是怎么评价自己的？</a>
              <p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
              <p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
            </li>
            <li><i></i><a href="{{route('info')}}">做个人博客如何用帝国cms美化留言增加头像选择</a>
              <p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
            </li>
          </ul>
        </div>
        <div class="newsitem">
          <div class="newspic">
            <ul>
              <li><a href="{{route('info')}}"><img src="images/3.jpg"><span>个人博客，属于我的小世界！</span></a></li>
              <li><a href="{{route('info')}}"><img src="images/1.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
            </ul>
          </div>
          <ul class="newslist">
            <li><i></i><a href="{{route('info')}}">安静地做一个爱设计的女子</a>
              <p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">我是怎么评价自己的？</a>
              <p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人博客，属于我的小世界！</a>
              <p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
              <p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
            </li>
            <li><i></i><a href="{{route('info')}}">做个人博客如何用帝国cms美化留言增加头像选择</a>
              <p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
            </li>
          </ul>
        </div>
        <div class="newsitem">
          <div class="newspic">
            <ul>
              <li><a href="{{route('info')}}"><img src="images/2.jpg"><span>个人博客，属于我的小世界！</span></a></li>
              <li><a href="{{route('info')}}"><img src="images/3.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
            </ul>
          </div>
          <ul class="newslist">
            <li><i></i><a href="{{route('info')}}">我是怎么评价自己的？</a>
              <p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
              <p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
            </li>
            <li><i></i><a href="{{route('info')}}">做个人博客如何用帝国cms美化留言增加头像选择</a>
              <p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人博客，属于我的小世界！</a>
              <p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">安静地做一个爱设计的女子</a>
              <p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
            </li>
          </ul>
        </div>
        <div class="newsitem">
          <div class="newspic">
            <ul>
              <li><a href="{{route('info')}}"><img src="images/3.jpg"><span>个人博客，属于我的小世界！</span></a></li>
              <li><a href="{{route('info')}}"><img src="images/4.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
            </ul>
          </div>
          <ul class="newslist">
            <li><i></i><a href="{{route('info')}}">安静地做一个爱设计的女子</a>
              <p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">我是怎么评价自己的？</a>
              <p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人博客，属于我的小世界！</a>
              <p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
            </li>
            <li><i></i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
              <p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
            </li>
            <li><i></i><a href="{{route('info')}}">做个人博客如何用帝国cms美化留言增加头像选择</a>
              <p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
            </li>
          </ul>
        </div>
        <div class="newsitem" >
          <div class="newspic">
            <ul>
              <li>
                <a href="{{route('info')}}">
                  <img src="images/h2.jpg">
                  <span>个人博客，属于我的小世界！</span>
                </a>
              </li>
              <li>
                <a href="{{route('info')}}">
                  <img src="images/h1.jpg">
                  <span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span>
                </a>
              </li>
            </ul>
          </div>
          <ul class="newslist">
            <li>
              <i></i>
              <a href="{{route('info')}}">我是怎么评价自己的？</a>
              <p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
            </li>
            <li>
              <i></i>
              <a href="{{route('info')}}">个人博客，属于我的小世界！</a>
              <p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
            </li>
            <li>
              <i></i>
              <a href="{{route('info')}}">安静地做一个爱设计的女子</a>
              <p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
            </li>
            <li>
              <i></i>
              <a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
              <p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
            </li>
            <li>
              <i></i>
              <a href="{{route('info')}}">做个人博客如何用帝国cms美化留言增加头像选择</a>
              <p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--tab_box end-->
    <div class="zhuanti whitebg">
      <h2 class="htitle">精彩专题</h2>
      <ul>
        <li>
          <i class="ztpic">
            <a href="{{route('info')}}" target="_blank">
              <img src="images/1.jpg">
            </a>
          </i>
          <b>个人博客模板《今夕何夕》-响应式个人...</b>
          <span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span>
          <a href="{{route('info')}}" target="_blank" class="readmore">文章阅读</a>
        </li>
        <li>
          <i class="ztpic">
            <a href="{{route('info')}}" target="_blank">
              <img src="images/2.jpg">
            </a>
          </i>
          <b>个人博客模板《今夕何夕》-响应式个人...</b>
          <span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span>
          <a href="{{route('info')}}" target="_blank" class="readmore">文章阅读</a>
        </li>
        <li>
          <i class="ztpic">
            <a href="{{route('info')}}" target="_blank">
              <img src="images/3.jpg">
            </a>
          </i>
          <b>个人博客模板《今夕何夕》-响应式个人...</b>
          <span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span>
          <a href="{{route('info')}}" target="_blank" class="readmore">文章阅读</a>
        </li>
        <li>
          <i class="ztpic"><a href="{{route('info')}}" target="_blank">
            <img src="images/4.jpg">
          </a>
        </i>
        <b>个人博客模板《今夕何夕》-响应式个人...</b>
        <span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span>
        <a href="{{route('info')}}" target="_blank" class="readmore">文章阅读</a>
      </li>
        <li>
          <i class="ztpic">
            <a href="{{route('info')}}" target="_blank">
              <img src="images/h2.jpg">
            </a>
          </i>
          <b>个人博客模板《今夕何夕》-响应式个人...</b>
          <span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span>
          <a href="{{route('info')}}" target="_blank" class="readmore">文章阅读</a>
        </li>
        <li>
          <i class="ztpic">
            <a href="{{route('info')}}" target="_blank">
              <img src="images/h1.jpg">
            </a>
          </i>
          <b>个人博客模板《今夕何夕》-响应式个人...</b>
          <span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span>
          <a href="{{route('info')}}" target="_blank" class="readmore">文章阅读</a>
        </li>
      </ul>
    </div>
    <div class="whitebg bloglist">
      <h2 class="htitle">最新博文</h2>
      <ul>
        <!--多图模式 置顶设计-->
        <li>
          <h3 class="blogtitle">
            <a href="{{route('info')}}" target="_blank">
            <b>【顶】</b>别让这些闹心的套路，毁了你的网页设计!</a>
          </h3>
          <span class="bplist">
            <a href="{{route('info')}}"> 
                <img src="images/b02.jpg" alt="">
            </a> 
            <a href="{{route('info')}}">
              <img src="images/b03.jpg" alt="">
            </a> 
            <a href="{{route('info')}}">
              <img src="images/b04.jpg" alt="">
            </a>
            <a href="{{route('info')}}">
              <img src="images/b05.jpg" alt="">
            </a>
          </span>
          <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
          <p class="bloginfo">
            <i class="avatar">
              <img src="images/touxing.jpg">
            </i>
            <span>王景笑</span>
            <span>2018-10-28</span>
          </p>
        </li>
        <!--单图-->
        <li>
          <h3 class="blogtitle">
            <a href="{{route('info')}}" target="_blank">【个人博客网站制作】自己不会个人博客网站制作，你会选择用什么博客程序源码？</a>
          </h3>
          <span class="blogpic imgscale">
            <i>
              <a href="{{route('info')}}">原创模板</a>
            </i>
            <a href="{{route('info')}}" title="">
            <img src="images/b01.jpg" alt=""></a>
          </span>
          <p class="blogtext">这些开源的博客程序源码，都是经过很多次版本测试的，都有固定的使用人群。我所知道的主流的博客程序有，Z-blog，Emlog，WordPress，Typecho等，免费的cms系统有，织梦cms（dedecms），phpcms，帝国cms（EmpireCMS）！... </p>
          <p class="bloginfo">
            <i class="avatar">
              <img src="images/touxing.jpg"></i>
              <span>王景笑</span>
              <span>2018-10-28</span>
            </p>
            <a href="{{route('info')}}" class="viewmore">阅读更多</a>
          </li>
      </ul>
    </div>
    <!--bloglist end--> 
  </div>
  <div class="rbox">
    <div class="card">
      <h2>我的名片</h2>
      <p>网名：王笑笑</p>
      <p>职业：全栈工程师</p>
      <p>现居：江苏省宿迁市沭阳县</p>
      <p>Email：wjx2422411527@163.com</p>
      <ul class="linkmore">
        <li><a href="#" target="_blank" class="iconfont icon-youxiang" title="我的邮箱"></a></li>
        <li><a href="#" target="_blank" class="iconfont icon---" title="QQ联系我"></a></li>
        <li id="weixin"><a href="#" target="_blank" class="iconfont icon-weixin" title="关注我的微信"></a><i><img src="images/wexin.jpg"></i></li>
      </ul>
    </div>
    <div class="whitebg notice">
      <h2 class="htitle">网站公告</h2>
      <ul>
        <li><a href="/">十条设计原则教你学会如何设计网页布局!</a></li>
        <li><a href="/">用js+css3来写一个手机栏目导航</a></li>
        <li><a href="/">6条网页设计配色原则,让你秒变配色高手</a></li>
        <li><a href="/">三步实现滚动条触动css动画效果</a></li>
      </ul>
    </div>
    <div class="whitebg paihang">
      <h2 class="htitle">点击排行</h2>
      <section class="topnews imgscale"><a href="{{route('time')}}"><img src="images/h1.jpg"><span>历史记录</span></a></section>
      <ul>
        <li><i></i><a href="{{route('info')}}">十条设计原则教你学会如何设计网页布局!</a></li>
        <li><i></i><a href="{{route('info')}}">用js+css3来写一个手机栏目导航</a></li>
        <li><i></i><a href="{{route('info')}}">6条网页设计配色原则,让你秒变配色高手</a></li>
        <li><i></i><a href="{{route('info')}}">三步实现滚动条触动css动画效果</a></li>
        <li><i></i><a href="{{route('info')}}">个人博客，属于我的小世界！</a></li>
        <li><i></i><a href="{{route('info')}}">安静地做一个爱设计的女子</a></li>
        <li><i></i><a href="{{route('info')}}">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a></li>
        <li><i></i><a href="{{route('info')}}">做个人博客如何用帝国cms美化留言增加头像选择</a></li>
      </ul>
    </div>
    <div class="whitebg tuijian">
      <h2 class="htitle">站长推荐</h2>
      <section class="topnews imgscale"><a href="/"><img src="images/h2.jpg"><span>6条网页设计配色原则,让你秒变配色高手</span></a></section>
      <ul>
        <li><a href="/"><i><img src="images/text01.jpg"></i>
          <p>十条设计原则教你学会如何设计网页布局!</p>
          </a></li>
        <li><a href="{{route('info')}}"><i><img src="images/text02.jpg"></i>
          <p>用js+css3来写一个手机栏目导航</p>
          </a></li>
        <li><a href="{{route('info')}}"><i><img src="images/text03.jpg"></i>
          <p>6条网页设计配色原则,让你秒变配色高手</p>
          </a></li>
        <li><a href="{{route('info')}}"><i><img src="images/text04.jpg"></i>
          <p>三步实现滚动条触动css动画效果</p>
          </a></li>
        <li><a href="{{route('info')}}"><i><img src="images/text05.jpg"></i>
          <p>个人博客，属于我的小世界！</p>
          </a></li>
        <li><a href="{{route('info')}}"><i><img src="images/text06.jpg"></i>
          <p>安静地做一个爱设计的女子</p>
          </a></li>
        <li><a href="{{route('info')}}"><i><img src="images/text07.jpg"></i>
          <p>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</p>
          </a></li>
      </ul>
    </div>
  </div>
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
      <p>1、本网站属于杨青青不属于本人</p>
      <p>2、一下术语原创:所有文章未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：<a href="#" target="_blank">这个是举报邮箱</a></p>
      <p>Copyright © <a href="#" target="_blank">这个是网址</a> All Rights Reserved. 备案号：<a href="#" target="_blank">这个是备案号</a></p>
    </div>
  </div>
  <a href="#">
  <div class="top"></div>
  </a> 
</footer>
</body>
</html>