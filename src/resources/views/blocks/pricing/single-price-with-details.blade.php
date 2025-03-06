@props([
    'title' => 'Simple no-tricks pricing',
    'description' => 'Distinctio et nulla eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.',
    'planTitle' => 'Lifetime membership',
    'planDescription' => 'Lorem ipsum dolor sit amet consect etur adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.',
    'price' => 349,
    'currency' => 'USD',
    'paymentText' => 'Pay once, own it forever',
    'ctaText' => 'Get access',
    'ctaUrl' => '#',
    'footerText' => 'Invoices and receipts available for easy company reimbursement',
    'features' => [
        'Private forum access',
        'Member resources',
        'Entry to annual conference',
        'Official member t-shirt'
    ]
])

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl sm:text-center">
            <h2 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl sm:text-balance">{{ $title }}</h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">{{ $description }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
            <div class="p-8 sm:p-10 lg:flex-auto">
                <h3 class="text-3xl font-semibold tracking-tight text-gray-900">{{ $planTitle }}</h3>
                <p class="mt-6 text-base/7 text-gray-600">{{ $planDescription }}</p>
                <div class="mt-10 flex items-center gap-x-4">
                    <h4 class="flex-none text-sm/6 font-semibold text-indigo-600">What's included</h4>
                    <div class="h-px flex-auto bg-gray-100"></div>
                </div>
                <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm/6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                    @foreach($features as $feature)
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:shrink-0">
                <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-gray-900/5 ring-inset lg:flex lg:flex-col lg:justify-center lg:py-16">
                    <div class="mx-auto max-w-xs px-8">
                        <p class="text-base font-semibold text-gray-600">{{ $paymentText }}</p>
                        <p class="mt-6 flex items-baseline justify-center gap-x-2">
                            <span class="text-5xl font-semibold tracking-tight text-gray-900">${{ $price }}</span>
                            <span class="text-sm/6 font-semibold tracking-wide text-gray-600">{{ $currency }}</span>
                        </p>
                        <a href="{{ $ctaUrl }}" class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ $ctaText }}</a>
                        <p class="mt-6 text-xs/5 text-gray-600">{{ $footerText }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{ $slot ?? '' }}
    </div>
</div>