<?php include 'includes/header.php'; ?>

<main class="container mx-auto py-8">
    <!-- Success message -->
    <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
        <div class="bg-green-500 text-white p-4 mb-8 rounded">
            <p>Your message has been sent successfully. Thank you!</p>
        </div>
    <?php endif; ?>
    <!-- Contact form -->
    <form action="process_contact.php" method="post">
        <div class="mb-4">
            <label for="name" class="block mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2">
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2">
        </div>

        <div class="mb-4">
            <label for="subject" class="block mb-2">Subject:</label>
            <input type="text" id="subject" name="subject" class="w-full px-4 py-2">
        </div>

        <div class="mb-4">
            <label for="message" class="block mb-2">Message:</label>
            <textarea id="message" name="message" rows="6" class="w-full px-4 py-2"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
