<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Shabundagoldminers.com/leadership.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Dec 2025 13:08:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="index-2.html">
    <title>Leadership - Shabunda Gold Miners</title>
    <link href="../cdn.jsdelivr.net/npm/bootstrap%405.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>

        /* Detailed Page Styles */
.detail-hero-section {
    background: linear-gradient(135deg, var(--dark-color), #1a253011);
    color: white;
    position: relative;
    overflow: hidden;
    padding: 150px 0 100px 0; /* Increased top padding to account for header overlap */
    margin-top: -76px; /* This will pull the section up to overlap with header */
    min-height: 60vh; /* Ensure minimum height */
    display: flex;
    align-items: center;
}

.detail-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('assets/images/slide1.jpg') repeat;
    opacity: 1;
}


.hero-title {
    font-size: 3rem;
    font-weight: 800;
    color: var(--primary-color);
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-subtitle {
    font-size: 1.3rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.stat-badge {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 215, 0, 0.1);
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    border: 1px solid rgba(255, 215, 0, 0.3);
    backdrop-filter: blur(10px);
}

.stat-badge i {
    color: var(--primary-color);
    font-size: 1.2rem;
}


/* Content Section */
.content-card {
    background: white;
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(255, 217, 0, 0.05);
}

.content-grid {
    display: grid;
    gap: 2rem;
    margin-top: 2rem;
}

.content-item {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    padding: 1.5rem;
    border-radius: 15px;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.content-item:hover {
    background: rgba(255, 215, 0, 0.05);
    transform: translateX(10px);
}

.content-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-color), #ffed4e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--dark-color);
    font-size: 1.5rem;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.content-item:hover .content-icon {
    transform: scale(1.1);
    background: linear-gradient(135deg, var(--secondary-color), #ff8c5a);
    color: white;
}

.content-text h4 {
    color: var(--dark-color);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.content-text p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}


/* Responsive Design */
@media (max-width: 991.98px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .achievements-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .content-card {
        padding: 2rem;
    }
    
    .detail-main-video {
        height: 400px;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .hero-stats {
        gap: 1rem;
    }
    
    .stat-badge {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
    
    .content-item {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }
    
    .content-icon {
        width: 60px;
        height: 60px;
        font-size: 1.3rem;
    }
    
   
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 1.8rem;
    }
    
    .content-card {
        padding: 1.5rem;
    }
    
    .detail-main-video {
        height: 300px;
    }
    
    .achievements-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-item {
        aspect-ratio: 4/3;
    }
    
    #galleryModal .carousel-item img {
        height: 400px;
    }
}

        /* Leadership Section Styles */
        .leadership-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
        }

        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 1.0rem;
            margin-top: 3rem;
        }

        .leader-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
        }

        .leader-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .leader-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--dark-color), #1a2530);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .leader-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assets/images/pattern.html') repeat;
            opacity: 0.1;
        }

        .image-placeholder {
            text-align: center;
            color: white;
            z-index: 2;
        }

        .placeholder-icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .placeholder-text {
            font-size: 1rem;
            opacity: 0.8;
        }

        .leader-content {
            padding: 2rem;
        }

        .leader-name {
            color: var(--dark-color);
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
        }

        .leader-position {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .leader-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .leader-contact {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .contact-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 215, 0, 0.1);
            color: var(--dark-color);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(255, 215, 0, 0.3);
        }

        .contact-badge i {
            color: var(--primary-color);
            font-size: 0.9rem;
        }

        /* Organizational Structure */
        .structure-section {
            background: linear-gradient(135deg, var(--dark-color), #1a2530);
            color: white;
            padding: 80px 0;
        }

        .structure-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .structure-item {
            text-align: center;
            padding: 2rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .structure-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }

        .structure-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), #ffed4e);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-color);
            font-size: 2rem;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }

        .structure-item:hover .structure-icon {
            transform: scale(1.1);
            background: linear-gradient(135deg, var(--secondary-color), #ff8c5a);
            color: white;
        }

        .structure-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .structure-description {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Enhanced existing styles */
        .detail-hero-section {
            background: linear-gradient(135deg, var(--dark-color), #1a2530);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .detail-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assets/images/slide1.jpg') repeat;
            opacity: 0.1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .leadership-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .leader-image {
                height: 250px;
            }

            .structure-grid {
                grid-template-columns: 1fr;
            }

            .leader-content {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .leader-contact {
                flex-direction: column;
                align-items: flex-start;
            }

            .contact-badge {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title>Shabunda Gold Miners | Gold Mining, Buying, Selling, Testing & Partnership Services DRC</title>
    <meta name="description" content="Shabunda Gold Miners: Complete gold services in DRC. Gold mining operations, buying raw gold, selling refined gold, XRF testing, assaying, mining partnerships, joint ventures, and community development. Ethical & sustainable practices.">
    <meta name="keywords" content="gold mining DRC, gold buying Congo, gold selling services, gold testing, XRF analyzer, gold assaying, mining partnerships, joint ventures, artisanal mining, gold exploration, mine development, gold processing, gold refining, sustainable mining, ethical gold, community mining, DRC gold, Congo minerals, mining investment, gold export, mineral rights, mining consultancy">
    <meta name="author" content="Shabunda Gold Miners">
    <meta name="robots" content="index, follow">

    <!-- Geographic Meta Tags -->
    <meta name="geo.region" content="CD-LU">
    <meta name="geo.placename" content="Shabunda">
    <meta name="geo.position" content="-11.664231;27.482626">
    <meta name="ICBM" content="-11.664231, 27.482626">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://Shabundagoldminers.com/">
    <meta property="og:title" content="Shabunda Gold Miners | Complete Gold Mining & Trading Services">
    <meta property="og:description" content="DRC's premier gold services: Mining operations, gold trading, XRF testing, mining partnerships & joint ventures. Ethical practices with community empowerment.">
    <meta property="og:image" content="https://Shabundagoldminers.com/assets/images/og-image.jpg">
    <meta property="og:image:alt" content="Shabunda Gold Miners - Gold Mining & Partnership Services">
    <meta property="og:site_name" content="Shabunda Gold Miners">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://Shabundagoldminers.com/">
    <meta property="twitter:title" content="Shabunda Gold Miners | Mining & Gold Services Experts">
    <meta property="twitter:description" content="Professional gold mining, trading, testing & partnership services in DRC. XRF testing, fair trade, and sustainable mining practices.">
    <meta property="twitter:image" content="https://Shabundagoldminers.com/assets/images/og-image.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="index.html">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Additional Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.html">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.html">
    <link rel="manifest" href="site.html">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="../cdn.jsdelivr.net/npm/bootstrap%405.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style">
    <link rel="preload" href="assets/css/style.css" as="style">

    <!-- Bootstrap CSS -->
    <link href="../cdn.jsdelivr.net/npm/bootstrap%405.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Language Alternates -->
    <link rel="alternate" hreflang="fr" href="https://Shabundagoldminers.com/fr/" />
    <link rel="alternate" hreflang="sw" href="https://Shabundagoldminers.com/sw/" />
    <link rel="alternate" hreflang="en" href="index.html" />

    <!-- Mobile Optimization -->
    <meta name="format-detection" content="telephone=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">

    <!-- Additional SEO Meta Tags -->
    <meta name="subject" content="Gold Mining, Trading, Testing & Partnership Services in Democratic Republic of Congo">
    <meta name="classification" content="Precious Metals, Mining Services, Gold Trading, Mining Partnerships">
    <meta name="reply-to" content="contact@Shabundagoldminers.com">
    <meta name="directory" content="submission">
    <meta name="category" content="Business">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">

    <!-- Comprehensive Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://Shabundagoldminers.com/#organization",
          "name": "Shabunda Gold Miners",
          "url": "https://Shabundagoldminers.com/",
          "logo": "https://Shabundagoldminers.com/assets/images/logo.png",
          "description": "Complete gold mining, trading, testing and partnership services in Democratic Republic of Congo",
          "foundingDate": "2010",
          "numberOfEmployees": "50-100",
          "slogan": "Ethical Gold Mining & Sustainable Community Development",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shabunda Mining District",
            "addressLocality": "Shabunda",
            "addressRegion": "Haut-Katanga",
            "postalCode": "DRC001",
            "addressCountry": "CD"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+243 897295691",
            "contactType": "customer service",
            "email": "contact@Shabundagoldminers.com",
            "areaServed": "CD",
            "availableLanguage": ["en", "fr", "sw"]
          },
          "sameAs": [
            "https://www.facebook.com/Shabundagoldminers",
            "https://www.linkedin.com/company/Shabunda-gold-miners",
            "https://twitter.com/Shabundagold"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://Shabundagoldminers.com/#website",
          "url": "https://Shabundagoldminers.com/",
          "name": "Shabunda Gold Miners",
          "description": "Professional gold services in DRC - Mining, Trading, Testing & Partnerships",
          "publisher": {
            "@id": "https://Shabundagoldminers.com/#organization"
          },
          "inLanguage": "en"
        },
        {
          "@type": "LocalBusiness",
          "@id": "https://Shabundagoldminers.com/#localbusiness",
          "name": "Shabunda Gold Miners",
          "image": "https://Shabundagoldminers.com/assets/images/business-image.jpg",
          "url": "https://Shabundagoldminers.com/",
          "telephone": "+243 897295691",
          "priceRange": "$$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shabunda Mining District",
            "addressLocality": "Shabunda",
            "addressRegion": "Haut-Katanga",
            "postalCode": "DRC001",
            "addressCountry": "CD"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": -11.664231,
            "longitude": 27.482626
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday"
            ],
            "opens": "08:00",
            "closes": "18:00"
          },
          "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
              "@type": "GeoCoordinates",
              "latitude": -11.664231,
              "longitude": 27.482626
            },
            "geoRadius": "500000"
          }
        }
      ]
    }
    </script>

    <!-- Services Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "name": "Gold Mining & Trading Services",
      "description": "Complete range of gold services offered by Shabunda Gold Miners",
      "numberOfItems": 8,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@type": "Service",
            "name": "Gold Mining Operations",
            "description": "Professional gold mining operations with modern equipment and sustainable practices",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            },
            "areaServed": "Democratic Republic of Congo"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@type": "Service",
            "name": "Gold Buying Services",
            "description": "Purchase raw gold from artisanal miners at fair market prices with transparent valuation",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@type": "Service",
            "name": "Gold Selling & Export",
            "description": "Sell refined and certified gold to international markets and local buyers",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 4,
          "item": {
            "@type": "Service",
            "name": "Gold Testing & Assaying",
            "description": "Professional gold purity testing using XRF analyzers and traditional fire assaying methods",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 5,
          "item": {
            "@type": "Service",
            "name": "Mining Partnerships",
            "description": "Strategic partnerships for joint mining ventures and collaborative projects",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 6,
          "item": {
            "@type": "Service",
            "name": "Joint Ventures",
            "description": "Equity partnerships and joint venture opportunities in gold mining projects",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 7,
          "item": {
            "@type": "Service",
            "name": "Mining Consultancy",
            "description": "Expert mining consultancy services including exploration and mine development",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 8,
          "item": {
            "@type": "Service",
            "name": "Community Mining Development",
            "description": "Support for artisanal miners and community-based mining initiatives",
            "provider": {
              "@type": "Organization",
              "name": "Shabunda Gold Miners"
            }
          }
        }
      ]
    }
    </script>

    <!-- Analytics / Metrics -->
    <script defer src="https://shown.io/metrics/vg8VlMxz0k" type="text/javascript"></script>
    <script async src="../pagead2.googlesyndication.com/pagead/js/fa87a.txt?client=ca-pub-2794078128461810" crossorigin="anonymous"></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="assets/images/logo.png" alt="Shabunda Gold Miners" height="50" class="brand-logo">
                <span class="brand-text-full">Shabunda GOLD MINERS</span>
                <span class="brand-text-short">Shabunda GOLD...</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                                            <li class="nav-item">
                            <a class="nav-link" href="index-2.html">
                                <span class="nav-text">Home</span>
                                                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link" href="index-2.html#about">
                                <span class="nav-text">About</span>
                                                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link" href="index-2.html#process">
                                <span class="nav-text">Our Process</span>
                                                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link" href="partnership.html">
                                <span class="nav-text">Partnership</span>
                                                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link" href="leadership.php">
                                <span class="nav-text">Leadership</span>
                                                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link" href="index-2.html#contact">
                                <span class="nav-text">Contact</span>
                                                                    <i class="fas fa-envelope nav-icon d-lg-none"></i>
                                                            </a>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>
</header>    
    <!-- Hero Section -->
    <section class="detail-hero-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Breadcrumb removed from here -->
                    
                    <div class="hero-content text-center">
                        <h1 class="hero-title">Responsible Mining Operations</h1>
                        <p class="hero-subtitle">Ethical extraction methods that prioritize environmental sustainability and worker safety</p>
                        <div class="hero-stats">
                            <div class="stat-badge">
                                <i class="fas fa-shield-alt"></i>
                                <span>100% Safe Practices</span>
                            </div>
                            <div class="stat-badge">
                                <i class="fas fa-leaf"></i>
                                <span>Eco-Friendly</span>
                            </div>
                            <div class="stat-badge">
                                <i class="fas fa-users"></i>
                                <span>Community Focused</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Leadership Structure Section -->
    <!-- Leadership Structure Section -->
<section class="leadership-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Our Leadership Team</h2>
                <p class="section-subtitle">Meet the dedicated individuals guiding our community mining operations toward sustainability and shared prosperity.</p>
            </div>
        </div>

        <div class="leadership-grid">

            <!-- Chairman -->
            <div class="leader-card">
                <div class="leader-image" style="background: url('assets/images/chair.jpg') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">Chief John Malanda</h3>
                    <div class="leader-position">Community Chief</div>
                    <p class="leader-description">
                        John brings over 20 years of experience in community leadership and cooperative mining. As Chairman, he provides overall strategic direction, promotes transparency, and ensures equitable benefit for all members.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>cman@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Legal Advisor -->
            <div class="leader-card">
                <div class="leader-image" style="background: url('assets/images/legal.html') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">Kabongo Andrew</h3>
                    <div class="leader-position">Legal Advisor</div>
                    <p class="leader-description">
                        Kabongo oversees legal compliance, ensuring all mining operations adhere to both local and international laws. He drafts agreements, manages contracts, and safeguards miners’ rights through ethical governance.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>legal@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Underground Operations Manager -->
            <div class="leader-card">
                <div class="leader-image" style="background: url('assets/images/underground.jpg') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">Patrick Kimbangu</h3>
                    <div class="leader-position">Underground Operations Manager</div>
                    <p class="leader-description">
                        A skilled mining engineer, Patrick oversees underground operations with a focus on safety, technical precision, and sustainability. 
                        His expertise drives efficiency and environmental responsibility.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>mngr@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Head of Security -->
            <div class="leader-card">
                <div class="leader-image" style="background: url('assets/images/mwamba.jpg') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">Jacques Mwamba</h3>
                    <div class="leader-position">Head of Security</div>
                    <p class="leader-description">
                        Jacques, a retired security officer, manages all safety operations at mining sites. He ensures secure gold transport, protects miners, and coordinates with authorities for site security.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>hosec@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Welfare Officer -->
            <div class="leader-card">
                 <div class="leader-image" style="background: url('assets/images/chantal.png') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">Chantal Kalonji</h3>
                    <div class="leader-position">Welfare Officer</div>
                    <p class="leader-description">
                        Chantal focuses on improving the wellbeing of miners and their families by coordinating access to food, medical care, and housing. She advocates for better working and living conditions.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>welf@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Education Officer -->
            <div class="leader-card">
                 <div class="leader-image" style="background: url('assets/images/juliene.jfif') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">Julienne Tshimanga</h3>
                    <div class="leader-position">Education and Training Officer</div>
                    <p class="leader-description">
                        Julienne leads training initiatives on sustainable mining, health, and financial literacy. Her programs empower miners with knowledge and skills for long-term growth and community development.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>edu@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Artisanal Miners Representative -->
            <div class="leader-card">
                 <div class="leader-image" style="background: url('assets/images/andre.jpg') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">André Kasongo</h3>
                    <div class="leader-position">Head of Artisanal Miners</div>
                    <p class="leader-description">
                        André represents small-scale miners, coordinating their activities and ensuring fair access to tools and resources. He also promotes safe and responsible artisanal mining practices.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>art@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Community Health Officer -->
            <div class="leader-card">
                 <div class="leader-image" style="background: url('assets/images/david.jfif') center/cover;">
                </div>
                <div class="leader-content">
                    <h3 class="leader-name">David Sango</h3>
                    <div class="leader-position">Community Health Officer</div>
                    <p class="leader-description">
                        David oversees the health and safety of all workers. He partners with local clinics to provide medical support, prevent disease outbreaks, and ensure miners’ wellbeing across all sites.
                    </p>
                    <div class="leader-contact">
                        <span class="contact-badge">
                            <span>david@Shabundagoldminers.com</span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- Organizational Structure Section -->
    <section class="structure-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title text-white">Our Organizational Structure</h2>
                    <p class="section-subtitle text-white">Transparent governance ensuring community benefit and operational excellence</p>
                </div>
            </div>

            <div class="structure-grid">
                <div class="structure-item">
                    <div class="structure-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="structure-title">General Assembly</h4>
                    <p class="structure-description">
                        All community members participate in major decisions through democratic processes and regular meetings.
                    </p>
                </div>

                <div class="structure-item">
                    <div class="structure-icon">
                        <i class="fas fa-chess-queen"></i>
                    </div>
                    <h4 class="structure-title">Executive Committee</h4>
                    <p class="structure-description">
                        Elected leaders responsible for strategic direction and overall management of mining operations.
                    </p>
                </div>

                <div class="structure-item">
                    <div class="structure-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="structure-title">Safety Council</h4>
                    <p class="structure-description">
                        Ensures all operations meet international safety standards and workers are properly protected.
                    </p>
                </div>

                <div class="structure-item">
                    <div class="structure-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="structure-title">Environmental Committee</h4>
                    <p class="structure-description">
                        Monitors environmental impact and implements sustainable mining practices throughout operations.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shabunda Gold Miners</title>
    <link href="../cdn.jsdelivr.net/npm/bootstrap%405.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* General Footer Styles */
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            margin-top: 50px;
        }
        
        .footer h5, .footer h6 {
            color: #f1c40f;
            margin-bottom: 15px;
        }
        
        .footer a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer a:hover {
            color: #f1c40f;
        }
        
        .social-links a {
            display: inline-block;
            margin-right: 15px;
            font-size: 20px;
        }
        
        /* Custom Modal Styles */
        .disclaimer-modal .modal-content {
            background-color: #1a1a1a;
            color: white;
            border: 3px solid #f1c40f;
            border-radius: 10px;
        }
        
        .disclaimer-modal .modal-header {
            border-bottom: 0px solid #f1c40f;
            background-color: #2c3e50;
        }
        
        .disclaimer-modal .modal-title {
            color: #f1c40f;
            font-weight: bold;
        }
        
        .disclaimer-modal .btn-close {
            filter: invert(1);
        }
        
        .disclaimer-modal .modal-footer {
            border-top: 0px solid #f1c40f;
        }
        
        .disclaimer-modal .btn-primary {
            background-color: #f1c40f;
            border-color: #f1c40f;
            color: #2c3e50;
            font-weight: bold;
        }
        
        .disclaimer-modal .btn-primary:hover {
            background-color: #f39c12;
            border-color: #f39c12;
        }
        
        .disclaimer-modal .btn-secondary {
            background-color: #7f8c8d;
            border-color: #7f8c8d;
        }
        
        .disclaimer-modal .btn-secondary:hover {
            background-color: #95a5a6;
            border-color: #95a5a6;
        }
        
        /* WhatsApp Button Styles */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
            cursor: pointer;
        }
        
        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }
        
        /* Tooltip */
        .whatsapp-tooltip {
            position: absolute;
            right: 70px;
            bottom: 20px;
            background-color: #333;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
            white-space: nowrap;
        }
        
        .whatsapp-float:hover .whatsapp-tooltip {
            opacity: 1;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
                font-size: 25px;
            }
            
            .whatsapp-tooltip {
                right: 60px;
                font-size: 12px;
            }
        }
        
        /* Custom styles for WhatsApp tracking */
        .whatsapp-tracked {
            background-color: #128C7E !important;
        }
        
        .whatsapp-tracked:after {
            content: '✓';
            position: absolute;
            top: -5px;
            right: -5px;
            background: #f1c40f;
            color: #2c3e50;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            font-size: 12px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <!-- Your main content here -->

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>Shabunda Gold Miners</h5>
                    <p>Committed to ethical mining practices and community development in the Democratic Republic of Congo.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 mb-4">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#process">Our Process</a></li>
                        <li><a href="#products">Products</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 mb-4">
                    <h6>Resources</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Certifications</a></li>
                        <li><a href="#">Sustainability Report</a></li>
                        <li><a href="#">Community Projects</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6>Contact Information</h6>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> Shabunda, DRC</li>
                        <li>
                            <a href="tel:+256746317422" style="text-decoration: none; color: inherit;">
                                <i class="fas fa-phone"></i> +256 746317422
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="trackWhatsAppClick('+254707043495')" class="whatsapp-contact">
                                <i class="fab fa-whatsapp"></i> +254 707043495
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="trackWhatsAppClick('+243906263852')" class="whatsapp-contact">
                                <i class="fab fa-whatsapp"></i> +243 906263852
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="trackWhatsAppClick('+243897295691')" class="whatsapp-contact">
                                <i class="fab fa-whatsapp"></i> +243 897295691
                            </a>
                        </li>
                        <li><i class="fas fa-envelope"></i> info@Shabundagoldminers.com</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Shabunda Community Gold Miners. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#disclaimerModal">Disclaimer</a> | 
                    <a href="#">Privacy Policy</a> | 
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Disclaimer Modal -->
    <div class="modal fade disclaimer-modal" id="disclaimerModal" tabindex="-1" aria-labelledby="disclaimerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="disclaimerModalLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i>Important Disclaimer
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>To prevent scams and fraudulent activities, we strongly advise all foreign investors and gold buyers to conduct proper due diligence before engaging in any business involving gold from the Democratic Republic of Congo (DRC).</p>
                    
                    <p>Be cautious of individuals or groups claiming partnerships with Congolese communities, military generals, or government officials without official verification.</p>
                    
                    <p>Please note that the Head Chief of Shabunda serves as the Board Chairman for all Community Gold Miners in the DRC, and all legitimate community gold dealings are coordinated under this office.</p>
                    
                    <div class="alert alert-warning mt-3">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>For verification or inquiries:</strong> Contact us via WhatsApp for official guidance and assistance.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="javascript:void(0);" onclick="trackWhatsAppModalClick()" class="btn btn-primary">
                        <i class="fab fa-whatsapp me-2"></i>Contact via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float" id="whatsappButton" onclick="trackWhatsAppFloatClick()">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-tooltip">Chat with us on WhatsApp</span>
    </div>

    <!-- Hidden tracking form -->
    <form id="whatsappTrackForm" method="POST" action="https://www.Shabundagoldminers.com/track-whatsapp.php" target="_blank" style="display: none;">
        <input type="hidden" name="phone_number" id="trackPhoneNumber" value="+243906263852">
        <input type="hidden" name="message" id="trackMessage" value="Hello Shabunda Community Gold Miners, I would like to get more information about your services">
        <input type="hidden" name="source" id="trackSource" value="floating_button">
        <input type="hidden" name="page_url" id="trackPageUrl" value="leadership.php">
    </form>

    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Automatically show the disclaimer modal when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Check if user has already accepted the disclaimer
            if (!localStorage.getItem('disclaimerAccepted')) {
                // Show the modal after a short delay
                setTimeout(function() {
                    var disclaimerModal = new bootstrap.Modal(document.getElementById('disclaimerModal'));
                    disclaimerModal.show();
                    
                    // Set a flag when modal is closed
                    document.getElementById('disclaimerModal').addEventListener('hidden.bs.modal', function () {
                        localStorage.setItem('disclaimerAccepted', 'true');
                    });
                }, 1000);
            }
            
            // Add click event to the disclaimer link in footer
            document.querySelector('a[data-bs-target="#disclaimerModal"]').addEventListener('click', function() {
                var disclaimerModal = new bootstrap.Modal(document.getElementById('disclaimerModal'));
                disclaimerModal.show();
            });
            
            // Initialize page URL for tracking
            document.getElementById('trackPageUrl').value = window.location.href;
            
            // Check if WhatsApp click was already tracked in this session
            if (sessionStorage.getItem('whatsappClicked')) {
                document.getElementById('whatsappButton').classList.add('whatsapp-tracked');
            }
        });

        // Function to track WhatsApp clicks from floating button
        function trackWhatsAppFloatClick() {
            trackWhatsAppClick('+243906263852', 'Hello Shabunda Community Gold Miners, I would like to get more information about your services', 'floating_button');
        }

        // Function to track WhatsApp clicks from modal button
        function trackWhatsAppModalClick() {
            trackWhatsAppClick('+243906263852', 'Hello Shabunda Community Gold Miners, I would like to verify and get more information about your services', 'modal_button');
        }

        // Function to track WhatsApp clicks from contact numbers
        function trackWhatsAppClick(phoneNumber, message = '', source = 'contact_number') {
            // Default message if not provided
            if (!message) {
                message = 'Hello Shabunda Community Gold Miners, I would like to get more information about your services';
            }
            
            // Set tracking values
            document.getElementById('trackPhoneNumber').value = phoneNumber;
            document.getElementById('trackMessage').value = message;
            document.getElementById('trackSource').value = source;
            
            // Submit the tracking form
            document.getElementById('whatsappTrackForm').submit();
            
            // Open WhatsApp in a new tab (as backup)
            const whatsappUrl = `https://wa.me/${phoneNumber.replace('+', '')}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
            
            // Mark as tracked in this session
            sessionStorage.setItem('whatsappClicked', 'true');
            document.getElementById('whatsappButton').classList.add('whatsapp-tracked');
            
            // Send tracking data via AJAX
            sendWhatsAppTracking(phoneNumber, source, message);
            
            return false;
        }

        // Function to send WhatsApp tracking data via AJAX
        function sendWhatsAppTracking(phoneNumber, source, message) {
            const data = {
                phone_number: phoneNumber,
                source: source,
                message: message,
                page_url: window.location.href,
                user_agent: navigator.userAgent,
                timestamp: new Date().toISOString()
            };
            
            // Send tracking data
            fetch('ajax-track-whatsapp.json', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                console.log('WhatsApp click tracked:', data);
            })
            .catch(error => {
                console.error('Tracking error:', error);
            });
        }

        // Function to track page views
        function trackPageView() {
            const data = {
                action: 'track_pageview',
                page_url: window.location.href,
                referrer: document.referrer
            };
            
            fetch('ajax-track-visitor.json', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                console.log('Page view tracked:', data);
                if (data.visitor_id) {
                    localStorage.setItem('visitor_id', data.visitor_id);
                }
            })
            .catch(error => {
                console.error('Page tracking error:', error);
            });
        }

        // Track page view on load
        window.addEventListener('load', function() {
            // Only track if not already tracked in this session
            if (!sessionStorage.getItem('pageTracked')) {
                trackPageView();
                sessionStorage.setItem('pageTracked', 'true');
            }
        });
    </script>
</body>

<!-- Mirrored from www.Shabundagoldminers.com/leadership.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Dec 2025 13:08:15 GMT -->
</html>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>