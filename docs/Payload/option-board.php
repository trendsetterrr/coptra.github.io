<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

if ($isAjax) {
    ?>
    <main class="content-docs">
        <section id="documentation-content" class="documentation-content">
            <section id="documentation" class="documentation">
                <h1>Документация</h1>
                <div class="documentation-grid">
                <h3>Плата подключения дополнительных модулей</h3>
                <h4>Расширьте функциональность вашего дрона с помощью модульной архитектуры</h4>

                <p>Плата подключения дополнительных модулей от Коптра предоставляет пользователям возможность расширить функциональность своих дронов, интегрируя различные устройства и сенсоры. Эта плата создана с целью обеспечить максимальную гибкость и адаптивность, позволяя пользователям настраивать свои дроны под конкретные задачи и требования.</p>

                <h4>Ключевые характеристики платы подключения</h4>

                <p>Плата подключения дополнительных модулей обладает рядом характеристик, которые делают её незаменимым инструментом для разработчиков и пользователей:</p>

                <ul>
                    <li><strong>Универсальные интерфейсы:</strong> Плата оснащена несколькими типами интерфейсов, включая UART, I2C и SPI, что позволяет легко подключать различные сенсоры, камеры и другие модули.</li>
                    <li><strong>Простота интеграции:</strong> Проектирование платы обеспечивает легкую интеграцию с существующими системами, что упрощает процесс установки и настройки дополнительных модулей.</li>
                    <li><strong>Поддержка различных стандартов:</strong> Плата совместима с различными стандартами и протоколами, что обеспечивает возможность использования её с широким спектром дополнительных устройств.</li>
                </ul>

                <h4>Возможные модули для подключения</h4>

                <p>С помощью платы подключения дополнительных модулей вы можете интегрировать разнообразные устройства, включая:</p>

                <ul>
                    <li><strong>Камеры:</strong> Для видеонаблюдения и аэрофотосъемки, что открывает новые возможности для применения дронов в сельском хозяйстве, строительстве и безопасности.</li>
                    <li><strong>Сенсоры:</strong> Для мониторинга окружающей среды, таких как датчики температуры, влажности и качества воздуха, что позволяет использовать дрон в научных исследованиях и экологии.</li>
                    <li><strong>Модули связи:</strong> Для обеспечения связи на больших расстояниях и передачи данных в реальном времени, что особенно полезно в логистике и спасательных операциях.</li>
                </ul>

                <h4>Преимущества использования платы подключения</h4>

                <p>Использование платы подключения дополнительных модулей от Коптра предоставляет пользователям ряд преимуществ:</p>

                <ul>
                    <li><strong>Гибкость:</strong> Возможность настройки дронов под конкретные задачи позволяет значительно расширить их функциональность.</li>
                    <li><strong>Увеличение производительности:</strong> Интеграция дополнительных модулей позволяет повысить эффективность операций и улучшить качество получаемых данных.</li>
                    <li><strong>Инновационные решения:</strong> Возможность подключения новейших технологий и устройств способствует постоянному развитию и улучшению работы дронов.</li>
                </ul>

                <h4>Заключение</h4>

                <p>Плата подключения дополнительных модулей от Коптра — это ключевой элемент, который позволяет пользователям максимально использовать потенциал своих дронов. С её помощью вы сможете настроить свои беспилотные аппараты для решения самых различных задач, делая их незаменимыми помощниками в вашей работе.</p>

                </div>
                <div class="page-navigation">
                    <?php
                    // Определяем предыдущую и следующую страницы
                    $prev_page = '/../docs/navigationsystems/optical.php'; // Путь к предыдущей странице
                    $next_page = '/../docs/Software/pioneer-station.php'; // Путь к следующей странице
                    
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
                        <h3>Плата подключения дополнительных модулей</h3>
                        <h4>Расширьте функциональность вашего дрона с помощью модульной архитектуры</h4>

                        <p>Плата подключения дополнительных модулей от Коптра предоставляет пользователям возможность расширить функциональность своих дронов, интегрируя различные устройства и сенсоры. Эта плата создана с целью обеспечить максимальную гибкость и адаптивность, позволяя пользователям настраивать свои дроны под конкретные задачи и требования.</p>

                        <h4>Ключевые характеристики платы подключения</h4>

                        <p>Плата подключения дополнительных модулей обладает рядом характеристик, которые делают её незаменимым инструментом для разработчиков и пользователей:</p>

                        <ul>
                            <li><strong>Универсальные интерфейсы:</strong> Плата оснащена несколькими типами интерфейсов, включая UART, I2C и SPI, что позволяет легко подключать различные сенсоры, камеры и другие модули.</li>
                            <li><strong>Простота интеграции:</strong> Проектирование платы обеспечивает легкую интеграцию с существующими системами, что упрощает процесс установки и настройки дополнительных модулей.</li>
                            <li><strong>Поддержка различных стандартов:</strong> Плата совместима с различными стандартами и протоколами, что обеспечивает возможность использования её с широким спектром дополнительных устройств.</li>
                        </ul>

                        <h4>Возможные модули для подключения</h4>

                        <p>С помощью платы подключения дополнительных модулей вы можете интегрировать разнообразные устройства, включая:</p>

                        <ul>
                            <li><strong>Камеры:</strong> Для видеонаблюдения и аэрофотосъемки, что открывает новые возможности для применения дронов в сельском хозяйстве, строительстве и безопасности.</li>
                            <li><strong>Сенсоры:</strong> Для мониторинга окружающей среды, таких как датчики температуры, влажности и качества воздуха, что позволяет использовать дрон в научных исследованиях и экологии.</li>
                            <li><strong>Модули связи:</strong> Для обеспечения связи на больших расстояниях и передачи данных в реальном времени, что особенно полезно в логистике и спасательных операциях.</li>
                        </ul>

                        <h4>Преимущества использования платы подключения</h4>

                        <p>Использование платы подключения дополнительных модулей от Коптра предоставляет пользователям ряд преимуществ:</p>

                        <ul>
                            <li><strong>Гибкость:</strong> Возможность настройки дронов под конкретные задачи позволяет значительно расширить их функциональность.</li>
                            <li><strong>Увеличение производительности:</strong> Интеграция дополнительных модулей позволяет повысить эффективность операций и улучшить качество получаемых данных.</li>
                            <li><strong>Инновационные решения:</strong> Возможность подключения новейших технологий и устройств способствует постоянному развитию и улучшению работы дронов.</li>
                        </ul>

                        <h4>Заключение</h4>

                        <p>Плата подключения дополнительных модулей от Коптра — это ключевой элемент, который позволяет пользователям максимально использовать потенциал своих дронов. С её помощью вы сможете настроить свои беспилотные аппараты для решения самых различных задач, делая их незаменимыми помощниками в вашей работе.</p>

                    </div>
                    <div class="page-navigation">
                        <?php
                        // Определяем предыдущую и следующую страницы
                        $prev_page = '/../docs/navigationsystems/optical.php'; // Путь к предыдущей странице
                        $next_page = '/../docs/Software/pioneer-station.php'; // Путь к следующей странице
                        
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
