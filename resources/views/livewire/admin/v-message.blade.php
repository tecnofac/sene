<div class="container">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
    <div class="pt-3 row ">
        @foreach ($messagess as $sms)
            
        <div class="py-2 border rounded col-lg-4 border-secondary-opacity-2">
            
            
            <div class="row">
                <div class="col-lg-3">
                    <i class="fa fa-user-circle text-primary display-1"></i>
                </div>
                <div class="pt-3 col-lg-6">
                    <h4 ></h4>
                    <span class="row">
                        <i class="fa fa-clock text-secondary col-lg-1" ></i>
                        <p class="col-lg-11 text-secondary"></p>{{ $sms->created_at}}<hr>
                    </span> 
                </div>
                <div class="offset-lg-1 col-lg-1 " >
                    <button type="button" class="border-none btn" wire:click="delete({{$sms->id}})">
                        <i class="fa fa-trash-alt text-secondary h3"></i>
                    </button>
                </div>
            </div>
            <div class="ps-2 text-secondary ">
                <h4>Par : {{$sms->nom}} / </h5>
                <p>
                    {{$sms->contenu}}
                </p>
                <a href="mailto:{{$sms->email}}">Repondre par mail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
