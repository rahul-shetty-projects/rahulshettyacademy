<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Support\Facades\DB;
use File;
use Image;
use Session;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home',['page_title' => 'Home']);
    }

    public function listProjectSubscribers()
    {
        // fetch all client_info_table
        $subscribers_info = DB::table('projects_subscribers')
            ->select('*')
            ->paginate(50);
        return view('backend.list_project_subscribers',['page_title' => 'Project Subscribers', 'subscribers_info' => $subscribers_info]);
    }

    public function downloadSubscriberCSV()
    {
        $subscribers = DB::table('projects_subscribers')
            ->select('*')
			->where('is_verified',1)
            ->get();

        $filename = "Project_Subscribers.csv";
        $handle = fopen($filename, 'w+');

        fputcsv($handle, array('Sno.', 'Name', 'email', 'Is verified'));
        if(count($subscribers) != 0) {
            // $isVerified = false;
            // for($i = 0; $i < count($result); $i++) {
            //     if($result[$i] && $result[$i]->code == $hashed_password) {
            //         $isVerified = true;
            //     }
            // }
            foreach ($subscribers as $subscriber) {
                fputcsv($handle, array($subscriber->sno , $subscriber->name, $subscriber->email, $subscriber->is_verified));
            }
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return Response::download($filename, 'Project_Subscribers.csv', $headers);
    }
}
