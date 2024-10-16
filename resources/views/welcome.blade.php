<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css') <!-- Vite directive for CSS -->
</head>
<body class="bg-gray-100">
    <section class="flex overflow-hidden flex-col px-11 pt-8 pb-52 bg-white max-md:px-5 max-md:pb-24">
        <header class="self-start text-xl font-semibold text-white">Your Logo</header>
        <main class="flex flex-col justify-center items-center self-center px-8 py-20 mt-36 max-w-full text-center bg-white min-h-[482px] rounded-[40px] shadow-[0px_4px_35px_rgba(0,0,0,0.08)] w-[575px] max-md:px-5 max-md:mt-10">
            <div class="flex flex-col max-w-full w-[474px]">
                <div class="flex flex-col max-md:max-w-full">
                    <h1 class="text-6xl font-semibold text-stone-700 max-md:max-w-full max-md:text-4xl">Selamat Datang</h1>

                    <!-- Log in form -->
                    <form action="/login" method="POST" class="flex flex-col items-center mt-16 w-full h-52 text-base font-bold text-white max-md:mt-10 max-md:max-w-full">
                        @csrf <!-- CSRF token -->
                        <div class="flex flex-col justify-center max-w-full min-h-[226px] w-[451px]">
                            <button type="submit" class="px-36 py-4 mt-4 w-full whitespace-nowrap bg-lime-700 rounded-lg shadow min-h-[54px] max-md:px-5 max-md:max-w-full">Log in</button>
                        </div>
                    </form>

                    <!-- Sign up form -->
                    <form action="/signup" method="POST" class="flex flex-col items-center w-full h-52 text-base font-bold text-white max-md:max-w-full">
                        @csrf
                        <div class="flex flex-col justify-center max-w-full min-h-[226px] w-[451px]">
                            <button type="submit" class="px-36 py-4 mt-4 w-full whitespace-nowrap bg-lime-700 rounded-lg shadow min-h-[54px] max-md:px-5 max-md:max-w-full">Daftar</button>
                        </div>
                    </form>

                    <!-- Guest mode button -->
                    <button type="button" class="gap-2.5 self-stretch px-36 py-5 mt-4 w-full bg-white rounded-lg border-solid shadow border border-zinc-400 min-h-[54px] text-stone-700 max-md:px-5 max-md:max-w-full">Mode Tamu</button>
                </div>
            </div>
        </main>
    </section>
</body>
</html>
