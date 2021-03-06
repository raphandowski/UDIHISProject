<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author irene
 */
class UserController extends BaseController {

    protected $layout = 'layouts.master';

    public function getIndex() {
        $this->layout->content = View::make('login.login_page');
    }

    public function addUser() {
        $this->layout->content = View::make('admin.addUser');
    }

    public function storeUser() {
        User::create(Input::all());
    }

    public function login() {

        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
            );

   if (Auth::attempt($userdata)) {
        $level = Auth::user()->level;
        switch ($level) {
             case 0:
                # code...
                return Redirect::to('admin');
                break;
             case 1:
                # code...
                return Redirect::to('pharmacy');
                break; 
             case 2:
                # code...
                return Redirect::to('laboratory');
                break;  
             case 3:
                # code...
                return Redirect::to('reception');
                break; 
             case 4:
                # code...
                return Redirect::to('doctor');
            case 5:
                # code...
                return Redirect::to('account');
                break;    
                                  
            default:
                # code...
                break;
        }

   }
   else{

        return Redirect::to('login');
   }
       

}
        public function logout(){
            Auth::logout();
            return Redirect::to('login');
            
        }
}