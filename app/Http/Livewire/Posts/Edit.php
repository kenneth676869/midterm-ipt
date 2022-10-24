<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;


class Edit extends Component
{
    public $postId;
    public $title, $content, $category;

    
    public function mount(){
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->category = $this->post->category;
    }

    public function editPost(){
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255']
        ]);

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category,
            
        ]);

        return redirect('/posts/my-posts')->with('message', 'success');
    }


    public function getPostProperty(){
        return Post::find($this->postId);
    }

    public function render()
    {
        return view('livewire.posts.edit');
    }
}
