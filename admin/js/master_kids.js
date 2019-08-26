;(function(){

	document.querySelector('#btn_master_data').onclick = updateMaster;

		let name = document.querySelector('#name').value;
		let cost = document.querySelector('#cost').value;
		let description = document.querySelector('#description').value;
		let to_order = document.querySelector('#to_order').value;
		let new_image = document.querySelector('#new_image').files;


	function updateMaster(){
		if(document.querySelector('#new_image').files.length === 0){ // если нового файла не было

			let name = document.querySelector('#name').value;
			let cost = document.querySelector('#cost').value;
			let description = document.querySelector('#description').value;
			let to_order = document.querySelector('#to_order').value;

			if(name.trim() !== '' && cost.trim() !== '' && description.trim() !== '' && to_order.trim() !== ''){

				const url = 'core/master_kids.php';
				const formData = new FormData();

				formData.append('name', name);
				formData.append('cost', cost);
				formData.append('description', description);
				formData.append('to_order', to_order);

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
			                location.href = "master_kids.php";
			            }, 1000);
		            	document.querySelector('#btn_master_poster').onclick = null;
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

			}else M.toast({ html: 'поля не могут быть пустыми' });

		}else{

		    let files = document.querySelector('#new_image').files;
			let name = document.querySelector('#name').value;
			let cost = document.querySelector('#cost').value;
			let description = document.querySelector('#description').value;
			let to_order = document.querySelector('#to_order').value;
			let old_image = document.querySelector('#btn_master_data').getAttribute('data-old-img');

			if(name.trim() !== '' && cost.trim() !== '' && description.trim() !== '' && to_order.trim() !== ''){

				const url = 'core/master_kids.php';
				const formData = new FormData();

			    for (let i = 0; i < files.length; i++) {
			        let file = files[i];

			        formData.append('files[]', file);
			    }

				formData.append('name', name);
				formData.append('cost', cost);
				formData.append('description', description);
				formData.append('to_order', to_order);
				formData.append('old_image', old_image);

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
					                location.href = "master_kids.php";
					            }, 1000);
		            		document.querySelector('#btn_master_poster').onclick = null;
						    }      
						    else if(body === '1'){
						    	M.toast({ html: 'Поля не может быть пустым' });
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

			}else M.toast({ html: 'поля не могут быть пустыми' });
		}
	}

})();



