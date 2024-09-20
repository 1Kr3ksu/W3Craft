<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin viev</title>
    <link rel="stylesheet" href="ADMIN.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<section class="navi">

    <div id="NAVI">
    <a href="index.php"><i class="fas fa-home"></i> Powrót</a>
<a href="users.php"><i class="fas fa-users"></i> Zarządzanie użytkownikami</a>
        <a href="content.php"><i class="fas fa-file-alt"></i> Zarządzanie treściami</a>
        <a href="categories.php"><i class="fas fa-list"></i> Zarządzanie kategoriami</a>
        <a href="media.php"><i class="fas fa-photo-video"></i> Zarządzanie mediami</a>
        <a href="comments.php"><i class="fas fa-comments"></i> Zarządzanie komentarzami</a>
        <a href="orders.php"><i class="fas fa-shopping-cart"></i> Zarządzanie zamówieniami</a>
        <a href="stats.php"><i class="fas fa-chart-line"></i> Statystyki</a>
        <a href="settings.php"><i class="fas fa-cogs"></i> Ustawienia strony</a>
        <a href="ads.php"><i class="fas fa-bullhorn"></i> Zarządzanie reklamami</a>
</div>
</section>
<main>
    <!-- Sekcja z podsumowaniem statystyk -->
    <section class="dashboard-stats">
        <div class="stats-grid">

        
            <div class="stat-item">
                <h3>Użytkownicy</h3>
                <p>1200</p>
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-item">
                <h3>Nowe zamówienia</h3>
                <p>35</p>
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="stat-item">
                <h3>Komentarze</h3>
                <p>15</p>
                <i class="fas fa-comments"></i>
            </div>
            <div class="stat-item">
                <h3>Wyświetlenia strony</h3>
                <p>56,000</p>
                <i class="fas fa-eye"></i>
            </div>
        </div>
    </section>
</main>
</body>
</html>