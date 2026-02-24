<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0fdf9; /* Soft mint background from image */
        }
    </style>
</head>
<body class="flex flex-col items-center min-h-screen p-8">

    <div class="w-full max-w-2xl">
        <a href="EcoScan.php" class="flex items-center text-gray-700 text-sm font-medium mb-8 hover:text-black transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
            Back to Dashboard
        </a>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="bg-[#f0fdf9] px-8 py-6 flex items-center border-b border-gray-50">
                <i data-lucide="user" class="w-6 h-6 mr-3 text-gray-700"></i>
                <h1 class="text-2xl font-bold text-gray-800">Profile Settings</h1>
            </div>

            <form class="p-8 space-y-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" 
                           value="kyle.romanban.hunter@apcas.ph.education" 
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500" 
                           readonly>
                </div>

                <div>
                    <label class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" 
                           value="Kyle Dela Cruz" 
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500" 
                           readonly>
                </div>

                <div>
                    <label class="flex items-center text-gray-700 font-bold mb-2">
                        <i data-lucide="map-pin" class="w-4 h-4 mr-2"></i>
                        Zip Code
                    </label>
                    <input type="text" 
                           value="10001" 
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <p class="mt-2 text-sm text-gray-500 italic">
                        We use your zip code to provide accurate local recycling information
                    </p>
                </div>

                <button type="submit" 
                        class="w-full bg-[#10b981] hover:bg-[#059669] text-white font-bold py-4 rounded-xl flex items-center justify-center transition-all duration-200 shadow-md">
                    <i data-lucide="save" class="w-5 h-5 mr-2"></i>
                    Save Settings
                </button>
            </form>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>