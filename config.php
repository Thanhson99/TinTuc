<?php 

/* Định nghĩa đường dẫn tuyệt đối */
define("PATH_ROOT",dirname(__FILE__) . "/");
define("PATH_PUBLIC",PATH_ROOT . 'public/');
define("PATH_LIB",PATH_ROOT . 'lib/');
define("PATH_APP",PATH_ROOT . 'app/');
define("PATH_UPLOAD",PATH_PUBLIC . 'upload/');
define("PATH_TEMPLATE",  PATH_PUBLIC . 'template/');

/* Định nghĩa đường dẫn tương đối */
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

define("DIR_ROOT", $actual_link . "/mvc_tintuc/");
define("DIR_PUBLIC",DIR_ROOT . 'public/');
define("DIR_LIB",DIR_ROOT . 'lib/');
define("DIR_APP",DIR_ROOT . 'app/');
define("DIR_UPLOAD",DIR_PUBLIC . 'upload/');
define("DIR_TEMPLATE",  DIR_PUBLIC . 'template/');



/* Định nghĩa các thông số DATABASE */
define("DB_HOST","localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mvc_tintuc");

$resizeImage = [
    'category' => [
        'standard' => ['width' => 300,'height' => 300],
        'thumb' => ['width' => 100,'height' => 100],
    ],
    'post' => [
        'standard' => ['width' => 300,'height' => 100],
        'thumb' => ['width' => 100,'height' => 100],
    ],
    'user' => [
        'standard' => ['width' => 300,'height' => 100],
        'thumb' => ['width' => 100,'height' => 100],
    ]
];

$searchLabel = [
    'all' => 'tất cả',
    'name' => 'tên',
    'id' => 'ID',
    'content' => 'nội dung'
];
$searchList = [
    'category' => ['all' , 'name', 'id'],
    'post' => ['all' , 'name', 'content', 'id'],
    'user' => ['all' , 'name', 'id'],
];
?>