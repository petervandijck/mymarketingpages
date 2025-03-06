@props([
    'heading' => 'Trusted by the world\'s most innovative teams',
    'logos' => [
        [
            'name' => 'Transistor',
            'src' => 'https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg',
            'width' => 158,
            'height' => 48,
            'colSpan' => 'col-span-2 max-h-12 w-full object-contain lg:col-span-1'
        ],
        [
            'name' => 'Reform',
            'src' => 'https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-gray-900.svg',
            'width' => 158,
            'height' => 48,
            'colSpan' => 'col-span-2 max-h-12 w-full object-contain lg:col-span-1'
        ],
        [
            'name' => 'Tuple',
            'src' => 'https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-gray-900.svg',
            'width' => 158,
            'height' => 48,
            'colSpan' => 'col-span-2 max-h-12 w-full object-contain lg:col-span-1'
        ],
        [
            'name' => 'SavvyCal',
            'src' => 'https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-gray-900.svg',
            'width' => 158,
            'height' => 48,
            'colSpan' => 'col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1'
        ],
        [
            'name' => 'Statamic',
            'src' => 'https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-gray-900.svg',
            'width' => 158,
            'height' => 48,
            'colSpan' => 'col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1'
        ]
    ]
])

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-lg/8 font-semibold text-gray-900">{{ $heading }}</h2>
        <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            @foreach($logos as $logo)
                <img class="{{ $logo['colSpan'] }}" src="{{ $logo['src'] }}" alt="{{ $logo['name'] }}" width="{{ $logo['width'] }}" height="{{ $logo['height'] }}">
            @endforeach
        </div>
        {{ $slot ?? '' }}
    </div>
</div>