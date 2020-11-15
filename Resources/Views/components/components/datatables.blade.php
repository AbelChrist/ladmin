<x-ladmin-card>
  <x-slot name="flat">
    <div class="table-responsive relative">
      <div class="top-button absolute top-0 mt-6 ml-3 z-40">
        {!! $options['topButton'] ?? null !!}
      </div>
      <table class="table ladmin-datatables table-striped" data-options='{!! json_encode($options) !!}'>
        <thead>
          <tr>
            @foreach ($fields as $field)
              <th class="{{ $field['class'] ?? null }}">{{ $field['name'] }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </x-slot>
</x-ladmin-card>
