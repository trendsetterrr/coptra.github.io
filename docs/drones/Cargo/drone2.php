<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = 'rework'; // Имя папки вашего проекта
if(isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/';
}
if ($isAjax) {
    ?>
    <main class="content-docs">
        <section id="documentation-content" class="documentation-content">
            <section id="documentation" class="documentation">
                <h1>Документация</h1>
                <div class="documentation-grid">
                <h3>Второй грузовой дрон</h3>
                <h4>Инновационные решения для эффективной логистики</h4>

                <p>Второй грузовой дрон от Коптра является продолжением нашей линейки инновационных решений, разработанных для оптимизации процессов доставки и транспортировки грузов. Эта модель предлагает улучшенные характеристики и технологии, которые делают его незаменимым инструментом для бизнеса в различных отраслях.</p>

                <h4>Передовые технологии и функциональность</h4>

                <p>Второй грузовой дрон отличается высоким уровнем производительности и надежности, что позволяет эффективно справляться с различными задачами логистики и доставки. Он сочетает в себе мощные двигатели, увеличенную грузоподъемность и продвинутое управление.</p>

                <ul>
                    <li><strong>Увеличенная грузоподъемность:</strong> Новый дрон способен перевозить более тяжелые и объемные грузы, что расширяет его применение в различных сферах, включая торговлю и промышленность.</li>
                    <li><strong>Автономные полеты:</strong> Оснащенный системой автоматического управления, дрон может выполнять автономные рейсы, минимизируя участие человека и увеличивая безопасность операций.</li>
                    <li><strong>Интеллектуальные маршруты:</strong> Благодаря алгоритмам оптимизации маршрутов, дрон может выбирать наиболее эффективные пути, что сокращает время доставки и экономит ресурсы.</li>
                </ul>

                <h4>Прочность и устойчивость</h4>

                <p>Второй грузовой дрон спроектирован с акцентом на прочность и надежность. Он способен работать в сложных климатических условиях, включая дождь и ветер, что делает его идеальным решением для круглогодичного использования. Корпус дрона защищает его от повреждений, обеспечивая долгий срок службы.</p>

                <h4>Удобство управления и мониторинга</h4>

                <p>Дрон предлагает интуитивно понятное программное обеспечение для управления, которое позволяет легко настраивать параметры полета и контролировать доставку. Пользователи могут в реальном времени отслеживать местоположение и состояние груза, что обеспечивает полный контроль над процессом доставки.</p>

                <h4>Широкий спектр применения и возможности</h4>

                <p>Второй грузовой дрон отлично подходит для различных бизнес-приложений, включая доставку товаров для онлайн-торговли, медицинских препаратов и сельскохозяйственной продукции. Его возможности делают его идеальным инструментом для повышения эффективности в любой отрасли, требующей быстрой и надежной доставки.</p>

                <p>С вторым грузовым дроном от Коптра вы получите не только современное решение для логистики, но и возможность повысить конкурентоспособность вашего бизнеса. Эта модель открывает новые горизонты в области грузоперевозок и обеспечивает максимальную эффективность на каждом этапе доставки.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'docs/drones/Cargo/drone1.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'docs/drones/Cargo/drone3.php'; // Путь к следующей странице
                    
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
    include __DIR__ . '/../../../modules/header.php';
    ?>
    <div class="page-container">
        <main><?php include __DIR__ . '/../../../modules/sidebar.php'; ?></main>
        <main class="content-docs">
            <section id="documentation-content" class="documentation-content">
                <section id="documentation" class="documentation">
                    <h1>Документация</h1>
                    <div class="documentation-grid">
                    <h3>Второй грузовой дрон</h3>
                <h4>Инновационные решения для эффективной логистики</h4>

                <p>Второй грузовой дрон от Коптра является продолжением нашей линейки инновационных решений, разработанных для оптимизации процессов доставки и транспортировки грузов. Эта модель предлагает улучшенные характеристики и технологии, которые делают его незаменимым инструментом для бизнеса в различных отраслях.</p>

                <h4>Передовые технологии и функциональность</h4>

                <p>Второй грузовой дрон отличается высоким уровнем производительности и надежности, что позволяет эффективно справляться с различными задачами логистики и доставки. Он сочетает в себе мощные двигатели, увеличенную грузоподъемность и продвинутое управление.</p>

                <ul>
                    <li><strong>Увеличенная грузоподъемность:</strong> Новый дрон способен перевозить более тяжелые и объемные грузы, что расширяет его применение в различных сферах, включая торговлю и промышленность.</li>
                    <li><strong>Автономные полеты:</strong> Оснащенный системой автоматического управления, дрон может выполнять автономные рейсы, минимизируя участие человека и увеличивая безопасность операций.</li>
                    <li><strong>Интеллектуальные маршруты:</strong> Благодаря алгоритмам оптимизации маршрутов, дрон может выбирать наиболее эффективные пути, что сокращает время доставки и экономит ресурсы.</li>
                </ul>

                <h4>Прочность и устойчивость</h4>

                <p>Второй грузовой дрон спроектирован с акцентом на прочность и надежность. Он способен работать в сложных климатических условиях, включая дождь и ветер, что делает его идеальным решением для круглогодичного использования. Корпус дрона защищает его от повреждений, обеспечивая долгий срок службы.</p>

                <h4>Удобство управления и мониторинга</h4>

                <p>Дрон предлагает интуитивно понятное программное обеспечение для управления, которое позволяет легко настраивать параметры полета и контролировать доставку. Пользователи могут в реальном времени отслеживать местоположение и состояние груза, что обеспечивает полный контроль над процессом доставки.</p>

                <h4>Широкий спектр применения и возможности</h4>

                <p>Второй грузовой дрон отлично подходит для различных бизнес-приложений, включая доставку товаров для онлайн-торговли, медицинских препаратов и сельскохозяйственной продукции. Его возможности делают его идеальным инструментом для повышения эффективности в любой отрасли, требующей быстрой и надежной доставки.</p>

                <p>С вторым грузовым дроном от Коптра вы получите не только современное решение для логистики, но и возможность повысить конкурентоспособность вашего бизнеса. Эта модель открывает новые горизонты в области грузоперевозок и обеспечивает максимальную эффективность на каждом этапе доставки.</p>
                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'docs/drones/Cargo/drone1.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'docs/drones/Cargo/drone3.php'; // Путь к следующей странице
                        
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
    include __DIR__ . '/../../../modules/footer.php';
}
?>
