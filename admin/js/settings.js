;(function(){

document.querySelector('#change_login_1').onclick = function (e) {
    e.preventDefault();
    let new_login_1 = document.querySelector('#new_login_1').value;
    let old_login_1 = document.querySelector('#old_login_1').value;

    let data = {
        "new_login_1": new_login_1,
        "old_login_1": old_login_1
    }

    document.querySelector('#old_login_1').value = '';
    document.querySelector('#old_login_2').value = '';
    document.querySelector('#old_password').value = '';

    ajax('core/change_login_1.php', 'POST', data, change_login_1);

    function change_login_1(result) {

        if (result == 4) {
            M.toast({ html: 'логин 1 успещно изменен' });
            M.toast({ html: 'пожалуйста перезайдите' });
            setTimeout(function () {
                location.href = "core/logout.php";
            }, 2000);
        }
        else if (result == 3) {
            M.toast({ html: 'Старый логин 1 не совпадает' });
        }
        else if (result == 2) {
            M.toast({ html: 'Поля заполнены не правильно' });
        }
        else if (result == 1) {
            M.toast({ html: 'Заполните поля' });
        }                   
        else {
            M.toast({ html: 'Неизвестаня ошибка' });
            M.toast({ html: 'обновите страницу и' });
            M.toast({ html: 'попробуйте еще раз' });
        }
    }
}

document.querySelector('#change_login_2').onclick = function (e) {
    e.preventDefault();
    let new_login_2 = document.querySelector('#new_login_2').value;
    let old_login_2 = document.querySelector('#old_login_2').value;

    let data = {
        "new_login_2": new_login_2,
        "old_login_2": old_login_2
    }

    document.querySelector('#old_login_1').value = '';
    document.querySelector('#old_login_2').value = '';
    document.querySelector('#old_password').value = '';

    ajax('core/change_login_2.php', 'POST', data, change_login_2);

    function change_login_2(result) {

        if (result == 4) {
            M.toast({ html: 'логин 2 успещно изменен' });
            M.toast({ html: 'пожалуйста перезайдите' });
            setTimeout(function () {
                location.href = "core/logout.php";
            }, 1000);
        }
        else if (result == 3) {
            M.toast({ html: 'Старый логин 2 не совпадает' });
        }
        else if (result == 2) {
            M.toast({ html: 'Поля заполнены не правильно' });
        }
        else if (result == 1) {
            M.toast({ html: 'Заполните поля' });
        }     
        else if (result == 404) {
            M.toast({ html: '404' });
            location.href = "404.html"; 
        }     
        else if (result == 900) {
            M.toast({ html: '900' });
            location.href = "core/logout.php";
        }                
        else {
            M.toast({ html: 'Неизвестаня ошибка' });
            M.toast({ html: 'обновите страницу и' });
            M.toast({ html: 'попробуйте еще раз' });
        }
    }
}

document.querySelector('#change_password').onclick = function (e) {
    e.preventDefault();
    let new_pass = document.querySelector('#new_password').value;
    let old_pass = document.querySelector('#old_password').value;

    let data = {
        "new_pass": new_pass,
        "old_pass": old_pass
    }

    document.querySelector('#old_login_1').value = '';
    document.querySelector('#old_login_2').value = '';
    document.querySelector('#old_password').value = '';

    ajax('core/change_password.php', 'POST', data, change_password);

    function change_password(result) {

        if (result == 4) {
            M.toast({ html: 'Пароль успещно изменен' });
            M.toast({ html: 'пожалуйста перезайдите' });
            setTimeout(function () {
                location.href = "core/logout.php";
            }, 1000);
        }
        else if (result == 3) {
            M.toast({ html: 'Старый пароль не совпадает' });
        }
        else if (result == 2) {
            M.toast({ html: 'Поля заполнены не правильно' });
        }
        else if (result == 1) {
            M.toast({ html: 'Заполните поля' });
        }     
        else if (result == 404) {
            M.toast({ html: '404' });
            location.href = "404.html"; 
        }     
        else if (result == 900) {
            M.toast({ html: '900' });
            location.href = "core/logout.php";
        }                
        else {
            M.toast({ html: 'Неизвестаня ошибка' });
            M.toast({ html: 'обновите страницу и' });
            M.toast({ html: 'попробуйте еще раз' });
        }
    }
}
})();
