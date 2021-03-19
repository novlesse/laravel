<!DOCTYPE html>
<html class="h-full">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title>Mail Lesson</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet">
</head>
    <body class="bg-gray-100 flex items-center justify-center h-full">
        <form method="POST" action="/contact"
              class="bg-white p-6 rounded shadow-md"
              style="width: 300px">
            @csrf
            <div class="mb-5">
                <label for="email"
                       class="block text-xs uppercase font-semibold mb-1"
                >
                Email Address
                </label>
                <input id="email" type="text"  name="email"
                       class="border px-2 py-1 text-sm w-full">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}<p>
            @enderror
            @if (session('message'))
                <p class="text-green-500 text-xs mt-1">
                    {{ session('message') }}
                </p>
            @endif
            </div>
            <button type="submit"
                    class="bg-blue-500 py-2 text-white rounded-full text-sm w-full"
            >
            Email Me
            </button>
        </form>
    </body>
</html>
