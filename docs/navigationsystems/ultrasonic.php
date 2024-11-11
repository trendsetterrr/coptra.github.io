<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = 'rework'; // Имя папки вашего проекта
if(isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/' . $project_folder . '/';
}
if ($isAjax) {
    // Если это AJAX-запрос, возвращаем только содержимое документации
    ?>
    <main></main>
            <main class="content-docs">
                <section id="documentation-content" class="documentation-content">
                    <section id="documentation" class="documentation">
                    <h1>Документация</h1>
                        <div class="documentation-grid">
                        <h3>Система УЗ навигации</h3>
                        <h4>Точные решения для эффективной навигации дронов</h4>

                        <p>Система ультразвуковой (УЗ) навигации от Коптра представляет собой современное решение, обеспечивающее высокую точность позиционирования и ориентирования беспилотных летательных аппаратов в различных условиях. Использование ультразвуковых технологий позволяет дронам успешно работать в сложных и динамичных средах, минимизируя ошибки навигации.</p>

                        <h4>Ключевые характеристики системы УЗ навигации</h4>

                        <p>Система УЗ навигации включает в себя ряд уникальных функций, которые делают её незаменимым инструментом для эффективного управления дронами:</p>

                        <ul>
                            <li><strong>Высокая точность определения высоты:</strong> УЗ-сенсоры обеспечивают точное измерение расстояния до поверхности, что позволяет дрону поддерживать заданную высоту и избегать препятствий.</li>
                            <li><strong>Работа в различных условиях:</strong> Система эффективно функционирует как в открытых пространствах, так и в ограниченных условиях, таких как городские районы или помещения, где другие навигационные технологии могут оказаться неэффективными.</li>
                            <li><strong>Интеграция с другими навигационными системами:</strong> УЗ навигация может работать в сочетании с другими технологиями, такими как GPS и ИК-датчики, что обеспечивает комплексное решение для повышения точности и надежности полетов.</li>
                        </ul>

                        <h4>Области применения системы УЗ навигации</h4>

                        <p>Система УЗ навигации от Коптра может использоваться в различных сферах, включая:</p>

                        <ul>
                            <li><strong>Сельское хозяйство:</strong> Для мониторинга полей и определения высоты растений, что позволяет оптимизировать процессы орошения и внесения удобрений.</li>
                            <li><strong>Строительство:</strong> Для точного измерения высоты и контроля за строительными проектами, что способствует повышению качества и безопасности работ.</li>
                            <li><strong>Логистика:</strong> Для управления складскими процессами и отслеживания местоположения грузов в помещениях.</li>
                        </ul>

                        <h4>Надежность и безопасность</h4>

                        <p>Система УЗ навигации спроектирована с акцентом на безопасность и надежность. Она включает в себя функции предотвращения столкновений и автоматического возврата на базу, что обеспечивает безопасное выполнение полетов даже в сложных условиях.</p>

                        <h4>Преимущества для пользователей</h4>

                        <p>Система УЗ навигации от Коптра предлагает пользователям множество преимуществ, включая повышение точности работы дронов, улучшение качества выполнения задач и расширение возможностей их применения в различных отраслях. Это делает её важным инструментом для профессионалов, стремящихся оптимизировать свои процессы и достигать высоких результатов.</p>

                        <p>С системой УЗ навигации от Коптра вы можете быть уверены в надежности и точности своих операций, что открывает новые горизонты для применения беспилотных летательных аппаратов в вашей деятельности.</p>

                        </div>
                        <div class="page-navigation">
                <?php
                $prev_page = $root_path . 'docs/navigationsystems/infrared.php'; // Путь к предыдущей странице
                $next_page = $root_path . 'docs/navigationsystems/optical.php'; // Путь к следующей странице
                
                if ($prev_page): ?>
                    <a href="<?php echo $prev_page; ?>" class="nav-button prev" data-ajax-load>
                        Предыдущая страница
                    </a>
                <?php endif; ?>
                
                <?php if ($next_page): ?>
                    <a href="<?php echo $next_page; ?>" class="nav-button next" data-ajax-load>
                        Следующая страница
                    </a>
                <?php endif; ?>
            </div>
                    </section>
                </section>
            </main>
    <?php
} else {
    // Если это обычный запрос, возвращаем полную страницу
    include __DIR__ . '/../../modules/header.php';
    ?>
    <div class="page-container">
            <main><?php include __DIR__ . '/../../modules/sidebar.php'; ?></main>
            <main class="content-docs">
                <section id="documentation-content" class="documentation-content">
                    <section id="documentation" class="documentation">
                    <h1>Документация</h1>
                        <div class="documentation-grid">
                            <h3>Система УЗ навигации</h3>
                            <h4>Точные решения для эффективной навигации дронов</h4>

                            <p>Система ультразвуковой (УЗ) навигации от Коптра представляет собой современное решение, обеспечивающее высокую точность позиционирования и ориентирования беспилотных летательных аппаратов в различных условиях. Использование ультразвуковых технологий позволяет дронам успешно работать в сложных и динамичных средах, минимизируя ошибки навигации.</p>

                            <h4>Ключевые характеристики системы УЗ навигации</h4>

                            <p>Система УЗ навигации включает в себя ряд уникальных функций, которые делают её незаменимым инструментом для эффективного управления дронами:</p>

                            <ul>
                                <li><strong>Высокая точность определения высоты:</strong> УЗ-сенсоры обеспечивают точное измерение расстояния до поверхности, что позволяет дрону поддерживать заданную высоту и избегать препятствий.</li>
                                <li><strong>Работа в различных условиях:</strong> Система эффективно функционирует как в открытых пространствах, так и в ограниченных условиях, таких как городские районы или помещения, где другие навигационные технологии могут оказаться неэффективными.</li>
                                <li><strong>Интеграция с другими навигационными системами:</strong> УЗ навигация может работать в сочетании с другими технологиями, такими как GPS и ИК-датчики, что обеспечивает комплексное решение для повышения точности и надежности полетов.</li>
                            </ul>

                            <h4>Области применения системы УЗ навигации</h4>

                            <p>Система УЗ навигации от Коптра может использоваться в различных сферах, включая:</p>

                            <ul>
                                <li><strong>Сельское хозяйство:</strong> Для мониторинга полей и определения высоты растений, что позволяет оптимизировать процессы орошения и внесения удобрений.</li>
                                <li><strong>Строительство:</strong> Для точного измерения высоты и контроля за строительными проектами, что способствует повышению качества и безопасности работ.</li>
                                <li><strong>Логистика:</strong> Для управления складскими процессами и отслеживания местоположения грузов в помещениях.</li>
                            </ul>

                            <h4>Надежность и безопасность</h4>

                            <p>Система УЗ навигации спроектирована с акцентом на безопасность и надежность. Она включает в себя функции предотвращения столкновений и автоматического возврата на базу, что обеспечивает безопасное выполнение полетов даже в сложных условиях.</p>

                            <h4>Преимущества для пользователей</h4>

                            <p>Система УЗ навигации от Коптра предлагает пользователям множество преимуществ, включая повышение точности работы дронов, улучшение качества выполнения задач и расширение возможностей их применения в различных отраслях. Это делает её важным инструментом для профессионалов, стремящихся оптимизировать свои процессы и достигать высоких результатов.</p>

                            <p>С системой УЗ навигации от Коптра вы можете быть уверены в надежности и точности своих операций, что открывает новые горизонты для применения беспилотных летательных аппаратов в вашей деятельности.</p>

                        </div>
                        <div class="page-navigation">
                <?php
                $prev_page = $root_path . 'docs/navigationsystems/infrared.php'; // Путь к предыдущей странице
                $next_page = $root_path . 'docs/navigationsystems/optical.php'; // Путь к следующей странице
                
                if ($prev_page): ?>
                    <a href="<?php echo $prev_page; ?>" class="nav-button prev" data-ajax-load>
                        Предыдущая страница
                    </a>
                <?php endif; ?>
                
                <?php if ($next_page): ?>
                    <a href="<?php echo $next_page; ?>" class="nav-button next" data-ajax-load>
                        Следующая страница
                    </a>
                <?php endif; ?>
            </div>
                    </section>
                </section>
            </main>
</div>
    <?php
    include __DIR__ . '/../../modules/footer.php';
}
?>
