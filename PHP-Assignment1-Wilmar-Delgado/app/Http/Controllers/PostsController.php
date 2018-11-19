<?php

//Author: Wilmar Delgado
//Date: Nov 06 2018
//Email: wilmardp50@gmail.com

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use App\Models\Post;
use App\User;
// use App\Models\User as Profile;

class Summary {}
class Advertisement {}
class Community {}

class PostsController extends Controller
{

    public function demo() 
    {
        $posts = Post::all();

        echo'<pre>';
        var_dump($posts);
        return '';
    }

    public function index($id = 1)
	{
        
        //*************************************************************//
        //List Of Users
        //*************************************************************//
        $primaryUser = $this->getPrimaryUser($id);



        //*************************************************************//
        //List Of Posts
        //*************************************************************//
        $posts = $this->getPosts($primaryUser);


        //*************************************************************//
        //Website's Summary
        //*************************************************************//
        $summary = $this->getSummary();


        //*************************************************************//
        //Website's Ad
        //*************************************************************//
        $ad = $this->getAdvertisement();


        //*************************************************************//
        //Trending Communities
        //*************************************************************//
        $trendingCommunities = $this->getTrendingCommunities($primaryUser);

    //*************************************************************//
    //The Data
    //*************************************************************//
    $viewData = [
        'posts' => $posts,

        'summary' => $summary,
        'ad' => $ad,

        'communities' => $trendingCommunities,
    ];

    return view('welcome', $viewData);
    }
    


    //*************************************************************//
    //Functions For The Users
    //*************************************************************//
    public function getPrimaryUser($id)
    {
        $primaryUser = User::findOrFail($id);
        return $primaryUser;
    }
    //*************************************************************//
    //Functions For Posts
    //*************************************************************//
    public function getPosts($primaryUser)
    {
        $posts = Post::where('user_id', $primaryUser->id)->get();
        return $posts;
    }
    

    //*************************************************************//
    //Function For The Website's Summary
    //*************************************************************//
    public function getSummary()
    {
        $summary = new Summary();
        $summary->summaryBanner = 'https://www.redditstatic.com/desktop2x/img/id-cards/banner@2x.png';
        $summary->summaryImage = 'https://www.redditstatic.com/desktop2x/img/id-cards/snoo-home@2x.png';
        $summary->summaryHeading = 'r/popular';
        $summary->summaryDescription = 'The best posts on Reddit for you, pulled from the most active communities on Reddit. Check here to see the most shared, upvoted, and commented content on the internet.';
            
        return $summary;
    }
    

    //*************************************************************//
    //Function For The Ad
    //*************************************************************//
    public function getAdvertisement()
    {
        $ad = new Advertisement();
        $ad->image = 'https://i.pinimg.com/originals/c6/e8/fb/c6e8fb3409418cce146e39284c85f1fd.gif';
        $ad->description = 'ADVERTISEMENT';
        
            
        return $ad;
    }


    //*************************************************************//
    //Function For The Trending Communities
    //*************************************************************//

    public function getTrendingCommunities($primaryUser)
    {
        return User::where('id', '!=', $primaryUser->id)->get();
    }

}

