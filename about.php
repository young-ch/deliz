<?php
$page_title = '회사소개';
$current_page = 'about';
require_once 'includes/header.php';
?>

<link rel="icon" type="image/x-icon" href="img/favicon.ico">

<style>
    .main-content {
        max-width: 1400px;
        margin: 120px auto 4rem;
        padding: 0 2rem;
    }

    .about-hero {
        text-align: center;
        margin-bottom: 4rem;
        padding: 4rem 0;
        background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('img/회사소개1.png');
        background-size: cover;
        background-position: center;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .about-hero h1 {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: var(--text-color);
        font-weight: 700;
    }

    .about-hero p {
        font-size: 1.3rem;
        color: #555;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.8;
    }

    .about-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 3rem;
        margin-bottom: 4rem;
        align-items: center;
    }

    .about-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .about-image:hover {
        transform: translateY(-5px);
    }

    .about-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
    }

    .about-content h2 {
        font-size: 2.2rem;
        margin-bottom: 1.5rem;
        color: var(--primary-color);
        font-weight: 700;
        position: relative;
        padding-bottom: 1rem;
    }

    .about-content h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--primary-color);
        border-radius: 2px;
    }

    .about-content p {
        margin-bottom: 1.5rem;
        font-size: 1.15rem;
        color: #555;
        line-height: 1.8;
    }

    .values-section {
        background: linear-gradient(rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.97)), url('img/회사소개3.png');
        background-size: cover;
        background-position: center;
        padding: 5rem 2rem;
        border-radius: 20px;
        margin-bottom: 4rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .values-section h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--text-color);
        position: relative;
        display: inline-block;
        margin-bottom: 3rem;
    }

    .values-section h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: var(--primary-color);
        border-radius: 2px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2.5rem;
        margin-top: 2rem;
    }

    .value-card {
        text-align: center;
        padding: 2.5rem;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-5px);
    }

    .value-icon {
        font-size: 3.5rem;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
    }

    .value-card h3 {
        font-size: 1.6rem;
        margin-bottom: 1rem;
        color: var(--text-color);
        font-weight: 600;
    }

    .value-card p {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.6;
    }

    .download-section {
        background: var(--white);
        padding: 4rem 2rem;
        border-radius: 20px;
        text-align: center;
        margin-bottom: 4rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .download-content {
        max-width: 700px;
        margin: 0 auto;
    }

    .download-content h2 {
        font-size: 2.2rem;
        margin-bottom: 1.5rem;
        color: var(--text-color);
        font-weight: 700;
    }

    .download-content p {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .download-button {
        display: inline-flex;
        align-items: center;
        padding: 1.2rem 2.5rem;
        background-color: var(--primary-color);
        color: var(--white);
        text-decoration: none;
        border-radius: 50px;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .download-button i {
        margin-right: 12px;
        font-size: 1.3rem;
    }

    .download-button:hover {
        background-color: var(--secondary-color);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    @media (max-width: 768px) {
        .about-hero {
            padding: 3rem 1rem;
        }

        .about-hero h1 {
            font-size: 2.2rem;
        }

        .about-hero p {
            font-size: 1.1rem;
        }

        .about-content h2 {
            font-size: 2rem;
        }

        .about-section {
            grid-template-columns: 1fr;
        }

        .about-image {
            height: 350px;
        }

        .values-section {
            padding: 3rem 1rem;
        }

        .value-card {
            padding: 2rem;
        }
    }
</style>

<main class="main-content">
    <section class="about-hero" data-aos="fade-up">
        <h1>신선한 식품으로 건강한 삶을 만듭니다</h1>
        <p>Deliz는 전 세계의 신선한 식품을 엄선하여 고객님의 식탁에 건강과 행복을 전달합니다.</p>
    </section>

    <section class="about-section" data-aos="fade-up">
        <img src="img/회사사진.png" alt="회사 전경" class="about-image">
        <div class="about-content">
            <h2>우리의 이야기</h2>
            <p>2010년 설립된 Deliz는 신선식품 수입 및 유통 전문기업으로서, 전 세계 각지의 우수 산지와 직거래를 통해 최고 품질의 식품만을 공급하고 있습니다.</p>
            <p>완벽한 콜드체인 시스템과 철저한 품질관리를 통해 식품의 신선도를 최상으로 유지하며, 고객님께 안전하고 신선한 식품을 제공하기 위해 끊임없이 노력하고 있습니다.</p>
            <p>Deliz는 고객의 신뢰를 최우선 가치로 삼고, 지속 가능한 식품 문화를 선도하는 기업이 되고자 합니다.</p>
        </div>
    </section>

    <section class="values-section" data-aos="fade-up">
        <h2 style="text-align: center;">우리의 핵심 가치</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🌱</div>
                <h3>신선함</h3>
                <p>최첨단 콜드체인 시스템으로 식품의 신선도를 완벽하게 유지하며, 고객에게 최고 품질의 제품만을 제공합니다.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3>신뢰</h3>
                <p>철저한 품질 관리와 투명한 유통 과정으로 고객과의 신뢰를 구축하고 있습니다.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">💪</div>
                <h3>전문성</h3>
                <p>13년간의 경험과 전문 지식을 바탕으로 글로벌 식품 시장을 선도하고 있습니다.</p>
            </div>
        </div>
    </section>

    <section class="download-section" data-aos="fade-up">
        <div class="download-content">
            <h2>회사 소개서 다운로드</h2>
            <p>Deliz의 자세한 회사 소개와 사업 영역, 그리고 우리가 추구하는 가치에 대해 더 자세히 알아보세요.</p>
            <a href="img/deliz.pdf" download class="download-button">
                <i class="fas fa-file-pdf"></i>
                회사소개서 다운로드
            </a>
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