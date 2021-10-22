<form action="#" method="POST" class="max-w-md md:max-w-sm mx-auto md:mx-0">
    <div class="rounded-lg bg-white border border-gray-200 shadow">
        <div class="py-6 px-4 space-y-6 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Book Time Off
            </h3>
    
            <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6">
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                        Leave Type
                    </label>
                    <div class="mt-1 relative">
                        <button class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                            @click="showLeaveTypeDropdown = !showLeaveTypeDropdown" 
                            type="button"
                        >
                            <div class="flex items-center">
                                <span class="bg-purple-400 flex-shrink-0 inline-block h-2 w-2 rounded-full"></span>
                                <span class="ml-3 block truncate">
                                    Vacation
                                </span>
                            </div>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/selector -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>

                        <ul class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-10 overflow-auto focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3"
                            x-show="showLeaveTypeDropdown"
                            x-transition:enter="transition ease-in duration-100"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            @click.away="showLeaveTypeDropdown = false"
                        >
                            <!--
                            Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                            Highlighted: "text-white bg-blue-600", Not Highlighted: "text-gray-900"
                            -->
                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <div class="flex items-center">
                                    <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                                    <span class="bg-purple-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                    <span class="font-semibold ml-3 block truncate">
                                        Vacation
                                    </span>
                                </div>

                                <span class="text-blue-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>

                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <div class="flex items-center">
                                    <span class="bg-red-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                    <span class="font-normal ml-3 block truncate">
                                        Sick
                                    </span>
                                </div>

                                <span class="hidden absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>

                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <div class="flex items-center">
                                    <span class="bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                    <span class="font-normal ml-3 block truncate">
                                        Personal
                                    </span>
                                </div>

                                <span class="hidden absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-6">
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                        Duration
                    </label>
                    <div class="mt-1 relative">
                        <button @click="showLeaveDurationDropdown = !showLeaveDurationDropdown" type="button" class="bg-white relative w-full border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <span class="block truncate">
                                One full day
                            </span>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/selector -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>

                        <ul class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-10 overflow-auto focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3"
                            x-show="showLeaveDurationDropdown" 
                            x-transition:enter="transition ease-in duration-100"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            @click.away="showLeaveDurationDropdown = false"
                        >
                            <!--
                            Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                            Highlighted: "text-white bg-blue-600", Not Highlighted: "text-gray-900"
                            -->
                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-semibold block truncate">
                                    One full day
                                </span>

                                <!--
                                    Checkmark, only display for selected option.

                                    Highlighted: "text-white", Not Highlighted: "text-blue-600"
                                -->
                                <span class="text-blue-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>

                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-normal block truncate">
                                    First half of day
                                </span>

                                <!--
                                    Checkmark, only display for selected option.

                                    Highlighted: "text-white", Not Highlighted: "text-blue-600"
                                -->
                                <span class="hidden text-blue-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>

                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-normal block truncate">
                                    Second half of day
                                </span>

                                <!--
                                    Checkmark, only display for selected option.

                                    Highlighted: "text-white", Not Highlighted: "text-blue-600"
                                -->
                                <span class="hidden text-blue-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>

                            <li class="text-gray-900 hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-normal block truncate">
                                    Multiple days
                                </span>

                                <!--
                                    Checkmark, only display for selected option.

                                    Highlighted: "text-white", Not Highlighted: "text-blue-600"
                                -->
                                <span class="hidden text-blue-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>

                            <!-- More items... -->
                        </ul>
                    </div>
                </div>

                <div class="col-span-6">
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                        Date
                    </label>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input id="single-date" type="text" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
                    </div>
                </div>

                <!-- https://wakirin.github.io/Lightpick/ -->
                <div class="col-span-6">
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                        Date Range
                    </label> 
                    <div date-rangepicker class="flex items-center">
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input id="start-date" type="text" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Start date">
                        </div>
                        <span class="mx-2 text-gray-500">to</span>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input id="end-date" type="text" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="End date">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 rounded-b-lg sm:px-6">
            <button type="submit" class="w-full bg-blue-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Book Time Off
            </button>
        </div>
    </div>
</form>