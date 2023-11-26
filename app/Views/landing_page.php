<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="./src/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Kodchasan', sans-serif;
        }

        body {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body x-data='{ navbar: false }'>

    <header class="fixed top-0 left-0 w-full z-40 " id="header" style="transition: 300ms">
        <nav class=" flex items-center justify-between w-full mx-auto px-5">
            <div class="flex items-center text-white">
                <img src="./src/img/logo.svg" alt="logo" id="logo">
                <h1 class="text-3xl font-bold">KEBOONKU</h1>
            </div>
            <ul class="hidden text-white lg:flex">
                <li><a class="px-5 hover:text-green-300 py-5" href="#">Home</a></li>
                <li><a class="px-5 hover:text-green-300 py-5" href="#observe">Observe</a></li>
                <li><a class="px-5 hover:text-green-300 py-5" href="#">Product</a></li>
                <li><a class="px-5 hover:text-green-300 py-5" href="#">Gallery</a></li>
                <li><a class="px-5 hover:text-green-300 py-5" href="#">Team</a></li>
            </ul>
            <span class="lg:hidden block cursor-pointer" x-on:click="navbar = true">
                <i class="fa-solid fa-bars text-white text-3xl"></i>
            </span>
            <div class="lg:block hidden">
                <a href="./login"><button class="p-3 bg-green-600 text-white rounded-xl mx-2 hover:bg-green-800 transition-all">Signin</button></a>
                <button class="p-3 bg-green-600 text-white rounded-xl mx-2 hover:bg-green-800 transition-all">Signup</button>
            </div>
        </nav>
    </header>

    <aside x-bind:class="!navbar ? '-translate-x-[20rem]' : 'translate-x-0 '" class="fixed left-0 top-0 bg-white h-[100vh] z-50 lg:hidden" style="transition: 300ms">
        <div class="w-full flex justify-end p-4" x-on:click="navbar = false">
            <i class="fa-solid fa-x p-3 cursor-pointer hover:bg-green-400"></i>
        </div>
        <ul class="flex flex-col">
            <li><a x-on:click="navbar = false" class="px-5 w-[15rem] block hover:text-green-300 py-5" href="#">Home</a></li>
            <li><a x-on:click="navbar = false" class="px-5 w-[15rem] block hover:text-green-300 py-5" href="#observe">Observe</a></li>
            <li><a x-on:click="navbar = false" class="px-5 w-[15rem] block hover:text-green-300 py-5" href="#">Product</a></li>
            <li><a x-on:click="navbar = false" class="px-5 w-[15rem] block hover:text-green-300 py-5" href="#">Gallery</a></li>
            <li><a x-on:click="navbar = false" class="px-5 w-[15rem] block hover:text-green-300 py-5" href="#">Team</a></li>
            <li><a class="px-3 bg-green-600 m-3 text-white rounded-xl text-center w-[15rem] block hover:text-green-300 py-3" href="./login">Sign In</a></li>
            <li><a class="px-3 bg-green-600 m-3 text-white rounded-xl text-center w-[15rem] block hover:text-green-300 py-3" href="#">Sign Up</a></li>
        </ul>
    </aside>




    <main class="">
        <div class="relative">
            <img src="./src/img/bg.png" alt="banner" class="z-10  w-full h-[100vh] lg:h-auto object-cover">
            <div class="w-full h-full bg-[#051a0493] z-20 opacity-100 absolute top-0 left-0"></div>
            <div class="z-30 absolute top-1/2 left-0 transform -translate-x-0 -translate-y-1/2 px-5 pl-[2rem] mr-0 lg:mr-[30rem] flex-flex-col gap-5">
                <h3 class="text-white text-md lg:text-3xl" style="line-height: 3rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia quaerat omnis repellendus ullam? A cumque aperiam adipisci nesciunt distinctio hic. Lorem ipsum dolor sit amet consectetur.</h3>
                <button class="bg-green-500 p-3 mt-[2rem] text-white rounded-xl">Read More</button>
            </div>
            <div class="flex justify-end absolute bottom-0 z-30 w-full container px-[2rem] mb-5  mx-auto">
                <button class="bg-green-500 p-3 text-white rounded-xl">Contact Us</button>
            </div>
        </div>
        <div id="observe" class="relative bg-[#004225] p-[2rem] pb-[5rem]">
            <h1 class="text-white text-[3em] font-bold py-[3rem] text-center md:text-left">What We Observe ?</h1>
            <div class="flex justify-center gap-5 flex-wrap">
                <img class="aspect-square object-cover w-[20rem] rounded-xl h-full " src="./src/img/bg1.png" alt="bg1">
                <img class="aspect-square object-cover w-[20rem] rounded-xl h-full " src="./src/img/bg-2.jpg" alt="bg2">
                <img class="aspect-square object-cover w-[20rem] rounded-xl h-full " src="./src/img/bg-3.png" alt="bg3">
                <img class="aspect-square object-cover w-[20rem] rounded-xl h-full " src="./src/img/bg-4.png" alt="bg4">
            </div>
        </div>
        <div id="penjelasan" class="relative p-[2rem] flex flex-col gap-4 bg-no-repeat bg" style=" background-image: url('./src/img/bg.png'); background-size: cover; background-position: center;">
            <div class="w-full h-full bg-[#051a0493] z-20 opacity-100 absolute top-0 left-0"></div>
            <div class="mx-auto z-30 my-5">
                <img src="./src/img/logo.svg" alt="logo" id="logo">
            </div>
            <p class="text-white text-[1.1em] leading-8 z-30 px-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, voluptatibus consectetur et optio fugiat quia obcaecati laboriosam porro eligendi. Iste officiis accusantium ullam sunt vel vitae cumque omnis cum minima voluptatum illum doloribus, ad veniam cupiditate dicta architecto quos recusandae id maxime deleniti? Fugit autem, ipsum nemo non velit aspernatur. Dolorum consequuntur blanditiis reprehenderit laborum sapiente a dolor repellat nobis. Iste quaerat corporis, quidem dolorum voluptatum a asperiores placeat illo, officiis alias repellendus fugiat deserunt veniam suscipit ratione nobis mollitia amet beatae temporibus! Mollitia asperiores, explicabo voluptate distinctio animi eveniet impedit fugiat harum aliquam velit ab veritatis neque provident? Tempora. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident vitae omnis odio ex quaerat aspernatur recusandae et accusamus, voluptate enim cumque iusto nostrum repellat reprehenderit saepe quam ipsum eveniet laudantium consectetur magni labore ullam soluta eos magnam? Beatae enim quae soluta maiores sed fuga, dolore minima sit repudiandae repellat id neque consectetur rem mollitia animi quisquam maxime sint iusto! Nihil voluptate ipsum harum atque dignissimos aspernatur ad facilis! Quis natus accusantium itaque voluptate pariatur quam consequuntur illum ab, provident ut harum libero, ullam delectus et. Id voluptatem sed aut quod porro itaque dolor corrupti saepe. Est consequatur dignissimos consectetur? Debitis molestiae doloribus, ad, officiis numquam temporibus non doloremque iure autem laudantium mollitia dolorum. Tempore velit similique iusto sint quibusdam id illum, odit rem. Adipisci tempora, sequi reprehenderit natus facilis consequuntur libero officiis voluptatibus dicta. Officia magni rem perspiciatis, consequatur vel porro doloremque aspernatur facilis error, quis recusandae! Laudantium consequuntur architecto, fugiat inventore quidem excepturi soluta placeat nam, molestias a aut aliquam alias? Illo voluptas modi obcaecati cumque dignissimos consequuntur rem similique, doloribus perspiciatis, repellendus porro suscipit veniam iusto optio sequi atque eum nam sed nihil exercitationem inventore? Nisi dolore nam alias, nostrum ipsum amet voluptas. Dolorum voluptatum, maxime aperiam tempore obcaecati odio natus similique eius itaque, adipisci esse recusandae illum inventore, cum atque eveniet quod fugit! Ipsa at maxime sequi veniam inventore deleniti, iusto nihil nisi sunt fugit quis! Vero magni amet repellendus deserunt possimus doloribus cum, error minima provident eligendi dolorum voluptas veniam ut sit corrupti qui officiis molestias id accusantium asperiores eveniet temporibus distinctio architecto quo? Ad aperiam perferendis, nobis sed delectus nihil. Delectus dolorum, maxime rem corporis dolor esse tempore consectetur illum perspiciatis accusamus, fugit aut temporibus a, aliquam consequatur quidem omnis facere quo magnam! Molestiae itaque nemo qui? Animi laborum pariatur culpa odit, quibusdam consequuntur ipsum?</p>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("a").on('click', function(event) {


                if (this.hash !== "") {

                    event.preventDefault();


                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {


                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        const header = document.querySelector('#header');

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                header.style.backgroundColor = "black";

            } else {
                header.style.backgroundColor = "transparent";

            }
        }
    </script>
</body>

</html>