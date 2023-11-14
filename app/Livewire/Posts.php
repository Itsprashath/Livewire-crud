<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $title,$body;
    public $posts;
    public $post_id;
    public $edit_mode=false;

    public function edit($id)
    {
        $this->edit_mode=true;
        $post=Post::find($id);
        $this->title=$post->title;
        $this->body=$post->body;
        $this->post_id=$id;
    }

    public function update()
    {
        $validated_data=$this->validate([
            'title'=>"required",
            'body'=>"required"

        ]);
        $post=Post::find($this->post_id);
        $post->update($validated_data);
        session()->flash('updatemessage','Successfully Updated!!!');
        $this->resetInput();
    }

    public function store()
    {
        $validated_data=$this->validate([
            'title'=>"required",
            'body'=>"required"

        ]);
        Post::create($validated_data);
        session()->flash('successmessage','Successfully Saved!!!');
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->title='';
        $this->body='';

    }

    public function delete($id)
    {
        $post=Post::find($id);
        $post->delete();
        session()->flash('deletemessage','Successfully Deleted!!!');

    }

    public function updatecancel()
    {
        $this->edit_mode=false;
        $this->resetInput();
    }

    public function render()
    {
        $this->posts=Post::all();
        return view('livewire.posts');
    }
}
