<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SekolahBisa - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* gaya tambahan jika diperlukan */
        .login-card {
            backdrop-filter: blur(2px);
        }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">

    <div class="w-full max-w-md">
        <!-- Logo / Branding -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-[#f53003] dark:text-[#FF4433] tracking-tight">SekolahBisa</h1>
            <p class="text-[#706f6c] dark:text-[#A1A09A] mt-2">Masuk ke akun Anda</p>
        </div>

        <!-- Form Login -->
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] p-6 lg:p-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md bg-white dark:bg-[#0a0a0a] focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] transition">
                    @error('email')
                        <span class="text-sm text-red-600 dark:text-red-400 mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Kata Sandi</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md bg-white dark:bg-[#0a0a0a] focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] transition">
                    @error('password')
                        <span class="text-sm text-red-600 dark:text-red-400 mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-[#f53003] focus:ring-[#f53003]">
                        <span class="ml-2 text-sm text-[#706f6c] dark:text-[#A1A09A]">Ingat saya</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-[#f53003] dark:text-[#FF4433] hover:underline">Lupa kata sandi?</a>
                    @endif
                </div>

                <button type="submit"
                        class="w-full bg-[#1b1b18] dark:bg-[#eeeeec] hover:bg-black dark:hover:bg-white text-white dark:text-[#1C1C1A] font-semibold py-2 px-4 rounded-md transition duration-200">
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
                Belum punya akun?
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-[#f53003] dark:text-[#FF4433] font-medium hover:underline">Daftar sekarang</a>
                @endif
            </div>
        </div>

        <!-- Footer versi Laravel (optional) -->
        <div class="text-center mt-8 text-xs text-[#706f6c] dark:text-[#A1A09A]">
            Powered by Laravel v{{ app()->version() }} &nbsp;|&nbsp; SekolahBisa &copy; {{ date('Y') }}
        </div>
    </div>

</body>
</html>