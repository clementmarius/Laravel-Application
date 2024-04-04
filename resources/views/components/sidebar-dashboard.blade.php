<?php

$a_active_class =
"text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700  bg-gray-100 dark:bg-gray-700 ";
$a_class =
"flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700";
$a_leftactive_class =
"flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700  bg-gray-100 dark:bg-gray-700 ";
$a_left_class =
"flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700";
$a_active_button_class =
"flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group bg-gray-100 dark:text-gray-200 dark:bg-gray-700";
$a_button_class =
"flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" ;

?>


<aside id="default-sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidenav">
{{--    fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width--}}
{{--    fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0--}}
    <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div
                class="
          flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800
          dark:divide-gray-700
        "
            >
                <ul class="pb-2 space-y-2">
                    <li>
                        <a
                            href="/dashboard"
                            class="<?php echo $_SERVER['REQUEST_URI'] == '/dashboard' ? $a_leftactive_class : $a_left_class ?>"
                            <?php echo $_SERVER['REQUEST_URI'] == '/dashboard' ? 'aria-current="page"' : '' ?>
                        >
                        <svg
                            class="
                  w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900
                  dark:text-gray-400 dark:group-hover:text-white
                "
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3" sidebar-toggle-item="">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="<?php echo $_SERVER['REQUEST_URI'] == "" ? $a_active_button_class : $a_button_class ?>"
                            aria-controls="dropdown-auth"
                            data-collapse-toggle="dropdown-auth"
                            id="accountoggler"
                        >
                            <svg
                                class="
                  flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75
                  group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white
                "
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Account</span>
                            <svg
                                sidebar-toggle-item=""
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <ul id="dropdown-auth" class="py-2 space-y-2">
                            <li>
                                <a
                                    href="/dashboard/account/profile"
                                    class="<?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/profile' ? $a_leftactive_class : $a_left_class ?>"
                                <?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/profile' ? 'aria-current="page"' : '' ?>
                                >Profile</a>
                            </li>
                            <li>
                                <a
                                    href="/dashboard/account/email/edit"
                                    class="<?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/email/edit' ? $a_leftactive_class : $a_left_class ?>"
                                <?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/email/edit' ? 'aria-current="page"' : '' ?>
                                >Email</a>
                            </li>
                            <li>
                                <a
                                    href="/dashboard/account/password/edit"
                                    class="<?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/password/edit' ? $a_leftactive_class : $a_left_class ?>"
                                <?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/password/edit' ? 'aria-current="page"' : '' ?>
                                >Password</a>
                            </li>
                            <li>
                                <a
                                    href="/dashboard/account/sessions"
                                    class="<?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/sessions' ? $a_leftactive_class : $a_left_class ?>"
                                <?php echo $_SERVER['REQUEST_URI'] == '/dashboard/account/sessions' ? 'aria-current="page"' : '' ?>
                                >Sessions</a>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <button
                            type="button"
                            class="<?php echo $a_active_button_class?>"
                            aria-controls="dropdown-crud"
                            data-collapse-toggle="dropdown-crud"
                        >
                            <svg
                                class="
                    flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75
                    group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                            >
                                <path
                                    clip-rule="evenodd"
                                    fill-rule="evenodd"
                                    d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z"
                                ></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">CRUD</span>
                            <svg
                                sidebar-toggle-item=""
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <ul id="dropdown-crud" class="py-2 space-y-2">
                            <li>
                                <a
                                    href="/dashboard/crud/articles"
                                    class="<?php echo $a_class?>"
                                >Articles</a>
                            </li>
                            <li>
                                <a
                                    href="/dashboard/crud/users"
                                    class="<?php echo $a_class?>"
                                >Users</a>
                            </li>
                        </ul>

                    </li>
                </ul>
                <div class="pt-2 space-y-2">
                    <a
                        href="https://flowbite.com/docs/getting-started/introduction/"
                        target="_blank"
                        class="
              flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg
              hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700
            "
                    >
                        <svg
                            class="
                flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75
                group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white
              "
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path
                                fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="ml-3" sidebar-toggle-item="">Flowbite Docs</span>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="
        absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white
        lg:flex dark:bg-gray-800
      "
            sidebar-bottom-menu=""
        >
            <a
                href="/dashboard"
                class="
          inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer
          hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700
          dark:hover:text-white
        "
            >
                <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"
                    ></path>
                </svg>
            </a>
            <a
                href="/dashboard/account"
                data-tooltip-target="tooltip-settings"
                class="
          inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer
          hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700
          dark:hover:text-white
        "
            >
                <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </a>
            <div
                id="tooltip-settings"
                role="tooltip"
                class="
          absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white
          transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0
          tooltip dark:bg-gray-700
        "
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(71px, -64px);"
                data-popper-placement="top"
            >
                Profile page
                <div
                    class="tooltip-arrow"
                    data-popper-arrow=""
                    style="position: absolute; left: 0px; transform: translate(55px);"
                ></div>
            </div>
            <button
                type="button"
                data-dropdown-toggle="language-dropdown"
                class="
          inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer
          hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700
          dark:hover:text-white
        "
            >
                <svg
                    class="h-5 w-5 rounded-full mt-0.5"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 3900 3900"
                >
                    <path fill="#b22234" d="M0 0h7410v3900H0z"></path>
                    <path
                        d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"
                        stroke="#fff"
                        stroke-width="300"
                    ></path>
                    <path fill="#3c3b6e" d="M0 0h2964v2100H0z"></path>
                    <g fill="#fff">
                        <g id="d">
                            <g id="c">
                                <g id="e">
                                    <g id="b">
                                        <path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"></path>
                                        <use xlink:href="#a" y="420"></use>
                                        <use xlink:href="#a" y="840"></use>
                                        <use xlink:href="#a" y="1260"></use>
                                    </g>
                                    <use xlink:href="#a" y="1680"></use>
                                </g>
                                <use xlink:href="#b" x="247" y="210"></use>
                            </g>
                            <use xlink:href="#c" x="494"></use>
                        </g>
                        <use xlink:href="#d" x="988"></use>
                        <use xlink:href="#c" x="1976"></use>
                        <use xlink:href="#e" x="2470"></use>
                    </g>
                </svg>
            </button>
            <div
                class="
          z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded
          shadow dark:bg-gray-700
        "
                id="language-dropdown"
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(184px, 889px);"
                data-popper-placement="bottom"
            >
                <ul class="py-1" role="none">
                    <li>
                        <a
                            href="#"
                            class="
                block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400
                dark:hover:bg-gray-600 dark:hover:text-white
              "
                            role="menuitem"
                        >
                            <div class="inline-flex items-center">
                                <svg
                                    class="h-3.5 w-3.5 rounded-full mr-2"
                                    xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-us"
                                    viewBox="0 0 512 512"
                                >
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path
                                                fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)"
                                            ></path>
                                            <path
                                                fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)"
                                            ></path>
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"></path>
                                        <path
                                            fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)"
                                        ></path>
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
