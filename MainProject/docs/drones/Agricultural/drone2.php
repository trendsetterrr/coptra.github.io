<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = 'rework'; // Имя папки вашего проекта
if(isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/' . $project_folder . '/';
}
if ($isAjax) {
    ?>
    <main class="content-docs">
        <section id="documentation-content" class="documentation-content">
            <section id="documentation" class="documentation">
                <h1>Документация</h1>
                <div class="documentation-grid">
                <h3>Второй сельскохозяйственный дрон</h3>
                <h4>Инновационные технологии для современного агронома</h4>

                <p>Второй сельскохозяйственный дрон от Коптра представляет собой более продвинутую платформу для решения сложных задач в агрономии. Оснащенный новейшими технологиями, этот дрон позволяет проводить более детальный анализ сельскохозяйственных культур и эффективно управлять ресурсами на поле.</p>

                <h4>Расширенные функциональные возможности</h4>

                <p>Данный дрон обладает улучшенными характеристиками и дополнительными функциями, которые делают его идеальным инструментом для агрономов и фермеров, стремящихся повысить эффективность своих хозяйств.</p>

                <ul>
                    <li><strong>Картирование и мониторинг:</strong> Благодаря расширенным сенсорам дрон способен создавать высококачественные карты полей и вести постоянный мониторинг состояния культур.</li>
                    <li><strong>Применение беспилотников для точного земледелия:</strong> Использование технологий точного земледелия позволяет точно настраивать обработку и внесение удобрений, что приводит к более рациональному расходованию ресурсов.</li>
                    <li><strong>Сбор данных в реальном времени:</strong> Дрон оснащен системой передачи данных, что позволяет агрономам получать актуальную информацию прямо на мобильные устройства для быстрой реакции на изменения.</li>
                </ul>

                <h4>Особенности конструкции и комплектация</h4>

                <p>Второй сельскохозяйственный дрон разработан с учетом всех потребностей современных фермеров. Его конструкция обеспечивает надежность и устойчивость в различных погодных условиях. В комплект входят высококачественные камеры, модуль GPS и множество датчиков, обеспечивающих высокий уровень точности в сборе данных.</p>

                <h4>Интуитивно понятное программное обеспечение</h4>

                <p>Второй сельскохозяйственный дрон поставляется с интуитивно понятным программным обеспечением, которое позволяет легко управлять полетом, настраивать параметры съемки и анализировать собранные данные. Программное обеспечение включает инструменты для визуализации данных и генерации отчетов, что делает его полезным для агрономов на всех уровнях.</p>

                <h4>Экономические преимущества и устойчивое развитие</h4>

                <p>Использование второго сельскохозяйственного дрона значительно повышает экономическую эффективность хозяйств, позволяя минимизировать затраты на уход за растениями и увеличивать урожайность. С его помощью фермеры могут более точно планировать свои действия и принимать обоснованные решения на основе актуальных данных, что в конечном итоге способствует устойчивому развитию сельского хозяйства.</p>

                <p>Второй сельскохозяйственный дрон от Коптра — это шаг вперед в технологии управления сельским хозяйством, который помогает агрономам и фермерам добиваться лучших результатов и сохранять ресурсы.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'docs/drones/Agricultural/drone1.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'docs/drones/Agricultural/drone3.php'; // Путь к следующей странице
                    
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
                    <h3>Второй сельскохозяйственный дрон</h3>
                    <h4>Инновационные технологии для современного агронома</h4>

                    <p>Второй сельскохозяйственный дрон от Коптра представляет собой более продвинутую платформу для решения сложных задач в агрономии. Оснащенный новейшими технологиями, этот дрон позволяет проводить более детальный анализ сельскохозяйственных культур и эффективно управлять ресурсами на поле.</p>

                    <h4>Расширенные функциональные возможности</h4>

                    <p>Данный дрон обладает улучшенными характеристиками и дополнительными функциями, которые делают его идеальным инструментом для агрономов и фермеров, стремящихся повысить эффективность своих хозяйств.</p>

                    <ul>
                        <li><strong>Картирование и мониторинг:</strong> Благодаря расширенным сенсорам дрон способен создавать высококачественные карты полей и вести постоянный мониторинг состояния культур.</li>
                        <li><strong>Применение беспилотников для точного земледелия:</strong> Использование технологий точного земледелия позволяет точно настраивать обработку и внесение удобрений, что приводит к более рациональному расходованию ресурсов.</li>
                        <li><strong>Сбор данных в реальном времени:</strong> Дрон оснащен системой передачи данных, что позволяет агрономам получать актуальную информацию прямо на мобильные устройства для быстрой реакции на изменения.</li>
                    </ul>

                    <h4>Особенности конструкции и комплектация</h4>

                    <p>Второй сельскохозяйственный дрон разработан с учетом всех потребностей современных фермеров. Его конструкция обеспечивает надежность и устойчивость в различных погодных условиях. В комплект входят высококачественные камеры, модуль GPS и множество датчиков, обеспечивающих высокий уровень точности в сборе данных.</p>

                    <h4>Интуитивно понятное программное обеспечение</h4>

                    <p>Второй сельскохозяйственный дрон поставляется с интуитивно понятным программным обеспечением, которое позволяет легко управлять полетом, настраивать параметры съемки и анализировать собранные данные. Программное обеспечение включает инструменты для визуализации данных и генерации отчетов, что делает его полезным для агрономов на всех уровнях.</p>

                    <h4>Экономические преимущества и устойчивое развитие</h4>

                    <p>Использование второго сельскохозяйственного дрона значительно повышает экономическую эффективность хозяйств, позволяя минимизировать затраты на уход за растениями и увеличивать урожайность. С его помощью фермеры могут более точно планировать свои действия и принимать обоснованные решения на основе актуальных данных, что в конечном итоге способствует устойчивому развитию сельского хозяйства.</p>

                    <p>Второй сельскохозяйственный дрон от Коптра — это шаг вперед в технологии управления сельским хозяйством, который помогает агрономам и фермерам добиваться лучших результатов и сохранять ресурсы.</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'docs/drones/Agricultural/drone1.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'docs/drones/Agricultural/drone3.php'; // Путь к следующей странице
                        
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