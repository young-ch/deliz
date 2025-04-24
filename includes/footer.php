    </div> <!-- main-wrapper end -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>(주)델리즈</h4>
                <p>신선한 식품의 시작</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h4>연락처</h4>
                <p><i class="fas fa-phone"></i> 070-8027-2685</p>
                <p><i class="fas fa-envelope"></i> delizco@deliz.co.kr</p>
                <p><i class="fas fa-fax"></i> 0504-031-8491</p>
            </div>
            <div class="footer-section">
                <h4>주소</h4>
                <p><i class="fas fa-map-marker-alt"></i> 경기도 안양시 동안구 엘에스로 142, 915호(금정역 SKV1 센터)</p>
                <p><i class="far fa-clock"></i> 영업시간: 09:00 - 18:00</p>
                <p><i class="fas fa-calendar-alt"></i> 토/일/공휴일 휴무</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> (주)델리즈. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // 모바일 메뉴 토글
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
    </script>
</body>
</html>

<style>
.footer {
    background-color: var(--white);
    color: var(--text-color);
    padding: 2rem 2rem 1rem;
    box-shadow: 0 -10px 30px rgba(0,0,0,0.05);
}

.footer-content {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.footer-section h4 {
    color: var(--primary-color);
    font-size: 1.1rem;
    margin-bottom: 1rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.footer-section h4::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: var(--primary-color);
}

.footer-section p {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
}

.footer-section i {
    color: var(--primary-color);
    width: 20px;
}

.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 0.8rem;
}

.social-links a {
    color: var(--text-color);
    text-decoration: none;
    transition: color 0.3s ease;
    font-size: 1.2rem;
}

.social-links a:hover {
    color: var(--primary-color);
}

.footer-bottom {
    text-align: center;
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(0,0,0,0.1);
    color: #666;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .footer {
        padding: 2rem 1rem 1rem;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}
</style> 