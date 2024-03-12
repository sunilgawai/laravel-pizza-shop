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
                </svg><span class="text-2xl font-bold">Pizza</span></div>
            <div class="flex items-center space-x-6"><a class="text-base font-medium hover:underline" href="#">Menu</a><a class="text-base font-medium hover:underline" href="#">Offers</a><a class="text-base font-medium hover:underline" href="#">My Orders</a><a class="text-base font-medium hover:underline" href="#">Logout</a><button class="justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 bg-[#E63946] text-white px-4 py-2 rounded-full flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-lg">
                        <circle cx="8" cy="21" r="1"></circle>
                        <circle cx="19" cy="21" r="1"></circle>
                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                    </svg></button></div>
        </nav>
        <div class="w-full h-screen flex flex-row justify-around items-center px-8 py-16">
            <div class="max-w-lg text-center space-y-4">
                <h2 class="text-xl font-medium">Are you hungry?</h2>
                <p class="text-6xl font-bold">Don't Wait !</p>
                <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 bg-[#E63946] text-white px-8 py-3 rounded-full">
                    Order Now
                </button>
            </div>
            <div class="">
                <img src="https://images.pexels.com/photos/1653877/pexels-photo-1653877.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Pizza" class="max-w-full h-auto" width="400" height="400" style="aspect-ratio: 400 / 400; object-fit: cover;" />
            </div>
        </div>
    </div>
</body>

</html>