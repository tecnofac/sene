<div class="w-25 position-fixed t-alert"
    x-data="{ 
        show : false, 
        message: '' ,
        titre: '',
        type : ''
    }" 
    x-show="show" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    x-on:notify.window="show = true; 
                        message = $event.detail.message; 
                        type = $event.detail.type; 
                        titre = $event.detail.titre;
                        setTimeout(() => { message = ''; show = false }, 2500)">
    <div class="alert alert-dismissible fade show" role="alert" :class="{'alert-success':type=='success','alert-warning':type=='warning', 'alert-danger':type=='danger'}">
        <strong x-text="titre"></strong> |
        <span x-text="message"></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
</div>