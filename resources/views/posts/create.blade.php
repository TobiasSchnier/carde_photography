@extends('layouts.app')



@section('content')

    @include('_navbar')

    @if (auth()->check())
    <section class="">
    <header class="container mx-auto">
      <h1 class="py-4 text-4xl text-gray-700 font-bold">NEUER UPLOAD</h1>
      @for($i = 1 ; $i <= 1 ; $i++)
      <form action="/posts/createnewpost" method="POST" enctype="multipart/form-data" id="form">
          @csrf

          
      <div class="flex">
  

          <!-- pic1 -->
          <div class="mb-6">
            <label
              for="pic"
              class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
            Picture
            </label>

            <div class="flex">
              <input
                type="file"
                name="pic"
                id="pic"
                class="border border-gray-400 p-3 w-full"
                >

            </div>

            @error ('pic')
              <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
          </div>

         
                <!-- tag -->
            <div class="mb-6 ml-5">
            <label
              for="tag"
              class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
            Tag
            </label>

            <div class="flex">
              <select name="tag" id="" class="border border-gray-400 p-4 w-full">
                <option value=""></option>
                <option value="outdoor">Outdoor</option>
                <option value="indoor">Indoor</option>
              </select>
            </div>

            @error ('tag')
              <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
          </div>
          
          </div>
          @endfor

          <!-- Submit -->
          <div class="mb-6">
          <button
            type="submit"
            name="button"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-700 mr-4"
            >
              Submit
          </button>

          <a
            href="/Port-Folio"
            class="hover:underline"
            >
              Cancel
          </a>
        </div>


</form>






    @endif


    


    
@endsection
