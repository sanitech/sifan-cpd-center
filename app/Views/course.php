<?php
include_once 'include/header.php';
?>

<!-- seo-info start -->
<?php
include_once 'include/seoHeader.php';
?>
<!-- seo-info end -->


<!-- navbar start -->
<?php
include_once 'include/navbar.php';
?>
<!-- navbar end -->

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
</script>


<!-- main section start -->

<header class="content-header">

    <div class="content-header-thumbnail">
        <img src="" alt="">
        <h1 class="content-header-text">Course </h1>
        <h3 class="content-header-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facilis est magnam aut ipsum quasi laborum perspiciatis nisi nulla incidunt?</h3>
    </div>
</header>


<?php
include_once 'courseFetch.php';
?>

<!-- main section end -->



<!-- <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div>Loading</div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                    <div class="lg:h-48 bg-gray-400 md:h-36 w-full object-cover object-center"></div>
                    <div class="p-6">
                        <h2 class="bg-gray-400 animate-pulse h-4 w-1/4 mb-2"></h2>
                        <h1 class="w-1/2 mb-4 h-6 animate-pulse bg-gray-500"></h1>
                        <p class="leading-relaxed mb-3 w-full h-3 animate-pulse bg-gray-400"></p>
                        <p class="leading-relaxed mb-3 w-2/3 h-3 animate-pulse bg-gray-400"></p>
                        <p class="leading-relaxed mb-3 w-1/2 h-3 animate-pulse bg-gray-400"></p>
                        <div class="flex items-center flex-wrap ">
                            <a class="bg-indigo-300 h-4 animate-pulse mt-2 w-32 inline-flex items-center md:mb-2 lg:mb-0">

                            </a>
                            <span class="bg-indigo-300 w-16 mt-2 h-4 animate-pulse mr-3 px-2 inline-flex items-center ml-auto leading-none text-sm pr-5 py-1">

                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                    <div class="lg:h-48 bg-gray-400 md:h-36 w-full object-cover object-center"></div>
                    <div class="p-6">
                        <h2 class="bg-gray-400 animate-pulse h-4 w-1/4 mb-2"></h2>
                        <h1 class="w-1/2 mb-4 h-6 animate-pulse bg-gray-500"></h1>
                        <p class="leading-relaxed mb-3 w-full h-3 animate-pulse bg-gray-400"></p>
                        <p class="leading-relaxed mb-3 w-2/3 h-3 animate-pulse bg-gray-400"></p>
                        <p class="leading-relaxed mb-3 w-1/2 h-3 animate-pulse bg-gray-400"></p>
                        <div class="flex items-center flex-wrap ">
                            <a class="bg-indigo-300 h-4 animate-pulse mt-2 w-32 inline-flex items-center md:mb-2 lg:mb-0">

                            </a>
                            <span class="bg-indigo-300 w-16 mt-2 h-4 animate-pulse mr-3 px-2 inline-flex items-center ml-auto leading-none text-sm pr-5 py-1">

                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                    <div class="lg:h-48 bg-gray-400 md:h-36 w-full object-cover object-center"></div>
                    <div class="p-6">
                        <h2 class="bg-gray-400 animate-pulse h-4 w-1/4 mb-2"></h2>
                        <h1 class="w-1/2 mb-4 h-6 animate-pulse bg-gray-500"></h1>
                        <p class="leading-relaxed mb-3 w-full h-3 animate-pulse bg-gray-400"></p>
                        <p class="leading-relaxed mb-3 w-2/3 h-3 animate-pulse bg-gray-400"></p>
                        <p class="leading-relaxed mb-3 w-1/2 h-3 animate-pulse bg-gray-400"></p>
                        <div class="flex items-center flex-wrap ">
                            <a class="bg-indigo-300 h-4 animate-pulse mt-2 w-32 inline-flex items-center md:mb-2 lg:mb-0">

                            </a>
                            <span class="bg-indigo-300 w-16 mt-2 h-4 animate-pulse mr-3 px-2 inline-flex items-center ml-auto leading-none text-sm pr-5 py-1">

                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<?php
include_once 'include/faq.php';

?>

<!-- footer start -->
<?php
include_once 'include/footer.php';
?>
<!-- footer end -->