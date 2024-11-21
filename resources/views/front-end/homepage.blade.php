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

    body {
        /* font-family: 'acworth', sans-serif; */
        font-family: 'hepta', sans-serif;
        /* font-family: 'rubiki', sans-serif; */
        /* font-family: 'rubikv', sans-serif; */
    }
</style>

<body>
    <nav class="border-black border-b-4 px-10 uppercase font-semibold flex justify-between">
        <ul class="flex items-center">
            <li class="px-4 py-4"><a href="#">home</a></li>
            <li class="px-4 py-4"><a href="#">services</a></li>
            <li class="px-4 py-4"><a href="#">about</a></li>
            <li class="px-4 py-4"><a href="#">contact</a></li>
        </ul>
        <a href="#" class="bg-green px-4 py-4 border-black border-s-4 border-e-4">login</a>
    </nav>

    <section id="hero">
        <div class="flex justify-between items-center">
            <img src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}" alt="Brand Boost Logo">
        </div>
    </section>
</body>

</html>