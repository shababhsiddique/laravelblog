<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Layout Holder
    private $layout;
    
    
    public function __construct() {
        
        
        //Initialize Sidebar Contents
        $this->layout['sidebar'] = view('sidebar',[
            "msg" => "Custom Sidebar Msg"
        ]);
        
    }

    
    /**
     * Blog Landing Page
     * lists all post prefaces
     */
    public function index()
    {
        
        $this->layout['main'] = view('blog.index');
        
        return view('master', $this->layout);
        
    }
    
    
    /**
     * Blog Single Post View
     * View Full post and Comments
     */
    public function post($postId)
    {
        
        $this->layout['main'] = view('blog.index');
        
        return view('master', $this->layout);
        
    }
    
    
    
    public function contact()
    {
        
        $this->layout['main'] = view('blog.contact');
        unset($this->layout['sidebar']);
        
        return view('master', $this->layout);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
