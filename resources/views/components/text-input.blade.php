@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-hs-blue-500 focus:ring-hs-blue-500 rounded-md shadow-sm']) !!}>
