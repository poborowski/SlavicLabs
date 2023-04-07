
$('.slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
$('.sliderabout').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
});
$('.slideropinion').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: true
});



$('.sliderunlock').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: false
});


const counters = document.querySelectorAll('.valueanimated');
const speed = 200;

counters.forEach(counter => {
    const animate = () => {
        const value = +counter.getAttribute('akhi');
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 1);
        } else {
            counter.innerText = value;
        }

    }

    animate();
});




const navbar = document.querySelector('#wrapper-navbar');


const navbarOffset = 35;

window.addEventListener('scroll', function() {

  if (window.pageYOffset > navbarOffset) {

    navbar.classList.add('sticky');
  } else {

    navbar.classList.remove('sticky');
  }
});


function toggleIconHamburger() {
    const btn = document.querySelector(".navbar-toggler");
    if (btn) {
        const icon = document.querySelector(".togglerIcon");
      btn.addEventListener("click", function () {
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-times");
        document.body.classList.toggle("overlay-hover");
        document.body.classList.toggle("lockScroll");
      });
    }
  }




  function addChevronSubmenu(target) {
    jQuery(`<i class="fa fa-chevron-down show-dropdown"></i>`).appendTo(target);
    
    jQuery(target).find(".show-dropdown").on("click", function () {
        this.classList.toggle('fa-chevron-down')
        this.classList.toggle('fa-chevron-up')
        jQuery(target).find(".dropdown-menu").toggle("d-block");
    });
  }

  function dropDownMenu(){
      const linksDropDown = document.querySelectorAll('.header-site .menu-item-has-children');
      linksDropDown.forEach(link=>{
        addChevronSubmenu(link)
      })
  }

  jQuery(document).ready(function () {
    toggleIconHamburger();

    dropDownMenu()
  });


  

  const navbarToggler = document.querySelector('.navbar-toggler');
  const navbarNavDropdown = document.querySelector('#navbarNavDropdown');
  
  navbarToggler.addEventListener('click', () => {
    if (navbarNavDropdown.style.display === 'block') {
      navbarNavDropdown.style.display = 'none';
    } else {
      navbarNavDropdown.style.display = 'block';
    }
  });




// WYŚWIETLANIE KOSZYKA
const cartHeaderBtn = document.querySelector('.cartHeaderBtn');
const cart = document.querySelector('.cart');
const cartItems = document.querySelector('.cartItems');
const checkoutButton = document.querySelector('.checkoutButton');

const cartCloseBtn = document.querySelector('.cartCloseBtn');

cartHeaderBtn.addEventListener('click', function() {
    cart.classList.toggle('show'); 
});



cartCloseBtn.addEventListener('click', function() {
  cart.classList.remove('show'); 
});
function getCartItems() {
    fetch('/?wc-ajax=get_refreshed_fragments', {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            cartItems.innerHTML = ''; 

       
            Object.values(data.fragments).forEach(fragment => {
                if (fragment.selector === '.widget_shopping_cart_content') {
                    const div = document.createElement('div');
                    div.innerHTML = fragment.fragment;
                    const cartList = div.querySelector('.cart_list');
                    if (cartList) {
                        cartItems.appendChild(cartList);
                    }
                }
            });
        });
}

getCartItems(); 

checkoutButton.addEventListener('click', function() {
    location.href = '/checkout/'; 
});

// ZMIANA ONSALE TEKST
const onsaleSpans = document.querySelectorAll('.onsale');
onsaleSpans.forEach(span => {
    span.innerText = 'SAVE 25%';
});


function showOptions() {
  const subscriptionOptions = document.getElementById("subscriptionOptions");
  if (document.getElementById("subscription").checked) {
      subscriptionOptions.style.display = "block";
  } else {
      subscriptionOptions.style.display = "none";
  }
}
const creditCartRadio = document.getElementById("creditCartRadio");
const creditCardFields = document.getElementById("creditCardFields");

creditCartRadio.addEventListener("change", function() {
  if (creditCartRadio.checked) {
    creditCardFields.style.display = "block";
  } else {
    creditCardFields.style.display = "none";
  }
});