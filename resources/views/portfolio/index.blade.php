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
<?php 

$activepill = "border-blue-900 rounded py-1 px-3 bg-blue-600 text-white";
$inactivepill = "border-white rounded hover:border-gray-200 text-blue-600 hover:bg-gray-200 py-1 px-3";

?>


    <ul class="flex pl-5">
        <li class="mr-3">
          <a class="inline-block border {{!empty($_GET['tag']) ? $inactivepill : $activepill }}" 
          href="/Port-Folio">Alle</a>
        </li>
        <li class="mr-3">
          <a class="inline-block border {{!empty($_GET['tag']) ?  ($_GET['tag']=='outdoor' ? $activepill : $inactivepill ):$inactivepill}}" 
          href="/Port-Folio?tag=outdoor">Outdoor</a>
        </li>
        <li class="mr-3">
          <a class="inline-block border {{!empty($_GET['tag']) ?  ($_GET['tag']=='indoor' ? $activepill : $inactivepill ):$inactivepill}}" 
          href="/Port-Folio?tag=indoor">Indoor</a>
        </li>
    </ul>

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
