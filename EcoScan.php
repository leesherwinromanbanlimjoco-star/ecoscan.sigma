<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoScan | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f8fafc;
            --primary: #10b981;
            --primary-dark: #059669;
            --text-main: #0f172a;
            --text-sub: #64748b;
            --card-white: #ffffff;
            --border: #e2e8f0;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --transition: all 0.2s ease-in-out;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--bg);
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            line-height: 1.5;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Header & Navigation */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .brand h1 {
    display: flex;
    align-items: center; /* Keeps the logo and text on the same center line */
    gap: 10px;           /* Space between image and text */
    font-size: 28px;     /* Your desired heading size */
    font-weight: 700;
    color: var(--text-main);
}

.brand-logo {
    /* This makes the image scale naturally with your font size */
    height: 32px;        
    width: auto;         /* Maintains aspect ratio */
    object-fit: contain;
    display: block;      /* Removes any tiny bottom-gaps */
}

.brand p {
    color: var(--text-sub);
    font-size: 14px;
    margin-top: 2px;
    /* This padding (32px logo + 10px gap) aligns subtext under the word 'EcoScan' */
    padding-left: 42px; 
}

/* Mobile Tweak: If the screen is small, align the subtext to the left */
@media (max-width: 480px) {
    .brand p {
        padding-left: 0;
    }
}
        .nav-btns { display: flex; gap: 12px; }

        .btn-outline {
            padding: 10px 18px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            color: var(--text-main);
            font-size: 14px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
            box-shadow: var(--shadow);
        }

        /* Action Section */
        .scan-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
            box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.2);
        }

        .scan-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* Stats Section */
        .section-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            gap: 15px;
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-info span { color: var(--text-sub); font-size: 13px; font-weight: 600; }
        .stat-info h3 { font-size: 28px; font-weight: 700; margin-top: 4px; }

        .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        /* History Table Style */
        .history-container {
            background: white;
            border-radius: 16px;
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .history-header {
            padding: 20px;
            background: #fafafa;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .history-item {
            padding: 20px;
            border-bottom: 1px solid var(--border);
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            transition: var(--transition);
        }

        .history-item:last-child { border-bottom: none; }
        .history-item:hover { background: #fcfdfd; }

        .item-main h4 { font-size: 16px; margin-bottom: 4px; }
        .item-main p { color: var(--text-sub); font-size: 13px; }
        .timestamp { font-size: 11px; color: #94a3b8; margin-top: 6px; display: block;}

        .item-meta { display: flex; align-items: center; gap: 24px; }

        .grade {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
        }

        .recyc-info { text-align: right; }
        .recyc-info span { font-size: 11px; color: var(--text-sub); text-transform: uppercase; letter-spacing: 0.5px; }
        .recyc-info b { font-size: 15px; display: block; color: var(--text-main); }

        /* Color Variations */
        .bg-blue { background: #eff6ff; color: #3b82f6; }
        .bg-green { background: #ecfdf5; color: #10b981; }
        .bg-orange { background: #fff7ed; color: #f97316; }
        .bg-purple { background: #f5f3ff; color: #8b5cf6; }
        
        .grade-a { background: #dcfce7; color: #15803d; }
        .grade-c { background: #ffedd5; color: #c2410c; }

        .btn-clear {
            background: #fff1f2;
            color: #e11d48;
            border: 1px solid #fecdd3;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }
        .nav-btns {
    display: flex;
    gap: 12px;
}

.btn-outline {
    display: flex;
    align-items: center; /* Centers items vertically */
    gap: 8px;            /* Precise gap between icon and text */
    padding: 8px 14px;
    font-size: 14px;
    text-decoration: none;
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 8px;
    color: var(--text-main);
    transition: all 0.2s ease;
}

/* This targets your images specifically */
.nav-icon {
    width: 18px;         /* Small enough to look like an icon */
    height: 18px;        /* Keeps it square */
    object-fit: contain; /* Prevents stretching if the image isn't square */
    flex-shrink: 0;      /* Prevents the image from squishing on small screens */
}

.btn-outline:hover {
    background-color: #f8fafc;
    border-color: var(--primary);
}

        .btn-clear:hover { background: #ffe4e6; }

        /* Mobile Adjustments */
        @media (max-width: 600px) {
            .history-item { grid-template-columns: 1fr; gap: 15px; }
            .item-meta { justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 15px; }
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
           <div class="brand">
    <h1>
        <img src="images/4.png" alt="EcoScan Logo" class="brand-logo"> 
        EcoScan
    </h1>
    <p>Track your environmental footprint</p>
</div>
           <div class="nav-btns">
   <div class="nav-btns">
    <a href="challenges.php" class="btn-outline">
        <img src="images/2.png" alt="Challenges" class="nav-icon"> 
        <span>Challenges</span>
    </a>
    
    <a href="setting.php" class="btn-outline">
        <img src="images/3.png" alt="Settings" class="nav-icon"> 
        <span>Settings</span>
    </a>
</div>
</div>
        </header>

      <a href="scan.php" style="text-decoration: none;">
    <button class="scan-btn">
        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Scan New Product
    </button>
</a>

        <h2 class="section-title">📊 Your Impact</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info"><span>Products</span><h3>12</h3></div>
                    <div class="icon-box bg-blue">📦</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info"><span>Waste Saved</span><h3>4.2kg</h3></div>
                    <div class="icon-box bg-green">🍃</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info"><span>Eco Choices</span><h3>8</h3></div>
                    <div class="icon-box bg-orange">🏅</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info"><span>Level</span><h3>4</h3></div>
                    <div class="icon-box bg-purple">📈</div>
                </div>
            </div>
        </div>

        <h2 class="section-title">🕒 Recent Scans</h2>
        <div class="history-container">
            <div class="history-header">
                <div style="font-weight: 700; color: var(--text-sub);">Latest Activity</div>
                <button class="btn-clear">Clear All</button>
            </div>

            <div class="history-item">
                <div class="item-main">
                    <h4>Sustainable Design Framework</h4>
                    <p>EcoTech Solutions</p>
                    <span class="timestamp">Today • 1:45 AM</span>
                </div>
                <div class="item-meta">
                    <div class="recyc-info"><span>Recyclability</span><b>95%</b></div>
                    <div class="grade grade-a">A</div>
                </div>
            </div>

            <div class="history-item">
                <div class="item-main">
                    <h4>Standard Waste Bin</h4>
                    <p>Generic Brands</p>
                    <span class="timestamp">Jan 27, 2026 • 8:03 AM</span>
                </div>
                <div class="item-meta">
                    <div class="recyc-info"><span>Recyclability</span><b>80%</b></div>
                    <div class="grade grade-c">C</div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>