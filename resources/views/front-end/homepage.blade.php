<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Boost</title>
    <link rel="stylesheet" href="front-end/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script type="module" src="{{ asset('front-end/js/script.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        green: '#c5fb79',
                        pink: '#d695f5',
                        black: '#09060a',
                        purple: '#520a70',
                        blue: '#6383f0'
                    }
                }
            }
        }
    </script>
</head>

<body>
    <nav class="border-black border-b-4 px-10 uppercase font-semibold flex justify-between hepta">
        <ul class="flex items-center">
            <li class="px-4 py-4"><a href="/">home</a></li>
            <li class="px-4 py-4"><a href="/services">services</a></li>
            <li class="px-4 py-4"><a href="#">about</a></li>
            <li class="px-4 py-4"><a href="/contact">contact</a></li>
        </ul>
        <a href="#" class="bg-green px-4 py-4 border-black border-s-4 border-e-4">login</a>
    </nav>

    <main>
        <div class="backgrounded" id="hero">
            <section class="flex justify-center px-10">
                <div class="flex-1 flex flex-col px-10 justify-around">
                    <div class="relative py-10">
                        <img loading="lazy" src="{{ asset('front-end/assets/circ.svg') }}"
                            class="w-1/2 absolute top-[-50px] left-0 -z-10">
                        <img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}"
                            alt="Brand Boost Logo" class="w-1/2 relative">
                    </div>

                    <div class="relative">
                        <img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}"
                            class="w-1/2 absolute top-[-90px] left-[6rem] -z-10" style="transform: rotate(160deg);">
                        <h1 class="text-5xl font-bold hepta uppercase">Super Offer</h1>
                        <p class="text-md rubikv w-2/3 mt-10">
                            Whether you're a content creator, developer, or visionary, our platform gives you the space
                            to shine. Build your profile, share your work, and get discovered by businesses seeking
                            innovative solutions. Let your talent speak for itself and unlock endless opportunities.
                        </p>
                    </div>
                    <div class="font-bold flex gap-10">
                        <a href="#" class="hepta block w-[150px] py-2 bg-green text-center border-black border-4">Yes,
                            I'm
                            in</a>
                        <div
                            class="rubikv block w-[150px] py-2 bg-white text-center border-black border-4 cursor-not-allowed">
                            No</div>
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
                        <img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 33.png') }}"
                            alt="Brand Boost Logo" class="w-1/4 ms-auto">
                        <p
                            class="mt-16 hepta font-bold border-black ms-auto border-4 border-b px-7 py-2 text-center bg-pink text-3xl w-[15rem] h-[3rem] flex justify-center items-center">
                            Man, Stop
                        </p>
                    </div>

                </div>
            </section>
        </div>

        <div class="marquee-container bg-green border-black border-t-4 border-b-4">
            <ul>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 10.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 23.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 19.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 25.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 33.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 9.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
            </ul>
            <ul>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 10.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 23.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 19.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 25.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 33.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 9.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" class="w-[2rem]"></li>
                <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
            </ul>
        </div>

        <div id="appearance"
            class="flex justify-center items-center bg-purple text-white p-10 h-[65rem] overflow-hidden border-black border-b-4">
            <div id="leftText" class="flex-1 flex flex-col font-extrabold items-between">
                <span class="text-9xl rubiki" style="text-shadow: 10px 5px 0px black;">Your Talent</span>
                <span class="text-7xl hepta my-9" style="text-shadow: 10px 5px 0px black;">Their
                    Vision</span>
                <span class="text-9xl rubiki" style="text-shadow: 10px 5px 0px black;">Our Platform</span>
                <div class="mt-10 flex flex-col w-1/2 gap-5">
                    <a href="#" class="bg-green px-4 py-4 border-black border-4 text-black hepta text-center"
                        style="box-shadow: 10px 10px 0 black;">I Have a
                        Talent</a>
                    <a href="#" class="bg-pink px-4 py-4 border-black border-4 text-black hepta text-center"
                        style="box-shadow: 10px 10px 0 black;">I Have a
                        Vision</a>
                </div>
            </div>
            <div class="flex-1 flex justify-center gap-8">
                <div class="flex flex-col mt-6 gap-10 items-center" id="leftImgs">
                    <img loading="lazy" src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}"
                        class="rounded-xl">
                    <img loading="lazy" src="{{ asset('front-end/SocialMedia/brand boost sm (2).jpg') }}"
                        class="rounded-xl">
                </div>
                <div class="flex flex-col mb-6 gap-10 items-center" id="rightImgs">
                    <img loading="lazy" src="{{ asset('front-end/SocialMedia/brand boost sm (3).jpg') }}"
                        class="rounded-xl">
                    <img loading="lazy" src="{{ asset('front-end/SocialMedia/brand boost sm (4).jpg') }}"
                        class="rounded-xl">
                </div>
            </div>
        </div>

        <div id="howItWorks">
            <h2 class="text-6xl hepta font-bold text-center py-10">But, How it Works ?</h2>
            <div id="horizontal" class="flex overflow-x-hidden">
                <div id="horizontalContent"
                    class="border-black border-t-4 h-[100vh] w-[100vw] bg-green flex-shrink-0 flex items-center">
                    <div class="flex items-center justify-between h-full px-20">
                        <div class="w-1/2">
                            <h1 class="text-7xl hepta font-bold">Join The Community</h1>
                            <p class="text-2xl rubikv mt-10">Sign up as a creator or a company manager to access a
                                vibrant network of talent and opportunities. Becoming part of our platform is quick,
                                easy, and completely free!</p>
                        </div>
                        <img src="{{ asset('front-end/logo/PNG/Artboard 27.png') }}" alt="Brand Boost Logo"
                            class="w-1/3">
                    </div>
                </div>

                <div id="horizontalContent"
                    class="border-black border-t-4 h-[100vh] w-[100vw] bg-pink flex-shrink-0 flex items-center">
                    <div class="flex items-center justify-between h-full px-20">
                        <div class="w-1/2">
                            <h1 class="text-7xl hepta font-bold">Showcase Your Work</h1>
                            <p class="text-2xl rubikv mt-10">Creators can upload projects, add descriptions, and present
                                their skills in the best light. Build an impressive portfolio that stands out to
                                potential collaborators.</p>
                        </div>
                        <div class="bg-white rounded-[60px]">
                            <img src="{{ asset('front-end/assets/world.svg') }}" alt="Brand Boost Logo" class="w-full">
                        </div>
                    </div>
                </div>

                <div id="horizontalContent"
                    class="border-black border-t-4 h-[100vh] w-[100vw] bg-blue flex-shrink-0 flex items-center">
                    <div class="flex items-center justify-between h-full px-20">
                        <div class="w-1/2">
                            <h1 class="text-7xl hepta font-bold">Connect and Collaborate</h1>
                            <p class="text-2xl rubikv mt-10">Managers can explore projects, favorite creators, and
                                initiate conversations directly. Discover the perfect fit for your project needs and
                                bring your ideas to life.</p>
                        </div>
                        <div class="bg-white rounded-[60px]">
                            <img src="{{ asset('front-end/assets/at.svg') }}" alt="Brand Boost Logo" class="w-full">
                        </div>
                    </div>
                </div>

                <div id="horizontalContent"
                    class="border-black border-t-4 border-b-4 h-[100vh] w-[100vw] bg-purple flex-shrink-0 flex items-center">
                    <div class="flex items-center justify-between h-full px-20">
                        <div class="w-1/2 text-white">
                            <h1 class="text-7xl hepta font-bold">Achieve Success</h1>
                            <p class="text-2xl rubikv mt-10">With seamless communication and our support, create
                                outstanding projects, gain recognition, and grow your network. Your success story starts
                                here.</p>
                        </div>
                        <div class="bg-white rounded-[60px]">
                            <img src="{{ asset('front-end/assets/star.svg') }}" alt="Brand Boost Logo" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="services" class="border-black border-t-4 border-b-4 hepta">
            <div class="text-center p-10 capitalize">
                <h1 class="text-8xl font-bold">What about our services fields ?</h1>
                <p class="text-2xl text-gray-600 mt-5">in this page we will show you a section with these four. You can
                    find all of them in the
                    services page</p>
            </div>

            <div class="bg-emerald-400 border-black border-t-4 flex flex-col gap-5 justify-center py-20">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 p-10">
                    <div class="h-[28rem] relative my-6" id="service">
                        <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                        <img src="https://images.unsplash.com/photo-1732020743205-9a1da14e36fd?q=80&w=1565&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div class="w-3/4 h-1/2 bg-white p-6 shadow-lg absolute -bottom-8 left-0 right-0 mx-auto">
                            <h5 class="text-purple font-bold text-lg leading-7 py-2">Web Development</h5>
                            <p class="text-gray-700" id="serviceDescription">Build responsive and dynamic websites
                                tailored to
                                your needs.</p>
                        </div>
                    </div>

                    <div class="h-[28rem] relative my-6" id="service">
                        <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                        <img src="https://images.unsplash.com/photo-1611532736597-de2d4265fba3?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div class="w-3/4 h-1/2 bg-white p-6 shadow-lg absolute -bottom-8 left-0 right-0 mx-auto">
                            <h5 class="text-purple font-bold text-lg leading-7 py-2">Graphic Design</h5>
                            <p class="text-gray-700" id="serviceDescription">Create visually appealing designs for your
                                brand
                                or projects.</p>
                        </div>
                    </div>
                    <div class="h-[28rem] relative my-6" id=" service">
                        <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                        <img src="https://images.unsplash.com/photo-1678798694643-2b8fddcf900f?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div class="w-3/4 h-1/2 bg-white p-6 shadow-lg absolute -bottom-8 left-0 right-0 mx-auto">
                            <h5 class="text-purple font-bold text-lg leading-7 py-2">Content Creation</h5>
                            <p class="text-gray-700" id="serviceDescription">Produce engaging content for your audience
                                or
                                campaigns.</p>
                        </div>
                    </div>
                    <div class="h-[28rem] relative my-6" id=" service">
                        <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1415&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div class="w-3/4 h-1/2 bg-white p-6 shadow-lg absolute -bottom-8 left-0 right-0 mx-auto">
                            <h5 class="text-purple font-bold text-lg leading-7 py-2">SEO Services</h5>
                            <p class="text-gray-700" id="serviceDescription">Optimize your website to rank higher in
                                search
                                engines.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center my-6">
                    <a href="/services" style="box-shadow: 10px 10px 0 black;"
                        class="border-black border-4 text-3xl bg-green font-semibold py-3 px-6 capitalize">
                        See the Rest
                    </a>
                </div>
            </div>
        </div>

        <div id="talents" class="border-black border-t-4 border-b-4 hepta">
            <div class="text-center p-10 capitalize">
                <h1 class="text-8xl font-bold">Did you ask about our talents ?</h1>
                <p class="text-2xl text-gray-600 mt-5">here are some of our talents. You can find all of them in the
                    talents page</p>
            </div>
            <div class="bg-indigo-400 border-black border-t-4 flex flex-col gap-5 justify-center py-20">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 p-10">
                    <div class="h-96 relative flex justify-center border-black border-4">
                        <!-- <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div> -->
                        <img src="https://images.unsplash.com/photo-1732020743205-9a1da14e36fd?q=80&w=1565&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 text-center flex flex-col justify-center items-center gap-1 py-5 bg-black w-full ">
                            <h5 class="text-white text-lg font-semibold leading-7 capitalize">Folan Ibn 3lan</h5>
                            <p class="text-gray-700 capitalize" id="talentUsername">@Z7lan22 - Web Developer</p>
                        </div>
                    </div>
                    <div class="h-96 relative flex justify-center border-black border-4">
                        <img src="https://images.unsplash.com/photo-1732020743205-9a1da14e36fd?q=80&w=1565&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 text-center flex flex-col justify-center items-center gap-1 py-5 bg-black w-full ">
                            <h5 class="text-white text-lg font-semibold leading-7 capitalize">Z3lan Trtan</h5>
                            <p class="text-gray-700 capitalize" id="talentUsername">@Meme3 - Designer</p>
                        </div>
                    </div>
                    <div class="h-96 relative flex justify-center border-black border-4">
                        <img src="https://images.unsplash.com/photo-1732020743205-9a1da14e36fd?q=80&w=1565&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 text-center flex flex-col justify-center items-center gap-1 py-5 bg-black w-full ">
                            <h5 class="text-white text-lg font-semibold leading-7 capitalize">Fr7an we Fa2dan</h5>
                            <p class="text-gray-700 capitalize" id="talentUsername">@dramaCreator - Content Creator</p>
                        </div>
                    </div>
                    <div class="h-96 relative flex justify-center border-black border-4">
                        <img src="https://images.unsplash.com/photo-1732020743205-9a1da14e36fd?q=80&w=1565&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 tgext-center flex flex-col justify-center items-center gap-1 py-5 bg-black w-full ">
                            <h5 class="text-white text-lg font-semibold leading-7 capitalize">Fakis</h5>
                            <p class="text-gray-700 capitalize" id="talentUsername">@Fakissss - Games Developer</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="/services" style="box-shadow: 10px 10px 0 black;"
                        class="border-black border-4 text-3xl bg-fuchsia-400 font-semibold py-3 px-6 capitalize">
                        Explore the talents
                    </a>
                </div>
            </div>
        </div>

        <!-- <footer class="singleBackgrounded"> -->
        <footer class="bg-purple pt-9 rubikv">
            <div class="mx-auto w-full max-w-[1166px] px-4 xl:px-0">
                <div class="flex flex-col justify-between sm:px-[18px] md:flex-row md:px-10">
                    <div class="md:w-[316px]">
                        <img src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" loading="lazy" class="w-1/2"
                            alt="Brand Boost Logo">
                        <p class="mt-[18px] text-[15px] font-normal text-white/[80%]">Lorem ipsum dolor sit amet
                            consectetur adipisicing
                            elit. Eos, fugit non. Incidunt dolorum adipisci, tempore asperiores nemo odio facere
                            officiis enim animi
                            placeat eaque nesciunt alias beatae id, at dicta.</p>
                    </div>
                    <div class="md:w-[316px] text-white">
                        <p class="text-[18px] font-medium leading-normal">Contact Info</p>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/phone.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="tel:+911800123444" class="font-Inter text-[14px] font-medium text-white">+20
                                    1003391697</a>
                                <p class="font-Inter text-[12px] font-medium text-white">Support Number</p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">

                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/mail.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="mailto:help@lorem.com"
                                    class="font-Inter text-[14px] font-medium text-[#fff]">help@brandboost.com</a>
                                <p class="font-Inter text-[12px] font-medium text-[#fff]">Support Email</p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/location.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="mailto:help@lorem.com"
                                    class="font-Inter text-[14px] font-medium text-[#fff]">Makan Ma, Egypt</a>
                                <p class="font-Inter text-[12px] font-medium text-white">Address</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-6 flex w-full flex-col justify-between text-white sm:flex-row md:mt-0 md:max-w-[341px]">
                        <div class="">
                            <p class="text-[18px] font-medium leading-normal">Pages</p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/">Home</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/services">Services</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/about">About us</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talents">Talents</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/contact">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium leading-normal">Useful links
                            </p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/sing-up">Sign up</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/sing-in">Sign in</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal"
                                        href="/terms-and-conditions">Terms and conditions</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/privacy-policy">Privcay
                                        policy</a></li>
                            </ul>
                        </div>
                        <!-- <div class="mt-6 flex flex-col gap-4 sm:mt-0">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium">Download the app</p>
                            <div class="flex gap-4 sm:flex-col">
                                <a target="_blank" href="#"><img alt="facebook icon" loading="lazy" width="168"
                                        height="50" decoding="async" data-nimg="1" style="color:transparent"
                                        src="https://www.englishyaari.com/img/google-store.svg" /></a><a target="_blank"
                                    href="#"><img alt="facebook icon" loading="lazy" width="168" height="50"
                                        decoding="async" data-nimg="1" style="color:transparent"
                                        src="https://www.englishyaari.com/img/apple-store.svg" /></a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <hr class="mt-[30px] text-white" />
                <div class="flex items-center justify-center pb-8 pt-[9px] md:py-8">
                    <p class="text-[10px] font-normal text-white md:text-[12px]">
                        © Copyright
                        <!-- -->2024
                        <!-- -->, All Rights Reserved by Brand Boost LTD.
                    </p>
                </div>
            </div>
        </footer>

    </main>
</body>

</html>