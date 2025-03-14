<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Add this to your layout file's head section -->
        <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white font-sans">
    <div class="container mx-auto px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>
            <div class="flex gap-4 font-bold space-x-4">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
            <div class="space-x-6 font-bold flex items-center">
                <a href="/jobs/create">Post a Job</a>

                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white/50 hover:text-white">Logout</button>
                </form>
            </div>
            @endauth

            @guest
            <div class="space-x-4 font-bold">
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            </div>
            @endguest

        </nav>
        <main class="mt-10 max-w-screen-lg mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
