<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('edit-about'));
});

// Home > Contact
Breadcrumbs::register('contact', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('edit-contact'));
});

// Home > Works
Breadcrumbs::register('works', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Works', route('works'));
});


// Home > Works > [Work]
Breadcrumbs::register('work', function ($breadcrumbs, $work) {
    $breadcrumbs->parent('works');
    $breadcrumbs->push('edit '. $work->title, route('work', $work));
});


// Home > Works > Create Work
Breadcrumbs::register('create-work', function ($breadcrumbs) {
    $breadcrumbs->parent('works');
    $breadcrumbs->push('Create new work', route('create-work'));
});
