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
                <h3>Программирование в TRIK STUDIO</h3>
                <h4>Создавайте инновационные приложения для дронов Коптра</h4>

                <p>TRIK STUDIO — это мощная среда разработки, специально созданная для программирования роботов и дронов, таких как устройства Коптра. Благодаря удобному интерфейсу и широким возможностям, TRIK STUDIO позволяет пользователям разрабатывать собственные приложения и алгоритмы для выполнения различных задач, делая процесс программирования доступным как для новичков, так и для опытных разработчиков.</p>

                <h4>Ключевые особенности TRIK STUDIO</h4>

                <p>TRIK STUDIO предлагает ряд уникальных функций, которые делают его идеальным инструментом для разработки программного обеспечения для дронов:</p>

                <ul>
                    <li><strong>Графический интерфейс:</strong> Среда разработки предлагает визуальный интерфейс, позволяющий пользователям создавать программы, перетаскивая блоки с командами, что упрощает процесс программирования и делает его более интуитивным.</li>
                    <li><strong>Поддержка скриптового языка:</strong> TRIK STUDIO поддерживает написание кода на языке C++, что позволяет разработчикам реализовывать более сложные алгоритмы и настройки для дронов.</li>
                    <li><strong>Интеграция с сенсорами:</strong> Среда позволяет легко подключать и настраивать различные сенсоры и модули, расширяя возможности дронов и позволяя им взаимодействовать с окружающей средой.</li>
                </ul>

                <h4>Применение TRIK STUDIO для дронов Коптра</h4>

                <p>С помощью TRIK STUDIO вы можете разрабатывать программы для различных функций дронов, включая:</p>

                <ul>
                    <li><strong>Автоматизация полетов:</strong> Создание сценариев для автоматического выполнения полетов по заданным маршрутам и выполнения конкретных задач, таких как аэрофотосъемка или мониторинг земельных участков.</li>
                    <li><strong>Обработка данных с сенсоров:</strong> Разработка алгоритмов для анализа данных, получаемых от различных сенсоров, что позволяет делать более информированные решения и повысить эффективность операций.</li>
                    <li><strong>Управление взаимодействием:</strong> Создание программ для управления взаимодействием между дронами и другими устройствами, например, для работы в рое дронов или совместной аэрофотосъемки.</li>
                </ul>

                <h4>Ресурсы для изучения TRIK STUDIO</h4>

                <p>Для пользователей, желающих освоить TRIK STUDIO, рекомендуем следующие ресурсы:</p>

                <ul>
                    <li><strong>Официальная документация:</strong> На сайте TRIK вы можете найти подробное руководство пользователя, а также примеры проектов и пошаговые инструкции по программированию.</li>
                    <li><strong>Видеоуроки:</strong> Каналы на YouTube и другие образовательные платформы предлагают обучающие видео, которые помогут быстро освоить TRIK STUDIO и его функции.</li>
                    <li><strong>Сообщество разработчиков:</strong> Присоединяйтесь к форумам и группам в социальных сетях, где пользователи делятся опытом, задают вопросы и обсуждают свои проекты.</li>
                </ul>

                <h4>Заключение</h4>

                <p>Программирование в TRIK STUDIO открывает перед вами множество возможностей для создания и настройки дронов Коптра. Интуитивно понятный интерфейс и мощные функции позволяют быстро реализовывать идеи и внедрять инновационные решения, делая ваши дроновые проекты более успешными и эффективными. Начните изучать TRIK STUDIO сегодня и станьте частью мира передовых технологий в области беспилотных летательных аппаратов!</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'Programming/python.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'Programming/lua.php'; // Путь к следующей странице
                    
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
                        <h3>Программирование в Trik Studio</h3>
                        <h4>Создавайте инновационные приложения для дронов Коптра</h4>

                        <p>TRIK STUDIO — это мощная среда разработки, специально созданная для программирования роботов и дронов, таких как устройства Коптра. Благодаря удобному интерфейсу и широким возможностям, TRIK STUDIO позволяет пользователям разрабатывать собственные приложения и алгоритмы для выполнения различных задач, делая процесс программирования доступным как для новичков, так и для опытных разработчиков.</p>

                        <h4>Ключевые особенности TRIK STUDIO</h4>

                        <p>TRIK STUDIO предлагает ряд уникальных функций, которые делают его идеальным инструментом для разработки программного обеспечения для дронов:</p>

                        <ul>
                            <li><strong>Графический интерфейс:</strong> Среда разработки предлагает визуальный интерфейс, позволяющий пользователям создавать программы, перетаскивая блоки с командами, что упрощает процесс программирования и делает его более интуитивным.</li>
                            <li><strong>Поддержка скриптового языка:</strong> TRIK STUDIO поддерживает написание кода на языке C++, что позволяет разработчикам реализовывать более сложные алгоритмы и настройки для дронов.</li>
                            <li><strong>Интеграция с сенсорами:</strong> Среда позволяет легко подключать и настраивать различные сенсоры и модули, расширяя возможности дронов и позволяя им взаимодействовать с окружающей средой.</li>
                        </ul>

                        <h4>Применение TRIK STUDIO для дронов Коптра</h4>

                        <p>С помощью TRIK STUDIO вы можете разрабатывать программы для различных функций дронов, включая:</p>

                        <ul>
                            <li><strong>Автоматизация полетов:</strong> Создание сценариев для автоматического выполнения полетов по заданным маршрутам и выполнения конкретных задач, таких как аэрофотосъемка или мониторинг земельных участков.</li>
                            <li><strong>Обработка данных с сенсоров:</strong> Разработка алгоритмов для анализа данных, получаемых от различных сенсоров, что позволяет делать более информированные решения и повысить эффективность операций.</li>
                            <li><strong>Управление взаимодействием:</strong> Создание программ для управления взаимодействием между дронами и другими устройствами, например, для работы в рое дронов или совместной аэрофотосъемки.</li>
                        </ul>

                        <h4>Ресурсы для изучения TRIK STUDIO</h4>

                        <p>Для пользователей, желающих освоить TRIK STUDIO, рекомендуем следующие ресурсы:</p>

                        <ul>
                            <li><strong>Официальная документация:</strong> На сайте TRIK вы можете найти подробное руководство пользователя, а также примеры проектов и пошаговые инструкции по программированию.</li>
                            <li><strong>Видеоуроки:</strong> Каналы на YouTube и другие образовательные платформы предлагают обучающие видео, которые помогут быстро освоить TRIK STUDIO и его функции.</li>
                            <li><strong>Сообщество разработчиков:</strong> Присоединяйтесь к форумам и группам в социальных сетях, где пользователи делятся опытом, задают вопросы и обсуждают свои проекты.</li>
                        </ul>

                        <h4>Заключение</h4>

                        <p>Программирование в TRIK STUDIO открывает перед вами множество возможностей для создания и настройки дронов Коптра. Интуитивно понятный интерфейс и мощные функции позволяют быстро реализовывать идеи и внедрять инновационные решения, делая ваши дроновые проекты более успешными и эффективными. Начните изучать TRIK STUDIO сегодня и станьте частью мира передовых технологий в области беспилотных летательных аппаратов!</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'Programming/python.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'Programming/lua.php'; // Путь к следующей странице
                        
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
