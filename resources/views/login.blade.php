<x-guest-layout>
	<div class="flex flex-col items-center justify-center py-32 bg-gray-100">
		<h1 class="font-medium text-4xl text-center pb-4">
			Leave<span class="text-blue-500">Management</span>
		</h1>
		<a class="flex flex-inline items-center px-4 py-2 bg-blue-500 text-white font-medium hover:bg-blue-600"
			href="{{ route('auth.google') }}"
		>
			<img class="bg-white p-1 -ml-1 mr-2" 
				src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
			>

			<h2 class="text-lg">
				Sign in with Google
			</h2>
		</a>
	</div>	
</x-guest-layout>