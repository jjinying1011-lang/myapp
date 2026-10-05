<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | Phakhanan Wangdee</title>
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
            --card-shadow: 0 20px 40px -15px rgba(244, 105, 156, 0.25);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Noto Sans Thai', sans-serif;
            background: linear-gradient(135deg, #5c2a44 0%, #3b182a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            border: 1px solid rgba(255, 201, 221, 0.2);
            border-radius: 24px;
            background: rgba(92, 42, 68, 0.65);
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.45);
            max-width: 450px;
            width: 100%;
            padding: 2.6rem;
            transition: var(--transition);
        }

        .login-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 30px 60px -15px rgba(244, 105, 156, 0.3);
            border-color: rgba(255, 182, 209, 0.4);
        }

        .form-control {
            background: rgba(59, 24, 42, 0.6);
            border: 1px solid rgba(255, 201, 221, 0.2);
            color: #ffffff;
            border-radius: 12px;
            padding: 0.8rem 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            background: rgba(59, 24, 42, 0.85);
            border-color: var(--pink-400);
            box-shadow: 0 0 0 4px rgba(244, 105, 156, 0.25);
            color: #ffffff;
        }

        .form-control::placeholder {
            color: #d8b4c8;
        }

        .btn-primary-modern {
            background: var(--primary-gradient);
            border: none;
            color: #ffffff;
            border-radius: 12px;
            padding: 0.85rem;
            font-weight: 700;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(244, 105, 156, 0.4);
        }

        .btn-primary-modern:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(244, 105, 156, 0.6);
            color: #ffffff;
            opacity: 0.95;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="text-center mb-4">
            <span class="fs-1 d-block mb-1">🎀</span>
            <h2 class="fw-extrabold mb-1"
                style="background: linear-gradient(135deg, #ffd1e4 0%, #ffb3d1 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800; letter-spacing: 0.5px;">
                เข้าสู่ระบบ
            </h2>
            <p class="small mb-0" style="color: #f3d4e2;">ยินดีต้อนรับกลับมา! กรุณากรอกข้อมูลของคุณ</p>
        </div>

        @if (request()->has('error'))
            <div class="alert alert-danger text-center border-0 py-2 px-3 mb-4" role="alert"
                style="border-radius: 10px; background-color: rgba(239, 68, 68, 0.2); color: #fecdd3;">
                {{ request()->query('error') }}
            </div>
        @endif

        <form action="{{ url('/login-process') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label"
                    style="color: #ffd7e6; font-weight: 500; font-size: 0.9rem;">ชื่อผู้ใช้ หรือ อีเมล</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="phakhanan.wangdee@example.com" required autocomplete="username">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label"
                    style="color: #ffd7e6; font-weight: 500; font-size: 0.9rem;">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••"
                    required autocomplete="current-password">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember"
                        style="background-color: rgba(59, 24, 42, 0.6); border-color: rgba(255, 201, 221, 0.3);">
                    <label class="form-check-label small" for="remember" style="color: #f3d4e2;">จดจำฉันไว้</label>
                </div>
                <a href="#" class="text-decoration-none small"
                    style="color: #ffb3d1; font-weight: 500;">ลืมรหัสผ่าน?</a>
            </div>

            <div class="d-grid">
                <button type="submit" name="login_btn" class="btn-primary-modern">เข้าสู่ระบบ</button>
            </div>
        </form>

        <div class="text-center mt-4">
            <p class="mb-0 small" style="color: #f3d4e2;">ยังไม่มีบัญชีผู้ใช้? <a href="#"
                    class="text-decoration-none" style="color: #ffd1e4; font-weight: 600;">สมัครสมาชิก</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
