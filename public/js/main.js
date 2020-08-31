/* eslint version:6 */
'use strict';

/* append overlay */
ui.overlay();

/* append loader */
// ui.createLoader();
document.body.onload = function(){
    const loaderWrapper = document.querySelector('.loader-wrapper');
    const preLoader = document.querySelector('.pre-loader');
    document.body.style.overflow = 'auto';
    if(loaderWrapper !== null ){
        setTimeout(function(){
            loaderWrapper.remove();
        }, 500)
    }
    if(preLoader !== null ){
        setTimeout(function(){
            preLoader.remove();
        }, 500)
    }
}

/* menu open */
const mobileMenu = document.querySelector('.mobile-menu');
const closeMenu = document.querySelector('.close-menu');
const overlay = document.querySelector('.overlay');
mobileMenu.addEventListener('click', menuOpen); 
closeMenu.addEventListener('click', menuOpen); 
overlay.addEventListener('click', menuOpen);
function menuOpen(e) {
    if (document.body.classList.contains('menu-open')) {
        document.body.classList.remove('menu-open');
        overlay.classList.remove('show');
    }
    else {
        document.body.classList.add('menu-open');
        overlay.classList.add('show');
    }
    e.preventDefault();
}

/* edit profile */
const editProfile = document.querySelector('.edit-profile');
if(editProfile !== null){
    let disableInputs = document.querySelectorAll("#personal-info-form .form-control"); 
    let disableRadios = document.querySelectorAll("#personal-info-form input[type='radio']"); 
    editProfile.onclick = function(e){
        // console.log('hey');
        for(let i=0; i<disableInputs.length; i++){
            if(disableInputs[i].hasAttribute('disabled')){
                disableInputs[i].removeAttribute('disabled');
                document.querySelector('#personal-info-form button').style.display = 'block';
                editProfile.textContent = "Cancel";
            }else{
                disableInputs[i].setAttribute('disabled', 'true');
                document.querySelector('#personal-info-form button').style.display = 'none';
                editProfile.textContent = "Edit Profile";
            }
        }
        for(let i=0; i<disableRadios.length; i++){
            if(disableRadios[i].hasAttribute('disabled')){
                disableRadios[i].removeAttribute('disabled');
            }else{
                disableRadios[i].setAttribute('disabled', 'true');
            }
        }
        e.preventDefault();
    }
}

/* remove items */
const removeItems = document.querySelectorAll('.remove-item');
removeItems.forEach(function(removeItem){
    removeItem.onclick = function(e){
        //delete data
        ui.deleteData(e.target);
        e.preventDefault();
    }
})


/* show filter option */
const filterOptions = document.querySelectorAll('.filter-option');
if(filterOptions !== null){
    filterOptions.forEach(function(filterOption){
        filterOption.onclick = function(e){
            if(e.target.parentElement.classList.contains('open')){
                e.target.parentElement.classList.remove('open');
            }else{
                e.target.parentElement.classList.add('open');
            }
            e.preventDefault();
        }
    });
};

/* mobile filter open */
const filterPlant = document.querySelector('.filter-list');
const closePlants = document.querySelectorAll('.filter-plants-wrapper .close');
if(filterPlant !== null && closePlants !== null){
    filterPlant.addEventListener('click', filterOpen); 
    closePlants.forEach(function(closePlant){
        closePlant.addEventListener('click', filterOpen); 
    })
    function filterOpen(e) {
        if (document.body.classList.contains('filter-open')) {
            document.body.classList.remove('filter-open');
        }
        else {
            document.body.classList.add('filter-open');
        }
        e.preventDefault();
    }

}

/* add/less quantity */
const quantityFleids = document.querySelectorAll('.quantity-fleid');
if(quantityFleids !== null){
    quantityFleids.forEach(function(quantityFleid){
        quantityFleid.onclick = function(e){
            if(e.target.classList.contains('prev') && e.target.nextElementSibling.value > 1){
                e.target.nextElementSibling.value--;
            }

            if(e.target.classList.contains('next')){
                e.target.previousElementSibling.value++;
            }
            e.preventDefault();
        }
    })
}

/* jquery */
$(document).ready(function(){

    /* loader */
    // $('body > :not(".loader-wrapper")').wrapInner("<div class='site-wrapper'></div>");

    // $()

    /* slide content */
    // $('.slide-content').hide();
    // $('.slide-btn').removeClass('slide-open');
    
    $('.slide-btn').click(function(e){
        $(this).next().slideToggle();
        $(this).toggleClass('slide-open');
        e.preventDefault();
    });
    
    /* search container */
    $('.search_container_wrapper').hide();
    $('a[data-link="search"]').click(function(e){
        $('.search_container_wrapper').slideToggle();
        e.preventDefault();
    });
    $('.close-icon').click(function(){
        $('.search_container_wrapper').slideToggle();
    });
    
    /* open child menu */
    $('#mainNav .sub-menu').hide();
    $('.child-menu').click(function(){
        $(this).parent().next().slideToggle();
        $(this).parent().parent().toggleClass('child-open');
    });
    
    /* show my option */
    $('.add-address-form').hide();
    $('.my-option').click(function(){
        $('.my-account-wrapper').toggleClass('show');
    });
    $('.my-account-wrapper .close').click(function(){
        $('.my-account-wrapper').toggleClass('show');
    });

    /* add class to fix header */
    $("#back-to-top").hide();
    $(window).bind("load resize scroll", function() {
        if($(window).scrollTop() > 40){
            $("body").addClass('shrink-header');
            $("#back-to-top").fadeIn();
            $("#back-to-top").css("right", "1rem");
        }else{
            $("body").removeClass('shrink-header');
            $("#back-to-top").fadeOut();
            $("#back-to-top").css("right", "-100%");
        }
    })

    /* back to top */
    $("#back-to-top").click(function() {
        return $("body,html").animate({
            scrollTop: 0
        }, 1000)
    });

    /* sort option */
    $('.sort-options').hide();
    $('.sort-price').click(function(e){
        $('.sort-options').toggle();
        return false;
    })
    $(document).click(function(e) {
        $('.sort-options').hide();
    });
    $('.sort-price, .sort-options').click(function(e){
        e.stopPropagation();
    })

    /* rating */
    $('.rating-content, .slide-description, .slide-care-instruction').hide();
    $('.rating-content, .slide-description, .slide-care-instruction').hide();
    $('.rating-btn').click(function(e){
        $(this).parent().next().slideToggle();
        e.preventDefault();
    })


})