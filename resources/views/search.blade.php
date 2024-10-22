<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
    <link rel="icon" href="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vite and Tailwind CSS Integration -->
    @vite('resources/css/app.css') <!-- Adjust if using Blade directive for Vite -->
</head>
<body class="bg-gray-300 bg-opacity-25">
    <div class="grid grid-cols-1 md:grid-cols-12 min-h-screen">
        <!-- Sidebar -->
        <aside class="col-span-12 md:col-span-2 bg-white h-screen p-6 shadow-lg fixed top-0 left-0 m-4 rounded-3xl">
            <div class="flex justify-center items-center mb-2">
                <!-- <img src={{ Vite::asset('public/images/homeicon.png') }} alt="Home" class="h-6 w-6 mr-2"> -->
                <img
                loading="lazy"
                srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d"
                class="w-full aspect-square max-w-[100px]"
                />
                   
            </div>
            <nav class="space-y-4">
                <a href="#" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/homeicon.png') }} alt="Home" class="h-6 w-6 mr-2">
                    Home
                </a>
                <a href="#" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/search.png') }} alt="Search" class="h-6 w-6 mr-2">
                    Search
                </a>
                <a href="#" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/messages.png') }} alt="Messages" class="h-6 w-6 mr-2">
                    Messages
                </a>
                <a href="#" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/chatbot.png') }} alt="Chatbot" class="h-6 w-6 mr-2">
                    Chatbot
                </a>
                <a href="#" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                <img src="{{ Vite::asset('public/images/profile.png') }}" alt="Profile" class="h-6 w-6 mr-2">
                {{ session()->get('user_name', 'Profile') }}  <!-- Display the username, or 'Profile' as a fallback -->
                 </a>
                <button id="logoutButton" class="bg-[#618805] bg-500 text-white px-4 py-2 rounded-full hover:bg-red-600 w-full">
                    Logout
                </button>
            </nav>
        </aside>


        <!-- Main Content -->
        
            <main class="col-span-12 md:col-span-10 p-4 mt-5 md:mt-0 md:ml-[248px] w-full">
                <div class="bg-white shadow-lg p-4 rounded-3xl mb-10 h-screen">
                    <!-- SEACRH BAR -->
                    <div class="bg-gray-100 shadow p-2 rounded-3xl mb-6 flex items-center">
                        <button class="p-1 rounded-lg ml-4 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.5 10.5A7.5 7.5 0 109 18a7.5 7.5 0 009.5-7.5z" />
                            </svg>
                        </button>
                        <input type="text" placeholder="Search trending topics" class="flex-grow bg-gray-100 p-2 rounded-lg outline-none text-center">
                    </div>
         

                
                
                    <!-- REKOMENDASI -->
                    <div class="bg-white shadow-md p-4 rounded-3xl mb-6 mt-10">
                        <h3>Rekomendasi</h3>
                        
                    </div>
                </div>
 
            </main>
        
    <script>

        
        
            // Logout functionality
            $('#logoutButton').click(function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be logged out!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, log me out!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/api/logout', // Adjust the URL according to your API route
                            type: 'POST',
                            success: function(response) {
                                Swal.fire(
                                    'Logged out!',
                                    response.message,
                                    'success'
                                ).then(() => {
                                    window.location.href = '/login'; // Redirect to login page after logout
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Logout failed!',
                                    xhr.responseJSON.message,
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
    </script>
</body>
</html>