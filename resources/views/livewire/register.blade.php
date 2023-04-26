<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body>
    <div>
        <!-- <div class="home text-xl">this is home</div> -->

        <nav>
            <ul class="h-14 font-sans text-xl font-bold text-sky-500 flex justify-center items-center gap-20">
                <li class="cursor-pointer">PRODUCTS</li>
                <li class="cursor-pointer">SERVICES</li>
                <li class="cursor-pointer">ABOUT</li>
                <li class="cursor-pointer">CONTACT</li>
            </ul>
        </nav>

        <section id="login" class="w-full h-screen px-10 grid grid-cols-2">
            <div class="place-self-center">
                <h2 class="font-sans text-5xl font-bold">
                    <div class="text-sky-500">B&D</div>
                    Laboratories
                </h2>
            </div>

            <div class='p-20'>
                <div class='my-10'>
                    <form class="border mt-15 bg-white shadow-md rounded" action="">
                        <div class="text-center text-2xl pb-10 my-8 text-sky-500 font-bold">REGISTER</div>

                        <div class="m-5">
                            <label class="block text-gray-700 text-m font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="text" placeholder="Email">
                        </div>
                        <div class="m-5">
                            <label class="block text-gray-700 text-m font-bold mb-2" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none rounded-lg border sm:text-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" placeholder="password">
                        </div>
                        <div class="button flex items-center justify-center gap-10 px-10">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">GOOGLE
                                LOGIN</button>
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-14 rounded">LOGIN</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
