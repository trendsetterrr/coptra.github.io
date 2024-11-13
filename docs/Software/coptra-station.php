<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = '';
if(isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/docs/';
}
if ($isAjax) {
    ?>
    <main class="content-docs">
        <section id="documentation-content" class="documentation-content">
            <section id="documentation" class="documentation">
                <h1>Документация</h1>
                <div class="documentation-grid">
                    <h3>Система управления дронами Коптра</h3>
                    <h4>Удобный инструмент для управления беспилотниками</h4>

                    <p>Система управления дронами Коптра — это мощное и интуитивно понятное решение, разработанное для обеспечения эффективного взаимодействия с беспилотными летательными аппаратами. В этой системе реализованы все необходимые функции для управления полетами, мониторинга состояния дронов и выполнения различных задач, что делает её незаменимым инструментом для операторов.</p>

                    <h4>Основные функции системы управления Коптра</h4>

                    <p>Система управления дронами Коптра предоставляет пользователям широкий спектр возможностей:</p>

                    <ul>
                        <li><strong>Обновление прошивки:</strong> Система позволяет легко обновлять прошивку полетного контроллера, что гарантирует использование самых современных функций и исправлений.</li>
                        <li><strong>Настройка автопилота:</strong> Пользователи могут настраивать параметры автопилота в соответствии с конкретными задачами, обеспечивая оптимальную работу дронов в различных условиях.</li>
                        <li><strong>Разработка полетных заданий:</strong> Удобный интерфейс позволяет создавать и загружать полетные задания, что упрощает процесс планирования операций и увеличивает эффективность выполнения задач.</li>
                        <li><strong>Запуск скриптов:</strong> Пользователи могут запускать скрипты для тестирования различных функций и алгоритмов, что помогает в разработке и отладке программного обеспечения для дронов.</li>
                        <li><strong>Просмотр логов:</strong> Система предоставляет возможность просматривать логи работы автопилота, что позволяет анализировать данные о полетах и выявлять возможные проблемы.</li>
                    </ul>

                    <h4>Доступность и установка</h4>

                    <p>Простая установка и понятный интерфейс делают систему доступной для всех пользователей, независимо от уровня их подготовки.</p>

                    <div class="download-button-container">
                        <a href="/coptra.zip" class="download-button">Скачать приложение</a>
                    </div>

                    <h4>Заключение</h4>

                    <p>Система управления дронами Коптра — это ключевой элемент, обеспечивающий надежное и эффективное управление беспилотными летательными аппаратами. Благодаря широкому набору функций и удобству использования, операторы могут сосредоточиться на выполнении задач, не отвлекаясь на технические детали.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'Payload/option-board.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'Software/coptra-drone-sim.php'; // Путь к следующей странице
                    
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
    include __DIR__ . '/../../modules/header.php';
    ?>
    <div class="page-container">
        <main><?php include __DIR__ . '/../../modules/sidebar.php'; ?></main>
        <main class="content-docs">
            <section id="documentation-content" class="documentation-content">
                <section id="documentation" class="documentation">
                    <h1>Документация</h1>
                    <div class="documentation-grid">
                    <h3>Система управления дронами Коптра</h3>
                    <h4>Удобный инструмент для управления беспилотниками</h4>

                    <p>Система управления дронами Коптра — это мощное и интуитивно понятное решение, разработанное для обеспечения эффективного взаимодействия с беспилотными летательными аппаратами. В этой системе реализованы все необходимые функции для управления полетами, мониторинга состояния дронов и выполнения различных задач, что делает её незаменимым инструментом для операторов.</p>

                    <h4>Основные функции системы управления Коптра</h4>

                    <p>Система управления дронами Коптра предоставляет пользователям широкий спектр возможностей:</p>

                    <ul>
                        <li><strong>Обновление прошивки:</strong> Система позволяет легко обновлять прошивку полетного контроллера, что гарантирует использование самых современных функций и исправлений.</li>
                        <li><strong>Настройка автопилота:</strong> Пользователи могут настраивать параметры автопилота в соответствии с конкретными задачами, обеспечивая оптимальную работу дронов в различных условиях.</li>
                        <li><strong>Разработка полетных заданий:</strong> Удобный интерфейс позволяет создавать и загружать полетные задания, что упрощает процесс планирования операций и увеличивает эффективность выполнения задач.</li>
                        <li><strong>Запуск скриптов:</strong> Пользователи могут запускать скрипты для тестирования различных функций и алгоритмов, что помогает в разработке и отладке программного обеспечения для дронов.</li>
                        <li><strong>Просмотр логов:</strong> Система предоставляет возможность просматривать логи работы автопилота, что позволяет анализировать данные о полетах и выявлять возможные проблемы.</li>
                    </ul>

                    <h4>Доступность и установка</h4>

                    <p>Простая установка и понятный интерфейс делают систему доступной для всех пользователей, независимо от уровня их подготовки.</p>

                    <div class="download-button-container">
                        <a href="/coptra.zip" class="download-button">Скачать приложение</a>
                    </div>

                    <h4>Заключение</h4>

                    <p>Система управления дронами Коптра — это ключевой элемент, обеспечивающий надежное и эффективное управление беспилотными летательными аппаратами. Благодаря широкому набору функций и удобству использования, операторы могут сосредоточиться на выполнении задач, не отвлекаясь на технические детали.</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'Payload/option-board.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'Software/coptra-drone-sim.php'; // Путь к следующей странице
                        
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