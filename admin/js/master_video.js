;(function(){
	!function(){for(var e=document.getElementsByTagName("video"),t=0;t<e.length;t++)if(!document.querySelector(".master-video-container")&&e[t].classList.contains("video-master")){var s=document.createElement("div");s.classList.add("master-video-container"),s.setAttribute("tabindex",[t]),s.innerHTML=e[t].outerHTML,s.insertAdjacentHTML("beforeend",'<div id="overlay"></div><div id="mouse-hide"></div><div class="volume-value-container noselect"></div><div class="volume-icon-container noselect"></div><div class="chips-field-left overlay-chips noselect" data-chip-side="left" data-rewind="-10"></div><div class="chips-field-right overlay-chips noselect" data-chip-side="right" data-rewind="+10"></div><div class="video-controls noselect master-pause master-volume-on chips-side-left" id="video-controls"> <div class="master-stop-container"><span id="master-stop"></span></div> <div class="master-play-container"><span id="master-play-pause"></span></div> <div class="master-dec-container"><span id="master-current-dec" class="master-rewind" data-chip-side="left" data-rewind="-10"></span></div> <div class="bar-container noselect"> <input type="range" id="video-progress" max="10000" value="0"> </div> <div class="master-inc-container"><span id="master-current-inc" class="master-rewind" data-chip-side="right" data-rewind="+10"></span></div> <div class="master-time-container"><span id="current-time">0:00</span><span> / </span><span id="full-time">0:00</span></div> <div class="speed-options-container noselect"> <ul class="speed-options noselect"> <li data-speed="4" data-speed-number="2" class="center master-speed noselect">x4</li> <li data-speed="2" data-speed-number="1" class="center master-speed noselect">x2</li> <li data-speed="1" data-speed-number="0" class="center master-speed active-speed noselect">x1</li> <li data-speed="0.75" data-speed-number="-1" class="center master-speed noselect">0.75</li> <li data-speed="0.5" data-speed-number="-2" class="center master-speed noselect">0.5</li> <li data-speed="0.25" data-speed-number="-3" class="center master-speed noselect">0.25</li> </ul> <div id="current-speed" class="noselect">x1</div> </div> <div class="volume-options-container noselect"> <div class="master-volume-range noselect"> <input id="master-volume" type="range" min="0" max="100" value="100" step="1"> </div> <div class="volume-range">100</div> <div id="volume-on-off" class="noselect"></div> </div> <div class="master-middle-video"><span id="master-middle-video"></span></div> <div class="master-maximaze-video"><span id="master-maximaze-video"></span></div></div>'),e[t].parentNode.replaceChild(s,e[t]),e[t].onmousemove=o()}function o(){let e=document.querySelector("video"),t=document.querySelector(".master-video-container"),s=document.querySelector("#video-controls"),o=document.querySelector("#overlay"),n=document.querySelector("#master-play-pause"),a=document.querySelector("#master-stop"),l=document.querySelector("#video-progress"),i=document.querySelector(".bar-container"),c=document.querySelector("#current-time"),r=document.querySelector("#full-time"),d=document.querySelector("#volume-on-off"),u=document.querySelector("#master-volume"),m=(document.querySelector(".master-volume-range"),document.querySelector(".volume-range")),v=document.querySelector("#current-speed"),p=document.querySelector(".chips-field-left"),f=document.querySelector(".chips-field-right"),y=document.querySelector(".speed-options"),g=document.querySelector(".master-maximaze-video"),h=document.querySelector(".master-middle-video"),L=document.querySelectorAll(".overlay-chips"),k=document.querySelectorAll(".master-rewind"),b=document.querySelectorAll(".master-speed");function S(){e.play(),s.classList.remove("master-pause"),s.classList.add("master-play"),n.style.backgroundImage="url(img/video/pause.svg)",o.style.backgroundImage="none"}function q(){e.pause(),s.classList.remove("master-play"),s.classList.add("master-pause"),n.style.backgroundImage="url(img/video/play.svg)",o.style.backgroundImage="url(img/video/play-overlay.svg)"}function T(){x(),v.innerHTML="x1",M(1),q(),e.currentTime=0}var C;function x(){clearTimeout(C),document.querySelector("#mouse-hide").classList.remove("mouse-hide"),s.style.cssText="bottom: 0;opacity: 1;-webkit-transform: scaleY(1);-ms-transform: scaleY(1);transform: scaleY(1);",p.style.cssText="left: 0;-webkit-transform: scaleX(1);-ms-transform: scaleX(1);transform: scaleX(1);",f.style.cssText="right: 0;-webkit-transform: scaleX(1);-ms-transform: scaleX(1);transform: scaleX(1);",s.classList.contains("mouse-on-controls")||(C=setTimeout(()=>{setTimeout(()=>{document.querySelector("#mouse-hide").classList.add("mouse-hide")},1e3),s.style.cssText="bottom: -65px;opacity: 0;-webkit-transform: scaleY(0);-ms-transform: scaleY(0);transform: scaleY(0);",p.style.cssText="left: -25%;-webkit-transform: scaleX(0);-ms-transform: scaleX(0);transform: scaleX(0);",f.style.cssText="right: --25%;-webkit-transform: scaleX(0);-ms-transform: scaleX(0);transform: scaleX(0);"},2e3))}function M(t){S(),e.playbackRate=+t}function w(){x(),s.classList.contains("master-pause")?S():q()}function A(e){e:for(var t=0;t<b.length;t++)if(b[t].classList.contains("active-speed")){var s=b[t].getAttribute("data-speed-number");if(s>=-3&&s<=2){var o=b[t+e].getAttribute("data-speed");if(o){b[t].classList.remove("active-speed"),b[t+e].classList.add("active-speed"),v.innerHTML="x"+o,M(o),S();break e}}}}function E(){s.classList.remove("master-volume-off"),s.classList.add("master-volume-on"),d.style.backgroundImage="url(img/video/volume-on.svg)"}function H(){s.classList.remove("master-volume-on"),s.classList.add("master-volume-off"),d.style.backgroundImage="url(img/video/volume-off.svg)"}e.ontimeupdate=function(){let t=$(e.currentTime);c.innerHTML=t;let s=e.duration,o=e.currentTime;l.value=1e4*o/s},t.onclick=x,t.onmousemove=x,t.onmouseenter=function(){this.focus(),t.onkeydown=V},t.onmouseleave=x,i.onmousedown=function(){x(),q();let t=this.offsetWidth,s=event.offsetX;l.value=1e4*s/t,e.currentTime=e.duration*s/t},i.onmouseup=S,u.oninput=function(){x();let t=this.value;z=e.volume,e.volume=t/100,_=e.volume,m.style.bottom=100*e.volume*.6+24+"px",m.innerHTML=+Math.round(100*e.volume),e.volume>0?E():H()},l.oninput=function(t){console.log(this.value),o.style.backgroundImage="none",n.style.backgroundImage="url(img/video/pause.svg)";var s=this.value/100;e.currentTime=e.duration/100*s,c.innerHTML=$(e.currentTime)},a.onclick=T,n.onclick=w,o.onclick=w,o.ondblclick=Q,d.onclick=Y,g.onclick=Q,h.onclick=J,s.onmouseenter=function(){s.classList.add("mouse-on-controls")},s.onmouseleave=function(){s.classList.remove("mouse-on-controls")},k.forEach(e=>{e.onclick=Z(G,200)}),L.forEach(e=>{e.addEventListener("dblclick",Z(G,500)),e.addEventListener("click",Z(w,200))}),y.addEventListener("click",e=>{let t=e.target.getAttribute("data-speed");if(null!==t){for(var s=0;s<b.length;s++)b[s].classList.contains("active-speed")&&b[s].classList.remove("active-speed");e.target.classList.add("active-speed"),v.innerHTML="x"+t,M(t)}}),setTimeout(()=>{r.innerHTML=$(e.duration),u.value=100,e.volume=1},200);var X,F,I,z=1;function Y(){x(),s.classList.contains("master-volume-on")?(H(),X=e.volume,u.value=0,e.volume=0,z=0,_=0,m.style.bottom="24px",m.innerHTML=0):(u.value=100*X,e.volume=X,z=X,_=X,m.style.bottom=100*z*.6+24+"px",m.innerHTML=Math.round(100*z),E())}function R(e,t){timerSigns="value"===e?F:I,clearTimeout(timerSigns);var s=document.querySelector(".volume-"+e+"-overlay");return s.style.background="rgba(0,0,0, 0.3)",timerSigns=setTimeout(()=>{s.style.background="none"},t),s}function N(t){let s=document.createElement("span");return s.classList.add("volume-"+t),s.classList.add("volume-sign"),"icon"===t&&(e.volume>1e-7?(s.style.backgroundImage="url(img/video/volume-on.svg)",E()):(s.style.backgroundImage="url(img/video/volume-off.svg)",H())),"value"===t&&(s.innerHTML=+Math.round(100*e.volume)+"%"),s}function B(e){var t=document.createElement("div");return t.classList.add("volume-"+e+"-overlay"),t.classList.add("volume-signs-overlay"),t.classList.add("noselect"),document.querySelector(".volume-"+e+"-container").appendChild(t),t}function O(e,t,o){setTimeout(()=>{e.remove(),document.querySelector(".volume-sign")||(document.querySelectorAll(".volume-signs-overlay").forEach(e=>e.remove()),s.classList.remove("volume-signs-active"))},t)}var W,_=1;function j(t){(_=(100*+_+ +t)/100)>=1&&(_=1),_<=0&&(_=0),e.volume=+_,z=+_,X=+_,u.value=100*e.volume,m.style.bottom=100*e.volume*.6+24+"px",m.innerHTML=+Math.round(100*e.volume)}function D(e,t,o){if(x(),s.classList.add("volume-signs-active"),document.querySelector(".volume-signs-overlay")){let s=N(e),n=N(t);document.querySelector(".volume-value-overlay").appendChild(s),document.querySelector(".volume-icon-overlay").appendChild(n),O(s,1e3),O(n,1e3),R(t,o)}else{var n=B(e),a=B(t);let s=N(e),l=N(t);n.appendChild(s),a.appendChild(l),O(s,1e3),O(l,1e3),R(t,o)}}function K(){clearTimeout(W),document.querySelectorAll(".chips-field").forEach(e=>{e.style.background="rgba(0, 0, 0, 0.3)",W=setTimeout(()=>{e.style.background="none"},300)})}function P(e){setTimeout(()=>{e.remove(),document.querySelector(".master-chip")||document.querySelector(".chips-field").remove()},1e3)}function U(e,t){s.setAttribute("data-chips-side",t);var o=document.createElement("div");o.classList.add("chips-field"),o.classList.add("noselect"),document.querySelector(".chips-field-"+t).appendChild(o),o.appendChild(e),P(e)}function G(t,o){if(x(),t&&o)t=t,o=o;else t=this.getAttribute("data-rewind"),o=this.getAttribute("data-chip-side");let n=function(e){let t=document.createElement("span");return t.classList.add("master-chip"),t.innerHTML=e+" sec",t}(t);!function(t){let s=t;e.currentTime=e.currentTime+ +s,S()}(t),document.querySelector(".chips-field")?o!==s.getAttribute("data-chips-side")?(document.querySelector(".chips-field").remove(),U(n,o),K()):(document.querySelector(".chips-field").appendChild(n),K(),P(n)):(U(n,o),K())}function J(){x(),t.classList.contains("middle-screen")?(t.classList.remove("middle-screen"),t.classList.remove("video-middle-screen")):(t.classList.add("middle-screen"),t.classList.add("video-middle-screen"))}function Q(){var e;x(),t.classList.contains("fullscreen")?(t.classList.remove("fullscreen"),x(),document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen()):(t.classList.add("fullscreen"),(e=t).requestFullscreen?e.requestFullscreen():e.mozRequestFullScreen?e.mozRequestFullScreen():e.webkitRequestFullScreen&&e.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT))}function V(s){var o;x(),32===s.keyCode&&w(),77===s.keyCode&&Y(),70===s.keyCode&&Q(),68===s.keyCode&&J(),83===s.keyCode&&T(),27===s.keyCode&&(t.classList.add("middle-screen"),t.classList.add("fullscreen"),t.classList.add("video-middle-screen"),t.classList.remove("fullscreen"),t.classList.remove("middle-screen"),t.classList.remove("video-middle-screen")),67===s.keyCode&&A(-1),88===s.keyCode&&A(1),37===s.keyCode&&G("-10","left"),39===s.keyCode&&G("+10","right"),38===s.keyCode&&(j(10),D("value","icon",400)),40===s.keyCode&&(j(-10),D("value","icon",400)),(s.keyCode>=48&&s.keyCode<=57||s.keyCode>=96&&s.keyCode<=105)&&(o=10*s.key,e.currentTime=e.duration/100*o,S())}function Z(e,t){let s=!1;return function(){s||(e.apply(this,arguments),s=!0,setTimeout(()=>s=!1,t))}}function $(e){var t=Math.floor(e/3600),s=e%3600,o=Math.floor(s/60),n=s%60,a=Math.ceil(n);return 60===a&&(a=0,o+=1),a<10&&(a="0"+a),60===o&&(o=0,t+=1),o<10&&(o=o),fulltime=0===t?o+":"+a:t+":"+o+":"+a,fulltime}}}();

	document.querySelector('#btn_master_data').onclick = addVideo;

	function addVideo(){
		let files = document.querySelector('#new_image').files;
		let old_video = this.getAttribute('data-old-video');

		if(files.length > 0){

			const url = 'core/master_video.php';
			const formData = new FormData();

		    for (let i = 0; i < files.length; i++) {
		        let file = files[i];

		        formData.append('files[]', file);
		    }

			formData.append('old_video', old_video);

			let valid_extensions = /(\.mp4)$/i;   

			if(files[0].size < 10485760){

				if(valid_extensions.test(files[0].name)){

				    fetch(url, {
				        method: 'POST',
				        body: formData,
					}).then(function (response) {
					  return response.text();
					})
					.then(function (body) {

						if(body === '4'){
					    	M.toast({ html: 'Видео успешно обновлено' });
				            setTimeout(function () {
				                location.href = "master_video.php";
				            }, 1000);
		            		document.querySelector('#btn_master_data').onclick = null;
					    }      
					    else if(body === '6'){
					    	M.toast({ html: 'Возможные расширения только mp4'});
					    }  
					    else if(body === '8'){
					    	M.toast({ html: 'файла не существует'});
					    }  			    
					    else if(body === '7'){
					    	M.toast({ html: 'Размер файла не может превышать больше 10 МБ' });
					    }  			    			             
				        else {
				            M.toast({ html: 'Неизвестаня ошибка' });
				            M.toast({ html: 'обновите страницу и' });
				            M.toast({ html: 'попробуйте еще раз' });
				        }
				        console.log(body);

				    });

				} else M.toast({ html: 'Возможные расширения только mp4'});

			} else M.toast({ html: 'Размер файла не может превышать больше 10 МБ' });

		}else M.toast({ html: 'Фаил отсутствует' });
	}	


	document.querySelector('#btn_master_poster').onclick = addPoster;

	function addPoster(){
		let files = document.querySelector('#new_poster').files;
		let old_poster = this.getAttribute('data-old-poster');

		if(files.length > 0){

			const url = 'core/master_poster.php';
			const formData = new FormData();

		    for (let i = 0; i < files.length; i++) {
		        let file = files[i];

		        formData.append('files[]', file);
		    }
		    
			formData.append('old_poster', old_poster);

			let valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   

			if(files[0].size < 3145728){

				if(valid_extensions.test(files[0].name)){

				    fetch(url, {
				        method: 'POST',
				        body: formData,
					}).then(function (response) {
					  return response.text();
					})
					.then(function (body) {

						if(body === '4'){
					    	M.toast({ html: 'Постер успешно обновлен' });
				            setTimeout(function () {
				                location.href = "master_video.php";
				            }, 1000);
		            		document.querySelector('#btn_master_poster').onclick = null;
					    }      
					    else if(body === '6'){
					    	M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});
					    }  
					    else if(body === '8'){
					    	M.toast({ html: 'файла не существует'});
					    }  			    
					    else if(body === '7'){
					    	M.toast({ html: 'Размер файла не может превышать больше 3 МБ' });
					    }  			    			             
				        else {
				            M.toast({ html: 'Неизвестаня ошибка' });
				            M.toast({ html: 'обновите страницу и' });
				            M.toast({ html: 'попробуйте еще раз' });
				        }
				        console.log(body);

				    });

				} else M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});

			} else M.toast({ html: 'Размер файла не может превышать больше 3 МБ' });

		}else M.toast({ html: 'Фаил отсутствует' });
	}	

})();



