<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="icon" href="https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d?placeholderIfAbsent=true&apiKey=f696dd3e51664ad181dc4a1c50d0b69b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/22adad041b4103e7c14c4c3a45741e04db1575c6ec8d19547924e911aa07d21d" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vite and Tailwind CSS Integration -->
    @vite('resources/css/app.css') <!-- Adjust if using Blade directive for Vite -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <div class="flex">
            <!-- Left Sidebar -->
            <div class="w-1/4 p-4">
                <h1 class="text-2xl font-bold text-blue-500 mb-6">Twitter</h1>
                <nav>
                    <ul>
                        <li class="mb-4"><a href="#" class="text-lg font-semibold hover:text-blue-500">Home</a></li>
                        <li class="mb-4"><a href="#" class="text-lg hover:text-blue-500">Explore</a></li>
                        <li class="mb-4"><a href="#" class="text-lg hover:text-blue-500">Notifications</a></li>
                        <li class="mb-4"><a href="#" class="text-lg hover:text-blue-500">Messages</a></li>
                        <li class="mb-4"><a href="#" class="text-lg hover:text-blue-500">Profile</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 border-l border-r border-gray-200 p-4">
                <h2 class="text-xl font-semibold mb-4">Home</h2>
                <div class="mb-4">
                    <textarea id="tweetContent" class="w-full p-2 border border-gray-300 rounded-lg" rows="3" placeholder="What's happening?"></textarea>
                    <button id="postTweet" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">Tweet</button>
                </div>
                <div id="tweetFeed">
                    <!-- Tweet feed will be populated here -->
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="w-1/4 p-4">
                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <h3 class="font-bold mb-2">What's happening</h3>
                    <!-- Trending topics would go here -->
                </div>
                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <h3 class="font-bold mb-2">Who to follow</h3>
                    <!-- Suggested users would go here -->
                </div>
                <button id="logoutButton" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 w-full">
                    Logout
                </button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                } });

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
        });
    </script>
</html>