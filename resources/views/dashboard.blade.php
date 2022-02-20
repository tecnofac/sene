<x-app-layout>
    
    <div class="row " x-data="
        {
            sidenav : true,
            option : [true, false, false, false, false, false, false, false, false, false, false,],
            activer(index){
                for(let i = 0; i < this.option.length; i++){
                    if(i != index) this.option[i] = false
                    else this.option[index] = true
                }
                console.log(this.option)
            }
        }
    ">
        <div class="col-lg-2 pt-4 pb-4 border-end border-2 border-secondary p-0" x-show="sidenav">
            <img src="{{asset('img/logo.jpg')}}" alt="" class="offset-lg-4 col-lg-5">
            <div class="">
                <a @click="activer(0)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center ">
                    Actualités
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(1)" href="#" class="list-group-item  list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    A propos
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(2)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Messages
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(3)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Header
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(4)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Contacts
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(5)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Liens
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(6)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Offres
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(7)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Outils
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(8)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Partenaire
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(9)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Projet
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
                <a @click="activer(10)" href="#" class="list-group-item list-group-item-action text-decoration-none text-dark fs-5 d-flex justify-content-between align-items-center">
                    Reseaux
                    <span class="badge  rounded-pill text-dark">
                        <i class="fa fa-angle-right"></i>
                    </span> 
                </a>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-12 p-0">
                     @livewire('navigation-menu')

                </div>
            </div>
            <div class="row">
                <div class="col-12" x-show="option[0]">
                    <livewire:admin.v-actu />
                </div>
                <div class="col-12" x-show="option[1]">
                    <livewire:admin.v-apropos/>
                </div>
                <div class="col-12" x-show="option[2]">
                    <livewire:admin.v-message />
                </div>
                <div class="col-12" x-show="option[3]">
                    <livewire:admin.v-header/>
                </div>
                <div class="col-12" x-show="option[4]">
                    <livewire:admin.v-contact />
                </div>
                <div class="col-12" x-show="option[5]">
                    <livewire:admin.v-liens />
                </div>
                <div class="col-12" x-show="option[6]">
                    <livewire:admin.v-offres />
                </div>
                <div class="col-12" x-show="option[7]">
                    <livewire:admin.v-outil/>
                </div>
                <div class="col-12" x-show="option[8]">
                    <livewire:admin.v-partenaire />
                </div>
                <div class="col-12" x-show="option[9]">
                    <livewire:admin.v-projet />
                </div>
                <div class="col-12" x-show="option[10]">
                    <livewire:admin.v-reseaux-sociaux />
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
