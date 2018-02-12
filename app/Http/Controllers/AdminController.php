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

    private function auth_check() {
        $id = Session::get('admin_id');
//        echo "IT IS  ------$id";
        if ($id == NULL || $id == 0) {
//            exit();
            return Redirect::to('/admin')->send();
        }
    }
    

    public function logout() {
        //Admin Logged In Session Flag
        Session::put('admin_loggedin', FALSE);

        //Admin informations
        Session::put('admin_id', 0);
        Session::forget('admin_name');

        //Message for Notification Builder
        Session::put('message', array(
            'title' => 'Logged Out, ',
            'body' => 'You are no longer logged in',
            'type' => 'primary'
        ));

        return Redirect::to('/admin');
    }
    

    /**
     * Landing Page
     * @return type
     */
    public function index() {
        
        $this->auth_check();
        
        //Load Component
        $this->layout['adminContent'] = view('admin.modules.dashboard');

        //return view
        return view('admin.master', $this->layout);
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

}
