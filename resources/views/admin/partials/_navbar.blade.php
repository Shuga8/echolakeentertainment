<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
	<div class="px-3 py-3 lg:px-5 lg:pl-3">
		<div class="flex items-center justify-between">
			<div class="flex items-center justify-start rtl:justify-end">
				<button
					class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
					data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" type="button" aria-controls="logo-sidebar">
					<span class="sr-only">Open sidebar</span>
					<svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path clip-rule="evenodd" fill-rule="evenodd"
							d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
						</path>
					</svg>
				</button>
				<a class="ms-2 flex md:me-24" href="{{ route('admin.dashboard') }}">
					<img class="me-3 h-8" src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
					<span
						class="self-center whitespace-nowrap text-xs font-semibold uppercase dark:text-white sm:text-sm">{{ config('app.name') }}</span>
				</a>
			</div>
			<div class="flex items-center">
				<div class="ms-3 flex items-center gap-x-3">

					<button
						class="rounded-lg p-2.5 text-sm text-gray-500 outline-none hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
						id="theme-toggle" type="button">
						<svg class="hidden h-5 w-5" id="theme-toggle-dark-icon" fill="currentColor" viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
						</svg>
						<svg class="hidden h-5 w-5" id="theme-toggle-light-icon" fill="currentColor" viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
								fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div>
						<button class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
							data-dropdown-toggle="dropdown-user" type="button" aria-expanded="false">
							<span class="sr-only">Open user menu</span>
							<img class="h-8 w-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
								alt="user photo">
						</button>
					</div>
					<div
						class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
						id="dropdown-user">
						<div class="px-4 py-3" role="none">
							<p class="text-sm text-gray-900 dark:text-white" role="none">
								Admin
							</p>
							<p class="truncate text-sm font-medium text-gray-900 dark:text-gray-300" role="none">
								{{ $admin->email }}
							</p>
						</div>
						<ul class="py-1" role="none">
							<li>
								<a
									class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
									href="{{ route('admin.dashboard') }}" role="menuitem">Dashboard</a>
							</li>


							<li>
								<a
									class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
									href="{{ route('admin.auth.logout') }}" role="menuitem">Sign out</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<aside
	class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-20 transition-transform dark:border-gray-700 dark:bg-gray-800 sm:translate-x-0"
	id="logo-sidebar" aria-label="Sidebar">
	<div class="h-full overflow-y-auto bg-white px-3 pb-4 dark:bg-gray-800">
		<ul class="space-y-2 font-medium">
			<li>
				<a
					class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
					href="{{ route('admin.dashboard') }}">
					<svg
						class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
						aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
						<path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
						<path
							d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
					</svg>
					<span class="ms-3">Dashboard</span>
				</a>
			</li>

			<li>
				<a
					class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
					href="{{ route('admin.mailForm') }}">
					<svg
						class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
						aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
					</svg>
					<span class="ms-3 flex-1 whitespace-nowrap">Mail</span>
				</a>

			</li>

		</ul>
	</div>
</aside>

<br>
<br>
<br>
@push('styles')
	<style>
		@media(min-width: 640px) {
			.content-container {
				margin-left: 250px;
			}
		}
	</style>
@endpush
