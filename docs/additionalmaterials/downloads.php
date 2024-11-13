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
                <h3>Загрузки</h3>
                <h4>Доступ к необходимым ресурсам для работы с дронами Коптра</h4>

                <p>Раздел "Загрузки" предоставляет пользователям доступ ко всем необходимым файлам и ресурсам для эффективной работы с дронами Коптра. Здесь вы можете скачать последние версии прошивок, программного обеспечения и документации, которые помогут вам оптимизировать работу вашего беспилотного летательного аппарата и воспользоваться всеми его возможностями.</p>

                <h4>Доступные загрузки</h4>

                <p>В этом разделе вы найдете:</p>

                <ul>
                    <li><strong>Прошивки:</strong> Последние версии прошивок для полетных контроллеров Коптра, которые обеспечивают стабильную работу и добавляют новые функции. Обязательно обновляйте прошивку, чтобы воспользоваться всеми преимуществами!</li>
                    <li><strong>Программное обеспечение:</strong> Ключевые программы для управления дронами, включая Коптра Сим, который позволяет моделировать полеты и тренироваться в безопасной среде.</li>
                    <li><strong>Документация:</strong> Полные руководства и инструкции по эксплуатации, настройке и техническому обслуживанию дронов. Доступна в формате PDF для удобства использования.</li>
                    <li><strong>Примеры проектов:</strong> Загружайте готовые проекты и скрипты, которые помогут вам быстрее освоить программирование и работу с дронами Коптра.</li>
                </ul>

                <h4>Как загрузить файлы</h4>

                <p>Загрузка файлов проста и удобна:</p>

                <ol>
                    <li>Выберите нужный файл из списка доступных загрузок.</li>
                    <li>Нажмите на кнопку "Скачать".</li>
                    <li>Следуйте инструкциям на экране, чтобы завершить процесс загрузки.</li>
                </ol>

                <h4>Заключение</h4>

                <p>Раздел "Загрузки" — это ваш первый шаг к эффективному использованию дронов Коптра. Не забудьте регулярно проверять этот раздел на наличие обновлений и новых ресурсов, чтобы оставаться в курсе последних новинок и улучшений. Скачивайте, устанавливайте и наслаждайтесь возможностями, которые открывают дроны Коптра!</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'additionalmaterials/database.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'additionalmaterials/methods-and-cases.php'; // Путь к следующей странице
                    
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
                        <h3>Загрузки</h3>
                        <h4>Доступ к необходимым ресурсам для работы с дронами Коптра</h4>

                        <p>Раздел "Загрузки" предоставляет пользователям доступ ко всем необходимым файлам и ресурсам для эффективной работы с дронами Коптра. Здесь вы можете скачать последние версии прошивок, программного обеспечения и документации, которые помогут вам оптимизировать работу вашего беспилотного летательного аппарата и воспользоваться всеми его возможностями.</p>

                        <h4>Доступные загрузки</h4>

                        <p>В этом разделе вы найдете:</p>

                        <ul>
                            <li><strong>Прошивки:</strong> Последние версии прошивок для полетных контроллеров Коптра, которые обеспечивают стабильную работу и добавляют новые функции. Обязательно обновляйте прошивку, чтобы воспользоваться всеми преимуществами!</li>
                            <li><strong>Программное обеспечение:</strong> Ключевые программы для управления дронами, включая Коптра Сим, который позволяет моделировать полеты и тренироваться в безопасной среде.</li>
                            <li><strong>Документация:</strong> Полные руководства и инструкции по эксплуатации, настройке и техническому обслуживанию дронов. Доступна в формате PDF для удобства использования.</li>
                            <li><strong>Примеры проектов:</strong> Загружайте готовые проекты и скрипты, которые помогут вам быстрее освоить программирование и работу с дронами Коптра.</li>
                        </ul>

                        <h4>Как загрузить файлы</h4>

                        <p>Загрузка файлов проста и удобна:</p>

                        <ol>
                            <li>Выберите нужный файл из списка доступных загрузок.</li>
                            <li>Нажмите на кнопку "Скачать".</li>
                            <li>Следуйте инструкциям на экране, чтобы завершить процесс загрузки.</li>
                        </ol>

                        <h4>Заключение</h4>

                        <p>Раздел "Загрузки" — это ваш первый шаг к эффективному использованию дронов Коптра. Не забудьте регулярно проверять этот раздел на наличие обновлений и новых ресурсов, чтобы оставаться в курсе последних новинок и улучшений. Скачивайте, устанавливайте и наслаждайтесь возможностями, которые открывают дроны Коптра!</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'additionalmaterials/database.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'additionalmaterials/methods-and-cases.php'; // Путь к следующей странице
                        
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
