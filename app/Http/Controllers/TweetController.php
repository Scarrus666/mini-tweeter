<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;
use App\Http\Requests\StorePostRequest;
// use App\Models\Post;


class Post extends Model
{
/*     Removed because of Redundancy

    public function store(Request $request)
    {
        // Validation if needed
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
        ]);

        // $request->title; 
        // $request->text;

        // Create a new post
        $post = new Post;
        $post->title = $request->input('title');
        $post->text = $request->input('text');

        dd($post);
        // $post->save();

        try 
        {
            $post->save();
        }
        
        catch (\Exception $a)
        {
            // Handle the exception, or log it for further investigation
        }
        return redirect('/tweets'); // Redirect after deletion

    } */
}


class TweetController extends Controller
{
    public function index()
    {
        //return view('tweets/index');

        // Get Data from the DB
        $tweets = Tweet::all();

        //Send the Data to View
        return view('tweets/index', [
            'tweets' => $tweets
        ]);
    }

    public function create()
    {
        return view('tweets/create');
    }

    public function show($id)
    {
        // return view('tweets/show');

        // Get Data from the DB
        // $results = DB::select('select * from tweets', array(1));

        $tweets = Tweet::all();
        if (!$tweets) 
            {
                return abort(404); // Return a 404 error if no tweets found
            }

        $tweet = Tweet::find($id);
        if (!$tweet) 
            {
                return abort(404); // Return a 404 error if the tweet is not found
            }

        return view('tweets/show', ['tweet' => $tweet, 'tweets' => $tweets, 'id' => $id]);
    }

    public function massage()
    {
        return view('tweets/easterEgg/succulent_massage');
    }

    public function deleteTweet($id)
    {
        $tweet = Tweet::find($id);

        if (!$tweet) {
            return abort(404); // Return a 404 error if the tweet is not found
        }

        $tweet->delete();

        return redirect('/tweets'); // Redirect after deletion
    }

    public function store(Request $request)
    {

        
        
        // Validation if needed
        $validated = $request->validate([
            'title' => 'required|max:70',
            'text' => 'required|max:280',
        ], 
        [
            'title.required' => 'The title field is required.',
            'content.required' => 'The content field is required.',
        ]);

        $request->input('title'); // Access the value of the 'title' field
        
        // $request->title; 
        // $request->text;
        
        // Create a new post
        $tweet = new \App\Models\Tweet;
        $tweet->title = $request->input('title');
        $tweet->text = $request->input('text');
        //$tweet->title = 'New Post Title';
        //$post->text = 'Lorem ipsum...';
        
        \App\Models\Tweet::create([
            'title' => $tweet->title,
            'text' => $tweet->text
        ]);

        //dd($tweet);
        //$post->save();

/* The following also works as a save method

        try 
        {
            $tweet->save();
        }
        
        catch (\Exception $a)
        {
            // Handle the exception, or log it for further investigation
        } */

        return redirect('/tweets'); // Redirect after deletion
    }

}

