<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('personalinformation.Personal_Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <form method="post" action="{{ route('personalinformation.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="nationality" :value="__('personalinformation.Nationality')"/>
                            <x-text-input id="nationality" name="nationality" type="text" class="mt-1 block w-full"
                                          :value="old('nationality', $personal_information->nationality)" autofocus
                                          autocomplete="nationality"/>
                            <x-input-error class="mt-2" :messages="$errors->get('nationality')"/>
                        </div>

                        <div>
                            <x-input-label for="hometown" :value="__('personalinformation.Hometown')"/>
                            <x-text-input id="hometown" name="hometown" type="text" class="mt-1 block w-full"
                                          :value="old('hometown', $personal_information->hometown)" autofocus
                                          autocomplete="hometown"/>
                            <x-input-error class="mt-2" :messages="$errors->get('hometown')"/>
                        </div>

                        <div>
                            <x-input-label for="civil_status" :value="__('personalinformation.CivilStatus')"/>
                            <x-text-input id="civil_status" name="civil_status" type="text" class="mt-1 block w-full"
                                          :value="old('civil_status', $personal_information->civil_status)" autofocus
                                          autocomplete="civil_status"/>
                            <x-input-error class="mt-2" :messages="$errors->get('civil_status')"/>
                        </div>

                        <div>
                            <x-input-label for="children" :value="__('personalinformation.Children')"/>
                            <x-text-input id="children" name="children" type="number" min="0" max="5"
                                          class="mt-1 block w-full"
                                          :value="old('children', $personal_information->children)" autofocus
                                          autocomplete="children"/>
                            <x-input-error class="mt-2" :messages="$errors->get('children')"/>
                        </div>

                        <div>
                            <x-input-label for="birth_date" :value="__('personalinformation.BirthDate')"/>
                            <x-text-input id="birth_date" name="birth_date" type="date" min="1970-01-01"
                                          class="mt-1 block w-full"
                                          :value="old('birth_date', $personal_information->birth_date)" autofocus
                                          autocomplete="birth_date"/>
                            <x-input-error class="mt-2" :messages="$errors->get('birth_date')"/>
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'personalinformation-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
