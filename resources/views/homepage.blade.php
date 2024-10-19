<!-- Belum Selesai hiksrot bingung nyobain button kirim nya bekerja, tp gk bisa-
bisa paleng dah-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitani - Homepage</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-12 min-h-screen">
        <!-- Sidebar -->
        <aside class="col-span-12 md:col-span-2 bg-white h-screen p-4 shadow-lg fixed md:relative">
            <div class="mb-6 text-center md:text-left">
                <h1 class="text-2xl font-bold">Komunitani</h1>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('homepage') }}" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src="{{ Vite::asset('resources/images/homeicon.png') }}" alt="Home" class="h-6 w-6 mr-2">
                    Home
                </a>
                <a href="{{ route('search') }}" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src="{{ Vite::asset('resources/images/search.png') }}" alt="Search" class="h-6 w-6 mr-2">
                    Search
                </a>
                <a href="{{ route('messages') }}" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src="{{ Vite::asset('resources/images/messages.png') }}" alt="Messages" class="h-6 w-6 mr-2">
                    Messages
                </a>
                <a href="{{ route('chatbot') }}" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src="{{ Vite::asset('resources/images/chatbot.png') }}" alt="Chatbot" class="h-6 w-6 mr-2">
                    Chatbot
                </a>
                <a href="{{ route('profile') }}" class="block text-lg font-medium text-gray-700 hover:bg-gray-100 p-2 rounded-lg flex items-center">
                    <img src="{{ Vite::asset('resources/images/avatar1.png') }}" alt="Profile" class="h-6 w-6 mr-2">
                    Profile
                </a>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="col-span-12 md:col-span-7 p-6 mt-20 md:mt-0">
            <!-- Post Bar -->
            <div class="bg-white shadow p-4 rounded-lg mb-6">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/images/avatar2.png') }}" alt="Profile Picture" class="w-12 h-12 rounded-full mr-4">
                    <form id="postForm" class="w-full">
                        <form action="{{ route('post.store') }}" method="POST" id="postForm">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <textarea id="postTextarea" placeholder="Tulis pertanyaan atau informasi di sini" class="w-full bg-gray-100 p-2 rounded-lg outline-none mb-2"></textarea>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <select id="topicSelect" class="border border-gray-300 p-2 rounded-lg">
                                    <option value="">Pilih Topik</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                </select>
                                <input type="text" id="newTagInput" placeholder="Tambahkan tag" class="border border-gray-300 p-2 rounded-lg">
                                <button type="button" onclick="addTag()" class="bg-[#618805] text-white px-4 py-2 rounded-lg">Tambah Tag</button>
                            </div>

                            <div class="flex items-center space-x-2">
                                <button onclick="formatText('italic')" class="italic">I</button>
                                <button onclick="formatText('underline')" class="underline">U</button>
                                <button onclick="formatText('bold')" class="font-bold">B</button>
                                <input type="file" id="imageUpload" class="hidden" accept="image/*" onchange="previewImage(event)">
                                <button type="button" onclick="document.getElementById('imageUpload').click()" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button type="submit" id="submitPost" class="w-full mt-4 bg-[#618805] text-white px-4 py-2 rounded-lg">Kirim</button>
                    </form>
                </div>

                <div id="postPreview"></div>
            </div>

            <!-- Post Feed -->
            <div>
                @foreach ($posts as $post)
                <div class="bg-white shadow p-4 rounded-lg mb-6">
                    <div class="flex items-center mb-4">
                        <img src="{{ $post->user->avatar }}" alt="{{ $post->user->name }}" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h2 class="font-bold">{{ $post->user->name }}</h2>
                            <p class="text-gray-500 text-sm">{{ $post->created_at->format('M d, Y - h:i A') }}</p>
                        </div>
                    </div>
                    <p>{{ $post->content }}</p>
                    @if ($post->image)
                        <img src="{{ $post->image }}" alt="Post Image" class="w-full h-auto mt-4 rounded-lg">
                    @endif
                    <div class="flex justify-between mt-4">
                        <button class="flex items-center text-gray-500 hover:text-green-500">
                            <img src="{{ Vite::asset('resources/images/likes.png') }}" alt="Likes" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-blue-500">
                            <img src="{{ Vite::asset('resources/images/comment.png') }}" alt="Comment" class="h-6 w-6 mr-2"> 1k
                        </button>
                        <button class="flex items-center text-gray-500 hover:text-yellow-500">
                            <img src="{{ Vite::asset('resources/images/share.png') }}" alt="Share" class="h-6 w-6 mr-2"> Share
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </main>

        <!-- Trending Section -->
        <aside class="col-span-12 md:col-span-3 bg-white h-screen p-6 shadow-lg hidden md:block">
            <div class="bg-gray-100 shadow p-3 rounded-lg mb-6 flex items-center">
                <button class="p-2 rounded-lg ml-4 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.5 10.5A7.5 7.5 0 109 18a7.5 7.5 0 009.5-7.5z" />
                    </svg>
                </button>
                <input type="text" placeholder="Search trending topics" class="flex-grow bg-gray-100 p-2 rounded-lg outline-none">
            </div>

            <h2 class="text-2xl font-bold mb-4">Trending Topics</h2>
            <div class="space-y-4">
                @foreach ($trendingTopics as $topic)
                <a href="{{ route('topic.show', $topic->id) }}" class="block text-lg text-blue-500 hover:underline">
                    {{ $topic->title }}
                </a>
                @endforeach
            </div>
        </aside>
    </div>

    @vite('resources/js/app.js')

    <!-- JS for adding post -->
    <script>
        function formatText(command) {
            document.execCommand(command, false, null);
        }

        function previewImage(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('postPreview');
                output.innerHTML = '<img src="'+reader.result+'" class="max-w-xs mt-2 rounded-lg" />';
            }
            reader.readAsDataURL(file);
        }

        function addTag() {
            const tagInput = document.getElementById('newTagInput');
            if(tagInput.value.trim()) {
                const postTextarea = document.getElementById('postTextarea');
                postTextarea.value += ` #${tagInput.value.trim()}`;
                tagInput.value = '';
            }
        }

        document.getElementById('postForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let formData = new FormData(this);

            fetch('{{ route('post.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('postTextarea').value = '';
                    document.getElementById('topicSelect').value = '';
                    document.getElementById('newTagInput').value = '';
                    // Optionally show the new post in the feed
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
