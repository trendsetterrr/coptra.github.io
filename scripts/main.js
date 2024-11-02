// Constants
const CONSTANTS = {
    SCROLL_THRESHOLD: 50,
    ANIMATION_DURATION: 2000,
    DROPDOWN_DELAY: 100,
    FACT_COUNTS: {
        clients: 100,
        drones: 3,
        founded: 2024,
        experts: 20
    }
};

// Utility functions
const utils = {
    animateValue: (element, start, end, duration) => {
        if (!element) {
            return;
        }

        element.textContent = start;
        
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const currentValue = Math.floor(progress * (end - start) + start);
            
            element.textContent = currentValue;
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.textContent = end;
            }
        };
        
        window.requestAnimationFrame(step);
    },

    createIntersectionObserver: (callback, options = {}) => {
        return new IntersectionObserver(callback, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1,
            ...options
        });
    }
};

// Header Module
const HeaderModule = {
    init() {
        // Находим все навигационные меню
        const navMenus = document.querySelectorAll('.docs-nav'); // Убираем .main-nav отсюда
        
        navMenus.forEach(nav => {
            const dropdowns = nav.querySelectorAll('.dropdown');
            
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');
                
                if (link) {
                    link.addEventListener('click', (e) => {
                        if (window.innerWidth > 768) {
                            e.preventDefault();
                            e.stopPropagation();
                            
                            dropdowns.forEach(otherDropdown => {
                                if (otherDropdown !== dropdown) {
                                    otherDropdown.classList.remove('active');
                                }
                            });
                            
                            dropdown.classList.toggle('active');
                        }
                    });
                }
            });

            document.addEventListener('click', (e) => {
                if (!e.target.closest('.dropdown')) {
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('active');
                    });
                }
            });
        });
    }
};

// Scroll Progress Module
const ScrollProgressModule = {
    init() {
        const progressBar = document.createElement('div');
        progressBar.classList.add('scroll-progress');
        document.body.appendChild(progressBar);

        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
                    const scrollProgress = (window.pageYOffset / scrollTotal) * 100;
                    progressBar.style.width = `${scrollProgress}%`;
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
};

// FAQ Module
// const FAQModule = {
//     init() {
//         document.querySelectorAll('.faq-item').forEach(this.setupFAQItem);
//     },

//     setupFAQItem(item) {
//         const question = item.querySelector('.faq-question');
//         const answer = item.querySelector('.faq-answer');
//         const toggle = item.querySelector('.faq-toggle');

//         question.addEventListener('click', () => {
//             const isActive = item.classList.contains('active');
//             document.querySelectorAll('.faq-item').forEach(q => {
//                 q.classList.remove('active');
//                 q.querySelector('.faq-answer').style.maxHeight = null;
//                 q.querySelector('.faq-toggle').style.transform = 'rotate(0deg)';
//             });

//             if (!isActive) {
//                 item.classList.add('active');
//                 answer.style.maxHeight = `${answer.scrollHeight + 20}px`;
//                 toggle.style.transform = 'rotate(180deg)';
//             }
//         });
//     }
// };

// About Section Module
const AboutSectionModule = {
    init() {
        this.initParallax();
        this.initAnimations();
        this.initFactCounters();
        this.initImageZoom();
    },

    initParallax() {
        const parallaxBg = document.querySelector('.parallax-bg');
        if (parallaxBg) {
            window.addEventListener('scroll', () => {
                parallaxBg.style.transform = `translateY(${window.pageYOffset * 0.5}px)`;
            });
        }
    },

    initAnimations() {
        const observer = utils.createIntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('.section-transition').forEach(section => {
            observer.observe(section);
        });
    },

    initFactCounters() {
        const observer = utils.createIntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const factNumber = entry.target.querySelector('.fact-number');
                    const allFactCards = document.querySelectorAll('.fact-card');
                    const index = Array.from(allFactCards).indexOf(entry.target);
                    const factTypes = Object.keys(CONSTANTS.FACT_COUNTS);
                    const factType = factTypes[index];
                    const endValue = CONSTANTS.FACT_COUNTS[factType];
                    
                    if (endValue !== undefined && factNumber) {
                        utils.animateValue(factNumber, 0, endValue, CONSTANTS.ANIMATION_DURATION);
                        observer.unobserve(entry.target);
                    }
                }
            });
        });

        const factCards = document.querySelectorAll('.fact-card');
        if (factCards.length > 0) {
            factCards.forEach(card => observer.observe(card));
        }
    },
    initImageZoom() {
        const aboutImage = document.querySelector('.about-image img');
        if (aboutImage) {
            aboutImage.addEventListener('click', () => {
                aboutImage.classList.toggle('enlarged');
            });
        }
    }
};

