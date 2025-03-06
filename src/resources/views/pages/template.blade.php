<x-marketing.cta.simple
        title="Try our premium plan today"
        description="Get access to all features and priority support with our premium subscription."
        primaryButtonText="Upgrade now"
        primaryButtonUrl="/pricing"
/>


<x-marketing.cta.dark
        title="Elevate your workflow"
        description="Join thousands of teams who have already transformed their productivity with our platform."
        primaryButtonText="Start free trial"
        primaryButtonUrl="/register"
/>

<x-marketing.cta.dark :showSecondaryButton="false" />

<x-marketing.cta.simple-left
        title="Start your journey with us today"
        primaryButtonText="Join now"
        primaryButtonUrl="/signup"
/>

<x-marketing.cta.simple-left />

{{-- Basic usage with default values --}}
<x-marketing.faq.simple />

{{-- Advanced usage with custom values --}}
<x-marketing.faq.simple
        title="Common Questions"
        description="Have more questions? Contact our"
        supportLinkText="help desk"
        supportLinkUrl="/help"
        :faqs="[
        [
            'question' => 'What payment methods do you accept?',
            'answer' => 'We accept all major credit cards, PayPal, and bank transfers. All payments are securely processed.'
        ],
        [
            'question' => 'How long does shipping take?',
            'answer' => 'Domestic orders typically arrive within 3-5 business days. International shipping may take 7-14 business days depending on customs.'
        ],
        [
            'question' => 'What is your refund policy?',
            'answer' => 'We offer a 30-day money-back guarantee on all our products. If you\'re not satisfied, contact us for a full refund.'
        ]
    ]"
/>



{{-- Basic usage with default values --}}
<x-marketing.footer.simple />


{{-- Customized usage with specific sections and logo --}}
<x-marketing.footer.simple
        logoSrc="/images/logo.svg"
        logoAlt="Acme Inc"
        :sections="[
        [
            'title' => 'Products',
            'links' => [
                ['name' => 'App Suite', 'url' => '/products/app-suite'],
                ['name' => 'Cloud Storage', 'url' => '/products/cloud-storage'],
                ['name' => 'Enterprise', 'url' => '/products/enterprise'],
            ]
        ],
        [
            'title' => 'Resources',
            'links' => [
                ['name' => 'Help Center', 'url' => '/help'],
                ['name' => 'API Documentation', 'url' => '/docs/api'],
            ]
        ],
        [
            'title' => 'About',
            'links' => [
                ['name' => 'Our Story', 'url' => '/about'],
                ['name' => 'Careers', 'url' => '/careers'],
                ['name' => 'Contact', 'url' => '/contact'],
            ]
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['name' => 'Terms', 'url' => '/terms'],
                ['name' => 'Privacy', 'url' => '/privacy'],
            ]
        ],
    ]"
/>


{{-- Basic usage with default values --}}
<x-marketing.footer.dark />


{{-- Customized usage with specific sections and logo --}}
<x-marketing.footer.dark
        logoSrc="/images/logo-white.svg"
        logoAlt="Acme Inc"
        :sections="[
        [
            'title' => 'Services',
            'links' => [
                ['name' => 'Web Development', 'url' => '/services/web'],
                ['name' => 'Mobile Apps', 'url' => '/services/mobile'],
                ['name' => 'Design', 'url' => '/services/design'],
            ]
        ],
        [
            'title' => 'Help',
            'links' => [
                ['name' => 'FAQs', 'url' => '/help/faqs'],
                ['name' => 'Contact Support', 'url' => '/help/contact'],
            ]
        ],
        [
            'title' => 'About Us',
            'links' => [
                ['name' => 'Our Mission', 'url' => '/about/mission'],
                ['name' => 'Team', 'url' => '/about/team'],
                ['name' => 'Partners', 'url' => '/about/partners'],
            ]
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['name' => 'Terms', 'url' => '/legal/terms'],
                ['name' => 'Privacy', 'url' => '/legal/privacy'],
                ['name' => 'Cookie Policy', 'url' => '/legal/cookies'],
            ]
        ],
    ]"
/>



