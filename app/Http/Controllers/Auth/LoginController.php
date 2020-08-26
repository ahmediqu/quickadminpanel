<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo(){
        
    // User role
    $user_type = Auth::user()->user_type; 

// Student
    
    $fill_category = DB::table('student_profile_academics')->where('user_id',Auth::user()->id)->first();
    $student_languages = DB::table('student_languages')->where('user_id',Auth::user()->id)->first();
    
    $student_professinals = DB::table('student_professinals')->where('user_id',Auth::user()->id)->first();

//  Tutor
    $tutor_academics = DB::table('tutor_academics')->where('user_id',Auth::user()->id)->first();
    $tutor_language = DB::table('tutor_languages')->where('user_id',Auth::user()->id)->first();
    $tutor_profesional = DB::table('tutor_professinals')->where('user_id',Auth::user()->id)->first();

// Fransisco
    $franchise_cat = DB::table('franchise_profiles')->where('user_id',Auth::user()->id)->first();

$updat_user_table = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['song' => 1]);

    // Check user role
    switch ($user_type) {
        case ('1'):
            if(isset($fill_category) or isset($student_languages) or isset($student_professinals)){
                $updat_user_table = DB::table('users')
                        ->where('id', Auth::user()->id)
                        ->update(['song' => 1]);
                    return '/student/dashboard';
                }else{
                    $updat_user_table = DB::table('users')
                        ->where('id', Auth::user()->id)
                        ->update(['song' => 1]);
                     return 'student/academic';
            }
            break;
        case '2':
                if(isset($tutor_academics) or isset($tutor_language) or isset($tutor_profesional)){
                    return '/tutor/dashboard';
                }else{
                     return 'dashboard';
                }
               
            break;
        case '3':
            if(isset($franchise_cat)){
                return '/franchise/dashboard';
            }else{
                 return 'dashboard';
            }
            break;
        default:
                return '/login'; 
            break;
    }
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    

    
}
