<div>
    <div class="row">
        <div class="py-5  col-8">
            <div class="shadow card w-100" style="width: 18rem;">
                <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-img-overlay">
                    <h5 class="px-1 py-2 text-white card-title" style="background-color: rgba(0, 0, 0, .3)">Card title</h5>
                   
                  </div>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="py-5 col-4">
            {{-- Actualites --}}
            <h3>Dernières Actualités</h3>
            @foreach (array_slice($actus, 0, (count($actus) > 4 ? 4 : count($actus) )) as $act)    
            <a class="row text-decoration-none text-secondary" href="#" >
                <div class="col-3">
                    <img src="{{ asset('img/1.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-9">
                    <h4>Glodi nsuadi</h4>
                    <p style="text-align:justify " class="d-inline-block text-truncate w-100">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia laborum cum animi atque totam? Quas, aspernatur ullam? Pariatur asperiores saepe, fugiat nostrum veritatis sit numquam fugit maiores facilis! Facilis, obcaecati.
                    </p>
                </div>
            </a>
            @endforeach
            <hr>
            {{-- Liens --}}
            <h3>Liens Utiles</h3>
            @foreach ($liens as $lien)    
            <a class="row text-decoration-none text-secondary" href="#" >
                <div class="col-10">
                    <i class="fa fa-chevron-right"></i> Ministère du Plan
                </div>
                {{-- <div class="col-2 text-end">
                    <i class="fa fa-chevron-right"></i>
                </div> --}}
            </a>
            @endforeach
        </div>
    </div>
</div>
