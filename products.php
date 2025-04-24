<?php
// 상품 데이터 불러오기
require_once 'includes/product_data.php';

// 디버깅을 위한 초기 상품 데이터 확인
error_log('Initial products count: ' . count($products));

// 현재 선택된 카테고리
$selected_category = isset($_GET['category']) ? $_GET['category'] : '전체';
error_log('Selected category: ' . $selected_category);

// 카테고리에 따른 상품 필터링
$filtered_products = $products;
if ($selected_category !== '전체') {
    $filtered_products = array_filter($products, function($product) use ($selected_category) {
        return $product['category'] === $selected_category;
    });
}
error_log('Filtered products count: ' . count($filtered_products));

// 페이지당 상품 수
$items_per_page = 12;

// 현재 페이지 번호
$current_page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
error_log('Current page: ' . $current_page);

// 전체 상품 수
$total_items = count($filtered_products);
error_log('Total items: ' . $total_items);

// 전체 페이지 수
$total_pages = max(1, ceil($total_items / $items_per_page));
error_log('Total pages: ' . $total_pages);

// 현재 페이지가 총 페이지 수를 넘지 않도록 조정
$current_page = min($current_page, $total_pages);

// 현재 페이지의 상품 목록
$current_products = array_slice(
    array_values($filtered_products), 
    ($current_page - 1) * $items_per_page, 
    $items_per_page
);
error_log('Current products count: ' . count($current_products));

// 모든 카테고리 목록 가져오기
$categories = array_unique(array_column($products, 'category'));
sort($categories);

$page_title = '상품소개';
$current_menu = 'products'; // current_page를 current_menu로 변경
require_once 'includes/header.php';
?>

<style>
    .main-content {
        max-width: 1200px;
        margin: 120px auto 4rem;
        padding: 0 2rem;
    }

    .page-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .page-title h1 {
        font-size: 2.2rem;
        color: var(--text-color);
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    .page-title p {
        color: #666;
        font-size: 1.1rem;
    }

    .product-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.8rem;
        margin-bottom: 3rem;
        justify-content: center;
    }

    .filter-btn {
        padding: 0.6rem 1.5rem;
        border: none;
        background: var(--white);
        color: var(--text-color);
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.9rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .filter-btn:hover {
        background: var(--primary-color);
        color: var(--white);
        transform: translateY(-2px);
    }

    .filter-btn.active {
        background: var(--primary-color);
        color: var(--white);
        box-shadow: 0 4px 12px rgba(46, 204, 113, 0.2);
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    .product-card {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .product-card:hover .product-image {
        transform: scale(1.05);
    }

    .product-image-wrapper {
        overflow: hidden;
        position: relative;
        padding-top: 100%; /* 1:1 Aspect Ratio */
    }

    .product-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-info {
        padding: 1rem;
        background: linear-gradient(
            180deg,
            rgba(255,255,255,0.95) 0%,
            rgba(255,255,255,1) 100%
        );
    }

    .product-category {
        font-size: 0.75rem;
        color: var(--primary-color);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.3rem;
        font-weight: 600;
    }

    .product-name {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0.3rem;
        color: var(--text-color);
        line-height: 1.3;
    }

    .product-description {
        color: #666;
        font-size: 0.85rem;
        margin-bottom: 0;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
        opacity: 0.9;
    }

    .product-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    @media (max-width: 1024px) {
        .products-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 1.2rem;
        }
    }

    @media (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .page-title h1 {
            font-size: 1.8rem;
        }

        .page-title p {
            font-size: 1rem;
        }

        .filter-btn {
            padding: 0.5rem 1.2rem;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 480px) {
        .main-content {
            padding: 0 1rem;
        }

        .products-grid {
            gap: 0.8rem;
        }

        .product-info {
            padding: 0.8rem;
        }

        .product-name {
            font-size: 0.9rem;
        }

        .product-description {
            font-size: 0.8rem;
        }
    }

    /* 페이지네이션 스타일 업데이트 */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        margin-top: 2rem;
    }

    .pagination a, .pagination span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 35px;
        height: 35px;
        padding: 0 0.8rem;
        border-radius: 8px;
        background: var(--white);
        color: var(--text-color);
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .pagination a:hover {
        background: var(--primary-color);
        color: var(--white);
        transform: translateY(-2px);
    }

    .pagination .active {
        background: var(--primary-color);
        color: var(--white);
        box-shadow: 0 4px 12px rgba(46, 204, 113, 0.2);
    }

    .pagination .disabled {
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
    }
</style>

<main class="main-content">
    <div class="page-title">
        <h1>신선한 식품의 발견</h1>
        <p>엄선된 프리미엄 식품을 만나보세요</p>
    </div>

    <div class="product-filters">
        <button class="filter-btn <?php echo $selected_category === '전체' ? 'active' : ''; ?>" data-category="전체">전체</button>
        <?php foreach ($categories as $category): ?>
        <button class="filter-btn <?php echo $selected_category === $category ? 'active' : ''; ?>" data-category="<?php echo htmlspecialchars($category); ?>">
            <?php echo htmlspecialchars($category); ?>
        </button>
        <?php endforeach; ?>
    </div>

    <div class="products-grid">
        <?php if (empty($current_products)): ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 2rem;">
            <p>해당 카테고리에 상품이 없습니다.</p>
        </div>
        <?php else: ?>
            <?php foreach ($current_products as $product): ?>
            <div class="product-card" data-aos="fade-up">
                <?php if (!empty($product['link'])): ?>
                <a href="<?php echo htmlspecialchars($product['link']); ?>" class="product-link">
                <?php endif; ?>
                    <div class="product-image-wrapper">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>" 
                             class="product-image">
                    </div>
                    <div class="product-info">
                        <div class="product-category"><?php echo htmlspecialchars($product['category']); ?></div>
                        <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                    </div>
                <?php if (!empty($product['link'])): ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php if ($total_pages > 1): ?>
    <div class="pagination">
        <?php if ($current_page > 1): ?>
            <a href="?page=1<?php echo $selected_category !== '전체' ? '&category='.urlencode($selected_category) : ''; ?>">&laquo;</a>
            <a href="?page=<?php echo $current_page - 1; ?><?php echo $selected_category !== '전체' ? '&category='.urlencode($selected_category) : ''; ?>">&lsaquo;</a>
        <?php else: ?>
            <span class="disabled">&laquo;</span>
            <span class="disabled">&lsaquo;</span>
        <?php endif; ?>

        <?php
        $start_page = max(1, $current_page - 2);
        $end_page = min($total_pages, $current_page + 2);

        for ($i = $start_page; $i <= $end_page; $i++):
        ?>
            <?php if ($i == $current_page): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?><?php echo $selected_category !== '전체' ? '&category='.urlencode($selected_category) : ''; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($current_page < $total_pages): ?>
            <a href="?page=<?php echo $current_page + 1; ?><?php echo $selected_category !== '전체' ? '&category='.urlencode($selected_category) : ''; ?>">&rsaquo;</a>
            <a href="?page=<?php echo $total_pages; ?><?php echo $selected_category !== '전체' ? '&category='.urlencode($selected_category) : ''; ?>">&raquo;</a>
        <?php else: ?>
            <span class="disabled">&rsaquo;</span>
            <span class="disabled">&raquo;</span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</main>

<script>
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
        const category = button.dataset.category;
        window.location.href = '?category=' + encodeURIComponent(category);
    });
});
</script>

<?php
require_once 'includes/footer.php';
?> 