<ul class="rounded mt-4 shadow">
  @foreach ($menu->topRright as $menu)
    @if(in_array($menu['gate'], $permissions))
      @php
        $router = 'javascript:void(0);';
        if($menu['route']) {
          $route = $menu['route'][0];
          $params = $menu['route'][1] ?? [];
          $router = route($route, $params);
        }
      @endphp
      <li>
        <a href="{{ $router }}" class="flex py-3 hover:bg-primary hover:text-gray-200 rounded px-6">
          @if(isset($menu['icon']))
            <i class="{{ $menu['icon'] }}"></i> 
          @else
            {!! $menu['svg'] ?? null !!}
          @endif
          {{ $menu['name'] }}
        </a>
      </li>
    @endif
  @endforeach
  <li>
    <a href="javascript:void(0);" onclick="document.getElementById('ladmin-logout').submit()" class="flex py-3 hover:bg-primary hover:text-gray-200 rounded px-6">
      <svg class="w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
      </svg>
      Logout
    </a>
    <form action="{{ route('administrator.logout') }}" id="ladmin-logout" method="post">@csrf</form>
  </li>
</ul>