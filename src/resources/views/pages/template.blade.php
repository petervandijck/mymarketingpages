@extends('marketing.modules.global.layout')

@section('pagetitle', 'Component Library')

@section('content')

    {{-- CTA Components --}}

    {{-- Simple Centered - Basic --}}
    <x-marketing.blocks.cta.simple-centered />

    {{-- Simple Centered - Custom --}}
    <x-marketing.blocks.cta.simple-centered
            title="Start your journey with us today"
            description="Join thousands of satisfied customers who have transformed their business with our platform."
            primaryButtonText="Sign up now"
            primaryButtonUrl="/register"
            secondaryButtonText="Schedule a demo"
            secondaryButtonUrl="/demo"
    />

    {{-- Simple Centered Dark - Basic --}}
    <x-marketing.blocks.cta.simple-centered-dark />

    {{-- Simple Centered Dark - Custom --}}
    <x-marketing.blocks.cta.simple-centered-dark
            title="Ready to elevate your business?"
            description="Our premium tools are designed to help you scale faster and with less effort."
            primaryButtonText="Get Premium"
            primaryButtonUrl="/premium"
            secondaryButtonText="Compare plans"
            secondaryButtonUrl="/comparison"
    />

    {{-- Simple Stacked - Basic --}}
    <x-marketing.blocks.cta.simple-stacked />

    {{-- Simple Stacked - Custom --}}
    <x-marketing.blocks.cta.simple-stacked
            title="Ready to boost your productivity?"
            primaryButtonText="Start now"
            primaryButtonUrl="/start"
            secondaryButtonText="View features"
            secondaryButtonUrl="/features"
    />

    {{-- FAQ Components --}}

    {{-- Offset - Basic --}}
    <x-marketing.blocks.faq.offset />

    {{-- Offset - Custom --}}
    <x-marketing.blocks.faq.offset
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

    {{-- Footer Components --}}

    {{-- 4 Column - Basic --}}
    <x-marketing.blocks.footer.4-column />

    {{-- 4 Column - Custom --}}
    <x-marketing.blocks.footer.4-column
            logoSrc="/images/logo.svg"
            logoAlt="Acme Inc"
            :sections="[
        [
            'title' => 'Products',
            'links' => [
                ['name' => 'App Suite', 'url' => '/products/app-suite'],
                ['name' => 'Cloud Storage', 'url' => '/products/cloud-storage'],
                ['name' => 'Enterprise', 'url' => '/products/enterprise']
            ]
        ],
        [
            'title' => 'Resources',
            'links' => [
                ['name' => 'Help Center', 'url' => '/help'],
                ['name' => 'API Documentation', 'url' => '/docs/api']
            ]
        ],
        [
            'title' => 'About',
            'links' => [
                ['name' => 'Our Story', 'url' => '/about'],
                ['name' => 'Careers', 'url' => '/careers'],
                ['name' => 'Contact', 'url' => '/contact']
            ]
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['name' => 'Terms', 'url' => '/terms'],
                ['name' => 'Privacy', 'url' => '/privacy']
            ]
        ]
    ]"
    />

    {{-- 4 Column Dark - Basic --}}
    <x-marketing.blocks.footer.4-column-dark />

    {{-- 4 Column Dark - Custom --}}
    <x-marketing.blocks.footer.4-column-dark
            logoSrc="/images/logo-white.svg"
            logoAlt="Acme Inc"
            :sections="[
        [
            'title' => 'Services',
            'links' => [
                ['name' => 'Web Development', 'url' => '/services/web'],
                ['name' => 'Mobile Apps', 'url' => '/services/mobile'],
                ['name' => 'Design', 'url' => '/services/design']
            ]
        ],
        [
            'title' => 'Help',
            'links' => [
                ['name' => 'FAQs', 'url' => '/help/faqs'],
                ['name' => 'Contact Support', 'url' => '/help/contact']
            ]
        ],
        [
            'title' => 'About Us',
            'links' => [
                ['name' => 'Our Mission', 'url' => '/about/mission'],
                ['name' => 'Team', 'url' => '/about/team'],
                ['name' => 'Partners', 'url' => '/about/partners']
            ]
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['name' => 'Terms', 'url' => '/legal/terms'],
                ['name' => 'Privacy', 'url' => '/legal/privacy'],
                ['name' => 'Cookie Policy', 'url' => '/legal/cookies']
            ]
        ]
    ]"
    />

    {{-- Simple - Basic --}}
    <x-marketing.blocks.footer.simple />

    {{-- Simple - Custom --}}
    <x-marketing.blocks.footer.simple
            :menuItems="[
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Features', 'url' => '/features'],
        ['name' => 'Pricing', 'url' => '/pricing'],
        ['name' => 'About', 'url' => '/about'],
        ['name' => 'Contact', 'url' => '/contact']
    ]"
            copyright="© 2025 YourBrand, Inc. All rights reserved."
    />

    {{-- Simple Dark - Basic --}}
    <x-marketing.blocks.footer.simple-dark />

    {{-- Simple Dark - Custom --}}
    <x-marketing.blocks.footer.simple-dark
            :menuItems="[
        ['name' => 'Solutions', 'url' => '/solutions'],
        ['name' => 'Resources', 'url' => '/resources'],
        ['name' => 'Support', 'url' => '/support'],
        ['name' => 'Company', 'url' => '/company']
    ]"
            copyright="© 2025 YourBrand. All rights reserved."
    />

    {{-- Header Components --}}

    {{-- Simple - Basic --}}
    <x-marketing.blocks.header.simple />

    {{-- Simple - Custom --}}
    <x-marketing.blocks.header.simple
            title="Welcome to Our Platform"
            description="The most comprehensive solution for managing your business operations and accelerating growth."
    />

    {{-- Centered - Basic --}}
    <x-marketing.blocks.header.centered />

    {{-- Centered - Custom --}}
    <x-marketing.blocks.header.centered
            title="Customer Success Center"
            description="Everything you need to get the most out of our platform and supercharge your productivity."
    />

    {{-- Centered with Eyebrow - Basic --}}
    <x-marketing.blocks.header.centered-with-eyebrow />

    {{-- Centered with Eyebrow - Custom --}}
    <x-marketing.blocks.header.centered-with-eyebrow
            eyebrow="Introducing our latest feature"
            title="AI-Powered Analytics"
            description="Gain deeper insights into your data with our new machine learning algorithms that automatically identify patterns and opportunities."
    />

    {{-- Hero Components --}}

    {{-- Simple Centered - Basic --}}
    <x-marketing.blocks.hero.simple-centered />

    {{-- Simple Centered - Custom --}}
    <x-marketing.blocks.hero.simple-centered
            announcement="New features just released!"
            announcementUrl="/whats-new"
            title="Simplify your workflow, amplify your results"
            description="Our platform combines powerful tools with an intuitive interface to help you achieve more in less time."
            primaryButtonText="Try it free"
            primaryButtonUrl="/trial"
            secondaryButtonText="See how it works"
            secondaryButtonUrl="/demo"
    />

    {{-- Split with Screenshot - Basic --}}
    <x-marketing.blocks.hero.split-with-screenshot />

    {{-- Split with Screenshot - Custom --}}
    <x-marketing.blocks.hero.split-with-screenshot
            logoSrc="/images/logo.svg"
            logoAlt="YourBrand"
            tagLabel="New"
            tagText="Advanced reporting now available"
            title="Take control of your data"
            description="Our advanced analytics platform helps you transform raw data into actionable insights that drive business growth."
            primaryButtonText="Get started"
            primaryButtonUrl="/signup"
            secondaryButtonText="Watch demo"
            secondaryButtonUrl="/video"
            screenshotSrc="/images/dashboard-screenshot.png"
            screenshotAlt="Analytics Dashboard"
    />

    {{-- Logo Cloud Components --}}

    {{-- Simple - Basic --}}
    <x-marketing.blocks.logo-cloud.simple />

    {{-- Simple - Custom --}}
    <x-marketing.blocks.logo-cloud.simple
            heading="Trusted by innovative companies worldwide"
            :logos="[
        [
            'name' => 'Acme Corp',
            'src' => '/images/logos/acme.svg'
        ],
        [
            'name' => 'GlobalTech',
            'src' => '/images/logos/globaltech.svg'
        ],
        [
            'name' => 'Innovate Inc',
            'src' => '/images/logos/innovate.svg'
        ],
        [
            'name' => 'FutureSoft',
            'src' => '/images/logos/futuresoft.svg'
        ],
        [
            'name' => 'TechGiant',
            'src' => '/images/logos/techgiant.svg'
        ]
    ]"
    />

    {{-- Pricing Components --}}

    {{-- Single Price with Details - Basic --}}
    <x-marketing.blocks.pricing.single-price-with-details />

    {{-- Single Price with Details - Custom --}}
    <x-marketing.blocks.pricing.single-price-with-details
            title="Straightforward pricing for everyone"
            description="No hidden fees, no complicated tiers. Just one simple plan that grows with your needs."
            planTitle="Pro Membership"
            planDescription="Everything you need to take your business to the next level with premium features and priority support."
            price="99"
            currency="USD"
            paymentText="Billed monthly or annually"
            ctaText="Start your trial"
            ctaUrl="/trial"
            footerText="30-day money-back guarantee, no questions asked"
            :features="[
        'Unlimited projects',
        'Advanced analytics',
        'Priority support',
        'Custom integrations',
        'Team collaboration'
    ]"
    />

    {{-- Two Tiers - Basic --}}
    <x-marketing.blocks.pricing.two-tiers />

    {{-- Two Tiers - Custom --}}
    <x-marketing.blocks.pricing.two-tiers
            heading="Plans"
            title="Find the perfect plan for your needs"
            description="Whether you're just starting out or scaling up, we have a plan that's right for you."
            :tiers="[
        [
            'name' => 'Basic',
            'price' => 19,
            'period' => 'month',
            'description' => 'Essential features for individuals and small teams.',
            'features' => [
                '10 projects',
                'Basic analytics',
                'Email support',
                'Standard integrations'
            ],
            'cta' => 'Get Basic',
            'ctaUrl' => '/basic',
            'primary' => false
        ],
        [
            'name' => 'Pro',
            'price' => 59,
            'period' => 'month',
            'description' => 'Advanced features for growing businesses.',
            'features' => [
                'Unlimited projects',
                'Advanced analytics',
                'Priority support',
                'Custom integrations',
                'Team collaboration',
                'White labeling'
            ],
            'cta' => 'Get Pro',
            'ctaUrl' => '/pro',
            'primary' => true
        ]
    ]"
    />

    {{-- Three Tiers - Basic --}}
    <x-marketing.blocks.pricing.three-tiers />

    {{-- Three Tiers - Custom --}}
    <x-marketing.blocks.pricing.three-tiers
            heading="Pricing Options"
            title="Choose the perfect plan"
            description="Whether you're an individual creator or a large organization, we have a plan designed for your specific needs."
            :tiers="[
        [
            'name' => 'Starter',
            'price' => 9,
            'description' => 'Perfect for individuals just getting started.',
            'featured' => false,
            'features' => [
                '3 projects',
                'Basic analytics',
                'Email support',
                '72-hour response time'
            ],
            'cta' => 'Start free trial',
            'ctaUrl' => '/trial/starter'
        ],
        [
            'name' => 'Professional',
            'price' => 29,
            'description' => 'Everything a growing business needs.',
            'featured' => true,
            'features' => [
                '10 projects',
                'Advanced analytics',
                'Priority email support',
                '24-hour response time',
                'Team collaboration'
            ],
            'cta' => 'Start free trial',
            'ctaUrl' => '/trial/professional'
        ],
        [
            'name' => 'Enterprise',
            'price' => 79,
            'description' => 'Advanced features for large organizations.',
            'featured' => false,
            'features' => [
                'Unlimited projects',
                'Custom analytics',
                'Dedicated support',
                '4-hour response time',
                'Advanced security',
                'Custom integrations'
            ],
            'cta' => 'Contact sales',
            'ctaUrl' => '/contact/sales'
        ]
    ]"
    />

    {{-- Stats Components --}}

    {{-- Simple - Basic --}}
    <x-marketing.blocks.stats.simple />

    {{-- Simple - Custom --}}
    <x-marketing.blocks.stats.simple
            :stats="[
        [
            'value' => '99.9%',
            'label' => 'Uptime guarantee'
        ],
        [
            'value' => '24/7',
            'label' => 'Customer support'
        ],
        [
            'value' => '100,000+',
            'label' => 'Active users'
        ],
        [
            'value' => '200+',
            'label' => 'Integrations'
        ]
    ]"
    />

    {{-- Team Components --}}

    {{-- Grid - Basic --}}
    <x-marketing.blocks.team.grid />

    {{-- Grid - Custom --}}
    <x-marketing.blocks.team.grid
            title="Meet our talented team"
            description="The brilliant minds behind our success, working together to deliver exceptional results for our clients."
            :team="[
        [
            'name' => 'Sarah Johnson',
            'position' => 'CEO & Founder',
            'image' => '/images/team/sarah.jpg'
        ],
        [
            'name' => 'David Lee',
            'position' => 'CTO',
            'image' => '/images/team/david.jpg'
        ],
        [
            'name' => 'Michael Rodriguez',
            'position' => 'Head of Design',
            'image' => '/images/team/michael.jpg'
        ],
        [
            'name' => 'Emily Chen',
            'position' => 'Lead Developer',
            'image' => '/images/team/emily.jpg'
        ],
        [
            'name' => 'James Wilson',
            'position' => 'Marketing Director',
            'image' => '/images/team/james.jpg'
        ],
        [
            'name' => 'Sophia Kim',
            'position' => 'Customer Success Manager',
            'image' => '/images/team/sophia.jpg'
        ]
    ]"
    />

    {{-- Small Images - Basic --}}
    <x-marketing.blocks.team.small-images />

    {{-- Small Images - Custom --}}
    <x-marketing.blocks.team.small-images
            title="Our Leadership"
            description="A diverse group of experienced professionals steering our company toward innovation and excellence."
            :team="[
        [
            'name' => 'Alex Morgan',
            'position' => 'Chief Executive Officer',
            'image' => '/images/leadership/alex.jpg'
        ],
        [
            'name' => 'Taylor Reed',
            'position' => 'Chief Technology Officer',
            'image' => '/images/leadership/taylor.jpg'
        ],
        [
            'name' => 'Jordan Smith',
            'position' => 'Chief Financial Officer',
            'image' => '/images/leadership/jordan.jpg'
        ],
        [
            'name' => 'Casey Zhang',
            'position' => 'Chief Marketing Officer',
            'image' => '/images/leadership/casey.jpg'
        ]
    ]"
    />

    {{-- Testimonial Components --}}

    {{-- With Star Rating - Basic --}}
    <x-marketing.blocks.testimonial.with-star-rating />

    {{-- With Star Rating - Custom --}}
    <x-marketing.blocks.testimonial.with-star-rating
            quote="This platform has completely transformed how we operate. The intuitive interface and powerful features have helped us increase productivity by over 40%. The customer support team is also incredibly responsive and helpful."
            name="Jennifer Martinez"
            position="Director of Operations, TechCorp"
            image="/images/testimonials/jennifer.jpg"
            stars="5"
    />

    {{-- Off-White Grid - Basic --}}
    <x-marketing.blocks.testimonial.off-white-grid />

    {{-- Off-White Grid - Custom --}}
    <x-marketing.blocks.testimonial.off-white-grid
            title="Client Feedback"
            subtitle="What our clients are saying about us"
            :testimonials="[
        [
            'quote' => 'Working with this team has been an absolute pleasure. They delivered exceptional results ahead of schedule.',
            'name' => 'Robert Johnson',
            'handle' => '@robertj',
            'image' => '/images/testimonials/robert.jpg'
        ],
        [
            'quote' => 'The attention to detail and quality of work exceeded our expectations. Highly recommended!',
            'name' => 'Amanda Chen',
            'handle' => '@amandac',
            'image' => '/images/testimonials/amanda.jpg'
        ],
        [
            'quote' => 'Their innovative approach to solving our complex challenges saved us both time and resources.',
            'name' => 'Marcus Williams',
            'handle' => '@marcusw',
            'image' => '/images/testimonials/marcus.jpg'
        ],
        [
            'quote' => 'An outstanding partner that truly understands our business needs and delivers consistently.',
            'name' => 'Elena Rodriguez',
            'handle' => '@elenarodriguez',
            'image' => '/images/testimonials/elena.jpg'
        ],
        [
            'quote' => 'The platform's analytics capabilities have given us insights we never had before.',
            'name' => 'Thomas Lee',
            'handle' => '@thomaslee',
            'image' => '/images/testimonials/thomas.jpg'
        ],
        [
            'quote' => 'Customer support is responsive, knowledgeable, and always goes the extra mile.',
            'name' => 'Sophia Kim',
            'handle' => '@sophiakim',
            'image' => '/images/testimonials/sophia.jpg'
        ]
    ]"
    />

@endsection