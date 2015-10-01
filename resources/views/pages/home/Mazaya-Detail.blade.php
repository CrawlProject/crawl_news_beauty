@extends('extends/globalMazaya')

@section('css')
<link href="{{URL::route('index')}}/css/pages/mazaya_detail.css"  media="all" rel="stylesheet" type="text/css">
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
							<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="http://mazaya-soratemplates.blogspot.com/" itemprop="url"> <span itemprop="title"> Home </span> </a> </span>
							/

							<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="http://mazaya-soratemplates.blogspot.com/search/label/Technology?&amp;max-results=8" itemprop="url"> <span itemprop="title"> Technology </span> </a> </span>

							/
							<span> Duis quis erat non nunc fringilla </span>
						</div>
						<div class="blog-posts hfeed">
							<!-- google_ad_section_start(name=default) -->

							<div class="date-outer">

								<div class="date-posts">

									<div class="post-outer">
										<article class="post hentry" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
											<meta content="http://4.bp.blogspot.com/-mVzgU3DR1UM/VM83cWaaSHI/AAAAAAAADwo/WilOIliD59I/s1600/74-640x512.jpg" itemprop="image">
											<a name="253673249064399512"></a>
											<h1 class="post-title entry-title" itemprop="name"> {{$news->title}} </h1>
											<div class="post-info">
												<span class="author-info"> <i class="fa fa-user"></i> <span class="vcard"> <span class="fn" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
															<meta content="https://plus.google.com/104219125408123734587" itemprop="url">
															<a data-gapiattached="true" data-onload="true" data-gapiscan="true" class="g-profile" href="https://plus.google.com/104219125408123734587" rel="author" title="author profile"> <span itemprop="name"> Sora Templates </span> </a> </span> </span> </span>
												<meta content="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html" itemprop="url">
												<span class="time-info"> <i class="fa fa-calendar"></i> <a class="timestamp-link" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html" rel="bookmark" title="permanent link"> <abbr class="published updated" itemprop="datePublished" title="2014-07-03T06:49:00-07:00"> 7/03/2014 </abbr> </a> </span>
												<span class="label-info"> <i class="fa fa-tags"></i> <a href="http://mazaya-soratemplates.blogspot.com/search/label/Technology" rel="tag"> Technology </a> </span>
												<span class="item-control blog-admin pid-1718655890"> <a href="https://www.blogger.com/post-edit.g?blogID=7811468815270641289&amp;postID=253673249064399512&amp;from=pencil" title="Edit Post"> <b style="color:#EE3322;"> <i class="fa fa-pencil"></i> Edit </b> </a> </span>
											</div>
											<div class="post-header">
												<div class="post-header-line-1"></div>
											</div>
											<div class="post-body entry-content" id="post-body-253673249064399512" itemprop="description articleBody">
												<div dir="ltr" style="text-align: left;" trbidi="on">
													{!! $news->content !!}
												</div>
												
												<div style="clear: both;"></div>
												<div id="share-post">
													<a class="facebook" href="https://www.blogger.com/share-post.g?blogID=7811468815270641289&amp;postID=253673249064399512&amp;target=facebook" onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target="_blank" title="Share to Facebook"> <span></span> Share on Facebook </a>
													<a class="twitter" href="https://www.blogger.com/share-post.g?blogID=7811468815270641289&amp;postID=253673249064399512&amp;target=twitter" target="_blank" title="Share to Twitter"> <span></span> Share on Twitter </a>
													<a class="google" href="https://plus.google.com/share?url=http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html" onclick='javascript:window.open(this.href,   "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;' rel="nofollow" title="Share this on Google+"> <span></span> Share on Google Plus </a>
												</div>
												<div style="clear: both;"></div>
												<div id="author-box">
													<div class="block-head">
														<h3> About
														Sora Templates </h3>
														<div class="stripe-line"></div>
													</div>
													<div class="post-listing">
														<div class="author-avatar">
															<img src="{{URL::route('index')}}/data-temp/photo.png" height="60" width="60">
														</div>
														<div class="author-description">
															This is a short description in the author
															block about the author. You edit it by entering text in the
															"Biographical Info" field in the user admin panel.
														</div>
														<div class="clear"></div>
													</div>
												</div>
												<div id="related-posts">
													<p class="title title-medium"></p><h2><span> <span> RELATED POSTS </span> </span></h2><p></p>
													
													<h1><b></b></h1>
													<div style="clear: both;">
														<a style="text-decoration:none;margin:0 7px 0px 0;float:left;" href="http://mazaya-soratemplates.blogspot.com/2013/12/fusce-luctus-erat-et-imperdiet-vulputate_14.html"><img class="related_img" src="{{URL::route('index')}}/data-temp/biz1-708x350.jpg">
														<br>
														<div style="width:202px;padding:9px 14px 20px;color:#fff;height:25px;text-align:left;margin:-61px 0px 0px 0px; font: normal 15px Oswald, sans-serif; line-height:20px;background: #111;opacity: 0.7;filter: alpha(opacity = 70);">
															Fusce luctus erat et imperdiet vulp...
														</div></a><a style="text-decoration:none;margin:0 7px 0px 0;float:left;" href="http://mazaya-soratemplates.blogspot.com/2013/12/duis-quis-erat-non-nunc-fringilla_14.html"><img class="related_img" src="{{URL::route('index')}}/data-temp/audio3-700x352.jpg">
														<br>
														<div style="width:202px;padding:9px 14px 20px;color:#fff;height:25px;text-align:left;margin:-61px 0px 0px 0px; font: normal 15px Oswald, sans-serif; line-height:20px;background: #111;opacity: 0.7;filter: alpha(opacity = 70);">
															Duis quis erat non nunc fringilla
														</div></a><a style="text-decoration:none;margin:0 7px 0px 0;float:left;" href="http://mazaya-soratemplates.blogspot.com/2013/12/donec-volutpat-nibh-sit-amet-libero_14.html"><img class="related_img" src="{{URL::route('index')}}/data-temp/audio2-700x352.jpg">
														<br>
														<div style="width:202px;padding:9px 14px 20px;color:#fff;height:25px;text-align:left;margin:-61px 0px 0px 0px; font: normal 15px Oswald, sans-serif; line-height:20px;background: #111;opacity: 0.7;filter: alpha(opacity = 70);">
															Donec volutpat nibh sit amet libero...
														</div></a>
													</div>
												</div>
												<div class="clear"></div>
											</div>
										</article>
										<div id="top-comment">
											<div class="top-comment-widget-menu clear">
												<ul>
													<dl class="top-comment blogico selected">
														Blogger Comment
													</dl>
													<dl class="top-comment faceico">
														Facebook Comment
													</dl>
												</ul>
											</div>
											<div style="display: block;" class="widget2" id="top-comment1">
												<div class="centerare1">
													<div class="comments" id="comments">
														<a name="comments"></a>
														<div class="komhead">
															<h4> 5
															comments
															: </h4>
															<div class="stripe-line"></div>
														</div>
														<div class="comments-content">
															
															
															<div id="comment-holder">

																<div id="bc_0_6C" kind="c">
																	<div id="bc_0_6CT">
																		<div id="bc_0_5T" class="comment-thread" kind="r" t="0" u="0">
																			<ol id="bc_0_5TB">
																				<li id="bc_0_1B" class="comment" kind="b">
																					<div class="avatar-image-container"><img src="{{URL::route('index')}}/data-temp/photo_002.png">
																					</div>
																					<div id="c515501214389986316" class="comment-block">
																						<div id="bc_0_1M" class="comment-header" kind="m">
																							<cite class="user blog-author"><a rel="nofollow" href="https://www.blogger.com/profile/07131513716671825275">Sora Templates</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html?showComment=1422876971228#c515501214389986316">February 2, 2015 at 3:36 AM</a></span>
																						</div>
																						<p id="bc_0_1MC" class="comment-content">
																							This is Testing Comment
																						</p><span id="bc_0_1MN" class="comment-actions secondary-text" kind="m"><a kind="i" href="javascript:;" target="_self" o="r">Reply</a><span class="item-control blog-admin pid-1718655890"><a o="d" target="_self" href="https://www.blogger.com/delete-comment.g?blogID=7811468815270641289&amp;postID=515501214389986316">Delete</a></span></span>
																					</div>
																					<div id="bc_0_1BR" class="comment-replies">
																						<span id="bc_0_1b+seedEAbMD" kind="d">
																							<div id="bc_0_0T" class="comment-thread inline-thread" kind="t" t="0" u="0">
																								<span id="bc_0_0TT" class="thread-toggle thread-expanded" kind="g"><span id="bc_0_0TA" class="thread-arrow"></span><span id="bc_0_0TN" class="thread-count"><span id="bc_0_0TNT" style="display: none;"></span><span id="bc_0_0TNU" style="display: none;"></span><a href="javascript:;" target="_self">Replies</a>
																										<div id="bc_0_0TD" class="thread-dropContainer thread-expanded">
																											<span class="thread-drop"></span>
																										</div></span></span>
																								<ol id="bc_0_0TC" class="thread-chrome thread-expanded">
																									<div>
																										<li id="bc_0_0B" class="comment" kind="b">
																											<div class="avatar-image-container"><img src="{{URL::route('index')}}/data-temp/photo_002.png">
																											</div>
																											<div id="c1496783606946925164" class="comment-block">
																												<div id="bc_0_0M" class="comment-header" kind="m">
																													<cite class="user blog-author"><a rel="nofollow" href="https://www.blogger.com/profile/07131513716671825275">Sora Templates</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html?showComment=1422876981427#c1496783606946925164">February 2, 2015 at 3:36 AM</a></span>
																												</div>
																												<p id="bc_0_0MC" class="comment-content">
																													Test Comment
																												</p><span id="bc_0_0MN" class="comment-actions secondary-text" kind="m"><span class="item-control blog-admin pid-1718655890"><a o="d" target="_self" href="https://www.blogger.com/delete-comment.g?blogID=7811468815270641289&amp;postID=1496783606946925164">Delete</a></span></span>
																											</div><div id="bc_0_0BR" class="comment-replies"></div><div id="bc_0_0B_box" class="comment-replybox-single"></div>
																										</li>
																									</div>
																									<div id="bc_0_0I" class="continue" kind="ci">
																										<a href="javascript:;" target="_self">Reply</a>
																									</div>
																								</ol><div id="bc_0_0T_box" class="comment-replybox-thread"></div>
																							</div></span>
																					</div><div id="bc_0_1B_box" class="comment-replybox-single"></div>
																				</li>
																				<li id="bc_0_2B" class="comment" kind="b">
																					<div class="avatar-image-container"><img src="{{URL::route('index')}}/data-temp/photo_002.png">
																					</div>
																					<div id="c2055617612349608421" class="comment-block">
																						<div id="bc_0_2M" class="comment-header" kind="m">
																							<cite class="user blog-author"><a rel="nofollow" href="https://www.blogger.com/profile/07131513716671825275">Sora Templates</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html?showComment=1422876991207#c2055617612349608421">February 2, 2015 at 3:36 AM</a></span>
																						</div>
																						<p id="bc_0_2MC" class="comment-content">
																							This is Second Testing Comment
																						</p><span id="bc_0_2MN" class="comment-actions secondary-text" kind="m"><a kind="i" href="javascript:;" target="_self" o="r">Reply</a><span class="item-control blog-admin pid-1718655890"><a o="d" target="_self" href="https://www.blogger.com/delete-comment.g?blogID=7811468815270641289&amp;postID=2055617612349608421">Delete</a></span></span>
																					</div><div id="bc_0_2BR" class="comment-replies"></div><div id="bc_0_2B_box" class="comment-replybox-single"></div>
																				</li>
																				<li id="bc_0_3B" class="comment" kind="b">
																					<div class="avatar-image-container"><img src="{{URL::route('index')}}/data-temp/photo.jpg">
																					</div>
																					<div id="c2363911363462219640" class="comment-block">
																						<div id="bc_0_3M" class="comment-header" kind="m">
																							<cite class="user"><a rel="nofollow" href="https://www.blogger.com/profile/14697337678416942275">Mahmmoud ibrahim</a></cite><span class="icon user"></span><span class="datetime secondary-text"><a rel="nofollow" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html?showComment=1423445549543#c2363911363462219640">February 8, 2015 at 5:32 PM</a></span>
																						</div>
																						<p id="bc_0_3MC" class="comment-content">
																							<a href="http://koraonline-tv.blogspot.com/" rel="nofollow">kora online</a>
																						</p><span id="bc_0_3MN" class="comment-actions secondary-text" kind="m"><a kind="i" href="javascript:;" target="_self" o="r">Reply</a><span class="item-control blog-admin pid-702870999"><a o="d" target="_self" href="https://www.blogger.com/delete-comment.g?blogID=7811468815270641289&amp;postID=2363911363462219640">Delete</a></span></span>
																					</div><div id="bc_0_3BR" class="comment-replies"></div><div id="bc_0_3B_box" class="comment-replybox-single"></div>
																				</li>
																				<li id="bc_0_4B" class="comment" kind="b">
																					<div class="avatar-image-container"><img src="{{URL::route('index')}}/data-temp/photo_002.jpg">
																					</div>
																					<div id="c107081653837581849" class="comment-block">
																						<div id="bc_0_4M" class="comment-header" kind="m">
																							<cite class="user"><a rel="nofollow" href="https://www.blogger.com/profile/15186690305571639456">Juanma Nieto</a></cite><span class="icon user"></span><span class="datetime secondary-text"><a rel="nofollow" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html?showComment=1426870413306#c107081653837581849">March 20, 2015 at 9:53 AM</a></span>
																						</div>
																						<p id="bc_0_4MC" class="comment-content">
																							I used it! http://trotamundosandaluz.blogspot.com
																						</p><span id="bc_0_4MN" class="comment-actions secondary-text" kind="m"><a kind="i" href="javascript:;" target="_self" o="r">Reply</a><span class="item-control blog-admin pid-430257988"><a o="d" target="_self" href="https://www.blogger.com/delete-comment.g?blogID=7811468815270641289&amp;postID=107081653837581849">Delete</a></span></span>
																					</div><div id="bc_0_4BR" class="comment-replies"></div><div id="bc_0_4B_box" class="comment-replybox-single"></div>
																				</li>
																			</ol>
																			<div style="display: none;" id="bc_0_5I" class="continue" kind="ci">
																				<a href="javascript:;" target="_self">Add comment</a>
																			</div>
																			<div id="bc_0_5T_box" class="comment-replybox-thread">
																				<div class="comment-form">
																					<a name="comment-form"></a>
																					<div class="pesan-komentar">
																						<p></p>
																					</div>
																					<a href="https://www.blogger.com/comment-iframe.g?blogID=7811468815270641289&amp;postID=253673249064399512&amp;blogspotRpcToken=5920411" id="comment-editor-src"></a>
																					<iframe style="display: block;" allowtransparency="true" class="blogger-iframe-colorize blogger-comment-from-post" id="comment-editor" name="comment-editor" src="{{URL::route('index')}}/data-temp/comment-iframe.html" frameborder="0" height="269px" width="100%"></iframe>
																					
																				</div>
																			</div>
																			<div id="bc_0_5L" class="loadmore loaded" kind="rb">
																				<a href="javascript:;" target="_self">Load more...</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<p class="comment-footer"></p>
														<p></p>
														<div id="backlinks-container">
															<div id="Blog1_backlinks-container"></div>
														</div>
													</div>
												</div>
											</div>
											<div style="display: none;" class="widget2" id="top-comment2">
												<div class="centerare2">
													<div class="fbcombox">
														
														<div>
															<fb:comments class="fb_iframe_widget fb_iframe_widget_loader" fb-xfbml-state="parsed" colorscheme="light" height="110" href="http://mazaya-soratemplates.blogspot.com/2014/07/duis-quis-erat-non-nunc-fringilla_3.html" title="Duis quis erat non nunc fringilla" width="639" xid="253673249064399512">
																<span style="height: 100px; width: 639px;"><iframe src="{{URL::route('index')}}/data-temp/comments.html" class="fb_ltr fb_iframe_widget_lift" title="Facebook Social Plugin" style="border: medium none; overflow: hidden; height: 0px; width: 0px;" scrolling="no" name="f7d7a280309ede" id="f2eaaf442a8bedc"></iframe></span>
															</fb:comments>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<div style="clear: both;"></div>
									</div>

								</div>
							</div>

							<!-- google_ad_section_end -->
						</div>
						<div class="blog-pager" id="blog-pager">
							<span id="blog-pager-older-link"> <a class="blog-pager-older-link" href="http://mazaya-soratemplates.blogspot.com/2014/04/sed-luctus-semper-odio-aliquam-rhoncus_19.html" id="Blog1_blog-pager-older-link" title="Older Post"> Older Post </a> </span>
							<a class="home-link" href="http://mazaya-soratemplates.blogspot.com/"> Home </a>
						</div>
						<div class="clear"></div>
						<div class="post-feeds">
							<div class="feed-links">
								Subscribe to:
								<a class="feed-link" href="http://mazaya-soratemplates.blogspot.com/feeds/253673249064399512/comments/default" target="_blank" type="application/atom+xml"> Post Comments
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


