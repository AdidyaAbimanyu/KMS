<?php
$units = [
    ["name" => "Direktorat Perdagangan", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 6L12 2L20 6M4 6V18H20V6M9 14H15M9 18H15M9 10H15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
    ["name" => "Direktorat Operasi", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12H21M3 12L6 9M3 12L6 15M21 12L18 9M21 12L18 15M9 21V14H15V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
    ["name" => "Direktorat Infrastruktur", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 21V3H21V21H3ZM8 21V14H16V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" transform="scale(1.1)"/></svg>'],
    ["name" => "Direktorat Perencanaan Strategis dan Sarana", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12H21M3 12L6 9M3 12L6 15M21 12L18 9M21 12L18 15M10 3H14V21H10V3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" transform="scale(1.05)"/></svg>'],
    ["name" => "Direktorat Keselamatan dan Keamanan", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7V17L12 22L22 17V7L12 2ZM12 12V16M12 8H12.01" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
    ["name" => "Direktorat Sumber Daya Manusia dan Urusan Umum", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7V17L12 22L22 17V7L12 2ZM9 12H15M12 12V16" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
    ["name" => "Direktorat Pengembangan Bisnis dan Hubungan Kelembagaan", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 21V3H21V21H3ZM7 10H17M7 14H14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
    ["name" => "Direktorat Keuangan dan Manajemen Risiko", "icon" => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 3V21H19V3H5ZM9 21V14H15V21M9 10H15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
];
?>

<div class="sidebar">
    <a href="#" class="menu-item active">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 6H20M4 6L12 2L20 6M4 6V18H20V6M9 14H15M9 18H15M9 10H15" stroke="black" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        Semua
    </a>
    <?php foreach ($units as $unit): ?>
        <a href="#" class="menu-item">
            <?php echo $unit["icon"]; ?>
            <?php echo $unit["name"]; ?>
        </a>
    <?php endforeach; ?>
</div>