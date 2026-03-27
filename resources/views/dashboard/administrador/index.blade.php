@extends('layouts.app')

@section('content')
<div class="min-h-screen px-3 py-4 bg-gradient-to-br from-amber-50/30 via-orange-50/20 to-rose-50/30 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <!-- Encabezado con tarjeta visual -->
        <div class="relative mb-6 overflow-hidden bg-white shadow-xl rounded-2xl">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-secondary/5 to-accent/5"></div>
            <div class="absolute top-0 right-0 hidden w-64 h-64 translate-x-32 -translate-y-32 rounded-full md:block bg-gradient-to-br from-primary/10 to-transparent blur-3xl"></div>
            
            <div class="relative px-5 py-6 sm:px-8 sm:py-10">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 p-2 shadow-lg bg-gradient-to-br from-primary to-secondary rounded-xl">
                                <i class="text-xl text-white fas fa-utensils sm:text-2xl"></i>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold tracking-tight text-transparent bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text sm:text-3xl lg:text-4xl">
                                    Dashboard Administrador
                                </h1>
                                <p class="flex items-center gap-2 mt-1 text-xs text-gray-500 sm:text-sm">
                                    <i class="text-[10px] fas fa-fire text-amber-500"></i>
                                    Panel de control central de SaborGestion
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="flex items-center gap-3 px-3 py-2 border border-gray-100 shadow-sm bg-gray-50/80 backdrop-blur-sm rounded-2xl">
                            <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-lg">
                                <i class="text-[10px] text-white fas fa-calendar-alt"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-[10px] font-medium tracking-wider text-gray-500 uppercase">Fecha actual</p>
                                <p class="text-xs font-semibold text-gray-800 sm:text-sm">{{ now()->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Badges de bienvenida -->
                <div class="flex flex-wrap gap-2 mt-6">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 text-[10px] font-medium rounded-full text-primary bg-primary/10">
                        <i class="fas fa-chart-line"></i>
                        En vivo
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 text-[10px] font-medium rounded-full text-secondary bg-secondary/10">
                        <i class="fas fa-store"></i>
                        Activo
                    </span>
                </div>
            </div>
        </div>

        <!-- Tarjetas de estadísticas - KPI Style -->
        <div class="grid grid-cols-1 gap-4 mb-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Ventas Totales -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white shadow-lg group rounded-2xl hover:shadow-xl">
                <div class="relative p-5">
                    <div class="flex items-start justify-between">
                        <div class="space-y-1">
                            <p class="text-[10px] font-semibold tracking-wider text-gray-400 uppercase">Ventas Totales</p>
                            <p class="text-2xl font-bold text-gray-800 sm:text-3xl">$0.00</p>
                            <div class="flex items-center gap-1">
                                <span class="px-1.5 py-0.5 text-[10px] font-medium text-green-600 bg-green-100 rounded-md">
                                    <i class="mr-0.5 fas fa-arrow-up"></i>0%
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-12 h-12 transition-transform duration-300 bg-primary/10 rounded-xl group-hover:scale-110">
                            <i class="text-xl fas fa-chart-line text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-secondary"></div>
            </div>

            <!-- Pedidos Hoy -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white shadow-lg group rounded-2xl hover:shadow-xl">
                <div class="relative p-5">
                    <div class="flex items-start justify-between">
                        <div class="space-y-1">
                            <p class="text-[10px] font-semibold tracking-wider text-gray-400 uppercase">Pedidos Hoy</p>
                            <p class="text-2xl font-bold text-gray-800 sm:text-3xl">0</p>
                            <p class="text-[10px] text-gray-500">Pendientes: <span class="font-bold text-amber-600">0</span></p>
                        </div>
                        <div class="flex items-center justify-center w-12 h-12 transition-transform duration-300 bg-secondary/10 rounded-xl group-hover:scale-110">
                            <i class="text-xl fas fa-shopping-cart text-secondary"></i>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-accent"></div>
            </div>

            <!-- Clientes -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white shadow-lg group rounded-2xl hover:shadow-xl">
                <div class="relative p-5">
                    <div class="flex items-start justify-between">
                        <div class="space-y-1">
                            <p class="text-[10px] font-semibold tracking-wider text-gray-400 uppercase">Clientes</p>
                            <p class="text-2xl font-bold text-gray-800 sm:text-3xl">0</p>
                            <p class="text-[10px] text-gray-500">Hoy: <span class="font-bold text-accent">0</span></p>
                        </div>
                        <div class="flex items-center justify-center w-12 h-12 transition-transform duration-300 bg-accent/10 rounded-xl group-hover:scale-110">
                            <i class="text-xl fas fa-users text-accent"></i>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-accent to-amber-500"></div>
            </div>

            <!-- Stock -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white shadow-lg group rounded-2xl hover:shadow-xl">
                <div class="relative p-5">
                    <div class="flex items-start justify-between">
                        <div class="space-y-1">
                            <p class="text-[10px] font-semibold tracking-wider text-gray-400 uppercase">Agotados</p>
                            <p class="text-2xl font-bold text-rose-600 sm:text-3xl">0</p>
                            <p class="text-[10px] text-gray-500">Requieren reposición</p>
                        </div>
                        <div class="flex items-center justify-center w-12 h-12 transition-transform duration-300 bg-rose-50 rounded-xl group-hover:scale-110">
                            <i class="text-xl fas fa-box-open text-rose-500"></i>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-rose-500 to-amber-500"></div>
            </div>
        </div>

        <!-- Secciones de Gráficos/Tablas -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Ventas Recientes -->
            <div class="overflow-hidden bg-white shadow-lg rounded-2xl">
                <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-primary/5 to-transparent">
                    <h2 class="font-bold text-gray-800">Ventas Recientes</h2>
                    <button class="text-xs font-medium text-primary hover:underline">Ver todas</button>
                </div>
                <div class="p-6 text-center">
                    <div class="py-8">
                        <i class="mb-3 text-4xl text-gray-200 fas fa-receipt"></i>
                        <p class="text-sm text-gray-500">No hay ventas registradas hoy</p>
                    </div>
                </div>
            </div>

            <!-- Productos Estrella -->
            <div class="overflow-hidden bg-white shadow-lg rounded-2xl">
                <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-secondary/5 to-transparent">
                    <h2 class="font-bold text-gray-800">Platos Estrella</h2>
                    <button class="text-xs font-medium text-secondary hover:underline">Ver todos</button>
                </div>
                <div class="p-6">
                    @if(isset($productosDestacados) && $productosDestacados->count() > 0)
                        <!-- Lista de productos -->
                    @else
                        <div class="py-8 text-center">
                            <i class="mb-3 text-4xl text-gray-200 fas fa-utensils"></i>
                            <p class="text-sm text-gray-500">Aún no hay platos destacados</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
