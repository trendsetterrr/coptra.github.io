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
                <h3>Пульт управления</h3>
                <h4>Интуитивное управление для всех моделей дронов Коптра</h4>

                <p>Пульт управления от Коптра представляет собой современное решение, обеспечивающее надежное и интуитивное управление всеми моделями дронов нашей компании. С эргономичным дизайном и передовыми технологиями, этот пульт позволяет пользователям легко и комфортно управлять своими дронами, независимо от уровня их опыта.</p>

                <h4>Ключевые характеристики и функции</h4>

                <p>Пульт управления оснащен множеством функций, которые делают управление дронов простым и доступным. Он подходит как для новичков, так и для опытных пилотов, обеспечивая полный контроль над полетом.</p>

                <ul>
                    <li><strong>Удобные органы управления:</strong> Все элементы управления расположены так, чтобы обеспечить быстрый доступ и интуитивное использование, включая стики, переключатели и кнопки.</li>
                    <li><strong>Информационный дисплей:</strong> Встроенный дисплей предоставляет пилоту всю необходимую информацию о состоянии дрона, включая уровень заряда батареи, высоту, скорость и координаты.</li>
                    <li><strong>Дальность действия:</strong> Пульт управления обеспечивает надежное соединение на больших расстояниях, что позволяет управлять дроном на значительном удалении от оператора.</li>
                </ul>

                <h4>Подключение и совместимость</h4>

                <p>Пульт управления легко подключается ко всем моделям дронов Коптра, что обеспечивает простоту в использовании. Он поддерживает различные протоколы связи, что делает его совместимым с другими устройствами и системами, используемыми в беспилотной авиации.</p>

                <h4>Программируемые функции и настройки</h4>

                <p>Пользователи могут настраивать параметры управления под свои предпочтения, включая программирование кнопок и создание пользовательских режимов полета. Это позволяет максимизировать возможности управления дронов в зависимости от конкретных задач и условий полета.</p>

                <h4>Эргономичный дизайн и надежность</h4>

                <p>Пульт управления спроектирован с учетом комфорта пользователя. Он легкий, но при этом прочный, что позволяет использовать его в любых условиях. Эргономичные ручки обеспечивают удобный захват, а защитные функции гарантируют долгий срок службы устройства.</p>

                <p>С пультом управления от Коптра вы получите не только качественный инструмент для управления дронов, но и уверенность в точности и надежности своих операций. Этот пульт станет вашим надежным помощником в мире беспилотной авиации и позволит максимально эффективно использовать возможности вашего дрона.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = $root_path . 'drones/Cargo/drone3.php'; // Путь к предыдущей странице
                    $next_page = $root_path . 'navigationsystems/infrared.php'; // Путь к следующей странице
                    
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
    include __DIR__ . '/../modules/header.php';
    ?>
    <div class="page-container">
        <main><?php include __DIR__ . '/../modules/sidebar.php'; ?></main>
        <main class="content-docs">
            <section id="documentation-content" class="documentation-content">
                <section id="documentation" class="documentation">
                    <h1>Документация</h1>
                    <div class="documentation-grid">
                        <h3>Пульт управления</h3>
                        <h4>Интуитивное управление для всех моделей дронов Коптра</h4>

                        <p>Пульт управления от Коптра представляет собой современное решение, обеспечивающее надежное и интуитивное управление всеми моделями дронов нашей компании. С эргономичным дизайном и передовыми технологиями, этот пульт позволяет пользователям легко и комфортно управлять своими дронами, независимо от уровня их опыта.</p>

                        <h4>Ключевые характеристики и функции</h4>

                        <p>Пульт управления оснащен множеством функций, которые делают управление дронов простым и доступным. Он подходит как для новичков, так и для опытных пилотов, обеспечивая полный контроль над полетом.</p>

                        <ul>
                            <li><strong>Удобные органы управления:</strong> Все элементы управления расположены так, чтобы обеспечить быстрый доступ и интуитивное использование, включая стики, переключатели и кнопки.</li>
                            <li><strong>Информационный дисплей:</strong> Встроенный дисплей предоставляет пилоту всю необходимую информацию о состоянии дрона, включая уровень заряда батареи, высоту, скорость и координаты.</li>
                            <li><strong>Дальность действия:</strong> Пульт управления обеспечивает надежное соединение на больших расстояниях, что позволяет управлять дроном на значительном удалении от оператора.</li>
                        </ul>

                        <h4>Подключение и совместимость</h4>

                        <p>Пульт управления легко подключается ко всем моделям дронов Коптра, что обеспечивает простоту в использовании. Он поддерживает различные протоколы связи, что делает его совместимым с другими устройствами и системами, используемыми в беспилотной авиации.</p>

                        <h4>Программируемые функции и настройки</h4>

                        <p>Пользователи могут настраивать параметры управления под свои предпочтения, включая программирование кнопок и создание пользовательских режимов полета. Это позволяет максимизировать возможности управления дронов в зависимости от конкретных задач и условий полета.</p>

                        <h4>Эргономичный дизайн и надежность</h4>

                        <p>Пульт управления спроектирован с учетом комфорта пользователя. Он легкий, но при этом прочный, что позволяет использовать его в любых условиях. Эргономичные ручки обеспечивают удобный захват, а защитные функции гарантируют долгий срок службы устройства.</p>

                        <p>С пультом управления от Коптра вы получите не только качественный инструмент для управления дронов, но и уверенность в точности и надежности своих операций. Этот пульт станет вашим надежным помощником в мире беспилотной авиации и позволит максимально эффективно использовать возможности вашего дрона.</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = $root_path . 'drones/Cargo/drone3.php'; // Путь к предыдущей странице
                        $next_page = $root_path . 'navigationsystems/infrared.php'; // Путь к следующей странице
                        
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
    include __DIR__ . '/../modules/footer.php';
}
?>