<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Session;
use Auth;
use App\PointTnr;
use App\Rules\CheckTrnCode;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//protected $redirectTo = '/';
    public function redirectTo(){
        
    // User role
    $user_type = Auth::user()->user_type; 
    
    // Check user role
    switch ($user_type) {
        case '1':
                return '/tnr-code';
            break;
        case '2':
                return '/tnr-code';
            break;
        case '3':
                return '/tnr-code';
            break;
        default:
                return '/login'; 
            break;
    }
}

    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function autorTrnCheck(){
        $gettnr = input::get('tnr');
        $user = User::where('code',$gettnr)->get();
        foreach($user as $u){
            if(isset($u->autoTnr)){
                 return $u->autoTnr;
            }
            return false;
        }
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'email' => ['required','email',  'unique:users'],
            'number' => ['required','Numeric',  'unique:users'],
            'autoTnr' => ['unique:users'],
            // 'parent_number' => ['required','Numeric',  'unique:users'],
            'dob' => ['required',  'max:255'],
            'country' => ['required'],
            'gender' => ['required',  'max:255'],
            'nid' => ['required',  'max:400'],
          
            'n_lan' => ['required',  'max:255'],
            's_lan' => ['required',  'max:255'],
           
            'tnr' => ['nullable', new CheckTrnCode],
            'address' => ['required', 'string', 'max:255'],
            'upozila' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function addPoint(){
        //echo "jeldkf";
      $gettnr = input::get('tnr');
     // echo $gettnr;

        $getUser = User::where('code',$gettnr)->first();
        //echo $getUser->f_name;

        //echo $code;
        if(isset($getUser->code) && !empty($getUser->code)){
          $vdsff = $getUser->point + 10;
       $users = User::findOrFail($getUser->id);
       $users->point = $vdsff;
       $users->save();
          return $users;
          // exit();
        }else{
            return view('refNotFound');
        }
 

           
    }

    public function tnr($length = 6){
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;

    }


    
    
    protected function create(array $data)
    {
        $nid ='null';
        if (Input::file('nid')) {
            $destinationPath = 'uploads/stuent/nid/';
            $extension = Input::file('nid')->getClientOriginalExtension();
            $filename = uniqid().'.'.$extension;
            $image_url = $destinationPath . $filename;
            $nid = Input::file('nid')->move($destinationPath, $filename);

            
        }
        // $six_digit_random_number = mt_rand(100000, 999999);
        if(Session::get('user_type') == 1){
        $user = User::create([
            'f_name' => $data['f_name'],
            'user_type' => $data['user_type'],
            'l_name' => $data['l_name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'parent_number' => $data['parent_number'],
            'country' => $data['country'],
            
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'code' => $this->generateRandomString(),
            
            'nid' => $nid,
            'n_lan' => $data['n_lan'],
            's_lan' => $data['s_lan'],
            'tnr' => $data['tnr'],
            'point' => $this->addPoint(),
            'upozila' => $data['upozila'],
            'district' => $data['district'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);


        Mail::to($data['email'])->send(new VerifyMail($user));
// $this->addTrnPoint($data['id']);
        // $user = PointTnr::create([
        //     'user_id' => $data['id'],
        //     'point' => '10',
        // ]);
        return $user;
    }elseif (Session::get('user_type') == 2) {
        $user = User::create([
            'f_name' => $data['f_name'],
            'user_type' => $data['user_type'],
            'l_name' => $data['l_name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'country' => $data['country'],
            
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'nid' => $nid,
            'nid_number' => $data['nid_number'],
             'code' => $this->generateRandomString(),
            'n_lan' => $data['n_lan'],
            's_lan' => $data['s_lan'],
            'point' => $this->addPoint(),
            'tnr' => $data['tnr'],
            'upozila' => $data['upozila'],
            'district' => $data['district'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            // $this->addTrnPoint($data['id']);
        ]);
        Mail::to($data['email'])->send(new VerifyMail($user));
         // $this->addTrnPoint($data['id']);
        // $user = PointTnr::create([
        //     'user_id' => $data['id'],
        //     'point' => '10',
        // ]);
        return $user;
    }else{
        $user = User::create([
            'f_name' => $data['f_name'],
            'user_type' => $data['user_type'],
            'l_name' => $data['l_name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'country' => $data['country'],
            
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'nid' => $nid,
            'code' => $this->generateRandomString(),
            'n_lan' => $data['n_lan'],
            's_lan' => $data['s_lan'],
            'point' => $this->addPoint(),
            'tnr' => $this->tnr(),
            'upozila' => $data['upozila'],
            'district' => $data['district'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);
        Mail::to($data['email'])->send(new VerifyMail($user));

        return $user;
    }
    }

    //  public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     // $this->guard()->login($user);

    //     return $this->registered($request, $user)
    //                     ?: redirect($this->redirectPath());
    // }

 /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;
    }

    // public function register(Request $request){
    //     $input = $request->all();
    //     $validator = $this->validator($input);
    //     if($validator->passes()){
    //         $user = $this->create($input)->toArray();
    //         $user['link'] = str_random(6);
    //         DB::table('user_activate_codes')->insert(['id_user' => $user['id'],'code'=>$user['link']]);
    //         Mail::send('mail.activation',$user,function($message) use ($user){
    //             $message->to($user['email']);
    //             $message->subject('tuhin.womenindigital@gmail.com - Activation Code');
    //         });
    //         return redirect()->
    //     }
    // }
}
