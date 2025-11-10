<?php

return [
    'default' => [
        'font_dir' => base_path('storage/fonts/'),
        'font_cache' => base_path('storage/fonts/'),
        'temp_dir' => base_path('storage/temp/'),
        'chroot' => base_path(),
        'log_dir' => base_path('storage/logs/'),
        'pdf_backend' => 'CPDF',
        'debugPng' => false,
        'debugJPEG' => false,
        'debugJavaScript' => false,
        'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,
        'isFontSubsettingEnabled' => true,
        'defaultPaperSize' => 'A4',
        'defaultFont' => 'sans-serif',
        'dpi' => 96,
        'enable_remote' => true,
    ],
];