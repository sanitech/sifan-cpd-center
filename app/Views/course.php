<?php
include_once 'include/header.php';
?>

<!-- seo-info start -->

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
<!-- <header class="content-header linear-bg">

    <div class="content-header-thumbnail">
        <img src="" alt="">
        <h1 class="content-header-text">Course</h1>
        <h3 class="content-header-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facilis est magnam aut ipsum quasi laborum perspiciatis nisi nulla incidunt?</h3>
    </div>
</header> -->

<section class="bg-white linear-bg">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Enroll now and unlock your potential.</h2>
            <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">Keep it concise and easy to understand.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">

                <!-- <a href="#" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                    </svg>
                    View Courses
                </a> -->
            </div>
        </div>
    </div>
</section>


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