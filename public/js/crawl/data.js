/**************************************
 * 
 * *************************************/ 
/*one obj can use for a table in database*/
var vnexpress_beauty = [
	{
		url_page 	: "http://suckhoe.vnexpress.net/tin-tuc/khoe-dep/page/{0}.html",
		url			: "http://suckhoe.vnexpress.net/tin-tuc/khoe-dep",
		type		: 'khoe-dep',
		table		: 'news_beauty_tb',
		num_page	: 2,
	},
	{
		url_page 	: "http://suckhoe.vnexpress.net/tin-tuc/dinh-duong/page/{0}.html",
		url 		: "http://suckhoe.vnexpress.net/tin-tuc/dinh-duong",
		type		: 'dinh-duong',
		table		: 'news_beauty_tb',
		num_page	: 2,
	},
	{
		url_page 	: "http://giaitri.vnexpress.net/tin-tuc/gioi-sao/page/{0}.html",
		url 		: "http://giaitri.vnexpress.net/tin-tuc/gioi-sao",
		type		: 'gioi-sao',
		table		: 'news_beauty_tb',
		num_page	: 2,
	},
];

/*one obj can use for all pages of domain*/
var vnexpress_beauty_obj = {
	domain		: 'vnexpress.net',
	csspath		: [
		// page
		{
			parent_path	: '#col_1 .list_news > li',
    		title_path	: '.title_news .txt_link',
    		href_path	: '.title_news .txt_link',
    		image_path	: '.thumb img',
    		desc_path	: '.news_lead',
		},
		
		// sub
		{
			parent_path	: '.content_scoller > ul > li',
    		title_path	: '.title_news .txt_link',
    		href_path	: '.title_news .txt_link',
    		image_path	: '.icon_content',
    		desc_path	: '.news_lead',
		},
		
		// hot
		{
			parent_path	: '.box_hot_news',
    		title_path	: '.title_news .txt_link',
    		href_path	: '.title_news .txt_link',
    		image_path	: '.width_image_common',
    		desc_path	: '.news_lead',
		}
	],
	csspath_detail : {
		content	: '.main_content_detail',
	},
	csspath_remove : [
		'.block_timer_share','.relative_new','.title_news','.title_div_fbook','#box_comment','#box_tinkhac_detail','.block_tag','#box_tinlienquan'
	]
};
/***********************************************************/ 
var eva_thoitrang = [
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/nguoi-mau-c285.html",
		// type		: 'tu-van-mac-dep',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/nhan-vat-dep-c262.html",
		// type		: 'tu-van-mac-dep',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/lang-sao-c20.html",
		// type		: 'gioi-sao',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/nuoi-con-c13.html",
		// type		: 'day-con',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/tu-van-mac-dep-c160.html",
		// type		: 'tu-van-mac-dep',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/chuan-bi-mang-thai-c12.html",
		// type		: 'chuan-bi-mang-thai',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/lam-dep-c58.html",
		// type		: 'lam-dep',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	// {
		// url_page 	: "",
		// url			: "http://eva.vn/bep-eva-c162.html",
		// type		: 'bep-eva',
		// table		: 'news_beauty_tb',
		// num_page	: 1,
	// },
	{
		url_page 	: "",
		url			: "http://eva.vn/eva-tam-c66.html",
		type		: 'eva-tam',
		table		: 'news_beauty_tb',
		num_page	: 1,
	},
];
var eva_thoitrang_obj = {
	domain		: 'eva.vn',
	csspath		: [
		// page
		{
			parent_path	: 'div.container > div:nth-of-type(3).content > table:nth-of-type(1) > tbody:nth-of-type(1) > tr:nth-of-type(1) > td:nth-of-type(2) > div:nth-of-type(1).colCenter > div.boxDoi-sub-Item-trangtrong',
    		title_path	: 'span.news-title > a:nth-of-type(1)',
    		href_path	: 'span.news-title > a:nth-of-type(1)',
    		image_path	: 'span.imgFloat.img95 > a:nth-of-type(1) > img:nth-of-type(1)',
    		desc_path	: 'span.news-sapo.padL110',
		},
		// sub
		
		// hot
		
	],
	csspath_detail : {
		content	: '#baiviet-container',
	},
	csspath_remove : [
		'.baiviet-bailienquan'
	]
};
/***********************************************************/ 
var ngoisao_news = [
	{
		url_page 	: "http://ngoisao.net/tin-tuc/hau-truong/page/{0}.html",
		url			: "http://ngoisao.net/tin-tuc/hau-truong/",
		type		: 'gioi-sao',
		table		: 'news_beauty_tb',
		num_page	: 1,
	},
];
var ngoisao_news_obj = {
	domain		: 'ngoisao.net',
	csspath		: [
		// page
		{
			parent_path	: 'div > div > div:nth-of-type(1) > div > div > div:nth-of-type(1).fl.lnhtl > ul:nth-of-type(1).news > li',
    		title_path	: 'h3 > a',
    		href_path	: 'h3 > a',
    		image_path	: 'a.fl.ptw > img',
    		desc_path	: 'p:nth-of-type(2)',
		},
		// sub
		{
			parent_path	: '.top > div > .tnhtbwHT > ul.tnhtb > li',
    		title_path	: 'h3.t > a',
    		href_path	: 'h3.t > a',
    		image_path	: 'a.ptw > img',
    		desc_path	: null,
		},
		// hot
		{
			parent_path	: '.top > div > div.tnht > div.news',
    		title_path	: 'div.txw > h3 > a',
    		href_path	: 'div.txw > h3 > a',
    		image_path	: 'a.ptw > img',
    		desc_path	: 'div.txw > p',
		},
	],
	csspath_detail : {
		content	: '#left .fck_detail',
	},
	csspath_remove : [
		
	]
};
/***********************************************************/ 
var kenh14_news = [
	{
		url_page 	: "http://kenh14.vn/star/trang-{0}.chn",
		url			: "http://kenh14.vn/star.chn",
		type		: 'gioi-sao',
		table		: 'news_beauty_tb',
		num_page	: 2,
	},
];
var kenh14_news_obj = {
	domain		: 'kenh14.vn',
	csspath		: [
		// page
		{
			parent_path	: '.maincontent.clearfix > .left_content > div.newslistpannel > ul > li.item.clearfix',
    		title_path	: '.postcontent > h4.title > a',
    		href_path	: '.postcontent > h4.title > a',
    		image_path	: '.img > a > img.avatar',
    		desc_path	: '.postcontent > .sapo',
		},
		// sub
		{
			parent_path	: '.maincontent.clearfix > .left_content > .focuspanel > .nextfocuspanel > .nextfocus > li',
    		title_path	: '.title > a',
    		href_path	: '.title > a',
    		image_path	: '.clearfix.otherfeature_avatar > img',
    		desc_path	: null,
		},
		// hot
		{
			parent_path	: '.maincontent.clearfix > .left_content > .focuspanel > .focuslistbox.clearfix > .topfocusleft.fl',
    		title_path	: '.title > a',
    		href_path	: '.title > a',
    		image_path	: '.imgtopfocus > a > img',
    		desc_path	: null,
		},
	],
	csspath_detail : {
		content	: '.postpadding .content',
	},
	csspath_remove : [
		
	]
};
/***********************************************************/ 
var youtube_com = [
	// {
		// url_page 	: "",
		// url			: "https://www.youtube.com/results?search_query=nhạc+cho+bà+bầu",
		// type		: 'video-nhac-cho-ba-bau',
		// table		: 'video_tb',
		// num_page	: 1,
	// },
	{
		url_page 	: "",
		url			: "https://www.youtube.com/results?search_query=nhạc+cho+em+bé",
		type		: 'video-nhac-cho-ba-bau',
		table		: 'video_tb',
		num_page	: 1,
	},
];
var youtube_com_obj = {
	domain		: 'youtube.com',
	csspath		: [
		// page
		{
			parent_path	: '.search.branded-page-v2-secondary-column-wide.no-flex.clearfix > .content-alignment > .branded-page-v2-container.branded-page-base-bold-titles.branded-page-v2-container-flex-width > .branded-page-v2-col-container > .branded-page-v2-col-container-inner > .branded-page-v2-primary-col > .yt-card.clearfix > .branded-page-v2-body.branded-page-v2-primary-column-content > div > ol.section-list > li > ol.item-section > li > .yt-lockup.yt-lockup-tile.yt-lockup-video.vve-check.clearfix.yt-uix-tile',
    		title_path	: 'h3.yt-lockup-title > a.yt-uix-tile-link',
    		href_path	: 'h3.yt-lockup-title > a.yt-uix-sessionlink.yt-uix-tile-link.yt-ui-ellipsis.yt-ui-ellipsis-2.spf-link',
    		image_path	: 'div:nth-of-type(1).yt-lockup-dismissable > div:nth-of-type(1).yt-lockup-thumbnail.contains-addto > a.yt-uix-sessionlink.spf-link > .yt-thumb.video-thumb > span:nth-of-type(1).yt-thumb-simple > img:nth-of-type(1)',
    		desc_path	: null,
    		time_path	: 'a .video-time',
    		quality_path: '.yt-badge',
		},
		// sub

		// hot

	],
	csspath_detail : {
		content	: '.postpadding .content',
	},
	csspath_remove : [
		
	]
};
/***********************************************************/ 
