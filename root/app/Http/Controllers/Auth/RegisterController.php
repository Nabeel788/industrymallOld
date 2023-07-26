<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'check-customer' => ['required', 'string', 'max:255'],
            'phone-number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:16'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password'],
            // 'image' => ['required', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        // // // $banner = Banner::create($request->all());
        // // if (request()->hasFile('image')) {
        // //     // $file = $request->file('image');
        // //    return $fileName = uniqid() . request()->image->getClientOriginalName();
        // //     request()->image->move('root/upload/users/', $fileName);
        // //     //  $banner->image     = 'root/upload/Banners/' .$fileName;
        // //     //  $banner->save();

        // // }
        // // $file=$this->uploadfile();
        // $request = request();

        // $profileImage = $request->file('image');
        // $profileImageSaveAsName = time() . Auth::id() . "-profile." . $profileImage->getClientOriginalExtension();
   
        // $upload_path = 'root/upload/users/';
        // $profile_image_url = $upload_path . $profileImageSaveAsName;
        // $success = $profileImage->move($upload_path, $profileImageSaveAsName);
   
        return User::create([
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone1' => $data['phone-number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['check-customer']
            // 'image' => $data['image'],
           
        ]);
    }

    protected function redirectTo()
    {
        if (auth()->user()->role == 'Admin' || auth()->user()->role == 'Vendor') {
            return '/home';
        } else {
            return '/';
        }
        abort(500);
    }
}
