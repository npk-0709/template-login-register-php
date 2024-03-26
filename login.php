<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Đăng Nhập & Đăng Kí | NPK79</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Tạo Tài Khoản</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="text" placeholder="Tên Của Bạn" require>
                <input type="email" placeholder="Email Của Bạn" require>
                <input type="password" placeholder="Mật Khẩu Của Bạn" require>
                <button>Đăng Kí</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Đăng Nhập</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="email" placeholder="Vui Lòng Nhập Email" require>
                <input type="password" placeholder="Vui Lòng Nhập Mật Khẩu" require>
                <a href="#">Bạn Quên Mật Khẩu ?</a>
                <button>Đăng Nhập</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào Mừng Quay Trở Lại !</h1>
                    <p>Vui lòng đăng nhập để sử dụng dịch vụ</p>
                    <button class="hidden" id="login">Đăng Nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bạn Chưa Có Tài Khoản ?</h1>
                    <p>Đăng kí tài khoản để trải nghiệm dịch vụ ngay !</p>
                    <button class="hidden" id="register">Đăng Kí</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>
</body>

</html>