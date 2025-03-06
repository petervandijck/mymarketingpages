@props([
    'heading' => 'Pricing',
    'title' => 'Choose the right plan for you',
    'description' => 'Choose an affordable plan that\'s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.',
    'tiers' => [
        [
            'name' => 'Personal',
            'price' => 29,
            'period' => 'month',
            'description' => 'The perfect plan if you\'re just getting started with our product.',
            'features' => [
                '25 products',
                'Up to 10,000 subscribers',
                'Audience segmentation',
                'Advanced analytics',
                'Email support',
                'Marketing automations'
            ],
            'cta' => 'Get started today',
            'ctaUrl' => '#',
            'primary' => true
        ],
        [
            'name' => 'Team',
            'price' => 99,
            'period' => 'month',
            'description' => 'A plan that scales with your rapidly growing business.',
            'features' => [
                'Priority support',
                'Single sign-on',
                'Enterprise integrations',
                'Custom reporting tools',
            ],
            'cta' => 'Get started today',
            'ctaUrl' => '#',
            'primary' => false
        ]
    ]
])

<div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
        <div class="mx-auto aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-4xl text-center">
        <h2 class="text-base/7 font-semibold text-indigo-600">{{ $heading }}</h2>
        <p class="mt-2 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl">{{ $title }}</p>
    </div>
    <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 sm:text-xl/8">{{ $description }}</p>
    <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
        @foreach($tiers as $index => $tier)
            <div class="relative {{ $index === 0 ? 'rounded-3xl bg-white p-8 ring-1 shadow-2xl ring-gray-900/10 sm:p-10' : 'rounded-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-t-none sm:p-10 lg:mx-0 lg:rounded-tr-3xl lg:rounded-bl-none' }}">
                <h3 id="tier-{{ strtolower($tier['name']) }}" class="text-base/7 font-semibold text-indigo-600">{{ $tier['name'] }}</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                    <span class="text-5xl font-semibold tracking-tight text-gray-900">${{ $tier['price'] }}</span>
                    <span class="text-base text-gray-500">/{{ $tier['period'] }}</span>
                </p>
                <p class="mt-6 text-base/7 text-gray-600">{{ $tier['description'] }}</p>
                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                    @foreach($tier['features'] as $feature)
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ $tier['ctaUrl'] }}" aria-describedby="tier-{{ strtolower($tier['name']) }}"
                   class="mt-8 block rounded-md {{ $tier['primary']
                    ? 'bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'
                    : 'px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'
                }} sm:mt-10">
                    {{ $tier['cta'] }}
                </a>
            </div>
        @endforeach
    </div>
    {{ $slot ?? '' }}
</div>