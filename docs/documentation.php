<?php
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$root_path = '';
$project_folder = 'rework'; // Имя папки вашего проекта
if(isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], $project_folder) !== false) {
    $root_path = '/' . $project_folder . '/';
}
if ($isAjax) {
    // Для AJAX-запроса возвращаем только контент
    ?>
    <main class="content-docs">
        <section id="documentation-content" class="documentation-content">
            <section id="documentation" class="documentation">
                <h1>Документация</h1>
                <div class="documentation-grid">
                    <h3>Введение</h3>
                    <h4>Коптра и её миссия</h4>
    
                    <p>Добро пожаловать в мир инноваций и передовых технологий с компанией Коптра! Мы стремимся изменить представление о дронах, делая их доступными, удобными и практичными для применения в самых разных сферах — от образовательных учреждений до крупных бизнес-проектов. В этой документации вы найдете все необходимые сведения, чтобы начать использование наших дронов, погрузиться в их функциональные возможности и освоить технологии будущего уже сегодня.</p>
    
                    <p>Мы гордимся тем, что наши дроны — это результат передовых разработок, а также доступные, открытые и гибкие в настройке устройства. Наша команда объединила свои усилия, чтобы сделать управление дронами интуитивным и увлекательным процессом, который способен заинтересовать не только профессионалов, но и начинающих исследователей. Мы стремимся к тому, чтобы каждый, кто берется за управление нашим дроном, ощущал, что мир технологий открыт перед ним.</p>
    
                    <h4>Цели компании</h4>
    
                    <p>Основной целью Коптра является популяризация использования дронов и развитие навыков работы с передовыми технологиями. Мы стараемся не просто предоставлять оборудование, а создавать целостную платформу, в которой легко начать и углубить свои знания. Через детально проработанную документацию и поддержку на каждом этапе, мы стремимся обеспечить максимально комфортный процесс для пользователей с любым уровнем подготовки.</p>
    
                    <h4>Почему стоит выбрать Коптра?</h4>
    
                    <p>Мы предлагаем продукты, которые сочетают в себе мощное оборудование и простоту в использовании. Ориентируясь на образовательные и профессиональные потребности, мы создали линейку дронов, которые могут быть адаптированы под различные задачи и условия эксплуатации. Наши дроны обладают гибкой программной архитектурой, что позволяет интегрировать их в различные проекты и учебные программы. В сочетании с поддержкой нашей команды, это делает Коптра надежным партнером в освоении мира дронов.</p>
    
                    <h4>Для кого создана наша платформа?</h4>
    
                    <p>Наша продукция подходит как для образовательных учреждений, так и для организаций, стремящихся к инновационным решениям. Мы предлагаем платформы, которые отлично подходят для студентов, преподавателей, энтузиастов, а также для бизнеса, заинтересованного в применении дронов для решения задач в самых разных отраслях. Благодаря поддержке современных технологий, наши дроны легко программируются и интегрируются в учебные процессы или корпоративные задачи.</p>
    
                    <p>Независимо от вашего опыта и сферы деятельности, наша цель — предоставить вам инструменты для успешного внедрения беспилотных решений. Мы убеждены, что каждый может стать частью высокотехнологичного будущего вместе с Коптра.</p>
    
                    <h4>Как пользоваться документацией?</h4>
    
                    <p>Эта документация призвана стать вашим гидом по работе с нашими дронами и платформой в целом. В ней вы найдете информацию о технических характеристиках, примерах применения, пошаговые руководства и рекомендации по программированию дронов. Документация структурирована так, чтобы каждый мог легко найти нужные материалы и начать применять полученные знания на практике.</p>
    
                    <p>Для удобства пользователей, доступен PDF-вариант документации, а также версия на английском языке. В случае, если вы не нашли ответ на свой вопрос, наша служба поддержки всегда готова помочь вам в решении любых вопросов, связанных с нашими продуктами.</p>
    
                    <h4>Как связаться с поддержкой?</h4>
    
                    <p>Мы понимаем, что у наших пользователей могут возникать вопросы, требующие профессионального ответа. Для этого у нас работает команда специалистов, готовых ответить на любые вопросы. Вы можете обратиться к нам через наш телеграм-чат <a href="https://t.me/CoptraHelpdesk">@CoptraHelpdesk</a>, где мы предоставляем оперативную поддержку по всем вопросам.</p>
    
                    <p>Для программистов и разработчиков, заинтересованных в углубленном изучении автономных систем управления и роевого полета, доступны дополнительные чаты и сообщества, где можно обмениваться опытом и получать консультации. Присоединяйтесь к нам и откройте мир возможностей с Коптра!</p>
    
                </div>
                <div class="page-navigation" style="display: flex; justify-content: flex-end;">
                    <?php
                    // Определяем только следующую страницу
                    $next_page = $root_path . 'docs/drones/Training/drone1.php';
                    
                    if ($next_page): ?>
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
    // Для обычного запроса возвращаем полную страницу
    include __DIR__ . '/../modules/header.php';
    ?>
    <div class="page-container">
        <main><?php include __DIR__ . '/../modules/sidebar.php'; ?></main>
        <main class="content-docs">
            <section id="documentation-content" class="documentation-content">
                <section id="documentation" class="documentation">
                    <h1>Документация</h1>
                    <div class="documentation-grid">
                    <h3>Введение</h3>
                    <h4>Коптра и её миссия</h4>
    
                    <p>Добро пожаловать в мир инноваций и передовых технологий с компанией Коптра! Мы стремимся изменить представление о дронах, делая их доступными, удобными и практичными для применения в самых разных сферах — от образовательных учреждений до крупных бизнес-проектов. В этой документации вы найдете все необходимые сведения, чтобы начать использование наших дронов, погрузиться в их функциональные возможности и освоить технологии будущего уже сегодня.</p>
    
                    <p>Мы гордимся тем, что наши дроны — это результат передовых разработок, а также доступные, открытые и гибкие в настройке устройства. Наша команда объединила свои усилия, чтобы сделать управление дронами интуитивным и увлекательным процессом, который способен заинтересовать не только профессионалов, но и начинающих исследователей. Мы стремимся к тому, чтобы каждый, кто берется за управление нашим дроном, ощущал, что мир технологий открыт перед ним.</p>
    
                    <h4>Цели компании</h4>
    
                    <p>Основной целью Коптра является популяризация использования дронов и развитие навыков работы с передовыми технологиями. Мы стараемся не просто предоставлять оборудование, а создавать целостную платформу, в которой легко начать и углубить свои знания. Через детально проработанную документацию и поддержку на каждом этапе, мы стремимся обеспечить максимально комфортный процесс для пользователей с любым уровнем подготовки.</p>
    
                    <h4>Почему стоит выбрать Коптра?</h4>
    
                    <p>Мы предлагаем продукты, которые сочетают в себе мощное оборудование и простоту в использовании. Ориентируясь на образовательные и профессиональные потребности, мы создали линейку дронов, которые могут быть адаптированы под различные задачи и условия эксплуатации. Наши дроны обладают гибкой программной архитектурой, что позволяет интегрировать их в различные проекты и учебные программы. В сочетании с поддержкой нашей команды, это делает Коптра надежным партнером в освоении мира дронов.</p>
    
                    <h4>Для кого создана наша платформа?</h4>
    
                    <p>Наша продукция подходит как для образовательных учреждений, так и для организаций, стремящихся к инновационным решениям. Мы предлагаем платформы, которые отлично подходят для студентов, преподавателей, энтузиастов, а также для бизнеса, заинтересованного в применении дронов для решения задач в самых разных отраслях. Благодаря поддержке современных технологий, наши дроны легко программируются и интегрируются в учебные процессы или корпоративные задачи.</p>
    
                    <p>Независимо от вашего опыта и сферы деятельности, наша цель — предоставить вам инструменты для успешного внедрения беспилотных решений. Мы убеждены, что каждый может стать частью высокотехнологичного будущего вместе с Коптра.</p>
    
                    <h4>Как пользоваться документацией?</h4>
    
                    <p>Эта документация призвана стать вашим гидом по работе с нашими дронами и платформой в целом. В ней вы найдете информацию о технических характеристиках, примерах применения, пошаговые руководства и рекомендации по программированию дронов. Документация структурирована так, чтобы каждый мог легко найти нужные материалы и начать применять полученные знания на практике.</p>
    
                    <!-- <p>Для удобства пользователей, доступен PDF-вариант документации, а также версия на английском языке. В случае, если вы не нашли ответ на свой вопрос, наша служба поддержки всегда готова помочь вам в решении любых вопросов, связанных с нашими продуктами.</p>-->
                    <p>В случае, если вы не нашли ответ на свой вопрос, наша служба поддержки всегда готова помочь вам в решении любых вопросов, связанных с нашими продуктами.</p>
                    <h4>Как связаться с поддержкой?</h4>
    
                    <p>Мы понимаем, что у наших пользователей могут возникать вопросы, требующие профессионального ответа. Для этого у нас работает команда специалистов, готовых ответить на любые вопросы. Вы можете обратиться к нам через наш телеграм-чат <a href="https://t.me/CoptraHelpdesk">@CoptraHelpdesk</a>, где мы предоставляем оперативную поддержку по всем вопросам.</p>
    
                    <p>Для программистов и разработчиков, заинтересованных в углубленном изучении автономных систем управления и роевого полета, доступны дополнительные чаты и сообщества, где можно обмениваться опытом и получать консультации. Присоединяйтесь к нам и откройте мир возможностей с Коптра!</p>
    
                </div>
                    <div class="page-navigation" style="display: flex; justify-content: flex-end;">
                        <?php
                        // Определяем только следующую страницу
                        $next_page = $root_path . 'docs/drones/Training/drone1.php';
                        
                        if ($next_page): ?>
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
