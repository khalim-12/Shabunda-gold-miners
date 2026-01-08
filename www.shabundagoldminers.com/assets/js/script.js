// Enhanced carousel animations
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('heroCarousel');
    const navbar = document.querySelector('.navbar');
    const navbarBrand = document.querySelector('.navbar-brand');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Carousel functionality
    if (carousel) {
        // Reset animations when slide changes
        carousel.addEventListener('slide.bs.carousel', function(e) {
            const currentSlide = e.relatedTarget;
            const captions = currentSlide.querySelector('.carousel-caption');
            if (captions) {
                const heading = captions.querySelector('h2');
                const paragraph = captions.querySelector('p');
                const button = captions.querySelector('.cta-button');
                
                // Reset animation states
                captions.style.opacity = '0';
                if (heading) {
                    heading.style.opacity = '0';
                    heading.style.transform = 'translateY(30px)';
                }
                if (paragraph) {
                    paragraph.style.opacity = '0';
                    paragraph.style.transform = 'translateY(30px)';
                }
                if (button) {
                    button.style.opacity = '0';
                    button.style.transform = 'translateY(30px)';
                }
            }
        });
        
        // Trigger animations when slide is fully shown
        carousel.addEventListener('slid.bs.carousel', function() {
            const activeSlide = carousel.querySelector('.carousel-item.active');
            const captions = activeSlide.querySelector('.carousel-caption');
            if (captions) {
                const heading = captions.querySelector('h2');
                const paragraph = captions.querySelector('p');
                const button = captions.querySelector('.cta-button');
                
                // Apply animation based on caption class
                if (captions.classList.contains('slide-left')) {
                    captions.style.transform = 'translateX(0) translateY(50%)';
                } else if (captions.classList.contains('slide-right')) {
                    captions.style.transform = 'translateX(0) translateY(50%)';
                } else if (captions.classList.contains('fade-up')) {
                    captions.style.transform = 'translateY(0) translateY(50%)';
                } else if (captions.classList.contains('zoom-in')) {
                    captions.style.transform = 'translateY(50%) scale(1)';
                }
                
                captions.style.opacity = '1';
                
                // Staggered animations for children
                setTimeout(() => {
                    if (heading) {
                        heading.style.opacity = '1';
                        heading.style.transform = 'translateY(0)';
                    }
                }, 300);
                
                setTimeout(() => {
                    if (paragraph) {
                        paragraph.style.opacity = '1';
                        paragraph.style.transform = 'translateY(0)';
                    }
                }, 600);
                
                if (button) {
                    setTimeout(() => {
                        button.style.opacity = '1';
                        button.style.transform = 'translateY(0)';
                    }, 900);
                }
            }
        });
        
        // Initialize first slide animations
        const firstSlide = carousel.querySelector('.carousel-item.active');
        if (firstSlide) {
            const captions = firstSlide.querySelector('.carousel-caption');
            if (captions) {
                const heading = captions.querySelector('h2');
                const paragraph = captions.querySelector('p');
                const button = captions.querySelector('.cta-button');
                
                setTimeout(() => {
                    captions.style.opacity = '1';
                    captions.style.transform = 'translateY(50%) scale(1)';
                    
                    setTimeout(() => {
                        if (heading) {
                            heading.style.opacity = '1';
                            heading.style.transform = 'translateY(0)';
                        }
                    }, 300);
                    
                    setTimeout(() => {
                        if (paragraph) {
                            paragraph.style.opacity = '1';
                            paragraph.style.transform = 'translateY(0)';
                        }
                    }, 600);
                    
                    if (button) {
                        setTimeout(() => {
                            button.style.opacity = '1';
                            button.style.transform = 'translateY(0)';
                        }, 900);
                    }
                }, 500);
            }
        }
    }

    // Enhanced scroll behavior for navbar
    function handleScroll() {
        const scrolled = window.scrollY > 50;
        
        if (scrolled) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.background = 'rgba(44, 62, 80, 0.98)';
            navbar.style.backdropFilter = 'blur(20px)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.background = 'linear-gradient(135deg, #2C3E50, #1a2530)';
            navbar.style.backdropFilter = 'none';
        }
        
        // Update active nav link based on scroll position
        updateActiveNavLink();
    }
    
    // Update active navigation link
    function updateActiveNavLink() {
        const scrollPos = window.scrollY + 100;
        
        navLinks.forEach(link => {
            const targetId = link.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                const section = document.querySelector(targetId);
                if (section) {
                    const sectionTop = section.offsetTop;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    
                    if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                }
            }
        });
    }
    
    // Smooth scroll with offset for fixed navbar
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                e.preventDefault();
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = targetElement.offsetTop - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu after click
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                    
                    // Update active state
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            }
        });
    });
    
    // Handle resize events for better responsiveness
    let resizeTimer;
    function handleResize() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Update navbar background on resize
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(44, 62, 80, 0.98)';
            } else {
                navbar.style.background = 'linear-gradient(135deg, #2C3E50, #1a2530)';
            }
        }, 250);
    }
    
    // Event listeners
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleResize);
    
    // Initialize active link on page load
    updateActiveNavLink();
});