// Testimonials Module
const TestimonialsModule = {
    init() {
        const testimonialsSection = document.querySelector('.testimonials');
        if (!testimonialsSection) return;

        const title = testimonialsSection.querySelector('h2');
        const cards = testimonialsSection.querySelectorAll('.testimonial-card');
        const pagination = testimonialsSection.querySelector('.swiper-pagination');
        let isAnimated = false;
        let lastScrollY = window.scrollY;

        // Инициализация Swiper
        const swiper = new Swiper('.testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                }
            }
        });

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        // Настройка анимации появления
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const cardsStartDelay = isFastScroll ? 100 : 200; // Задержка перед началом анимации карточек
                    const itemDelay = isFastScroll ? 50 : 100; // Задержка между карточками
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем карточки
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('animate');
                        }, cardsStartDelay + (index * itemDelay));
                    });

                    // Анимируем пагинацию
                    const paginationDelay = cardsStartDelay + (cards.length * itemDelay) - 100;
                    setTimeout(() => {
                        if (pagination) pagination.classList.add('animate');
                    }, paginationDelay);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(testimonialsSection);

        // Обработка событий слайдера
        let userInteracted = false;
        
        swiper.on('touchStart', () => {
            userInteracted = true;
            swiper.autoplay.stop();
        });

        swiper.on('transitionEnd', () => {
            if (userInteracted) {
                swiper.autoplay.start();
                userInteracted = false;
            }
        });
    }
};

// Form Validation Module
const FormModule = {
    init() {
        const form = document.getElementById('contact-form');
        if (!form) return;

        this.initPhoneInput();
        this.initFormValidation(form);
    },

    initPhoneInput() {
        const phoneInput = document.getElementById('phone');
        if (!phoneInput) return;

        let phoneMask = null;

        const initMask = () => {
            phoneMask = IMask(phoneInput, {
                mask: '+{7} (000) 000-00-00',
                lazy: true,
                placeholderChar: '_'
            });
            phoneInput.value = '+7';
        };

        const destroyMask = () => {
            if (phoneMask) {
                phoneMask.destroy();
                phoneMask = null;
                // Очищам значение, если остался только префикс маски
                if (phoneInput.value === '+7') {
                    phoneInput.value = '';
                }
            }
        };

        phoneInput.addEventListener('focus', () => {
            if (!phoneMask) {
                initMask();
                requestAnimationFrame(() => {
                    phoneInput.setSelectionRange(2, 2);
                });
            }
        });

        phoneInput.addEventListener('blur', () => {
            const valueWithoutMask = phoneInput.value.replace(/[^\d+]/g, '');
            // Если в поле только +7 или оно пустое - удаляем маску
            if (valueWithoutMask === '+7' || !valueWithoutMask) {
                destroyMask();
                // Убираем классы валидации
                phoneInput.classList.remove('invalid', 'valid');
                const formGroup = phoneInput.closest('.form-group');
                formGroup.classList.remove('error');
                const errorMessage = formGroup.querySelector('.error-message');
                if (errorMessage) {
                    errorMessage.remove();
                }
            }
        });

        phoneInput.addEventListener('input', () => {
            const value = phoneInput.value.replace(/\D/g, '');
            const isValid = value.length === 11;
            
            phoneInput.classList.toggle('invalid', !isValid && value.length > 1);
            phoneInput.classList.toggle('valid', isValid);
            
            const formGroup = phoneInput.closest('.form-group');
            formGroup.classList.toggle('error', !isValid && value.length > 1);
            
            let errorMessage = formGroup.querySelector('.error-message');
            if (!isValid && value.length > 1) {
                if (!errorMessage) {
                    errorMessage = document.createElement('span');
                    errorMessage.className = 'error-message';
                    formGroup.appendChild(errorMessage);
                }
                errorMessage.textContent = 'Введите корректный номер телефона';
            } else if (errorMessage) {
                errorMessage.remove();
            }
        });
    },

    initFormValidation(form) {
        const submitButton = form.querySelector('.submit-button');
        const inputs = form.querySelectorAll('input, textarea, select');
        const checkbox = form.querySelector('input[type="checkbox"]');

        submitButton.disabled = true;
        submitButton.classList.add('disabled');

        const validateForm = () => {
            const isValid = Array.from(inputs).every(input => {
                if (input.type === 'checkbox') {
                    return input.checked;
                }
                if (input.type === 'tel') {
                    return input.value.replace(/\D/g, '').length === 11;
                }
                return input.value.trim() !== '';
            });

            submitButton.disabled = !isValid;
            submitButton.classList.toggle('disabled', !isValid);
        };

        inputs.forEach(input => {
            input.addEventListener('input', validateForm);
            input.addEventListener('change', validateForm);
        });

        checkbox.addEventListener('change', validateForm);

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (!submitButton.disabled) {
                // Здесь будет логика отправки формы
                console.log('Form submitted');
            }
        });
    }
};

