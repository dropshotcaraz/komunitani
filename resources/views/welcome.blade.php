<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" href="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d" type="image/x-icon">
    <!-- Vite and Tailwind CSS Integration -->
    @vite('resources/css/app.css') <!-- Adjust if using Blade directive for Vite -->
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <section class="flex flex-col px-11 pt-8 pb-8 bg-[#F7F0CF] rounded-3xl shadow-lg max-md:px-5 max-md:pb-24"> 
        <!-- Header Section -->
        <div class="flex justify-center items-center mb-2">
            <img
                loading="lazy"
                srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d"
                class="w-full aspect-square max-w-[126px]"
            />
        </div>
        
        <!-- Main Section -->
        <main class="flex flex-col justify-center items-center px-8 py-20 text-center bg-white rounded-3xl shadow-lg w-[575px] max-md:px-5 max-md:mt-10">
            <div class="w-full max-w-[474px] flex flex-col">
                <!-- Welcome Text -->
                <h1 class="text-5xl font-bold text-stone-700 mb-8 max-md:text-4xl">Selamat Datang</h1>

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
