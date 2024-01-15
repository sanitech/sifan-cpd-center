<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/app.js" defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous" />
</head>

<body>
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
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- navbar start -->
    <?php
    include_once 'include/navbar.php';
    ?>
    <!-- navbar end -->



    <!-- main section start -->


    <?php
    include_once 'courseFetch.php';
    ?>
    <!-- main section end -->


    <?php
    include_once 'include/faq.php';

    ?>

    <!-- footer start -->
    <?php
    include_once 'include/footer.php';
    ?>
    <!-- footer end -->