<div {{ $attributes->merge(['class' => 'bg-white rounded shadow ' . $class]) }}>
  @if(isset($header))
    <div class="p-6">
      {{ $header }}
    </div>
  @endif

  @if(empty($flat))
  <div class="p-6">
    @if($title)
      <h4 class="text-lg">{{ $title }}</h4>
    @endif
    {{ $slot }}
  </div>
  @endif

  @if(isset($flat))
  <div>
    {{ $flat }}
  </div>
  @endif
  @if(isset($footer))
    <div class="p-6">
      {{ $footer }}
    </div>
  @endif
</div>