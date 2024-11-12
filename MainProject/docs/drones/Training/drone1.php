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
                <h3>Первый учебный дрон</h3>
                <h4>Коптра: Первый шаг в мир технологий</h4>

                <p>Наш первый учебный дрон — это идеальное решение для тех, кто только начинает знакомиться с технологиями беспилотных летательных аппаратов. Созданный специально для обучения, он оснащен всем необходимым для удобного старта. Простота управления, надежные комплектующие и продуманный дизайн делают его идеальным инструментом для студентов, преподавателей и энтузиастов.</p>

                <h4>Особенности и преимущества учебного дрона</h4>

                <p>Коптра с гордостью представляет дрон, разработанный специально для образовательных целей. Этот дрон сочетает в себе функциональность, безопасность и инновационные решения, позволяя пользователям освоить ключевые аспекты управления беспилотниками и программирования полетов. Он может стать первым шагом в построении карьеры в области робототехники и аэрокосмических технологий.</p>

                <p>Учебный дрон от Коптра отличается рядом преимуществ:</p>
                <ul>
                    <li><strong>Удобство в эксплуатации:</strong> Простота сборки и минимальные требования к техническому обслуживанию делают его доступным даже для новичков.</li>
                    <li><strong>Гибкость программирования:</strong> Дрон поддерживает множество языков программирования и может интегрироваться в популярные образовательные платформы.</li>
                    <li><strong>Высокая безопасность:</strong> Продуманные системы защиты и ограничение скорости обеспечивают безопасное использование в учебных заведениях.</li>
                </ul>

                <h4>Комплект учебного дрона</h4>

                <p>В комплект учебного дрона входят все необходимые компоненты для запуска и настройки. В базовой комплектации пользователи найдут контроллер, аккумулятор, основные сенсоры и камеру, что позволяет изучать не только основы управления, но и элементы компьютерного зрения и ориентирования в пространстве. Наша команда позаботилась о том, чтобы каждый компонент был легко совместим и мог быстро адаптироваться под разные учебные цели.</p>

                <h4>Программирование и настройка</h4>

                <p>Учебный дрон от Коптра поддерживает множество сред программирования и различных библиотек, чтобы пользователи могли выбрать подходящую платформу для изучения программирования беспилотных систем. Благодаря этому дрон идеально подходит для учебных задач, курсов по робототехнике, а также для самостоятельного изучения. Мы предоставляем доступ к обучающим материалам и примерам кода, которые помогут быстро освоить базовые принципы управления дроном.</p>

                <p>Все инструкции и программное обеспечение для учебного дрона размещены на нашем сайте, где их можно скачать и использовать как основу для создания собственных проектов.</p>

                <h4>Поддержка и помощь</h4>

                <p>Коптра предлагает круглосуточную поддержку для всех, кто решил начать свой путь с учебного дрона. В нашем телеграм-чате <a href="https://t.me/CoptraHelpdesk">@CoptraHelpdesk</a> вы можете задать любой вопрос, связанный с настройкой и эксплуатацией устройства. Наша команда также постоянно обновляет документацию, чтобы упростить процесс обучения и освоения новых функций дрона.</p>

                <p>Для разработчиков, интересующихся расширением возможностей дрона, доступны дополнительные сообщества и ресурсы, где можно обмениваться знаниями и получать советы от специалистов. Присоединяйтесь к сообществу Коптра и откройте для себя мир технологий с нашим учебным дроном!</p>

                <p>Независимо от уровня подготовки, учебный дрон Коптра станет отличным началом для освоения беспилотных технологий и позволит создать основу для дальнейшего развития в этой области.</p>
            </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'docs/documentation.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'docs/drones/Training/drone2.php'; // Путь к следующей странице
                    
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
                    <h3>Первый учебный дрон</h3>
                <h4>Коптра: Первый шаг в мир технологий</h4>

                <p>Наш первый учебный дрон — это идеальное решение для тех, кто только начинает знакомиться с технологиями беспилотных летательных аппаратов. Созданный специально для обучения, он оснащен всем необходимым для удобного старта. Простота управления, надежные комплектующие и продуманный дизайн делают его идеальным инструментом для студентов, преподавателей и энтузиастов.</p>

                <h4>Особенности и преимущества учебного дрона</h4>

                <p>Коптра с гордостью представляет дрон, разработанный специально для образовательных целей. Этот дрон сочетает в себе функциональность, безопасность и инновационные решения, позволяя пользователям освоить ключевые аспекты управления беспилотниками и программирования полетов. Он может стать первым шагом в построении карьеры в области робототехники и аэрокосмических технологий.</p>

                <p>Учебный дрон от Коптра отличается рядом преимуществ:</p>
                <ul>
                    <li><strong>Удобство в эксплуатации:</strong> Простота сборки и минимальные требования к техническому обслуживанию делают его доступным даже для новичков.</li>
                    <li><strong>Гибкость программирования:</strong> Дрон поддерживает множество языков программирования и может интегрироваться в популярные образовательные платформы.</li>
                    <li><strong>Высокая безопасность:</strong> Продуманные системы защиты и ограничение скорости обеспечивают безопасное использование в учебных заведениях.</li>
                </ul>

                <h4>Комплект учебного дрона</h4>

                <p>В комплект учебного дрона входят все необходимые компоненты для запуска и настройки. В базовой комплектации пользователи найдут контроллер, аккумулятор, основные сенсоры и камеру, что позволяет изучать не только основы управления, но и элементы компьютерного зрения и ориентирования в пространстве. Наша команда позаботилась о том, чтобы каждый компонент был легко совместим и мог быстро адаптироваться под разные учебные цели.</p>

                <h4>Программирование и настройка</h4>

                <p>Учебный дрон от Коптра поддерживает множество сред программирования и различных библиотек, чтобы пользователи могли выбрать подходящую платформу для изучения программирования беспилотных систем. Благодаря этому дрон идеально подходит для учебных задач, курсов по робототехнике, а также для самостоятельного изучения. Мы предоставляем доступ к обучающим материалам и примерам кода, которые помогут быстро освоить базовые принципы управления дроном.</p>

                <p>Все инструкции и программное обеспечение для учебного дрона размещены на нашем сайте, где их можно скачать и использовать как основу для создания собственных проектов.</p>

                <h4>Поддержка и помощь</h4>

                <p>Коптра предлагает круглосуточную поддержку для всех, кто решил начать свой путь с учебного дрона. В нашем телеграм-чате <a href="https://t.me/CoptraHelpdesk">@CoptraHelpdesk</a> вы можете задать любой вопрос, связанный с настройкой и эксплуатацией устройства. Наша команда также постоянно обновляет документацию, чтобы упростить процесс обучения и освоения новых функций дрона.</p>

                <p>Для разработчиков, интересующихся расширением возможностей дрона, доступны дополнительные сообщества и ресурсы, где можно обмениваться знаниями и получать советы от специалистов. Присоединяйтесь к сообществу Коптра и откройте для себя мир технологий с нашим учебным дроном!</p>

                <p>Независимо от уровня подготовки, учебный дрон Коптра станет отличным началом для освоения беспилотных технологий и позволит создать основу для дальнейшего развития в этой области.</p>
            </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'docs/documentation.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'docs/drones/Training/drone2.php'; // Путь к следующей странице
                        
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