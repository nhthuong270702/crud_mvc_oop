<?php
class App
{
    protected $controller = 'StudentController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->urlProcess();

        //lọc controller
        if (isset($url[0])) {
            //nếu người dùng nhập controller nào tồn tại thì 
            if (file_exists('./app/controllers/' . $url[0] . '.php')) {
                //gán controller đó
                $this->controller = $url[0];
            }
            unset($url[0]);
        }
        //nếu người dùng nhập controller ko tồn tại hoặc ko nhập controller thì mặc định controller = 'StudentController'
        require_once './app/controllers/' . $this->controller . '.php';
        //khởi tại controller mới
        $this->controller = new $this->controller;

        //lọc action
        if (isset($url[1])) {
            //nếu action người dùng nhập vào có tồn tại trong controller thì
            if (method_exists($this->controller, $url[1])) {
                //gán action đó
                $this->action = $url[1];
            }
            unset($url[1]);
        }

        //nếu tồn tại tham số thì gán, ngược lại params = rỗng
        $this->params = $url ? array_values($url) : [];

        //khởi tạo class từ controller
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function urlProcess()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); // loại bỏ khoảng trắng hoặc các ký tự được xác định trước khác từ phía bên phải của một chuỗi.
            $filter = filter_var($url);
            return explode('/', $filter); // ngat chuoi thanh mang
        }
    }
}