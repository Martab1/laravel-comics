
{{-- utilizzo come layout --}}
@extends('layouts.app')   

{{-- mettere contenuto nel segnaposto --}}
@section('content')

    <section class="container">
        <div class="cards flex">
            @foreach ($cards as $card )
                <div class="card">
                    <img src="{{ $card['image']}}" alt="img">
                    <h4> {{ $card['title']}}</h4>
                </div>
            @endforeach   
            
        </div>

        <div class="btn-box">
            <button class="full-btn btn"> load more </button>
        </div>

    </section>
        
@endsection


