<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\Work;
use App\Models\Contact;

class SingleController extends Controller
{
    public function contactPost(Request $request) {
        $validated = $request->validate([
            'fullName' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'phone' => 'numeric|digits:10',
            'message' => 'required',
        ]);

        Contact::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return back()->with(['success' => __('Your request was successfully submitted')]);
    }

    public function work() {
        
        $works = Work::orderBy('id', 'ASC')->get();
    
        return view('work', ['works' => $works]);     
    }

    public function workView($slug) { 

        $work = Work::where('slug', $slug)
        ->first(['id', 'name', 'preview', 'category', 'client', 'year', 'description']);
        
        if(!$work) abort(404);
    
        $next = Work::where('id', $work->id + 1);
    
        if(!$next->exists()) $next = -1;
        
        else $next = $next->first(['name', 'slug']);
    
        $previous = Work::where('id' , $work->id - 1);
    
        if(!$previous->exists()) $previous = -1;
    
        else $previous = $previous->first(['name', 'slug']);
    
        return view('workView', [
            'work' => $work,
            'next' => $next,
            'previous' => $previous,
        ]);
    
    }

    public function setLocal($local) {
        #App::setLocale('en');

        dd(App::currentLocale());

        return redirect()->back();
    }
}
