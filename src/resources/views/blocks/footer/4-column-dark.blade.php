@props([
    'logoSrc' => 'https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500',
    'logoAlt' => 'Company name',
    'logoHeight' => 'h-9',
    'sections' => [
        [
            'title' => 'Solutions',
            'links' => [
                ['name' => 'Marketing', 'url' => '#'],
                ['name' => 'Analytics', 'url' => '#'],
                ['name' => 'Automation', 'url' => '#'],
                ['name' => 'Commerce', 'url' => '#'],
                ['name' => 'Insights', 'url' => '#'],
            ]
        ],
        [
            'title' => 'Support',
            'links' => [
                ['name' => 'Submit ticket', 'url' => '#'],
                ['name' => 'Documentation', 'url' => '#'],
                ['name' => 'Guides', 'url' => '#'],
            ]
        ],
        [
            'title' => 'Company',
            'links' => [
                ['name' => 'About', 'url' => '#'],
                ['name' => 'Blog', 'url' => '#'],
                ['name' => 'Jobs', 'url' => '#'],
                ['name' => 'Press', 'url' => '#'],
            ]
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['name' => 'Terms of service', 'url' => '#'],
                ['name' => 'Privacy policy', 'url' => '#'],
                ['name' => 'License', 'url' => '#'],
            ]
        ],
    ]
])

<footer class="bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <img class="{{ $logoHeight }}" src="{{ $logoSrc }}" alt="{{ $logoAlt }}">
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    @if(isset($sections[0]))
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white">{{ $sections[0]['title'] }}</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                @foreach($sections[0]['links'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}" class="text-sm/6 text-gray-400 hover:text-white">{{ $link['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($sections[1]))
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white">{{ $sections[1]['title'] }}</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                @foreach($sections[1]['links'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}" class="text-sm/6 text-gray-400 hover:text-white">{{ $link['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="md:grid md:grid-cols-2 md:gap-8">
                    @if(isset($sections[2]))
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white">{{ $sections[2]['title'] }}</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                @foreach($sections[2]['links'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}" class="text-sm/6 text-gray-400 hover:text-white">{{ $link['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($sections[3]))
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white">{{ $sections[3]['title'] }}</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                @foreach($sections[3]['links'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}" class="text-sm/6 text-gray-400 hover:text-white">{{ $link['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        {{ $slot ?? '' }}
    </div>
</footer>