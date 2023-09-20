@props([
    'id',
    'level'
])
<li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50 flex flex-row">
    <div class="w-1/3">{{ $slot }}</div>
    <div class="w-2/3">@switch($level)
            @case('A1')
                {{ __('language.Beginner') }}
                @break
            @case('A2')
                {{ __('language.Basic') }}
                @break
            @case('B1')
                {{ __('language.Advanced') }}
                @break
            @case('B2')
                {{ __('language.Independent') }}
                @break
            @case('C1')
                {{ __('language.Expert') }}
                @break
            @case('C2')
                {{ __('language.AlmostNative') }}
                @break
            @case('native')
                {{ __('language.Native') }}
                @break
        @endswitch
    </div>
    <div class="flex flex-row">
        <div class="flex items-center justify-center w-6"><a href="{{ route('language.edit', ['language' => $id]) }}" class=""><i class="fa-solid fa-pen-to-square"></i></a></div>
        <div class="flex items-center justify-center w-6"><a href="{{ route('language.destroy', ['language' => $id]) }}"><i class="fa-solid fa-trash"></i></a></div>
    </div>
</li>
