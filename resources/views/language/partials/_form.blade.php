
<div>
    <x-input-label for="language" :value="__('language.Languages')"/>
    <select id="language" class="border-gray-300 focus:border-hs-blue-500 focus:ring-hs-blue-500 rounded-md shadow-sm mt-1 block w-full" name="language">
        <option @selected($language->language == '')>{{ __('language.ChooseALanguage') }}</option>
        <option value="DE" @selected($language->language == 'DE')>{{ __('language.German') }}</option>
        <option value="FR" @selected($language->language == 'FR')>{{ __('language.French') }}</option>
        <option value="IT" @selected($language->language == 'IT')>{{ __('language.Italian') }}</option>
        <option value="EN" @selected($language->language == 'EN')>{{ __('language.English') }}</option>
    </select>
</div>
<div>
    <x-input-label for="level" :value="__('language.Level')"/>
    <select id="level" class="border-gray-300 focus:border-hs-blue-500 focus:ring-hs-blue-500 rounded-md shadow-sm mt-1 block w-full" name="level">
        <option @selected($language->level == '')>{{ __('language.ChooseALevel') }}</option>
        <option value="A1" @selected($language->level == 'A1')>{{ __('language.Beginner') }}</option>
        <option value="A2" @selected($language->level == 'A2')>{{ __('language.Basic') }}</option>
        <option value="B1" @selected($language->level == 'B1')>{{ __('language.Advanced') }}</option>
        <option value="B2" @selected($language->level == 'B2')>{{ __('language.Independent') }}</option>
        <option value="C1" @selected($language->level == 'C1')>{{ __('language.Expert') }}</option>
        <option value="C2" @selected($language->level == 'C2')>{{ __('language.AlmostNative') }}</option>
        <option value="native" @selected($language->level == 'native')>{{ __('language.Native') }}</option>
    </select>
</div>
<div>
    <x-input-label for="sort" :value="__('language.Sort')"/>
    <x-text-input id="sort" name="sort" type="text" value="{{$language->sort}}" class="mt-1 block w-full"/>
    <x-input-error class="mt-2" :messages="$errors->get('sort')"/>
</div>
