<nav class="p-0 navbar navbar-primary navbar-expand-lg bg-primary">
    <div class="container-fluid fs-5">
        <a href="#" class="navbar-brand">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-white text-decoration-none">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
        </a>
        <div class=" d-flex w-100 justify-content-end">
            <ul class="navbar-nav justify-content-end w-100">
                <li class="dropdown">
                    <a href="#" class="text-white nav-link dropdown-toggle" role="button" id="Me" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="Me">
                        <li>
                            <x-jet-dropdown-link href="{{ route('profile.show') }}" class="text-dark dropdown-ietm text-decoration-none">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" class="text-dark dropdown-ietm text-decoration-none"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Deconnexion') }}
                                </x-jet-dropdown-link>
                            </form>
                        </li>
                        
                    </ul>
                </li>
                
                </ul>
        </div>
    </div>
</nav>