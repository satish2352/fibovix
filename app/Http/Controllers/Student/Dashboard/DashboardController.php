<?php
namespace App\Http\Controllers\Student\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Service\Admin\AdminLoginService;
class DashboardController extends Controller
{
   public function __construct()
	{
		//$this->service=new AdminLoginService();
	}
   public function index()
   {
   		return view('student.dashboard.dash');
   }
   
//   public function validateAdminLogin(Request $req)
//   {
//   		$this->validateLogin($req);
//   		$uname=$req->input('email');
//   		$pass=$req->input('password');
//   		$result=$this->service->validateAdminLogin($req,$uname,$pass);
//          if($result)
//          {
//             return redirect('dashadmin');
            
//          }
//          else
//          {
//             return redirect('admin');
//          }
//   }
//   public function validateLogin($req)						
//   {
//   		$this->validate($req,[
//   			'email.required|email',
//   			'password.required'
//   		],
//          [
//             'email.email'=>'Enter proper email adddress',
//             'email.required'=>'Enter email adddress',
//             'password.required'=>'Enter password'
//          ]
//          );
//   }
//   public function logOut(Request $req)
//   {
//       $req->session()->forget('adminId');
//       return redirect('admin');
//   }
   
}