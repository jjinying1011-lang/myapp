<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายชื่อใหม่ | Phakhanan Wangdee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            /* Milk-pink palette */
            --milk-bg: #fff8fb;
            --pink-50: #fff0f6;
            --pink-100: #ffe1ec;
            --pink-200: #ffc9dd;
            --pink-300: #ffa8c9;
            --pink-400: #ff86b3;
            --pink-500: #f4699c;
            --plum-900: #5c2a44;
            --plum-800: #7a3559;

            --primary-gradient: linear-gradient(135deg, #ffb3d1 0%, #f4699c 100%);
            --secondary-gradient: linear-gradient(135deg, #ffd7e6 0%, #ffb3d1 100%);
            --dark-gradient: linear-gradient(135deg, #7a3559 0%, #5c2a44 100%);
            --body-bg: var(--milk-bg);
            --text-dark: #4a2438;
            --text-muted: #a6829a;
            --border-color: #fbdce9;
            --card-shadow: 0 10px 25px -5px rgba(244, 105, 156, 0.10), 0 8px 10px -6px rgba(244, 105, 156, 0.08);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Noto Sans Thai', sans-serif;
            background-color: var(--body-bg);
            background-image: radial-gradient(circle at 8% 0%, var(--pink-50) 0%, transparent 45%),
                radial-gradient(circle at 100% 20%, var(--pink-100) 0%, transparent 35%);
            background-attachment: fixed;
            color: var(--text-dark);
            min-height: 100vh;
        }

        .main-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .card-modern {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .card-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(244, 105, 156, 0.14), 0 10px 10px -5px rgba(244, 105, 156, 0.08);
        }

        .form-control,
        .form-select {
            border-radius: 12px;
            padding: 0.8rem 1rem;
            border-color: var(--border-color);
            background-color: var(--pink-50);
            color: var(--text-dark);
            transition: var(--transition);
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(244, 105, 156, 0.18);
            border-color: var(--pink-400);
            color: var(--text-dark);
        }

        .btn-modern-primary {
            background: var(--primary-gradient);
            color: #ffffff;
            border: none;
            border-radius: 12px;
            padding: 0.65rem 1.5rem;
            font-weight: 600;
            box-shadow: 0 4px 14px rgba(244, 105, 156, 0.35);
            transition: var(--transition);
            text-decoration: none;
        }

        .btn-modern-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(244, 105, 156, 0.5);
            color: #ffffff;
            opacity: 0.95;
        }

        .btn-modern-secondary {
            background: #ffffff;
            color: var(--text-dark);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 0.65rem 1.5rem;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
        }

        .btn-modern-secondary:hover {
            background: var(--pink-50);
            color: var(--text-dark);
            border-color: var(--pink-300);
        }
    </style>
</head>

<body>

    <div class="container main-container" style="max-width: 650px;">

        <div class="alert border-0 shadow-sm mb-4 d-flex align-items-center" role="alert"
            style="border-radius: 16px; background-color: #fffbeb; border: 1px solid #fef3c7 !important; color: #b45309;">
            <div class="d-flex align-items-center gap-2">
                <span class="fs-4">⚠️</span>
                <div>
                    <strong>หมายเหตุ:</strong> หน้านี้อยู่ระหว่างการพัฒนา (ระบบฟอร์มจำลอง
                    ยังไม่มีการบันทึกข้อมูลลงฐานข้อมูลจริง)
                </div>
            </div>
        </div>

        <div
            class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 mb-4">
            <div>
                <h1 class="fw-extrabold tracking-tight mb-1"
                    style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800; font-size: 2rem;">
                    เพิ่มสมาชิกใหม่
                </h1>
                <p class="text-muted mb-0">กรอกข้อมูลผู้ใช้งานจำลองในหน้านี้</p>
            </div>
            <a href="{{ route('home') }}" class="btn-modern-secondary d-inline-flex align-items-center gap-2">
                <span>⬅️</span> กลับหน้าหลัก
            </a>
        </div>

        <div class="card-modern p-4 p-md-5 border-0">
            <form action="#" method="GET"
                onsubmit="alert('จำลองการส่งข้อมูลสำเร็จ (ยังไม่ลง Database)'); return false;">

                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2" style="color: var(--plum-900);">ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" placeholder="เช่น ภคนันต์ หวังดี" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2" style="color: var(--plum-900);">อีเมล</label>
                    <input type="email" class="form-control" placeholder="เช่น phakhanan.w@example.com" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2" style="color: var(--plum-900);">เบอร์โทรศัพท์</label>
                    <input type="tel" class="form-control" placeholder="เช่น 089-123-4567" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2" style="color: var(--plum-900);">สถานะการใช้งาน</label>
                    <select class="form-select">
                        <option value="active">🟢 ใช้งานอยู่ (Active)</option>
                        <option value="inactive">🔴 ระงับการใช้งาน (Inactive)</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2" style="color: var(--plum-900);">อัปโหลดรูปโปรไฟล์</label>
                    <input type="file" class="form-control" accept="image/*">
                </div>

                <hr class="my-4" style="border-color: var(--border-color);">

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('home') }}" class="btn-modern-secondary">ยกเลิก</a>
                    <button type="submit" class="btn-modern-primary">💾 บันทึกข้อมูล (จำลอง)</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>