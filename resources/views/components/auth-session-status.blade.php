@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'list-unstyled']) }}>
      <li class="text-success">{{ $status }}</li>
    </div>
@endif
