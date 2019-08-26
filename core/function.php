<?php
//соединение
function connect(){
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
//выборка
function selectRows($conn, $query){
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $a[] = $row;
        }
    } 
    return $a;
}

function selectOneRow($conn, $query){
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } 
    return false;
}

//закрытие
function close($conn){
    mysqli_close($conn);
}

class func{

    /*======================================================================*\
    Function:   GenerateCode
    Output:     string
    Input:      Число - длина строки 
    Descriiption: Функция для генерации случайной строки
    \*======================================================================*/
    public function GenerateCode($length = 6)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }
    
     /*======================================================================*\
    Function:   IsLogin
    Output:     True / False
    Input:      Строка логина
    Descriiption: Проверяет правильность ввода логина 
    \*======================================================================*/
    public function IsLogin($login){
        
        return (is_array($login)) ? false : (preg_match( "/[a-zA-Z0-9]{4,32}/i", $login)) ? $login : false;
    
    }
    
    /*======================================================================*\
    Function:   IsPassword
    Output:     True / False
    Input:      Строка пароля
    Descriiption: Проверяет правильность ввода пароля
    \*======================================================================*/
    public function IsPassword($password){
        
        return (is_array($password)) ? false : (preg_match( "/[a-zA-Z0-9]{4,32}/i", $password)) ? $password : false;
    
    }

    /*======================================================================*\
    Function:   IsMail
    Output:     True / False
    Input:      Email 
    Descriiption: Проверяет правильность ввода email адреса
    \*======================================================================*/
    public function IsMail($mail){
        
        if(is_array($mail) && empty($mail) && strlen($mail) > 255 && strpos($mail,'@') > 64) return false;
            return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $mail)) ? false : strtolower($mail);
            
    }
};
    $func = new func;
?>