@extends('extends/globalMazaya')

@section('css')
<link href="{{URL::route('index')}}/css/pages/mazaya_list.css"  media="all" rel="stylesheet" type="text/css">
@stop

@section('content')
<div id="mywrapper">
	<!-- post wrapper start -->
	<div id="post-wrapper">
		<div class="post-container">
			<div class="clear"></div>
			<div id="singlepage">
				<div class="main section" id="main">
					<div class="widget Blog" id="Blog1">
						<div class="breadcrumbs">
							<span> <a href="http://mazaya-soratemplates.blogspot.com/" rel="nofollow"> Home </a> </span>
							/
							<span> Gallery </span>
						</div>
						<div class="blog-posts hfeed">
							<div class="status-msg-wrap">
								<div class="status-msg-body">
									Showing posts with label <b>Gallery</b>. <a href="http://mazaya-soratemplates.blogspot.com/">Show all posts</a>
								</div>
								<div class="status-msg-border">
									<div class="status-msg-bg">
										<div class="status-msg-hidden">
											Showing posts with label <b>Gallery</b>. <a href="http://mazaya-soratemplates.blogspot.com/">Show all posts</a>
										</div>
									</div>
								</div>
							</div>
							<div style="clear: both;"></div>
							<!-- google_ad_section_start(name=default) -->

							<div class="date-outer">

								<div class="date-posts">

									<div class="post-outer">
										@foreach($news as $k => $v)
										
										<article itemtype="http://schema.org/BlogPosting" itemscope="itemscope" itemprop="blogPost" class="post hentry">
											<meta itemprop="image" content="http://4.bp.blogspot.com/-3lE8eW_Ulnk/U7VeOFqgJXI/AAAAAAAAAxs/MF82hovzQU8/s1600/biz1-708x350.jpg">
											<a href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html">
											<div class="img-thumbnail">
												<span class="rollover"></span>
												<img width="300" height="190" title="{{$v->title}}" alt="{{$v->title}}" src="{{$v->image_full}}">
											</div> </a>
											<a name="5387998634897164974"></a>
											@if($v->content == 'no Data')
						    					<h2 itemprop="name" class="post-title entry-title"><span> <a href="{{$v->href}}"> {{$v->title}} </a> </span></h2>
						    				@else										 
						    					<h2 itemprop="name" class="post-title entry-title"><span> <a href="{{URL::route('trangdetail',$v->id)}}"> {{$v->title}} </a> </span></h2>
						    				@endif
											
											
											
											<!-- <h2 itemprop="name" class="post-title entry-title"><span> <a href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html"> Fusce luctus erat et imperdiet vulputate </a> </span></h2> -->
											<div class="post-info">
												<span class="author-info"> <i class="fa fa-user"></i> <span class="vcard"> <span itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="author" class="fn">
															<meta itemprop="url" content="https://plus.google.com/104219125408123734587">
															<a title="author profile" rel="author" href="https://plus.google.com/104219125408123734587" class="g-profile" data-gapiscan="true" data-onload="true" data-gapiattached="true"> <span itemprop="name"> Sora Templates </span> </a> </span> </span> </span>
												<meta itemprop="url" content="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html">
												<span class="time-info"> <i class="fa fa-calendar"></i> <a title="permanent link" rel="bookmark" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html" class="timestamp-link"> <abbr title="2013-12-14T09:59:00-08:00" itemprop="datePublished" class="published updated"> 12/14/2013 </abbr> </a> </span>
												<span class="comment-info"> <i class="fa fa-comments"></i> <a onclick="" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html#comment-form"> Add Comment </a> </span>
												<span class="item-control blog-admin pid-1718655890"> <a title="Edit Post" href="https://www.blogger.com/post-edit.g?blogID=7811468815270641289&amp;postID=5387998634897164974&amp;from=pencil"> <b style="color:#EE3322;"> <i class="fa fa-pencil"></i> Edit </b> </a> </span>
											</div>
											<div class="post-header">
												<div class="post-header-line-1"></div>
											</div>
											<div itemprop="articleBody description" id="post-body-5387998634897164974" class="post-body entry-content">
												<div>
													{{$v->desc}}
												</div>
												<a title="Fusce luctus erat et imperdiet vulputate" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html#more" class="readmore"> Read More <i class="fa fa-caret-right"></i> </a>
												<div style="clear: both;"></div>
											</div>
										</article>
										@endforeach
										<!-- <article itemtype="http://schema.org/BlogPosting" itemscope="itemscope" itemprop="blogPost" class="post hentry">
											<meta itemprop="image" content="http://4.bp.blogspot.com/-3lE8eW_Ulnk/U7VeOFqgJXI/AAAAAAAAAxs/MF82hovzQU8/s1600/biz1-708x350.jpg">
											<a href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html">
											<div class="img-thumbnail">
												<span class="rollover"></span>
												<img width="300" height="190" title="Fusce luctus erat et imperdiet vulputate" alt="Fusce luctus erat et imperdiet vulputate" src="http://4.bp.blogspot.com/-3lE8eW_Ulnk/U7VeOFqgJXI/AAAAAAAAAxs/MF82hovzQU8/w300-h190-c/biz1-708x350.jpg">
											</div> </a>
											<a name="5387998634897164974"></a>
											<h2 itemprop="name" class="post-title entry-title"><span> <a href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html"> Fusce luctus erat et imperdiet vulputate </a> </span></h2>
											<div class="post-info">
												<span class="author-info"> <i class="fa fa-user"></i> <span class="vcard"> <span itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="author" class="fn">
															<meta itemprop="url" content="https://plus.google.com/104219125408123734587">
															<a title="author profile" rel="author" href="https://plus.google.com/104219125408123734587" class="g-profile" data-gapiscan="true" data-onload="true" data-gapiattached="true"> <span itemprop="name"> Sora Templates </span> </a> </span> </span> </span>
												<meta itemprop="url" content="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html">
												<span class="time-info"> <i class="fa fa-calendar"></i> <a title="permanent link" rel="bookmark" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html" class="timestamp-link"> <abbr title="2013-12-14T09:59:00-08:00" itemprop="datePublished" class="published updated"> 12/14/2013 </abbr> </a> </span>
												<span class="comment-info"> <i class="fa fa-comments"></i> <a onclick="" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html#comment-form"> Add Comment </a> </span>
												<span class="item-control blog-admin pid-1718655890"> <a title="Edit Post" href="https://www.blogger.com/post-edit.g?blogID=7811468815270641289&amp;postID=5387998634897164974&amp;from=pencil"> <b style="color:#EE3322;"> <i class="fa fa-pencil"></i> Edit </b> </a> </span>
											</div>
											<div class="post-header">
												<div class="post-header-line-1"></div>
											</div>
											<div itemprop="articleBody description" id="post-body-5387998634897164974" class="post-body entry-content">
												<div>
													Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,  egestas imperdiet nulla nisl qui...
												</div>
												<a title="Fusce luctus erat et imperdiet vulputate" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html#more" class="readmore"> Read More <i class="fa fa-caret-right"></i> </a>
												<div style="clear: both;"></div>
											</div>
										 --></article>

									</div>

								</div>
							</div>

							<!-- google_ad_section_end -->
						</div>
						<div class="pagenavi">

							<div class="clear"></div>
						</div>
						<div class="blog-feeds">
							<div class="feed-links">
								Subscribe to:
								<a class="feed-link" href="http://mazaya-soratemplates.blogspot.com/feeds/posts/default" target="_blank" type="application/atom+xml"> Posts
								(
								Atom
								) </a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--singlepage end-->
		</div>
	</div>
	<!-- post wrapper end -->
</div>
@stop

@section('js')
@stop


