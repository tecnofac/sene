@extends('client')

@section('content')
<div>
    <div class="py-4 header-h2 justify-items-center justify-content-center d-flex bg-info" {{-- style="background-image:url({{ asset('img/1.jpg') }})" --}}>
        <p class="container text-white h2" {{-- style="background-color: rgba(0, 0, 0, .3)" --}}>Detail Atualité</p>
    </div>
    <div class="container">
        <livewire:client.pages.v-d-actu />
    </div>
</div>
@endsection
