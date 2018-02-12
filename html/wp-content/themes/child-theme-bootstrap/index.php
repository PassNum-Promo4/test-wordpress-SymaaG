<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<main id="main" class="site-main" role="main">
		<div class="">
		<h1 class="text-white"> Présentation </h1>
			<p class="acceuil text-white"> Développeur Web Junior </p>
			<ul class="bg-info">
				<li> Nom : Torval </li>
				<li> Prenom : Martial </li>
				<li> Age : 20 ans </li>
				<li> Lieu de naissance : Marseille </li>
				<li> Zone de recherche d'emploi : Marseille, Lille </li>
			</ul>
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
