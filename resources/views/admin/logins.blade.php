<x-template :title="$title" :view="'admin.layouts.app'">
	@include('admin.partials._navbar')


	<div class="content-container px-6 py-4">

		<h1 class="py-3 text-xl font-extrabold uppercase text-teal-700 dark:text-white">Admin Logins</h1>
		<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
			<table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
				<thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th class="px-6 py-3" scope="col">
							Admin ID
						</th>
						<th class="px-6 py-3" scope="col">
							IP Address
						</th>
						<th class="px-6 py-3" scope="col">
							City
						</th>
						<th class="px-6 py-3" scope="col">
							Country
						</th>
						<th class="px-6 py-3" scope="col">
							Country Code
						</th>
						<th class="px-6 py-3" scope="col">
							Browser
						</th>
						<th class="px-6 py-3" scope="col">
							OS
						</th>
					</tr>
				</thead>
				<tbody>
					@forelse($logins as $login)
						<tr class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
							<th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white" scope="row">
								{{ $login->admin_id }}
							</th>
							<td class="px-6 py-4">
								{{ $login->admin_ip }}
							</td>
							<td class="px-6 py-4">
								{{ $login->city }}
							</td>
							<td class="px-6 py-4">
								{{ $login->country }}
							</td>
							<td class="px-6 py-4">
								{{ $login->country_code }}
							</td>
							<td class="px-6 py-4">
								{{ $login->browser }}
							</td>
							<td class="px-6 py-4">
								{{ $login->os }}
							</td>
						</tr>
					@empty
						<tr class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
							<td class="text-center text-red-800" colspan="7">No Login Data Available</td>
							</td>
					@endforelse


				</tbody>
			</table>
		</div>

		<div class="pagination-links">

		</div>
	</div>
</x-template>
