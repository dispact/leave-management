<x-app-layout>
	<div class="px-2 py-4" x-data="{
		showLeaveTypeDropdown: false,
		showLeaveDurationDropdown: false,
	}">
		@livewire('booking-form')
	</div>
	<x-slot name="scripts">
		<script>
		// Single date
		const picker = new Litepicker({ 
			element: document.getElementById('single-date'),
			singleMode: true,
			lockDaysFilter: (day) => {
				const d = day.getDay();

				return [6, 0].includes(d);
			},
		});

		// Multiple
		const multiPicker = new Litepicker({
			element: document.getElementById('start-date'),
			elementEnd: document.getElementById('end-date'),
			singleMode: false,
			allowRepick: true, 
			lockDaysFilter: (day) => {
				const d = day.getDay();

				return [6, 0].includes(d);
			},
		});
		</script>
	</x-slot>
</x-app-layout>