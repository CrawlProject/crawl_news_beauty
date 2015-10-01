<div class="ct-wrapper" id="featured-posts-section">
					<div class="featured-post padding clearfix">
						
						<div class="main-post col-post">
							@if($sao[0]->content == 'no Data')
		    					<a href="{{$sao[0]->href}}"><img src="{{$sao[0]->image_full}}" alt=""></a>
		    				@else										 
		    					<a href="{{URL::route('trangdetail',$sao[0]->id)}}"><img src="{{$sao[0]->image_full}}" alt=""></a>
		    				@endif
							<!-- <a href=""><img src="{{URL::route('index')}}/data-temp/74-640x512_002.jpg" alt=""></a> -->
							<header>
								<span>Technology</span>
								<h3 class="entry-title">
									@if($sao[0]->content == 'no Data')
										<a href="{{$sao[0]->href}}" title="">{{$sao[0]->title}}</a>
				    				@else		
				    					<a href="{{URL::route('trangdetail',$sao[0]->id)}}" title="">{{$sao[0]->title}}</a>
				    				@endif
								</h3>
							</header>
						</div>
						<div class="secondary-post col-post" style="margin-right:0">
							@if($babau[0]->content == 'no Data')
		    					<a class="hover_play_small" href="{{$babau[0]->href}}"><img src="{{$babau[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@else										 
		    					<a class="hover_play_small" href="{{URL::route('trangdetail',$babau[0]->id)}}"><img src="{{$babau[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@endif
							<header>
								<h4>
									@if($babau[0]->content == 'no Data')
										<a href="{{$babau[0]->href}}" title="">{{$babau[0]->title}}</a>
				    				@else		
				    					<a href="{{URL::route('trangdetail',$babau[0]->id)}}" title="">{{$babau[0]->title}}</a>
				    				@endif
								</h4>
							</header>
						</div>
						<div class="secondary-post col-post" style="margin-right:0">
							@if($khoedep[0]->content == 'no Data')
		    					<a class="hover_play_small" href="{{$khoedep[0]->href}}"><img src="{{$khoedep[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@else										 
		    					<a class="hover_play_small" href="{{URL::route('trangdetail',$khoedep[0]->id)}}"><img src="{{$khoedep[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@endif
							<header>
								<h4>
									@if($khoedep[0]->content == 'no Data')
										<a href="{{$khoedep[0]->href}}" title="">{{$khoedep[0]->title}}</a>
				    				@else		
				    					<a href="{{URL::route('trangdetail',$khoedep[0]->id)}}" title="">{{$khoedep[0]->title}}</a>
				    				@endif
								</h4>
							</header>
						</div>
						<div class="secondary-post col-post" style="margin-right:0">
							@if($daycon[0]->content == 'no Data')
		    					<a class="hover_play_small" href="{{$daycon[0]->href}}"><img src="{{$daycon[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@else										 
		    					<a class="hover_play_small" href="{{URL::route('trangdetail',$daycon[0]->id)}}"><img src="{{$daycon[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@endif
							<header>
								<h4>
									@if($daycon[0]->content == 'no Data')
										<a href="{{$daycon[0]->href}}" title="">{{$daycon[0]->title}}</a>
				    				@else		
				    					<a href="{{URL::route('trangdetail',$daycon[0]->id)}}" title="">{{$daycon[0]->title}}</a>
				    				@endif
								</h4>
							</header>
						</div>
						<div class="secondary-post col-post" style="margin-right:0">
							@if($giadinh[0]->content == 'no Data')
		    					<a class="hover_play_small" href="{{$giadinh[0]->href}}"><img src="{{$giadinh[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@else										 
		    					<a class="hover_play_small" href="{{URL::route('trangdetail',$giadinh[0]->id)}}"><img src="{{$giadinh[0]->image_full}}" alt="" height="200" width="320"></a>
		    				@endif
							<header>
								<h4>
									@if($giadinh[0]->content == 'no Data')
										<a href="{{$giadinh[0]->href}}" title="">{{$giadinh[0]->title}}</a>
				    				@else		
				    					<a href="{{URL::route('trangdetail',$giadinh[0]->id)}}" title="">{{$giadinh[0]->title}}</a>
				    				@endif
								</h4>
							</header>
						</div>
					</div>
				</div>