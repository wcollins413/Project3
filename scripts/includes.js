/*
           This file is to help include each of out navbars and scripts uniformly without having to change them all.
           Just change to your accurate directory
           Also ensures we have the same scripts loaded in the correct order.. (Including CSS files).
*/


// Create link elements for stylesheets
const styleLink1 = document.createElement('link');
styleLink1.rel = 'stylesheet';
styleLink1.href = '/class-env/pages/project/Project/css/style.css';
document.head.appendChild(styleLink1);

const styleLink2 = document.createElement('link');
styleLink2.rel = 'stylesheet';
styleLink2.href = '/class-env/pages/project/Project/css/u_style.css';
document.head.appendChild(styleLink2);


const bootstrapLink = document.createElement('link');
bootstrapLink.rel = 'stylesheet';
bootstrapLink.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
document.head.appendChild(bootstrapLink);

// Create script elements
const jqueryScript = document.createElement('script');
jqueryScript.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js';
document.body.appendChild(jqueryScript);

const bootstrapScript = document.createElement('script');
bootstrapScript.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';
document.body.appendChild(bootstrapScript);


$('head').append('<link crossorigin = "anonymous" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity = "sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" referrerpolicy = "no-referrer" rel = "stylesheet"/>');
/* Font Awesome ^ (I want it loaded before the navbar) */


/* Style Files) */

let $head = $('head');
$head.append('<link rel="stylesheet" href="/components/navbar/navbar.css">');


jQuery(function () {

    /*
            This file is to help include each of out navbars and scripts uniformly without having to change them all.
            Just change to your accurate directory
     */

    $.get('/components/navbar/navbar.html', function (data) {
        let navbarEl = document.getElementById('navbar') || document.getElementById('navbar-container');
        let $navbar = $(navbarEl);

        $navbar.html(data);

    }).fail(function (error) {
        console.error('Error loading navbar:', error);
    });


});