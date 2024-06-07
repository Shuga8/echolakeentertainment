<x-template :title="$title" :view="'admin.layouts.app'">

	<section class="bg-gray-50 dark:bg-gray-900">
		<div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
			<a class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white" href="/">
				<img class="mr-2 h-8 w-8" src="{{ asset('assets/img/logo.png') }}" alt="logo">
				{{ config('app.name') }}
			</a>
			<div
				class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
				<div class="space-y-4 p-6 sm:p-8 md:space-y-6">
					<h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
						Admin Login
					</h1>
					<form class="space-y-4 md:space-y-6" action="#">
						<div>
							<label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Email</label>
							<input
								class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
								id="email" name="email" type="email" placeholder="email@mail.com" required="">
						</div>
						<div>
							<label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="password">Password</label>
							<input
								class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
								id="password" name="password" type="password" placeholder="••••••••" required="">
						</div>
						<div class="flex items-center justify-between">
							<div class="flex items-start">
								<div class="flex h-5 items-center">
									<input
										class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
										id="remember" name="remember" type="checkbox" aria-describedby="remember" required="">
								</div>
								<div class="ml-3 text-sm">
									<label class="text-gray-500 dark:text-gray-300" for="remember">Remember me</label>
								</div>
							</div>

						</div>
						<button
							class="w-full rounded-lg bg-primary-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
							type="submit">Sign in</button>


					</form>
				</div>
			</div>
		</div>
	</section>
</x-template>
