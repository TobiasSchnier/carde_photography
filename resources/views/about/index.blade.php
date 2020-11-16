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
            <i style="font-size: 20px">„Ein Bild sagt mehr als tausend Worte“ </i></br>schrieb Kurt Tucholsky schon im Jahre 1926. <br/>
            In unserem heutigen digitalen und visuellen Zeitalter gilt dies umso mehr. Fotos sind das erste, <br/> was der User z.B. in einem Immobilien-Expose oder auf einer Internetseite wahrnimmt. </br>
            Erst schweift der Blick über die Bilder und danach erfasst das Auge den Text. 
            Es ist somit der erste Eindruck, <br/>den sie Ihrem Kunden präsentieren.</br></br>
            Als selbstständiger Fotograf mit langjähriger Erfahrung in den Bereichen Architektur- und Eventfotografie </br> unterstützt ich Sie dabei, einen optimalen ersten Eindruck bei Ihren Kunden/Käufern oder Mietern zu hinterlassen.
            </p>

            <p class="text-gray-700 text-base">
                Eine Auswahl meiner Bilder finden Sie in meinem <a class="underline" href="/Port-Folio">Port-Folio</a>. </br></br>
            </p>


            <p class="text-gray-700 text-base mb-1">
                Referenzen, mit denen ich bisher schon erfolgreich zusammengearbeitet habe:
            </p>
            <ul class="text-gray-700 text-base">
                <li>astraplan GmbH</li>
                <li>Impact Hub Ruhrgebiet</li>
                <li>Fashionhouse Düsseldorf</li>
            </ul>
            

            <p class="text-gray-700 text-base mt-5 mb-5">Falls ich Ihr Interesse geweckt haben sollte, dann schreiben Sie mich gerne an und holen Sie sich ihr individuelles Angebot ein.</p>
            <a 
                href="mailto:carste@carsten.de"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                >Kontakt
            </a>
        </div>
    
  </div>
</div>


    
@endsection
