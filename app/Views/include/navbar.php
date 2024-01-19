<nav class="shadow-sm border-gray-200 dark:bg-gray-900 dark:border-gray-700 navigation">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="<?php echo base_url('/') ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?php echo $logo ?>" class="h-10" alt="sifan-cpd-center-logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SIFAN-CPD</span>
        </a>

        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:text-gray-100  dark:border-gray-700">
                <li>
                    <a href="<?php echo base_url('/') ?>" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                </li>

                <li>
                    <a href="<?php echo base_url('course') ?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Course</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/#abouts') ?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About US</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/contact') ?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact us</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/faq') ?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">FAQs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>