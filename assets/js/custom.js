/* Prealoader disable */
$(document).ready(function(){
    setTimeout(function(){
        $('.pageLoader').addClass('pageLoader--disable');
    }, 500);
});
/* Navbar clone height */
$(document).ready(function(){
    var height = $('.navbar').outerHeight();
    if(height){
        $('.navbar-clone').css('height', height);
    }
});

/* Anchor */
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 50
    }, 500);
});

/* Checkbox/radio engine */
$(document).ready(function(){
    $('.checkboxEngine').on('click', function(){
        if($(this).is(":checked")){
            $(this).parent().addClass('checked');

            if($(this).attr('name') == 'daneOsobowecheckbox'){
                $('.invoice').slideDown();
            }
        }else if($(this).is(":not(:checked)")){
            $(this).parent().removeClass('checked');

            if($(this).attr('name') == 'daneOsobowecheckbox'){
                $('.invoice').slideUp();
            }
        }
    });
    $('.radioEngine').on('click', function(){
        var radioGroupName = $(this).attr('name');
        if($(this).is(":checked")){
            $('input[name="' + radioGroupName + '"]').parent().removeClass('checked');
            $(this).parent().addClass('checked');
        }
    });
});

/* Accordion engine */
$(document).ready(function(){
    var firstAcc = $('.cart__column').find('.cart__accordion').first();
    firstAcc.find('.accordion__heading').toggleClass('active');
    firstAcc.find('.accordion__contentWrap').slideToggle();

    $('.accordion__heading').on('click', function(){
        $(this).toggleClass('active');
        $(this).parent().find('.accordion__contentWrap').slideToggle();
    });
});

function changePrice(value){
    if($(window).width() > 991){
        var currentPrice = $('.cartSummary__content').attr('price');
        var element = $('.cartSummary__content').find('.total').find('span.value');
        var price = '';

        var sum = parseFloat(currentPrice) + parseFloat(value);

        console.log(currentPrice);
        sum.toString();
        if(Number.isInteger(sum)){
            var price = sum.toFixed(2);
        }else{
            var price = sum.toString();
        }
        var insert = price.split('.');

        $('.cartSummary__content').attr('price', price);
        element.trigger('change');
        setTimeout(function(){
            element.html(insert[0] + '<small>' + insert[1] + '</small>');
        }, 800);
    }else{
        var currentPrice = $('.cartValue').attr('price');
        var element = $('.cartValue').find('.value');
        var price = '';

        var sum = parseFloat(currentPrice) + parseFloat(value);

        console.log(currentPrice);
        sum.toString();
        if(Number.isInteger(sum)){
            var price = sum.toFixed(2);
        }else{
            var price = sum.toString();
        }
        var insert = price.split('.');

        $('.cartValue').attr('price', price);
        element.trigger('change');   
        setTimeout(function(){
            element.html(insert[0] + '<small>' + insert[1] + '</small>');
        }, 800);
    }
}

/* Tabs change engine */
$(document).ready(function(){
    var tab = $('.switchTabs').find('.tab');

    $(tab).on('click', function(){
        var data = $(this).attr('data');
        var priceadd = $(this).attr('priceadd');
        var parent = $(this).parent().parent();

        if(priceadd){
            changePrice(priceadd);
        }

        $(this).parent().find('.tab').removeClass('selected');
        $(this).addClass('selected');

        $(parent).find('.contentShow').not('[data="' + data + '"]').removeClass('visible');
        setTimeout(function(){
            $(parent).find('.contentShow').not('[data="' + data + '"]').removeClass('ready');
        }, 300);

        setTimeout(function(){
            $(parent).find('.contentShow[data="' + data +'"]').addClass('ready');
        }, 300);
        setTimeout(function(){
            $(parent).find('.contentShow[data="' + data +'"]').addClass('visible');
        }, 600);
    });
});

/* Cart value change animation */
$(document).ready(function(){
    var bar = $('.cartValue');
    var price = bar.find('span.value');

    price.on('change', function(){
        bar.addClass('cartValue--changed');
        setTimeout(function(){
            bar.removeClass('cartValue--changed');
        }, 800);
    });
});
$(document).ready(function(){
    var element = $('.cartSummary__content').find('.total');
    var price = element.find('span.value');

    price.on('change', function(){
        element.addClass('total--changed');
        setTimeout(function(){
            element.removeClass('total--changed');
        }, 800);
    });
});

/* Faq engine */
$(document).ready(function(){
    var question = $('.question');

    question.on('click', function(){
        $('.question').not(this).removeClass('question--open').addClass('question--close');
        $('.question').not(this).find('.question__answer').slideUp();
        $(this).toggleClass('question--close question--open');
        $(this).find('.question__answer').slideToggle();

        var offsetTop = $(this).offset().top;
        console.log(offsetTop);
        $('html, body').animate({
            scrollTop: offsetTop - 200,
        }, 500);
    });
});


/* Food Tile Gallery */
$(document).ready(function(){
    $('.foodTile__gallery').slick({
        arrows: true,
        dots: true,
        adaptiveHeight: true,
    });
});

