@extends('layout')

@section('title')
    Dashboard สมาชิก & บทความ
@endsection

@section('content')
    <style>
        /* Specific Home Dashboard Aesthetics */
        .welcome-hero-card {
            background: linear-gradient(135deg, #ffffff 0%, #fff5f9 50%, #ffe8f2 100%);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 2.2rem 2.4rem;
            box-shadow: 0 15px 35px -5px rgba(244, 105, 156, 0.12), 0 5px 15px rgba(244, 105, 156, 0.05);
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .welcome-hero-card:hover {
            box-shadow: 0 20px 40px -5px rgba(244, 105, 156, 0.18), 0 8px 20px rgba(244, 105, 156, 0.08);
            transform: translateY(-2px);
        }

        .welcome-hero-card::before {
            content: "";
            position: absolute;
            top: -60px;
            right: -60px;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(244, 105, 156, 0.18) 0%, transparent 70%);
            pointer-events: none;
        }

        .welcome-badge {
            background: #ffffff;
            color: var(--plum-900);
            border: 1px solid var(--pink-200);
            box-shadow: 0 2px 8px rgba(244, 105, 156, 0.1);
            font-size: 0.85rem;
            font-weight: 600;
        }

        .hero-user-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 201, 221, 0.8);
            border-radius: 20px;
            padding: 1.25rem 1.4rem;
            box-shadow: 0 10px 25px -5px rgba(244, 105, 156, 0.15);
            transition: var(--transition);
        }

        .hero-user-card:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 30px -5px rgba(244, 105, 156, 0.22);
        }

        .stat-card-milk {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 1.35rem 1.4rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 1.15rem;
        }

        .stat-card-milk:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(244, 105, 156, 0.16), 0 10px 10px -5px rgba(244, 105, 156, 0.08);
            border-color: var(--pink-300);
        }

        .stat-icon-box {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.55rem;
            flex-shrink: 0;
        }

        .search-container-milk {
            position: relative;
            max-width: 330px;
            width: 100%;
        }

        .search-container-milk .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            pointer-events: none;
            font-size: 0.95rem;
        }

        .search-input-milk {
            border-radius: 12px;
            border: 1px solid var(--border-color);
            padding: 0.65rem 1rem 0.65rem 2.4rem;
            font-size: 0.92rem;
            transition: var(--transition);
            background-color: var(--pink-50);
            color: var(--text-dark);
        }

        .search-input-milk:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(244, 105, 156, 0.18);
            border-color: var(--pink-400);
            color: var(--text-dark);
        }

        .filter-select-milk {
            border-radius: 12px;
            border: 1px solid var(--border-color);
            padding: 0.65rem 1rem;
            font-size: 0.92rem;
            background-color: var(--pink-50);
            color: var(--text-dark);
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-select-milk:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(244, 105, 156, 0.18);
            border-color: var(--pink-400);
        }

        /* Table Theme Matching Milk Pink & Plum */
        .table-members thead th {
            background: var(--dark-gradient) !important;
            color: #ffffff;
            padding: 1.15rem 1.2rem;
            font-weight: 600;
            border: none;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
        }

        .table-members tbody td {
            padding: 1.15rem 1.2rem;
            vertical-align: middle;
            border-bottom: 1px solid #fae8f1;
        }

        .table-members tbody tr {
            transition: var(--transition);
        }

        .table-members tbody tr:hover {
            background-color: var(--pink-50);
        }

        /* Featured Admin Row */
        .featured-admin-row {
            background-color: #fff4f8 !important;
            border-left: 4px solid var(--pink-500);
        }

        .featured-admin-row:hover {
            background-color: #ffedf4 !important;
        }

        .avatar-circle {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
            box-shadow: 0 4px 10px rgba(244, 105, 156, 0.18);
            transition: var(--transition);
        }

        .table-members tr:hover .avatar-circle {
            transform: scale(1.08);
        }

        .num-pill {
            width: 32px;
            height: 32px;
            background: var(--pink-100);
            color: var(--plum-900);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.88rem;
        }

        .num-pill.admin-pill {
            background: var(--primary-gradient);
            color: #ffffff;
            box-shadow: 0 4px 10px rgba(244, 105, 156, 0.35);
        }

        /* Buttons for table */
        .btn-table-edit {
            background: #fffbeb;
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

        .btn-table-edit:hover {
            background: #fde68a;
            color: #92400e;
            transform: translateY(-1px);
        }

        .btn-table-del {
            background: #fff0f3;
            color: #e11d48;
            border: 1px solid #fecdd3;
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

        .btn-table-del:hover {
            background: #fecdd3;
            color: #be123c;
            transform: translateY(-1px);
        }

        .blog-preview-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 1.4rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .blog-preview-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(244, 105, 156, 0.16), 0 10px 10px -5px rgba(244, 105, 156, 0.08);
            border-color: var(--pink-300);
        }
    </style>

    <div class="container pb-4">

        {{-- Welcome Hero Section --}}
        <div class="welcome-hero-card mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-3 welcome-badge">
                        <span>🎀</span>
                        <span>ยินดีต้อนรับสู่ระบบบริหารจัดการพรีเมียม</span>
                        <span class="badge rounded-pill bg-success px-2 py-0.5" style="font-size: 0.7rem;">Active</span>
                    </div>

                    <h1 class="fw-extrabold tracking-tight mb-2"
                        style="font-size: 2.3rem; line-height: 1.3; color: var(--plum-900);">
                        สวัสดี! ยินดีต้อนรับสู่ <span
                            style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">ระบบจัดการสมาชิก
                            & บทความ</span>
                    </h1>

                    <p class="text-muted mb-4" style="font-size: 1rem; line-height: 1.7; max-width: 650px;">
                        ยินดีต้อนรับคุณ <strong
                            style="color: var(--plum-900); font-weight: 700;">{{ session('user_logged_in', 'Phakhanan Wangdee') }}</strong>
                        เข้าสู่แดชบอร์ดหลัก ศูนย์รวมการจัดการข้อมูลสมาชิก ค้นหา รายงานสถิติ
                        และการสร้างสรรค์บทความคุณภาพในระบบ
                    </p>

                    <div class="d-flex gap-2 flex-wrap align-items-center">
                        <a href="{{ route('blog.create') }}"
                            class="btn-modern-primary text-decoration-none d-inline-flex align-items-center gap-2">
                            <span>✨</span>
                            <span>เขียนบทความใหม่</span>
                        </a>
                        <a href="{{ route('add') }}"
                            class="btn-modern-secondary text-decoration-none d-inline-flex align-items-center gap-2">
                            <span>➕</span>
                            <span>เพิ่มสมาชิกใหม่</span>
                        </a>
                        <a href="{{ route('blogs') }}"
                            class="btn-modern-secondary text-decoration-none d-inline-flex align-items-center gap-2"
                            style="border-color: var(--pink-200); background: #ffffff;">
                            <span>📖</span>
                            <span>ดูบทความทั้งหมด</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 text-center text-lg-end d-none d-lg-block">
                    <div class="hero-user-card text-start d-inline-block">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150"
                                    alt="User Avatar" class="avatar-circle" style="width: 58px; height: 58px;">
                                <span
                                    class="position-absolute bottom-0 end-0 badge rounded-pill bg-success p-1 border border-2 border-white">
                                    <span class="visually-hidden">Online</span>
                                </span>
                            </div>
                            <div>
                                <div class="fw-bold fs-6" style="color: var(--plum-900);">
                                    {{ session('user_logged_in', 'Phakhanan Wangdee') }}
                                </div>
                                <span class="badge text-white rounded-pill px-2.5 py-0.5"
                                    style="background: var(--primary-gradient); font-size: 0.72rem; font-weight: 600;">
                                    👑 Administrator
                                </span>
                            </div>
                        </div>
                        <div class="pt-2 border-top" style="border-color: #fbdce9 !important;">
                            <div class="d-flex justify-content-between align-items-center text-muted"
                                style="font-size: 0.8rem;">
                                <span>📅 วันที่ปัจจุบัน:</span>
                                <span class="fw-semibold text-dark">{{ date('d/m/Y') }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center text-muted mt-1"
                                style="font-size: 0.8rem;">
                                <span>🛡️ สถานะระบบ:</span>
                                <span class="text-success fw-semibold">🟢 ออนไลน์พร้อมใช้งาน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick Stats Cards --}}
        <div class="row g-3 mb-5">
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card-milk">
                    <div class="stat-icon-box" style="background: var(--pink-100); color: var(--pink-500);">
                        👥
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">สมาชิกทั้งหมด</div>
                        <h4 class="fw-bold mb-0" style="color: var(--plum-900);" id="totalMembersCount">5 คน</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card-milk">
                    <div class="stat-icon-box" style="background: #e6f9ef; color: #10b981;">
                        🟢
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">สถานะใช้งาน (Active)</div>
                        <h4 class="fw-bold mb-0" style="color: var(--plum-900);">4 คน</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card-milk">
                    <div class="stat-icon-box" style="background: var(--pink-200); color: var(--plum-800);">
                        📚
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">บทความในระบบ</div>
                        <h4 class="fw-bold mb-0" style="color: var(--plum-900);">{{ $totalBlogs ?? 11 }} บทความ</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="stat-card-milk">
                    <div class="stat-icon-box" style="background: #fff4d9; color: #f59e0b;">
                        👑
                    </div>
                    <div>
                        <div class="text-muted small fw-semibold">ผู้ดูแลหลัก (Admin)</div>
                        <h4 class="fw-bold mb-0" style="color: var(--plum-900);">Phakhanan</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Members Table Card --}}
        <div class="card-modern border-0 overflow-hidden mb-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-4 border-bottom"
                style="border-color: var(--border-color);">
                <div class="d-flex align-items-center gap-2">
                    <h5 class="mb-0 fw-bold d-flex align-items-center gap-2" style="color: var(--plum-900);">
                        <span>📋</span> รายชื่อสมาชิกทั้งหมดในระบบ
                    </h5>
                    <span class="badge rounded-pill px-2.5 py-1"
                        style="background: var(--pink-100); color: var(--plum-900); font-weight: 600;" id="filteredCount">5
                        รายการ</span>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-2">
                    <div class="search-container-milk">
                        <span class="search-icon">🔍</span>
                        <input type="text" id="memberSearchInput" class="form-control search-input-milk"
                            placeholder="ค้นหาชื่อ, อีเมล หรือ เบอร์โทร..." onkeyup="filterMembers()">
                    </div>
                    <select id="statusFilter" class="form-select filter-select-milk" onchange="filterMembers()">
                        <option value="all">สถานะทั้งหมด</option>
                        <option value="active">🟢 ใช้งานอยู่</option>
                        <option value="pending">⏳ รอการตรวจสอบ</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-members align-middle mb-0" id="membersTable">
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
                        <tr class="featured-admin-row" data-status="active"
                            data-search="phakhanan wangdee ภคนันต์ หวังดี ภคณันต์ หวังดี phakhanan.wangdee@example.com 089-123-4567 super admin">
                            <td>
                                <div class="num-pill admin-pill">1</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150"
                                    alt="Phakhanan Wangdee" class="avatar-circle">
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-1.5 flex-wrap">
                                    <span class="fw-bold fs-6" style="color: var(--plum-900);">Phakhanan Wangdee</span>
                                    <span class="badge text-white rounded-pill px-2 py-0.5"
                                        style="background: var(--primary-gradient); font-size: 0.7rem;">👑 Admin</span>
                                </div>
                                <div class="small" style="color: var(--text-muted);">ภคนันต์ หวังดี (Super Administrator)
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold" style="color: var(--text-dark); font-size: 0.92rem;">
                                    phakhanan.wangdee@example.com</div>
                                <span class="badge border px-2 py-0.5"
                                    style="background: var(--pink-50); color: var(--plum-800); border-color: var(--pink-200) !important; font-size: 0.72rem;">Primary
                                    Contact</span>
                            </td>
                            <td class="fw-medium" style="color: var(--text-dark);">089-123-4567</td>
                            <td>
                                <span class="badge rounded-pill px-3 py-1.5"
                                    style="background: #e6f9ef; color: #10b981; border: 1px solid #bbf7d0; font-weight: 600; font-size: 0.8rem;">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-table-edit"
                                        onclick="alert('แก้ไขข้อมูลของ Phakhanan Wangdee')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-table-del"
                                        onclick="if(confirm('ต้องการลบข้อมูลของ Phakhanan Wangdee หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 2: Thanakorn Rattanakul -->
                        <tr data-status="active"
                            data-search="ธนากร รัตนกุล thanakorn rattanakul thanakorn.r@example.com 081-456-7890 developer">
                            <td>
                                <div class="num-pill">2</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150"
                                    alt="Thanakorn" class="avatar-circle">
                            </td>
                            <td>
                                <div class="fw-bold" style="color: var(--plum-900);">ธนากร รัตนกุล</div>
                                <div class="text-muted small">Senior Full-stack Developer</div>
                            </td>
                            <td class="text-muted">thanakorn.r@example.com</td>
                            <td class="text-muted">081-456-7890</td>
                            <td>
                                <span class="badge rounded-pill px-3 py-1.5"
                                    style="background: #e6f9ef; color: #10b981; border: 1px solid #bbf7d0; font-weight: 600; font-size: 0.8rem;">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-table-edit"
                                        onclick="alert('แก้ไขข้อมูลของ ธนากร รัตนกุล')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-table-del"
                                        onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 3: Kanyanat Sukjai -->
                        <tr data-status="active"
                            data-search="กัญญาณัฐ สุขใจ kanyanat sukjai kanyanat.s@example.com 082-345-6789 designer">
                            <td>
                                <div class="num-pill">3</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150" alt="Kanyanat"
                                    class="avatar-circle">
                            </td>
                            <td>
                                <div class="fw-bold" style="color: var(--plum-900);">กัญญาณัฐ สุขใจ</div>
                                <div class="text-muted small">Lead UI/UX Designer</div>
                            </td>
                            <td class="text-muted">kanyanat.s@example.com</td>
                            <td class="text-muted">082-345-6789</td>
                            <td>
                                <span class="badge rounded-pill px-3 py-1.5"
                                    style="background: #e6f9ef; color: #10b981; border: 1px solid #bbf7d0; font-weight: 600; font-size: 0.8rem;">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-table-edit"
                                        onclick="alert('แก้ไขข้อมูลของ กัญญาณัฐ สุขใจ')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-table-del"
                                        onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 4: Nattawut Vijitsakul -->
                        <tr data-status="pending"
                            data-search="ณัฐวุฒิ วิจิตรสกุล nattawut vijitsakul nattawut.v@example.com 085-789-0123 marketing">
                            <td>
                                <div class="num-pill">4</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150" alt="Nattawut"
                                    class="avatar-circle">
                            </td>
                            <td>
                                <div class="fw-bold" style="color: var(--plum-900);">ณัฐวุฒิ วิจิตรสกุล</div>
                                <div class="text-muted small">Marketing Specialist</div>
                            </td>
                            <td class="text-muted">nattawut.v@example.com</td>
                            <td class="text-muted">085-789-0123</td>
                            <td>
                                <span class="badge rounded-pill px-3 py-1.5"
                                    style="background: #fffbeb; color: #d97706; border: 1px solid #fde68a; font-weight: 600; font-size: 0.8rem;">
                                    ⏳ รอการตรวจสอบ
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-table-edit"
                                        onclick="alert('แก้ไขข้อมูลของ ณัฐวุฒิ วิจิตรสกุล')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-table-del"
                                        onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Member 5: Waranya Prasertsuk -->
                        <tr data-status="active"
                            data-search="วรัญญา ประเสริฐสุข waranya prasertsuk waranya.p@example.com 087-890-1234 content">
                            <td>
                                <div class="num-pill">5</div>
                            </td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150" alt="Waranya"
                                    class="avatar-circle">
                            </td>
                            <td>
                                <div class="fw-bold" style="color: var(--plum-900);">วรัญญา ประเสริฐสุข</div>
                                <div class="text-muted small">Content Strategist & Copywriter</div>
                            </td>
                            <td class="text-muted">waranya.p@example.com</td>
                            <td class="text-muted">087-890-1234</td>
                            <td>
                                <span class="badge rounded-pill px-3 py-1.5"
                                    style="background: #e6f9ef; color: #10b981; border: 1px solid #bbf7d0; font-weight: 600; font-size: 0.8rem;">
                                    🟢 ใช้งานอยู่
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1.5">
                                    <button type="button" class="btn-table-edit"
                                        onclick="alert('แก้ไขข้อมูลของ วรัญญา ประเสริฐสุข')">
                                        ✏️ แก้ไข
                                    </button>
                                    <button type="button" class="btn-table-del"
                                        onclick="if(confirm('ต้องการลบข้อมูลนี้หรือไม่?')) alert('ลบข้อมูลเรียบร้อย')">
                                        🗑 ลบ
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- No Results Message --}}
            <div id="noResultsMessage" class="text-center py-5 d-none">
                <span class="fs-1 d-block mb-2">🔍</span>
                <h6 class="fw-bold" style="color: var(--plum-900);">ไม่พบข้อมูลสมาชิกที่ตรงกับการค้นหา</h6>
                <p class="text-muted small mb-0">ลองค้นหาด้วยคำอื่น หรือเลือกตัวกรองสถานะใหม่</p>
            </div>
        </div>

        {{-- Latest Blogs Showcase Section --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1 d-flex align-items-center gap-2" style="color: var(--plum-900);">
                    <span>📰</span> บทความล่าสุดในระบบ
                </h3>
                <p class="text-muted mb-0">เนื้อหาบทความคุณภาพที่ถูกบันทึกลงในฐานข้อมูล</p>
            </div>
            <a href="{{ route('blogs') }}" class="btn-modern-secondary text-decoration-none py-2 px-3.5 shadow-none"
                style="font-size: 0.9rem;">
                ดูบทความทั้งหมด →
            </a>
        </div>

        @if (isset($latestBlogs) && count($latestBlogs) > 0)
            <div class="row g-4 mb-3">
                @foreach ($latestBlogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-preview-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if ($blog->status)
                                    <span class="badge rounded-pill px-3 py-1"
                                        style="background: #e6f9ef; color: #10b981; border: 1px solid #bbf7d0; font-size: 0.75rem;">🟢
                                        เผยแพร่แล้ว</span>
                                @else
                                    <span class="badge rounded-pill px-3 py-1"
                                        style="background: var(--pink-100); color: var(--plum-900); border: 1px solid var(--pink-200); font-size: 0.75rem;">🎀
                                        ฉบับร่าง</span>
                                @endif
                                <small class="text-muted" style="font-size: 0.8rem;">
                                    {{ $blog->created_at ? \Carbon\Carbon::parse($blog->created_at)->diffForHumans() : 'เมื่อเร็วๆ นี้' }}
                                </small>
                            </div>
                            <h5 class="fw-bold mb-2" style="color: var(--plum-900); line-height: 1.4; font-size: 1.05rem;">
                                {{ $blog->title }}
                            </h5>
                            <p class="text-muted small flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit($blog->content, 110, '...') }}
                            </p>
                            <div class="pt-3 mt-auto border-top d-flex justify-content-between align-items-center"
                                style="border-color: #fae8f1 !important;">
                                <a href="{{ route('index') }}" class="text-decoration-none fw-bold small"
                                    style="color: var(--pink-500);">
                                    จัดการใน Admin →
                                </a>
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-table-edit">
                                    ✏️ แก้ไข
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

    {{-- Client-side Interactive Filter Script --}}
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
@endsection