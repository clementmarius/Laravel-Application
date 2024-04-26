<footer class="bg-white dark:bg-gray-900 p-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            @include('components/logo')
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="/about" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="/contact" class="hover:underline me-4 md:me-6">Contact Us</a>
                </li>
                <li>
                    <a href="/faq" class="hover:underline me-4 md:me-6">FAQ</a>
                </li>
                <li>
                    <a href="/pricing" class="hover:underline me-4 md:me-6">Pricing</a>
                </li>
                <li>
                    <a href="/terms" class="hover:underline me-4 md:me-6">Terms and conditions</a>
                </li>
                <li>
                    <a href="/blog" class="hover:underline me-4 md:me-6">Blog</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->year }} <a href="/" class="hover:underline">SaasLitDemo™</a>. All Rights Reserved.</span>
    </div>
</footer>
