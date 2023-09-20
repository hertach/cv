@props([
    'route'
])

<a href="{{ $route }}" class="text-white bg-hs-blue-700 hover:bg-hs-blue-800 focus:ring-4 focus:ring-hs-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-hs-blue-600 dark:hover:bg-hs-blue-700 focus:outline-none dark:focus:ring-hs-blue-800">{{$slot}}</a>