// Statistics counter animation
function animateStatistics() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    statNumbers.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-count'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
                
                // Add celebration effect when counting completes
                const card = stat.closest('.impact-stat-card');
                if (card) {
                    card.style.transform = 'scale(1.05)';
                    setTimeout(() => {
                        card.style.transform = 'scale(1)';
                    }, 300);
                }
            }
            stat.textContent = Math.floor(current);
        }, 16);
    });
}

// Intersection Observer for statistics animation
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateStatistics();
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe impact section
const impactSection = document.querySelector('.impact-section');
if (impactSection) {
    observer.observe(impactSection);
}

// Enhanced FAQ functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqButtons = document.querySelectorAll('.accordion-button');
    
    faqButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add smooth animation to the clicked item
            const accordionItem = this.closest('.accordion-item');
            accordionItem.style.transition = 'all 0.3s ease';
            
            // Optional: Close other items in the same accordion
            if (this.classList.contains('collapsed')) {
                const parentAccordion = this.closest('.accordion');
                const openItems = parentAccordion.querySelectorAll('.accordion-button:not(.collapsed)');
                openItems.forEach(item => {
                    if (item !== this) {
                        item.click();
                    }
                });
            }
        });
        
        // Add hover effect
        button.addEventListener('mouseenter', function() {
            if (this.classList.contains('collapsed')) {
                this.style.background = 'linear-gradient(135deg, #f8f9fa, #e9ecef)';
            }
        });
        
        button.addEventListener('mouseleave', function() {
            if (this.classList.contains('collapsed')) {
                this.style.background = 'white';
            }
        });
    });
    
    // Auto-expand first question on each column for better UX
    const firstLeftQuestion = document.querySelector('#faqAccordionLeft .accordion-item:first-child .accordion-button');
    const firstRightQuestion = document.querySelector('#faqAccordionRight .accordion-item:first-child .accordion-button');
    
    if (firstLeftQuestion && firstLeftQuestion.classList.contains('collapsed')) {
        firstLeftQuestion.click();
    }
    if (firstRightQuestion && firstRightQuestion.classList.contains('collapsed')) {
        firstRightQuestion.click();
    }
});

// Card hover effects for impact section
document.addEventListener('DOMContentLoaded', function() {
    const impactCards = document.querySelectorAll('.impact-feature-card');
    
    impactCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });
    
    // Parallax effect for impact section background
    const impactSection = document.querySelector('.impact-section');
    if (impactSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            impactSection.style.backgroundPosition = `center ${rate}px`;
        });
    }
});

// Google Maps Integration
function initMap() {
    // Check if Google Maps API is available
    if (typeof google === 'undefined') {
        console.log('Google Maps API not loaded');
        return;
    }

    // Shabunda coordinates (approximate)
    const Shabunda = { lat: -11.687602, lng: 27.502617 };
    
    // Create map
    const map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 12,
        center: Shabunda,
        styles: [
            {
                "featureType": "all",
                "elementType": "geometry",
                "stylers": [{ "color": "#f5f5f5" }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{ "color": "#c9c9c9" }]
            }
        ],
        mapTypeControl: false,
        streetViewControl: false,
        fullscreenControl: true
    });

    // Create custom marker
    const marker = new google.maps.Marker({
        position: Shabunda,
        map: map,
        title: 'Shabunda Community Gold Miners',
        icon: {
            url: 'data:image/svg+xml;base64,' + btoa(`
                <svg width="40" height="50" viewBox="0 0 40 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 0C8.954 0 0 8.954 0 20C0 35 20 50 20 50C20 50 40 35 40 20C40 8.954 31.046 0 20 0Z" fill="${encodeURIComponent('#FFD700')}"/>
                    <circle cx="20" cy="20" r="8" fill="${encodeURIComponent('#2C3E50')}"/>
                </svg>
            `),
            scaledSize: new google.maps.Size(40, 50),
            anchor: new google.maps.Point(20, 50)
        },
        animation: google.maps.Animation.DROP
    });

    // Create info window
    const infoWindow = new google.maps.InfoWindow({
        content: `
            <div class="map-info-window">
                <h6>Shabunda Gold Miners</h6>
                <p>Mining District<br>Shabunda, DRC</p>
                <a href="https://maps.google.com/maps?q=Shabunda+Mining+District+Democratic+Republic+of+Congo" 
                   target="_blank" style="color: #FFD700; text-decoration: none;">
                    Get Directions →
                </a>
            </div>
        `
    });

    // Add click event to marker
    marker.addListener('click', () => {
        infoWindow.open(map, marker);
    });

    // Open info window after 2 seconds
    setTimeout(() => {
        infoWindow.open(map, marker);
    }, 2000);
}

