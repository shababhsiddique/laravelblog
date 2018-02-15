<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Article;

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

    /**
     * Check Authentication Status
     * @return type
     */
    private function authCheck() {
        $id = Session::get('admin_id');

        if ($id == NULL || $id == 0) {
            return Redirect::to('/admin')->send();
        }
    }

    /**
     * remove permissions from session
     * @return type
     */
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

    /*     * *
     * Category Management Start
     */

    /**
     * Categories
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


        return Redirect::to('/admin/add-category');
    }

    /**
     * View All Categories
     * @return type
     */
    public function listAllCategory() {

        $this->authCheck();

        $results = DB::table("category")->get();


        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.category_table')
                ->with('allCategories', $results);


        return view('admin.master', $this->layout);
    }

    /**
     * Delete Category By ID
     * @param type $id
     */
    public function deleteCategory($id) {

        $this->authCheck();

        DB::table("category")
                ->where("category_id", $id)
                ->delete();

        //Message for Notification Builder
        Session::put('message', array(
            'title' => 'Deleted Category',
            'body' => 'Category forever removed from Database',
            'type' => 'success'
        ));


        return Redirect::to('/admin/list-category');
    }

    /**
     * Change Status of this tag
     * @param type $status
     * @param type $id
     * @return type
     */
    public function changeCategoryStatus($status, $id) {

        $this->authCheck();

        DB::table("category")
                ->where("category_id", $id)
                ->update(['publication_status' => $status]);


        if ($status == 0) {
            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Updated Category Status to unpublished',
                'body' => 'This tag will be invisible',
                'type' => 'info'
            ));
        } else {
            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Updated Category Status to published',
                'body' => 'This tag is now visible',
                'type' => 'info'
            ));
        }



        return Redirect::to('/admin/list-category');
    }

    /**
     * Edit Category
     * @param type $category_id
     */
    public function editCategory($category_id) {

        $this->authCheck();

        $oldCatData = DB::table("category")
                ->where("category_id", $category_id)
                ->first();

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.category_editform')
                ->with('oldCategoryData', $oldCatData);

        //return view
        return view('admin.master', $this->layout);
    }

    public function updateCategory(Request $request) {

        $this->authCheck();
        $data = array();

        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;


        DB::table("category")
                ->where("category_id", $request->category_id)
                ->update($data);


        //Message for Notification Builder
        Session::put('message', array(
            'title' => 'Created Updated',
            'body' => $request->category_name . ' Updated Successfully',
            'type' => 'success'
        ));


        return Redirect::to('/admin/list-category');
    }

    /**
     * Category Management End
     * 
     * 
     * 
     */
    
    
    /**
     * Article Management Start
     */

    /**
     * Write new Article
     */
    public function newArticle() {

        $this->authCheck();

        $listCategories = DB::table("category")->get();

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.article_form')
                ->with('listCategories', $listCategories);

        //return view
        return view('admin.master', $this->layout);
    }

    /**
     * Edit Article
     * @param type $article_id
     * @return type
     */
    public function editArticle($article_id) {

        $this->authCheck();

        $listCategories = DB::table("category")->get();
        $oldArticleData = Article::find($article_id);

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.article_form')
                ->with('listCategories', $listCategories)
                ->with('oldArticleData', $oldArticleData);

        //return view
        return view('admin.master', $this->layout);
    }

    /**
     * Common Add/Update submit function
     * @param Request $request
     * @return type
     */
    public function saveArticle(Request $request) {

        $this->authCheck();

        if (isset($request->article_id)) {
            
            //Its Update
            $article = Article::find($request->article_id);

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Updated Article',
                'body' => "Article has been updated",
                'type' => 'success'
            ));
            
        } else {
            
            //Its new
            $article = new Article;

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Created New Article',
                'body' => "Article has been created",
                'type' => 'success'
            ));
        }

        $article->article_title = $request->article_title;
        $article->article_body = $request->article_body;
        $article->article_slug = $request->article_slug;
        $article->category_id = $request->category_id;
        $article->publication_status = $request->publication_status;

        $article->deletion_status = 0;

        $article->save();

        return Redirect::to('/admin/list-articles');
    }
    

    /**
     * List Articles Grid
     * @return type
     */
    public function listAllArticle() {

        $this->authCheck();

        $listArticles = Article::where("deletion_status", 0)->get();

        $dltdArticles = Article::where("deletion_status", 1)->get();

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.article_table')
                ->with('allArticles', $listArticles)
                ->with('deletedArticles', $dltdArticles);


        return view('admin.master', $this->layout);
    }

    /**
     * 
     * @param type $status
     * @param type $id
     * @return type
     */
    public function changeArticleStatus($status, $id) {

        $this->authCheck();


        switch ($status) {
            case "del":

                $article = Article::find($id);
                $article->deletion_status = 1;
                $article->save();

                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Deleted Article',
                    'body' => 'Article moved to trash',
                    'type' => 'info'
                ));
                break;
            case "rec":

                $article = Article::find($id);
                $article->deletion_status = 0;
                $article->save();


                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Article Restored',
                    'body' => 'Article moved back from trash',
                    'type' => 'info'
                ));
                break;
            case "pub":

                $article = Article::find($id);
                $article->publication_status = 1;
                $article->save();

                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Updated Article Status to published',
                    'body' => 'This article is now visible',
                    'type' => 'info'
                ));
                break;
            default:

                $article = Article::find($id);
                $article->publication_status = 0;
                $article->save();

                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Updated Article Status to unpublished',
                    'body' => 'This article will be invisible',
                    'type' => 'info'
                ));
                break;
        }

        return Redirect::to('/admin/list-articles');
    }

    /**
     * Article Management End
     */

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
