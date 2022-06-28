<?php
namespace App\Http\Controllers\Admin;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index(){
     return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
       
        $msg = [
            'email.required' => 'Enter your email',
            'password.required' => 'Enter your password',
        ];
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'

        ], $msg);


        $remember_me = $request->has('remember_me') ? true : false;
        $email = $request->get('email');
        $pass = $request->get('password');
    
        if (Auth::attempt(array('email' => $email, 'password' => $pass), $remember_me)) {
            $check_email = Auth::user()->email;
            $request->session()->put('email', $check_email);
            $user_type = Auth::user()->user_type;
            $request->session()->put('user_type', $user_type);
            $get_user = DB::table('users')->where('email',$email)->first();
            $user_status = $get_user->status;           
            if(($user_type=='Admin') && $user_status == 'Active'){
               return redirect(route('admin::dashboard'));  
            }
            else{
              return redirect()->back()->with('error', 'Invalid email or password.');
            }


        } 

        else {

            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('/admin')->with('logout','Logout successfully.');
    }

    public function changePassForm()
    {
        return view('admin.password.changePassword');
    }

    public function ChangePass(Request $request)
    {
        $msg = [
            'old_pass.required' => 'Enter your old password',
            'new_pass.required' => 'Enter your new password',
            'confirm_pass.required' => 'Enter your confirm pasword',
        ];
        $this->validate($request, [
            'old_pass' => 'required|min:6',
            'new_pass' => 'required|min:6',
            'confirm_pass' => 'required|min:6',
        ], $msg);
        $old_pass=$request->old_pass;
        $new_pass=$request->new_pass;
        $confirm_pass=$request->confirm_pass;
        $id=Auth::user()->id;
        $pass=User::where('id',$id)->value('password');
        if(Hash::check($old_pass,$pass)){
            if($new_pass==$confirm_pass){
                $password=Hash::make($new_pass);
                $changePass=User::where('id',$id)->update([
                    'password' => $password,
                ]);
                if($changePass==true){
                    return redirect()->back()->with('success',"Password updated sucessfully." );
                }
            }
            else{
                return redirect()->back()->with('error',"New password and confirm password are not matched." );
            }
        }
        else{
            return redirect()->back()->with('error',"Old password not matched." );
        }

    }
    public function profile(){
        $userId = Auth::id();
        $userById=User::where('id',$userId)->first();
       // print_r($userById);
        return view('admin.profile.index',compact('userById'));
    }

    public function updateProfile(Request $request){
        $msg = [
            'first_name.required' => 'Enter your first Name',
            'last_name.required' => 'Enter your last Name',
            
            'email.required' => 'Enter your email',
        ];
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
         
        ], $msg);

       $id = Auth::id();
       $first_name = $request->get('first_name');
       $last_name = $request->get('last_name'); 
       $email = $request->get('email');
       $users = User::all();
       $duplicate = User::where('email',$email)->first();
         if($duplicate)
            {
                if($duplicate->id != $id)
                {
                  return redirect()->back()->with('error', 'Email already exist.Please try different ');
                }
                
            }

        User:: where('id',$id)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    
}