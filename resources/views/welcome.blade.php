<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Vite and Tailwind CSS Integration -->
    @vite('resources/css/app.css') <!-- Adjust if using Blade directive for Vite -->
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <section class="flex flex-col px-11 pt-8 pb-52 bg-white rounded-lg shadow-lg max-md:px-5 max-md:pb-24"> 
        <!-- Header Section -->
        <header class="text-xl font-semibold text-gray-800 mb-4 text-center">Your Logo</header>
        
        <!-- Main Section -->
        <main class="flex flex-col justify-center items-center px-8 py-20 text-center bg-white rounded-3xl shadow-lg w-[575px] max-md:px-5 max-md:mt-10">
            <div class="w-full max-w-[474px] flex flex-col">
                <!-- Welcome Text -->
                <h1 class="text-6xl font-semibold text-stone-700 mb-8 max-md:text-4xl">Selamat Datang</h1>

                <!-- Log in Form -->
                <form action="/login" method="POST" class="flex flex-col items-center w-full mt-4 text-base font-bold text-white">
                    @csrf <!-- Blade directive for CSRF token -->
                    <div class="w-full flex flex-col gap-4">
                        <button type="submit" class="px-28 py-3 bg-lime-700 rounded-lg shadow w-full min-h-[54px] hover:bg-lime-600">
                            Log in
                        </button>
                    </div>
                </form>

                <!-- Sign up Form -->
                <form action="/signup" method="POST" class="flex flex-col items-center w-full mt-4 text-base font-bold text-white">
                    @csrf <!-- Blade directive for CSRF token -->
                    <div class="w-full flex flex-col gap-4">
                        <button type="submit" class="px-28 py-3 bg-lime-700 rounded-lg shadow w-full min-h-[54px] hover:bg-lime-600">
                            Daftar
                        </button>
                    </div>
                </form>

                <!-- Guest Mode Button -->
                <div class="w-full flex flex-col gap-4 mt-4">
                    <button type="button" class="px-28 py-3 bg-white rounded-lg border border-zinc-400 shadow w-full text-stone-700 hover:bg-gray-100">
                        Mode Tamu
                    </button>
                </div>
            </div>
        </main>
    </section>
</body>
</html>
