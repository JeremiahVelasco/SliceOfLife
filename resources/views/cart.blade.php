<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slice Of Life</title>
    <link rel="icon"
        href="https://static.vecteezy.com/system/resources/previews/008/480/739/non_2x/pizza-icon-simple-colored-pizza-icon-pizza-logo-free-png.png">
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex flex-col items-center h-full w-full">
    <header class="absolute inset-x-0 top-0 z-50">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-pizza to-red-400 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Slice Of Life</span>
                    <img class="h-20 w-auto"
                        src="https://static.vecteezy.com/system/resources/previews/008/480/739/non_2x/pizza-icon-simple-colored-pizza-icon-pizza-logo-free-png.png"
                        alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="{{ route('menu') }}" class="text-sm font-semibold leading-6 text-gray-900">Menu</a>
                <a href="{{ route('creator') }}" class="text-sm font-semibold leading-6 text-gray-900">Creator</a>
                <a href="{{ route('profile') }}" class="text-sm font-semibold leading-6 text-gray-900">My Account</a>
                <a href="{{ route('cart') }}" class="text-2xl font-semibold leading-6 text-gray-900"><i
                        class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">

            </div>
        </nav>
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Slice of Life</span>
                        <img class="h-8 w-auto"
                            src="https://static.vecteezy.com/system/resources/previews/008/480/739/non_2x/pizza-icon-simple-colored-pizza-icon-pizza-logo-free-png.png"
                            alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="{{ route('menu') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Menu</a>
                            <a href="{{ route('creator') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Creator</a>
                            <a href="{{ route('profile') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">My
                                Account</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"><i
                                    class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="cart mt-20 flex flex-col items-center" style="margin-top: 230px">
        <span class="font-bold text-4xl mt-4"><i class="fa-solid fa-cart-shopping"></i> YOUR CART</span>

        <div class="cart-container flex flex-col flex-wrap px-4 py-6 rounded-sm">
            @foreach ($orders as $order)
                <div class="order flex items-center py-4 px-7 rounded-md bg-slate-100 m-2">
                    <span class="font-bold text-xl">Item {{ $order->id }}</span>
                    <div id="order-details">
                        <span><span class="font-semibold text-l"><i class="fa-solid fa-pizza-slice"></i> Size: </span>
                            {{ $order->size }}</span>
                        <span><span class="font-semibold text-l"><i class="fa-solid fa-bacon"></i> Protein: </span>
                            {{ $order->protein }}</span>
                        <span><span class="font-semibold text-l"><i class="fa-solid fa-leaf"></i> Greens: </span>
                            {{ $order->greens }}</span>
                        <span><span class="font-semibold text-l"><i class="fa-solid fa-cheese"></i> Cheese: </span>
                            {{ $order->cheese }}</span>
                    </div>
                    <form action="{{ route('delete-order', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                        <button type="submit"
                            class="m-3 w-full px-5 py-3 text-base font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-500">Remove
                            item</button>
                    </form>
                </div>
            @endforeach
            <button onsubmit="deleteOrder()" id="delete-btn"
                class="mt-4 w-full px-5 py-3 text-base font-medium text-center text-white bg-pizza rounded-lg hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-pizza dark:hover:bg-orange-400 dark:focus:ring-orange-400"
                type="submit">Place order</button>
        </div>

    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-pizza to-red-400 opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>

    <script>
        function deleteOrder() {
            // Show SweetAlert message upon successful submission
            swal({
                text: "Item removed from cart",
                icon: "success",
                showConfirmButton: false,
                timer: 1500
            });
        }
    </script>
</body>

</html>
