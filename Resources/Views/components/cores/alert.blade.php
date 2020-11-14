@if ($errors->any())
  <div class="bg-danger bg-opacity-75 text-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

@foreach ($status as $state)
    @if(session()->has($state))
      <div class="bg-{{ $state }} text-{{ $state }} bg-opacity-75">
        <ul>
          @foreach (session()->get($state) as $item)
            <li>{!! $item !!}</li>
          @endforeach
        </ul>
      </div>
    @endif
@endforeach
