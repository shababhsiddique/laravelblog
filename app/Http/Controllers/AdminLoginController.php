<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AdminLoginController extends Controller {

    public function __construct() {
        
    }

    /**
     * Show login form
     * @return type
     */
    public function index() {
        return view('admin.login');
    }

    /**
     * Verify Credentials
     * @param Request $request
     * @return type
     */
    public function verify(Request $request) {

        $email = $request->admin_email;
        $password = $request->password;

        $result = DB::table('admin')
                ->where('admin_email', $email)
                ->where('password', md5($password))
                ->first();


        if ($result) {

            //Admin informations
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Welcome, ' . $result->admin_name,
                'body' => 'You Have Successfully Logged In',
                'type' => 'primary'
            ));

            //Load Component
            $this->layout['adminContent'] = view('admin.modules.dashboard');

            //redirect to Dashboard
            return Redirect::to('/dashboard');
        } else {

            Session::put('message', array(
                'title' => 'Error',
                'body' => 'Invalid Username or Password',
                'type' => 'danger'
            ));

            //Redirect back to login
            return Redirect::to('/admin');
        }
    }

}
