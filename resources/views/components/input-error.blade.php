@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'text-sm text-red-900 ']) }}>
        @foreach ((array) $messages as $message)
            <small>{{ $message }}</small>
        @endforeach
    </div>
@endif