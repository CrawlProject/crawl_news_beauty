function getListAll(path_obj,url_obj,list_arr,update){
	/*first page*/
	var html = afterGetRemoteUrl(getRemoteUrl(url_obj.url,false));
	for(var i=path_obj.csspath.length-1; i>=0; i--){
		list_arr = getList(html,path_obj.csspath[i],list_arr,path_obj.domain,url_obj.type,url_obj.table);
	}
	/*from page 2-not use when update*/
	if(update!='update'){
		for( var i=2 ; i<=url_obj.num_page; i++){
			var html = afterGetRemoteUrl(getRemoteUrl(String.format(url_obj.url_page,i),false)) ;
			list_arr = getList(html,path_obj.csspath[0],list_arr,path_obj.domain,url_obj.type,url_obj.table);
		}
	}
	return list_arr;
}
function getList(html,csspath,list_arr,domain,type,table){
	var htmlDOM = document.createElement("html");
	$(htmlDOM).html(html);
	var list = $(htmlDOM).find(csspath.parent_path);
	console.log(list.length)
	for( var i=0; i<list.length; i++){
		if($(list[i]).find(csspath.title_path).length>0){
			/*check obj exist in arr*/
			var status = false;
			for(var j=0; j<list_arr.length; j++){
				if(list_arr[j].title == $(list[i]).find(csspath.title_path)[0].innerText.trim()){
					status = true;
					break;
				}
			}
			/*add to array if not exist*/
			if(status==false){
				if(csspath.image_path == null){ var image = '';
				}else{var image = $(list[i]).find(csspath.image_path)[0].src;}
				if(csspath.desc_path == null){ var desc = '';
				}else{var desc = $(list[i]).find(csspath.desc_path)[0].innerText.trim();}
				var obj = {
					title 	: $(list[i]).find(csspath.title_path)[0].innerText.trim(),
					href	: preLink($($(list[i]).find(csspath.href_path)[0]).attr('href_none'),domain),
					image	: image,
					desc	: desc,
					domain	: domain,
					type	: type,
					table	: table,
				};
				/*domain Youtube.com*/
				if(domain == 'youtube.com'){
					obj['time'] = $(list[i]).find(csspath.time_path)[0].innerText.trim();
					if($(list[i]).find(csspath.quality_path).length>0){
						obj['quality'] = $(list[i]).find(csspath.quality_path)[0].innerText.trim();
					}else{
						obj['quality'] = 'normal';
					}
				}
				
				list_arr.push(obj);
			}else{
				/*case: don't find title*/
				console.log('Error duplicate: '+i)
				console.log($(list[i]).find(csspath.title_path)[0].innerText.trim())
			}
		}else{
			/*case: don't find title*/
			console.log("Error don't find title: ")
			console.log(list[i])
		}
	}
	return list_arr;
}
function preLink(href_str,domain){
	if(href_str.search('http')<0){
		href_str = 'http://'+domain+href_str;
	}
	return href_str;
}
/**************************************
 * 
 * *************************************/ 
function checkURL(url) {
    return(url.match(/\.(jpeg|jpg)$/) != null);
}

function getDetail(list_arr){
	var err_arr = [];
	for(var i=0; i<list_arr.length; i++){
		/*set default*/
		list_arr[i]['content'] = 'no Data';
		list_arr[i]['image_full'] = 'no Data';
		/*select cssdetail*/
		switch(list_arr[i].domain){
			case 'vnexpress.net' :
				var csspath_detail = vnexpress_beauty_obj.csspath_detail;
				var csspath_remove = vnexpress_beauty_obj.csspath_remove;
				break;
			case 'eva.vn' :
				var csspath_detail = eva_thoitrang_obj.csspath_detail;
				var csspath_remove = eva_thoitrang_obj.csspath_remove;
				break;
			case 'ngoisao.net' :
				var csspath_detail = ngoisao_news_obj.csspath_detail;
				var csspath_remove = ngoisao_news_obj.csspath_remove;
				break;
			case 'kenh14.vn' :
				var csspath_detail = kenh14_news_obj.csspath_detail;
				var csspath_remove = kenh14_news_obj.csspath_remove;
				break;
		}
		/*create DOM*/
		var html = afterGetRemoteUrl(getRemoteUrl(list_arr[i].href,false)) ;
		var htmlDOM = document.createElement("html");
		$(htmlDOM).html(html);
		
		/*remove el*/
		removeEL(htmlDOM,csspath_remove);
		/*get content*/
		var el_content = $(htmlDOM).find(csspath_detail.content);
		
		if(el_content.length > 0){
			var imgs = $(el_content).find('img');
			/*get image with extention .jpg, jpeg*/
			for(var j=0; j<imgs.length ; j++){
				if(checkURL(imgs[j].src)){
					list_arr[i]['image_full'] = imgs[j].src;
					break;
				}
			}

			/*case detail content don't have image*/
			if(list_arr[i]['image_full'] == 'no Data'){
				list_arr[i]['image_full'] = list_arr[i]['image'];
			}else{
				list_arr[i]['content'] = el_content[0].outerHTML;
			}
			console.log(list_arr[i]['image_full'])
		}else{
			list_arr[i]['image_full'] = list_arr[i]['image'];
			err_arr.push(list_arr[i].href);
			console.log("Error: don't have image_full in content")
			// console.log(err_arr)
		}
	}
	return list_arr;
}
// function checkFinish(imgs){
	// var status = true;
	// for(var i=0; i<imgs.length ; i++){
		// if(!imgs[i].complete){
			// status = false;
		// }
	// }
	// if(status == false){
		// checkFinish(imgs);
	// }
// }
function removeEL(html,arr){
	for(var i=0; i<arr.length; i++){
		var list = $(html).find(arr[i]);
		for( var j=0; j<list.length; j++){
			$(list[j]).remove();
		}
	}
}
function getDetailYoutube(list_arr){
	for(var i=0; i<list_arr.length; i++){
		/*set default*/
		var str = list_arr[i].href;
		list_arr[i]['content'] = str.substring(str.indexOf('?v=')+3, str.length);
		list_arr[i]['image_full'] = 'no Data';
	}
	return list_arr;
}
