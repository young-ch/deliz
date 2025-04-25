<?php
$page_title = '연혁';
$current_page = 'history';
require_once 'includes/header.php';
?>

<style>
    .main-content {
        max-width: 1400px;
        margin: 120px auto 4rem;
        padding: 0 2rem;
    }

    .history-hero {
        text-align: center;
        margin-bottom: 4rem;
        padding: 3rem 0;
    }

    .history-hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--text-color);
    }

    .history-hero p {
        font-size: 1.2rem;
        color: #666;
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
        padding: 2rem 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        width: 2px;
        background: var(--primary-color);
        top: 0;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .timeline-item {
        margin-bottom: 4rem;
        position: relative;
        width: 100%;
    }

    .timeline-content {
        position: relative;
        width: 45%;
        padding: 2rem;
        background: var(--white);
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .timeline-item:nth-child(odd) .timeline-content {
        left: 0;
    }

    .timeline-item:nth-child(even) .timeline-content {
        left: 55%;
    }

    .timeline-year {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background: var(--primary-color);
        color: var(--white);
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-weight: 700;
    }

    .timeline-content h3 {
        color: var(--primary-color);
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .timeline-content p {
        color: #666;
        margin-bottom: 0.5rem;
    }

    .achievement-section {
        background: var(--white);
        padding: 4rem 2rem;
        border-radius: 20px;
        margin: 4rem 0;
    }

    .achievement-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .achievement-card {
        text-align: center;
        padding: 2rem;
    }

    .achievement-number {
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
        .timeline::before {
            left: 30px;
        }

        .timeline-content {
            width: calc(100% - 60px);
            left: 60px !important;
        }

        .timeline-year {
            left: 30px;
            transform: translateX(-50%);
        }
    }
</style>

<main class="main-content">
    <section class="history-hero">
        <h1>Deliz의 발자취</h1>
        <p>신선한 식품으로 더 나은 미래를 만들어가는 우리의 여정입니다.</p>
    </section>

    <section class="timeline">
        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2024</div>
            <div class="timeline-content">
                <h3>다양한 상품소싱 준비</h3>
                <p>구운야채 상품소싱 출시예정</p>
                <p>(구운 냉동버섯, 구운 냉동야채, 자숙대두 등)</p>
                <p>연두부튀김 상품소싱 출시예정</p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2023</div>
            <div class="timeline-content">
                <h3>사업 확장</h3>
                <p>풀무원푸드머스 거래 개시</p>
                <p>롯데리아 니트릴장갑 납품 계약</p>
                <p>Cj프레시웨이, 현대그린푸드, 푸디스트 거래 개시</p>
                <p>아만인터네셔널 분할 델리즈 / 아만인터네셔널</p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2022</div>
            <div class="timeline-content">
                <p>중국산 감자 튀김 4종 소싱(크링클컷, 레귤러컷, 슈스트링, 웨지)</p>
                <p>교촌/BHC/BBQ/롯데리아/아웃백 감자 튀김 납품 계약 및 진행</p>
                <p>중국산 스위트 콘 소싱 개시</p>
                <p>베트남산 새우 튀김류 소싱 개시</p>

            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2021</div>
            <div class="timeline-content">
                <h3>거래 개시</h3>
                <p>2021년 동원홈푸드, 삼성웰스토리 거래 개시시</p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2021 이전</div>
            <div class="timeline-content">
                <h3>회사 설립</h3>
                <p>2020년 주식회사 아만이터네셔널 설립</p>
                <p>2020년 식품 수입 개시(당면, 튀긴 마늘 슬라이스 등 수입 개시)</p>
            </div>
        </div>
    </section>

    
</main>

<?php
require_once 'includes/footer.php';
?> 