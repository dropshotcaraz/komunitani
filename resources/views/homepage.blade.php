<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="icon"
        href="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d"
        type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"
        integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js"
        integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vite and Tailwind CSS Integration -->
    @vite('resources/css/app.css')
    <!-- Adjust if using Blade directive for Vite -->
</head>

<body class="bg-gray-300 bg-opacity-25">
    <div class="grid grid-cols-1 md:grid-cols-12 min-h-screen">
        <!-- Sidebar -->
        <aside class="col-span-12 md:col-span-2 bg-white h-screen p-6 shadow-lg fixed top-0 left-0 m-4 rounded-3xl">
            <div class="flex justify-center items-center mb-2">
                <!-- <img src={{ Vite::asset('public/images/homeicon.png') }} alt="Home" class="h-6 w-6 mr-2"> -->
                <img loading="lazy"
                    srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d"
                    class="w-full aspect-square max-w-[100px]" />

            </div>
            <nav class="space-y-4">
                <a href="#"
                    class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/homeicon.png') }} alt="Home" class="h-6 w-6 mr-2">
                    Home
                </a>
                <a href="/search"
                    class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/search.png') }} alt="Search" class="h-6 w-6 mr-2">
                    Search
                </a>
                <a href="#"
                    class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/messages.png') }} alt="Messages" class="h-6 w-6 mr-2">
                    Messages
                </a>
                <a href="#"
                    class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src={{ Vite::asset('public/images/chatbot.png') }} alt="Chatbot" class="h-6 w-6 mr-2">
                    Chatbot
                </a>
                <a href="#"
                    class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src="{{ Vite::asset('public/images/profile.png') }}" alt="Profile" class="h-6 w-6 mr-2">
                    {{ session()->get('user_name', 'Profile') }}
                    <!-- Display the username, or 'Profile' as a fallback -->
                </a>
                <button id="logoutButton"
                    class="bg-[#618805] bg-500 text-white px-4 py-2 rounded-full hover:bg-red-600 w-full">
                    Logout
                </button>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="col-span-12 md:col-span-9 p-4 mt-20 md:mt-0 md:ml-[220px] w-auto">
            <!-- Post Bar -->
            <div class="bg-white shadow p-4 rounded-3xl mb-10">
                <div class="flex items-center">
                    <!-- <img src="{{ asset('images/avatar2.png') }}" alt="Avatar" class="w-12 h-10 rounded-full mr-4">
                     -->


                    <form id="postForm" class="w-full">

                        <div class="flex justify-end mt-4">
                            <div class="flex space-x-2 mb-1">
                                <div class="bg-white-200 border border-gray-400 p-1 text-sm rounded-3xl cursor-pointer hover:bg-gray-100 transition-colors duration-200"
                                    onclick="selectQuestion()">Pertanyaan</div>
                                <div class="bg-white-200 border border-gray-400 p-1 text-sm rounded-3xl cursor-pointer hover:bg-gray-100 transition-colors duration-200"
                                    onclick="selectInformation()">Informasi</div>
                            </div>
                        </div>


                        <textarea id="postTextarea" placeholder="Tulis pertanyaan atau informasi di sini"
                            class="w-full bg-white-100 p-2 rounded-lg outline-none mb-2 ml-4"></textarea>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <select id="topicSelect" class="border border-gray-300 p-2 rounded-lg">
                                    <option value="">Pilih Topik</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                </select>
                                <input type="text" id="newTagInput" placeholder="Tambahkan tag"
                                    class="border border-gray-300 p-2 rounded-lg">
                                <button type="button" onclick="addTag()"
                                    class="bg-[#618805] text-white px-4 py-2 rounded-lg">Tambah Tag</button>
                                <button onclick="formatText('italic')" class="italic">I</button>
                                <button onclick="formatText('underline')" class="underline">U</button>
                                <button onclick="formatText('bold')" class="font-bold">B</button>
                                <input type="file" id="imageUpload" class="hidden" accept="image/*"
                                    onchange="previewImage(event)">
                                <button type="button" onclick="document.getElementById('imageUpload').click()"
                                    class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h18v18H3z" />
                                    </svg>
                                </button>

                            </div>

                            <!-- <div class="flex items-center space-x-2">
                                <button onclick="formatText('italic')" class="italic">I</button>
                                <button onclick="formatText('underline')" class="underline">U</button>
                                <button onclick="formatText('bold')" class="font-bold">B</button>
                                <input type="file" id="imageUpload" class="hidden" accept="image/*" onchange="previewImage(event)">
                                <button type="button" onclick="document.getElementById('imageUpload').click()" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z"/>
                                    </svg>
                                </button>
                            </div> -->
                        </div>
                        <div class="flex justify-center w-full mt-4">
                            <button type="submit" id="submitPost"
                                class="w-1/2 bg-[#618805] text-white px-4 py-2 rounded-3xl mt-4">Kirim</button>
                        </div>

                        <!-- <button type="submit" id="submitPost" class="w-1/2 flex justify-center mt-4 bg-[#618805] text-white px-4 py-2 rounded-lg">Kirim</button>
                    </form> -->
                </div>

                <div id="postPreview"></div>
            </div>

            <!-- Post Feed 1 -->
            <div id="postFeed">
                <!-- Placeholder posts -->
                <div class="bg-white shadow p-4 rounded-3xl mb-6">
                    <div class="flex items-center mb-4">
                        <img src="avatar2.png" alt="User Name" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h2 class="font-bold">User Name</h2>
                            <p class="text-gray-500 text-sm">Oct 18, 2024 - 10:30 AM</p>
                        </div>
                    </div>
                    <p>This is an example post content. You can write your own text here to simulate a user post.</p>
                    <img src="post-image.png" alt="Post Image" class="w-full h-auto mt-4 rounded-lg">
                    <div class="flex justify-between mt-4">
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('public/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('public/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-blue-500">
                            <img src={{ Vite::asset('public/images/comment.png') }} alt="Comment" class="h-6 w-6 mr-2">
                            1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-yellow-500">
                            <img src={{ Vite::asset('public/images/share.png') }} alt="Share" class="h-6 w-6 mr-2">
                            Share
                        </button>
                    </div>
                </div>
            </div>

            <!-- Post Feed 2 -->
            <div id="postFeed">
                <!-- Placeholder posts -->
                <div class="bg-white shadow p-4 rounded-3xl mb-6">
                    <div class="flex items-center mb-4">
                        <img src="avatar2.png" alt="User Name" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h2 class="font-bold">User Name</h2>
                            <p class="text-gray-500 text-sm">Oct 18, 2024 - 10:30 AM</p>
                        </div>
                    </div>
                    <p>This is an example post content. You can write your own text here to simulate a user post.</p>
                    <img src="post-image.png" alt="Post Image" class="w-full h-auto mt-4 rounded-lg">
                    <div class="flex justify-between mt-4">
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('public/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('public/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-blue-500">
                            <img src={{ Vite::asset('public/images/comment.png') }} alt="Comment" class="h-6 w-6 mr-2">
                            1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-yellow-500">
                            <img src={{ Vite::asset('public/images/share.png') }} alt="Share" class="h-6 w-6 mr-2">
                            Share
                        </button>
                    </div>
                </div>
            </div>

            <!-- Post Feed 3 -->
            <div id="postFeed">
                <!-- Placeholder posts -->
                <div class="bg-white shadow p-4 rounded-3xl mb-6">
                    <div class="flex items-center mb-4">
                        <img src="avatar2.png" alt="User Name" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h2 class="font-bold">User Name</h2>
                            <p class="text-gray-500 text-sm">Oct 18, 2024 - 10:30 AM</p>
                        </div>
                    </div>
                    <p>This is an example post content. You can write your own text here to simulate a user post.</p>
                    <img src="post-image.png" alt="Post Image" class="w-full h-auto mt-4 rounded-lg">
                    <div class="flex justify-between mt-4">
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('public/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('public/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-blue-500">
                            <img src={{ Vite::asset('public/images/comment.png') }} alt="Comment" class="h-6 w-6 mr-2">
                            1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-yellow-500">
                            <img src={{ Vite::asset('public/images/share.png') }} alt="Share" class="h-6 w-6 mr-2">
                            Share
                        </button>
                    </div>
                </div>
            </div>

        </main>

        <!-- Trending Section -->
        <aside
            class="col-span-12 md:col-span-3 bg-white h-screen p-6 shadow-lg hidden md:block rounded-3xl m-4 fixed top-0 right-0">
            <div class="bg-gray-100 shadow p-2 rounded-3xl mb-6 flex items-center">
                <button class="p-1 rounded-lg ml-4 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M18.5 10.5A7.5 7.5 0 109 18a7.5 7.5 0 009.5-7.5z" />
                    </svg>
                </button>
                <input type="text" placeholder="Search trending topics"
                    class="flex-grow bg-gray-100 p-2 rounded-lg outline-none">
            </div>

            <h2 class="text-2xl font-bold mb-4">Trending Topics</h2>
            <div class="space-y-4">
                <a href="#" class="block text-lg text-blue-500 hover:underline">#Teknologi</a>
                <a href="#" class="block text-lg text-blue-500 hover:underline">#Pendidikan</a>
                <a href="#" class="block text-lg text-blue-500 hover:underline">#Kesehatan</a>
            </div>
        </aside>
    </div>

    <script>
    // Function to format text in the textarea
    function formatText(command) {
        document.execCommand(command, false, null);
    }

    // Function to preview image
    function previewImage(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function() {
            $('#postPreview').html('<img src="' + reader.result + '" class="max-w-xs mt-2 rounded-lg" />');
        };
        reader.readAsDataURL(file);
    }

    // Add tag functionality
    function addTag() {
        var tagValue = $('#newTagInput').val();
        if (tagValue) {
            $('#topicSelect').append('<option value="' + tagValue + '">' + tagValue + '</option>');
            $('#newTagInput').val('');
        }
    }

    // Simulate post submission
    $('#postForm').on('submit', function(e) {
        e.preventDefault();
        var content = $('#postTextarea').val();
        var topic = $('#topicSelect').val();
        if (content) {
            var newPost = `
                    <div class="bg-white shadow p-4 rounded-lg mb-6">
                        <div class="flex items-center mb-4">
                            <img src="avatar2.png" alt="User Name" class="w-10 h-10 rounded-full mr-4">
                            <div>
                                <h2 class="font-bold">User Name</h2>
                                <p class="text-gray-500 text-sm">Just Now</p>
                            </div>
                        </div>
                        <p>${content}</p>
                        <div class="flex justify-between mt-4">
                            <button class="flex items-center text-gray-500 hover:text-green-500">
                                <img src="likes.png" alt="Likes" class="h-6 w-6 mr-2"> 0
                            </button>
                            <button class="flex items-center text-gray-500 hover:text-blue-500">
                                <img src="comment.png" alt="Comment" class="h-6 w-6 mr-2"> 0
                            </button>
                            <button class="flex items-center text-gray-500 hover:text-yellow-500">
                                <img src="share.png" alt="Share" class="h-6 w-6 mr-2"> Share
                            </button>
                        </div>
                    </div>
                `;

            $('#postFeed').prepend(newPost);
            $('#postTextarea').val('');
            $('#topicSelect').val('');
            $('#postPreview').empty();
        }
    });
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // // Load tweet feed
        // $.ajax({
        //     url: '/api/tweets', // Adjust the URL according to your API route
        //     type: 'GET',
        //     success: function(response) {
        //         $.each(response, function(index, tweet) {
        //             $('#tweetFeed').append(`
        //                 <div class="tweet-box">
        //                     <h4 class="font-bold">${tweet.user.name}</h4>
        //                     <p>${tweet.content}</p>
        //                 </div>
        //             `);
        //         });
        //     },
        //     error: function(xhr) {
        //         alert('Failed to load tweets: ' + xhr.responseJSON.message);
        //     }
        // });

        // // Post a new tweet
        // $('#postTweet').click(function() {
        //     var tweetContent = $('#tweetContent').val();
        //     if (tweetContent.trim() !== '') {
        //         $.ajax({
        //             url: '/api/tweets', // Adjust the URL according to your API route
        //             type: 'POST',
        //             data: { content: tweetContent },
        //             success: function(response) {
        //                 $('#tweetFeed').prepend(`
        //                     <div class="tweet-box">
        //                         <h4 class="font-bold">${response.user.name}</h4>
        //                         <p>${response.content}</p>
        //                     </div>
        //                 `);
        //                 $('#tweetContent').val('');
        //             },
        //             error: function(xhr) {
        //                 alert('Failed to post tweet: ' + xhr.responseJSON.message);
        //             }
        //         });
        //     }
        // });

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
                                window.location.href =
                                    '/login'; // Redirect to login page after logout
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
    });
    </script>
</body>

</html>