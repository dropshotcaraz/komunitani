<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar</title>
    <link rel="icon" href="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <section class="flex flex-col px-11 pt-8 pb-8 bg-[#F7F0CF] rounded-3xl shadow-lg max-md:px-5 max-md:pb-24">
        <!-- Header Section -->
        <div class="flex justify-center items-center mb-2">
            <img
                loading="lazy"
                srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d"
                class="w-full aspect-square max-w-[100px]"
            />
        </div>
        <!-- Main Section -->
        <main class="flex flex-col justify-center items-center px-8 py-10 text-center bg-white rounded-3xl shadow-lg w-[575px] max-md:px-5 max-md:mt-10">
            <div class="w-full max-w-[474px] flex flex-col">
                <!-- Welcome Text -->
                <h1 class="text-4xl font-bold text-stone-700 mb-4 self-start text-left max-md:text-4xl">Daftar</h1>

                <!-- Signup Form -->
                <form id="signup" action="/login" method="POST" class="flex flex-col space-y-4">
                    @csrf <!-- Blade directive for CSRF token -->

                    <!-- Username Input -->
                    <div class="flex flex-col">
                        <label for="username" class="text-[#434028] text-base font-normal mb-2 text-left">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username"
                               class="bg-white border border-gray-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#618805]">
                    </div>

                    <!-- Email Input -->
                    <div class="flex flex-col">
                        <label for="email" class="text-[#434028] text-base font-normal mb-2 text-left">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                               class="bg-white border border-gray-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#618805]">
                    </div>

                    <!-- Password Input -->
                    <div class="flex flex-col">
                        <label for="password" class="text-[#434028] text-base font-normal mb-2 text-left">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                               class="bg-white border border-gray-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#618805]">
                    </div>

                    <!-- Signup Button -->
                    <button type="submit" class="bg-[#618805] text-white text-base font-bold py-3 rounded-lg shadow hover:bg-[#4c6a04] transition duration-300">
                        Daftar
                    </button>

                    <!-- Login Link -->
                    <div class="text-center text-sm mt-4">
                        <span class="text-[#434028]">Sudah punya akun?</span>
                        <a href="/login" class="text-[#618805] ml-1 underline">Masuk</a>
                    </div>
                </form>
            </div>
        </main>
    </section>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            // Form validation
            $("#signup").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    username: {
                        required: "Username is required",
                        minlength: "Username must be at least 5 characters"
                    },
                    email: {
                        required: "Email is required",
                        email: "Enter a valid email address"
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 8 characters"
                    }
                },
                errorClass: 'text-red-500 font-semibold underline text-left',

                // Submit form via AJAX
                submitHandler: function(form) {
                    $.ajax({
                        url: "{{ url(path: '/api/signup') }}", // API route for signup
                        method: 'POST',
                        type: 'POST',
                        data: $(form).serialize(),
                        success: function(response) {
                            if(response.success) {
                                // Redirect to homepage on success
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sign up successful',
                                    text: 'You have successfully signed up!',
                                    confirmButtonText: 'Continue'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '/login';
                                    }
                                });
                            } else {
                                // Show SweetAlert warning on failure
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Sign up failed',
                                    text: response.message || 'Something went wrong!',
                                    confirmButtonText: 'Try again'
                                });
                            }
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Sign up failed',
                                text: 'Please check your input and try again!',
                                confirmButtonText: 'Retry'
                            });
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