const MobileMenuModule = {
    init() {
        this.dropdowns = document.querySelectorAll('.dropdown');
        this.mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        this.mainNav = document.querySelector('.main-nav');
        this.dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');

        if (!this.mobileMenuBtn || !this.mainNav) return;

        this.setupEventListeners();
    },

    setupEventListeners() {
        // Обработчик для мобильной кнопки меню
        this.mobileMenuBtn.addEventListener('click', () => {
            this.mobileMenuBtn.classList.toggle('active');
            this.mainNav.classList.toggle('active');
            document.body.classList.toggle('menu-open');

            if (!this.mainNav.classList.contains('active')) {
                this.closeAllMenus();
            }
        });

        // Обработчик для дропдаунов
        this.dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('.dropdown-toggle');
            if (link) {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.toggleDropdown(dropdown);
                });
            }
        });

        // Обработчик для подменю
        this.dropdownSubmenus.forEach(submenu => {
            const link = submenu.querySelector('a');
            if (link) {
                link.addEventListener('click', (e) => {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        e.stopPropagation();
                        this.toggleSubmenu(submenu);
                    }
                });
            }
        });

        // Закрытие при клике вне меню только для десктопа
        document.addEventListener('click', (e) => {
            if (window.innerWidth > 768 && !e.target.closest('.dropdown')) {
                this.closeAllMenus();
            }
        });
    },
    
    // В MobileMenuModule исправляем метод toggleDropdown
    toggleDropdown(dropdown) {
        const isActive = dropdown.classList.contains('active');
        
    if (window.innerWidth <= 768) {
        // Мобильная версия - оставляем как есть
        this.closeOtherDropdowns(dropdown);
        dropdown.classList.toggle('active');
        
        if (!isActive) {
            this.closeAllSubmenus(dropdown);
        }
    } else {
        // Десктопная версия - добавляем/убираем active, но сохраняем hover
        if (isActive) {
            dropdown.classList.remove('active');
        } else {
            this.closeAllMenus();
                dropdown.classList.add('active');
            }
        }
    },

    toggleSubmenu(submenu) {
        if (window.innerWidth <= 768) {
            const isActive = submenu.classList.contains('active');
            
            const siblings = submenu.parentElement.querySelectorAll('.dropdown-submenu');
            siblings.forEach(sibling => {
                if (sibling !== submenu) {
                    sibling.classList.remove('active');
                }
            });

            submenu.classList.toggle('active');
        }
    },

    closeAllMenus() {
        this.dropdowns.forEach(dropdown => {
            dropdown.classList.remove('active');
            this.closeAllSubmenus(dropdown);
        });
    },

    closeOtherDropdowns(currentDropdown) {
        this.dropdowns.forEach(dropdown => {
            if (dropdown !== currentDropdown && dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
                this.closeAllSubmenus(dropdown);
            }
        });
    },

    closeAllSubmenus(dropdown) {
        const submenus = dropdown.querySelectorAll('.dropdown-submenu');
        submenus.forEach(submenu => submenu.classList.remove('active'));
    }
};

