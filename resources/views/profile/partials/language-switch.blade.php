<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Change Language') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Switch your backend language.') }}
        </p>
    </header>

    <div class="max-w-xl mt-6 space-y-6">
		<?php
		if ( request()->session()->get( 'locale' ) == 'de' ) { ?>
        <a href="{{ url('locale/de') }}"
           class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">{{ __('language-switch.German') }}</a>
        <a href="{{ url('locale/en') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">{{ __('language-switch.English') }}</a>
        <?php
		} else { ?>
        <a href="{{ url('locale/de') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">{{ __('language-switch.German') }}</a>
        <a href="{{ url('locale/en') }}"
           class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">{{ __('language-switch.English') }}</a>
        <?php } ?>


    </div>
</section>
