<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Boost</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        green: '#c5fb79',
                        pink: '#d695f5'
                    }
                }
            }
        }
    </script>
</head>

<style>
    @font-face {
        font-family: "hepta";
        src: url("/front-end/fonts/HeptaSlab-VariableFont_wght.ttf");
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: "acworth";
        src: url("/front-end/fonts/acworth-bold.otf");
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: "rubiki";
        src: url("/front-end/fonts/Rubik-Italic-VariableFont_wght.ttf");
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: "rubikv";
        src: url("/front-end/fonts/Rubik-VariableFont_wght.ttf");
        font-weight: normal;
        font-style: normal;
    }

    .hepta {
        font-family: 'hepta', sans-serif;
    }

    .acworth {
        font-family: 'acworth', sans-serif;
    }

    .rubiki {
        font-family: 'rubiki', sans-serif;
    }

    .rubikv {
        font-family: 'rubikv', sans-serif;
    }
</style>

<body>
    <nav class="border-black border-b-4 px-10 uppercase font-semibold flex justify-between hepta">
        <ul class="flex items-center">
            <li class="px-4 py-4"><a href="#">home</a></li>
            <li class="px-4 py-4"><a href="#">services</a></li>
            <li class="px-4 py-4"><a href="#">about</a></li>
            <li class="px-4 py-4"><a href="#">contact</a></li>
        </ul>
        <a href="#" class="bg-green px-4 py-4 border-black border-s-4 border-e-4">login</a>
    </nav>

    <main class="px-10">
        <section id="hero" class="flex justify-center gap-2">
            <div class="flex-1 flex flex-col px-10 justify-around">
                <img src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}" alt="Brand Boost Logo" class="w-1/2">

                <div>
                    <h1 class="text-5xl font-bold hepta uppercase">Super Start</h1>
                    <p class="text-md rubikv w-2/3 mt-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, accusantium. Tempore,
                        maxime
                        aperiam. Ab, optio culpa?
                    </p>
                </div>
                <div class="font-bold flex gap-10">
                    <a href="#" class="hepta block w-[150px] py-2 bg-green text-center border-black border-4">Yes,
                        I'm
                        in</a>
                    <a href="#" class="rubikv block w-[150px] py-2 bg-white text-center border-black border-4">No</a>
                </div>
                <div class="hepta font-bold text-4xl">Brand BOoOoOst</div>
            </div>

            <div class="flex-1 flex flex-col gap-40">
                <div class="relative">
                    <div
                        class="hepta font-bold border-black border-t border-4 px-7 py-2 text-center bg-pink text-5xl absolute w-[30rem] h-[6rem] z-10 flex justify-center items-center right-0">
                        Stop
                        Reading!
                    </div>
                    <div
                        class="hepta font-bold border-black border-4 px-7 py-2 absolute w-[30rem] h-[6rem] z-0 flex justify-center items-center top-[1rem] right-[-1rem]">
                    </div>
                </div>

                <div class="relative right-[8rem]">
                    <div
                        class="hepta font-bold border-black border-4 px-7 py-2 text-center bg-green text-xl absolute w-[15rem] h-[3rem] z-10 flex justify-center items-center  right-0">
                        Whatever
                    </div>
                    <div
                        class="hepta font-bold border-black border-4 px-7 py-2 absolute w-[15rem] h-[3rem] z-0 flex justify-center items-center top-[1rem] right-[-1rem]">
                    </div>
                </div>

                <div>
                    <img src="{{ asset('front-end/logo/PNG/Artboard 33.png') }}" alt="Brand Boost Logo"
                        class="w-1/4 ms-auto">
                    <p
                        class="mt-16 hepta font-bold border-black ms-auto border-4 px-7 py-2 text-center bg-pink text-3xl w-[15rem] h-[3rem] flex justify-center items-center">
                        Man, Stop
                    </p>
                </div>

            </div>
        </section>
    </main>
</body>

</html>