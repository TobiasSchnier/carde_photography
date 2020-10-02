<?php
$startbuttons = ['Port-Folio', 'About', 'Kontakt'];
?>

<div class="flex justify-between justify-items-end" style="background-color: #f5f6fa">
  <div class="w-1/2">
  @foreach($startbuttons as $startbutton)
        <?php $button_width = 40-($loop->index)*5;?>
        <div class="flex rounded-r-sm mt-5 balken">
            <a 
                href="/{{$startbutton}}"
                class="text-xl text-white uppercase  pl-5 bg-blue-600 rounded-r-full font-serif tracking-wide {{Request::path() === $startbutton ? 'bg-blue-900' : ''}}"
                style="width: {{$button_width . '%'}} "
                id="navibar"
            >
            {{$startbutton}}</a>

        </div>
        @endforeach
  </div>

  <div class="">
  <a href="/">
    <img 
        src="/images/logo.png" 
        alt=""
        width=""
        class="pflogo">
    </a>
  </div>
</div>


<div class="flex mb-5" >
    <div class="flex-1 mt-1 navibar_mobile">
        
    </div>
    
    
</div>


