<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $title = 'all', $category = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function showPosts(){

        $query = Post::where('user_id', auth()->user()->id)
        ->orderBy('created_at','DESC')
        ->search($this->search);

        if($this->title != 'all') {
            $query->where('title', $this->title);
        }
        if($this->category != 'all'){
            $query->where('category',$this->category);
        }

    
        
        $posts = $query->paginate(2);

        return compact('posts');
    }
    public function render()
    {
        return view('livewire.posts.index', $this->showPosts());
    }
}
