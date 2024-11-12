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
                <h3>Программирование на Lua</h3>
                <h4>Легкий и мощный язык для управления дронами Коптра</h4>

                <p>Lua — это легкий и высокопроизводительный язык программирования, идеально подходящий для интеграции в системы управления дронов Коптра. Его простота и гибкость позволяют разработчикам быстро создавать сценарии и настраивать поведение беспилотных летательных аппаратов под специфические задачи.</p>

                <h4>Преимущества использования Lua для дронов</h4>

                <p>Использование Lua в программировании дронов Коптра предоставляет ряд значительных преимуществ:</p>

                <ul>
                    <li><strong>Легкость и быстрота:</strong> Lua имеет минималистичный синтаксис, что облегчает его освоение и использование, позволяя разработчикам быстро переходить от идеи к реализации.</li>
                    <li><strong>Гибкость интеграции:</strong> Lua легко встраивается в различные системы, что делает его отличным выбором для управления функциями дронов, такими как навигация, обработка данных и управление сенсорами.</li>
                    <li><strong>Эффективность выполнения:</strong> Lua отличается высокой производительностью, что особенно важно для реального времени управления дронов, обеспечивая быструю реакцию на команды и события.</li>
                </ul>

                <h4>Интеграция Lua с дронами Коптра</h4>

                <p>С помощью Lua вы можете добавлять различные функции в свои дроны, включая:</p>

                <ul>
                    <li><strong>Автоматизация полетов:</strong> Создавайте скрипты для автоматизированного управления полетом, включая маршруты, задания по сбору данных и выполнение определенных действий в заданных точках.</li>
                    <li><strong>Обработка данных:</strong> Используйте Lua для анализа и обработки данных с сенсоров, таких как камеры и радиометры, что позволяет получать ценные инсайты и принимать обоснованные решения.</li>
                    <li><strong>Интерактивные интерфейсы:</strong> Разрабатывайте пользовательские интерфейсы для взаимодействия с дронами, позволяя пользователям легко управлять функциями и получать обратную связь.</li>
                </ul>

                <h4>Ресурсы для изучения Lua</h4>

                <p>Для тех, кто хочет начать программирование на Lua, мы рекомендуем следующие ресурсы:</p>

                <ul>
                    <li><strong>Официальная документация:</strong> На сайте Lua вы найдете полное руководство по языку, включая примеры и инструкции по использованию.</li>
                    <li><strong>Онлайн-курсы:</strong> Платформы, такие как Udemy и Coursera, предлагают курсы по программированию на Lua, подходящие для новичков и более опытных разработчиков.</li>
                    <li><strong>Форумы и сообщества:</strong> Участвуйте в онлайн-сообществах, таких как Lua Users и Stack Overflow, где вы можете задавать вопросы и делиться опытом с другими программистами.</li>
                </ul>

                <h4>Заключение</h4>

                <p>Программирование на Lua открывает новые горизонты для разработки и настройки дронов Коптра. Благодаря своей простоте и эффективности, Lua позволяет быстро внедрять инновационные функции, автоматизировать процессы и улучшать производительность дронов. Начните изучать Lua сегодня и сделайте ваши дроновые проекты более успешными и эффективными!</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'docs/Programming/trik-studio.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'docs/additionalmaterials/database.php'; // Путь к следующей странице
                    
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
                        <h3>Программирование на Lua</h3>
                        <h4>Легкий и мощный язык для управления дронами Коптра</h4>

                        <p>Lua — это легкий и высокопроизводительный язык программирования, идеально подходящий для интеграции в системы управления дронов Коптра. Его простота и гибкость позволяют разработчикам быстро создавать сценарии и настраивать поведение беспилотных летательных аппаратов под специфические задачи.</p>

                        <h4>Преимущества использования Lua для дронов</h4>

                        <p>Использование Lua в программировании дронов Коптра предоставляет ряд значительных преимуществ:</p>

                        <ul>
                            <li><strong>Легкость и быстрота:</strong> Lua имеет минималистичный синтаксис, что облегчает его освоение и использование, позволяя разработчикам быстро переходить от идеи к реализации.</li>
                            <li><strong>Гибкость интеграции:</strong> Lua легко встраивается в различные системы, что делает его отличным выбором для управления функциями дронов, такими как навигация, обработка данных и управление сенсорами.</li>
                            <li><strong>Эффективность выполнения:</strong> Lua отличается высокой производительностью, что особенно важно для реального времени управления дронов, обеспечивая быструю реакцию на команды и события.</li>
                        </ul>

                        <h4>Интеграция Lua с дронами Коптра</h4>

                        <p>С помощью Lua вы можете добавлять различные функции в свои дроны, включая:</p>

                        <ul>
                            <li><strong>Автоматизация полетов:</strong> Создавайте скрипты для автоматизированного управления полетом, включая маршруты, задания по сбору данных и выполнение определенных действий в заданных точках.</li>
                            <li><strong>Обработка данных:</strong> Используйте Lua для анализа и обработки данных с сенсоров, таких как камеры и радиометры, что позволяет получать ценные инсайты и принимать обоснованные решения.</li>
                            <li><strong>Интерактивные интерфейсы:</strong> Разрабатывайте пользовательские интерфейсы для взаимодействия с дронами, позволяя пользователям легко управлять функциями и получать обратную связь.</li>
                        </ul>

                        <h4>Ресурсы для изучения Lua</h4>

                        <p>Для тех, кто хочет начать программирование на Lua, мы рекомендуем следующие ресурсы:</p>

                        <ul>
                            <li><strong>Официальная документация:</strong> На сайте Lua вы найдете полное руководство по языку, включая примеры и инструкции по использованию.</li>
                            <li><strong>Онлайн-курсы:</strong> Платформы, такие как Udemy и Coursera, предлагают курсы по программированию на Lua, подходящие для новичков и более опытных разработчиков.</li>
                            <li><strong>Форумы и сообщества:</strong> Участвуйте в онлайн-сообществах, таких как Lua Users и Stack Overflow, где вы можете задавать вопросы и делиться опытом с другими программистами.</li>
                        </ul>

                        <h4>Заключение</h4>

                        <p>Программирование на Lua открывает новые горизонты для разработки и настройки дронов Коптра. Благодаря своей простоте и эффективности, Lua позволяет быстро внедрять инновационные функции, автоматизировать процессы и улучшать производительность дронов. Начните изучать Lua сегодня и сделайте ваши дроновые проекты более успешными и эффективными!</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'docs/Programming/trik-studio.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'docs/additionalmaterials/database.php'; // Путь к следующей странице
                        
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