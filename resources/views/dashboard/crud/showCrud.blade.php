<x-app-layout>
    <div class="grid grid-cols-1 px-4 pt-6 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            @include('shared.breadcrumb')
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">CRUD</h1>
        </div>
        <div class="">
            <!-- 2 columns -->
            <div class="grid grid-cols-1 mb-4 xl:gap-4">
                <!-- Activity Card -->
                <!--Carousel widget -->
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div id="carousel" class="relative">
                        <div class="relative mx-auto overflow-hidden h-[36rem] lg:h-[24rem]">
                            <div
                                class="z-0 duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform translate-x-0 z-20">
                                <div class="flex items-center mb-4 text-lg font-medium text-primary-600">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z"
                                        ></path>
                                    </svg>
                                    Welcome to the CRUD panel
                                </div>
                                <p class="mb-4 text-gray-500 dark:text-gray-400">
                                    Create, Read, Update, Delete (or archive) resource of your SaaS. Generally speaking,
                                    this part is only viewed by admin.
                                </p>
                                <p class="mb-4 text-lg font-medium text-gray-900 dark:text-white">Where you can go from
                                    here :</p>
                                <ul role="list" class="pl-2 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                             aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Blog articles can be listed on the <a href="/dashboard/crud/articles"
                                                                                                          class="font-medium text-blue-600 dark:text-blue-500 hover:underline">articles page</a> </span>
                                    </li>
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                             aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Users can view also viewed on the <a href=""
                                                                                                         class="font-medium text-blue-600 dark:text-blue-500 hover:underline">users page</a> </span>
                                    </li>
                                </ul>
                                <a href="/dashboard/crud/articles"
                                   class="inline-flex items-center p-2 font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                    Let's start
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
