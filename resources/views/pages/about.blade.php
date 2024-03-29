@extends('template/template')
@section('pages')
    <section class="py-8 bg-white lg:py-24 dark:bg-gray-900 mt-16">
        <div class="max-w-4xl px-4 mx-auto lg:px-4 format dark:format-invert">
            <h1 class="mb-6 text-3xl font-bold text-gray-900 lg:text-4xl dark:text-white">About</h1>
            <p class="mb-10 text-lg text-gray-600 dark:text-gray-400 lg:text-lg">Welcome to the demo of saaslit. Here are instructions to discover the live application you will get once you bought a license</p>
            <hr class="my-12 border-gray-200 dark:border-gray-800">
            <h2 class="mb-4" id="contact">Difference between demo and actual app</h2>
            <ul>
                <li>
                    The landing page has links to the "about" page, whereas actual saaslit homepage is less opionated - you can change the links and text as you wish.
                </li>
                <li>
                    The about page is also filled with dummy text, whereas here on the demo you have actual instructions.
                </li>
                <li>
                    The fake mailbox is <a href="/letter_opener">letter_opener</a> in the demo, whereas MailTrap will be used in the actual app.
                </li>
            </ul>
            <h2 class="mb-4" id="contact">Contact us</h2>
            <p>If you have any question about this demo, please contact us at contact at saaslit dot com</p>
            <h2 class="mb-4" id="contact">Signup flow</h2>
            <p>You can go to the <a href="/sign_up">Signup page</a> and create a new account.</p>
            <p>Then to go the fake mailbox <a href="/letter_opener">letter_opener</a> and click on the link to confirm your account</p>
            <p>By default, all new accounts are "customer"</p>
            <h2 class="mb-4" id="contact">Things that your users can do</h2>
            <ul>
                <li>
                    They can <a href="/dashboard/account/password/edit">change their password</a>
                </li>
                <li>
                    They can <a href="/dashboard/account/email/edit">change their email</a>
                </li>
                <li>
                    They can <a href="/dashboard/account/profile">delete their account</a>
                </li>
                <li>
                    They can <a href="/dashboard/account/sessions">manage their sessions</a>
                </li>
            </ul>
            <h2 class="mb-4" id="contact">Sign in as admin</h2>
            <p>By default there is an admin account with credentials admin@user.com Secret1*3*5*</p>
            <p>Now you can play with the blog by adding/modifying blog articles</p>
            <p>Note that we use plain Markdown to blog, the goal here is to go fast to production</p>
            <h2 class="mb-4" id="contact">Things that an admin can do</h2>
            <ul>
                <li>
                    They can do all what a regular user can do about the password, email, profile and sessions (see above)
                </li>
                <li>
                    They can <a href="/dashboard/crud/articles">List all blog articles</a>
                </li>
                <li>
                    They can <a href="/dashboard/crud/articles">Sort, paginate, filter</a> all blog articles
                </li>
                <li>
                    They can <a href="/dashboard/crud/articles/new">create</a> a new blog article (Markdown is used for content)
                </li>
                <li>
                    They can <a href="/dashboard/crud/articles/1/edit">update</a> existing blog article
                </li>
                <li>
                    They can <a href="/dashboard/crud/articles">delete</a> a blog article
                </li>
                <li>
                    They can <a href="/dashboard/account/sessions">view</a> a blog article in the admin dashboard
                </li>
                <li>
                    They are allowed to view blog articles in the frontend, even if they are not yet published. Unpublished article will not be seen from the wild Internet.
                </li>
                <li>
                    They can <a href="/dashboard/crud/users">List all users</a>
                </li>
                <li>
                    They can <a href="/dashboard/crud/users">Sort, paginate, filter</a> all users
                </li>
                <li>
                    They can <a href="/dashboard/crud/users/new">create</a> a new user
                </li>
                <li>
                    They can <a href="/dashboard/crud/users/1/edit">update</a> existing user
                </li>
                <li>
                    They can <a href="/dashboard/crud/users">delete</a> an user
                </li>
                <li>
                    They can <a href="/dashboard/account/sessions">view</a> an user in the admin dashboard
                </li>
            </ul>
        </div>
    </section>
@endsection
