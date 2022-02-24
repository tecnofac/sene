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
            },
            menu : [
                'Actualités',
                'A propos',
                'Messages',
                'Header',
                'Contacts',
                'Liens',
                'Offres',
                'Outils',
                'Partenaire',
                'Projet',
                'Reseaux'
            ]
        }
    ">
        <div class="py-5 col-lg-2 bg-primary" x-show="sidenav" style="height:100vh;">
            <img src="{{asset('img/logo.jpg')}}" alt="" class="offset-lg-4 col-lg-5">
            
            <div class="py-5 ps-3">
                <template class="" x-for="(m, index) in menu">
                    <a @click="activer(index)" href="#" class=" text-decoration-none text-dark fs-2 d-flex justify-content-between align-items-center border-bottom">
                        <span x-text="m" class="text-white"></span>
                        <span class="text-white badge rounded-pill">
                            <i class="fa fa-angle-right"></i>
                        </span> 
                    </a>
                </template>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="p-0 col-12">
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
                    <livewire:admin.v-offre />
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
