@extends('layouts.app')

@section('content')

    @include('_navbar')

    @if (auth()->check())
          <div class="justify-end mb-4">
            <a
              href="/posts/create"
              class="bg-transparent hover:bg-red-200 font-semibold py-2 px-4 border border-red-500 hover:border-transparent rounded mr-5"
              >Upload</a>
            
          </div>
          
          <hr>

          <table class="table-auto" style="width: 600px">
            <tr>
    @endif


    <div class="fotos p-1 mt-3">
        @foreach($posts as $post)

        @if (auth()->check())
            <td>
                <a 
                    href='/posts/{{$post->id}}/delete/{{basename($post->pic)}}'
                    class="bg-transparent hover:bg-red-200 font-semibold py-2 px-4 border border-red-500 hover:border-transparent rounded">x</a>
            </td>
            <td>
        @endif
            <img 
                src="/images/portfolio/{{basename($post->pic)}}" 
                alt=""
                class="p-1"
                >

        @if (auth()->check())
            </td>
        </tr>  
        @endif
        @endforeach

        @if (auth()->check())  
        </table>
        @endif

        
    </div>


@endsection
