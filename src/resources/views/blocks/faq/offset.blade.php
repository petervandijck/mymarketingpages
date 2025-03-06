@props([
    'title' => 'Frequently asked questions',
    'description' => "Can't find the answer you're looking for? Reach out to our <a href=\"#\" class=\"font-semibold text-indigo-600 hover:text-indigo-500\">customer support</a> team.",
    'supportLinkText' => 'customer support',
    'supportLinkUrl' => '#',
    'faqs' => [
        [
            'question' => 'How do you make holy water?',
            'answer' => 'You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.'
        ]
    ]
])

<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-5">
                <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">{{ $title }}</h2>
                <p class="mt-4 text-base/7 text-pretty text-gray-600">
                    @if(strpos($description, 'customer support') !== false)
                        {!! str_replace('customer support', "<a href=\"{$supportLinkUrl}\" class=\"font-semibold text-indigo-600 hover:text-indigo-500\">{$supportLinkText}</a>", $description) !!}
                    @else
                        {!! $description !!}
                    @endif
                </p>
            </div>
            <div class="mt-10 lg:col-span-7 lg:mt-0">
                <dl class="space-y-10">
                    @foreach($faqs as $faq)
                        <div>
                            <dt class="text-base/7 font-semibold text-gray-900">{{ $faq['question'] }}</dt>
                            <dd class="mt-2 text-base/7 text-gray-600">{{ $faq['answer'] }}</dd>
                        </div>
                    @endforeach
                    {{ $slot ?? '' }}
                </dl>
            </div>
        </div>
    </div>
</div>