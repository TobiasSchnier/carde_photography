<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use File;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validatePost();

        $post = new Post(request(['pic','tag']));
        $post->save();

        if (request('pic')) {
            $filename = time().'.jpg';
            Storage::disk('uploads')->put($filename, file_get_contents(request('pic')));
            $attributes['pic'] = $filename;
            $post->update($attributes);
          }
          if (request('tag')) {
            $attributes['tag'] = request('tag');
            $post->update($attributes);
          }  

        return redirect('/Port-Folio');
    }

    protected function validatePost()
    {
      return request()->validate([
        'pic' => 'required',
        'tag' => 'required',
      ]);
    }

    public function delete()
    {
        $toDelete = request('post');
        Post::where('id', $toDelete )->delete();

        $toDeleteFile = request('pic');
        File::delete('images/portfolio/' . $toDeleteFile);

        return redirect('/Port-Folio');
    }
}


