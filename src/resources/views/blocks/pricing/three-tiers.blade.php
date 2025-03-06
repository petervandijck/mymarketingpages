@props([
    'heading' => 'Pricing',
    'title' => 'Pricing that grows with you',
    'description' => 'Choose an affordable plan that\'s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.',
    'tiers' => [
        [
            'name' => 'Freelancer',
            'price' => 19,
            'description' => 'The essentials to provide your best work for clients.',
            'featured' => false,
            'features' => [
                '5 products',
                'Up to 1,000 subscribers',
                'Basic analytics',
                '48-hour support response time'
            ],
            'cta' => 'Buy plan',
            'ctaUrl' => '#'
        ],
        [
            'name' => 'Startup',
            'price' => 49,
            'description' => 'A plan that scales with your rapidly growing business.',
            'featured' => true,
            'features' => [
                '25 products',
                'Up to 10,000 subscribers',
                'Advanced analytics',
                '24-hour support response time',
                'Marketing automations'
            ],
            'cta' => 'Buy plan',
            'ctaUrl' => '#'
        ],
        [
            'name' => 'Enterprise',
            'price' => 99,
            'description' => 'Dedicated support and infrastructure for your company.',
            'featured' => false,
            'features' => [
                'Unlimited products',
                'Unlimited subscribers',
                'Advanced analytics',
                '1-hour, dedicated support response time',
                'Marketing automations'
            ],
            'cta' => 'Buy plan',
            'ctaUrl' => '#'
        ]
    ]
])

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">{{ $heading }}</h2>
            <p class="mt-2 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl">{{ $title }}</p>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 sm:text-xl/8">{{ $description }}</p>
        <div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($tiers as $index => $tier)
                <div class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200
                @if($index === 1) lg:z-10 lg:rounded-b-none
                @elseif($index === 0) lg:mt-8 lg:rounded-r-none
                @elseif($index === 2) lg:mt-8 lg:rounded-l-none
                @endif xl:p-10">
                    <div>
                        <div class="flex items-center justify-between gap-x-4">
                            <h3 id="tier-{{ strtolower($tier['name']) }}" class="text-lg/8 font-semibold {{ $tier['featured'] ? 'text-indigo-600' : 'text-gray-900' }}">{{ $tier['name'] }}</h3>
                            @if($tier['featured'])
                                <p class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs/5 font-semibold text-indigo-600">Most popular</p>
                            @endif
                        </div>
                        <p class="mt-4 text-sm/6 text-gray-600">{{ $tier['description'] }}</p>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-semibold tracking-tight text-gray-900">${{ $tier['price'] }}</span>
                            <span class="text-sm/6 font-semibold text-gray-600">/month</span>
                        </p>
                        <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
                            @foreach($tier['features'] as $feature)
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ $tier['ctaUrl'] }}" aria-describedby="tier-{{ strtolower($tier['name']) }}" class="mt-8 block rounded-md {{ $tier['featured'] ? 'bg-indigo-600 text-white shadow-xs hover:bg-indigo-500' : 'text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300' }} px-3 py-2 text-center text-sm/6 font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ $tier['cta'] }}</a>
                </div>
            @endforeach
        </div>
        {{ $slot ?? '' }}
    </div>
</div>