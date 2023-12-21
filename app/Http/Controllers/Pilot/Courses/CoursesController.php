<?php
namespace App\Http\Controllers\Pilot\Dashboard;
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
   		return view('pilot.dashboard.dash');
   }
}