<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('language.Languages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <ul class="w-1/2">
                    @foreach ($languages as $language)
                            @switch($language->language)
                                @case('DE')
                                    <x-language-element :id="$language->id" :level="$language->level">{{ __('language.German') }}</x-language-element>
                                    @break
                                @case('FR')
                                    <x-language-element :id="$language->id" :level="$language->level">{{ __('language.French') }}</x-language-element>
                                    @break
                                @case('IT')
                                    <x-language-element :id="$language->id" :level="$language->level">{{ __('language.Italian') }}</x-language-element>
                                    @break
                                @case('EN')
                                    <x-language-element :id="$language->id" :level="$language->level">{{ __('language.English') }}</x-language-element>
                                    @break

                            @endswitch
                    @endforeach
                    </ul>
                    <div class="w-1/2">
                        <x-primary-link-button route="{{ route('language.create') }}">{{ __('Create') }}</x-primary-link-button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