// Инициализация модуля
document.addEventListener('DOMContentLoaded', () => {

    const currentYear = document.querySelector('#current-year');
    if (currentYear) {
        currentYear.textContent = new Date().getFullYear();
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const expandableItems = document.querySelectorAll('.sidebar-item.expandable');
    
    expandableItems.forEach(item => {
        const link = item.querySelector('.sidebar-link');
        const subMenu = item.querySelector('.sub-menu');
        
        // Устанавливаем начальную высоту подменю
        subMenu.style.maxHeight = '0px';
        subMenu.style.overflow = 'hidden';
        subMenu.style.transition = 'max-height 0.3s ease, opacity 0.3s ease';
        subMenu.style.opacity = '0';

        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            if (item.classList.contains('active')) {
                // Сначала устанавливаем высоту в 0
                requestAnimationFrame(() => {
                    subMenu.style.maxHeight = '0px';
                    subMenu.style.opacity = '0';
                });
                
                // Ждем следующего кадра для плавной анимации
                requestAnimationFrame(() => {
                    item.classList.remove('active');
                });
            } else {
                // Открытие подменю
                item.classList.add('active');
                requestAnimationFrame(() => {
                    subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
                    subMenu.style.opacity = '1';
                });
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const sidebarLinks = document.querySelectorAll('.sidebar-nav a');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.getElementById(href.slice(1));
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const contentSection = document.querySelector('.content-docs');
    
    document.querySelectorAll('.sidebar-nav a[data-ajax-load]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('href');
            
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newContent = doc.querySelector('.documentation-content');
                
                if (newContent) {
                    contentSection.innerHTML = newContent.outerHTML;
                    history.pushState(null, '', url);
                } else {
                    console.error('Не удалось найти содержимое документации в ответе');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Обработка изменения истории браузера
    window.addEventListener('popstate', () => {
        location.reload();
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.goal-card');
    const steps = document.querySelectorAll('.goal-step');

    function setProgress(card) {
        const circle = card.querySelector('.progress-ring__circle');
        const progress = card.dataset.progress;
        const radius = circle.r.baseVal.value;
        const circumference = radius * 2 * Math.PI;
        
        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        
        // Добавляем задержку для анимации
        setTimeout(() => {
            circle.style.strokeDashoffset = circumference - (progress / 100) * circumference;
        }, 100);
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                if (entry.target.classList.contains('goal-card')) {
                    setProgress(entry.target);
                    
                    // Анимируем шаги с задержкой
                    const steps = entry.target.querySelectorAll('.goal-step');
                    steps.forEach((step, index) => {
                        setTimeout(() => {
                            step.classList.add('visible');
                        }, 200 * (index + 1));
                    });
                }
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    });

    cards.forEach(card => observer.observe(card));
});

document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('.preloader');
    
    // Функция для скрытия прелоадера
    function hidePreloader() {
        preloader.classList.add('hidden');
    }
    
    // Скрываем прелоадер после загрузки всех ресурсов
    window.addEventListener('load', () => {
        setTimeout(hidePreloader, 500);
    });
});

// Добавляем новый модуль для обработки AJAX-навигации
const NavigationModule = {
    init() {
        // Обработчик для кнопок навигации
        document.addEventListener('click', (e) => {
            const navButton = e.target.closest('.nav-button[data-ajax-load]');
            if (navButton) {
                e.preventDefault();
                const url = navButton.getAttribute('href');
                this.loadContent(url);
            }
        });

        // Обработка событий истории браузера
        window.addEventListener('popstate', (e) => {
            if (e.state && e.state.url) {
                this.loadContent(e.state.url, false);
            }
        });
    },

    loadContent(url, pushState = true) {
        const contentSection = document.querySelector('.documentation-content');
        
        fetch(url, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.querySelector('.documentation-content');
            
            if (newContent) {
                contentSection.innerHTML = newContent.innerHTML;
                if (pushState) {
                    history.pushState({ url }, '', url);
                }
                // Прокручиваем страницу вверх после загрузки нового контента
                contentSection.scrollIntoView({ behavior: 'smooth' });
            }
        })
        .catch(error => console.error('Error:', error));
    }
};

// Particles Module
const ParticlesModule = {
    init() {
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: '#ffffff'
                    },
                    shape: {
                        type: 'circle'
                    },
                    opacity: {
                        value: 0.5,
                        random: false,
                        animation: {
                            enable: true,
                            speed: 1,
                            minimumValue: 0.1,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        animation: {
                            enable: true,
                            speed: 2,
                            minimumValue: 0.1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ffffff',
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        outModes: {
                            default: 'bounce'
                        },
                        attract: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'grab'
                        },
                        onclick: {
                            enable: false
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 140,
                            line_linked: {
                                opacity: 1
                            }
                        }
                    }
                },
                retina_detect: true
            });
        }
    }
};

