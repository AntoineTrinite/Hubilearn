@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-size:0.7rem; color:green;']) }}>
        {{ $status }}
    </div>
@endif
