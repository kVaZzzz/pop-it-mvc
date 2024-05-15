<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Src\Auth\Auth;
use Model\Doctors;
use Model\Appoitments;
use Model\Job_titles;
use Model\patients;
use Model\Roles;
use Model\User;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add(Request $request): string
    {
        if ($request->method === 'POST' && Doctors::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add');
    }
    public function find_patient(): string
    {
    return new View('site.find_patient');
    }
    public function find_doctor(): string
    {
    return new View('site.find_doctor');
    }
    public function patient(): string
    {
    return new View('site.patient');
    }
    public function record(): string
    {
    return new View('site.record');
    }
    public function cancel_record(): string
    {
    return new View('site.cancel_record');
    }
    public function add_employee(): string
    {
    return new View('site.add_employee');
    }
}