// Hero Animation Module
const HeroAnimationModule = {
    init() {
        const hero = document.querySelector('.hero');
        if (!hero) return;

        // Разбиваем текст заголовка на слова, а затем на буквы для анимации
        const title = hero.querySelector('h1');
        if (title) {
            const words = title.textContent.split(' ');
            title.textContent = '';
            
            words.forEach((word, wordIndex) => {
                const wordSpan = document.createElement('span');
                wordSpan.className = 'word';
                
                // Добавляем буквы для каждого слова
                word.split('').forEach((char, charIndex) => {
                    const letterSpan = document.createElement('span');
                    letterSpan.textContent = char;
                    letterSpan.style.animationDelay = `${0.3 + (wordIndex * word.length + charIndex) * 0.05}s`;
                    letterSpan.style.animation = 'letterFadeIn 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
                    wordSpan.appendChild(letterSpan);
                });
                
                title.appendChild(wordSpan);
                
                // Добавляем пробел после каждого слова, кроме последнего
                if (wordIndex < words.length - 1) {
                    title.appendChild(document.createTextNode(' '));
                }
            });
        }

        // Остальной од остается без изменений...
    }
    // ... остальные методы модуля
};

// Добавляем инициализацию в общий список
document.addEventListener('DOMContentLoaded', () => {
    HeroAnimationModule.init();
});

// About Animation Module
const AboutAnimationModule = {
    init() {
        const aboutSection = document.querySelector('.about');
        if (!aboutSection) return;

        const animatedElements = aboutSection.querySelectorAll('h2, .company-description, .timeline-item, .goals-section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    
                    // Если это timeline-item, добавляем меньшую задержку
                    if (entry.target.classList.contains('timeline-item')) {
                        const index = Array.from(entry.target.parentNode.children).indexOf(entry.target);
                        entry.target.style.animationDelay = `${0.1 * index}s`; // Было 0.2s
                    }
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px' // Уменьшили отступ для более раннего срабатывания
        });

        animatedElements.forEach(element => observer.observe(element));
    }
};

// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    AboutAnimationModule.init();
});

const GoalsAnimationModule = {
    init() {
        const goalsSection = document.querySelector('.goals');
        if (!goalsSection) return;

        const title = goalsSection.querySelector('h2');
        const cards = goalsSection.querySelectorAll('.goal-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.tagName.toLowerCase() === 'h2') {
                        entry.target.classList.add('animate');
                    } else if (entry.target.classList.contains('goal-card')) {
                        entry.target.classList.add('visible');
                        this.setProgress(entry.target);
                        
                        const steps = entry.target.querySelectorAll('.goal-step');
                        steps.forEach((step, index) => {
                            setTimeout(() => {
                                step.classList.add('visible');
                            }, 200 * (index + 1));
                        });
                    }
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        if (title) observer.observe(title);
        cards.forEach(card => observer.observe(card));
    },

    setProgress(card) {
        const circle = card.querySelector('.progress-ring__circle');
        const progress = card.dataset.progress;
        const radius = circle.r.baseVal.value;
        const circumference = radius * 2 * Math.PI;
        
        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        setTimeout(() => {
            circle.style.strokeDashoffset = circumference - (progress / 100) * circumference;
        }, 100);
    }
};

// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    GoalsAnimationModule.init();
});

const ApplicationsAnimationModule = {
    init() {
        const applicationsSection = document.querySelector('.applications');
        if (!applicationsSection) return;

        const title = applicationsSection.querySelector('h2');
        const cards = applicationsSection.querySelectorAll('.application-card');
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const cardsStartDelay = isFastScroll ? 100 : 300; // Задержка перед началом анимации карточек
                    const itemDelay = isFastScroll ? 50 : 100; // Задержка между карточками
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем карточки
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('animate');
                        }, cardsStartDelay + (index * itemDelay));
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(applicationsSection);
    }
};

// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    ApplicationsAnimationModule.init();
});

const ProductsAnimationModule = {
    init() {
        const productsSection = document.querySelector('.products');
        if (!productsSection) return;

        const title = productsSection.querySelector('h2');
        const cards = productsSection.querySelectorAll('.product-card');
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержа для заголовка
                    const cardsStartDelay = isFastScroll ? 200 : 300; // Задержка перед началом анимации карточек
                    const itemDelay = isFastScroll ? 100 : 200; // Задержка между карточками
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем карточки
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('animate');
                        }, cardsStartDelay + (index * itemDelay));
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(productsSection);
    }
};

// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    ProductsAnimationModule.init();
});

const AdvantagesAnimationModule = {
    init() {
        const advantagesSection = document.querySelector('.advantages');
        if (!advantagesSection) return;

        const title = advantagesSection.querySelector('h2');
        const cards = advantagesSection.querySelectorAll('.advantage-card');
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const cardsStartDelay = isFastScroll ? 100 : 200; // Задержка перед началом анимации карточек
                    const itemDelay = isFastScroll ? 50 : 100; // Задержка между карточками
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем карточки
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('animate');
                        }, cardsStartDelay + (index * itemDelay));
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(advantagesSection);
    }
};

// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    AdvantagesAnimationModule.init();
});

const NewsAnimationModule = {
    init() {
        const newsSection = document.querySelector('.news');
        if (!newsSection) return;

        const title = newsSection.querySelector('h2');
        const newsItems = newsSection.querySelectorAll('.news-item');
        let isAnimated = false;
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const itemsStartDelay = isFastScroll ? 100 : 300; // Задержка перед началом анимации новостей
                    const itemDelay = isFastScroll ? 50 : 100; // Задержка между новостями
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем новости
                    newsItems.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, itemsStartDelay + (index * itemDelay));
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(newsSection);
    }
};

const PartnersAnimationModule = {
    init() {
        const partnersSection = document.querySelector('.partners');
        if (!partnersSection) return;

        const title = partnersSection.querySelector('h2');
        const partners = partnersSection.querySelectorAll('.partner-item');
        let isAnimated = false;
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const partnersStartDelay = isFastScroll ? 100 : 300; // Задержка перед началом анимации партнеров
                    const itemDelay = isFastScroll ? 50 : 150; // Меньшая задержка для пртнеров
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем партнеров
                    partners.forEach((partner, index) => {
                        setTimeout(() => {
                            partner.classList.add('animate');
                        }, partnersStartDelay + (index * itemDelay));
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(partnersSection);
    }
};
// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    PartnersAnimationModule.init();
});

const FAQAnimationModule = {
    init() {
        const faqSection = document.querySelector('.faq');
        if (!faqSection) return;

        const title = faqSection.querySelector('h2');
        const faqItems = faqSection.querySelectorAll('.faq-item');
        let isAnimated = false;
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        // Обработчики киков для FAQ
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Закрываем все остальные ответы
                faqItems.forEach(q => {
                    q.classList.remove('active');
                    q.querySelector('.faq-answer').style.maxHeight = null;
                });

                if (!isActive) {
                    item.classList.add('active');
                    answer.style.maxHeight = `${answer.scrollHeight + 20}px`;
                }
            });
        });

        // Анимация появления элементов
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const itemsStartDelay = isFastScroll ? 100 : 500; // Задержка перед началом анимации вопросов
                    const itemDelay = isFastScroll ? 50 : 100; // Задержка между вопросами
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем вопросы
                    faqItems.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, itemsStartDelay + (index * itemDelay));
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(faqSection);
    }
};
// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    FAQAnimationModule.init();
});

