<?php
get_header();
?>

<div class="container text-center">
    <h1 class="error-title">Oops! Page Not Found</h1>
    <p class="error-message">The page you’re looking for doesn’t exist or has been moved.</p>
    
    <div class="search-box">
        <?php get_search_form(); ?>
    </div>

    <a href="<?php echo home_url(); ?>" class="home-button">Go Back Home</a>
</div>

<style>
.container {
    max-width: 600px;
    margin: 100px auto;
    text-align: center;
}
.error-title {
    font-size: 48px;
    font-weight: bold;
    color: #ff6b6b;
}
.error-message {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
}
.search-box {
    margin-bottom: 20px;
}
.home-button {
    display: inline-block;
    padding: 12px 24px;
    background-color: #0073aa;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
}
.home-button:hover {
    background-color: #005b8e;
}
</style>

<?php
get_footer();
?>
