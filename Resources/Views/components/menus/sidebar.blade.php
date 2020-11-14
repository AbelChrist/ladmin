@php
    $viewMenu = function($menus) use (&$viewMenu, $permissions) {
        $html = '';
        foreach($menus as $menu) {
            if(in_array($menu['gate'], $permissions)) {
                $html .= view('ladmin::components.menus._partials._sidebar_item', ['menu' => $menu, 'viewMenu' => $viewMenu]);
            }
        }
        return $html;
    }
@endphp

<ul>
  <li class="{{ request()->is(config('ladmin.prefix', 'administrator')) ? 'active' : null }}">
    <a href="{{ route('administrator.index') }}" class="py-2 flex flex-auto items-center hover:text-gray-800">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <span class="label">Dashboard</span>
      <div class="flex-grow"></div>
    </a>
  </li>

  {!! $viewMenu($menu->sidebar) !!}
</ul>