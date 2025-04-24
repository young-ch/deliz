<?php
$page_title = '홈';
$current_page = 'home';
require_once 'includes/header.php';
?>

<style>
:root {
    --primary-color: #2ecc71;
    --secondary-color: #27ae60;
    --accent-color: #f39c12;
    --text-color: #2c3e50;
    --light-bg: #f8f9fa;
    --white: #ffffff;
}

body {
    font-family: 'Noto Sans KR', sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    background: linear-gradient(rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.97)),
                url('https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3') center/cover fixed;
}

.main-wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    position: relative;
}

.main-content {
    flex: 1;
    padding-top: 80px;
}

.hero-section {
    position: relative;
    height: 90vh;
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-bottom: 4rem;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), 
                url('https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3') center/cover no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

.hero-content {
    position: relative;
    text-align: center;
    color: var(--white);
    max-width: 800px;
    padding: 0 2rem;
    z-index: 1;
    background: rgba(0, 0, 0, 0.3);
    padding: 3rem;
    border-radius: 20px;
    backdrop-filter: blur(5px);
}

.hero-content h1 {
    font-size: 4rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease forwards;
}

.hero-content p {
    font-size: 1.4rem;
    margin-bottom: 2.5rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease 0.3s forwards;
}

.cta-button {
    display: inline-block;
    padding: 1.2rem 3rem;
    background-color: var(--accent-color);
    color: var(--white);
    text-decoration: none;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease 0.6s forwards;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.cta-button:hover {
    background-color: #e67e22;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.25);
}

.features-section {
    position: relative;
    padding: 6rem 2rem;
    background-color: rgba(248, 249, 250, 0.9);
    backdrop-filter: blur(10px);
}

.features-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2.5rem;
}

.feature-card {
    text-align: center;
    padding: 3rem 2rem;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
}

.feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.feature-card:hover::before {
    transform: scaleX(1);
}

.feature-card i {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    transition: transform 0.3s ease;
}

.feature-card:hover i {
    transform: scale(1.1);
}

.feature-card h3 {
    font-size: 1.5rem;
    color: var(--text-color);
    margin-bottom: 1rem;
}

.feature-card p {
    color: #666;
    line-height: 1.6;
}

.products-preview {
    position: relative;
    padding: 6rem 2rem;
    background-color: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
}

.section-title {
    text-align: center;
    margin-bottom: 4rem;
}

.section-title h2 {
    font-size: 2.5rem;
    color: var(--text-color);
    margin-bottom: 1rem;
}

.section-title p {
    color: #666;
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
}

.products-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2.5rem;
}

.product-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.product-image {
    position: relative;
    padding-top: 75%;
    overflow: hidden;
}

.product-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.product-info {
    padding: 2rem;
}

.product-info h3 {
    font-size: 1.5rem;
    color: var(--text-color);
    margin-bottom: 0.5rem;
}

.product-info p {
    color: #666;
    line-height: 1.6;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2.5rem;
    }

    .hero-content p {
        font-size: 1.1rem;
    }

    .cta-button {
        padding: 1rem 2rem;
        font-size: 1rem;
    }

    .features-grid, .products-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .section-title h2 {
        font-size: 2rem;
    }
}
</style>

<div class="main-wrapper">
    <main class="main-content">
        <section class="hero-section">
            <div class="hero-background"></div>
            <div class="hero-content">
                <h1>자연의 신선함을 전합니다</h1>
                <p>정직한 농부의 땀과 정성으로 키운 신선한 식품을 여러분의 식탁으로 전달합니다</p>
                <a href="products.php" class="cta-button">제품 보기</a>
            </div>
        </section>

        <section class="features-section" data-aos="fade-up">
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-seedling"></i>
                    <h3>친환경 재배</h3>
                    <p>자연과 조화를 이루는 친환경 농법으로 재배된 신선한 작물을 제공합니다</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-truck-fast"></i>
                    <h3>당일 배송</h3>
                    <p>아침에 수확한 신선한 작물을 당일 배송으로 빠르게 전달해드립니다</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-award"></i>
                    <h3>품질 보증</h3>
                    <p>까다로운 품질 관리를 통과한 최상급 제품만을 선별하여 제공합니다</p>
                </div>
            </div>
        </section>

        <section class="products-preview">
            <div class="section-title" data-aos="fade-up">
                <h2>엄선된 신선 식품</h2>
                <p>정성껏 키운 신선한 농산물과 엄선된 식품을 만나보세요</p>
            </div>
            <div class="products-grid">
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-image">
                        <img src="img/통살탕수육.png" alt="신선한 채소">
                    </div>
                    <div class="product-info">
                        <h3>통살 탕수육</h3>
                        <p>엄선된 돼지고기로 만든 바삭하고 부드러운 탕수육</p>
                    </div>
                </div>
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-image">
                        <img src="img/족발편육400g.png" alt="신선한 과일">
                    </div>
                    <div class="product-info">
                        <h3>족발 편육</h3>
                        <p>부드럽고 쫄깃한 식감의 프리미엄 족발</p>
                    </div>
                </div>
                <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-image">
                        <img src="img/수제돈까스80g.png" alt="가공 식품">
                    </div>
                    <div class="product-info">
                        <h3>수제 돈까스</h3>
                        <p>국내산 돼지고기로 만든 바삭한 수제 돈까스</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>

<?php
require_once 'includes/footer.php';
?>