<nav class="navbar max-w-6xl mx-auto py-8 px-5 md:px-8 xl:px-0">
    <div class="flex flex-row items-center justify-between">
        <img src="{{ asset('assets/img/landing/logo-light.svg') }}" class="h-[42px]" alt="">
        <ul class=" flex-row gap-x-8 lg:flex hidden">
            <li><a href="#about-us" class="text-indigo-950 hover:text-[#15A7BB]">About us</a></li>
            <li><a href="#our-team" class="text-indigo-950 hover:text-[#15A7BB]">Our Team</a></li>
            <li><a href="#product" class="text-indigo-950 hover:text-[#15A7BB]">Product</a></li>
            <li><a href="#project" class="text-indigo-950 hover:text-[#15A7BB]">Project</a></li>
            <li><a href="#contact" class="text-indigo-950 hover:text-[#15A7BB]">Contact</a></li>
        </ul>
        <div class="flex flex-row gap-x-4">
            @guest
            <a href="#login"
                class="md:block hidden py-3 bg-[#FED700] text-indigo-950 font-semibold text-base px-5 rounded-full hover:text-white hover:bg-indigo-950 transition duration-500">
                Masuk / Daftar
            </a>
            @else
            <a href="#dashboard"
                class="md:block hidden py-3 bg-[#FED700] text-indigo-950 font-semibold text-base px-5 rounded-full hover:text-white hover:bg-indigo-950 transition duration-500">
                Dashboard
            </a>
            @endguest
            <div id="btn-dropdown" class="lg:hidden bg-white flex items-center p-[10px] rounded-full">
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 7H21" stroke="#080C2E" stroke-width="2" stroke-linecap="round" />
                        <path d="M3 12H21" stroke="#080C2E" stroke-width="2" stroke-linecap="round" />
                        <path d="M3 17H21" stroke="#080C2E" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- mega menu floating dropdown -->
<div id="dropdown-menu"
    class="megamenu absolute top-28 justify-center flex flex-col hidden px-5 lg:hidden md:px-10 w-full">
    <div class="flex flex-col bg-white p-5 md:p-8 rounded-2xl gap-y-5">
        <ul class="flex flex-col gap-y-5">
            <li><a href="#feature" class="text-indigo-950 hover:text-[#15A7BB]">Feature</a></li>
            <li><a href="#showcase" class="text-indigo-950 hover:text-[#15A7BB]">Showcase</a></li>
            <li><a href="#" class="text-indigo-950 hover:text-[#15A7BB]">Pricing</a></li>
            <li><a href="#" class="text-indigo-950 hover:text-[#15A7BB]">Testimonials</a></li>
            <li><a href="#" class="text-indigo-950 hover:text-[#15A7BB]">Contact</a></li>
        </ul>
        @guest
        <a href="#login" class="md:hidden py-3 bg-[#FED700] text-indigo-950 text-base px-5 text-center w-full rounded-full">
            Masuk / Daftar
        </a>
        @else
        <a href="#dashboard" class="md:hidden py-3 bg-[#FED700] text-indigo-950 text-base px-5 text-center w-full rounded-full">
            Dashboard
        </a>
        @endguest
    </div>
</div>
<!-- end mega menu floating dropdown --> 