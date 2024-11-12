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
                <h3>Первый FPV дрон</h3>
                <h4>Погружение в мир первого лица с Коптра</h4>

                <p>Первый FPV (First Person View) дрон от Коптра создан для энтузиастов и любителей дронов, стремящихся получить незабываемые ощущения от полета. Эта модель объединяет в себе легкость управления и возможности высококачественной видеосъемки, позволяя пользователям погрузиться в мир, как будто они сами находятся на борту.</p>

                <h4>Основные возможности и технологии</h4>

                <p>FPV дрон от Коптра предлагает уникальный опыт, обеспечивая передачу видео в реальном времени на экран пилота. Он идеально подходит как для начинающих, так и для опытных пользователей, желающих исследовать новые горизонты управления беспилотниками.</p>

                <ul>
                    <li><strong>Видеопередача в реальном времени:</strong> Дрон оснащен системой передачи HD-видео, что позволяет пилоту видеть полет в режиме реального времени с высокой четкостью и минимальной задержкой.</li>
                    <li><strong>Легкость в управлении:</strong> Интуитивно понятный интерфейс управления и продвинутая система стабилизации делают полеты легкими и доступными для пользователей любого уровня.</li>
                    <li><strong>Гибкие режимы полета:</strong> FPV дрон поддерживает несколько режимов полета, включая автоматический и ручной, что дает возможность адаптировать полет под предпочтения пилота.</li>
                </ul>

                <h4>Конструкция и комплект</h4>

                <p>Первый FPV дрон от Коптра имеет легкую, но прочную конструкцию, что обеспечивает отличную маневренность и устойчивость во время полета. В комплект входят все необходимые компоненты, включая камеру, передатчик и очки для FPV-полета, что позволяет сразу же приступить к использованию дрона.</p>

                <h4>Программное обеспечение и настройки</h4>

                <p>Дрон поставляется с простым в использовании программным обеспечением, позволяющим легко настраивать параметры полета, такие как высота, скорость и угол наклона. Программное обеспечение также включает инструменты для анализа данных, которые могут помочь пользователям улучшить свои навыки пилотирования и лучше понять динамику полета.</p>

                <h4>Применение и возможности для творчества</h4>

                <p>Первый FPV дрон отлично подходит для создания видео и фотоматериалов с захватывающих ракурсов. Пилоты могут использовать его для съемки уникальных кадров на мероприятиях, в путешествиях или для участия в соревнованиях по FPV-гонкам. Его возможности идеально подходят для креативных проектов, связанных с видео и фотографией.</p>

                <p>С первым FPV дроном от Коптра вы сможете испытать полет с высоты птичьего полета и получить новые эмоции, погружаясь в мир беспилотной авиации. Это идеальный выбор для всех, кто хочет научиться управлять дроном и открыть для себя захватывающий мир FPV-полетов.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'docs/drones/Agricultural/drone3.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'docs/drones/FPV/drone2.php'; // Путь к следующей странице
                    
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
                    <h3>Первый FPV дрон</h3>
                    <h4>Погружение в мир первого лица с Коптра</h4>

                    <p>Первый FPV (First Person View) дрон от Коптра создан для энтузиастов и любителей дронов, стремящихся получить незабываемые ощущения от полета. Эта модель объединяет в себе легкость управления и возможности высококачественной видеосъемки, позволяя пользователям погрузиться в мир, как будто они сами находятся на борту.</p>

                    <h4>Основные возможности и технологии</h4>

                    <p>FPV дрон от Коптра предлагает уникальный опыт, обеспечивая передачу видео в реальном времени на экран пилота. Он идеально подходит как для начинающих, так и для опытных пользователей, желающих исследовать новые горизонты управления беспилотниками.</p>

                    <ul>
                        <li><strong>Видеопередача в реальном времени:</strong> Дрон оснащен системой передачи HD-видео, что позволяет пилоту видеть полет в режиме реального времени с высокой четкостью и минимальной задержкой.</li>
                        <li><strong>Легкость в управлении:</strong> Интуитивно понятный интерфейс управления и продвинутая система стабилизации делают полеты легкими и доступными для пользователей любого уровня.</li>
                        <li><strong>Гибкие режимы полета:</strong> FPV дрон поддерживает несколько режимов полета, включая автоматический и ручной, что дает возможность адаптировать полет под предпочтения пилота.</li>
                    </ul>

                    <h4>Конструкция и комплект</h4>

                    <p>Первый FPV дрон от Коптра имеет легкую, но прочную конструкцию, что обеспечивает отличную маневренность и устойчивость во время полета. В комплект входят все необходимые компоненты, включая камеру, передатчик и очки для FPV-полета, что позволяет сразу же приступить к использованию дрона.</p>

                    <h4>Программное обеспечение и настройки</h4>

                    <p>Дрон поставляется с простым в использовании программным обеспечением, позволяющим легко настраивать параметры полета, такие как высота, скорость и угол наклона. Программное обеспечение также включает инструменты для анализа данных, которые могут помочь пользователям улучшить свои навыки пилотирования и лучше понять динамику полета.</p>

                    <h4>Применение и возможности для творчества</h4>

                    <p>Первый FPV дрон отлично подходит для создания видео и фотоматериалов с захватывающих ракурсов. Пилоты могут использовать его для съемки уникальных кадров на мероприятиях, в путешествиях или для участия в соревнованиях по FPV-гонкам. Его возможности идеально подходят для креативных проектов, связанных с видео и фотографией.</p>

                    <p>С первым FPV дроном от Коптра вы сможете испытать полет с высоты птичьего полета и получить новые эмоции, погружаясь в мир беспилотной авиации. Это идеальный выбор для всех, кто хочет научиться управлять дроном и открыть для себя захватывающий мир FPV-полетов.</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'docs/drones/Agricultural/drone3.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'docs/drones/FPV/drone2.php'; // Путь к следующей странице
                        
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