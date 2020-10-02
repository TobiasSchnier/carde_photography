@extends('layouts.app')

@section('content')

    @include('_navbar')

    @if (auth()->check())
    <section class="">
    <header class="container mx-auto">
      <h1 class="py-4 text-4xl text-gray-700 font-bold">NEUER UPLOAD</h1>
      <form action="/posts/createnewpost" method="POST" enctype="multipart/form-data">
          @csrf

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
                class="border border-gray-400 p-2 w-full"
                >

            </div>

            @error ('pic1')
              <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
          </div>

         

         



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
