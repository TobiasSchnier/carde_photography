@extends('layouts.app')

@section('content')

    @include('_navbar')
    
    <div class="max-w-sm w-full lg:max-w-full lg:flex m-5 justify-center mt-10">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://fivewall.de/wp-content/uploads/2018/11/Profilfoto-1024x1024.jpg')" title="Woman holding a mug">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
            <div class="text-gray-900 font-bold text-xl mb-2">Carsten Deckert</div>
            <p class="text-gray-700 text-base">
                Ich bin freier Fotograf aus Essen und seit x Jahren mit meiner Kamera im urbanen Raum unterwegs.  </br>
                Meine fotografischen Schwerpunkte setze ich im Bereich der Stadt-, Architektur- aber auch Landschaftsfotografie.  </br>
                Über die Jahre habe ich mir ein Auge für Symmetrie, Spiegelungen, aber auch Farbdesign angeeignet. </br>
                Ich versuche stets das Lebendige und mit dem Statischen einzufangen. 
            </p>

            <p class="text-gray-700 text-base mb-5">
                Eine Auswahl meiner Bilder finden Sie in meinem <a class="underline" href="/Port-Folio">Port-Folio</a>. </br></br>
                Für mehr persönlich angehauchte Bilder lege ich Ihnen folgende Links ans Herz:
            </p>
            <a 
                href="https://www.instagram.com/cardephotography/"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                >Carde-Photgraphy
            </a>
            <a 
                href="https://www.instagram.com/cardephotography/"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow ml-3"
                >andere Seite
            </a>
            

            <p class="text-gray-700 text-base mt-5 mb-5">Für eine Anfrage oder eine geplante Zusammenarbeit kontaktieren Sie mich gerne per Mail:</p>
            <a 
                href="mailto:carste@carsten.de"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                >Kontakt
            </a>
        </div>
    
  </div>
</div>


    
@endsection
