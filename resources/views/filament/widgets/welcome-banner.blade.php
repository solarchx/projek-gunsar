<x-filament-widgets::widget>
    <div class="container-admin" style="position: relative; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 1rem; padding: 2rem 2rem 0 2rem; overflow: hidden; display: grid; grid-template-columns: 1fr auto; gap: 2rem; align-items: center; ">

        <!-- Dekorasi bulat -->
        <div style="position: absolute; border-radius: 50%; opacity: 0.1; background: white; width: 250px; height: 250px; top: -100px; right: -80px;"></div>
        <div style="position: absolute; border-radius: 50%; opacity: 0.15; background: white; width: 150px; height: 150px; bottom: -50px; right: 150px;"></div>

        <!-- Konten teks -->
        <div style="position: relative; z-index: 10; color: white;">
            <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">
                Selamat
                <span style="color: #01183fff;">
                    @php
                    $hour = now()->format('H');
                    $greeting = $hour < 12 ? 'Pagi' : ($hour < 15 ? 'Siang' : ($hour < 18 ? 'Sore' : 'Malam' ));
                        @endphp
                        {{ $greeting }},
                        </span><br>
                        {{ auth()->user()->name }}! 👋
            </h1>
            <p style="font-size: 1rem; line-height: 1.2; opacity: 0.95; max-width: 500px; margin-bottom: 1.5rem;">
                Kelola sistem manajemen rumah sakit dengan mudah, cepat, dan efisien melalui dashboard admin ini.
            </p>
        </div>
        <div style="position: relative; z-index: 10; display: flex; align-items: center; justify-content: center; margin-bottom: 0; padding-bottom: 0;">
            <img src="./assets/img/admin.png" alt="" width="200">
        </div>
    </div>

    <style>
        @media (max-width: 768px) {
            .container-admin {
                grid-template-columns: 1fr !important;
                text-align: center;
            }
        }
    </style>
</x-filament-widgets::widget>