<?php
$page_title = '회사소개';
$current_page = 'about';
require_once 'includes/header.php';
?>

<style>
    .main-content {
        max-width: 1400px;
        margin: 120px auto 4rem;
        padding: 0 2rem;
    }

    .about-hero {
        text-align: center;
        margin-bottom: 4rem;
        padding: 3rem 0;
    }

    .about-hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--text-color);
    }

    .about-hero p {
        font-size: 1.2rem;
        color: #666;
        max-width: 800px;
        margin: 0 auto;
    }

    .about-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 3rem;
        margin-bottom: 4rem;
    }

    .about-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 20px;
    }

    .about-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .about-content h2 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: var(--primary-color);
    }

    .about-content p {
        margin-bottom: 1rem;
        font-size: 1.1rem;
        color: #666;
    }

    .values-section {
        background: var(--white);
        padding: 4rem 2rem;
        border-radius: 20px;
        margin-bottom: 4rem;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .value-card {
        text-align: center;
        padding: 2rem;
    }

    .value-icon {
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    .value-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--text-color);
    }

    .value-card p {
        margin-bottom: 1rem;
        font-size: 1.1rem;
        color: #666;
    }

    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 2rem;
        }

        .about-hero p {
            font-size: 1rem;
        }

        .about-content h2 {
            font-size: 1.8rem;
        }

        .about-section {
            grid-template-columns: 1fr;
        }
    }
</style>

<main class="main-content">
    <section class="about-hero">
        <h1>신선한 식품으로 건강한 삶을 만듭니다</h1>
        <p>Deliz는 전 세계의 신선한 식품을 엄선하여 고객님의 식탁에 건강과 행복을 전달합니다.</p>
    </section>

    <section class="about-section" data-aos="fade-up">
        <img src="img/about-company.jpg" alt="회사 전경" class="about-image">
        <div class="about-content">
            <h2>우리의 이야기</h2>
            <p>2010년 설립된 Deliz는 신선식품 수입 및 유통 전문기업으로서, 전 세계 각지의 우수 산지와 직거래를 통해 최고 품질의 식품만을 공급하고 있습니다.</p>
            <p>완벽한 콜드체인 시스템과 철저한 품질관리를 통해 식품의 신선도를 최상으로 유지하며, 고객님께 안전하고 신선한 식품을 제공하기 위해 끊임없이 노력하고 있습니다.</p>
        </div>
    </section>

    <section class="values-section" data-aos="fade-up">
        <h2 style="text-align: center; margin-bottom: 2rem;">우리의 가치</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🌱</div>
                <h3>신선함</h3>
                <p>최고의 신선도를 위한 끊임없는 노력</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3>신뢰</h3>
                <p>고객과의 약속을 최우선으로</p>
            </div>
            <div class="value-card">
                <div class="value-icon">💪</div>
                <h3>전문성</h3>
                <p>식품 전문가들의 철저한 품질관리</p>
            </div>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html> 