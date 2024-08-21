<?php get_header();
/*
Template Name: our team members
*/
    $title = esc_html(get_field('our_team_members_title'))
?>

<main>
    <section class="section our-team-members">
        <div class="container container__our-team-members">
            <h1 class="our-team-members-title"><?= $title ?></h1>
            <div class="our-team-members-items" id="ourTeamMembersItems">
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>