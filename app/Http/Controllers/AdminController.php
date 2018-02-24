<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Article;
use App\Models\Category;

session_start();

class AdminController extends Controller {

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
//        $this->layout['site_title'] = "Add Category";
        //return view
        return view('admin.master', $this->layout);
    }

    public function saveCategory(Request $request) {

        $this->authCheck();

        $category = new Category;

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;

        $category->save();


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

        $results = Category::all();


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

        $category = Category::find($id);
        if ($category->articles->isEmpty()) {
            $category->delete();

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Deleted Category',
                'body' => 'Category forever removed from Database',
                'type' => 'success'
            ));
        } else {

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Cannot Delete Category',
                'body' => 'Category currently under use',
                'type' => 'danger'
            ));
        }


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

        $category = Category::find($id);
        $category->publication_status = $status;
        $category->save();


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

        $oldCatData = Category::find($category_id);

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.category_editform')
                ->with('oldCategoryData', $oldCatData);

        //return view
        return view('admin.master', $this->layout);
    }

    public function updateCategory(Request $request) {

        $this->authCheck();

        $category = Category::find($request->category_id);

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;

        $category->save();


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

        $listCategories = Category::all();

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

        $listCategories = Category::all();
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

        $oldFileName = $request->article_image_previous;
//        echo "<pre>";
//        echo $oldFileName;
//        print_r($_POST);
//        exit();
        

        if (isset($request->article_id)) {

            //Its Update
            $article = Article::find($request->article_id);

            //Message for Notification Builder
            Session::put('message', array(
                'title' => 'Updated Article',
                'body' => "Article has been updated",
                'type' => 'info'
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
        
        
        /*
         * Image Upload
         */

        $files = $request->file('article_image');

        //Check if file chosen
        if ($files) {

            //File Is Selected, Proceed with upload
            $filename = $files->getClientOriginalName();

            //Generate A filename
            $customName = date('His') . $filename;

            //Get Img url for keeping
            $imgUrl = 'public/article_images/' . $customName;

            //Get path for upload
            $destinationPath = base_path() . "/public/article_images/";

            //Try upload
            $success = $files->move($destinationPath, $customName);

            if ($success) {

                if (isset($request->article_id)) {
                    
                    $oldFileName = $request->article_image_previous;
                    unlink($oldFileName);
                    
                } 
                
                $article->article_image = $imgUrl;
                
                //If it is an edit , remove old file
                

            } else {

                //File Upload Failed, 
                Session::put('message', array(
                    'title' => 'Error',
                    'body' => "File Upload Failed",
                    'type' => 'danger'
                ));

                
                return Redirect::to('/admin/list-articles');
            }
        }
        

        /* Common Tasks */
        $article->article_title = $request->article_title;
        
        $article->article_preface = $request->article_preface;
        $article->article_body = $request->article_body;        
        
        $article->article_slug = $request->article_slug;
        
        $article->category_id = $request->category_id;
        
        $article->article_author = Session::get('admin_name');
        
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

        $listArticles = Article::where("deletion_status", 0)
                ->orderBy('created_at', 'DESC')
                ->get();

        $dltdArticles = Article::where("deletion_status", 1)
                ->orderBy('updated_at', 'DESC')
                ->get();

        $favArticles = Article::where("favourite_status", 1)
                ->where("deletion_status", 0)
                ->where("publication_status", 1)
                ->orderBy('updated_at', 'DESC')
                ->get();

        //Load Component        
        $this->layout['adminContent'] = view('admin.partials.article_table')
                ->with('allArticles', $listArticles)
                ->with('deletedArticles', $dltdArticles)
                ->with('favouriteArticles', $favArticles);


        return view('admin.master', $this->layout);
    }

    /**
     * Alter a status of selected article, publish, delete, favourite
     * @param type $status
     * @param type $id
     * @return type
     */
    public function changeArticleStatus($status, $id) {

        $this->authCheck();


        switch ($status) {
            case "fav":

                $article = Article::find($id);
                $article->favourite_status = 1;
                $article->save();

                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Article Set To Favourite',
                    'body' => 'Article marked as favourite',
                    'type' => 'success'
                ));
                break;
            case "unfav":

                $article = Article::find($id);
                $article->favourite_status = 0;
                $article->save();

                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Article Favourite Flag Removed',
                    'body' => 'Article unmarked as favourite',
                    'type' => 'success'
                ));
                break;
            case "del":

                $article = Article::find($id);
                $article->deletion_status = 1;
                $article->save();

                //Message for Notification Builder
                Session::put('message', array(
                    'title' => 'Deleted Article',
                    'body' => 'Article moved to trash',
                    'type' => 'success'
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
                    'type' => 'success'
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
                    'type' => 'success'
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
                    'type' => 'success'
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
