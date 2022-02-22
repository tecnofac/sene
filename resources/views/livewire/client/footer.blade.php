<div class="text-white bg-footer1">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <footer>
        <div class="container py-5">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                <h5 class="">CONTACTS</h5>
                <div class="text-white">
                  @foreach ($contacts as $cont)
                  @if($cont->icon != "location-dot")
                  <i class="text-white fa fa-{{$cont->icon}}"></i> +243(0) 991-068-948 <br>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                  <div class="col-md-6">
                    <h5 class="">LIENS UTILES</h5>
                  </div>
                  <div class="col-md-6">
                    <h5 class="">LIENS UTILES</h5>
                  </div>
              </div>
              <div class="row">
                
                @foreach ($urls as $url)  
                <div class="col-md-6">
                  <div class="text-white row">
                      <a href="https://www.investindrc.cd/fr/Ministere-du-Plan" class="text-white text-decoration-none">Ministère du Plan </a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="widget">
                <h5 class="widgetheading">TROUVEZ-NOUS</h5>
                <div>
                  @foreach ($contacts as $cont)
                  @if($cont->icon == "location-dot")
                   
                  <strong><i class="text-white fa fa-{{$cont->icon}}"></i> SENAREC RDC</strong><br>Address: {{ $cont->contenu }}
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-footer2">
          <div class="container">
            <div class="py-3 row">
              <div class="col-md-6">
                <div class="copyright">
                  <p>
                    <span>&copy; SENAREC RDC 2022 - Tout droits reservés.</span>
                  </p>
                  <div class="credits">
                    Designed by <a href="#">Gaston Kingole</a><br/>
                    Developed by <a href="#">King Fac</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-end align-item-center">
                <div class="rounded-social-buttons">
                  @foreach ($rxx as $rx)
                  <a class="px-2 py-1 text-white bg-secondary" href="{{ $rx->url }}" target="_blank"><i class="fab fa-{{ $rx->icon }}"></i></a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
    </footer>
</div>
