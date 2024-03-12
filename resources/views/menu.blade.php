<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen">
    <div class="bg-white">
        <nav class="flex justify-between items-center py-4 px-8 border-b">
            <div class="flex items-center space-x-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-3xl text-[#E63946]">
                    <path d="M15 11h.01"></path>
                    <path d="M11 15h.01"></path>
                    <path d="M16 16h.01"></path>
                    <path d="m2 16 20 6-6-20A20 20 0 0 0 2 16"></path>
                    <path d="M5.71 17.11a17.04 17.04 0 0 1 11.4-11.4"></path>
                </svg>
                <span class="text-2xl font-bold">Pizza</span>
            </div>
            <div class="flex items-center space-x-6">
                <a class="text-base font-medium hover:underline" href="/menu">Menu</a>
                <a class="text-base font-medium hover:underline" href="/offers">Offers</a>
                <a class="text-base font-medium hover:underline" href="/orders">My Orders</a>
                <a class="text-base font-medium hover:underline" href="/logout">Logout</a>
                <button class="justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 bg-[#E63946] text-white px-4 py-2 rounded-full flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-lg">
                        <circle cx="8" cy="21" r="1"></circle>
                        <circle cx="19" cy="21" r="1"></circle>
                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-center">All Pizzas</h2>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Margherita" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-semibold">Margherita</h3>
                    <p class="mt-1 text-sm">SMALL</p>
                    <div class="flex flex-row items-center justify-between">
                        <p class="mt-3 text-lg font-semibold italic">₹250</p>
                        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">
                            + Add
                        </button>
                    </div>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Marinara" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Marinara</h3>
                    <p class="mt-1">MEDIUM</p>
                    <p class="mt-3 text-lg font-semibold">₹300</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Carbonara" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Carbonara</h3>
                    <p class="mt-1">SMALL</p>
                    <p class="mt-3 text-lg font-semibold">₹200</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Americana" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Americana</h3>
                    <p class="mt-1">LARGE</p>
                    <p class="mt-3 text-lg font-semibold">₹500</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Chicken Mushroom" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Chicken Mushroom</h3>
                    <p class="mt-1">MEDIUM</p>
                    <p class="mt-3 text-lg font-semibold">₹350</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Paneer pizza" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Paneer pizza</h3>
                    <p class="mt-1">SMALL</p>
                    <p class="mt-3 text-lg font-semibold">₹250</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Vegies pizza" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Vegies pizza</h3>
                    <p class="mt-1">LARGE</p>
                    <p class="mt-3 text-lg font-semibold">₹450</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/img/piz1.jpg') }}" alt="Pepperoni" class="mx-auto" width="200" height="200" style="aspect-ratio: 200 / 200; object-fit: cover;">
                    <h3 class="mt-4 font-bold">Pepperoni</h3>
                    <p class="mt-1">MEDIUM</p>
                    <p class="mt-3 text-lg font-semibold">₹400</p><button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-2 bg-red-500 text-white">+ Add</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>