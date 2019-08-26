;(function(){

  document.querySelectorAll('.btn-save-main').forEach(e=>{
    e.addEventListener('click', updateCategories);
  });

	function updateCategories(){
		if(this.previousElementSibling.previousElementSibling.files.length === 0){ // если нового файла не было
			this_ = this
			const url = 'core/main_update.php';
			const formData = new FormData();

			let main_input = this.previousElementSibling.value;
			let item_id = this.getAttribute('data-main-id');

			formData.append('main_name', main_input);
			formData.append('main_id', item_id);

			fetch(url, {
			    method: 'POST',
			    body: formData,
			}).then(function (response) {
			  return response.text();
			})
			.then(function (body) {
				if(body === '4'){
			    	M.toast({ html: 'данные успешно обновлены' });
		            setTimeout(function () {
		                location.href = "main.php";
		            }, 1000);
		            this_.removeEventListener('click', updateCategories);
			    }      
			    else if(body === '1'){
			    	M.toast({ html: 'Поле не может быть пустым' });
			    }           
		        else {
		            M.toast({ html: 'Неизвестаня ошибка' });
		            M.toast({ html: 'обновите страницу и' });
		            M.toast({ html: 'попробуйте еще раз' });
		        }
			});


		}else{
			this_ = this

			const url = 'core/main_update.php';
			const formData = new FormData();

		    let files = this.previousElementSibling.previousElementSibling.files;
			let main_input = this.previousElementSibling.value;
			let old_image = this.getAttribute('data-main-img-name');
			let item_id = this.getAttribute('data-main-id');

		    for (let i = 0; i < files.length; i++) {
		        let file = files[i];

		        formData.append('files[]', file);
		    }

		    formData.append('old_image', old_image);
		    formData.append('main_name', main_input);
			formData.append('main_id', item_id);


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
					    	M.toast({ html: 'данные успешно обновлены' });
				            setTimeout(function () {
				                location.href = "main.php";
				            }, 1000);
		           			this_.removeEventListener('click', updateCategories);
					    }      
					    else if(body === '1'){
					    	M.toast({ html: 'Поле не может быть пустым' });
					    }  
					    else if(body === '6'){
					    	M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});
					    }  
					    else if(body === '7'){
					    	M.toast({ html: 'Размер файла не может превышать больше 3 МБ' });
					    }  			    			             
				        else {
				            M.toast({ html: 'Неизвестаня ошибка' });
				            M.toast({ html: 'обновите страницу и' });
				            M.toast({ html: 'попробуйте еще раз' });
				        }

				    });

				} else M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});

			} else M.toast({ html: 'Размер файла не может превышать больше 3 МБ' });
		}
	}

})();



