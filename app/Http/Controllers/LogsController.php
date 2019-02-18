<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.users', ['users' => $users]);
    }

    public function testAddLog($subject)
    {
        \LogActivity::addToLog('$subject');
        dd('log insert successfully.'); // dd : Dump and Die
    }

    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}
