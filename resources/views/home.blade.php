@extends('layouts.app')
<body style="overflow: hidden; position: fixed; ">
@section('content')
<div 
    class=""
    id="backdrop"
    >

    <div class="arrow-down">

    </div>
    <img 
        class="logo"
        src="images/logo.png" 
        alt=""
        
            >

<?php
$startbuttons = ['Port-Folio', 'About', 'Kontakt'];
?>

@foreach($startbuttons as $startbutton)
<div class="flex rounded-full mt-5  bg-blue-600"id="{{$startbutton . 'btn'}}">
    <a 
        href="/{{$startbutton}}"
        class="font-serif tracking-wide w-56 h-20 text-xl text-white uppercase  text-center pt-6  pl-1 "
    >
    {{$startbutton}}</a>

    
</div>
@endforeach

    

</div>
    
@endsection
</body>