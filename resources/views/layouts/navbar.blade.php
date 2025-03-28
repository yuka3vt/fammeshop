<div class="navbar bg-base-100 shadow-sm py-4">
    <div class="navbar-start">
        <div class="flex-1">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('img/logo-16.png')}}" alt=""></a>
            </div>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="flex px-4 py-2 space-x-6">
                <li class="px-4 py-2">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li class="px-4 py-2">
                    <a>Shop</a>
                </li>
                <li class="px-4 py-2">
                    <a>Contact</a>
                </li>
                <li class="px-4 py-2">
                    <a>About</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end gap-3">
            <div class="dropdown dropdown-end border-1 rounded-full border-gray-300">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </div>
                <div
                    tabindex="0"
                    class="menu menu-md dropdown-content bg-base-100 z-1 mt-3 w-100 shadow">
                    <div class="card-body">
                        <span class="text-lg font-bold">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                    </div>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    @auth
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li>
                            <a>Settings</a>
                        </li>
                        <li>
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </li>
                    @endauth
                    @guest
                        <li>
                            <li>
                                <a href="{{route('login')}}">
                                    Login
                                </a>
                            </li>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>