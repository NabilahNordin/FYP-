<x-filament-panels::page>


    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto p-6"> <!-- Header -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Attendance Analysis</h1>
                        <p class="text-sm text-gray-500 mt-1">Viewing: BICS1305 - 2</p>
                    </div>
                    <div class="flex items-center space-x-4"> <!-- Course Selector Tabs -->
                        <div class="flex bg-gray-100 rounded-lg p-1"> <button class="bg-teal-500 text-white px-4 py-2 rounded-md text-sm font-medium">BICS1305</button> <button class="text-gray-600 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-200">BICS2301</button> <button class="text-gray-600 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-200">INFO214</button> </div> <!-- Dropdowns and Actions --> <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option>BICS1305 - 2</option>
                        </select> <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option>All Time</option>
                        </select> <button class="flex items-center space-x-2 border border-gray-300 rounded-lg px-3 py-2 text-sm hover:bg-gray-50"> <i class="fas fa-download"></i> <span>CSV</span> </button> <button class="flex items-center space-x-2 bg-teal-500 text-white rounded-lg px-4 py-2 text-sm hover:bg-teal-600"> <i class="fas fa-file-pdf"></i> <span>PDF Report</span> </button>
                    </div>
                </div>
            </div> <!-- Metrics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8"> <!-- Average Attendance -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Average Attendance</h3>
                        <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center"> <i class="fas fa-chart-bar text-teal-600"></i> </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">81%</div>
                    <div class="flex items-center text-sm"> <i class="fas fa-target text-teal-500 mr-1"></i> <span class="text-gray-500">Target 90%</span> </div>
                </div> <!-- Punctuality Score -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Punctuality Score</h3>
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center"> <i class="fas fa-clock text-green-600"></i> </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">91%</div>
                    <div class="text-sm text-gray-500">On-time arrivals</div>
                </div> <!-- Total Enrollment -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Total Enrollment</h3>
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center"> <i class="fas fa-users text-blue-600"></i> </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">3</div>
                    <div class="text-sm text-gray-500">Active Students</div>
                </div> <!-- Weekly Trend -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Weekly Trend</h3>
                        <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center"> <i class="fas fa-trending-up text-emerald-600"></i> </div>
                    </div>
                    <div class="text-3xl font-bold text-emerald-600 mb-2">+25%</div>
                    <div class="text-sm text-gray-500">vs last week</div>
                </div>
            </div> <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8"> <!-- Attendance Trend Chart -->
                <div class="bg-white rounded-lg shadow-sm p-6 col-span-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Attendance Trend - This Month</h3>
                    <div class="relative h-80"> <canvas id="attendanceChart"></canvas> </div>
                    <div class="mt-4 flex items-center justify-center">
                        <div class="flex items-center space-x-4 text-sm">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-teal-500 rounded-full mr-2"></div> <span class="text-gray-600">Attendance</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-gray-300 rounded-full mr-2"></div> <span class="text-gray-600">Goal (90%)</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- At-Risk Summary -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">At-Risk Summary</h3>
                    <div class="space-y-6"> <!-- Warning Students -->
                        <div>
                            <div class="flex items-center justify-between mb-2"> <span class="text-sm font-medium text-gray-700">Warning (3+)</span> <span class="text-sm font-bold text-orange-600">0</span> </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-orange-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div> <!-- Legend -->
                        <div class="flex items-center justify-center space-x-6 text-sm pt-4">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-red-500 rounded mr-2"></div> <span class="text-gray-600">Barred (6+)</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-orange-500 rounded mr-2"></div> <span class="text-gray-600">Warning (3+)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Initialize the attendance trend chart        
            const ctx = document.getElementById('attendanceChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                    datasets: [{
                        label: 'Attendance',
                        data: [75, 78, 72, 100],
                        borderColor: '#14B8A6',
                        backgroundColor: 'rgba(20, 184, 166, 0.1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }, {
                        label: 'Goal (90%)',
                        data: [90, 90, 90, 90],
                        borderColor: '#D1D5DB',
                        borderWidth: 2,
                        borderDash: [5, 5],
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 4,
                            hoverRadius: 6
                        }
                    }
                }
            });
        </script>
    </div>


</x-filament-panels::page>