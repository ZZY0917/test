!function(d,w){function checkIfr(a){var b=null;if(top!=self)try{top.location.href}catch(c){location.href.match(/(m3ws.kugou.com|m.kugou.com)\/share\//)&&(b=7,a&&a(7))}return b}function hijackedInit(){for(var a=document.getElementsByTagName("script"),b={},c=!1,d=0;d<a.length;d++){var e=a[d].src;if(e)if(e=e.split("?").shift(),b[e]){var f,g,h=a[d].src.indexOf(b[e].src)>-1,i=b[e].src.indexOf(a[d].src)>-1;b[e].src!=a[d].src&&(h||i)&&c===!1&&(c=!0,f=h?b[e].src:a[d].src,g=h?a[d].src:b[e].src,hijackedRes(function(a){a===!0&&hijackedDataOP(f,g)},function(){hijackedDataOP(f,g)}))}else b[e]=a[d]}c===!1&&hijackedRes(function(a){a!==!0||0!=hijackedResObj.length||resendHijacked?a===!0&&0!=hijackedResObj.length?sendhijackedData():a===!0&&0==hijackedResObj.length&&notReport():(resendHijacked=resend=!0,setTimeout(hijackedInit,monitorTime))},function(){0!=hijackedResObj.length?sendhijackedData():notReport()})}function hijackedRes(a,b){for(var c=hijackedCur.type,e=hijackedCur.whiteList.slice(0),f=0;f<e.length;f++){var g=e[f].replace(/\./gi,"\\.").replace(/\//gi,"\\/");e[f]=g.substr(0,g.length-2)+"(:\\d+)?"+g.substr(g.length-2,2)}e=e.join("|").replace(/xx/gi,"");for(var h=[],f=0;f<c.length;f++)for(var i=d.getElementsByTagName(c[f]),j=0;j<i.length;j++)h.push(i[j]);monitor(h,function(b,c){for(var d=0,f=b.length;f>d;d++){var g=b[d],h=g.tagName.toLowerCase(),i=("link"==h?g.href:g.src)||g.getAttribute("data-src");if(!g.read&&(b[d].read=!0,"iframe"!=h||"jackedHiddenIframe"!=g.id&&"jackedHiddenIframe2"!=g.id)){var j=i&&i.match("^(http|https)://(.*?)/"),k=!1,l=0;if("iframe"==h&&(l=-2),j&&j.length>1&&(k=!j[0].match(e),k&&"iframe"==h&&(l=1)),!k&&"iframe"==h)try{if(!g.getAttribute("src")||g.getAttribute("srcdoc")){var m=g.contentWindow.document.documentElement.innerHTML;'<head></head><body marginwidth="0" marginheight="0"></body>'==m&&(b[d].read=!1);var n=m&&m.match(/\/\/(.*?)('|")/gi);if(n)for(var o=0;o<n.length;o++){var p=n[o].split(/\b\/\b/);p.length>1&&(k=!(p[0]+"/").match(e),k&&(l=g.getAttribute("srcdoc")?6:4,i=encodeURIComponent(g.outerHTML)))}}}catch(j){}if(k||"iframe"!=h||(j=i&&i.match(/^javascript:(.*?)$/),k=j&&j.length>1&&";"!=j[1],k&&(l=2)),!k&&"iframe"==h&&!g.getAttribute("src"))try{g.contentWindow.location.href}catch(j){var q=g.parentNode;!q||"fixed"!=q.style.position&&"absolute"!=q.style.position||(l=g.getAttribute("onload")?5:3,k=!0,i=encodeURIComponent(g.outerHTML))}if("style"==h&&g.innerHTML){var r=g.innerHTML,s=/url\((.*?)\)/gi,t=[];!function(a,b){var c=arguments.callee,d=b.exec(a);null!=d&&(t.push(d.length>1?d[1]:d[0]),c(a,b))}(r,s);for(var o=0;o<t.length;o++){var j=t[o].match("^(http|https)://(.*?)/");if(j&&j.length>1&&(k=!j[0].match(e))){l=8;break}}}k||"iframe"!=h||!function(a){var b=a.getAttribute("data-mohijack")||0;!b||3>b?setTimeout(function(){a.read=!1,a.setAttribute("data-mohijack",+b+1)},1e3):a.read=!0}(b[d]),k&&(hijackedInfo||(hijackedInfo=document.documentElement.innerHTML||document.body.innerHTML),hijackedResObj&&hijackedResObj.push({type:h,src:i,htype:l}),hijackedCur.open&&0==/\bscript\b|\blink\b/.test(h)&&-2!=l&&removeRes(g))}}b=null,a&&a(c)},b)}function hijackedOther(a,b){if(a){var c=a.tagName.toLowerCase(),d=hijackedCur.type,e=arguments.callee,f=a.src||a.href,g=[];if(-1!=d.indexOf(c))return[];if(a.style.backgroundImage&&a.style.backgroundImage.toString().match(/url\([\"|\']?(\/\/|http)/)){var h=a.style.backgroundImage.toString().match(/url\([\"|\']?(.*[^'"])[\"|\']?\)/);a.setAttribute("data-src","/"==h[1][0]?location.protocol+h[1]:h[1]),g.push(a)}else if(f&&f.toString().match(/http/))a.setAttribute("data-src",f),g.push(a);else if(a.children&&0!=a.children.length)for(var i=0;i<a.children.length;i++){var j=e.apply(e,[a.children[i],!0]);if(j.length>0&&(g=g.concat(j)),!b&&j.length>0)for(var k=0;k<j.length;k++)hijackedDomObj.push({key:a,value:j[k]})}return g}}function monitor(a,b,c){var e=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver;if(!e)return b&&b(a,!0),!1;b&&b(a),monEles&&monEles.res&&(b&&b(monEles.res),monEles.res=null),monEles&&(monEles.fn=function(a){a&&a.tagName&&b&&b(checkElement(a))});var f=new e(function(a){var c=[];a.forEach(function(a){var d,e,f=a.type,g=a.addedNodes,h=hijackedCur.type;if("childList"==f&&g)for(var i=0;i<g.length;i++)d=g[i],1==d.nodeType&&(c=c.concat(checkElement(d,!0)));else"attributes"==f&&(d=a.target,1==d.nodeType&&(e=d.tagName.toLowerCase(),-1!=h.indexOf(e)&&c.push(d)));b&&b(c)})});f.observe(d,{subtree:!0,childList:!0,attributes:!0,attributesFilter:["src","href","data-mohijack"]}),setTimeout(function(){c&&c()},monitorTime),setTimeout(function(){f.disconnect(),monEles&&(monEles.fn=null),hijackedDomObj=null,hijackedResObj=null},3e4)}function monitorElement(){if("undefined"!=typeof HTMLElement){var a=arguments.callee,b=HTMLElement.prototype.appendChild,c=HTMLElement.prototype.insertBefore;return HTMLElement.prototype.appendChild=HTMLElement.prototype.insertBefore=function(d,e){return d?(setTimeout(function(){a.fn&&a.fn(d,e)},0),e?c.call(this,d,e):b.call(this,d)):void 0},a}}function checkElement(a,b){if(a){var c=a.tagName.toLowerCase(),d=[],e=hijackedCur.type;if(-1!=e.indexOf(c))d.push(a);else{for(var f=0;f<e.length;f++)for(var g=a.getElementsByTagName(e[f]),h=0;h<g.length;h++)d.push(g[h]),b||hijackedDomObj.push({key:a,value:g[h]});d=d.concat(hijackedOther(a,b))}return d}}function removeRes(a){setTimeout(function(){if(a.parentNode)try{var b,c=!1;a.parentNode&&a.parentNode.parentNode&&"body"==a.parentNode.parentNode.tagName.toLowerCase()&&1==a.parentNode.children.length&&(b=a.parentNode),a.parentNode.removeChild(a);for(var d=0;d<hijackedDomObj.length;d++){var e=hijackedDomObj[d];if(e.value==a){if(e.key&&e.key.parentNode){var f=e.key.tagName.toLowerCase();"body"!=f&&"html"!=f&&"head"!=f&&(c=!0,e.key.parentNode.removeChild(e.key))}break}}!c&&b&&b.parentNode.removeChild(b),hijackedRemoved=!0}catch(g){hijackedRemoveObj.push((a.href||a.src||a.getAttribute("data-src"))+"："+g.toString())}},0)}function getUserInfo(a){function b(a){var b="KGSupercall_GetTempUserInfo"+Math.random().toString().substr(2,9),c=null;window[b]=function(c){a&&a(c),window[b]=null};try{c=external.SuperCall(519,'{"callback":"'+b+'"}')}catch(d){}return void 0!==c&&a?void window[b](c):a?void 0:(window[b]=null,c)}function c(a){if(w.KgMobileCall.chkAndroidApp())try{a&&a(d.parse(external.superCall(101)))}catch(b){}else if(w.KgMobileCall.isIOS){var c="kgmobilecall"+Math.random().toString().substr(2,9);window[c]=function(b){"undefined"!=typeof b&&("[object String]"===Object.prototype.toString.call(b)?a&&a(d.parse(b)):a&&a(b))},location.href='kugouurl://start.music/?{"cmd":101, "callback":"'+c+'"}'}}var d=w.JSON||w.Kg&&Kg.JSON||null;try{w.KgMobileCall.isInClient()?c(function(b){a&&a(b.kugouID)}):b(function(b){a&&a(d.parse(b).uid)})}catch(e){a&&a(0)}}function getSysInfo(a){var b=w.JSON||w.Kg&&Kg.JSON||{};try{if(w.KgMobileCall.isInClient())if(w.KgMobileCall.getVersion)w.KgMobileCall.getVersion(function(b){a&&a(b.version,b.platform)});else if(w.KgMobileCall.chkAndroidApp())try{var c=b.parse(external.superCall(122));a&&a(c.version,c.platform)}catch(d){a&&a()}else if(w.KgMobileCall.isIOS){var e="kgmobilecall_getSysInfo"+Math.random().toString().substr(2,9);window[e]=function(c){if("undefined"!=typeof c){var d="[object String]"===Object.prototype.toString.call(c)?b.parse(c):c;a&&a(d.version,d.platform)}},location.href='kugouurl://start.music/?{"cmd":122, "callback":"'+e+'"}'}else a&&a();else{var f=0;try{f=external.GetVersion()}catch(d){}if(f)a&&a(f,"pc");else{var g=navigator.userAgent.toLowerCase();/iphone|ipad|ipod/.test(g)?a&&a(0,"h5"):/android/.test(g)?a&&a(0,"h5"):a&&a(0,"web")}}}catch(d){a&&a()}}function postData(){try{var a="KGSupercall_PostData"+Math.random().toString().substr(2,9),b=arguments[0],c=arguments[1];b=b.substr(0,b.length-1)+',"callback":"'+a+'"}',external.SuperCall(813,b),top.window[a]=function(){c&&c(arguments[0]),top.window[a]=null}}catch(d){}}function getData(){try{var a="KGSupercall_GetData"+Math.random().toString().substr(2,9),b=arguments[0],c=arguments[1];b=b.substr(0,b.length-1)+',"callback":"'+a+'"}',external.SuperCall(855,b),top.window[a]=function(){c&&c(arguments[0]),top.window[a]=null}}catch(d){c&&c("")}}function hijackedDataOP(a,b){var c=new RegExp(document.domain);if(c.test(a)&&w.Kg)Kg.Ajax("get",a,!0,{},function(c){sendhijackedData(a,b,c)},null,"script");else{var d=w.JSON||w.Kg&&Kg.JSON||null;d&&getData(d.stringify({url:a}),function(c){sendhijackedData(a,b,c)})}}function gethijackedResObj(){for(var a=[],b=[],c=[],d=!1,e=0;e<hijackedResObj.length;e++){var f=hijackedResObj[e];a.push(f.src),0!=f.htype&&c.push(f.htype),"iframe"==f.type&&b.push(f.src),-2==f.htype&&(d=!0)}return{iframe:b.join(","),src:a.join(","),htype:c.join(",")[0]||"",hc:d}}function sendhijackedData(a,b,c,e){getUserInfo(function(f){var g=0;try{g=external.GetVersion()}catch(h){}var i=gethijackedResObj(),j="",k=function(){for(var a=d.getElementsByTagName("iframe"),b=[],c=0;c<a.length;c++)"jackedHiddenIframe"!=a[c].id&&"jackedHiddenIframe2"!=a[c].id&&b.push(a[c]);return b}();if((i.hc||hijackedRemoveObj.length>0||k.length>0&&""!=i.src&&""==i.iframe&&8==parseInt(10*Math.random()))&&(j=hijackedInfo+(c?'\n<script id="hijacked">'+c+"</script>":""),j+=hijackedRemoveObj.length>0?'\n<p id="hijackedRemove">'+hijackedRemoveObj.join("\n")+"</p>":""),!i.src&&!i.hc&&!e)return void(hijackedResObj=null);var l="https:"==location.protocol?"https://statwww2.kugou.com/inject/i.php":"http://stat.www2.kugou.com/inject/i.php";if(g>=7700){var m=w.JSON||w.Kg&&Kg.JSON||null;if(m){var n={url:l,param:m.stringify({pageurl:location.href,jsurl:a||"",jsurl2:b||"",ifameurl:i.iframe,uid:f,resurls:i.src,resend:1==hijackedRemoved?1:0,htype:checkIfr()||i.htype,content:escape(j),ispackage:window.isPackage?1:0,ver:g,platform:"pc"})};postData(m.stringify(n),function(){}),callbackOP||e||(callbackOP=!0,KgAntiHijack=w.KgAntiHijack||{callback:null},KgAntiHijack.callback&&KgAntiHijack.callback(!0,{pageurl:location.href,jsurl:a||"",jsurl2:b||"",ifameurl:i.iframe,uid:f,resurls:i.src}))}}else getSysInfo(function(c,d){var g=['<iframe  id="jackedHiddenIframe" name="jackedHiddenIframe" width=0 height=0 style="display:none" frameborder=0 src="about:blank"></iframe>','<form id="hijacked" target="jackedHiddenIframe" action="'+l+'" name="hijacked_form" method="post" >','<input type="hidden" name="pageurl" value="'+location.href+'">','<input type="hidden" name="jsurl" value="'+(a||"")+'">','<input type="hidden" name="jsurl2" value="'+(b||"")+'">','<input type="hidden" name="ifameurl" value="'+i.iframe+'">','<input type="hidden" name="uid" value="'+f+'">','<input type="hidden" name="resurls" value="'+i.src+'">','<input type="hidden" name="htype" value="'+(checkIfr()||i.htype)+'">','<input type="hidden" name="resend" value="'+(1==hijackedRemoved?1:0)+'">','<textarea name="content">'+escape(j)+"</textarea>",'<input type="hidden" name="ispackage" value="'+(window.isPackage?1:0)+'">','<input type="hidden" name="ver" value="'+(c||0)+'">','<input type="hidden" name="platform" value="'+(d||"")+'">',"</form>"].join(""),h=document.createElement("div");h.style.display="none",h.innerHTML=g,document.getElementsByTagName("body")[0].appendChild(h)&&(hijacked_form.submit(),callbackOP||e||(callbackOP=!0,KgAntiHijack=w.KgAntiHijack||{callback:null},KgAntiHijack.callback&&KgAntiHijack.callback(!0,{pageurl:location.href,jsurl:a||"",jsurl2:b||"",ifameurl:i.iframe,uid:f,resurls:i.src})))});hijackedResObj=null})}function notReport(){checkIfr(function(){sendhijackedData("","","",!0)}),callbackOP||(callbackOP=!0,KgAntiHijack=w.KgAntiHijack||{callback:null},KgAntiHijack.callback&&KgAntiHijack.callback(!1))}if(1==w.HIJACKED)return!1;w.HIJACKED=1;var hijackConfig={"fanxing.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["cnzz.com/","360.cn/","360.com/","trust.baidu.com/","mapi.axxlixxpaxxy.com/"],open:!0},"fanxing2.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["cnzz.com/","360.cn/","360.com/","trust.baidu.com/","mapi.axxlixxpaxxy.com/"],open:!0},"fxwork.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["cnzz.com/","360.cn/","360.com/","trust.baidu.com/","mapi.axxlixxpaxxy.com/"],open:!0},"ads.service.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["jd.com/","10.13.0.19:805/"],open:!0},"p.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["jd.com/"],open:!0},"m.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["res.wx.qq.com/"],open:!0},"mfanxing.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["res.wx.qq.com/"],open:!0},"m.www2.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"activity.mobile.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["res.wx.qq.com/"],open:!0},"topic.mobile.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["res.wx.qq.com/"],open:!0},"zhuanji.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["res.wx.qq.com/"],open:!0},"www2.kugou.kugou.com/window":{type:["img","link","embed","iframe","script"],whiteList:["cnzz.com/","linezing.com/"],open:!0},"www2.kugou.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["42.62.20.165/","42.62.20.164/"],open:!0},"www4.kugou.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["42.62.20.165/","42.62.20.164/"],open:!0},"huodong.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"acsing.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["res.wx.qq.com/","q.qlogo.cn/"],open:!0},"www.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["share.baidu.com/","nsclick.baidu.com/","linezing.com/"],open:!0},"tui.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"vip.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"wallet.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"imusic.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["gtimg.com/"],open:!0},"download.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["qhimg.com/","wandoujia.com/","zhushou.360.cn/","25pp.com/","tongbu.com/"],open:!0},"www2.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["cnzz.com/","linezing.com/"],open:!0},"ktv.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"n.ktv.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:[],open:!0},"yule.kugou.com":{type:["img","link","embed","iframe","script"],whiteList:["pos.baidu.com/"],open:!0},"rainbowred.com":{type:["img","link","embed","iframe","script"],whiteList:["rainbowred.com/"],open:!0},"default":{type:["img","link","embed","iframe","script"],whiteList:["42.62.20.165/","42.62.20.164/"],open:!0},common:{type:["style"],whiteList:["kugoo.com/","fanxing.com/","kugou.com/","kgimg.com/","hm.baidu.com/","netadreg.gzaic.gov.cn/","qq.com/","axxlixxpaxxy.com/","google-analytics.com/","tag.baidu.com/","119.146.204.163/","125.88.149.22/","115.231.37.18/","115.231.37.19/","captcha.gtimg.com/","captcha.guard.qcloud.com/","183.61.119.74/","183.61.119.103/","115.231.37.18/","115.231.37.19/","115.231.37.58/","119.134.255.209/","119.146.204.163/","125.64.100.137/","211.162.52.121/","125.88.149.12/","125.88.149.22/","113.142.49.11/","220.170.51.146/","106.39.193.106/","43.254.128.202/","43.254.128.231/","112.90.229.54/","112.90.229.38/","123.58.26.8/","123.58.26.9/","119.188.163.204/","119.188.163.218/","61.48.115.181/","183.232.70.138/","183.232.70.167/","120.199.78.226/","111.11.31.77/","qzonestyle.gtimg.cn/"," baidu.com/","m.kgidc.cn/","res.wx.qq.com/","cnzz.com/","vivo.com.cn/","pstatp.com/"]}};!w.Kg&&(w.Kg={}),!w.Kg.Ajax&&(w.Kg.Ajax=function(a,b,c,d,e,f,g){if(1==arguments.length)var h=arguments[0],a=h.method,b=h.url,c=h.async,d=h.args||"",e=h.callback,i=h.callbackName||"callback",j=h.callbackFuncName,f=h.error,g=h.docType,k=h.flashUrl;var l=d||"";if(c=null==c?!0:c,d&&"object"==typeof d){var m="";for(var n in d)m+=n+"="+d[n]+"&";l=m.substr(0,m.length-1)}if(a=a?a.toUpperCase():"POST",g=g?g.toLowerCase():"text","jsonp"==g){var o="";return o=j?j:"kgJSONP"+Math.random().toString().substr(2,9),window[o]=e,l=l.length>0?l+"&"+i+"="+o:"",l.length<=0&&(b+="&"+i+"="+o),void this.loadScript(b,l)}if("swf"!=g){var p=null;if(window.XMLHttpRequest&&!window.ActiveXObject)p=new XMLHttpRequest;else if(window.ActiveXObject)try{p=new ActiveXObject("Microsoft.XMLHTTP")}catch(q){try{p=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){p=null}}return p.onreadystatechange=function(){if(4==p.readyState)if(200==p.status||0==p.status){var a=null;switch(g){case"xml":a=p.responseXML;break;case"json":a=Kg.JSON.parse(p.responseText);break;default:a=p.responseText}e&&e(a,p),p=null}else f&&f()},"GET"==a?(-1!=b.indexOf("?")?p.open(a,b+(l?"&"+l:""),c):p.open(a,b+(l?"?"+l:""),c),p.send(null)):(p.open(a,b,c),p.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),p.send(l)),p}if(window.kgAjaxCallbackFunc=e,Kg.flash.getObj("KugouAjaxFlash"))Kg.flash.getObj("KugouAjaxFlash").sendData(a,b,d);else{var s="kgAjaxFlashInit"+Math.random().toString().substr(2,9),t=document.createElement("div"),u=Kg.flash.getStr("KugouAjaxFlash",k||"http://static.kgimg.com/common/swf/ajaxFlash.swf?n="+Math.random(),1,1,{flashvars:"initFun="+s+"&callbackFun=kgAjaxCallbackFunc"});t.style.cssText="position:absolute; left:-9999px; width:1px; height:1px;",t.innerHTML=u,window[s]=function(){return setTimeout(function(){Kg.flash.getObj("KugouAjaxFlash").sendData(a,b,d)},100),1},document.body.appendChild(t)}}),!w.Kg.JSON&&(w.Kg.JSON=function(){function f(a){return 10>a?"0"+a:a}function stringify(a,b){var c,d,e,f,g,h=/["\\\x00-\x1f\x7f-\x9f]/g;switch(typeof a){case"string":return h.test(a)?'"'+a.replace(h,function(a){var b=m[a];return b?b:(b=a.charCodeAt(),"\\u00"+Math.floor(b/16).toString(16)+(b%16).toString(16))})+'"':'"'+a+'"';case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a)return"null";if("function"==typeof a.toJSON)return stringify(a.toJSON());if(c=[],"number"==typeof a.length&&!a.propertyIsEnumerable("length")){for(f=a.length,d=0;f>d;d+=1)c.push(stringify(a[d],b)||"null");return"["+c.join(",")+"]"}if(b)for(f=b.length,d=0;f>d;d+=1)e=b[d],"string"==typeof e&&(g=stringify(a[e],b),g&&c.push(stringify(e)+":"+g));else for(e in a)"string"==typeof e&&(g=stringify(a[e],b),g&&c.push(stringify(e)+":"+g));return"{"+c.join(",")+"}"}}Date.prototype.toJSON=function(){return this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z"};var m={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return{stringify:stringify,parse:function(text,filter){function walk(a,b){var c,d;if(b&&"object"==typeof b)for(c in b)Object.prototype.hasOwnProperty.apply(b,[c])&&(d=walk(c,b[c]),void 0!==d?b[c]=d:delete b[c]);return filter(a,b)}var j;if(/^[\],:{}\s]*$/.test(text.replace(/\\["\\\/bfnrtu]/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return j=eval("("+text+")"),"function"==typeof filter?walk("",j):j;throw new SyntaxError("parseJSON")}}}()),!w.KgMobileCall&&(w.KgMobileCall={}),!w.KgMobileCall.chkAndroidApp&&(w.KgMobileCall.chkAndroidApp=function(){try{if(external.superCall(122))return!0}catch(a){return!1}}),"undefined"==typeof w.KgMobileCall.isIOS?w.KgMobileCall.isIOS=navigator.userAgent.match(/KGBrowser/gi)?!0:!1:"",!w.KgMobileCall.isInClient&&(w.KgMobileCall.isInClient=function(){return w.KgMobileCall.chkAndroidApp()?w.KgMobileCall.chkAndroidApp():w.KgMobileCall.isIOS?w.KgMobileCall.isIOS:!1});var callbackOP=!1,hijackedResObj=[],hijackedDomObj=[],resendHijacked=!1,resend=!1,monitorTime=1e4,hijackedInfo="",hijackedRemoveObj=[],hijackedRemoved=!1,hijackedCur=function(){var a=hijackConfig["default"];for(var b in hijackConfig)if("default"!=b&&"common"!=b){var c=new RegExp("\\b"+b+"\\b","g");if(c.test(location.href)){a=hijackConfig[b];break}}w.HIJACKED_LIST&&w.HIJACKED_LIST instanceof Array&&(a.whiteList=a.whiteList.concat(w.HIJACKED_LIST));var d=hijackConfig.common;return a.type=a.type.concat(d.type),a.whiteList=a.whiteList.concat(d.whiteList),a}();w.MutationObserver||w.WebKitMutationObserver||w.MozMutationObserver?setTimeout(hijackedInit,1e3):setTimeout(hijackedInit,3e3);var monEles=monitorElement();monEles&&(monEles.fn=function(a){a&&a.tagName&&("undefined"==typeof monEles.res&&(monEles.res=[]),monEles.res=monEles.res.concat(checkElement(a)))}),8==parseInt(10*Math.random())&&getSysInfo(function(a,b){var c=document.createElement("img");c.src="http://stat.www2.kugou.com/i.html?"+["t="+(new Date).getTime(),"ispackage="+(window.isPackage?1:0),"ver="+(a||0),"platform="+(b||"")].join("&")}),checkIfr(function(a){if(7==a){var b=document.createElement("div");b.style.display="none",b.innerHTML=['<iframe  id="jackedHiddenIframe2" name="jackedHiddenIframe2" width=0 height=0 style="display:none" frameborder=0 src="about:blank"></iframe>','<form id="hijacked2" target="jackedHiddenIframe2" action="http://stat.www2.kugou.com/node/weblog/jsloger" name="hijacked_form2" method="post" >','<input type="hidden" name="key" value="mkugou_share_hijacked">',"</form>"].join(""),document.getElementsByTagName("body")[0].appendChild(b)&&hijacked_form2.submit()}})}(document,window);