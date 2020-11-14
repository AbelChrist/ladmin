@if(config('ladmin.notification', true))
  <li class="ladmin-dropdown pt-2">
                
    <a class="relative" href="#">
        
        @if(count($notifications) > 0)
          <div class="rounded-full bg-red-600 w-3 h-3 absolute top-0 right-0 mr-3"></div>
        @endif
        <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
    </a>

    <ul class="rounded w-64 shadow mt-4">
        <li class="p-3 flex items-center justify-between">
          <div class="font-light">Notifications</div>
          <div>
            <a href="" class="text-xs hover:text-primary font-light">Mark all as read</a>
          </div>
        </li>
        <li class="h-56 overflow-y-auto bg-gray-200">
          
          <ul>
            @forelse ($notifications as $item)
              @if(auth()->guard(config('ladmin.auth.guard', 'web'))->user()->can($item->gates))
              <li class="block p-1">
                <a href="{{ route('administrator.notification.update', [$item->id]) }}" class="flex justify-between p-3 hover:bg-primary hover:text-white rounded bg-white">
                  @if(!is_null($item->image_link))
                    <div class="mr-3">
                      <img src="{{ $item->image_link }}" class="rounded-full w-10">
                    </div>
                  @endif
                  <div class="flex-grow substr">
                    <strong class="font-bold">{{ $item->title }}</strong>
                    <p class="text-sm">{!! $item->description !!}</p>
                    <p class="text-xs">{{ $item->created_at->diffForHumans() }}</p>
                  </div>
                </a>
              </li>
              @endif
            @empty
              <li class="block p-1 text-center">
                <svg class="w-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                No Notification
              </li>
            @endforelse
          </ul>

        </li>
        <li class="text-center p-3">
          <a href="{{ route('administrator.notification.index') }}" class="font-light hover:text-primary text-sm">
            View All
          </a>
        </li>
    </ul>
  </li>
@endif