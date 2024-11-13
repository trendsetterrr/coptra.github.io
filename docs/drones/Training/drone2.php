<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = '';
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
                <h3>Второй учебный дрон</h3>
                <h4>Следующий уровень обучения с Коптра</h4>

                <p>Второй учебный дрон от Коптра создан для тех, кто уже знаком с основами управления беспилотниками и хочет углубить свои знания. Этот дрон сочетает расширенные функциональные возможности, продвинутые сенсоры и мощное программное обеспечение, что делает его отличным выбором для продвинутых учебных курсов и профессиональных программ.</p>

                <h4>Продвинутые возможности и технические особенности</h4>

                <p>Второй учебный дрон от Коптра предлагает больше возможностей по сравнению с первым, позволяя пользователям погружаться в более сложные аспекты программирования и управления беспилотниками. Он поддерживает расширенные режимы полета, точное позиционирование и стабильность, что позволяет использовать его для сложных маневров и задач.</p>

                <ul>
                    <li><strong>Расширенные сенсоры:</strong> В комплекте идут дополнительные сенсоры, которые позволяют реализовать задачи по компьютерному зрению и распознаванию объектов.</li>
                    <li><strong>Программируемые режимы:</strong> Возможность переключаться между ручным управлением и автоматическим режимом с детализированной настройкой параметров полета.</li>
                    <li><strong>Интеграция с искусственным интеллектом:</strong> Поддержка библиотек для разработки и тестирования простейших алгоритмов ИИ, что делает дрон идеальной платформой для экспериментов.</li>
                </ul>

                <h4>Комплект второго учебного дрона</h4>

                <p>Второй учебный дрон Коптра поставляется в комплекте с продвинутыми компонентами, которые позволяют экспериментировать с различными сценариями и задачами. Комплект включает сенсоры для отслеживания объектов, высококачественную камеру и дополнительные модули для расширения функциональности. Дрон может быть легко настроен под нужды конкретного учебного курса или исследовательского проекта.</p>

                <h4>Программирование и настройки для продвинутых пользователей</h4>

                <p>Этот дрон поддерживает сложные алгоритмы и языки программирования, позволяя пользователям изучать передовые методы разработки. Второй учебный дрон оснащен мощным бортовым компьютером, который поддерживает популярные библиотеки для работы с искусственным интеллектом и компьютерным зрением. Это отличная платформа для тех, кто готов экспериментировать с автономными режимами и исследовать новые подходы в робототехнике.</p>

                <p>Все необходимые материалы для программирования и настройки дрона вы найдете в нашей документации, включая пошаговые примеры и практические задания, которые помогут раскрыть полный потенциал устройства.</p>

                <h4>Поддержка и дополнительные ресурсы</h4>

                <p>Коптра предлагает расширенную техническую поддержку для второго учебного дрона. В нашем телеграм-чате <a href="https://t.me/CoptraAdvancedHelp">@CoptraAdvancedHelp</a> вы можете получить консультацию по вопросам программирования, настройки и оптимизации работы дрона. Наша команда специалистов поможет решить любые возникшие вопросы и направит на дальнейшие шаги в освоении технологии.</p>

                <p>Для профессионалов, работающих с алгоритмами автономного управления и задачами роевого полета, доступны специализированные ресурсы и сообщества. Коптра поддерживает пользователей на всех этапах обучения и помогает сделать использование дронов удобным, доступным и вдохновляющим для изучения новых горизонтов.</p>

                <p>С нашим вторым учебным дроном вы сможете расширить свои знания и навыки, открывая для себя более глубокие и сложные аспекты мира дронов и беспилотных технологий.</p>
            </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'drones/Training/drone1.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'drones/Training/drone3.php'; // Путь к следующей странице
                    
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
                        <h3>Второй учебный дрон</h3>
                        <h4>Следующий уровень обучения с Коптра</h4>

                        <p>Второй учебный дрон от Коптра создан для тех, кто уже знаком с основами управления беспилотниками и хочет углубить свои знания. Этот дрон сочетает расширенные функциональные возможности, продвинутые сенсоры и мощное программное обеспечение, что делает его отличным выбором для продвинутых учебных курсов и профессиональных программ.</p>

                        <h4>Продвинутые возможности и технические особенности</h4>

                        <p>Второй учебный дрон от Коптра предлагает больше возможностей по сравнению с первым, позволяя пользователям погружаться в более сложные аспекты программирования и управления беспилотниками. Он поддерживает расширенные режимы полета, точное позиционирование и стабильность, что позволяет использовать его для сложных маневров и задач.</p>

                        <ul>
                            <li><strong>Расширенные сенсоры:</strong> В комплекте идут дополнительные сенсоры, которые позволяют реализовать задачи по компьютерному зрению и распознаванию объектов.</li>
                            <li><strong>Программируемые режимы:</strong> Возможность переключаться между ручным управлением и автоматическим режимом с детализированной настройкой параметров полета.</li>
                            <li><strong>Интеграция с искусственным интеллектом:</strong> Поддержка библиотек для разработки и тестирования простейших алгоритмов ИИ, что делает дрон идеальной платформой для экспериментов.</li>
                        </ul>

                        <h4>Комплект второго учебного дрона</h4>

                        <p>Второй учебный дрон Коптра поставляется в комплекте с продвинутыми компонентами, которые позволяют экспериментировать с различными сценариями и задачами. Комплект включает сенсоры для отслеживания объектов, высококачественную камеру и дополнительные модули для расширения функциональности. Дрон может быть легко настроен под нужды конкретного учебного курса или исследовательского проекта.</p>

                        <h4>Программирование и настройки для продвинутых пользователей</h4>

                        <p>Этот дрон поддерживает сложные алгоритмы и языки программирования, позволяя пользователям изучать передовые методы разработки. Второй учебный дрон оснащен мощным бортовым компьютером, который поддерживает популярные библиотеки для работы с искусственным интеллектом и компьютерным зрением. Это отличная платформа для тех, кто готов экспериментировать с автономными режимами и исследовать новые подходы в робототехнике.</p>

                        <p>Все необходимые материалы для программирования и настройки дрона вы найдете в нашей документации, включая пошаговые примеры и практические задания, которые помогут раскрыть полный потенциал устройства.</p>

                        <p>С нашим вторым учебным дроном вы сможете расширить свои знания и навыки, открывая для себя более глубокие и сложные аспекты мира дронов и беспилотных технологий.</p>
                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'drones/Training/drone1.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'drones/Training/drone3.php'; // Путь к следующей странице
                        
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