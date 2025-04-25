<?php
$page_title = '문의하기';
$current_page = 'contact';

// 폼 제출 처리
$message_sent = true;
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    // 유효성 검사
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error_message = '모든 필드를 채워주세요.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = '유효한 이메일 주소를 입력해주세요.';
    } else {
        // 이메일 내용 구성
       // $to = 'delizco@deliz.co.kr';
        $to = 'godsky1990@naver.com';
        $email_subject = "[웹사이트 문의] " . $subject;
        $email_body = "이름: $name\n";
        $email_body .= "이메일: $email\n\n";
        $email_body .= "문의내용:\n$message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // 이메일 전송
        if (mail($to, $email_subject, $email_body, $headers)) {
            $message_sent = true;
        } else {
            $error_message = '메일 전송에 실패했습니다. 잠시 후 다시 시도해주세요.';
        }
    }
}

require_once 'includes/header.php';
?>

<style>
    .main-content {
        max-width: 1200px;
        margin: 120px auto 4rem;
        padding: 0 2rem;
    }

    .contact-hero {
        text-align: center;
        margin-bottom: 4rem;
    }

    .contact-hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--text-color);
    }

    .contact-hero p {
        font-size: 1.2rem;
        color: #666;
        max-width: 800px;
        margin: 0 auto;
    }

    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        margin-top: 2rem;
    }

    .contact-info {
        background: var(--white);
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .contact-info h3 {
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .info-item i {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
    }

    .contact-form {
        background: var(--white);
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-color);
        font-weight: 500;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-family: inherit;
    }

    .form-group textarea {
        height: 150px;
        resize: vertical;
    }

    .submit-btn {
        background: var(--primary-color);
        color: white;
        padding: 1rem 2rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background: var(--secondary-color);
    }

    .map-container {
        margin-top: 2rem;
        border-radius: 10px;
        overflow: hidden;
        height: 300px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    #map {
        width: 100%;
        height: 100%;
        border: none;
    }

    @media (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .contact-hero h1 {
            font-size: 2rem;
        }

        .contact-hero p {
            font-size: 1rem;
        }
    }

    .alert {
        padding: 1rem;
        border-radius: 5px;
        margin-bottom: 1rem;
        font-weight: 500;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
</style>

<main class="main-content">
    <section class="contact-hero">
        <h1>문의하기</h1>
        <p>궁금하신 점이나 제안사항이 있으시다면 언제든지 문의해 주세요.</p>
    </section>

    <div class="contact-container">
        <div class="contact-info">
            <h3>연락처 정보</h3>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h4>주소</h4>
                    <p>경기도 안양시 동안구 엘에스로 142, 915호(금정역 SKV1 센터) </p>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>전화</h4>
                    <p>070-8027-2685</p>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <h4>이메일</h4>
                    <p>delizco@deliz.co.kr</p>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-clock"></i>
                <div>
                    <h4>영업시간</h4>
                    <p>평일 09:00 - 18:00</p>
                    <p>토/일/공휴일 휴무</p>
                </div>
            </div>
            <div class="map-container">
                <iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.7113323462802!2d126.94508323173778!3d37.37374783609907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b6726ae20f847%3A0x8a9abe24ca0ce00e!2z6riI7KCV7JetU0tWMeyEvO2EsA!5e1!3m2!1sko!2skr!4v1745484424197!5m2!1sko!2skr"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <div class="contact-form">
            <?php if ($message_sent): ?>
                <div class="alert alert-success">
                    문의가 성공적으로 전송되었습니다. 빠른 시일 내에 답변 드리도록 하겠습니다.
                </div>
            <?php endif; ?>
            
            <?php if ($error_message): ?>
                <div class="alert alert-error">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-group">
                    <label for="name">이름 *</label>
                    <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="email">이메일 *</label>
                    <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="subject">제목 *</label>
                    <input type="text" id="subject" name="subject" required value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="message">문의내용 *</label>
                    <textarea id="message" name="message" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> 보내기
                </button>
            </form>
        </div>
    </div>
</main>

<?php
require_once 'includes/footer.php';
?> 