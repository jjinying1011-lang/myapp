<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการข้อมูล - รายชื่อสมาชิก & บทความ | Phakhanan Wangdee</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Plus Jakarta Sans & Noto Sans Thai -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Elegant Modern Theme */
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            --primary-light: #eef2ff;
            --primary-accent: #818cf8;
            --secondary-gradient: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --dark-gradient: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            --body-bg: #f8fafc;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --card-shadow-hover: 0 20px 30px -10px rgba(79, 70, 229, 0.12), 0 10px 15px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Noto Sans Thai', sans-serif;
            background-color: var(--body-bg);
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(99, 102, 241, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 90% 90%, rgba(16, 185, 129, 0.05) 0%, transparent 40%);
            background-attachment: fixed;
            color: var(--text-dark);
            min-height: 100vh;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Navbar Styling */
        .navbar-custom {
            background: rgba(15, 23, 42, 0.95) !important;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 0.9rem 0;
        }

        .navbar-custom .navbar-brand {
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            background: linear-gradient(135deg, #818cf8 0%, #c084fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .navbar-custom .nav-link {
            font-weight: 500;
            color: #cbd5e1 !important;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: var(--transition);
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: #ffffff !important;
            background: rgba(255, 255, 255, 0.1);
        }

        /* Card Elements */
        .card-modern {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .card-modern:hover {
            transform: translateY(-2px);
            box-shadow: var(--card-shadow-hover);
        }

        /* Stat Cards */
        .stat-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 1.4rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 1.2rem;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--card-shadow-hover);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .stat-icon-wrapper {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            flex-shrink: 0;
        }

        /* Search & Form Elements */
        .search-box {
            border-radius: 12px;
            border-color: var(--border-color);
            padding: 0.65rem 1rem 0.65rem 2.4rem;
            font-size: 0.92rem;
            transition: var(--transition);
            background-color: #f8fafc;
        }

        .search-box:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
            border-color: #6366f1;
        }

        .search-container {
            position: relative;
            max-width: 340px;
            width: 100%;
        }

        .search-container .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            pointer-events: none;
            font-size: 0.95rem;
        }

        .filter-select {
            border-radius: 12px;
            border-color: var(--border-color);
            padding: 0.65rem 1rem;
            font-size: 0.92rem;
            background-color: #f8fafc;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-select:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
            border-color: #6366f1;
        }

        /* Custom buttons styling */
        .btn-modern-primary {
            background: var(--primary-gradient);
            color: #ffffff;
            border: none;
            border-radius: 12px;
            padding: 0.65rem 1.4rem;
            font-weight: 600;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35);
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-modern-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.5);
            color: #ffffff;
            opacity: 0.95;
        }

        .btn-action-edit {
            background: #fef3c7;
            color: #b45309;
            border: 1px solid #fde68a;
            border-radius: 8px;
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .btn-action-edit:hover {
            background: #fde68a;
            color: #92400e;
            transform: translateY(-1px);
        }

        .btn-action-delete {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
            border-radius: 8px;
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .btn-action-delete:hover {
            background: #fecaca;
            color: #991b1b;
            transform: translateY(-1px);
        }

        /* Table Styling */
        .table-responsive {
            border-radius: 16px;
        }

        .table thead {
            background: #0f172a;
        }

        .table thead th {
            color: #ffffff;
            padding: 1.1rem 1.2rem;
            font-weight: 600;
            border: none;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
        }

        .table tbody td {
            padding: 1.1rem 1.2rem;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        .table tbody tr {
            transition: var(--transition);
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .table .avatar-img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .table tr:hover .avatar-img {
            transform: scale(1.08);
        }

        .number-circle {
            width: 32px;
            height: 32px;
            background: rgba(99, 102, 241, 0.1);
            color: #4f46e5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.88rem;
        }

        .number-circle.highlight {
            background: var(--primary-gradient);
            color: #ffffff;
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.3);
        }

        /* Featured Row Highlight for Main Profile */
        .featured-row {
            background-color: #f5f7ff !important;
            border-left: 4px solid #6366f1;
        }

        .featured-row:hover {
            background-color: #eef2ff !important;
        }

        /* Status Badges */
        .badge-status {
            padding: 0.45rem 0.85rem;
            font-weight: 600;
            font-size: 0.8rem;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .badge-active {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid #a7f3d0;
        }

        .badge-pending {
            background: #fffbeb;
            color: #d97706;
            border: 1px solid #fde68a;
        }

        /* Footer */
        footer {
            background: var(--dark-gradient);
            color: #94a3b8;
            padding: 2.2rem 0;
            margin-top: 4rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <span>⚡</span> PHAKHANAN WANGDEE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ms-lg-4 gap-1">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">📊 Dashboard สมาชิก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">📝 จัดการบทความ (Admin)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs') }}">📰 บทความทั่วไป</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('abouts') }}">👤 เกี่ยวกับเรา</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <span class="navbar-text text-white" style="font-weight: 500;">
                        👋 สวัสดี, <span style="color: #818cf8; font-weight: 700;">{{ session('user_logged_in', 'Phakhanan Wangdee') }}</span>
                    </span>
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm px-3" style="border-radius: 8px;">
                        ออกจากระบบ
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <div class="container py-5">
        
        <!-- Header Banner -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
            <div>
                <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 fw-bold" style="font-size: 0.8rem;">
                        ✨ ระบบจัดการข้อมูลสมาชิกระดับพรีเมียม
                    </span>
                </div>
                <h1 class="fw-extrabold tracking-tight mb-1" style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800; font-size: 2.1rem;">
                    รายชื่อสมาชิก & ผู้ใช้งานระบบ
                </h1>
                <p class="text-muted mb-0">ระบบบริหารจัดการฐานข้อมูลสมาชิกและข้อมูลผู้ดูแลระบบ | Phakhanan Wangdee</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('blog.create') }}" class="btn btn-outline-primary d-inline-flex align-items-center gap-2" style="border-radius: 12px; font-weight: 600; padding: 0.65rem 1.2rem;">
                    <span>✨</span> เขียนบทความ
                </a>
                <a href="{{ route('add') }}" class="btn-modern-primary">
                    <span>➕</span> เพิ่มสมาชิกใหม่
                </a>
            </div>
        </div>

        <!-- Quick Stats Overview -->
        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrapper" style="background: rgba(99, 102, 241, 0.12); color: #4f46e5;">
                        👥
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">สมาชิกทั้งหมด</div>
                        <h4 class="fw-bold mb-0 text-dark" id="totalMembersCount">5 คน</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrapper" style="background: rgba(16, 185, 129, 0.12); color: #059669;">
                        🟢
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">สถานะใช้งาน (Active)</div>
                        <h4 class="fw-bold mb-0 text-dark">4 คน</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrapper" style="background: rgba(244, 105, 156, 0.15); color: #e11d48;">
                        📚
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">บทความในระบบ</div>
                        <h4 class="fw-bold mb-0 text-dark">{{ $totalBlogs ?? 11 }} บทความ</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon-wrapper" style="background: rgba(129, 140, 248, 0.15); color: #6366f1;">
                        👑
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">ผู้ดูแลหลัก (Admin)</div>
                        <h4 class="fw-bold mb-0 text-dark">Phakhanan</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Members Table Card -->
        <div class="card-modern border-0 overflow-hidden mb-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-4 border-bottom" style="border-color: #f1f5f9;">
                <div class="d-flex align-items-center gap-2">
                    <h5 class="mb-0 fw-bold text-dark d-flex align-items-center gap-2">
                        <span>📋</span> รายชื่อสมาชิกทั้งหมดในระบบ
                    </h5>
                    <span class="badge bg-secondary-subtle text-secondary rounded-pill px-2.5 py-1" id="filteredCount">5 รายการ</span>
                </div>
                
                <div class="d-flex flex-column flex-sm-row gap-2">
                    <div class="search-container">
                        <span class="search-icon">🔍</span>
                        <input type="text" id="memberSearchInput" class="form-control search-box" placeholder="ค้นหาชื่อ, อีเมล หรือ เบอร์โทร..." onkeyup="filterMembers()">
                    </div>
                    <select id="statusFilter" class="form-select filter-select" onchange="filterMembers()">
                        <option value="all">สถานะทั้งหมด</option>
                        <option value="active">🟢 ใช้งานอยู่</option>
                        <option value="pending">⏳ รอการตรวจสอบ</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="membersTable">
                    <thead>
                        <tr>
                            <th style="width: 7%;">ลำดับ</th>
                            <th style="width: 10%;">รูปโปรไฟล์</th>
                            <th style="width: 25%;">ชื่อ-นามสกุล / ตำแหน่ง</th>
                            <th style="width: 23%;">อีเมล</th>
                            <th style="width: 15%;">เบอร์โทรศัพท์</th>
                            <th style="width: 10%;">สถานะ</th>
                            <th class="text-center" style="width: 10%;">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Member 1: Phakhanan Wangdee (Main Admin Profile) -->
                        <tr class="featured-row" data-status="active" data-search="phakhanan wangdee ภคนันต์ หวังดี ภคณันต์ หวังดี phakhanan.wangdee@example.com 089-123-4567 super admin">
                            <td>
                                <div class="number-circle highlight">1</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150" alt="Phakhanan Wangdee" class="avatar-img">
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="fw-bold text-dark fs-6">Phakhanan Wangdee</span>
                                    <span class="badge bg-primary text-white rounded-pill px-2 py-0.5" style="font-size: 0.7rem;">👑 Admin</span>
                                </div>
                                <div class="text-muted small">ภคนันต์ หวังดี (Super Administrator)</div>
                            </td>
                            <td>
                                <div class="fw-semibold text-dark" style="font-size: 0.92rem;">phakhanan.wangdee@example.com</div>
                                <span class="badge bg-light text-muted border px-2 py-0.5" style="font-size: 0.72rem;">Primary Contact</span>
                            </td>
                            <td class="text-dark fw-medium">089-123-4567</td>
                            <td>
                                <span class="badge-status badge-active">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-action-edit" onclick="alert('แก้ไขข้อมูลของ Phakhanan Wangdee')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-action-delete" onclick="if(confirm('ต้องการลบข้อมูลของ Phakhanan Wangdee หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 2: Thanakorn Rattanakul -->
                        <tr data-status="active" data-search="ธนากร รัตนกุล thanakorn rattanakul thanakorn.r@example.com 081-456-7890 developer">
                            <td>
                                <div class="number-circle">2</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150" alt="Thanakorn" class="avatar-img">
                            </td>
                            <td>
                                <div class="fw-bold text-dark">ธนากร รัตนกุล</div>
                                <div class="text-muted small">Senior Full-stack Developer</div>
                            </td>
                            <td class="text-muted">thanakorn.r@example.com</td>
                            <td class="text-muted">081-456-7890</td>
                            <td>
                                <span class="badge-status badge-active">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-action-edit" onclick="alert('แก้ไขข้อมูลของ ธนากร รัตนกุล')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-action-delete" onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 3: Kanyanat Sukjai -->
                        <tr data-status="active" data-search="กัญญาณัฐ สุขใจ kanyanat sukjai kanyanat.s@example.com 082-345-6789 designer">
                            <td>
                                <div class="number-circle">3</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150" alt="Kanyanat" class="avatar-img">
                            </td>
                            <td>
                                <div class="fw-bold text-dark">กัญญาณัฐ สุขใจ</div>
                                <div class="text-muted small">Lead UI/UX Designer</div>
                            </td>
                            <td class="text-muted">kanyanat.s@example.com</td>
                            <td class="text-muted">082-345-6789</td>
                            <td>
                                <span class="badge-status badge-active">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-action-edit" onclick="alert('แก้ไขข้อมูลของ กัญญาณัฐ สุขใจ')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-action-delete" onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 4: Nattawut Vijitsakul -->
                        <tr data-status="pending" data-search="ณัฐวุฒิ วิจิตรสกุล nattawut vijitsakul nattawut.v@example.com 085-789-0123 marketing">
                            <td>
                                <div class="number-circle">4</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150" alt="Nattawut" class="avatar-img">
                            </td>
                            <td>
                                <div class="fw-bold text-dark">ณัฐวุฒิ วิจิตรสกุล</div>
                                <div class="text-muted small">Marketing Specialist</div>
                            </td>
                            <td class="text-muted">nattawut.v@example.com</td>
                            <td class="text-muted">085-789-0123</td>
                            <td>
                                <span class="badge-status badge-pending">
                                    ⏳ รอการตรวจสอบ
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-action-edit" onclick="alert('แก้ไขข้อมูลของ ณัฐวุฒิ วิจิตรสกุล')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-action-delete" onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 5: Waranya Prasertsuk -->
                        <tr data-status="active" data-search="วรัญญา ประเสริฐสุข waranya prasertsuk waranya.p@example.com 087-890-1234 content">
                            <td>
                                <div class="number-circle">5</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150" alt="Waranya" class="avatar-img">
                            </td>
                            <td>
                                <div class="fw-bold text-dark">วรัญญา ประเสริฐสุข</div>
                                <div class="text-muted small">Content Strategist & Copywriter</div>
                            </td>
                            <td class="text-muted">waranya.p@example.com</td>
                            <td class="text-muted">087-890-1234</td>
                            <td>
                                <span class="badge-status badge-active">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-action-edit" onclick="alert('แก้ไขข้อมูลของ วรัญญา ประเสริฐสุข')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-action-delete" onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- No Results Message (Hidden by default) -->
            <div id="noResultsMessage" class="text-center py-5 d-none">
                <span class="fs-1 d-block mb-2">🔍</span>
                <h6 class="fw-bold text-dark">ไม่พบข้อมูลสมาชิกที่ตรงกับการค้นหา</h6>
                <p class="text-muted small mb-0">ลองค้นหาด้วยคำอื่น หรือเลือกตัวกรองสถานะใหม่</p>
            </div>
        </div>

        <!-- Latest Blogs Showcase Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                    <span>📰</span> บทความล่าสุดในระบบ
                </h3>
                <p class="text-muted mb-0">เนื้อหาบทความคุณภาพที่ถูกบันทึกลงในฐานข้อมูล</p>
            </div>
            <a href="{{ route('blogs') }}" class="btn btn-outline-primary px-3 py-2" style="border-radius: 10px; font-weight: 600; font-size: 0.9rem;">
                ดูบทความทั้งหมด →
            </a>
        </div>

        @if(isset($latestBlogs) && count($latestBlogs) > 0)
            <div class="row g-4 mb-4">
                @foreach($latestBlogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="card-modern h-100 p-4 border-0 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if($blog->status)
                                    <span class="badge rounded-pill bg-success-subtle text-success border border-success-subtle px-3 py-1" style="font-size: 0.75rem;">🟢 เผยแพร่แล้ว</span>
                                @else
                                    <span class="badge rounded-pill bg-warning-subtle text-warning border border-warning-subtle px-3 py-1" style="font-size: 0.75rem;">🟡 แบบร่าง</span>
                                @endif
                                <small class="text-muted" style="font-size: 0.8rem;">
                                    {{ $blog->created_at ? \Carbon\Carbon::parse($blog->created_at)->diffForHumans() : 'เมื่อเร็วๆ นี้' }}
                                </small>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="line-height: 1.4; font-size: 1.1rem;">
                                {{ $blog->title }}
                            </h5>
                            <p class="text-muted small flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit($blog->content, 120, '...') }}
                            </p>
                            <div class="pt-3 mt-auto border-top d-flex justify-content-between align-items-center" style="border-color: #f1f5f9 !important;">
                                <a href="{{ route('index') }}" class="text-decoration-none fw-bold small" style="color: #4f46e5;">
                                    จัดการใน Admin →
                                </a>
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-light border py-1 px-2.5" style="border-radius: 8px; font-size: 0.8rem;">
                                    ✏️ แก้ไข
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-1 fw-semibold text-white">© {{ date('Y') }} Phakhanan Wangdee - Member Management System</p>
            <p class="mb-0 small text-muted">ออกแบบและพัฒนาด้วย Laravel 11, Bootstrap 5 และ Modern Web Standards</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Client-side Interactive Filter Script -->
    <script>
        function filterMembers() {
            const query = document.getElementById('memberSearchInput').value.toLowerCase().trim();
            const statusFilter = document.getElementById('statusFilter').value;
            const rows = document.querySelectorAll('#membersTable tbody tr');
            let visibleCount = 0;

            rows.forEach(row => {
                const searchData = row.getAttribute('data-search') ? row.getAttribute('data-search').toLowerCase() : '';
                const rowStatus = row.getAttribute('data-status');

                const matchesQuery = !query || searchData.includes(query);
                const matchesStatus = (statusFilter === 'all') || (rowStatus === statusFilter);

                if (matchesQuery && matchesStatus) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            document.getElementById('filteredCount').textContent = visibleCount + ' รายการ';
            const noResults = document.getElementById('noResultsMessage');
            if (visibleCount === 0) {
                noResults.classList.remove('d-none');
            } else {
                noResults.classList.add('d-none');
            }
        }
    </script>
</body>

</html>
