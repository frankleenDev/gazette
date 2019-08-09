<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\News;
use DB;


class NewsController extends Controller
{
    //

    public function index()
    {

    	return view('dashboard');

    }

    public function gazette()
    {

    	$news = DB::table('news')->get();

    	return view('index')->with('news', $news);

    }

	public function update_forms()
	{


		$get_news = DB::table('news')->latest()->first();
		//dd($get_news);
		return view('forms-basic')->with('data', $get_news);

	}

    public function updateNews(Request $request)
    {

    	$i = 0;
    	$arrString = "";

    	foreach($request->file('multiple_inputs') as $image)
            {

            	//echo "string";
                $name=time()+$i.'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/article/', $name); 
                $data[] = 'assets/images/article/'.$name; 

                $i++;
            }

        foreach ($data as $key ) {
        	
        	if ($arrString=="") {
     				
            		$arrString = $arrString.$key.' ';

				}
			else
			{
            		$arrString = $arrString.' '.$key;

			}
        }

            //$arrString = implode(", ", $data);

    	//dd($arrString);

        /*
    	$image = Input::file('multiple_inputs');
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->move('assets/images/article/', $name);
        */

        $basic                = new News();
        $basic->headline      = $request->headline;
        $basic->content    	  = $request->content;
        $basic->category      = $request->category;

        if($request->breakingnews){
        	//dd('here');
        	$basic->breaking_news = $request->breakingnews;
        }

        if($request->highpriority	){
        	//dd('here');
        	$basic->priority 	  = $request->highpriority;
        }

        $basic->image_urls 	  = $arrString;

        $basic->save();

    }
}
