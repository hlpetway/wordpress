<?php get_header(); ?>

      <div id="main" class="site-main clear">

        <div id="primary" class="content-area">
          <div id="content" class="site-content" role="main">
<!-- This is an example of what the wordpress loop looks like -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article>
    <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
    <?php the_content(); ?>
  </article>
<?php endwhile; endif; ?>


            <article id="post-1686" class="post-1686 post type-post status-publish format-standard hentry category-articles">
              <header class="entry-header">
                <div class="clear">
                  <h1 class="entry-title"><a href="sassy-article-title/index.html" rel="bookmark">Sassy Article Title</a></h1>
                  <div class="pull-right container-share no-mobile">
                    <a href="#" class="icon-share"></a>
                    <div class="box-share">
                      <h4 class="box-header">Share this</h4>
                      <div class="box-content">
                        <a onclick="socialShare('tw', 'sassy-article-title/index.html')" class="icon-social tw-grey">Share via Twitter</a>
                        <a onclick="socialShare('fb', 'sassy-article-title/index.html')" class="icon-social fb-grey">Share via Facebook</a>
                        <a onclick="socialShare('li', 'sassy-article-title/index.html', 'Sassy Article Title')" class="icon-social li-grey">Share via LinkedIn</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="entry-meta">
                  <span class="byline"><span class="author vcard"><a class="url fn n" href="author/hailey/index.html" title="View all posts by Hailey Petway" rel="author">Hailey&nbsp;Petway</a></span></span>&nbsp;-&nbsp;<a href="sassy-article-title/index.html" title="3:57 pm" rel="bookmark"><time class="entry-date" datetime="2014-07-18T15:57:14+00:00">July 18, 2014</time></a>    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                  <p><a href="wp-content/uploads/2014/07/blog-post-image.jpg"><img class="alignnone size-full wp-image-1689" src="wp-content/uploads/2014/07/blog-post-image.jpg" alt="blog-post-image" width="500" height="233" /></a></p>
                  <p>Gluten-free skateboard stumptown Portland. Skateboard scenester wolf yr, master cleanse tofu mustache. Salvia Helvetica Tumblr, keytar dreamcatcher Marfa post-ironic chia Banksy letterpress drinking vinegar food truck literally messenger bag Echo Park. Next level quinoa vinyl four loko flannel occupy DIY kitsch, YOLO fap sriracha. Keytar meggings crucifix brunch, Pitchfork DIY polaroid ethnic. Flannel ugh hoodie pork belly. Gluten-free Shoreditch crucifix flexitarian before they sold out YOLO.</p>
                  <p><em>This article was written by <a href="mailto:hailey@haileypetway.com">Hailey Petway</a>.</em></p>
                </div><!-- .entry-content -->

                <!-- asdfghjkl -->

                <footer class="entry-meta"></footer><!-- .entry-meta -->

              </article><!-- #post-## -->


              <article id="post-1665" class="post-1665 post type-post status-publish format-standard hentry category-articles">
                <header class="entry-header">
                  <div class="clear">
                    <h1 class="entry-title"><a href="second-sassy-article/index.html" rel="bookmark">Second Sassy Article</a></h1>
                    <div class="pull-right container-share no-mobile">
                      <a href="#" class="icon-share"></a>
                      <div class="box-share">
                        <h4 class="box-header">Share this</h4>
                        <div class="box-content">
                          <a onclick="socialShare('tw', 'second-sassy-article/index.html')" class="icon-social tw-grey">Share via Twitter</a>
                          <a onclick="socialShare('fb', 'second-sassy-article/index.html')" class="icon-social fb-grey">Share via Facebook</a>
                          <a onclick="socialShare('li', 'second-sassy-article/index.html', 'Second Sassy Article')" class="icon-social li-grey">Share via LinkedIn</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-meta">
                    <span class="byline"><span class="author vcard"><a class="url fn n" href="author/index.html" title="View all posts by ZenPurchase" rel="author">ZenPurchase&nbsp;</a></span></span>&nbsp;-&nbsp;<a href="example1/index.html" title="8:50 pm" rel="bookmark"><time class="entry-date" datetime="2014-07-11T20:50:26+00:00">July 11, 2014</time></a>
                  </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                  <p><a href="wp-content/uploads/2014/07/blog-post.png"><img class="alignnone size-full wp-image-1682" src="wp-content/uploads/2014/07/blog-post.png" alt="blog-post" width="500" height="233" /></a></p>
                  <p>Gluten-free skateboard stumptown Portland. Skateboard scenester wolf yr, master cleanse tofu mustache. Salvia Helvetica Tumblr, keytar dreamcatcher Marfa post-ironic chia Banksy letterpress drinking vinegar food truck literally messenger bag Echo Park. Next level quinoa vinyl four loko flannel occupy DIY kitsch, YOLO fap sriracha. Keytar meggings crucifix brunch, Pitchfork DIY polaroid ethnic. Flannel ugh hoodie pork belly. Gluten-free Shoreditch crucifix flexitarian before they sold out YOLO.</p>
                  <p><strong>About ZenPurchase:</strong><br />
                    <p>Gluten-free skateboard stumptown Portland. Skateboard scenester wolf yr, master cleanse tofu mustache. Salvia Helvetica Tumblr, keytar dreamcatcher Marfa post-ironic chia Banksy letterpress drinking vinegar food truck literally messenger bag Echo Park. Next level quinoa vinyl four loko flannel occupy DIY kitsch, YOLO fap sriracha. Keytar meggings crucifix brunch, Pitchfork DIY polaroid ethnic. Flannel ugh hoodie pork belly. Gluten-free Shoreditch crucifix flexitarian before they sold out YOLO.</p>
                    <p>To learn more about ZenPurchase, visit: <a href="http://www.zenpurchase.com/">www.zenpurchase.com</a></p>
                    <p><em>This article was written by <a href="mailto:sales@zenpurchase.com">ZenPurchase</a>.</em></p>
                  </div><!-- .entry-content -->

                  <!-- asdfghjkl -->

                  <footer class="entry-meta"></footer><!-- .entry-meta -->
                </article><!-- #post-## -->

                <nav role="navigation" id="nav-below" class="navigation-paging">
                  <h1 class="screen-reader-text">Post navigation</h1>
                  <div class="nav-previous"><a href="page/2/index.html" ><span class="meta-nav">&laquo;&nbsp;Older posts</span></a></div>

                </nav><!-- #nav-below -->

              </div><!-- #content -->
            </div><!-- #primary -->

            <div id="secondary" class="widget-area" role="complementary">
              <aside id="search-2" class="widget widget_search">  <form method="get" id="searchform" class="searchform" action="http://zenpurchase.com/" role="search">
                <label for="s" class="screen-reader-text">Search</label>
                <input type="search" class="field" name="s" value="" id="s" placeholder="Search &hellip;" />
                <input type="submit" class="submit" id="searchsubmit" value="Search" />
              </form>

            </aside>    <aside id="recent-posts-2" class="widget widget_recent_entries">    <h1 class="widget-title">Recent Posts</h1>    <ul>
            <li>
              <a href="example1/index.html">The Cloud of Everything: A Universal Workspace</a>
              <span class="post-date">July 18, 2014</span>
            </li>
            <li>
              <a href="example2/index.html">World Cup: Run Your Own CFD Analysis of a Spinning Soccer Ball</a>
              <span class="post-date">July 11, 2014</span>
            </li>
            <li>
            </ul>
          </aside><aside id="twitter-3" class="widget widget_twitter"><div><h1 class="widget-title"><span class='twitterwidget twitterwidget-title'>Twitter: zenpurchase</span></h1><ul><li><span class='entry-content'>The "Cloud of Everything" is here: <a href="http://t.co/sIPWyQxO5p" target="_blank">http://t.co/sIPWyQxO5p</a></span> <span class='entry-meta'><span class='time-meta'><a href="http://twitter.com/zenpurchase/statuses/490227326915842048" target="_blank">about 5 days ago</a></span></span></li><li><span class='entry-content'>RT <a href="http://twitter.com/ShawnWasserman" class="twitter-user" target="_blank">@ShawnWasserman</a>: <a href="http://twitter.com/search?q=%23CFD" class="twitter-hashtag" target="_blank">#CFD</a> of a <a href="http://twitter.com/search?q=%23Soccer" class="twitter-hashtag" target="_blank">#Soccer</a> Ball’s Curving Flight &gt; <a href="http://twitter.com/zenpurchase" class="twitter-user" target="_blank">@zenpurchase</a> <a href="http://t.co/GoYS8B4626" target="_blank">http://t.co/GoYS8B4626</a> <a href="http://t.co/hPmD87ytHB" target="_blank">http://t.co/hPmD87ytHB</a></span> <span class='entry-meta'><span class='time-meta'><a href="http://twitter.com/zenpurchase/statuses/489805671160741888" target="_blank">about 6 days ago</a></span></span></li><li><span class='entry-content'>GOAL! In preparation for the final match, run your own CFD analysis of a soccer ball using <a href="http://twitter.com/ConvergeCFD" class="twitter-user" target="_blank">@ConvergeCFD</a> and ZenPurchase. <a href="http://t.co/9QWy552Xsu" target="_blank">http://t.co/9QWy552Xsu</a></span> <span class='entry-meta'><span class='time-meta'><a href="http://twitter.com/zenpurchase/statuses/487714742329290753" target="_blank">about 1 week ago</a></span></span></li><li><span class='entry-content'>User explains how using the <a href="http://twitter.com/search?q=%23ZenPurchase" class="twitter-hashtag" target="_blank">#ZenPurchase</a> platform allowed him to run better, faster AVL <a href="http://twitter.com/search?q=%23simulations" class="twitter-hashtag" target="_blank">#simulations</a>. <a href="http://t.co/g2jQjIVw1y" target="_blank">http://t.co/g2jQjIVw1y</a></span> <span class='entry-meta'><span class='time-meta'><a href="http://twitter.com/rescaleinc/statuses/487367293114933248" target="_blank">about 1 week ago</a></span></span></li><li><span class='entry-content'>Do you want to run CAE simulations in the cloud? <a href="http://t.co/vd0HvEbKea" target="_blank">http://t.co/vd0HvEbKea</a></span> <span class='entry-meta'><span class='time-meta'><a href="http://twitter.com/rescaleinc/statuses/484799167496089600" target="_blank">about 2 weeks ago</a></span></span></li><li><span class='entry-content'>Do you use NX Nastran? Run simulations on demand in the cloud. <a href="https://t.co/Fr2vY3U9Tl" target="_blank">https://t.co/Fr2vY3U9Tl</a></span> <span class='entry-meta'><span class='time-meta'><a href="http://twitter.com/rescaleinc/statuses/484468650993123328" target="_blank">about 3 weeks ago</a></span></span></li></ul></div></aside><aside id="tag_cloud-2" class="widget widget_tag_cloud"><h1 class="widget-title">Tags</h1><div class="tagcloud"><a href='tag/aerospace/index.html' class='tag-link-6' title='1 topic' style='font-size: 8pt;'>aerospace</a>
          <a href='tag/analysis/index.html' class='tag-link-28' title='1 topic' style='font-size: 8pt;'>analysis</a>
          <a href='tag/automotive/index.html' class='tag-link-11' title='1 topic' style='font-size: 8pt;'>automotive</a>
          <a href='tag/cfd/index.html' class='tag-link-9' title='2 topics' style='font-size: 16.4pt;'>cfd</a>
          <a href='tag/cloud/index.html' class='tag-link-15' title='2 topics' style='font-size: 16.4pt;'>cloud</a>
          <a href='tag/doe/index.html' class='tag-link-12' title='1 topic' style='font-size: 8pt;'>doe</a>
          <a href='tag/engineering/index.html' class='tag-link-27' title='1 topic' style='font-size: 8pt;'>engineering</a>
          <a href='tag/feature/index.html' class='tag-link-13' title='3 topics' style='font-size: 22pt;'>feature</a>
          <a href='tag/gce/index.html' class='tag-link-16' title='1 topic' style='font-size: 8pt;'>gce</a>
          <a href='tag/hpc/index.html' class='tag-link-10' title='3 topics' style='font-size: 22pt;'>hpc</a>
          <a href='tag/oil-and-gas/index.html' class='tag-link-29' title='1 topic' style='font-size: 8pt;'>oil and gas</a>
          <a href='tag/parallel/index.html' class='tag-link-7' title='1 topic' style='font-size: 8pt;'>parallel</a>
          <a href='tag/platform/index.html' class='tag-link-14' title='2 topics' style='font-size: 16.4pt;'>platform</a>
          <a href='tag/security/index.html' class='tag-link-8' title='2 topics' style='font-size: 16.4pt;'>security</a>
          <a href='tag/simulation/index.html' class='tag-link-24' title='1 topic' style='font-size: 8pt;'>simulation</a></div>
        </aside>  </div><!-- #secondary -->

      </div><!-- #main -->
<?php get_footer(); ?>
