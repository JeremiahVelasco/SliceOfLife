<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slice of Life</title>
    <link rel="icon"
        href="https://static.vecteezy.com/system/resources/previews/008/480/739/non_2x/pizza-icon-simple-colored-pizza-icon-pizza-logo-free-png.png">
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-gray-50 dark:bg-slate-100">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-black">
                <img class="w-auto h-20 mr-2"
                    src="https://static.vecteezy.com/system/resources/previews/008/480/739/non_2x/pizza-icon-simple-colored-pizza-icon-pizza-logo-free-png.png"
                    alt="logo">
                Slice Of Life
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-slate-50 dark:border-slate-50">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                        Register an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('register.profile') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your
                                name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                placeholder="John Doe" required="">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-pizza hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Register</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-pizza hover:underline dark:text-orange-500">Log In</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
