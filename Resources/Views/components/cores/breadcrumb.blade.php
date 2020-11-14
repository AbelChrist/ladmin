<ol class="breadcrumbs hidden xl:block md:block lg:block text-xs text-gray-600">
  @foreach ($items as $item)
    @if($loop->last)
      <li>
        {{ $item['name'] }}
      </li>
    @else 
      <li>
        <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
      </li>
      @endif
  @endforeach
</ol>