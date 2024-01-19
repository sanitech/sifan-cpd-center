<section class="bg-white dark:bg-gray-950 ">
    <div class="py-2 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 after-linear">


        <section class="course-list-section">
            <div class="filter-container">
                <form>
                    <div class="flex">
                        <div class="flex-shrink-0 z-10 whitespace-nowrap inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill px-auto" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z" />
                            </svg>
                            Filter
                        </div>
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <div @click="open = !open" class="flex-shrink-0 z-10 whitespace-nowrap inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300  hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                                All Category
                                <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>

                            <div x-show="open" @click.away="open = false" class="origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 px-2 py-2 ">
                                <?php foreach ($category as $category) : ?>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-500 rounded-md" onclick="searchCourse('<?php echo $category['cat_id'] ?>')"><?php echo $category['category'] ?></a>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="relative w-full">
                            <input type="search" onkeyup="searchCourse()" id="course" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-gray-200 focus:border-gray-200 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-gray-500" placeholder="Search course..." required>
                            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gray-900 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- filter end -->




            <!-- course start -->
            <div class="course-list-container " id="courseContainer">
                <?php
                foreach ($course as $course) :
                    $id = $course['co_id'];
                ?>
                    <a href="<?php echo base_url("course/$id") ?>" class="course-card">
                        <div class="course-thumbnail">
                            <img src="<?php echo  base_url('/uploads') . '/' . $course['thumbnail'] ?>" alt="" class="category-thu" />

                        </div>
                        <div class="course-info-card">
                            <h3 class="course-title"><?php echo $course['course'] ?></h3>
                            <div class="course-desc"><?php echo $course['disc'] ?></div>
                        </div>
                        <div class="course-info-footer">
                            <div class="course-hour">
                                <i class="bi bi-clock"></i><span><?php echo $course['cr_hr'] ?>hr</span>
                            </div>
                            <div class="course-rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </a>

                <?php
                endforeach;
                ?>



            </div>


        </section>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script>
    // Function to toggle the dropdown
    function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
        if (isDropdownOpen) {
            dropdownMenu.classList.remove('hidden');
        } else {
            dropdownMenu.classList.add('hidden');
        }
    }

    toggleDropdown();

    // Toggle the dropdown when the button is clicked
    dropdownButton.addEventListener('click', toggleDropdown);

    // Close the dropdown when clicking outside of it
    window.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
            isDropdownOpen = false;
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    const searchCourse = (id) => {
        $.ajax({
            url: `/fetchCourse`,
            method: 'POST',
            data: {
                course: $('#course').val(),
                category: id,
            },
            success: function(result) {
                $("#courseContainer").html(result);
            }
        });
    }
</script>