// Load Google Maps API
function loadGoogleMaps() {
    const apiKey = 'YOUR_GOOGLE_MAPS_API_KEY'; // Replace with your actual API key
    const script = document.createElement('script');
    script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=initMap`;
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
}

// Enhanced contact form functionality
document.addEventListener('DOMContentLoaded', function() {
    // Load Google Maps when contact section is in view
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        const contactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Uncomment the line below and add your Google Maps API key
                    // loadGoogleMaps();
                    contactObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        contactObserver.observe(contactSection);
    }

    // Enhanced form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const inputs = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#dc3545';
                } else {
                    input.style.borderColor = '#28a745';
                }
            });
            
            if (isValid) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                // Show loading state
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
                submitBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    // Show success message
                    alert('Thank you for your message! We will get back to you within 24 hours.');
                    
                    // Reset form
                    this.reset();
                    
                    // Reset button
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Reset border colors
                    inputs.forEach(input => {
                        input.style.borderColor = '#e9ecef';
                    });
                }, 2000);
            }
        });
    }
});

// Video Activities Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Video modal elements
    const videoModalElement = document.getElementById('videoModal');
    if (!videoModalElement) return;
    
    const videoModal = new bootstrap.Modal(videoModalElement);
    const modalVideo = document.getElementById('modalVideo');
    const modalTitle = document.getElementById('videoModalLabel');
    
    // Play buttons and video elements
    const playButtons = document.querySelectorAll('.play-btn');
    const videoCards = document.querySelectorAll('.video-card');
    
    // Add click event to all play buttons
    playButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const videoCard = this.closest('.video-card');
            const video = videoCard.querySelector('.activity-video');
            const videoTitle = videoCard.querySelector('h4').textContent;
            const videoSource = video.querySelector('source');
            
            if (videoSource) {
                const videoSrc = videoSource.src;
                
                // Set modal video source and title
                modalVideo.src = videoSrc;
                modalTitle.textContent = videoTitle;
                
                // Show modal
                videoModal.show();
                
                // Play video when modal is shown
                const playVideo = function() {
                    modalVideo.play().catch(e => {
                        console.log('Autoplay prevented:', e);
                    });
                    videoModalElement.removeEventListener('shown.bs.modal', playVideo);
                };
                
                videoModalElement.addEventListener('shown.bs.modal', playVideo);
            }
        });
    });
    
    // Reset video when modal is closed
    videoModalElement.addEventListener('hidden.bs.modal', function() {
        modalVideo.pause();
        modalVideo.currentTime = 0;
        modalVideo.src = '';
    });
    
    // Add hover effects to video cards
    videoCards.forEach(card => {
        const video = card.querySelector('.activity-video');
        const playBtn = card.querySelector('.play-btn');
        
        card.addEventListener('mouseenter', function() {
            // Add subtle scale effect to play button
            if (playBtn) {
                playBtn.style.transform = 'scale(1.05)';
            }
            
            // Preload video on hover
            if (video && video.readyState === 0) {
                video.load();
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (playBtn) {
                playBtn.style.transform = 'scale(1)';
            }
        });
        
        // Add loading state
        if (video) {
            video.addEventListener('loadstart', function() {
                card.classList.add('video-loading');
            });
            
            video.addEventListener('canplay', function() {
                card.classList.remove('video-loading');
            });
        }
    });
    
    // Lazy load videos when they come into view
    const videoObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const video = entry.target;
                video.setAttribute('preload', 'auto');
                videoObserver.unobserve(video);
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.activity-video').forEach(video => {
        videoObserver.observe(video);
    });
    
    // Add view count simulation (in a real app, this would be from a backend)
    function simulateViewCount() {
        const stats = document.querySelectorAll('.video-stats .stat:first-child');
        stats.forEach(stat => {
            const viewsText = stat.textContent;
            const viewsMatch = viewsText.match(/(\d+\.?\d*)K?/);
            if (viewsMatch) {
                const views = viewsMatch[0];
                if (views.includes('K')) {
                    const count = parseFloat(views) * 1000;
                    const newCount = count + Math.floor(Math.random() * 50);
                    stat.innerHTML = `<i class="fas fa-eye"></i> ${(newCount/1000).toFixed(1)}K views`;
                } else {
                    const count = parseInt(views);
                    const newCount = count + Math.floor(Math.random() * 10);
                    stat.innerHTML = `<i class="fas fa-eye"></i> ${newCount} views`;
                }
            }
        });
    }
    
    // Simulate view count updates every 30 seconds
    setInterval(simulateViewCount, 30000);
});