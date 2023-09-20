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
        <div class="flex items-center justify-center w-6"><a href="{{ route('language.destroy', ['language' => $id]) }}" x-data=""
                                                             x-on:click.prevent="$dispatch('open-modal', 'confirm-language-deletion-{{$id}}')"><i class="fa-solid fa-trash"></i></a></div>

    </div>
</li>
<x-modal name="confirm-language-deletion-{{$id}}"  focusable>
    <form method="post" action="{{ route('language.destroy', ['language' => $id]) }}" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('language.are_you_sure') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('language.click_once_for_delete') }}
        </p>


        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('language.Delete_Language') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
