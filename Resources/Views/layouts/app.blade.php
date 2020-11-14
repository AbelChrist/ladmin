<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }} | Administrator</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex,nofollow">
  <link rel="stylesheet" href="{{ asset('/css/ladmin/app.css') }}">
</head>
<body>
  
  <aside class="ladmin-main-menu hidden fixed left-0 top-0 bottom-0 w-screen bg-gray-800 bg-opacity-50 lg:w-auto xl:w-auto md:w-auto shadow z-50">
    <div class="flex h-16 w-64 items-center lg:justify-center md:justify-center lx:justify-center justify-between bg-secondary p-3">
      <a href="" class="item-center">
        <img src="{{ config('ladmin.logos.secondary') }}" class="w-32">
      </a>
      <a href="" class="sidebar-toggle-button lg:hidden md:hidden xl:hidden">
        <svg class="w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </a>
    </div>
    <div class="h-screen relative ladmin-menu pb-32 overflow-y-auto w-64 py-3 bg-gradient-to-t from-primaryDark via-primary to-secondary">
      <x-ladmin-sidebar />
    </div>
  </aside>

  <main class="ml-0 main-content h-screen overflow-y-hidden pb-40">
    <header class="flex-grow shadow h-16 bg-white items-center flex justify-between py-3 px-3 lg:px-6 xl:px-6">
      <div class="flex items-center">
        <a href="" class="sidebar-toggle-button">
          <svg class="w-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </a>
        <span class="font-light hidden lg:inline-block  md:inline-block xl:inline-block ml-3">
          {{ $user->name }}
          <small class="text-xs text-gray-500">/ {{ $user->role->name ?? 'no role' }}</small>
        </span>
        <div class="lg:hidden inline-block xl:hidden md:hidden">
          <a href="" class="item-center">
            <img src="{{ config('ladmin.logos.primary') }}" class="w-24">
          </a>
        </div>
      </div>
      <div>
        <ul class="ladmin-top-navigation flex items-center justify-center">
          {{-- Notification Menu --}}
          <x-ladmin-notification />

          {{-- Profile Menu --}}
          <li class="ladmin-dropdown">
            <a href="">
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">{{ strtoupper(substr($user->name, 0, 2)) }}</div>
            </a>

            <x-ladmin-toprightmenu />
          </li>
        </ul>
      </div>
    </header>

    <div class="container h-screen overflow-y-auto">
      <x-ladmin-alert />
      <header class="content-header p-6 pb-0 mb-3 flex flex-auto items-center justify-between">
        <div class="flex items-center">
          @if(request()->has('back'))
            <a href="{{ request()->get('back') }}" class="pr-3">
              <svg class="w-6 inline-block text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
              </svg>
            </a>
          @endif
          
          <h3 class="text-xl text-primary inline-block font-bold">{{ $title ?? 'Page Title' }}</h3>
        </div>
        
        <x-ladmin-breadcrumb />
      </header>
      
      <section class="content-body">
        <div class="pb-16 p-6 pt-0">
          
          {{ $slot }}
          
        </div>
      </section>
    </div>
  </main>
  
  <script src="{{ asset('/js/ladmin/app.js') }}"></script>
</body>
</html>