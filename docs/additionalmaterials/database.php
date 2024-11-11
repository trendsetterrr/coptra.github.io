<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = 'main'; // Имя папки вашего проекта
if(strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/' . $project_folder . '/';
}
if ($isAjax) {
    ?>
    <main class="content-docs">
        <section id="documentation-content" class="documentation-content">
            <section id="documentation" class="documentation">
                <h1>Документация</h1>
                <div class="documentation-grid">
                <h3>База знаний</h3>
                <h4>Ваш ресурс для глубокого изучения технологий дронов Коптра</h4>

                <p>База знаний Коптра — это обширная библиотека информации, предназначенная для поддержки пользователей в освоении технологий беспилотных летательных аппаратов. Здесь вы найдете все необходимые ресурсы для изучения, включая документацию, руководства, видеоуроки и ответы на часто задаваемые вопросы. Наша база знаний создана для того, чтобы помочь вам максимально эффективно использовать дрон Коптра и разобраться в его возможностях.</p>

                <h4>Структура базы знаний</h4>

                <p>База знаний организована по различным категориям, что позволяет быстро находить нужную информацию:</p>

                <ul>
                    <li><strong>Документация:</strong> Подробные руководства по использованию дронов Коптра, включая инструкции по настройке, эксплуатации и техническому обслуживанию.</li>
                    <li><strong>Видеоуроки:</strong> Учебные видео, которые демонстрируют различные аспекты работы с дронами, от базовых функций до продвинутых технологий.</li>
                    <li><strong>Часто задаваемые вопросы:</strong> Ответы на наиболее распространенные вопросы пользователей, что позволяет быстро находить решения распространенных проблем.</li>
                    <li><strong>Форумы сообщества:</strong> Платформа для общения пользователей, где можно задать вопросы, поделиться опытом и получить советы от других операторов дронов.</li>
                </ul>

                <h4>Преимущества базы знаний</h4>

                <p>Использование базы знаний предоставляет ряд преимуществ:</p>

                <ul>
                    <li><strong>Централизованный доступ:</strong> Все ресурсы собраны в одном месте, что делает поиск информации простым и удобным.</li>
                    <li><strong>Постоянное обновление:</strong> База знаний регулярно обновляется с учетом новых технологий, прошивок и обновлений программного обеспечения.</li>
                    <li><strong>Поддержка пользователей:</strong> Мы стремимся помочь вам в освоении наших технологий, предоставляя актуальную и полезную информацию.</li>
                </ul>

                <h4>Заключение</h4>

                <p>База знаний Коптра — это ваш надежный помощник в изучении и эксплуатации дронов. Используйте все доступные ресурсы, чтобы углубить свои знания и повысить уровень мастерства в управлении беспилотниками. Начните свое обучение сегодня и откройте для себя весь потенциал технологий Коптра!</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = '/../docs/Programming/lua.php'; // Путь к предыдущей странице
                    $next_page = '/../docs/additionalmaterials/downloads.php'; // Путь к следующей странице
                    
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
                        <h3>База данных</h3>
                        <h4>Ваш ресурс для глубокого изучения технологий дронов Коптра</h4>

                        <p>База знаний Коптра — это обширная библиотека информации, предназначенная для поддержки пользователей в освоении технологий беспилотных летательных аппаратов. Здесь вы найдете все необходимые ресурсы для изучения, включая документацию, руководства, видеоуроки и ответы на часто задаваемые вопросы. Наша база знаний создана для того, чтобы помочь вам максимально эффективно использовать дрон Коптра и разобраться в его возможностях.</p>

                        <h4>Структура базы знаний</h4>

                        <p>База знаний организована по различным категориям, что позволяет быстро находить нужную информацию:</p>

                        <ul>
                            <li><strong>Документация:</strong> Подробные руководства по использованию дронов Коптра, включая инструкции по настройке, эксплуатации и техническому обслуживанию.</li>
                            <li><strong>Видеоуроки:</strong> Учебные видео, которые демонстрируют различные аспекты работы с дронами, от базовых функций до продвинутых технологий.</li>
                            <li><strong>Часто задаваемые вопросы:</strong> Ответы на наиболее распространенные вопросы пользователей, что позволяет быстро находить решения распространенных проблем.</li>
                            <li><strong>Форумы сообщества:</strong> Платформа для общения пользователей, где можно задать вопросы, поделиться опытом и получить советы от других операторов дронов.</li>
                        </ul>

                        <h4>Преимущества базы знаний</h4>

                        <p>Использование базы знаний предоставляет ряд преимуществ:</p>

                        <ul>
                            <li><strong>Централизованный доступ:</strong> Все ресурсы собраны в одном месте, что делает поиск информации простым и удобным.</li>
                            <li><strong>Постоянное обновление:</strong> База знаний регулярно обновляется с учетом новых технологий, прошивок и обновлений программного обеспечения.</li>
                            <li><strong>Поддержка пользователей:</strong> Мы стремимся помочь вам в освоении наших технологий, предоставляя актуальную и полезную информацию.</li>
                        </ul>

                        <h4>Заключение</h4>

                        <p>База знаний Коптра — это ваш надежный помощник в изучении и эксплуатации дронов. Используйте все доступные ресурсы, чтобы углубить свои знания и повысить уровень мастерства в управлении беспилотниками. Начните свое обучение сегодня и откройте для себя весь потенциал технологий Коптра!</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = '/../docs/Programming/lua.php'; // Путь к предыдущей странице
                        $next_page = '/../docs/additionalmaterials/downloads.php'; // Путь к следующей странице
                        
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