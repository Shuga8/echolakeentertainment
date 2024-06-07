<x-template :title="$title" :view="'admin.layouts.app'">

	<section class="bg-gray-50 dark:bg-gray-900">
		<div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
			<a class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white" href="#">
				<img class="mr-2 h-8 w-8" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
				Flowbite
			</a>
			<div
				class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
				<div class="space-y-4 p-6 sm:p-8 md:space-y-6">
					<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
						Sign in to your account
					</h1>
					<form class="space-y-4 md:space-y-6" action="#">
						<div>
							<label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Your email</label>
							<input
								class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
								id="email" name="email" type="email" placeholder="name@company.com" required="">
						</div>
						<div>
							<label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="password">Password</label>
							<input
								class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
								id="password" name="password" type="password" placeholder="••••••••" required="">
						</div>
						<div class="flex items-center justify-between">
							<div class="flex items-start">
								<div class="flex h-5 items-center">
									<input
										class="focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 h-4 w-4 rounded border border-gray-300 bg-gray-50 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800"
										id="remember" type="checkbox" aria-describedby="remember" required="">
								</div>
								<div class="ml-3 text-sm">
									<label class="text-gray-500 dark:text-gray-300" for="remember">Remember me</label>
								</div>
							</div>
							<a class="text-primary-600 dark:text-primary-500 text-sm font-medium hover:underline" href="#">Forgot
								password?</a>
						</div>
						<button
							class="bg-primary-600 hover:bg-primary-700 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4"
							type="submit">Sign in</button>
						<p class="text-sm font-light text-gray-500 dark:text-gray-400">
							Don’t have an account yet? <a class="text-primary-600 dark:text-primary-500 font-medium hover:underline"
								href="#">Sign up</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</section>
</x-template>
