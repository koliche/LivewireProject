<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts, $title, $body, $post_id;
    public $updateMode = false;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
    }

    public function storep()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($validatedDate);

        session()->flash('message', 'posts Created Successfully.');

        $this->resetInputFields();

    }

    public function editp($id)
    {
        $this->updateMode = true;
        $post = Post::findOrFail($id);
        $this->posts_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;
        
    }

    public function cancelp()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function updatep()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($this->posts_id) {
            $posts = Post::find($this->posts_id);
            $posts->update([
                'title' => $this->title,
                'body' => $this->body,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'posts Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function deletep($id)
    {
        if($id){
            Post::where('id',$id)->delete();
            session()->flash('message', 'posts Deleted Successfully.');
        }
    }
}
