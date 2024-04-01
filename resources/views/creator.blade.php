<!DOCTYPE html>
<html lang="en">

<head>
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

<body>
    <header class="absolute inset-x-0 top-0 z-50">
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
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Menu</a>
                            <a href="{{ route('creator') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Creator</a>
                            <a href="#"
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


    <aside id="default-sidebar"
        class="fixed top-0 right-0 z-40 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar" style="width: 30%;">
        <div class="h-full px-3 py-4 overflow-y-auto bg-slate-100 dark:bg-slate-100">
            <span class="text-4xl font-bold py-1 px-1.5">Pick Your Ingredients</span>

            <form action="{{ route('creator.create') }}" method="POST" id="order">
                @csrf
                <div id="size" class="border-2 rounded border-gray-900 px-1.5 py-1 mt-6">
                    <span class="text-xl font-semibold text-px-1.5 py-1">Size</span>
                    <div class="flex items-center mb-4 px-5">
                        <input id="small" name="size" type="checkbox" value="pizza_small"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Small</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="medium" name="size" type="checkbox" value="pizza_medium"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Medium</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="large" name="size" type="checkbox" value="pizza_large"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Large</label>
                    </div>
                </div>

                <div id="protein" class="border-2 rounded border-gray-900 px-1.5 py-1 mt-2">
                    <span class="text-xl font-semibold text-px-1.5 py-1">Protein</span>
                    <div class="flex items-center mb-4 px-5">
                        <input id="pepperoni" name="protein" type="checkbox" value="pepperoni"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Pepperoni</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="sausage" name="protein" type="checkbox" value="sausage"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Sausage</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="bacon" name="protein" type="checkbox" value="bacon"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Bacon</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="mushroom" name="protein" type="checkbox" value="mushroom"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Mushrooms</label>
                    </div>
                </div>

                <div id="greens" class="border-2 rounded border-gray-900 px-1.5 py-1 mt-2">
                    <span class="text-xl font-semibold text-px-1.5 py-1">Greens</span>
                    <div class="flex items-center mb-4 px-5">
                        <input id="spinach" name="greens" type="checkbox" value="spinach"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Spinach</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="arugula" name="greens" type="checkbox" value="arugula"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Arugula</label>
                    </div>
                </div>

                <div id="cheese" class="border-2 rounded border-gray-900 px-1.5 py-1 mt-2">
                    <span class="text-xl font-semibold text-px-1.5 py-1">Cheese</span>
                    <div class="flex items-center mb-4 px-5">
                        <input id="cheddar" name="cheese" type="checkbox" value="cheddar"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Cheddar</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="mozzarella" name="cheese" type="checkbox" value="mozzarella"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Mozzarella</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="gouda" name="cheese" type="checkbox" value="gouda"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Gouda</label>
                    </div>
                    <div class="flex items-center mb-4 px-5">
                        <input id="jack" name="cheese" type="checkbox" value="jack"
                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Jack</label>
                    </div>
                </div>

                <button type="submit"
                    class="mt-4 w-full px-5 py-3 text-base font-medium text-center text-white bg-orange-100 rounded-lg hover:bg-orange-100 focus:ring-4 focus:outline-none focus:ring-orange-100 dark:bg-pizza dark:hover:bg-orange-400 dark:focus:ring-orange-400">Add
                    to Cart</button>
            </form>
        </div>
    </aside>

    <div id="pizza_box" class="absolute p-4 sm:ml-64" style="margin-top: 8%; height: 75svh; width: 60%;">
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-pizza to-red-400 opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>

    <script>
        // Add event listener to each checkbox
        // Add event listener to each checkbox
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    const pizza = this.value;
                    const ingredient = this.id;

                    const img = document.createElement('img');
                    img.classList.add("absolute");

                    if (this.name == 'size') {
                        img.src = `/storage/ingredients/${pizza}.png`;
                        console.log(pizza);
                    } else if (this.name == 'cheese') {
                        // NO ACTION
                    } else {
                        const size = document.querySelector('input[name="size"]:checked');
                        const pizzaSize = size.id;
                        img.src = `/storage/ingredients/${ingredient}_${pizzaSize}.png`;
                        console.log(ingredient + '_' + pizzaSize);
                    }
                    document.getElementById('pizza_box').appendChild(img);
                } else {
                    const ingredient = this.id;
                    const size = document.querySelector('input[name="size"]:checked');
                    const pizzaSize = size.id;
                    const imgToRemove = document.querySelector(
                        `img[src="/storage/ingredients/${ingredient}_${pizzaSize}.png"]`);
                    if (imgToRemove) {
                        imgToRemove.remove();
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('order');
            const pizzaBox = document.getElementById('pizza_box');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(form);
                const checkedCheckboxes = {};

                document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                    if (checkbox.checked) {
                        checkedCheckboxes[checkbox.name] = checkedCheckboxes[checkbox.name] || [];
                        checkedCheckboxes[checkbox.name].push(checkbox.value);
                    }
                });

                for (const key in checkedCheckboxes) {
                    if (checkedCheckboxes.hasOwnProperty(key)) {
                        formData.append(key, checkedCheckboxes[key]);
                    }
                }

                fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        swal({
                            text: "Added To Cart",
                            icon: "success",
                            button: false,
                            timer: 1500
                        });
                        form.reset();
                        while (pizzaBox.firstChild) {
                            pizzaBox.removeChild(pizzaBox.firstChild);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
</body>

</html>
