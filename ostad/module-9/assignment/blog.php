<?php include 'includes/header.php'; ?>

<main class="container mx-auto py-8">
    <div class="flex">
        <!-- Blog posts list -->
        <section class="w-2/3 pr-8">
            <!-- Post 1 -->
            <article class="mb-8">
                <img src="img/post1.jpg" alt="Post image" class="w-full h-64 object-cover mb-4">
                <h3 class="text-2xl mb-2">Post Title</h3>
                <p class="text-gray-700 mb-4">Post excerpt...</p>
                <a href="single-post.php" class="bg-blue-500 text-white px-4 py-2 rounded">Read More</a>
            </article>
            <!-- Post 2 -->
            <article class="mb-8">
                <img src="img/post1.jpg" alt="Post image" class="w-full h-64 object-cover mb-4">
                <h3 class="text-2xl mb-2">Post Title</h3>
                <p class="text-gray-700 mb-4">Post excerpt...</p>
                <a href="single-post.php" class="bg-blue-500 text-white px-4 py-2 rounded">Read More</a>
            </article>
            <!-- Post 3 -->
            <article class="mb-8">
                <img src="img/post1.jpg" alt="Post image" class="w-full h-64 object-cover mb-4">
                <h3 class="text-2xl mb-2">Post Title</h3>
                <p class="text-gray-700 mb-4">Post excerpt...</p>
                <a href="single-post.php" class="bg-blue-500 text-white px-4 py-2 rounded">Read More</a>
            </article>
            <!-- Add more posts as needed -->
        </section>

        <!-- Sidebar -->
        <aside class="w-1/3">
            <!-- Search bar -->
            <div class="bg-gray-200 p-4 mb-8 rounded">
                <input type="text" placeholder="Search" class="w-full px-4 py-2">
            </div>

            <!-- Categories -->
            <div class="bg-gray-200 p-4 rounded">
                <h4 class="text-xl mb-4">Categories</h4>
                <ul>
                    <li><a href="#">Category 1</a></li>
                    <li><a href="#">Category 2</a></li>
                    <li><a href="#">Category 3</a></li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
