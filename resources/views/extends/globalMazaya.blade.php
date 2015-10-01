<!DOCTYPE html>
<html class=" js" dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b" xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr">
	<head>
		@include('include/home/head')
		@include('include/home/css')
        @yield('head')
	</head>
	<body class="loading">
		<!-- outer-wrapper start -->
		<div id="outer-wrapper">
			@include('include/home/menu_top')
			<div id="content-wrapper">
				
				@yield('content')
				
				@include('include/home/menu_left')
				<!-- sidebar wrapper end -->
			</div>
			<!-- content wrapper end -->
			<div class="clear"></div>
			@include('include/home/bottom')
		</div>
		<!-- wrapper end -->
	</body>
	@include('include/home/js')
    @yield('js')
</html>