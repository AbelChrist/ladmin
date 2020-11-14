<li class="{{ request()->is( config('ladmin.prefix', 'administrator') . "/" . $menu['isActive']) ? 'active' : null }}" id="{{ $menu['id'] ?? null }}">
  @php 
    $router = 'javascript:void(0);';
    if($menu['route']) {
      $route = $menu['route'][0];
      $params = $menu['route'][1] ?? [];
      $router = route($route, $params);
    }
  @endphp
  <a href="{{ $router }}" class="py-2 flex flex-auto items-center hover:text-gray-800">
    @if(isset($menu['icon']))
      <i class="{{ $menu['icon'] }}"></i> 
    @else
      {!! $menu['svg'] ?? null !!}
    @endif
    <span class="label">{{ $menu['name'] }}</span>
    <div class="flex-grow"></div>
  </a>

  @if(isset($menu['submenus']))
    <ul>
      {!! $viewMenu($menu['submenus']) !!}
    </ul>
  @endif
</li>

