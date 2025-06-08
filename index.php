<?php
# [FILE]
require_once 'autoload.php';

# [AUTO LOGIN]
auto_login();

# [ACTION]
if(isset($_GET['act']) && $_GET['act']) {
    // hàm explode : tạo mảng bởi dấu phân cách
    $_arrayURL = explode('/',$_GET['act']);
    // lấy action
    $_action=$_arrayURL[0];
    // kiểm tra có phải action của admin
    if($_action === 'admin') {
        // Kiểm tra có phải là admin hay không
        author('admin');
        // Cắt phần tử đầu tiên, tức xoá phần tử chứa 'admin'
        $_arrayURL = array_slice($_arrayURL, 1);
        // Kiểm tra request có rỗng không, để lấy action
        if(!$_arrayURL || !$_arrayURL[0]) return route('admin/thong-ke');
        else $_action = $_arrayURL[0];
        // Hiển thị file cho action
        if(file_exists('controllers/admin/'.$_action.'.php')) require_once 'controllers/admin/'.$_action.'.php';
        // Trả về trang 404 nếu không tìm thấy action
        else return view_error(404);
    }
    // Trả về action bên user
    else{
        if(file_exists('controllers/user/'.$_action.'.php')) require_once 'controllers/user/'.$_action.'.php';
        else return view_error(404);
    }
}
// Trường hợp không có action
else require_once 'controllers/user/trang-chu.php';