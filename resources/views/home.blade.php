<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SaborGestion - Sistema de Gestión Gastronómica Profesional</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-float-delay {
            animation: float 8s ease-in-out infinite;
            animation-delay: -2s;
        }
        .hero-pattern {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>

<body class="text-gray-800 bg-gradient-to-br from-gray-50 via-white to-amber-50/30">

    <!-- Navbar mejorada con sticky y blur -->
    <nav class="sticky top-0 z-50 transition-all duration-300 border-b border-gray-100 shadow-sm bg-white/90 backdrop-blur-lg">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <!-- Logo y marca -->
                <div class="flex items-center space-x-3 cursor-pointer group">
                    <div class="relative">
                        <div class="absolute inset-0 transition-opacity opacity-50 bg-gradient-to-r from-primary to-secondary rounded-xl blur-md group-hover:opacity-75"></div>
                        <div class="relative p-2 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-xl">
                            <i class="text-2xl text-white fas fa-utensils"></i>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-transparent bg-gradient-to-r from-primary to-secondary bg-clip-text">
                            SaborGestion
                        </h1>
                        <p class="hidden text-xs text-gray-500 sm:block">Sistema Gastronómico Integral</p>
                    </div>
                </div>

                <!-- Botón de acción -->
                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard/administrador') }}" 
                               class="group inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <i class="text-sm transition-transform fas fa-tachometer-alt group-hover:rotate-12"></i>
                                <span>Panel de Control</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="group inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <i class="fas fa-sign-in-alt text-sm group-hover:translate-x-0.5 transition-transform"></i>
                                <span>Iniciar Sesión</span>
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section con imagen de fondo profesional -->
    <section class="relative py-20 overflow-hidden bg-gradient-to-br from-primary/95 via-primary/90 to-secondary/95 lg:py-28">
        <!-- Imagen de fondo profesional (restaurante) -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                 alt="Restaurante profesional" 
                 class="object-cover w-full h-full opacity-20"
                 loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
        </div>
        
        <!-- Patrón decorativo -->
        <div class="absolute inset-0 hero-pattern opacity-20"></div>
        
        <!-- Elementos decorativos flotantes -->
        <div class="absolute rounded-full top-20 left-10 w-72 h-72 bg-white/10 blur-3xl animate-pulse"></div>
        <div class="absolute rounded-full bottom-20 right-10 w-96 h-96 bg-white/5 blur-3xl"></div>
        
        <div class="container relative px-4 mx-auto text-center sm:px-6 lg:px-8">
            <!-- Badge destacado -->
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 rounded-full shadow-lg bg-white/20 backdrop-blur-sm">
                <i class="text-xs text-yellow-300 fas fa-star"></i>
                <span class="text-sm font-medium text-white">Sistema #1 para restaurantes en Latinoamérica</span>
                <i class="text-xs text-orange-300 fas fa-fire"></i>
            </div>
            
            <h1 class="mb-6 text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-7xl">
                Transforma tu
                <span class="text-transparent bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text">
                    Restaurante
                </span>
            </h1>
            
            <p class="max-w-3xl mx-auto mb-10 text-lg leading-relaxed sm:text-xl text-white/90">
                El sistema integral de gestión gastronómica que optimiza tus operaciones, 
                aumenta tus ventas y deleita a tus clientes con tecnología de vanguardia.
            </p>
            
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="{{ route('login') }}"
                   class="inline-flex items-center justify-center gap-3 px-8 py-4 font-bold transition-all duration-300 bg-white shadow-2xl group text-primary rounded-2xl hover:shadow-3xl hover:scale-105">
                    <i class="text-xl fas fa-rocket group-hover:animate-pulse"></i>
                    <span class="text-lg">Comenzar Ahora</span>
                    <i class="text-sm transition-transform fas fa-arrow-right group-hover:translate-x-1"></i>
                </a>
                <a href="#features"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 border bg-white/10 backdrop-blur-sm border-white/30 rounded-2xl hover:bg-white/20">
                    <i class="fas fa-play-circle"></i>
                    <span>Ver Demostración</span>
                </a>
            </div>
            
            <!-- Estadísticas rápidas -->
            <div class="grid grid-cols-1 gap-6 pt-8 mt-16 border-t sm:grid-cols-3 border-white/20">
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">+500</p>
                    <p class="text-sm text-white/70">Restaurantes Activos</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">+10K</p>
                    <p class="text-sm text-white/70">Usuarios Diarios</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">98%</p>
                    <p class="text-sm text-white/70">Satisfacción</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section con imágenes profesionales -->
    <section id="features" class="py-20 lg:py-28 bg-gradient-to-b from-white to-gray-50">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <!-- Encabezado de sección -->
            <div class="mb-16 text-center">
                <span class="inline-block px-4 py-2 mb-4 text-sm font-semibold rounded-full bg-primary/10 text-primary">
                    Características Premium
                </span>
                <h2 class="mb-4 text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl">
                    ¿Qué Ofrecemos?
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Soluciones completas para la gestión eficiente de tu negocio gastronómico
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 - Inteligencia con imagen -->
                <div class="relative overflow-hidden transition-all duration-500 bg-white shadow-lg group rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-primary/5 to-secondary/5 group-hover:opacity-100"></div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Analytics" 
                             class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="relative p-8 text-center">
                        <div class="relative mb-4 -mt-16">
                            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-primary to-secondary blur-xl group-hover:opacity-75"></div>
                            <div class="relative flex items-center justify-center w-16 h-16 mx-auto transition-transform duration-300 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-2xl group-hover:scale-110">
                                <i class="text-2xl text-white fas fa-chart-line"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800 transition-colors group-hover:text-primary">Inteligencia de Negocios</h3>
                        <p class="leading-relaxed text-gray-600">Dashboards por rol con datos en tiempo real para tomar decisiones estratégicas.</p>
                    </div>
                </div>

                <!-- Card 2 - Inventario con imagen -->
                <div class="relative overflow-hidden transition-all duration-500 bg-white shadow-lg group rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-primary/5 to-secondary/5 group-hover:opacity-100"></div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Inventario" 
                             class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="relative p-8 text-center">
                        <div class="relative mb-4 -mt-16">
                            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-primary to-secondary blur-xl group-hover:opacity-75"></div>
                            <div class="relative flex items-center justify-center w-16 h-16 mx-auto transition-transform duration-300 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-2xl group-hover:scale-110">
                                <i class="text-2xl text-white fas fa-boxes"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800 transition-colors group-hover:text-primary">Control de Inventario</h3>
                        <p class="leading-relaxed text-gray-600">Gestión inteligente de stock con alertas automáticas y optimización de recursos.</p>
                    </div>
                </div>

                <!-- Card 3 - Pedidos con imagen -->
                <div class="relative overflow-hidden transition-all duration-500 bg-white shadow-lg group rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-primary/5 to-secondary/5 group-hover:opacity-100"></div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Pedidos" 
                             class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="relative p-8 text-center">
                        <div class="relative mb-4 -mt-16">
                            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-primary to-secondary blur-xl group-hover:opacity-75"></div>
                            <div class="relative flex items-center justify-center w-16 h-16 mx-auto transition-transform duration-300 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-2xl group-hover:scale-110">
                                <i class="text-2xl text-white fas fa-clipboard-list"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800 transition-colors group-hover:text-primary">Gestión de Pedidos</h3>
                        <p class="leading-relaxed text-gray-600">Comandas rápidas, integración con cocina y seguimiento en tiempo real.</p>
                    </div>
                </div>

                <!-- Card 4 - Facturación con imagen -->
                <div class="relative overflow-hidden transition-all duration-500 bg-white shadow-lg group rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-primary/5 to-secondary/5 group-hover:opacity-100"></div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Facturación" 
                             class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="relative p-8 text-center">
                        <div class="relative mb-4 -mt-16">
                            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-primary to-secondary blur-xl group-hover:opacity-75"></div>
                            <div class="relative flex items-center justify-center w-16 h-16 mx-auto transition-transform duration-300 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-2xl group-hover:scale-110">
                                <i class="text-2xl text-white fas fa-file-invoice-dollar"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800 transition-colors group-hover:text-primary">Facturación Electrónica</h3>
                        <p class="leading-relaxed text-gray-600">Control total de ventas, facturación automática y reportes fiscales.</p>
                    </div>
                </div>

                <!-- Card 5 - Usuarios con imagen -->
                <div class="relative overflow-hidden transition-all duration-500 bg-white shadow-lg group rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-primary/5 to-secondary/5 group-hover:opacity-100"></div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Equipo" 
                             class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="relative p-8 text-center">
                        <div class="relative mb-4 -mt-16">
                            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-primary to-secondary blur-xl group-hover:opacity-75"></div>
                            <div class="relative flex items-center justify-center w-16 h-16 mx-auto transition-transform duration-300 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-2xl group-hover:scale-110">
                                <i class="text-2xl text-white fas fa-users"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800 transition-colors group-hover:text-primary">Gestión de Usuarios</h3>
                        <p class="leading-relaxed text-gray-600">Roles y permisos completos para administradores, meseros, cocineros y cajeros.</p>
                    </div>
                </div>

                <!-- Card 6 - Reportes con imagen -->
                <div class="relative overflow-hidden transition-all duration-500 bg-white shadow-lg group rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-primary/5 to-secondary/5 group-hover:opacity-100"></div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Reportes" 
                             class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="relative p-8 text-center">
                        <div class="relative mb-4 -mt-16">
                            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-primary to-secondary blur-xl group-hover:opacity-75"></div>
                            <div class="relative flex items-center justify-center w-16 h-16 mx-auto transition-transform duration-300 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-2xl group-hover:scale-110">
                                <i class="text-2xl text-white fas fa-chart-simple"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800 transition-colors group-hover:text-primary">Reportes Avanzados</h3>
                        <p class="leading-relaxed text-gray-600">Análisis detallado de ventas, productos, tendencias y rendimiento del negocio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de testimoniales con imágenes -->
    <section class="py-20 bg-gradient-to-br from-primary/5 to-secondary/5">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <span class="inline-block px-4 py-2 mb-4 text-sm font-semibold rounded-full bg-primary/10 text-primary">
                    Testimonios Reales
                </span>
                <h2 class="mb-4 text-3xl font-bold text-gray-800 sm:text-4xl">
                    Lo que dicen nuestros clientes
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Más de 500 restaurantes confían en SaborGestion para transformar su negocio
                </p>
            </div>
            
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="p-6 transition-all duration-300 bg-white shadow-xl rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                             alt="Cliente" 
                             class="object-cover rounded-full w-14 h-14">
                        <div>
                            <h4 class="font-bold text-gray-800">María González</h4>
                            <p class="text-sm text-gray-500">Chef Ejecutiva, La Cabaña</p>
                        </div>
                    </div>
                    <div class="flex mb-3 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="leading-relaxed text-gray-600">
                        "SaborGestion transformó completamente nuestra operación. Ahora tenemos control total sobre inventario y pedidos. ¡Increíble!"
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="p-6 transition-all duration-300 bg-white shadow-xl rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                             alt="Cliente" 
                             class="object-cover rounded-full w-14 h-14">
                        <div>
                            <h4 class="font-bold text-gray-800">Carlos Méndez</h4>
                            <p class="text-sm text-gray-500">Propietario, Sabores del Mundo</p>
                        </div>
                    </div>
                    <div class="flex mb-3 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="leading-relaxed text-gray-600">
                        "La mejor inversión que hicimos. Los reportes en tiempo real nos ayudan a tomar decisiones estratégicas cada día."
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="p-6 transition-all duration-300 bg-white shadow-xl rounded-2xl hover:shadow-2xl hover:scale-105">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                             alt="Cliente" 
                             class="object-cover rounded-full w-14 h-14">
                        <div>
                            <h4 class="font-bold text-gray-800">Ana Rodríguez</h4>
                            <p class="text-sm text-gray-500">Gerente, El Gourmet</p>
                        </div>
                    </div>
                    <div class="flex mb-3 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="leading-relaxed text-gray-600">
                        "El soporte es excelente y la plataforma es súper intuitiva. Nuestros meseros aprendieron a usarla en un día."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section mejorada -->
    <section class="relative py-20 overflow-hidden bg-gradient-to-r from-primary via-secondary to-accent lg:py-28">
        <!-- Imagen de fondo decorativa -->
        <div class="absolute inset-0 opacity-10">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                 alt="Food background" 
                 class="object-cover w-full h-full">
        </div>
        
        <!-- Elementos decorativos -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 rounded-full w-96 h-96 bg-white/10 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-white/10 blur-3xl"></div>
        </div>
        
        <div class="container relative px-4 mx-auto text-center sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <i class="inline-block mb-6 text-5xl fas fa-utensils text-white/80 animate-float"></i>
                <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                    ¿Listo para mejorar tu restaurante?
                </h2>
                <p class="mb-10 text-xl leading-relaxed text-white/90">
                    Únete a más de 500 restaurantes que ya confían en SaborGestion 
                    y lleva tu negocio al siguiente nivel.
                </p>
                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center justify-center gap-3 px-8 py-4 font-bold transition-all duration-300 bg-white shadow-2xl group text-primary rounded-2xl hover:shadow-3xl hover:scale-105">
                        <i class="text-xl fas fa-rocket group-hover:animate-pulse"></i>
                        <span class="text-lg">Comenzar Ahora</span>
                        <i class="text-sm transition-transform fas fa-arrow-right group-hover:translate-x-1"></i>
                    </a>
                    <a href="#"
                       class="inline-flex items-center justify-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 border-2 border-white bg-white/10 backdrop-blur-sm rounded-2xl hover:bg-white/20">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Solicitar Demo</span>
                    </a>
                </div>
                <p class="mt-6 text-sm text-white/70">
                    * Prueba gratuita por 14 días. Sin compromiso.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer mejorado -->
    <footer class="py-12 text-white bg-gray-900">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 mb-8 md:grid-cols-4">
                <!-- Columna 1: Info con logo -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="p-2 bg-gradient-to-br from-primary to-secondary rounded-xl">
                            <i class="text-xl text-white fas fa-utensils"></i>
                        </div>
                        <h3 class="text-xl font-bold">SaborGestion</h3>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Sistema integral de gestión para restaurantes que transforma tu negocio gastronómico.
                    </p>
                </div>
                
                <!-- Columna 2: Enlaces Rápidos -->
                <div>
                    <h4 class="mb-4 font-semibold">Enlaces Rápidos</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="transition-colors hover:text-primary">Inicio</a></li>
                        <li><a href="#features" class="transition-colors hover:text-primary">Características</a></li>
                        <li><a href="#" class="transition-colors hover:text-primary">Precios</a></li>
                        <li><a href="#" class="transition-colors hover:text-primary">Contacto</a></li>
                    </ul>
                </div>
                
                <!-- Columna 3: Soporte -->
                <div>
                    <h4 class="mb-4 font-semibold">Soporte</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="transition-colors hover:text-primary">Centro de Ayuda</a></li>
                        <li><a href="#" class="transition-colors hover:text-primary">Documentación</a></li>
                        <li><a href="#" class="transition-colors hover:text-primary">API</a></li>
                        <li><a href="#" class="transition-colors hover:text-primary">Estado del Sistema</a></li>
                    </ul>
                </div>
                
                <!-- Columna 4: Newsletter -->
                <div>
                    <h4 class="mb-4 font-semibold">Suscríbete</h4>
                    <p class="mb-3 text-sm text-gray-400">Recibe novedades y promociones</p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Tu email" class="flex-1 px-3 py-2 text-sm text-white bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-primary">
                        <button class="px-3 py-2 transition-colors rounded-lg bg-primary hover:bg-primary/80">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 mt-8 border-t border-gray-800">
                <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                    <p class="text-sm text-gray-400">
                        &copy; 2026 SaborGestion. Todos los derechos reservados.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-400 transition-colors hover:text-primary">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 transition-colors hover:text-primary">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 transition-colors hover:text-primary">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 transition-colors hover:text-primary">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Authentication Form (preservado) -->
        <form method="POST" class="hidden" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </footer>

    <!-- Smooth scroll para anclas -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>