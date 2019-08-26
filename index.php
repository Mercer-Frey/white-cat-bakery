<?php
$route = $_GET['route'];
if ($route == '' OR $route == '/') {
    require_once 'main.php';
}
else if ($route == 'cakes'){
    require_once 'cakes.php';
}
else if ($route == 'cheesecakes'){
    require_once 'cheesecakes.php';
}
else if ($route == 'cupcakes'){
    require_once 'cupcakes.php';
}
else if ($route == 'pasta'){
    require_once 'pasta.php';
}
else if ($route == 'admin-create'){
    require_once 'admin_create.php';
}
else if ($route == 'admin-update'){
    require_once 'admin_update.php';
}
else if ($route == 'login'){
    require_once 'login.php';
}
else if ($route == 'check-login'){
    require_once 'check.php';
}
else if ($route == 'logout'){
    require_once 'logout.php';
}
else if ($route == 'signup'){
    require_once 'signup.php';
}
else if ($route == 'rules'){
    require_once 'rules.php';
}
else if ($route == '404'){
    require_once '404.php';
}
else {
    $route = explode("/", $route);
    if ($route[0] == 'admin-update') {
        $_GET['id'] = $route[1];
        require_once 'admin_update.php';
    }
    if ($route[0] == 'admin-delete') {
        $_GET['id'] = $route[1];
        require_once 'admin_delete.php';
    }
    if ($route[0] == 'cat') {
        $_GET['id'] = $route[1];
        require_once 'category.php';
    }
    else if ($route[0] == 'article'){
        $_GET['id'] = $route[1];
        require_once 'article.php';
    }
    else if ($route[0] == 'profile'){
        $_GET['id'] = $route[1];
        require_once 'profile.php';
    }
}

?>