/* Food modal */
$(document).ready(function(){
    
    var modal = $('.foodModal');
    var closeBtn = $('.foodModal').find('.closeFoodModal');
    var openstatus;

    $('.openFoodModal').on('click', function(){
        var dataid = $(this).attr('data');

        $('body').addClass('noscroll');

        modal.find('.foodModal__content[data="' + dataid + '"]').addClass('foodModal__content--active');
        modal.addClass('foodModal--ready');
        setTimeout(function(){
            modal.addClass('foodModal--active');
            openstatus = true;
        }, 300);

        setTimeout(function(){
            $(document).mouseup(function(e){
                var modalWrap = modal.find('.foodModal__wrap');
                if (!modalWrap.is(e.target) && modalWrap.has(e.target).length === 0 && openstatus == true){
                    $('body').removeClass('noscroll');
                    modal.removeClass('foodModal--active');
                    setTimeout(function(){
                        modal.removeClass('foodModal--ready');
                        modal.find('.foodModal__content[data="' + dataid + '"]').removeClass('foodModal__content--active');
                        openstatus = false;
                    }, 300);
                }
            });
        }, 1000);

        $('.foodModal__content[data="' + dataid + '"] .gallery[data="' + dataid + '"]').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            adaptiveHeight: true,
            variableWidth: true,
            infinite: true,
        });
        
        $(closeBtn).on('click', function(){
            $('body').removeClass('noscroll');
            modal.removeClass('foodModal--active');
            setTimeout(function(){
                modal.removeClass('foodModal--ready');
                modal.find('.foodModal__content[data="' + dataid + '"]').removeClass('foodModal__content--active');
                openstatus = false;
            }, 300);
        });
    });

    var accordionpos = $('.foodModal__content').find('.accordion__element');
    accordionpos.on('click', function(){
        $('.foodModal__content').find('.accordion__element').not(this).removeClass('accordion__element--open').addClass('accordion__element--close');
        $('.foodModal__content').find('.accordion__element').not(this).find('.content').slideUp();
        $(this).toggleClass('accordion__element--close accordion__element--open');
        $(this).find('.content').slideToggle();
    });
});

/* form options with desc */
$(document).ready(function(){

    $('.dogSelector').each(function(){
        var option = $(this).find('.dogSelector__option');
        var desc = $(this).find('.dogSelector__desc');
        var arrow = desc.find('.arrow');
        var arrowWidth = arrow.width() / 2;
    
        option.on('click', function(){
            var elem = $(this);
            var position = elem.offset().left - elem.parent().offset().left;

            if($(window).width() > 767){
                var width = elem.width() / 2;
            }else{
                var width = elem.width() * 0.7 / 2;
            }

            arrow.css('left', position + width - arrowWidth);
            arrow.addClass('active');

            var title = $(this).attr('optiontitle');
            var description = $(this).attr('optiondesc');

            desc.find('h3').text(title);
            desc.find('p').text(description);
        });
        $('.dogSelector__option.default').find('.option').trigger('click');   
    });
});

/* form range slider */
$(document).ready(function(){
    $('.dogSlide').each(function(){
        var dogsImage = $(this).find('.dogSlide__dog');
        var slider = $(this).find('.dogRange');
        var valueInput = $(this).find('.dogSlide__input').find('input');

        slider.slider({
            range: "min",
            value: 1,
            min: 1,
            max: 50,
        });

        dogsImage.on('click', function(){
            var insertvalue = $(this).attr('insertvalue');
            valueInput.val(insertvalue).trigger('keyup');
        });
        slider.on('slide', function(event, ui){
            var slideValue = ui.value;
            $(valueInput).val(slideValue);
            $(dogsImage).each(function(){
                var rangeMin = $(this).attr('rangefrom');
                var rangeMax = $(this).attr('rangeto');

                if(slideValue >= rangeMin && slideValue <= rangeMax){
                    $(this).addClass('active');
                }else{
                    $(this).removeClass('active');
                }
            })
        });
        slider.on('slidechange', function(event, ui){
            var slideValue = ui.value;
            $(dogsImage).each(function(){
                var rangeMin = $(this).attr('rangefrom');
                var rangeMax = $(this).attr('rangeto');

                if(slideValue >= rangeMin && slideValue <= rangeMax){
                    $(this).addClass('active');
                }else{
                    $(this).removeClass('active');
                }
            })
        });
        valueInput.on('keyup', function(){
            var weight = $(this).val();

            slider.find('.ui-slider-range-min').css('transition', 'ease .5s');
            slider.find('.ui-slider-handle').css('transition', 'ease .5s');

            slider.slider('value', weight);

            setTimeout(function(){
                slider.find('.ui-slider-range-min').css('transition', 'none');
                slider.find('.ui-slider-handle').css('transition', 'none');
            }, 500);
        });
    });  
});

/* cart value bar cart.php mobile */
$(document).ready(function(){
    var bar = $('.cartValue__heading');
    var closebtn = $('.cartValue__content').find('.closebtn');

    bar.on('click', function(){
        $(this).parent().parent().toggleClass('cartValue--active');
    });
    closebtn.on('click', function(){
        $(this).parent().parent().parent().removeClass('cartValue--active');
    });
});