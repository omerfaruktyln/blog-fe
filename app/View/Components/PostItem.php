<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostItem extends Component
{

    public function __construct(public Post $post, public bool $showAuthor = true)
    {
        //
    }


    public function render(): View|Closure|string
    {
        return view('components.post-item');
    }
}
