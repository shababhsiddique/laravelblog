<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //View Components Holder
    private $layout;

    public function __construct() {

        //Initialize Notifications View
        $this->layout['adminNotification'] = view('admin.common.notification');
    }

    /**
     * Landing Page
     * @return type
     */
    public function index() {

        return view('admin.login');
    }

    public function adminLogin(Request $request) {

        $email = $request->admin_email;
        $password = $request->password;

        $result = DB::table('admin')
                ->where('admin_email', $email)
                ->where('password', md5($password))
                ->first();


        if ($result) {

            //Admin Logged In Session Flag
            Session::put('admin_loggedin', true);

            //Admin Name 
            Session::put('admin_name', $result->admin_name);

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Welcome, ' . $result->admin_name,
                'body' => 'You Have Successfully Logged In',
                'type' => 'primary'
            ));

            //Load Component
            $this->layout['adminContent'] = view('admin.modules.dashboard');

            //return view
            return view('admin.master', $this->layout);
        } else {
            Session::put('exception', 'User Id or Password Invalid');
            return Redirect::to('/admin');
        }
    }

    /**
     * For testing purposes
     * @return type
     */
    public function test() {

        //Message for Notification Builder
        Session::put('message', array(
            'title' => 'Welcome, ',
            'body' => 'You Have Successfully Logged In',
            'type' => 'primary'
        ));

        //Load Component
        return view('admin.modules.tables', $this->layout);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
