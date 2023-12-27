<?php 

class Insurers extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        
        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple social network built on the Traversy MVC PHP Framework'
        ];
        
        $this->view('insurers/index', $data);
    }
}