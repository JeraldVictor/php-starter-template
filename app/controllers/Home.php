<?php

class Home
{
    use Controller, Database, REST;

    public function index()
    {

        $model = new User;
        $data  = $model->get_users();
        $this->response($data);
    }

    public function test($URL1 = '', $URL2 = '')
    {
        $data = [
            "root" => ROOT,
            "URL" => $URL1,
            "URL2" => $URL2,
            "Request" => $this->_request,
            "server" => $_SERVER,
            "Session" => $_SESSION,
            "Cookies" => $_COOKIE,
            "GET" => $_GET,
            "POST" => $_POST,
        ];
        $this->response($data);
    }
}
