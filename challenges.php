<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenges Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f0fdfa; }
        .progress-bg { background-color: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden; }
        .progress-fill { height: 100%; transition: width 0.3s ease; }
    </style>
</head>
<body class="p-6 md:p-12 max-w-6xl mx-auto">

    <a href="EcoScan.php" class="flex items-center text-gray-700 text-sm font-semibold mb-8 hover:opacity-70 transition-opacity">
        <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
        Back to Dashboard
    </a>

    <header class="mb-10">
        <div class="flex items-center mb-2">
            <h1 class="text-4xl font-extrabold text-slate-900 leading-none">Challenges</h1>
        </div>
        <p class="text-gray-500 text-lg">Complete challenges to earn points and level up!</p>
    </header>

    <div class="bg-white rounded-3xl p-8 shadow-sm border border-amber-100 mb-12 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-2 bg-amber-200"></div>
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <div class="flex items-center">
                <div class="bg-amber-400 p-4 rounded-2xl mr-4 shadow-md shadow-amber-100">
                    <i data-lucide="trophy" class="text-white w-8 h-8"></i>
                </div>
                <div>
                    <p class="text-gray-400 text-sm font-semibold uppercase tracking-wider">Your Level</p>
                    <h2 class="text-3xl font-black text-slate-800">Level 3</h2>
                </div>
            </div>
            <div class="mt-4 md:mt-0 text-right">
                <p class="text-gray-400 text-sm font-semibold uppercase tracking-wider">Total Points</p>
                <div class="flex items-center justify-end text-orange-500 font-black text-3xl">
                    <i data-lucide="zap" class="w-6 h-6 mr-1 fill-current"></i>
                    225
                </div>
            </div>
        </div>

        <div class="flex justify-between text-sm font-bold text-slate-700 mb-2">
            <span>Next Level</span>
            <span>25 / 300 pts</span>
        </div>
        <div class="progress-bg mb-4">
            <div class="progress-fill bg-amber-400" style="width: 15%"></div>
        </div>
        <p class="text-center text-xs text-gray-500 font-medium">
            🎯 275 points until Level 4!
        </p>
    </div>

    <div class="flex items-center mb-8">
        <i data-lucide="target" class="w-6 h-6 text-emerald-500 mr-3"></i>
        <h3 class="text-2xl font-bold text-slate-800">Active Challenges</h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-50">
            <div class="flex mb-4">
                <div class="bg-amber-50 p-3 rounded-lg mr-4"><i data-lucide="search" class="text-amber-500"></i></div>
                <div>
                    <h4 class="font-bold text-slate-800 text-lg">Eco Explorer</h4>
                    <p class="text-gray-500 text-sm">Scan 20 different products</p>
                    <div class="flex gap-2 mt-2">
                        <span class="px-3 py-0.5 bg-amber-50 text-amber-600 border border-amber-200 rounded text-xs font-bold uppercase">medium</span>
                        <span class="px-3 py-0.5 bg-orange-50 text-orange-600 border border-orange-200 rounded text-xs font-bold uppercase">+100 pts</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-between text-xs font-bold text-slate-600 mb-1">
                <span>Progress</span> <span>4 / 20</span>
            </div>
            <div class="progress-bg"><div class="progress-fill bg-slate-800" style="width: 20%"></div></div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-50">
            <div class="flex mb-4">
                <div class="bg-yellow-50 p-3 rounded-lg mr-4"><i data-lucide="sparkles" class="text-yellow-500"></i></div>
                <div>
                    <h4 class="font-bold text-slate-800 text-lg">Eco Warrior</h4>
                    <p class="text-gray-500 text-sm">Choose 10 greener alternatives</p>
                    <div class="flex gap-2 mt-2">
                        <span class="px-3 py-0.5 bg-yellow-50 text-yellow-600 border border-yellow-200 rounded text-xs font-bold uppercase">medium</span>
                        <span class="px-3 py-0.5 bg-orange-50 text-orange-600 border border-orange-200 rounded text-xs font-bold uppercase">+150 pts</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-between text-xs font-bold text-slate-600 mb-1">
                <span>Progress</span> <span>5 / 10</span>
            </div>
            <div class="progress-bg"><div class="progress-fill bg-slate-800" style="width: 50%"></div></div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-50">
            <div class="flex mb-4">
                <div class="bg-red-50 p-3 rounded-lg mr-4"><i data-lucide="trash-2" class="text-red-400"></i></div>
                <div>
                    <h4 class="font-bold text-slate-800 text-lg">Waste Reducer</h4>
                    <p class="text-gray-500 text-sm">Save 5kg of waste from landfills</p>
                    <div class="flex gap-2 mt-2">
                        <span class="px-3 py-0.5 bg-red-50 text-red-600 border border-red-200 rounded text-xs font-bold uppercase">hard</span>
                        <span class="px-3 py-0.5 bg-orange-50 text-orange-600 border border-orange-200 rounded text-xs font-bold uppercase">+200 pts</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-between text-xs font-bold text-slate-600 mb-1">
                <span>Progress</span> <span>0 / 5</span>
            </div>
            <div class="progress-bg"><div class="progress-fill bg-slate-800" style="width: 0%"></div></div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-50">
            <div class="flex mb-4">
                <div class="bg-red-50 p-3 rounded-lg mr-4"><i data-lucide="award" class="text-red-400"></i></div>
                <div>
                    <h4 class="font-bold text-slate-800 text-lg">Sustainability Champion</h4>
                    <p class="text-gray-500 text-sm">Scan 50 products to master eco-awareness</p>
                    <div class="flex gap-2 mt-2">
                        <span class="px-3 py-0.5 bg-red-50 text-red-600 border border-red-200 rounded text-xs font-bold uppercase">hard</span>
                        <span class="px-3 py-0.5 bg-orange-50 text-orange-600 border border-orange-200 rounded text-xs font-bold uppercase">+250 pts</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-between text-xs font-bold text-slate-600 mb-1">
                <span>Progress</span> <span>4 / 50</span>
            </div>
            <div class="progress-bg"><div class="progress-fill bg-slate-800" style="width: 8%"></div></div>
        </div>

    </div>

    <script>
        // Initialize Lucide icons


        lucide.createIcons();
    </script>
</body>

</html>

