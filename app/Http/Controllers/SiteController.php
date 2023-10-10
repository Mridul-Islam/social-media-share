<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function sharePosts()
    {
        $shareButtons = \Share::page(
            'https://debuggersstudio.com/',
            'What you are waiting for, just reach us!!',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $posts = Post::get();

        return view("share-post", compact('posts', 'shareButtons'));
    }




}