const TelegramAnimationModule = {
    init() {
        const telegramSection = document.querySelector('.telegram-community');
        if (!telegramSection) return;

        const telegramBlock = telegramSection.querySelector('.telegram-block');
        const icon = telegramSection.querySelector('.telegram-icon');
        const text = telegramSection.querySelector('.telegram-text');
        const button = telegramSection.querySelector('.telegram-button');
        let isAnimated = false;
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const blockDelay = isFastScroll ? 0 : 200; // Задержка для блока
                    const elementDelay = isFastScroll ? 50 : 150; // Задержка между элементами
                    
                    // Анимируем блок
                    setTimeout(() => {
                        telegramBlock.classList.add('animate');
                    }, blockDelay);
                    
                    // Анимируем иконку
                    setTimeout(() => {
                        icon.classList.add('animate');
                    }, blockDelay + elementDelay);
                    
                    // Анимируем текст
                    setTimeout(() => {
                        text.classList.add('animate');
                    }, blockDelay + (elementDelay * 2));
                    
                    // Анимируем кнопку
                    setTimeout(() => {
                        button.classList.add('animate');
                    }, blockDelay + (elementDelay * 3));
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(telegramSection);
    }
};

// Добавляем инициализацию
document.addEventListener('DOMContentLoaded', () => {
    TelegramAnimationModule.init();
});

const ContactAnimationModule = {
    init() {
        const contactSection = document.querySelector('.contact');
        if (!contactSection) return;

        const title = contactSection.querySelector('h2');
        const form = contactSection.querySelector('.contact-form');
        const infoContainer = contactSection.querySelector('.contact-info-container');
        let isAnimated = false;
        let lastScrollY = window.scrollY;

        // Отслеживаем скорость прокрутки
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    
                    // Определяем скорость прокрутки
                    const scrollSpeed = Math.abs(window.scrollY - lastScrollY);
                    const isFastScroll = scrollSpeed > 50;
                    
                    // Устанавливаем задержки в зависимости от скорости
                    const titleDelay = isFastScroll ? 0 : 0; // Задержка для заголовка
                    const formDelay = isFastScroll ? 100 : 300; // Задержка для формы
                    const infoDelay = isFastScroll ? 200 : 450; // Задержка для контактной информации
                    
                    // Анимируем заголовок
                    setTimeout(() => {
                        if (title) title.classList.add('animate');
                    }, titleDelay);
                    
                    // Анимируем форму
                    setTimeout(() => {
                        form.classList.add('animate');
                    }, formDelay);

                    // Анимируем контактную информацию
                    setTimeout(() => {
                        infoContainer.classList.add('animate');
                    }, infoDelay);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(contactSection);
    }
};

// 404 Page Module
const Error404Module = {
    init() {
        const errorPage = document.querySelector('.error-container');
        if (!errorPage) return;

        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 1000
                    }
                },
                color: {
                    value: '#ff6b6b'
                },
                shape: {
                    type: 'circle'
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ff6b6b',
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: true,
                    straight: false,
                    out_mode: 'bounce',
                    bounce: true,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'grab'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });
    }
};

// Удаляем все остальные DOMContentLoaded и оставляем только этот в конце файла
document.addEventListener('DOMContentLoaded', () => {
    // Основной модуль меню
    MobileMenuModule.init();
    // Остальные модули
    HeaderModule.init();
    ScrollProgressModule.init();
    FAQModule.init();
    AboutSectionModule.init();
    TestimonialsModule.init();
    FormModule.init();
    ContactAnimationModule.init();
    Error404Module.init();
    ParticlesModule.init();
    NewsAnimationModule.init();
    NavigationModule.init();
});

