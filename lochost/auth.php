<?php
    if($_COOKIE['user'] == 'Так')
        setcookie('user', 'Так', time() - 3600, '/');
    else
        setcookie('user', 'Так', time() + 3600, '/');

    header('Location: /')
?>