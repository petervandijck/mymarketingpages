<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Home</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        header {
            background-color: #f8f9fa;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .hero {
            text-align: center;
            padding: 4rem 2rem;
            background-color: #e9ecef;
            margin-bottom: 2rem;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        footer {
            background-color: #f8f9fa;
            padding: 2rem 0;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h2>Your Company</h2>
    </div>
</header>

<div class="hero">
    <div class="container">
        <h1>Welcome to Our Marketing Page</h1>
        <p>This is a simple marketing page template you can customize for your needs.</p>
    </div>
</div>

<main class="container">
    <h2>Our Services</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget ultricies nisl nisl eget nisl.</p>
</main>

<footer>
    @include('marketing.footer')
</footer>
</body>
</html>