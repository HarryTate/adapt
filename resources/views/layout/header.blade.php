<header>
  <nav
    class="relative flex w-full items-center justify-between py-2 shadow-dark-mild dark:bg-body-dark lg:flex-wrap lg:justify-start lg:py-4 bg-zinc-50"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
      <div class="flex items-center">
        <button
          class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
          type="button"
          data-twe-collapse-init
          data-twe-target="#navbarSupportedContentY"
          aria-controls="navbarSupportedContentY"
          aria-expanded="false"
          aria-label="Toggle navigation">
        </button>
      </div>
      <div
        class="!visible grow basis-[100%] items-center text-center lg:!flex lg:basis-auto lg:text-left"
        id="navbarSupportedContentY"
        data-twe-collapse-item>
        <ul
          class="me-auto flex flex-col lg:flex-row"
          data-twe-navbar-nav-ref>
          <li class="mb-4 lg:mb-0 lg:pe-2">
            <div class="flex space-x-4">
              <a href="{{ route('patients.index') }}" class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">Patients</a>
              
              @auth
                <!-- Authenticated users -->
                <form method="POST" action="{{ route('logout') }}" class="inline-block">
                  @csrf
                  <button type="submit" class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">
                    Logout
                  </button>
                </form>
              @else
                <!-- Guest users -->
                <a href="{{ route('login') }}" class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">Login</a>
                <a href="{{ route('register') }}" class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2">Register</a>
              @endauth
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
