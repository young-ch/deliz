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
            <div class="timeline-year">2023</div>
            <div class="timeline-content">
                <h3>글로벌 확장</h3>
                <p>동남아시아 시장 진출</p>
                <p>스마트 물류센터 구축 완료</p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2020</div>
            <div class="timeline-content">
                <h3>디지털 혁신</h3>
                <p>온라인 직거래 플랫폼 출시</p>
                <p>AI 기반 품질관리 시스템 도입</p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2015</div>
            <div class="timeline-content">
                <h3>품질 혁신</h3>
                <p>ISO 22000 인증 획득</p>
                <p>중앙물류센터 확장</p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-year">2010</div>
            <div class="timeline-content">
                <h3>회사 설립</h3>
                <p>Deliz 설립</p>
                <p>신선식품 수입 사업 시작</p>
            </div>
        </div>
    </section>

    <section class="achievement-section" data-aos="fade-up">
        <h2 style="text-align: center; margin-bottom: 2rem;">우리의 성과</h2>
        <div class="achievement-grid">
            <div class="achievement-card">
                <div class="achievement-number">13</div>
                <p>해외 직거래 산지</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">1,000+</div>
                <p>협력 매장</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">98%</div>
                <p>고객 만족도</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">24/7</div>
                <p>품질관리</p>
            </div>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?> 