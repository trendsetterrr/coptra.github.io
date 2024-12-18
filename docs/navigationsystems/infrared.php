<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = '';
if(isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/docs/';
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
                        <h3>Система ИК навигации</h3>
                        <h4>Инновационные технологии для точной навигации и ориентирования</h4>

                        <p>Система инфракрасной (ИК) навигации от Коптра представляет собой высокотехнологичное решение, разработанное для повышения точности и надежности навигации беспилотных летательных аппаратов. Использование ИК-технологий позволяет дронам эффективно ориентироваться в сложных условиях, включая низкую видимость и труднодоступные местности.</p>

                        <h4>Ключевые особенности системы ИК навигации</h4>

                        <p>Система ИК навигации включает в себя множество функций, которые обеспечивают высокую степень точности и надежности в работе дронов, что делает её незаменимым инструментом для различных приложений.</p>

                        <ul>
                            <li><strong>Высокая точность позиционирования:</strong> ИК-сенсоры обеспечивают точное определение местоположения дрона, что особенно важно при выполнении сложных задач, таких как строительство или сельское хозяйство.</li>
                            <li><strong>Работа в сложных условиях:</strong> Система эффективно функционирует в условиях низкой освещенности и плохой видимости, что позволяет использовать дрон в любую погоду и в любых условиях.</li>
                            <li><strong>Интеграция с другими системами:</strong> ИК навигация легко интегрируется с другими сенсорами и системами управления дронами, обеспечивая комплексный подход к навигации и безопасности полета.</li>
                        </ul>

                        <h4>Применение системы ИК навигации</h4>

                        <p>Система ИК навигации от Коптра может использоваться в самых различных областях, включая:</p>

                        <ul>
                            <li><strong>Сельское хозяйство:</strong> Для точного мониторинга посевов и анализа состояния растений в условиях низкой видимости.</li>
                            <li><strong>Строительство:</strong> Для контроля за выполнением строительных работ и точного измерения объектов.</li>
                            <li><strong>Спасательные операции:</strong> Для поиска и спасения в труднодоступных или опасных зонах, где другие технологии могут оказаться неэффективными.</li>
                        </ul>

                        <h4>Безопасность и надежность</h4>

                        <p>Система ИК навигации спроектирована с учетом всех требований безопасности. Она оснащена функциями автоматического возврата на базу и предупреждения о возможных столкновениях, что обеспечивает безопасное выполнение полетов даже в сложных условиях.</p>

                        <h4>Преимущества для пользователей</h4>

                        <p>Использование системы ИК навигации от Коптра предоставляет пользователям ряд преимуществ, включая повышение эффективности работы дронов, улучшение качества выполнения задач и расширение возможностей их применения. Эта система становится важным элементом в арсенале современных дронов, позволяя пользователям достигать новых высот в своей деятельности.</p>

                        <p>С системой ИК навигации от Коптра вы можете быть уверены в надежности и точности своих операций, что делает дроны Коптра идеальным выбором для профессионалов в различных отраслях.</p>

                        </div>
                        <div class="page-navigation">
                <?php
                $prev_page = 'docs/remotecontroller.php'; // Путь к предыдущей странице
                $next_page = 'docs/navigationsystems/ultrasonic.php'; // Путь к следующей странице
                
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
                            <h3>Система ИК навигации</h3>
                            <h4>Инновационные технологии для точной навигации и ориентирования</h4>

                            <p>Система инфракрасной (ИК) навигации от Коптра представляет собой высокотехнологичное решение, разработанное для повышения точности и надежности навигации беспилотных летательных аппаратов. Использование ИК-технологий позволяет дронам эффективно ориентироваться в сложных условиях, включая низкую видимость и труднодоступные местности.</p>

                            <h4>Ключевые особенности системы ИК навигации</h4>

                            <p>Система ИК навигации включает в себя множество функций, которые обеспечивают высокую степень точности и надежности в работе дронов, что делает её незаменимым инструментом для различных приложений.</p>

                            <ul>
                                <li><strong>Высокая точность позиционирования:</strong> ИК-сенсоры обеспечивают точное определение местоположения дрона, что особенно важно при выполнении сложных задач, таких как строительство или сельское хозяйство.</li>
                                <li><strong>Работа в сложных условиях:</strong> Система эффективно функционирует в условиях низкой освещенности и плохой видимости, что позволяет использовать дрон в любую погоду и в любых условиях.</li>
                                <li><strong>Интеграция с другими системами:</strong> ИК навигация легко интегрируется с другими сенсорами и системами управления дронами, обеспечивая комплексный подход к навигации и безопасности полета.</li>
                            </ul>

                            <h4>Применение системы ИК навигации</h4>

                            <p>Система ИК навигации от Коптра может использоваться в самых различных областях, включая:</p>

                            <ul>
                                <li><strong>Сельское хозяйство:</strong> Для точного мониторинга посевов и анализа состояния растений в условиях низкой видимости.</li>
                                <li><strong>Строительство:</strong> Для контроля за выполнением строительных работ и точного измерения объектов.</li>
                                <li><strong>Спасательные операции:</strong> Для поиска и спасения в труднодоступных или опасных зонах, где другие технологии могут оказаться неэффективными.</li>
                            </ul>

                            <h4>Безопасность и надежность</h4>

                            <p>Система ИК навигации спроектирована с учетом всех требований безопасности. Она оснащена функциями автоматического возврата на базу и предупреждения о возможных столкновениях, что обеспечивает безопасное выполнение полетов даже в сложных условиях.</p>

                            <h4>Преимущества для пользователей</h4>

                            <p>Использование системы ИК навигации от Коптра предоставляет пользователям ряд преимуществ, включая повышение эффективности работы дронов, улучшение качества выполнения задач и расширение возможностей их применения. Эта система становится важным элементом в арсенале современных дронов, позволяя пользователям достигать новых высот в своей деятельности.</p>

                            <p>С системой ИК навигации от Коптра вы можете быть уверены в надежности и точности своих операций, что делает дроны Коптра идеальным выбором для профессионалов в различных отраслях.</p>

                        </div>
                        <div class="page-navigation">
                <?php
                $prev_page = 'docs/remotecontroller.php'; // Путь к предыдущей странице
                $next_page = 'docs/navigationsystems/ultrasonic.php'; // Путь к следующей странице
                
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
