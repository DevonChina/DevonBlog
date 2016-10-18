
<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 9]><html class="no-js lte-ie8"><![endif]-->
<!--[if (gt IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <!-- include head -->
    <meta charset="utf-8">
    <title>如何实现类似 Rails Console 的东西 - Devon(小二江湖)</title>
    <meta name="author" content="Jason Lee">
    <meta name="description"
          content="啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 1
    2
    3
    4
    ? ruby-china git:(master) rails c &hellip;">
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="#">
    <link href="/favicon.ico" rel="icon">
    <link href="/home/css/screen.css"
          media="screen, projection"
          rel="stylesheet"
          type="text/css">
    <link href="/blog/rss"
          rel="alternate"
      title="Devon (小二江湖)"
      type="application/atom+xml">
    <script src="/home/js/modernizr-2.0.js" type="text/javascript"></script>
    <script src="/home/js/ender.js" type="text/javascript"></script>
    <script src="/home/js/octopress.js" type="text/javascript"></script>
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9745660-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
      '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
    <!-- /include -->
</head>
  <body>
    <div id="wrapper">
      <header role="banner" class="site_metas">
	      <!-- include header -->
        <hgroup>
          <h1><a href="/">Devon(小二江湖)</a></h1>
          <div class="nav">
            <a href="/">主页</a> /
            <a href="/blog">博客</a> /
            <a href="/about">关于我</a>
          </div>
        </hgroup>
    	<!-- /include -->
      <!-- include social_service_links -->
      <!-- /include -->
    </header>
  <div id="content">
	<!-- content -->
<article class="entry" role="article">
    <header>
      <h1 class="entry_title">测试标题</h1>
    </header>
<div class="entry_content"><p>测试标题 测试标题 <a href="#">rails console</a>，测试标题 测试标题 测试标题 测试标题 测试标题 测试标题 测试标题 测试标题。</p>
<figure class='code'><figcaption>
<span>
</span>
</figcaption>
    <div class="highlight"><table><tr><td class="gutter"><pre class="line-numbers"><span class='line-number'>1</span>
      <span class='line-number'>2</span>
      <span class='line-number'>3</span>
      <span class='line-number'>4</span>
      </pre>
          </td><td class='code'>
      <pre><code class='bash'>
          <span class='line'>?  ruby-china git:<span class="o">(</span>master<span class="o">)</span> rails c
          </span><span class='line'>Loading development environment <span class="o">(</span>Rails 4.0.0<span class="o">)</span>
          </span><span class='line'>irb<span class="o">(</span>main<span class="o">)</span>:001:0&gt; @post <span class="o">=</span> Post.last
          </span><span class='line'>irb<span class="o">(</span>main<span class="o">)</span>:001:0&gt; @post.update_attribute<span class="o">(</span>:title, <span class="s2">&quot;Foo bar&quot;</span><span class="o">)</span>
          </span></code></pre></td></tr>
      </table>
    </div>
</figure>
<p>创建下面这些文件：</p>

<figure class='code'>
  <figcaption>
    <span></span>
  </figcaption>
    <div class="highlight"><table><tr><td class="gutter"><pre class="line-numbers"><span class='line-number'>1</span>
        <span class='line-number'>2</span>
        <span class='line-number'>3</span>
        </pre></td><td class='code'><pre><code class='bash'><span class='line'>foo
        </span><span class='line'>  Rakefile
        </span></code></pre></td></tr></table></div></figure>
    </div>
  <footer>
    <p class="meta">
      <time datetime="2016-10-18 09:09:00 +0800" pubdate>2016-10-18</time>
      <span class="categories">
	<a class='category' href='/blog'></a>Blog Devon, <a class='blog' href='/blog'>Blog Devon</a>
      </span>
    </p>
    <div class="sharing">
    </div>
    <section>
      <h3 id="comments">Comments</h3>
      <div id="disqus_thread" aria-live="polite">
	<noscript>
	  Javascript not support.
	  (<a href="#">Disqus</a>)
	</noscript>
      </div>
    </section>
  </footer>
</div>
	<!-- /content -->
      </div>
      <footer role="contentinfo">
	<!-- include footer -->
	<p>
  Copyright &copy; 2016 - DevonChina(小二江湖) -
  <span class="credit">Powered by <a href="http://www.fanxiao2.net">Octopress</a></span>
</p>
	<!-- /include -->
      </footer>
      <!-- include after_footer -->
<script type="text/javascript">
      var disqus_shortname = 'huacnlee';
	// var disqus_developer = 1;
	var disqus_identifier = '#';
	var disqus_url = '#';
	var disqus_script = 'embed.js';
    (function () {
      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = 'http://' + disqus_shortname + '.disqus.com/' + disqus_script;
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    }());
</script>
  <script type="text/javascript">
    (function(){
      var twitterWidgets = document.createElement('script');
      twitterWidgets.type = 'text/javascript';
      twitterWidgets.async = true;
      twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
      document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
    })();
  </script>
      <!-- /include -->
    </div>
  </body>
</html>
