<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() 
    {
        return view('Chats/index');
    }
    public function chat(): string
    {
        return view('Chats/index');
    }
    
    public function email(): string
    {
        return view('Emails/index');
    }
    public function kanban(): string
    {
        return view('Kanban/index');
    }
    public function todos(): string
    {
        return view('Todos/index');
    }
    public function filemanager(): string
    {
        return view('FileManager/index');
    }
    public function Post(): string
    {
        return view('Other/post');
    }
    public function Travel(): string
    {
        return view('Other/travel');
    }
    public function Nftv1(): string
    {
        return view('Other/nft-v1');
    }
    public function Nftv2(): string
    {
        return view('Other/nft-v2');
    }
    
}
