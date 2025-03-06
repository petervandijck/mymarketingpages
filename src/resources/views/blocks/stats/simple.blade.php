@props([
    'stats' => [
        [
            'value' => '44 million',
            'label' => 'Transactions every 24 hours'
        ],
        [
            'value' => '$119 trillion',
            'label' => 'Assets under holding'
        ],
        [
            'value' => '46,000',
            'label' => 'New users annually'
        ]
    ]
])

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            @foreach($stats as $stat)
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base/7 text-gray-600">{{ $stat['label'] }}</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $stat['value'] }}</dd>
                </div>
            @endforeach
        </dl>
        {{ $slot ?? '' }}
    </div>
</div>