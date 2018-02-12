<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

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

    private function authCheck() {
        $id = Session::get('admin_id');

        if ($id == NULL || $id == 0) {
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
            'type' => 'warning'
        ));

        return Redirect::to('/admin');
    }

    /**
     * Landing Page
     * @return type
     */
    public function index() {

        $this->authCheck();

        //Load Component
        //Load Component
        $this->layout['adminContent'] = view('admin.partials.dashboard');

        //return view
        return view('admin.master', $this->layout);
    }

    /**
     * For testing purposes
     * @return type
     */
    public function addCategory() {


        $this->authCheck();

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.category_form');

        //return view
        return view('admin.master', $this->layout);
    }

    public function saveCategory(Request $request) {

        $this->authCheck();
        $data = array();

        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;

        DB::table('category')->insert($data);


        //Message for Notification Builder
        Session::put('message', array(
            'title' => 'Created Category',
            'body' => 'Created new category',
            'type' => 'success'
        ));


        return Redirect::to('/dashboard/add-category');
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
        return view('admin.partials.tables', $this->layout);
    }

}
