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
                <h3>Третий сельскохозяйственный дрон</h3>
                <h4>Профессиональный инструмент для агрономов и исследователей</h4>

                <p>Третий сельскохозяйственный дрон от Коптра представляет собой мощную и высокотехнологичную платформу, созданную для решения самых сложных задач в области сельского хозяйства. Этот дрон предоставляет агрономам и исследователям доступ к передовым технологиям, позволяя эффективно управлять урожайностью и анализировать состояние культур.</p>

                <h4>Инновационные технологии и возможности</h4>

                <p>Третий сельскохозяйственный дрон включает в себя широкий спектр функций, позволяющих оптимизировать процессы мониторинга и управления. Он предлагает уникальные решения для точного земледелия, что делает его незаменимым помощником в современных агрономических практиках.</p>

                <ul>
                    <li><strong>Мультиспектральная съемка:</strong> Дрон оснащен мультиспектральными камерами, которые позволяют проводить детальный анализ состояния растений, определять уровень здоровья культур и выявлять возможные проблемы на ранних стадиях.</li>
                    <li><strong>Обработка и анализ данных:</strong> Интегрированные системы сбора и анализа данных позволяют получать качественные отчеты о состоянии полей, что упрощает процесс принятия решений и улучшает планирование агрономических работ.</li>
                    <li><strong>Автоматизированные операции:</strong> Дрон способен выполнять заранее запрограммированные маршруты и задачи, включая распыление удобрений и пестицидов, что значительно повышает эффективность работы.</li>
                </ul>

                <h4>Конструкция и надежность</h4>

                <p>Третий сельскохозяйственный дрон разработан с акцентом на надежность и устойчивость к различным условиям эксплуатации. Он обладает прочным корпусом, который обеспечивает защиту от внешних факторов и позволяет выполнять полеты в сложных погодных условиях. В комплект входят все необходимые компоненты для быстрого запуска и настройки.</p>

                <h4>Интуитивно понятное управление и программное обеспечение</h4>

                <p>Дрон поставляется с простым в использовании интерфейсом управления, который позволяет агрономам и фермерам легко настраивать полеты, выбирать параметры съемки и анализировать собранные данные. Программное обеспечение включает инструменты для визуализации данных, что помогает лучше понять состояние полей и принимать обоснованные решения.</p>

                <h4>Устойчивое развитие и экономическая выгода</h4>

                <p>Третий сельскохозяйственный дрон от Коптра способствует устойчивому развитию сельского хозяйства, позволяя фермерам сократить затраты и повысить урожайность. Использование этого дрона помогает более эффективно использовать ресурсы, что, в свою очередь, приводит к улучшению экосистемы и повышению производительности на каждом этапе агрономического цикла.</p>

                <p>Таким образом, третий сельскохозяйственный дрон является необходимым инструментом для тех, кто стремится использовать современные технологии в агрономии и достигать максимальных результатов в своей деятельности.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'docs/drones/Agricultural/drone2.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'docs/drones/FPV/drone1.php'; // Путь к следующей странице
                    
                    if ($prev_page): ?>
                        <a href="<?php echo $prev_page; ?>" class="nav-button prev" data-ajax-load>
                            Предыдущая страница
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($next_page && $next_page !== '#'): ?>
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
                    <h3>Третий сельскохозяйственный дрон</h3>
                    <h4>Профессиональный инструмент для агрономов и исследователей</h4>

                    <p>Третий сельскохозяйственный дрон от Коптра представляет собой мощную и высокотехнологичную платформу, созданную для решения самых сложных задач в области сельского хозяйства. Этот дрон предоставляет агрономам и исследователям доступ к передовым технологиям, позволяя эффективно управлять урожайностью и анализировать состояние культур.</p>

                    <h4>Инновационные технологии и возможности</h4>

                    <p>Третий сельскохозяйственный дрон включает в себя широкий спектр функций, позволяющих оптимизировать процессы мониторинга и управления. Он предлагает уникальные решения для точного земледелия, что делает его незаменимым помощником в современных агрономических практиках.</p>

                    <ul>
                        <li><strong>Мультиспектральная съемка:</strong> Дрон оснащен мультиспектральными камерами, которые позволяют проводить детальный анализ состояния растений, определять уровень здоровья культур и выявлять возможные проблемы на ранних стадиях.</li>
                        <li><strong>Обработка и анализ данных:</strong> Интегрированные системы сбора и анализа данных позволяют получать качественные отчеты о состоянии полей, что упрощает процесс принятия решений и улучшает планирование агрономических работ.</li>
                        <li><strong>Автоматизированные операции:</strong> Дрон способен выполнять заранее запрограммированные маршруты и задачи, включая распыление удобрений и пестицидов, что значительно повышает эффективность работы.</li>
                    </ul>

                    <h4>Конструкция и надежность</h4>

                    <p>Третий сельскохозяйственный дрон разработан с акцентом на надежность и устойчивость к различным условиям эксплуатации. Он обладает прочным корпусом, который обеспечивает защиту от внешних факторов и позволяет выполнять полеты в сложных погодных условиях. В комплект входят все необходимые компоненты для быстрого запуска и настройки.</p>

                    <h4>Интуитивно понятное управление и программное обеспечение</h4>

                    <p>Дрон поставляется с простым в использовании интерфейсом управления, который позволяет агрономам и фермерам легко настраивать полеты, выбирать параметры съемки и анализировать собранные данные. Программное обеспечение включает инструменты для визуализации данных, что помогает лучше понять состояние полей и принимать обоснованные решения.</p>

                    <h4>Устойчивое развитие и экономическая выгода</h4>

                    <p>Третий сельскохозяйственный дрон от Коптра способствует устойчивому развитию сельского хозяйства, позволяя фермерам сократить затраты и повысить урожайность. Использование этого дрона помогает более эффективно использовать ресурсы, что, в свою очередь, приводит к улучшению экосистемы и повышению производительности на каждом этапе агрономического цикла.</p>

                    <p>Таким образом, третий сельскохозяйственный дрон является необходимым инструментом для тех, кто стремится использовать современные технологии в агрономии и достигать максимальных результатов в своей деятельности.</p>
                    
                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'docs/drones/Agricultural/drone2.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'docs/drones/FPV/drone1.php'; // Путь к следующей странице
                        
                        if ($prev_page): ?>
                            <a href="<?php echo $prev_page; ?>" class="nav-button prev" data-ajax-load>
                                Предыдущая страница
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($next_page && $next_page !== '#'): ?>
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