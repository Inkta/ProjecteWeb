<?php

class AuthController extends BaseController {
    
    public function showLogin(){
        if (Auth::check()) {
            Return Redirect::to('/home')->with('succes','You are already logged in');
            
        }
        // Show the login page
        return View::make('auth.login');

    }
    
    public function postLogin(){
        $userdata = array (
          'username' =>Input::get('username'),
          'password' => Input::get('password')
            
        );
        
          $rules = array(
            'username'  => 'Required',
            'password'  => 'Required'
        );
       
        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            // Try to log the user in.
            if (Auth::attempt($userdata))
            {
                // Redirect to homepage
                return Redirect::to('/home')->with('success', 'You have logged in successfully');
            }
            else
            {
                // Redirect to the login page.
                return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
            }
        }

        // Something went wrong.
        return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
    }
    
    
    public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('/home')->with('success', 'You are logged out');
    }
}