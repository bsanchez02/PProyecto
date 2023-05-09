{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>PProyecto</title>

    </head>
    <body class="antialiased"> --}}
        
        
<x-layouts.app>
        <div class="flex flex-col h-screen justify-center items-center">
            <a href="{{ route('MostrarTablas') }}">
                <button class="button block">
                    <span class="button_lg">
                        <span class="button_sl"></span>
                        <span class="button_text">Mostrar el contenido de ambas tablas</span>
                    </span>
                </button>
            </a>
            <button class="button block">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Mostrar el contenido global de la primera tabla</span>
                </span>
            </button>

            <button class="button block">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Reporte de personas por departamento</span>
                </span>
            </button>

            <button class="button block">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Ocupaciones por departamento</span>
                </span>
            </button>

            <button class="button block">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Comunidades lingüisticas por departamento</span>
                </span>
            </button>

            <button class="button block">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Reporte del nivel de estudio por departamento</span>
                </span>
            </button>
        </div>
        
    </body>
</x-layouts.app>
{{-- </html> --}}